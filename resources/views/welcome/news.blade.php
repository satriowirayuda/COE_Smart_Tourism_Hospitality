<section id="news-container" class="lg:px-36 px-5 py-10 m-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-10">
        <!-- News -->
        <div>
            <p class="pb-10 text-center font-bold font-lota2 text-4xl drop-shadow-5xl">News</p>
            <div class="relative">
                <div class="rounded-[15px] overflow-hidden">
                    <div class="relative w-full max-w-md mx-auto">
                        <img src="{{ asset('assets/artikel.png') }}" alt="Berita" 
                            class="rounded-[15px] w-full h-full object-cover">
                        <div class="absolute inset-0 rounded-[15px]" 
                            style="background: linear-gradient(to bottom, 
                                #030000 0%, 
                                #300000 40%, 
                                #690000 98%, 
                                #660000 100%, 
                                #000000 100%);
                                opacity: 0.3;">
                        </div>
                    </div>

                    <div class="text-white absolute top-0 right-0 p-5 text-base font-lota1">
                        <a href="#" target="_blank">
                            Selengkapnya
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 w-full text-white p-5">
                        <p class="text-4xl font-bold">Judul Berita</p>
                        <p class="font-lota1 text-base">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div>
            <p class="pb-10 text-center font-bold font-lota2 text-4xl drop-shadow-5xl">Timeline</p>
            <div>
                <p class="text-[13px] italic font-bold mb-2">Event LKM</p>
                <table class="w-full table-auto mb-3">
                    <thead>
                        <tr class="text-[13px] bg-[#626262] text-white">
                            <th class="text-left py-2 pl-6">ID</th>
                            <th class="text-left py-2 px-2 w-48">Event Name</th>
                            <th class="text-left py-2 px-2">Start Date</th>
                            <th class="text-left py-2 px-2">End Date</th>
                        </tr>
                    </thead>
                    <tbody id="table-l"></tbody>
                </table>
            </div>

            <div>
                <p class="text-[13px] italic font-bold mb-2">Event Eksternal</p>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="text-[13px] bg-[#626262] text-white">
                            <th class="text-left py-2 pl-6">ID</th>
                            <th class="text-left py-2 px-2 w-48">Event Name</th>
                            <th class="text-left py-2 px-2">Start Date</th>
                            <th class="text-left py-2 px-2">End Date</th>
                        </tr>
                    </thead>
                    <tbody id="table-e"></tbody>
                </table>
            </div>
        </div>
    </div>
</section>
