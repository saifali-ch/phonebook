<x-layouts.app>
    <section x-data="{ searchType: 'number', searchQuery: '' }"
             class="border border-gray-200 rounded-lg shadow p-4 w-full mx-5 md:w-1/2 h-fit">
        <form action="{{ route('search') }}">
            {{-- Search bar --}}
            <div class="flex mb-6">
                <button type="submit"
                        class="text-sm text-white font-medium bg-red-600 ltr:rounded-l-lg rtl:rounded-r-lg
                                       border border-red-600 hover:bg-red-800 focus:outline-none p-2 px-10">
                    <img src="{{ Vite::asset('resources/svg/search.svg') }}" class="w-6 h-6" alt="search">
                </button>
                <input x-model="searchQuery"
                       type="search" name="query" required
                       :placeholder="searchType === 'number' ? '{{ __('Enter the number ...') }}' : '{{ __('Enter the name ...') }}'"
                       class="w-full text-sm text-gray-700 bg-red-50/20
                              ltr:rounded-r-lg rtl:rounded-l-lg placeholder:text-base placeholder-gray-600
                              border-2 border-red-100 focus:outline-none focus:border-red-300 focus:ring-0 p-2.5"/>
            </div>

            {{--Radio button--}}
            <div class="flex gap-10 justify-center">
                <div>
                    <input x-model="searchType" type="radio" id="number" name="type" value="number"
                           class="w-4 h-4 checked:bg-red-600 checked:hover:bg-red-600 focus:ring-red-600 cursor-pointer
                                  checked:active:bg-red-600 checked:focus:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-1">

                    <label for="number"
                           class="ms-2 text-base font-normal text-gray-600 cursor-pointer">{{ __('Search by number') }}
                    </label>
                </div>

                <div class="cursor-pointer">
                    <input x-model="searchType" type="radio" id="name" name="type" value="name"
                           class="w-4 h-4 checked:bg-red-600 checked:hover:bg-red-600 focus:ring-red-600 cursor-pointer
                                  checked:active:bg-red-600 checked:focus:bg-red-600 focus:bg-red-600 focus:outline-none focus:ring-1">

                    <label for="name"
                           class="ms-2 text-base font-normal text-gray-600 cursor-pointer">{{ __('Search by name') }}</label>
                </div>
            </div>
        </form>
    </section>
</x-layouts.app>
