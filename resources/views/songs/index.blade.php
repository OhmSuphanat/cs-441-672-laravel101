<x-layouts.main title="Songs">
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16 scale-75 sm:scale-90 md:scale-95
    lg:scale-100 xl:scale-100 transition-all ease-in duration-[33ms]">
        <div class="as-flex-row gap-8 100 py-2 px-4 bg-[rgb(80,56,160)] bg-gradient-to-b from-transparent to-black/50 bg-noise">
            <div class="cover-image-container">
                <img aria-hidden="false" draggable="false" loading="eager" src="https://misc.scdn.co/liked-songs/liked-songs-300.jpg"
                     alt="Liked Songs" class="cover-image"
                     srcset="https://misc.scdn.co/liked-songs/liked-songs-300.jpg 150w, https://misc.scdn.co/liked-songs/liked-songs-300.jpg 300w"
                     sizes="(min-width: 1280px) 232px, 192px">
            </div>
            <div class="as-flex-col items-start justify-around text-white">
                <h2 class="text-xl">Playlist</h2>
                <h1 class="text-4xl font-bold">
                    {{ $title }}
                </h1>
                <div class="as-flex-row justify-start gap-1 text-center items-center">
                    <h2 class="font-semibold text-xl">User</h2>
                    <h2 class="text-[#FFFFFFB3] text-4xl">&#183;</h2>
                    <h2 class="text-[#FFFFFFB3] text-xl">{{count($songs)}} songs</h2>
                </div>
            </div>

        </div>
        <div class="border-b-transparent box-content h-9 m-0 p-0 sticky z-20">
            <div class="playlist-header">
                <div class="as-flex-row justify-self-end items-center">
                    <div>#</div>
                </div>
                <div class="as-flex-row items-center">
                    <div>
                        <div class="as-flex-row justify-center items-center bg-transparent border-none">
                            <span>Title</span>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="as-flex-row items-center justify-end">
                    <div class="as-flex-row justify-center items-center bg-transparent mr-[var(--tracklist-header-margin-inline-end,32px)]">
                        <svg data-encore-id="icon" role="img" aria-hidden="true" viewBox="0 0 16 16"
                        class="fill-current w-4 h-4">
                            <path d="M8 1.5a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"></path>
                            <path d="M8 3.25a.75.75 0 0 1 .75.75v3.25H11a.75.75 0 0 1 0 1.5H7.25V4A.75.75 0 0 1 8 3.25z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <ul class="divide-y divide-gray-200">
            @foreach ($songs as $song)
                <x-songs.track :song="$song">
                    {{ $loop->iteration }}
                </x-songs.track>
            @endforeach
        </ul>
    </div>
</x-layouts.main>
