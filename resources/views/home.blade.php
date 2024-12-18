<x-layout>
    <div class="carousel_container relative">
        <!-- Overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent z-10"></div>

        <!-- Teks di kanan bawah -->
        <div class="absolute bottom-0 right-0 mb-8 mr-8 text-white text-3xl font-bold z-20"
            style="text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);">
            <h1 class="text-9xl">We Are</h1>
            <p class="text-7xl">Kareem Entertainment</p>
        </div>

        <!-- Carousel untuk desktop dan tablet -->
        <div id="carouselExample" class="carousel slide md:block hidden" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel/carousel1.jpg') }}" class="d-block w-full h-[91vh] object-cover"
                        alt="First Image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel/carousel2.jpg') }}" class="d-block w-full h-[91vh] object-cover"
                        alt="Second Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>




    <!-- Teks pengganti untuk perangkat mobile -->
    <div class="md:hidden block text-center p-4 bg-gray-100 border border-gray-300 rounded-lg">
        <p class="text-xl font-semibold text-gray-800">Ini adalah teks pengganti pada perangkat mobile!</p>
    </div>
    </div>




    <div class="category mt-4">
        <h2 class="text-3xl font-bold mb-4 text-center mt-2 font-scope-one">Categories</h2>
        <div class="container">
            <div class="row">

                <div
                    class="col-md-6 mb-4 group relative items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="card h-100 border-none">

                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="{{ asset('img/categories/event-organizer.jpg') }}" alt="Category 1">
                    </div>
                    <div
                        class="absolute inset-0 bg-black opacity-0 transition-opacity duration-500 group-hover:opacity-90 z-20">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 z-20">
                        <h1 class="font-dmserif text-3xl font-bold text-white"
                            style="text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);">Event Organizer</h1>
                    </div>
                </div>
                <!-- Column 2, Row 1 -->
                <div
                    class="col-md-6 mb-4 group relative items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="card h-100 border-none">
                        <img class="w-100 h-100 object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="{{ asset('img/categories/event-planner.jpg') }}" alt="Category 1">
                    </div>
                    <div
                        class="absolute inset-0 bg-black opacity-0 transition-opacity duration-500 group-hover:opacity-90 z-10">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white"
                            style="text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);">Event Planner</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Column 1, Row 2 -->
                <div
                    class="col-md-6 mb-4 group relative items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="card h-100 border-none">
                        <img class="w-100 h-100 object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="{{ asset('img/categories/dokumentasi.jpg') }}" alt="Category 1">
                    </div>
                    <div
                        class="absolute inset-0 bg-black opacity-0 transition-opacity duration-500 group-hover:opacity-90 z-10">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white"
                            style="text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);">Dokumentasi</h1>
                    </div>
                </div>

                <!-- Column 2, Row 2 -->
                <div
                    class="col-md-6 mb-4 group relative items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="card h-100 border-none"> <!-- Menghilangkan border -->
                        <img class="w-100 h-100 object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                            src="{{ asset('img/categories/3d-design.png') }}" alt="Category 1">
                    </div>
                    <div
                        class="absolute inset-0 bg-black opacity-0 transition-opacity duration-500 group-hover:opacity-90 z-10">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white"
                            style="text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);">3D Design</h1>
                    </div>
                </div>
            </div>
            <div class="text-center ">
                <a href="/categories">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300 font-scope-one">
                        See More
                    </button></a>

            </div>
        </div>


    </div>

    <div class="gallery_post mt-2">
        <div class="container">
            <h2 class="text-3xl font-bold mb-4 text-center mt-2 font-scope-one">Gallery Posts</h2>
            <div class="row">
                <!-- First Row -->
                <div class="col-md-4 mb-4">
                    <img src="image1.jpg" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="image2.jpg" class="img-fluid" alt="Image 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="image3.jpg" class="img-fluid" alt="Image 3">
                </div>
            </div>
            <div class="row">
                <!-- Second Row -->
                <div class="col-md-4 mb-4">
                    <img src="image4.jpg" class="img-fluid" alt="Image 4">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="image5.jpg" class="img-fluid" alt="Image 5">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="image6.jpg" class="img-fluid" alt="Image 6">
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button
                class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-[#EEEDEB] ease-out duration-300 font-scope-one">
                See More
            </button>
        </div>
    </div>

</x-layout>
