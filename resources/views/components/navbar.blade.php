<header class="bg-[#F0E3CA] sticky top-0 z-50 shadow-lg">
    <nav class="flex justify-between items-center w-[92%] mx-auto font-scope-one">

        <div class="w-16">
            <a href="/">
                <p>Logo Image</p>
            </a>
        </div>


        <div
            class="nav-links duration-500 md:static absolute bg-[#F0E3CA] md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 font-scope-one">
                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl " href="gallery">Gallery</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl" href="booking">Booking</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl" href="review">Review</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl" href="about-us">About
                        Us</a>
                </li>
            </ul>
        </div>


        <div class="flex items-center gap-6">

            @auth
                <a href="{{ route('account') }}">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-white ease-out duration-300 font-scope-one">
                        My Account
                    </button>
                </a>
            @else
                <a href="{{ route('login') }}">
                    <button
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-white ease-out duration-300">
                        Sign in
                    </button>
                </a>
            @endauth

            <!-- Hamburger Menu for Mobile -->
            <img src="{{ asset('img/icon/burger-bar.png') }}" onclick="onToggleMenu(this)" name="menu"
                class="text-3xl cursor-pointer md:hidden w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10" alt="">
        </div>
    </nav>
</header>
