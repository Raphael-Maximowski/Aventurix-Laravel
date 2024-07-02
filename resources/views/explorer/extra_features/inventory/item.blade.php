<x-header_info>
    <x-slot:heading>New Item</x-slot:heading>
</x-header_info>

<div class="main">
    <form method="post" action="/explorers/{{$explorer->id}}/inventory">
        @csrf
        <div class="sm:col-span-4" style="margin-bottom:30px">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name Item:</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="How can we Call your Item">
            </div>
            @error('name')
            <p class="warning">{{ $message }}</p>
            @endError
        </div>
        </div>
        <div class="sm:col-span-4">
        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price Item:</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="price" id="price" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="How much does it cost">
                </div>
                @error('price')
                <p class="warning">{{ $message }}</p>
                @endError
            </div>
        </div>
        <div class="button">
              <div class="mt-6 ml-30 flex items-center justify-start gap-x-6">
              <a href="/explorers" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
              </div>
          </div>
        </div> 
    </form>


<style>
    .main {
        margin: 0px 160px;
    }
    
    .warning{
      margin-top: 10px;
      font-size:14px;
      color: red;
      font-style: italic;
    }
</style>