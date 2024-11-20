<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class=" mx-auto max-w-[1050px] w-full mt-28 mb-14 px-4">

        <p class=" text-3xl"><b>IHMS</b> ( Intelligent Hotel Management System )</p>

        <div class="col-span-2 mt-6">
            <div class="w-[1018px] h-[420px] overflow-hidden">
                <img id="mainImage" src="{{ asset('assets/pictinno.png') }}" alt="innovillage" class="w-full h-full object-cover cursor-pointer"> 
            </div>

            <div class="grid grid-cols-5 gap-2 mt-5">
                <img class="thumbnail w-[200px] h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[100px] object-cover cursor-pointer" src="{{ asset('assets/subinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
            </div>
        </div>

        <div class="flex gap-60 mt-5">
            <div>
                <p class="text-xl font-bold text-[#FF8A00]">Kategori:</p>
                <p class="text-base">Hospitality</p>
            </div>
            <div>
                <p class="text-xl font-bold text-[#FF8A00]">Klien:</p>
                <p class="text-base">Lingian</p> 
            </div>
        </div>
        

        <div class="pt-6">
            <p class="font-semibold text-2xl">Pengenalan</p>
            <p class="text-justify font-light mt-5 text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ..</p>

            <p class="font-semibold text-2xl mt-6">Apa saja yang kami kerjakan :</p>
            <ul class="list-decimal pl-4 font-light text-xl mt-5">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>
        </div>

        <div>
            <p class="font-semibold text-2xl mt-16 text-center">Mitra dan Dukungan :</p>
            <div class="flex gap-10 justify-center mt-5">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo Lotus">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
            </div>
        </div>
    
    </section>

    <script>
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                mainImage.src = thumbnail.src;
                thumbnails.forEach(t => t.classList.remove('border-[#1ABC9C]', 'border-[4px]'));
                thumbnail.classList.add('border-[#1ABC9C]', 'border-[4px]');
            });
        });

    </script>

<x-footer></x-footer>

</body>
</html>

