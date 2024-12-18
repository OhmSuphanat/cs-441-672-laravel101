<x-layouts.main title="About">
    <div class="as-flex-col h-screen mt-16">
        <div class="as-flex-row justify-center">
            <div class="grid grid-rows sm:grid-cols-[1fr_1fr] bg-gray-800 text-white rounded-xl shadow-lg
        shadow-black lg:max-w-[70%]">
                <section class="as-flex-col justify-evenly items-center m-8 gap-8">
                    <img src="{{ url('/images/profile-image.jpg') }}" class="object-cover rounded-full w-64 h-64
                border-4 border-white transition-[33ms] hover:scale-110 hover:border-black"><div class="as-flex-col items-center gap-4">
                        <h1 class="text-3xl font-semibold text-center">{{ $profile['name'] }}</h1>
                        <h2 class="text-2xl text-gray-200 text-center">{{ $profile['position'] }}</h2>
                    </div>
                </section>
                <section class="as-flex-col sm:justify-center sm:m-8 ml-0 gap-8 p-4 sm:p-0">
                    <section class="as-flex-col justify-evenly gap-4">
                        <h1 class="text-2xl font-semibold">About Me</h1>
                        <p class="text-xm text-gray-200">{{ $profile['aboutMe'] }}</p>
                    </section>
                    <section class="as-flex-col justify-evenly gap-4 max-sm:h-[30%] mb-8 sm:mb-0">
                        <h1 class="text-2xl font-semibold">Skills</h1>
                        <div class="as-flex-col flex-wrap justify-start items-center h-full gap-4 text-black sm:flex-row">
                            @foreach($profile['skills'] as $skill)
                                <span class="bg-white p-2 pl-4 pr-4 rounded-3xl transition-[33ms] hover:scale-110
                            hover:bg-black hover:text-white">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </section>
                    <section class="as-flex-col justify-evenly gap-4">
                        <h1 class="text-2xl font-semibold">Contact Information</h1>
                        <div class="as-flex-col gap-2">
                            <div class="as-flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                <span class="text-xm text-gray-200">{{ $profile['email'] }}</span>
                            </div>
                            <div class="as-flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <span class="text-xm text-gray-200">{{ $profile['phoneNumber'] }}</span>
                            </div>
                            <div class="as-flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xm text-gray-200">{{ $profile['address'] }}</span>
                            </div>
                            <div class="as-flex-row items-center">
                                <svg height="32" aria-hidden="true" viewBox="0 0 24 24" version="1.1" width="32" data-view-component="true" class="h-5 w-5 mr-2 text-white bg-white rounded-full">
                                    <path d="M12.5.75C6.146.75 1 5.896 1 12.25c0 5.089 3.292 9.387 7.863 10.91.575.101.79-.244.79-.546 0-.273-.014-1.178-.014-2.142-2.889.532-3.636-.704-3.866-1.35-.13-.331-.69-1.352-1.18-1.625-.402-.216-.977-.748-.014-.762.906-.014 1.553.834 1.769 1.179 1.035 1.74 2.688 1.25 3.349.948.1-.747.402-1.25.733-1.538-2.559-.287-5.232-1.279-5.232-5.678 0-1.25.445-2.285 1.178-3.09-.115-.288-.517-1.467.115-3.048 0 0 .963-.302 3.163 1.179.92-.259 1.897-.388 2.875-.388.977 0 1.955.13 2.875.388 2.2-1.495 3.162-1.179 3.162-1.179.633 1.581.23 2.76.115 3.048.733.805 1.179 1.825 1.179 3.09 0 4.413-2.688 5.39-5.247 5.678.417.36.776 1.05.776 2.128 0 1.538-.014 2.774-.014 3.162 0 .302.216.662.79.547C20.709 21.637 24 17.324 24 12.25 24 5.896 18.854.75 12.5.75Z"></path>
                                </svg>
                                <a href="{{ $profile['github']['url'] }}" target="_blank">
                                    <abbr title="{{ $profile['github']['url'] }}" class="no-underline">
                                        {{ $profile['github']['name'] }}
                                    </abbr>
                                </a>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</x-layouts.main>
