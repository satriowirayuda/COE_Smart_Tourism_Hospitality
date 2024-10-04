<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-400 min-h-screen flex justify-center">
    <div class="w-full bg-white rounded-2xl my-4 mx-4 shadow-lg flex flex-col">
        <x-header />
        <!-- Wrapper untuk sidebar dan konten utama -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Panggil Sidebar -->
            <x-sidebar />

            <!-- Konten Utama di Sebelah Sidebar -->
            <div class="px-10 py-10 w-full">
                <h2 class="font-semibold text-2xl">Manajemen Konten Berita</h2>
                <p>Pilih konten untuk di-edit</p>

                <div class="mt-6">
                    <a href="/upload-news" class="bg-cyan-300 hover:bg-cyan-200 text-white font-bold py-2 px-4 rounded">
                        Tambah Berita
                    </a>
                </div>

                <!-- Card Wrapper -->
                <div id="news-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-6">
                    <!-- Cards akan ditambahkan di sini oleh JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        async function fetchNews() {
            try {
                const response = await fetch('/api/news');
                const newsData = await response.json();
                const newsArray = newsData.data;
                const newsContainer = document.getElementById('news-container');

                newsContainer.innerHTML = '';

                if (Array.isArray(newsArray)) {
                    newsArray.forEach(news => {
                        const formattedDate = new Date(news.news_date).toLocaleDateString('id-ID', {
                            day: '2-digit',
                            month: 'long',
                            year: 'numeric'
                        });

                        // Menyusun URL gambar
                        const imageUrl = `/storage/${news.image}`;
                        console.log('Image URL:', imageUrl); // Debug: log URL gambar

                        const newsCard = document.createElement('div');
                        newsCard.className =
                            'bg-white rounded-xl border-2 border-grey-300 p-4 flex flex-col mb-4';

                        newsCard.innerHTML = `
                            <div class="flex">
                                <div class="w-[65%] pr-2">
                                    <h3 class="text-xs font-semibold text-justify">${news.title}</h3>
                                </div>
                                <div class="w-[35%] ml-auto">
                                    <img src="${imageUrl}" alt="${news.title}" class="w-full h-20 object-cover rounded-lg mb-4">
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mb-2">${formattedDate}</p>
                            <p class="text-sm text-gray-500 mb-2">${news.category === ('a') ? 'Artikel' : 'Penghargaan'}</p>
                            <div class="flex space-x-2 ml-auto">
                                <button class="bg-white border-2 border-red-500  text-red-500 px-4 py-2 rounded-full hover:bg-red-600 hover:text-white">Hapus</button>
                                <button class="bg-white border-2 border-green-500  text-green-500 px-6 py-2 rounded-full hover:bg-green-600 hover:text-white">Edit</button>
                            </div>
                        `;

                        newsContainer.appendChild(newsCard);
                    });
                } else {
                    console.error('Data yang diterima bukan array:', newsArray);
                }

            } catch (error) {
                console.error('Error fetching news:', error);
            }
        }

        window.onload = fetchNews;
    </script>

</body>

</html>
