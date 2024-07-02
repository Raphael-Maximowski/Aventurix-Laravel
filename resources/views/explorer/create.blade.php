<x-header>
    <x-slot:heading>Register Your Explorer</x-slot:heading>
</x-header>

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<script src="https://cdn.tailwindcss.com"></script>
<div class="main">
    <form method="post" action="/explorers">
    @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Set Up Some Informations</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">These informations will be displayed publicly so be careful what you share.</p>
        </div>
      </div>

      <div class="flex">
        <div class="b1">
                    <div class="sm:col-span-4">
                      <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="first_name" id="first_name"class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Raphael">
                        </div>
                        @error('first_name')
                        <p class="warning">{{ $message }}</p>
                        @endError
                      </div>
                    </div>
                    <div class="sm:col-span-4">
                      <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="last_name" id="last_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Maximowski">
                        </div>
                        @error('last_name')
                        <p class="warning">{{ $message }}</p>
                        @endError
                      </div>
                    </div>
                    <div class="sm:col-span-4">
                      <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="age" id="age"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="25">
                        </div>
                        @error('age')
                        <p class="warning">{{ $message }}</p>
                        @endError
                      </div>
                    </div>
                </div>
        <div class="b2">
        <div class="sm:col-span-4">
                      <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Actual City</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="city" id="city"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Guarapuava">
                        </div>
                        @error('city')
                        <p class="warning">{{ $message }}</p>
                        @endError
                      </div>
                    </div>
                    <div class="sm:col-span-4">
                          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Actual Country</label>
                          <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input type="text" name="country" id="country" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Brasil">
                            </div>
                            @error('country')
                            <p class="warning">{{ $message }}</p>
                            @endError
                          </div>
                        </div>

                        <div class="sm:col-span-4">
                          <label for="latitude" class="block text-sm font-medium leading-6 text-gray-900">Actual Latitude</label>
                          <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input type="text" name="latitude" id="latitude" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="-79.47584169557379">
                            </div>
                            @error('latitude')
                            <p class="warning">{{ $message }}</p>
                            @endError
                          </div>
                        </div>

                        <div class="sm:col-span-4">
                          <label for="longitude" class="block text-sm font-medium leading-6 text-gray-900">Actual Longitude</label>
                          <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input type="text" name="longitude" id="longitude" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="130.26760580837066">
                            </div>
                            @error('longitude')
                            <p class="warning">{{ $message }}</p>
                            @endError
                          </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
        </div>
      </div>
    
      <div class="button">
          <div class="mt-6 ml-30 flex items-center justify-start gap-x-6">
            <a href="/explorers"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>
      </div>
    </form>
     
</div>

<style>
    .main {
        margin: 0px 160px;
    }

    .flex {
        display: flex;
    }

    .b1{
        width: 50vw;
    }
    .b2{
        width: 50vw;
    }

    .button {
        margin: 0px 160px;
    }
    .warning{
      margin-top: 6px;
      font-size:14px;
      color: red;
      font-style: italic;
    }
</style>

