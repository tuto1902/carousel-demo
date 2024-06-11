<x-app-layout>
    <main class="container flex items-center justify-center mx-auto pt-14 text-center">
        <x-carousel::carousel loop="true" orientation="horizontal">
            <x-carousel::carousel.slide>
                <div class="flex items-center justify-center aspect-square p-6">
                    <span class="text-4xl font-semibold">
                        1
                    </span>
                </div>
            </x-carousel::carousel.slide>
            <x-carousel::carousel.slide>
                <div class="flex items-center justify-center aspect-square p-6">
                    <span class="text-4xl font-semibold">
                        2
                    </span>
                </div>
            </x-carousel::carousel.slide>
            <x-carousel::carousel.slide>
                <div class="flex items-center justify-center aspect-square p-6">
                    <span class="text-4xl font-semibold">
                        3
                    </span>
                </div>
            </x-carousel::carousel.slide>
        </x-carousel::carousel>
    </main>
</x-app-layout>