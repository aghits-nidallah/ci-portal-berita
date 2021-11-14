<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum CI4</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class='antialiased text-gray-700 min-h-screen' style="font-family: 'Poppins'">
    <div class="bg-white py-6 shadow-lg">
        <div class="mx-auto max-w-6xl flex items-center justify-between">
            <h6 class="text-lg">
                Dashboard Praktikum
            </h6>
            <p>
                Aghits Nidallah
            </p>
        </div>
    </div>

    <div class="min-h-screen flex items-center justify-between max-w-6xl mx-auto -mt-20">
        <div class="flex flex-col w-full h-full">
            <h4 class="text-6xl font-bold leading-tight">
                Dibuat dengan <span class="text-blue-500">Tailwind CSS</span>
                dan <span class="text-yellow-500">Codeigniter 4</span>.
            </h4>
        </div>
        <div class="flex w-full h-full relative -mt-64">
            <img src="https://picsum.photos/seed/<?= rand(0, 100) ?>/400" class="w-64 h-64 border-4 border-white rounded-lg object-cover shadow-xl absolute left-52 -top-16 transform rotate-12" />
            <img src="https://picsum.photos/seed/<?= rand(0, 100) ?>/400" class="w-64 h-64 border-4 border-white rounded-lg object-cover shadow-xl absolute left-20 top-16 transform -rotate-6" />
            <img src="https://picsum.photos/seed/<?= rand(0, 100) ?>/400" class="w-64 h-64 border-4 border-white rounded-lg object-cover shadow-xl absolute left-72 top-32 transform rotate-3" />
        </div>
    </div>
</body>
</html>