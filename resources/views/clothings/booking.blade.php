@extends("layouts.Frontend.main")

@section('title')
Booking clothing {{ $clothing->title }}
@endsection

@section('content')
@include('layouts.Frontend.header-sticky')
<main >

    <!-- =======================
    Main Content START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-9 mx-auto">
                    <div class="vstack gap-4">

                        <!-- Booking summary START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom p-4">
                                <h1 class="mb-0 fs-3">Booking summary</h1>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <div class="row g-md-4">
                                    <!-- Image -->
                                    <div class="col-md-3">
                                        <div class="bg-light rounded-3 px-4 py-5 mb-3 mb-md-0">
                                            <img src="{{ Storage::url($clothing->clothing_profile) }}" alt="">
                                        </div>
                                    </div>

                                    <!-- Card and address detail -->
                                    <div class="col-md-9">
                                        <!-- Title -->
                                        <h5 class="card-title mb-2">{{ $clothing->title }}</h5>


                                            <div style="display: flex;justify-content:space-between:width:100%">
                                                <div style="flex: 1">
                                                    {{ $clothing->brand->brand_title }}
                                                </div>


                                                <div>
                                                    @foreach ($clothing->categories as $category)

                                    <div style="margin-bottom: 6px;font-size:12px" class="badge bg-primary text-white">{{ $category->category_title }}</div>

                                    @endforeach
                                                </div>
                                            </div>




                                        <!-- Pick up and drop address -->
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <small>Taille</small>
                                                <p class="h6 fw-light mb-md-0">{{ $clothing->size }}</p>
                                            </div>

                                            <div class="col-md-6">
                                                <small>Genre</small>
                                                <p class="h6 fw-light mb-0">
                                                    @if($clothing->gender==1)
                                                        Homme
                                                    @endif
                                                    @if($clothing->gender==0)
                                                        Femme
                                                @endif
                                                    </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Title -->
                                <h6 class="mb-0 mt-3">User Detail</h6>

                                <div class="row">
                                    <!-- List -->
                                    <div class="col-sm-8">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item">Name:<span class="h6 mb-0 fw-normal ms-1">{{ auth()->user()->full_name }}</span></li>
                                            <li class="list-group-item">Email:<span class="h6 mb-0 fw-normal ms-1">{{ auth()->user()->email }}</span></li>
                                            <li class="list-group-item">Phone Number:<span class="h6 mb-0 fw-normal ms-1">{{ auth()->user()->phone_number }}</span></li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-auto">
                                        <h6 class="mb-1 fw-normal">Total Amount</h6>
                                        <h2 class="mb-0 text-success">${{ $clothing->price +1 }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Booking summary END -->

                        <!-- Payment START -->
                        <div class="card shadow">
                            <!-- card header -->
                            <div class="card-header border-bottom p-4">
                                <h4 class="mb-0">Visa Card</h4>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4">
                                <!-- Card options -->
                                <div class="d-sm-flex align-items-center mb-3">
                                    <h6 class="mb-2 mb-sm-0">We Accept:</h6>
                                    <ul class="list-inline my-0 ms-sm-3">
                                        <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/visa.svg') }}" class="h-30px" alt=""></a></li>
                                        <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/mastercard.svg') }}" class="h-30px" alt=""></a></li>
                                        <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/expresscard.svg') }}" class="h-30px" alt=""></a></li>
                                    </ul>
                                </div>

                                <!-- Form START -->
                                <form method="GET" action="{{ route('pay.stripe') }}" class="row g-3">

                                    @csrf
                                    <!-- Card number -->
                                    <div class="col-12">
                                        <label class="form-label">Card Number</label>
                                        <div class="position-relative">
                                            <input name="card_number" type="text" class="form-control"  placeholder="XXXX XXXX XXXX XXXX">
                                            <img src="{{ asset('assets/images/element/visa.svg') }}" class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
                                        <input type="hidden" name="price" value="{{ $clothing->price + 1 }}">
                                        <input type="hidden" name="clothing_id" value="{{ $clothing->id }}">
                                        <input type="hidden" name="description" value="{{ $clothing->description }}">
                                        </div>
                                    </div>
                                    <!-- Expiration Date -->
                                    <div class="col-md-6">
                                        <label class="form-label">Expiration Date</label>
                                        <div class="input-group">
                                            <input name="exp_month" type="text" class="form-control" maxlength="2" placeholder="Month">
                                            <input type="text" class="form-control" name="exp_year" maxlength="4" placeholder="Year">
                                        </div>
                                    </div>
                                    <!--Cvv code  -->
                                    <div class="col-md-6">
                                        <label class="form-label">CVV / CVC</label>
                                        <input type="text" class="form-control" maxlength="3" placeholder="XXXX">
                                    </div>
                                    <!-- Card name -->


                                    <!-- Buttons -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mb-0 mt-2">Pay Now</button>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <!-- Payment END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Content END -->

    </main>
@endsection
