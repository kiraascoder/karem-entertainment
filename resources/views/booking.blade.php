<x-layout>
    <section id="booking" class="container pt-5">

        <div class="bg-white p-8 rounded-md ">
            <h2 class="text-center mb-4 ">Book Your Service</h2>
            <form action="#" method="post">
                <div class="row">
                    <!-- Name Field -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            placeholder="Enter your name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required
                            placeholder="Enter your location">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone-number" class="form-label">Whatsapp Number</label>
                        <input type="text" class="form-control" id="phone-number" name="phone-number" required
                            placeholder="Enter your phone number">
                    </div>

                    <!-- Email Field -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="Enter your email">
                    </div>
                </div>

                <div class="row">
                    <!-- Booking Date Field -->
                    <div class="col-md-6 mb-3">
                        <label for="bookingDate" class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="bookingDate" name="bookingDate" required>
                    </div>

                    <!-- Service Type Field -->
                    <div class="col-md-6 mb-3">
                        <label for="service" class="form-label">Select Category</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="">Choose a category</option>
                            <option value="dokumentasi">Dokumentasi</option>
                            <option value="event-planner">Event Planner</option>
                            <option value="event-organizer">Event Organizer</option>
                            <option value="3d-design">3D Design</option>
                        </select>
                    </div>
                </div>

                <!-- Additional Message Field -->
                <div class="mb-3">
                    <label for="message" class="form-label">Additional Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"
                        placeholder="Write any additional requests or notes here"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit Booking</button>
                </div>
            </form>
        </div>

    </section>
</x-layout>
