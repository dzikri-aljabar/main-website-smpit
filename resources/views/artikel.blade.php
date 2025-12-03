<x-layouts.app>
    <section class="flex flex-row py-5 px-[20px] gap-x-7">
        <div class="basis-full md:basis-2/3">
            <form class="max-w-9/10 mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#FF5700] focus:border-[#FF5700]"
                        placeholder="Cari berita terkini..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-[#FF5700] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
            <section class="my-7">
                <div
                    class="w-full bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] flex flex-col md:flex-row gap-5 p-7 rounded-lg mt-8">
                    <img class="w-full basis-1/2 h-64 object-cover rounded-lg mb-4"
                        src="{{ asset('storage/' . $artikelTerbaru->gambar) }}"
                        alt="">
                    <div class=" basis-1/2">
                        <h3 class="font-bold text-lg">{{ $artikelTerbaru->judul }}</h3>
                        <div class="my-5">
                            <p class="text-sm"><span class=" text-[#FF5700] font-bold">{{ Str::ucfirst($artikelTerbaru->jenis) }}</span> | {{ $artikelTerbaru->penulis }} | {{ $artikelTerbaru->created_at->format('d-m-Y') }}</p>
                        </div>
                        <p class="text-sm text-gray-500 my-2">
                            {{
                                Str::limit(strip_tags($artikelTerbaru->konten), 350, '...')
                            }}
                        </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-7">
                    <div class="flex flex-row justify-between items-center text-sm">
                        <h1 class="font-semibold"><span class=" bg-[#FF5700] p-[2px] rounded-full"></span> <span
                                class="px-2">Artikel Populer</span></h1>
                        <div class=" bg-[#f7e8e0] px-[10px] py-[3px] rounded-xl">
                            <p class="text-[#FF5700] font-medium">Lihat Semua <i class="fa-solid fa-angle-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                        <article
                            class="flex flex-row gap-2 bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-2">
                            <img class=" w-40 object-cover rounded-lg"
                                src="https://images.unsplash.com/photo-1687648591889-81301286d493?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIzfHx8ZW58MHx8fHx8"
                                alt="">
                            <div class=" space-y-2">
                                <p class="text-xs">29 Agust 2025</p>
                                <h1 class="font-semibold">Program MBG Pemerint...</h1>
                                <p class="text-xs text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Reiciendis, aliquid...</p>
                                <p class="text-sm"><span class=" text-[#FF5700] font-bold">Berita</span> | Admin</p>
                            </div>
                        </article>
                        <article
                            class="flex flex-row gap-2 bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-2">
                            <img class=" w-40 object-cover rounded-lg"
                                src="https://images.unsplash.com/photo-1687648591889-81301286d493?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIzfHx8ZW58MHx8fHx8"
                                alt="">
                            <div class=" space-y-2">
                                <p class="text-xs">29 Agust 2025</p>
                                <h1 class="font-semibold">Program MBG Pemerint...</h1>
                                <p class="text-xs text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Reiciendis, aliquid...</p>
                                <p class="text-sm"><span class=" text-[#FF5700] font-bold">Berita</span> | Admin</p>
                            </div>
                        </article>
                        <article
                            class="flex flex-row gap-2 bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-2">
                            <img class=" w-40 object-cover rounded-lg"
                                src="https://images.unsplash.com/photo-1687648591889-81301286d493?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIzfHx8ZW58MHx8fHx8"
                                alt="">
                            <div class=" space-y-2">
                                <p class="text-xs">29 Agust 2025</p>
                                <h1 class="font-semibold">Program MBG Pemerint...</h1>
                                <p class="text-xs text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Reiciendis, aliquid...</p>
                                <p class="text-sm"><span class=" text-[#FF5700] font-bold">Berita</span> | Admin</p>
                            </div>
                        </article>
                        <article
                            class="flex flex-row gap-2 bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-2">
                            <img class=" w-40 object-cover rounded-lg"
                                src="https://images.unsplash.com/photo-1687648591889-81301286d493?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIzfHx8ZW58MHx8fHx8"
                                alt="">
                            <div class=" space-y-2">
                                <p class="text-xs">29 Agust 2025</p>
                                <h1 class="font-semibold">Program MBG Pemerint...</h1>
                                <p class="text-xs text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Reiciendis, aliquid...</p>
                                <p class="text-sm"><span class=" text-[#FF5700] font-bold">Berita</span> | Admin</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        <div class=" basis-0 md:basis-1/3 hidden md:block px-[20px] bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-7">
            <h1 class="font-bold text-center my-4">Informasi Pendaftaran Murid Baru Tahun Ajaran 2026/2027</h1>
            <img src="{{ asset('assets/brosur-25Depan.jpg') }}" alt="">
            <img src="{{ asset('assets/brosur-25belakang.jpg') }}" alt="">
            <p class="text-sm mt-4" >Informasi Lebih lanjut Hubungi :</p>
            <a class="text-sm underline"  href="" class="">0811-2540-402</a>
        </div>
    </section>
    <section class="px-[20px]">
        <div class="bg-white shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.1)] rounded-lg p-2">
            <div class="flex flex-row justify-between items-center text-sm">
                <h1 class="font-semibold"><span class=" bg-[#FF5700] p-[2px] rounded-full"></span> <span
                        class="px-2">Seluruh Artikel</span></h1>
                
            </div>
        </div>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 ">
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
        </div>
    </section>
</x-layouts.app>
