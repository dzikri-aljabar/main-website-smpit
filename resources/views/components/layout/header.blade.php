<div>
    <header class="z-10">
        <nav class="bg-white border-gray-200 shadow-[0px_4px_6px_0px_rgba(0,_0,_0,_0.1)]">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://smpitcahayainsanii.sch.id" class="flex items-center gap-x-2">
                    <img src="{{ asset('assets/logo.png') }}" class="w-18" alt="" />
                    <div class="text-[#0C5446]">
                        <h1 class="font-bold text-md md:text-lg lg:text-xl">
                            SMPIT CAHAYA INSANI
                        </h1>
                        <p class="tracking-[0.2px] md:tracking-[1.3px] lg:tracking-[2.2px] text-sm text-[#FF5700]">
                            Qur'anic Boarding School
                        </p>
                    </div>
                </a>
                <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100"
                    aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="flex flex-col items-start md:items-center font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-[#FF5700] rounded-sm md:bg-transparent md:text-[#FF5700] md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0 md:w-auto">
                                Profil
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu profil -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-[0px_0px_6px_0px_rgba(0,_0,_0,_0.1)] w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li aria-labelledby="dropdownNavbarLink">
                                        <button id="oneDropdownButton" data-dropdown-toggle="oneDropdown"
                                            data-dropdown-placement="right-start" type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
                                            Sekolah<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg>
                                        </button>
                                        <div id="oneDropdown"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                                            <ul class="py-2 text-sm text-gray-700"
                                                aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="/profil/visi-misi"
                                                        class="block px-4 py-2 hover:bg-gray-100">Visi
                                                        Misi</a>
                                                </li>
                                                <li>
                                                    <a href="/profil/sekolah/budaya"
                                                        class="block px-4 py-2 hover:bg-gray-100">Budaya</a>
                                                </li>
                                                <li>
                                                    <a href="/profil/sekolah/skl"
                                                        class="block px-4 py-2 hover:bg-gray-100">SKL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/profil/guru" class="block px-4 py-2 hover:bg-gray-100">Guru</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLinkProgram" data-dropdown-toggle="dropdownNavbarProgram"
                                class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0 md:w-auto">
                                Program
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu program -->
                            <div id="dropdownNavbarProgram"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-[0px_0px_6px_0px_rgba(0,_0,_0,_0.1)] w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li aria-labelledby="dropdownNavbarLinkProgram">
                                        <button id="subDropdownButtonProgramSekolah"
                                            data-dropdown-toggle="subDropdownProgramSekolah"
                                            data-dropdown-placement="right-start" type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
                                            Sekolah<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg>
                                        </button>
                                        <div id="subDropdownProgramSekolah"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                                            <ul class="py-2 text-sm text-gray-700"
                                                aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="/program/sekolah/kurikulum"
                                                        class="block px-4 py-2 hover:bg-gray-100">Kurikulum</a>
                                                </li>
                                                <li>
                                                    <a href="/program/sekolah/kesiswaan"
                                                        class="block px-4 py-2 hover:bg-gray-100">Kesiswaan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li aria-labelledby="dropdownNavbarLinkProgram">
                                        <button id="subDropdownButtonProgramPondok"
                                            data-dropdown-toggle="subDropdownProgramPondok"
                                            data-dropdown-placement="right-start" type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
                                            Pondok<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg>
                                        </button>
                                        <div id="subDropdownProgramPondok"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                                            <ul class="py-2 text-sm text-gray-700"
                                                aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="/program/pondok/kurikulum"
                                                        class="block px-4 py-2 hover:bg-gray-100">Kurikulum</a>
                                                </li>
                                                <li>
                                                    <a href="/program/pondok/kesantrian"
                                                        class="block px-4 py-2 hover:bg-gray-100">Kesantrian</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/berita"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0">Berita</a>
                        </li>
                        <li>
                            <a href="/artikel"
                                class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0">Artikel</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLinkPrestasi" data-dropdown-toggle="dropdownNavbarPrestasi"
                                class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0 md:w-auto">
                                Prestasi
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu prestasi -->
                            <div id="dropdownNavbarPrestasi"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-[0px_0px_6px_0px_rgba(0,_0,_0,_0.1)] w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/prestasi/guru" class="block px-4 py-2 hover:bg-gray-100">Guru</a>
                                    </li>
                                    <li>
                                        <a href="/prestasi/peserta-didik"
                                            class="block px-4 py-2 hover:bg-gray-100">Peserta didik</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLinkGaleri" data-dropdown-toggle="dropdownNavbarGaleri"
                                class="flex items-center justify-between w-full py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FF5700] md:p-0 md:w-auto">
                                Galeri
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu prestasi -->
                            <div id="dropdownNavbarGaleri"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-[0px_0px_6px_0px_rgba(0,_0,_0,_0.1)] w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/galeri/sekolah"
                                            class="block px-4 py-2 hover:bg-gray-100">Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="/galeri/pondok" class="block px-4 py-2 hover:bg-gray-100">Pondok</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/spmb"
                                class="block py-2 px-5 text-white rounded-sm md:border-0 bg-[#FF5700]">SPMB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
