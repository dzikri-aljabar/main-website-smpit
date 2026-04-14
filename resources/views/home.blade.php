<x-layouts.app>
    <section>
        <div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative min-h-[200px] md:min-h-screen overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://smpitcahayainsanii.sch.id/wp-content/uploads/2020/06/UDAH-GEDE33-1100x525.png"
                        class="block w-full h-auto md:h-full object-contain md:object-cover" alt="..." />
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://smpitcahayainsanii.sch.id/wp-content/uploads/2024/08/WhatsApp-Image-2024-08-28-at-09.31.35-1100x525.jpeg"
                        class="block w-full h-auto md:h-full object-contain md:object-cover" alt="..." />
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8">
        <div class="px-[20px] lg:px-[85px] flex flex-col lg:flex-row gap-4 items-stretch">
            <img src="{{ asset('assets/kls7.jpg') }}" class="w-full lg:w-96 h-80 object-cover" />
            <div class="relative lg:w-1/2 h-full">
                <h2 class="font-bold text-xl">Visi</h2>
                <img src="{{ asset('assets/brush (1).png') }}"
                    class="w-14 absolute -translate-y-4 -translate-x-1 -z-10" />
                <p class="text-sm mt-4">
                    Menjadi Lembaga Yang Terdepan Dalam Mewujudkan Generasi
                    Berkarakter Qur'ani, Inovatif, Berwawasan lingkungan dan Global
                    Melalui Komunitas Belajar Sepanjang Hayat
                </p>
                <h2 class="font-bold text-lg">Misi</h2>
                <img src="{{ asset('assets/brush (1).png') }}"
                    class="w-14 absolute -translate-y-4 -translate-x-1 -z-10" />
                <ul class="text-sm list-disc list-inside mt-5">
                    <li>
                        Mengarahkan Peserta didik dalam mengimplementasikan agama Islam
                        yang hanif berdasarkan Al Quran dan As Sunnah
                    </li>
                    <li>
                        Tercapainya peserta didik yang beriman dan bertaqwa kepada Tuhan
                        Yang Maha Esa yang berakhlak mulia dalam pembelajaran dan
                        kehidupan sehari-hari
                    </li>
                    <li>
                        Mewujudkan lulusan yang unggul dalam bidang kademik dan non
                        akademik.
                    </li>
                </ul>
                <a href="/profil/visi-misi"
                    class="border-2 px-5 py-2 border-[#FF5700] inline-block text-sm font-bold text-[#FF5700] hover:bg-[#FF5700] hover:text-white mt-4">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section
        class="bg-gradient-to-r from-green-800 to-emerald-600  mt-8 px-[20px] lg:px-[85px] py-12 flex flex-col space-y-20 text-white">
        <div class="flex flex-col md:flex-row justify-center items-center">
            @if (empty($kepalaSekolah))
                <div>
                    <h1 class="font-semibold text-lg text-gray-200">Tidak ada konten.</h1>
                </div>
            @else
                <div class="w-96">
                    <img src="{{ asset('./storage/' . $kepalaSekolah->path) }}"
                        alt="Kepala Sekolah {{ $kepalaSekolah->nama }}"
                        class="w-64 mx-auto border-2 border-[#FF5700] rounded-lg shadow-lg" />
                </div>
                <div class="md:w-3/5">
                    <h2 class="font-bold text-xl mt-5">Sambutan Kepala Sekolah</h2>
                    <p class="text-sm mt-4 text-justify">
                        {{ $kepalaSekolah->deskripsi }}
                    </p>
                    <h3 class="mt-2 font-semibold">{{ $kepalaSekolah->nama }}</h3>
                </div>
            @endif
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            @if (empty($kepalaPondok))
                <div>
                    <h1 class="font-semibold text-lg text-gray-200">Tidak ada konten.</h1>
                </div>
            @else
                <div class="md:w-3/5 mx-auto order-2 md:order-1">
                    <h2 class="font-bold text-xl mt-5">Sambutan Kepala Pondok</h2>
                    <p class="text-sm mt-4 text-justify">
                        {{ $kepalaPondok->deskripsi }}
                    </p>
                    <h3 class="mt-2 font-semibold">{{ $kepalaPondok->nama }}</h3>
                </div>
                <div class="w-96 order-1 md:order-2">
                    <img src="{{ asset('./storage/' . $kepalaPondok->path) }}"
                        class="w-64 mx-auto border-2 border-[#FF5700] rounded-lg shadow-lg" />
                </div>
            @endif
        </div>
    </section>
    <section>
        <div>
            <div class=" border-b-2 border-[#FF5700] mx-[20px] lg:mx-[85px] py-4">
                <h2 class="font-bold text-[#FF5700] text-xl mt-8">Berita Terbaru</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-[20px] lg:px-[85px] mt-4">
                @if (empty($beritas))
                    <div>
                        <h1 class="font-semibold text-lg text-gray-500">Tidak ada berita.</h1>
                    </div>
                @else
                    @foreach ($beritas as $berita)
                        <div class="bg-white flex flex-col p-4 rounded-lg shadow-md">
                            <img src="{{ asset('storage/' . $berita->gambar) }}"
                                class="w-full h-48 object-cover rounded-lg mb-4" />
                            <h3 class="font-bold text-lg">{{ $berita->judul }}</h3>
                            <p class="text-sm my-2">
                                {{ Str::limit(strip_tags($berita->konten), 100, '...') }}
                            </p>
                            <a href="/berita/{{ $berita->slug }}"
                                class="text-[#FF5700] font-bold mt-auto inline-block hover:underline">Baca
                                Selengkapnya</a>
                        </div>
                    @endforeach
                @endif
            </div>
    </section>
    <section>
        <div>
            <div class=" border-b-2 border-[#FF5700] mx-[20px] lg:mx-[85px] py-4">
                <h2 class="font-bold text-[#FF5700] text-xl mt-8">Artikel Terbaru</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-[20px] lg:px-[85px] mt-4">
                @if (empty($artikels))
                    <div>
                        <h1 class="font-semibold text-lg text-gray-500">Tidak ada artikel.</h1>
                    </div>
                @else
                    @foreach ($artikels as $artikel)
                        <div class="bg-white flex flex-col p-4 rounded-lg shadow-md">
                            <img src="{{ asset('storage/' . $artikel->gambar) }}"
                                class="w-full h-48 object-cover rounded-lg mb-4" />
                            <h3 class="font-bold text-lg">{{ $artikel->judul }}</h3>
                            <p class="text-sm my-2">
                                {{ Str::limit(strip_tags($artikel->konten), 100, '...') }}
                            </p>
                            <a href="/berita/{{ $artikel->slug }}"
                                class="text-[#FF5700] font-bold mt-auto inline-block hover:underline">Baca
                                Selengkapnya</a>
                        </div>
                    @endforeach
                @endif
            </div>
    </section>
</x-layouts.app>
