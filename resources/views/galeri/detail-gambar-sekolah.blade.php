<x-layouts.app>
    <section class="p-8">
        <h1 class="text-center font-bold">{{ $galeri->title }}</h1>
        <div class="mt-8 flex flex-col justify-center gap-4">
            <img src="{{ asset('storage/' . $galeri->path) }}" alt="{{ $galeri->alt }}"
                class=" max-w-[90vw] max-h-[90vh] object-contain">
            <div class="flex justify-center">
                <a href="/galeri/sekolah" class="py-2 px-4 rounded-xl bg-[#FF5700] text-white font-bold">
                    Kembali Ke Galeri Pondok
                </a>
            </div>

        </div>
    </section>
</x-layouts.app>
