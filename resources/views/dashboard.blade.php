<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <x-welcome />
      </div>
    </div>
  </div>
  <div>
    <!--
    <div class="py-12"></div>
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
        <table class="table-fixed w-full">
          <thead>
            <tr>
              <th class="px-4 py-2">#</th>
              <th class="px-4 py-2">producto</th>
              <th class="px-4 py-2">cantidad</th>
              <th class="px-4 py-2">precio</th>
              <th class="px-4 py-2">marca</th>
              <th class="px-4 py-2">fecha_vencimiento</th>
              <th class="px-4 py-2">image</th>
              <th class="px-4 py-2">estado_product</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">ariel</td>
              <td class="text-center">50</td>
              <td class="text-center">4</td>
              <td class="text-center">unilever</td>
              <td class="text-center">24-05-25</td>
              <td><img class="object-center md:w-8 mx-auto" src="https://images.ctfassets.net/bvibm9frbh6a/YhgpsitXmp4n9AzXdU0y1/7cf9905ab93f0d81f7e9bbae8a3a1959/Ariel_Latam_Product_Listing_Page_Ariel_Doble_Poder_1kg.png"></img></td>
              <td class="text-center">
                <label class="relative inline-flex items-center cursor-pointer items-center">
                  <input type="checkbox" value="" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td class="text-center">ola</td>
              <td class="text-center">25</td>
              <td class="text-center">10</td>
              <td class="text-center">unilever</td>
              <td class="text-center">12-04-26</td>
              <td><img class="object-center md:w-16 mx-auto" src="https://cdn.shopify.com/s/files/1/0368/1363/5716/products/7775000007894_590x590.jpg?v=1671212069"></img></td>
              <td class="text-center">
                <label class="relative inline-flex items-center cursor-pointer items-center">
                  <input type="checkbox" value="" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
-->
</x-app-layout>