<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karem Entertainment</title>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Inter font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Scope+One&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- Vite CSS (if applicable) -->
    @vite('resources/css/app.css')

    <!-- Bootstrap CSS (for carousel) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-t from-[#F0E3CA] to-[#F0E3CA] h-screen">
    <section id="booking" class="container pt-5">
        <h2 class="text-center mb-4">Halo Pengguna</h2>
        <div class="text-center mt-4">
            <button class="btn btn-primary">Edit</button>
        </div>
        <div class="user-info flex justify-center items-center space-x-8">
            <div class="your-gallery text-center">
                <p>Your Gallery</p>
                <div class="review">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech
                            Innovations in 2022</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Exploring the most groundbreaking
                            technological innovations of 2022.</p>
                    </a>
                </div>
            </div>
            <div class="booking-status text-center">
                <p>Booking Status</p>
                <div class="review">
                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech
                            Innovations in 2022</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Exploring the most groundbreaking
                            technological innovations of 2022.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

</body>

</html>
