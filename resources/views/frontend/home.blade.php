<x-frontend-layout>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center gy-4">

            <!-- LEFT SIDE: Image + Content -->
            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1552566626-52f8b828add9"
                    class="img-fluid rounded shadow mb-4"
                    alt="Business Partner">

                <h2 class="fw-bold mb-3">Grow Your Restaurant or Store</h2>
                <p class="text-muted">
                    Join HamroBazar and expand your business reach.
                    Register your restaurant or store and get listed on our platform.
                </p>

                <ul class="list-unstyled text-muted">
                    <li class="mb-2">✔ Simple registration process</li>
                    <li class="mb-2">✔ Reach more customers online</li>
                    <li class="mb-2">✔ No technical knowledge required</li>
                </ul>
            </div>

            <!-- RIGHT SIDE: FORM -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold mb-4">Client Request Form</h4>
                        if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('client.request') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Client Name</label>
                                <input type="text" name="client_name" class="form-control" placeholder="Enter your full name"  required value="{{ old('client_name') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Shop / Restaurant Name</label>
                                <input type="text" name="shop_name" class="form-control" placeholder="Enter business name"  required value="{{ old('shop_name') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="text" name="contact" class="form-control" placeholder="+977-98XXXXXXXX"  required value="{{ old('contact') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="example@email.com"  required value="{{ old('email') }}">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Business Address</label>
                                <input type="text" name="address" class="form-control" placeholder="City, Area, Street"  required value="{{ old('address') }}">
                            </div>

                            <div class="mb-4 form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="terms"
                                    name="terms"
                                    required
                                >
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-decoration-none">terms and conditions</a>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Submit Request
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</x-frontend-layout>
