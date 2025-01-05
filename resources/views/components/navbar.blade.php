<header class="bg-[#1B1A17] sticky top-0 z-50">
    <nav class="flex justify-between items-center w-[92%] mx-auto font-scope-one">
        <div class="w-16 p-4">
            <div class="w-32">
                <a href="/">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
        </div>

        <!-- Menu Links -->
        <div
            class="nav-links duration-500 md:static absolute bg-[#1B1A17] md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 font-scope-one mt-3 text-[#F0E3CA]">
                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                        href="/gallery">Gallery</a>
                </li>

                @guest

                    <li>
                        <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                            href="/booking">Booking</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                            href="/review">Review</a>
                    </li>
                @else
                    @if (Auth::user()->role == 'manager')
                        <li>
                            <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                                href="/management">Management</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                                href="/order-list">Order List</a>
                        </li>
                    @elseif (Auth::user()->role == 'user')
                        <li>
                            <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                                href="/booking">Booking</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                                href="/review">Review</a>
                        </li>
                    @endif
                @endguest


                <li>
                    <a class="hover:text-gray-500 text-inherit no-underline font-bold text-xl text-[#F0E3CA]"
                        href="/about-us">About Us</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-6">
            @auth
                <a href="{{ auth()->user()->role == 'manager' ? route('manager.page') : route('account') }}">

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


            <img src="{{ asset('img/icon/burger-bar.png') }}" onclick="onToggleMenu(this)" name="menu"
                class="text-3xl cursor-pointer md:hidden w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10" alt="">
        </div>
    </nav>
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</header>
