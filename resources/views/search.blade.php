<x-layouts.app>
    <section x-data="{ searchType: 'number', searchQuery: '' }"
             class="w-full mx-5 md:w-1/2 relative">
        @forelse($contacts as $contact)
            <section class="border border-gray-200 rounded-lg shadow p-4 mb-5">
                <div class="flex justify-between">
                    <div class="flex gap-4">
                        <img src="{{ Vite::asset('resources/svg/user.svg') }}" class="w-10 h-10" alt="user">
                        <div>
                            <h1 class="font-bold text-red-600">{{ $contact->name }}</h1>
                            <p class="text-gray-600">{{ $contact->number }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button @click="navigator.clipboard.writeText('{{ $contact->number }}')"
                                class="text-sm text-white font-medium bg-gray-500 rounded-lg
                                           hover:bg-red-600 focus:outline-none p-2 px-5">
                            <img src="{{ Vite::asset('resources/svg/clipboard.svg') }}" class="fill-white w-6 h-6"
                                 alt="copy">
                        </button>
                    </div>
                </div>
            </section>
        @empty
            <div class="grid place-items-center min-h-[calc(50vh-32px)]">
                <div class="flex gap-2 justify-center">
                    <img src="{{ Vite::asset('resources/svg/cross.svg') }}" class="fill-white w-6 h-6"
                         alt="copy">
                    {{ __('No Contacts Found') }}
                </div>
            </div>
        @endforelse
    </section>
</x-layouts.app>
