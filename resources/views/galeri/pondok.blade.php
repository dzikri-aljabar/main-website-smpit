<x-layouts.app>
    <section class="p-8">
        <div class="columns-2 md:columns-4 gap-4">
            @foreach ($galeris as $galeri)
                <a href="/galeri/pondok/{{ $galeri->slug }}">
                    <img class="mb-4 w-full rounded-lg" src="{{ asset('storage/' . $galeri->path) }}"
                        alt="{{ $galeri->alt }}">
                </a>
            @endforeach

        </div>

    </section>

</x-layouts.app>
