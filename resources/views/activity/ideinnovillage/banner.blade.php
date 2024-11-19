<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class=" mx-auto max-w-[1050px] w-full py-14 px-4">

        <div>
            <p class=" text-3xl font-bold">JUDUL INNOVILLAGE</p>
            <p class="text-2xl mt-3">Innovillage 2022</p>

            <div class="grid grid-cols-3 gap-10 items-start mt-6">
                <div class="col-span-2">
                    <img id="mainImage" src="{{ asset('assets/pictinno.png') }}" alt="innovillage" class="w-[638px] h-[384.51px] cursor-pointer"> 
                    <div class="w-[121px] h-20 flex gap-2 mt-5">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/subinno.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                    </div>
                </div>

                <div class="col-span-1 border border-[#BABABA] rounded-2xl shadow-xl">
                    <div class="p-5">
                        <p class="mb-2 text-2xl font-semibold">Our Team</p>
                        <div class="grid grid-cols-2 gap-3">

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                            <div class="relative col-span-1">
                                <div class="relative w-full h-full">
                                    <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                    
                                </div>
                                <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>    
        </div>

        <div class="pt-6">
            <p class="font-semibold text-2xl">Tentang Judul Innovillage</p>
            <p class="text-justify font-light mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
        </div>
    
    </section>

    <script>
        const mainImage = document.getElementById('mainImage');
        const thumbnail = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                // Ganti src gambar besar dengan src dari thumbnail yang diklik
                mainImage.src = thumbnail.src;
                thumbnails.forEach(t => t.classList.remove('border-[#1ABC9C]', 'border-[4px]'));
                thumbnail.classList.add('border-[#1ABC9C]', 'border-[4px]');
            });
        });
    </script>

</body>
</html>

