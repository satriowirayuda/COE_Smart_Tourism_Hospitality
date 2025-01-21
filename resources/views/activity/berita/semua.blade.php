<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex bg-white rounded-[15px] md:rounded-[30px] lg:rounded-[40px] h-10 md:h-14 lg:h-14 mx-5 lg:mx-[110px] shadow-2xl my-10 pl-10 md:pl-15 lg:pl-20 items-center gap-9 text-sm font-semibold text-black">
        <a href="{{url('berita/semua')}}" class="text-[#FF8A00]">Semua</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="{{url('berita/artikel')}}">Artikel</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="{{url('berita/penghargaan')}}">Pencapaian</a>
    </div>

    <!-- <section class="mx-5 md:mx-5 lg:mx-[110px] mb-28 space-y-5 ">
        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-[460px] h-[120px] md:w-[560px] md:h-[160px] lg:w-[560px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden">
                <img src="{{ asset('assets/artikel-2.png')}}" alt="artikel" 
                    class="w-full h-full object-cover flex-shrink-0">
            </div>
    
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4"> 

                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-6 lg:w-8" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">20 Agustus-2024</p>
                    </div>
                        
                    <div class=" text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-bold line-clamp-1">Kemenparekraf Tingkatkan Kunjungan Wisatawan ke Keraton Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-light line-clamp-2">CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,</p>

                    <div class="flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black">
                        <a href="https://www.beritatrans.com/artikel/249965/Kemenparekraf-Tingkatkan-Kunjungan-Wisatawan-ke-Keraton-Kasepuhan-Cirebon/" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <section class="mx-5 md:mx-5 lg:mx-[110px] mb-28 space-y-5 ">
        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-full max-w-[200px] md:max-w-[300px] lg:max-w-[400px] h-[120px] md:h-[160px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('assets/artikel 4.png')}}" alt="artikel" 
                    class="w-full h-full object-cover">
            </div>
            
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4 flex-grow">
                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-5 lg:w-6" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">28 Okt-2023</p>
                    </div>

                    <div class="text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-bold line-clamp-1">Kemenparekraf Tingkatkan Kunjungan Wisatawan ke Keraton Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-light line-clamp-3">CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,</p>

                    <div class="pt-2 flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black underline underline-offset-2">
                        <a href="https://www.beritatrans.com/artikel/249965/Kemenparekraf-Tingkatkan-Kunjungan-Wisatawan-ke-Keraton-Kasepuhan-Cirebon/" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>
            </div>
            
        </div>

        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-full max-w-[200px] md:max-w-[300px] lg:max-w-[400px] h-[120px] md:h-[160px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('assets/artikel 3.png')}}" alt="artikel" 
                    class="w-full h-full object-cover">
            </div>
            
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4 flex-grow">
                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-5 lg:w-6" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">28 Okt-2024</p>
                    </div>

                    <div class="text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-bold line-clamp-1">Penggunaan AI di Keraton Kasepuhan Cirebon, Tingkatkan Pengalaman Wisata</p>
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-light line-clamp-3">Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) terus berinovasi dalam meningkatkan daya tarik wisata budaya di Indonesia. Salah satu contohnya adalah peluncuran Museum CAVE Artificial Intelligence (AI) Lorong Waktu Sejarah (LOTUS) di Keraton Kasepuhan Cirebon ...</p>

                    <div class="pt-2 flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black underline underline-offset-2">
                        <a href="https://www.beritatrans.com/artikel/249965/Kemenparekraf-Tingkatkan-Kunjungan-Wisatawan-ke-Keraton-Kasepuhan-Cirebon/" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>
            </div>
            
        </div>

        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-full max-w-[200px] md:max-w-[300px] lg:max-w-[400px] h-[120px] md:h-[160px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('assets/artikel-2.png')}}" alt="artikel" 
                    class="w-full h-full object-cover">
            </div>
            
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4 flex-grow">
                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-5 lg:w-6" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">28 Okt-2023</p>
                    </div>

                    <div class="text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-bold line-clamp-1">Kemenparekraf Tingkatkan Kunjungan Wisatawan ke Keraton Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-light line-clamp-3">CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,</p>

                    <div class="pt-2 flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black underline underline-offset-2">
                        <a href="https://www.beritatrans.com/artikel/249965/Kemenparekraf-Tingkatkan-Kunjungan-Wisatawan-ke-Keraton-Kasepuhan-Cirebon/" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>
            </div>
            
        </div>

        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-full max-w-[200px] md:max-w-[300px] lg:max-w-[400px] h-[120px] md:h-[160px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('assets/artikel 4.png')}}" alt="artikel" 
                    class="w-full h-full object-cover">
            </div>
            
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4 flex-grow">
                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-5 lg:w-6" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">28 Okt-2023</p>
                    </div>

                    <div class="text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-bold line-clamp-1">Kemenparekraf Tingkatkan Kunjungan Wisatawan ke Keraton Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-sm font-light line-clamp-3">CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,CIREBON (BeritaTrans.com) - Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) bersama Center of Excellence Smart Tourism and Hospitality, PT Grhayasa Nusacitra Estima,</p>

                    <div class="pt-2 flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black underline underline-offset-2">
                        <a href="https://www.beritatrans.com/artikel/249965/Kemenparekraf-Tingkatkan-Kunjungan-Wisatawan-ke-Keraton-Kasepuhan-Cirebon/" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>
            </div>
            
        </div>
</section>

</body>
</html>