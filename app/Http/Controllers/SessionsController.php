<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SessionsController extends Controller
{
    protected $maxLoginAttempts = 3; // Número máximo de intentos de inicio de sesión permitidos
    protected $lockoutTime = 99999999; // Duración del bloqueo en segundos (600 segundos = 10 minutos)

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $remember = true; //$request->filled('remember');

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $this->validateLoginAttempts($user);

            if (Auth::attempt($credentials, $remember)) {
                $this->clearLoginAttempts($user);

                $request->session()->regenerate();
                return redirect()->to('/');
            } else {
                $this->incrementLoginAttempts($user);
            }
        }

        throw ValidationException::withMessages([
            'message' => '*Correo y/o contraseña no válidos'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    protected function validateLoginAttempts(User $user)
    {
        if ($user->login_attempts >= $this->maxLoginAttempts) {
            $lockoutExpiration = Carbon::parse($user->lockout_time);

            if ($lockoutExpiration->isFuture()) {
                $remainingTime = $lockoutExpiration->diffInSeconds(now());
                throw ValidationException::withMessages([
                    'message' => 'Tu cuenta ha sido bloqueada. Por favor, inténtalo de nuevo después de ' . $remainingTime . ' segundos.'
                ]);
            }
        }
    }

    protected function incrementLoginAttempts(User $user)
    {
        $user->login_attempts += 1;

        if ($user->login_attempts >= $this->maxLoginAttempts) {
            $user->lockout_time = now()->addSeconds($this->lockoutTime);
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
