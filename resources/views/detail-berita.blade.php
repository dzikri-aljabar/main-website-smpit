<x-layouts.app :title="$berita->judul" :ogTitle="$berita->judul" :ogDescription="Str::limit(strip_tags($berita->konten), 150)" :ogImage="asset('storage/' . $berita->gambar)" :ogUrl="url('/berita/' . $berita->slug)"
    ogType="article">
    <article class="mt-12">
        <div class="flex flex-col md:flex-row gap-5 px-[20px] lg:px-[85px]">
            <div id="mainContent" class="basis-3/4">
                <header class="border-b border-gray-200 pb-4">
                    <img class="" src="{{ asset('storage/' . $berita->gambar) }}" alt="">
                    <h1 class="text-lg md:text-2xl font-bold mt-4">{{ $berita->judul }}</h1>
                    <div class="mt-3 flex justify-between">
                        <div>
                            <table class="text-gray-500">
                                <tr>
                                    <td>Terbit </td>
                                    <td class="px-2">: </td>
                                    <td>{{ $berita->created_at->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Penulis </td>
                                    <td class="px-2">: </td>
                                    <td>{{ $berita->penulis }}</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <span
                                class="inline-flex items-center justify-center rounded-full bg-[#FF5700] px-2.5 py-0.5 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="-ms-1 me-1.5 size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <p class="text-sm whitespace-nowrap">{{ Str::ucfirst($berita->jenis) }}</p>
                            </span>
                        </div>
                    </div>
                </header>
                <main class="mt-7 editor-content">
                    {!! $berita->konten !!}
                </main>
            </div>
            <div id="sidebar" class="basis-1/4">
                <div class=" sticky top-5">
                    <div class="shadow-[0px_0px_20px_-6px_#e3e3e3] rounded-lg p-4 mb-4">
                        <h2 class="text-xl font-bold mb-4">Pendaftaran Inden 2026/2027</h2>
                        <img src="{{ asset('assets/brosur.jpg') }}" alt="">
                        <p class="text-gray-500 my-2">Pendaftaran Inden 2026/2027 telah dibuka. Silakan kunjungi halaman
                            pendaftaran untuk informasi lebih lanjut.</p>
                        <a href="https://wa.me/08112540402"
                            class="bg-[#FF5700] text-center py-2 text-white w-full block">Daftar
                            Sekarang</a>
                    </div>
                    <div class="shadow-[0px_0px_20px_-6px_#e3e3e3] rounded-lg p-4 w-full">
                        <h2 class="text-xl font-bold mb-4">Berita Terbaru</h2>
                        <ul class="space-y-4">
                            @foreach ($beritas as $item)
                                <li class="overflow-hidden">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Berita"
                                        class="float-left w-16 h-16 mr-3 object-cover">
                                    <a href="/berita/{{ $item->slug }}"
                                        class="text-blue-600 text-xs hover:underline">{{ $item->judul }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
</x-layouts.app>
