<x-layout>
    <!-- Edit Account Form -->
    <section id="edit-account" class="container mt-12 pt-5">
        <h2 class="text-center mb-4">Edit Your Account</h2>
        <form action="#" method="post">
            <div class="row">
                <!-- Full Name Field -->
                <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required
                        placeholder="Enter your full name">
                </div>

                <!-- Email Address Field -->
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required
                        placeholder="Enter your email">
                </div>
            </div>

            <div class="row">
                <!-- Password Field -->
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required
                        placeholder="Enter a new password">
                </div>

                <!-- Confirm Password Field -->
                <div class="col-md-6 mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required
                        placeholder="Confirm your password">
                </div>
            </div>




            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </section>
</x-layout>
