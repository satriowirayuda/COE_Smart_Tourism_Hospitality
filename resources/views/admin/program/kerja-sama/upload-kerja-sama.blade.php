<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Partner</h2>
                <p>Isi konten untuk tambah partner</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="pt-10">
                    <div id="partner-container" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="team-item flex flex-col space-y-4">
                            <label for="image_team" class="block text-sm font-medium text-gray-700">Logo Partner</label>
                            <div class="flex">
                                <label for="image"
                                    class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-36 py-8 px-14 rounded-md hover:bg-slate-100 bg-cover bg-center">
                                    ➕
                                </label>
                                <input type="file" id="image" name="image" class="hidden"
                                    onchange="displayImageInLabel(this)">
                                <div class="flex-col pl-5">
                                    <input type="text" id="name" placeholder="Nama Partner"
                                        class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                    <input type="text" id="program" placeholder="Nama Program"
                                        class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="add-partner-btn" type="button"
                        class="mt-4 bg-white border border-gray-400 text-black px-4 py-2 rounded-md">
                        Tambah Partner
                    </button>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="px-5 py-2.5 relative rounded group overflow-hidden font-medium bg-cyan-300 text-white inline-block">
                            <span
                                class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-cyan-50 group-hover:h-full opacity-90"></span>
                            <span class="relative group-hover:text-cyan-300">Submit Partner</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let partnerCount = 1; // Initial form count
        const maxPartner = 3; // Maximum forms
        const addPartnerBtn = document.getElementById('add-partner-btn');
        const partnerContainer = document.getElementById('partner-container');

        addPartnerBtn.addEventListener('click', function() {
            if (partnerCount < maxPartner) {
                partnerCount++;

                // Create new div for team member (not form)
                const newPartnerDiv = document.createElement('div');
                newPartnerDiv.classList.add('team-item', 'flex', 'flex-col', 'space-y-4'); // Flex item for layout

                // HTML for new team member
                newPartnerDiv.innerHTML = `
                <label for="image" class="block text-sm font-medium text-gray-700">Logo Partner</label>
                <div class="flex">
                    <label for="image${partnerCount}"
                        class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-36 py-8 px-14 rounded-md hover:bg-slate-100 bg-cover bg-center">
                        ➕
                    </label>
                    <input type="file" id="image${partnerCount}" name="image${partnerCount}" class="hidden"
                        onchange="displayImageInLabel(this)">
                    <div class="flex-col pl-5">
                        <input type="text" id="name" placeholder="Nama Partner"
                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                        <input type="text" id="program" placeholder="Nama Program"
                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                    </div>
                </div>
                
                `;

                // Append new team item to the container
                partnerContainer.appendChild(newPartnerDiv);

                // Adjust grid layout if more than 2 forms
                if (partnerCount === 3) {
                    partnerContainer.classList.add('md:grid-cols-2');
                }
            } else {
                alert('Maksimal 3 Partners');
            }
        });

        // Function to preview the image (optional)
        function displayImageInLabel(input) {
            const label = input.previousElementSibling;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    label.style.backgroundImage = `url(${e.target.result})`;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
