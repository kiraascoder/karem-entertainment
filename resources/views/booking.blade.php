<x-layout>
    <section id="booking" class="container pt-5 font-scope-one">

        <div class="bg-white p-8 rounded-md shadow-md">
            <h2 class="text-center mb-4 font-bold">Book Your Service</h2>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="name" name="name" required placeholder="Enter your name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="location" name="location" required placeholder="Enter your location">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone-number" class="form-label">Whatsapp Number</label>
                        <input type="text"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="phone-number" name="phone-number" required placeholder="Enter your phone number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="email" name="email" required placeholder="Enter your email">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="bookingDate" class="form-label">Booking Date</label>
                        <input type="date"
                            class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="bookingDate" name="bookingDate" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="service" class="form-label">Select Category</label>
                        <select
                            class="form-select border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                            id="service" name="service" required>
                            <option value="">Choose a category</option>
                            <option value="Dokumentasi">Dokumentasi</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Event Organizer">Event Organizer</option>
                            <option value="3D Design">3D Design</option>
                        </select>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="message" class="form-label">Additional Message</label>
                    <textarea class="form-control border-2 border-gray-300 focus:ring-2 focus:ring-[#FF8303] rounded-md px-4 py-2"
                        id="message" name="message" rows="3" placeholder="Write any additional requests or notes here"></textarea>
                </div>


                <div class="text-center">
                    <button type="submit"
                        class="bg-[#FF8303] text-[#1B1A17] font-bold px-5 py-2 rounded-full hover:bg-grey ease-out duration-300 font-scope-one">
                        Submit Booking
                    </button>
                </div>
            </form>
        </div>

    </section>
</x-layout>
