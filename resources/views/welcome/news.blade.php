<section id="news-container" class="lg:px-36 py-20 m-auto">
    <div class="grid grid-cols-2 gap-x-24">
        <div class="grid-cols-1">
            <p class="text-4xl font-bold drop-shadow-5xl text-center pb-10">News</p>
            <div class="relative">
                <div class="rounded-[15px] overflow-hidden">

                    <img src="{{ asset('assets/artikel.png') }}" alt="Berita"
                        class=" rounded-[15px] w-[500.95px] h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-30 rounded-[15px]"></div>

                    <div class="text-white absolute top-0 right-0 p-5 text-base">
                        <a href="#" target="_blank">
                            Selengkapnya
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 w-full text-white p-5">
                        <p class="text-4xl font-bold">Judul Berita</p>
                        <p class="text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid-cols-1">
            <p class="text-4xl font-bold text-center drop-shadow-5xl pb-10">Timeline</p>
            <div class="mr-0">
                <div>
                    <p class="text-[13px] italic font-bold mb-2">Event LKM</p>
                    <table class="w-full table-auto mb-3">
                        <thead>
                            <tr class="text-[13px] bg-[#626262] text-white">
                                <th class="text-left py-2 pl-6">ID</th>
                                <th class="text-left py-2 px-2 w-48 ">Event Name</th>
                                <th class="text-left py-2 px-2">Start Date</th>
                                <th class="text-left py-2 px-2">End Date</th>
                            </tr>
                        </thead>
                        <tbody id="table-l">
                            <!-- Data for Category L will be inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <p class="text-[13px] italic font-bold mb-2">Event Eksternal</p>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="text-[13px] bg-[#626262] text-white">
                            <th class="text-left py-2 pl-6">ID</th>
                            <th class="text-left py-2 px-2 w-48 ">Event Name</th>
                            <th class="text-left py-2 px-2">Start Date</th>
                            <th class="text-left py-2 px-2">End Date</th>
                        </tr>
                    </thead>
                    <tbody id="table-e">
                        <!-- Data for Category E will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            // Use the Fetch API to retrieve the data from your Laravel API
            fetch('/api/events')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    const tableL = document.getElementById('table-l');
                    const tableE = document.getElementById('table-e');

                    // Loop through each news item and separate them by category
                    data.data.forEach(newsItem => {
                        const row = document.createElement('tr');
                        row.className = "text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]";
                        row.innerHTML = `
                        <td class="py-2 pl-6">${newsItem.id}</td>
                        <td class="py-2 px-2">${newsItem.name}</td>
                        <td class="py-2 px-2">${newsItem.start_date}</td> <!-- Sesuaikan dengan respons API -->
                        <td class="py-2 px-2">${newsItem.end_date}</td>
                    `;
                        // Append the row to the correct table based on category
                        if (newsItem.category === 'L') {
                            tableL.appendChild(row);
                        } else if (newsItem.category === 'E') {
                            tableE.appendChild(row);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching events:', error);
                });
        </script>


</section>
