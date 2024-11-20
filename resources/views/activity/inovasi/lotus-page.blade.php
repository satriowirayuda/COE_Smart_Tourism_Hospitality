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

        <p class=" text-3xl"><b>LOTUS</b> ( Lorong Waktu Sejarah )</p>

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
                <p class="text-base">Pariwisata</p>
            </div>
            <div>
                <p class="text-xl font-bold text-[#FF8A00]">Klien:</p>
                <p class="text-base">Keraton Kasepuhan Cirebon</p> 
            </div>
        </div>
        

        <div class="pt-6">
            <p class="font-semibold text-2xl">Pengenalan</p>
            <p class="text-justify font-light mt-5 text-xl">LOTUS (Lorong Waktu Sejarah) merupakan sebuah bisnis yang 100% isi konten memanfaatkan AI (Artificial Intelligence), LOTUS ini sebuah kotak yang di dalamnya terdapat konten sejarah yang visualisasinya di bantu oleh AI, yang menjadikan konten ini menjadi nyata saat kita memasuki kotak tersebut.</p>
            <p class="text-justify font-light mt-5 text-xl">
            Saat ini yang kita buat, mengangkat konten sejarah Kasepuhan Cirebon yang sudah hampir punah. Kota yang terjajah oleh belanda, perbudakan, penindasan terus terjadi setiap sudut kehidupan di kota itu. Dengan projek yang kami buat ini, semoga dapat mengangkat kembali sejarah Kasepuhan Cirebon bahkan kembali melestarikan sejarah-sejarah yang ada di Indonesia dengan memanfaatkan teknologi yang ada saat ini salah satunya AI (Artificial Intelligence).</p>

            <p class="font-semibold text-2xl mt-6">Apa saja yang kami kerjakan :</p>
            <ul class="list-decimal pl-4 font-light text-xl mt-5">
                <li>Pembuatan Konten AI</li>
                <li>Melakukan pembelajaran</li>
                <li>Strategi pemasaran konten</li>
                <li>Melakukan serangkaian riset</li>
            </ul>
        </div>

        <div>
            <p class="font-semibold text-2xl mt-16 text-center">Mitra dan Dukungan :</p>
            <div class="flex gap-10 justify-center mt-5">
                <img class="w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo Lotus">
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

