<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-400 min-h-screen flex justify-center">
    <div class="w-full bg-white rounded-2xl my-4 mx-4 shadow-lg flex flex-col">
        <div class="flex items-center pl-10 py-5">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-8 h-10 object-cover">
            <h2 class="pl-6 font-semibold text-xl">Halaman Admin</h2>
        </div>
        <hr class="border-grey-300 border" />

        <!-- Wrapper untuk sidebar dan konten utama -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Panggil Sidebar -->
            <x-sidebar />

            <!-- Konten Utama di Sebelah Sidebar -->
            <div class="px-10 py-10 w-full">
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Event</h2>
                <p>Isi konten untuk tambah event</p>

                <form action="#" method="POST" class="pt-10">
                    <div id="event-container" class="grid grid-cols-1 md:grid-cols-2 gap-4"> <!-- Grid layout -->
                        <div class="event-item flex flex-col space-y-4">
                            <input type="text" placeholder="Nama Event"
                                class="block w-[80%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                            <input type="date" placeholder="Tanggal Mulai"
                                class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                            <input type="date" placeholder="Tanggal Selesai"
                                class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                            <select name="kategori_event"
                                class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="l">LKM</option>
                                <option value="e">Eksternal</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tombol Tambah Event -->
                    <button id="add-event-btn" type="button"
                        class="mt-4 bg-white border border-gray-400 text-black px-4 py-2 rounded-md">
                        Tambah Event
                    </button>

                    <!-- Tombol Submit -->
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-cyan-300 text-white py-2 px-12 font-semibold rounded-md hover:bg-cyan-400 transition duration-200">
                            Post Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let eventCount = 1; // Initial event count
        const maxEvents = 2; // Maximum number of events allowed
        const addEventBtn = document.getElementById('add-event-btn');
        const eventContainer = document.getElementById('event-container');

        addEventBtn.addEventListener('click', function() {
            if (eventCount < maxEvents) {
                eventCount++;

                // Create new div for event
                const newEventDiv = document.createElement('div');
                newEventDiv.classList.add('event-item', 'flex', 'flex-col', 'space-y-4');

                // HTML for new event form
                newEventDiv.innerHTML = `
                <input type="text" placeholder="Nama Event"
                    class="block w-[80%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                <input type="date" placeholder="Tanggal Mulai"
                    class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                <input type="date" placeholder="Tanggal Selesai"
                    class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                <select name="kategori_event"
                    class="block w-[35%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                    <option value="LKM">LKM</option>
                    <option value="Workshop">Workshop</option>
                </select>
                `;

                // Append new event item to the container
                eventContainer.appendChild(newEventDiv);

                // Adjust grid layout if more than 1 event
                if (eventCount === 2) {
                    eventContainer.classList.add('md:grid-cols-2');
                }
            } else {
                alert('Maksimal 2 event');
            }
        });
    </script>
</body>

</html>
