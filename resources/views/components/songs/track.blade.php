<li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">
                        {{ $slot }}.
                    </span>
    <div class="flex-1">
        <h3 class="text-lg font-medium text-gray-800">
            {{ $song['title'] }}
        </h3>
        <p class="text-gray-600 text-base">
            {{ $song['artist'] }}
        </p>
    </div>
    <span class="text-gray-400">
                        {{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}
                    </span>
</li>
