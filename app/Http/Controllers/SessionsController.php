<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class SessionsController extends Controller
{
    protected $maxLoginAttempts = 3; // Número máximo de intentos de inicio de sesión permitidos
    protected $lockoutTime = 120; // Duración del bloqueo en segundos (600 segundos = 10 minutos)

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']//, 'string', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/']
        ], [
            'email.required' => '*Por favor complete el campo Correo electrónico',
            'email.email' => '*Ingrese una dirección de correo electrónico válida',
            'password.required' => '*Por favor complete el campo Contraseña',
            ///'password.string' => 'La contraseña debe ser una cadena de texto',
            //'password.min' => 'La contraseña debe tener al menos 8 caracteres de longitud',
            //'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un número'
        ]);

        $remember = false; //$request->filled('remember');//¿recordar mi contraseña?

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $this->validateLoginAttempts($user);

            if (Auth::attempt($credentials, $remember)) {
                $this->clearLoginAttempts($user);

                $request->session()->regenerate();
                
                if ($user->hasRole(Role::findByName('Admin'))) {
                    return redirect()->intended('/');
                } else{
                    return redirect()->intended('/pre-factura');
                }

            } else {
                $this->incrementLoginAttempts($user);
            }
        }

        throw ValidationException::withMessages([
            'message' => '*Tu Correo electrónico o Contraseña son incorrectos'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/login');
    }

    protected function validateLoginAttempts(User $user)
    {
        if ($user->login_attempts >= $this->maxLoginAttempts) {
            $lockoutExpiration = Carbon::parse($user->lockout_time);

            if ($lockoutExpiration->isFuture()) {
                $remainingTime = $lockoutExpiration->diffInSeconds(now());
                throw ValidationException::withMessages([
                    'message' => 'Tu cuenta ha sido bloqueada. Por favor, inténtalo mas tarde.' //de nuevo después de ' . $remainingTime . ' segundos.'
                ]);
            }else{
                $user->login_attempts = 0;
            }
        }
    }

    protected function incrementLoginAttempts(User $user)
    {
        $user->login_attempts += 1;

        if ($user->login_attempts >= $this->maxLoginAttempts) {
            $user->lockout_time = now()->addSeconds($this->lockoutTime);
            $user->save();
            throw ValidationException::withMessages([
                'message' => 'Tu cuenta ha sido bloqueada. Por favor, inténtalo mas tarde.' //de nuevo después de ' . $remainingTime . ' segundos.'
            ]);
        }

        $user->save();
    }

    protected function clearLoginAttempts(User $user)
    {
        $user->login_attempts = 0;
        $user->lockout_time = null;
        $user->save();
    }
}
