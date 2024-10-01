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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Anggota</h2>
                <p>Isi konten untuk tambah anggota</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="pt-10">
                    <div id="team-container" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="team-item flex flex-col space-y-4">
                            <label for="image_team" class="block text-sm font-medium text-gray-700">Tim
                                Innovillage</label>
                            <div class="flex">
                                <label for="image"
                                    class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-36 py-8 px-14 rounded-md hover:bg-slate-100 bg-cover bg-center">
                                    ➕
                                </label>
                                <input type="file" id="image" name="image" class="hidden"
                                    onchange="displayImageInLabel(this)">
                                <div class="flex-col pl-5">
                                    <input type="text" id="name" placeholder="Nama Anggota"
                                        class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                    <input type="text" id="position" placeholder="Jabatan"
                                        class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                </div>
                            </div>
                            <select name="status" id="status"
                                class="mt-2 block w-[75%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                <option value="i">Inhouse</option>
                                <option value="a">Alumni</option>
                            </select>
                        </div>
                    </div>
                    <button id="add-team-btn" type="button"
                        class="mt-4 bg-white border border-gray-400 text-black px-4 py-2 rounded-md">
                        Tambah Anggota
                    </button>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-cyan-300 text-white py-2 px-12 font-semibold rounded-md hover:bg-cyan-400 transition duration-200">
                            Post Anggota
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let teamCount = 1; // Initial form count
        const maxTeams = 3; // Maximum forms
        const addTeamBtn = document.getElementById('add-team-btn');
        const teamContainer = document.getElementById('team-container');

        addTeamBtn.addEventListener('click', function() {
            if (teamCount < maxTeams) {
                teamCount++;

                // Create new div for team member (not form)
                const newTeamDiv = document.createElement('div');
                newTeamDiv.classList.add('team-item', 'flex', 'flex-col', 'space-y-4'); // Flex item for layout

                // HTML for new team member
                newTeamDiv.innerHTML = `
                                                <label for="image" class="block text-sm font-medium text-gray-700">Tim
                                    Innovillage</label>
                <div class="flex">
                    <label for="image${teamCount}"
                        class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-36 py-8 px-14 rounded-md hover:bg-slate-100 bg-cover bg-center">
                        ➕
                    </label>
                    <input type="file" id="image${teamCount}" name="image${teamCount}" class="hidden"
                        onchange="displayImageInLabel(this)">
                    <div class="flex-col pl-5">
                        <input type="text" id="name" placeholder="Nama Anggota"
                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                        <input type="text" id="position" placeholder="Jabatan"
                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                    </div>
                </div>
                <select name="status${teamCount}" id="status"
                    class="mt-2 block w-[75%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                    <option value="Inhouse">Inhouse</option>
                    <option value="Alumni">Alumni</option>
                </select>
                `;

                // Append new team item to the container
                teamContainer.appendChild(newTeamDiv);

                // Adjust grid layout if more than 2 forms
                if (teamCount === 3) {
                    teamContainer.classList.add('md:grid-cols-3');
                }
            } else {
                alert('Maksimal 3 anggota');
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
