<x-header_info>
    <x-slot:heading>Insert Last Location(s)</x-slot:heading>
</x-header_info>
<script>

</script>
<div class="main">
    <form method="post" action="/explorers/{{$explorer->id}}">
      @csrf
        <div class="sm:col-span-4">
                              <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
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
                                  <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
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
                                  <label for="latitude" class="block text-sm font-medium leading-6 text-gray-900">Latitude</label>
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
                                  <label for="longitude" class="block text-sm font-medium leading-6 text-gray-900">Longitude</label>
                                  <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input type="text" name="longitude" id="longitude" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="130.26760580837066">
                                    </div>
                                    @error('longitude')
                                    <p class="warning">{{ $message }}</p>
                                    @endError
                                  </div>
                                </div>
                                <div class="sm:col-span-4">
                                  <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                  <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                      <input type="text" name="date" id="date" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="2024-06-27">
                                    </div>
                                    @error('name')
                                    <p class="date">{{ $message }}</p>
                                    @endError
                                  </div>
                                </div>
                                <div class="button">
          <div class="mt-6 ml-30 flex items-center justify-start gap-x-6">
            <a href="/explorers/{{$explorer->id}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>
      </div>
    </form>

</div>

<style>
         .main {
        margin: 0px 160px;
        font-size: 18px;
    }
    .warning{
      margin-top: 10px;
      font-size:14px;
      color: red;
      font-style: italic;
    }
</style>