<div>
    <nav class="bg-black fixed w-full z-20 top-0 start-0">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto border-b border-gray-200 dark:border-gray-900">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="" class="h-8" alt="Company Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @if (Auth::check())
                    <button type="button"
                        class="text-black bg-orange-500 hover:bg-white-600 font-medium rounded-lg text-sm px-4 py-2 text-center">
                        <a href="/logout">Logout</a>
                    </button>
                @else
                    <button type="button"
                        class="text-black bg-orange-500 hover:bg-white-600 font-medium rounded-lg text-sm px-4 py-2 text-center">
                        <a href="/login">Login</a>
                    </button>
                @endif
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium md:p-0 md:flex-row md:mt-0 md:border-0 md:bg-white mt-2">

                    <li>
                        <a href="/gallery"
                            class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500"
                            aria-current="page">Gallery</a>
                    </li>
                    @guest

                        <li>
                            <a href="/booking"
                                class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Booking</a>
                        </li>
                        <li>
                            <a href="/review"
                                class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Review</a>
                        </li>
                    @else
                        @if (Auth::user()->role == 'manager')
                            <li>
                                <a href="/management"
                                    class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Management</a>
                            </li>
                            <li>
                                <a href="/order-list"
                                    class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Order
                                    List</a>
                            </li>
                        @elseif (Auth::user()->role == 'user')
                            <li>
                                <a href="/booking"
                                    class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Booking</a>
                            </li>
                            <li>
                                <a href="/review"
                                    class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Review</a>
                            </li>
                        @elseif (Auth::user()->role == 'eventorganizer')
                            <li>
                                <a href="/task-list"
                                    class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Task
                                    List</a>
                            </li>
                        @endif
                    @endguest

                    <li>
                        <a href="/about"
                            class="block py-2 px-3 md:p-0 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">About
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
