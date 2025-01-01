<x-layouts.main title="">
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <h2 class="py-2 px-4 text-center font-bold text-2xl uppercase bg-pink-100">
            Create New Artist
        </h2>
        <div class="px-2 py-2">
            <form action="{{ route('artists.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-600">Artist Name</label>
                    <x-text-input type="text" id="name" name="name" autocomplete="off"
                                  placeholder="Put in artist name"
                                  class="border border-gray-300 shadow p-3 w-full rounded mb-"></x-text-input>
                </div>
                <button type="submit" class="block mx-auto bg-blue-500 text-white font-bold px-4 py-2 rounded-lg">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-layouts.main>