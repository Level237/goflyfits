@extends("layouts.Frontend.main")

@section('title')
Booking clothing
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}">
@section('content')
@include('layouts.Frontend.header-sticky')
<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-0">
        <div class="container">
            <div class="row mt-4 align-items-center">
                <div class="col-12">
                    <!-- Card START -->
                    <div class="card bg-light overflow-hidden px-sm-5">
                        <div class="row align-items-center g-4">

                            <!-- Content -->
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <!-- Breadcrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-dots mb-0">
                                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><i class="bi bi-house me-1"></i> Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('clothing.show',$clothing->slug) }}">{{ $clothing->title }}</a></li>
                                            <li class="breadcrumb-item active">Booking</li>
                                        </ol>
                                    </nav>
                                    <!-- Title -->
                                    <h1 class="m-0 h2 card-title">Review your Booking</h1>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-sm-3 text-end d-none d-sm-block">
                                <img src="assets/images/element/17.svg" class="mb-n4" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Steps START -->
    <section>
        <div class="container">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Step Buttons START -->
                <div class="bs-stepper-header" role="tablist">
                    <!-- Step 1 -->
                    <div class="step" data-target="#step-1">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
                                <span class="bs-stepper-circle">1</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">clothing Review</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 2 -->
                    <div class="step" data-target="#step-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
                                <span class="bs-stepper-circle">2</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">User Info</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 3 -->
                    <div class="step" data-target="#step-3">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
                                <span class="bs-stepper-circle">3</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Payment</h6>
                        </div>
                    </div>
                </div>
                <!-- Step Buttons END -->

                <!-- Step content START -->
                <div class="bs-stepper-content p-0 pt-4">
                    <div class="row g-4">

                        <!-- Main content START -->
                        <div class="col-xl-8">
                            <form onsubmit="return false">

                                <!-- Step 1 content START -->
                                <div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Clothing Review</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Tour list START -->
                                        <div class="card border p-4">
                                            <!-- Card body START -->
                                            <div class="card-body p-0">
                                                <div class="row g-4 align-items-center">
                                                    <!-- Image -->
                                                    <div class="col-md-4">
                                                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items="1">
                                                            <!-- Image item -->
                                                            <div><img class="rounded" src="{{ Storage::url($clothing->clothing_profile) }}" alt="Card image"></div>
                                                        </div>
                                                    </div>

                                                    <!-- card body -->
                                                    <div class="col-md-8">
                                                        <!-- Title and rating -->
                                                        <div class="d-sm-flex justify-content-sm-between">
                                                            <!-- Card title -->
                                                            <div>
                                                                <h4 class="card-title mb-2">{{ $clothing->title }}</h4>

                                                            </div>
                                                            <!-- Rating Star -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div style="justify-content: space-between;align-items:center" class="d-flex">
                                                            <div>
                                                                <h5>Taille</h5>
                                                            </div>
                                                            <div>
                                                                <h5>{{ $clothing->size }}</h5>
                                                            </div>
                                                        </div>
                                                        <div style="justify-content: space-between;align-items:center" class="d-flex">
                                                            <div>
                                                                <h5>Prix</h5>
                                                            </div>
                                                            <div>
                                                                <h5>${{ $clothing->price }}</h5>
                                                            </div>
                                                        </div>
                                                        <!-- List -->
                                                        <div class="grid-cols-3 mt-3">
                                                        @foreach ($clothing->categories as $category)

                                                        <div style="margin-bottom: 6px;font-size:15px;" class="badge bg-primary text-dark">{{ $category->category_title }}</div>

                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->

                                            <!-- Card footer -->
                                            <div class="card-footer p-0 pt-4">

                                            </div>
                                        </div>
                                        <!-- Tour list END -->



                                        <!-- Hotel detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-flex justify-content-between">
                                                <!-- Title -->
                                                <h5 class="mb-0">clothing details</h5>

                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-8">
                                                        <h6>Marque :</h6>
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">{{ $clothing->brand->brand_title }}</h6>

                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                                <hr> <!-- Divider -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-8">
                                                        <h6>Genre :</h6>
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">@if($clothing->gender==1)
                                                            Homme

                                                            @else
                                                            Femme
                                                        @endif</h6>

                                                    </div>
                                                </div>



                                                <!-- Hotel item END -->

                                            </div>

                                            <!-- Card body END -->
                                        </div>
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-flex justify-content-between">
                                                <!-- Title -->
                                                <h5 class="mb-0">Measures Details</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/full_shoulder_width.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Full Shoulder width</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->full_shoulder_width }}</h5>
                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                                <hr> <!-- Divider -->

                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/sleeves.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Sleeves</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->sleeves }}</h5>
                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                                <hr> <!-- Divider -->

                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/full_chess.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Full Chest</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->full_chest }}</h5>
                                                    </div>
                                                </div>
                                                <hr> <!-- Divider -->
                                                <!-- Hotel item END -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/waist-removebg-preview.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Waist</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->waist }}</h5>
                                                    </div>
                                                </div>
                                                <hr> <!-- Divider -->
                                                <!-- Hotel item END -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/hips-removebg-preview.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Hips/seat</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->hips }}</h5>
                                                    </div>
                                                </div>
                                                <hr> <!-- Divider -->
                                                <!-- Hotel item END -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-6">
                                                        <img style="width: 200px" src="{{ asset('assets/images/measure/hips-removebg-preview.png') }}" alt="">
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-6">
                                                        <h5 class="mb-2 mt-4 text-center">Hips/seat</h5>
                                                        <h5 class="text-success mt-3 text-center mb-0">{{ $clothing->measure->hips }}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body END -->
                                        </div>
                                        <!-- Hotel detail END -->

                                        <!-- Cancellation & Date change END -->

                                        <!-- Step 1 button -->
                                        <div class="text-end">
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Client</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Alert box START -->
                                        <div class="alert alert-warning d-flex" role="alert">
                                            <span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
                                            A customer passport is mandatory. The passport must have 2 blank pages and 6-month validity.
                                        </div>
                                        <!-- Alert box END -->

                                        <!-- Traveler 1 form START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Customer</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Title -->
                                                    <div class="col-md-2">
                                                        <label class="form-label">Title</label>
                                                        <div class="form-control-bg-light">
                                                            <select class="form-select form-select-sm js-choice border-0">
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <!-- Last name -->
                                                    <div class="col-md-10">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Last name</label>
                                                            <input value="{{ auth()->user()->full_name }}" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Booking detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Your booking detail will be sent here</h5>
                                            </div>
                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Mobile Number</label>
                                                            <input value="{{ auth()->user()->phone_number }}" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Email id -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Email id</label>
                                                            <input value="{{ auth()->user()->email }}" type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Booking detail END -->

                                        <!-- Step 2 button -->
                                        <div class="hstack gap-2 flex-wrap justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Continue to payment</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Payment options</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Credit or Debit Card START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                                <h5 class="mb-2 mb-sm-0">Credit or Debit Card</h5>
                                                <ul class="list-inline my-0">
                                                    <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/visa.svg') }}" class="h-30px" alt=""></a></li>
                                                    <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/mastercard.svg') }}" class="h-30px" alt=""></a></li>
                                                    <li class="list-inline-item"> <a href="#"><img src="{{ asset('assets/images/element/expresscard.svg') }}" class="h-30px" alt=""></a></li>
                                                </ul>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Card number -->
                                                    <div class="col-12">
                                                        <label class="form-label">Card Number</label>
                                                        <div class="position-relative form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="14" placeholder="XXXX XXXX XXXX XXXX">
                                                            <img src="assets/images/element/visa.svg" class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt="">
                                                        </div>
                                                    </div>

                                                    <!-- Expiration Month -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Expiration Month</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="2">
                                                        </div>
                                                    </div>

                                                    <!-- Expiration Year -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Expiration Year</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="4">
                                                        </div>
                                                    </div>

                                                    <!-- Cvv/CVC -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">CVV / CVC</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="3" placeholder="XXX">
                                                        </div>
                                                    </div>

                                                    <!-- Card holder name -->
                                                    <div class="col-12">
                                                        <label class="form-label">Name of the cardholder</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control" aria-label="name of the cardholder">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Credit or Debit Card END -->

                                        <!-- Paypal START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Pay with Paypal</h5>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body text-center">
                                                <!-- Image -->
                                                <img src="assets/images/element/paypal.svg" class="h-70px mb-3" alt="">
                                                <p class="mb-3"><strong>Tips:</strong> Simply click on the payment button below to proceed to the PayPal payment page.</p>

                                                <!-- Button -->
                                                <a href="#" class="btn btn-sm btn-outline-primary mb-0">Pay with Paypal</a>
                                            </div>
                                        </div>
                                        <!-- Paypal END -->

                                        <!-- Step 3 button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-success next-btn mb-0">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                            </form>
                        </div>
                        <!-- Main content END -->

                        <!-- Right sidebar START -->
                        <aside class="col-xl-4">
                            <div data-sticky="" data-margin-top="80" data-sticky-for="1199">
                                <div class="card card-body bg-light p-4">
                                    <!-- Title -->
                                    <h6 class="text-danger fw-normal">Hurry! Limited cars left</h6>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Base Price</span>
                                            <span class="h6 fw-light mb-0">${{ $clothing->price }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">State Tax</span>
                                            <span class="h6 fw-light mb-0">$1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">day</span>
                                            <span class="h6 fw-light mb-0">24 hours</span>
                                        </li>
                                        <li class="list-group-item py-0"><hr class="my-0"></li>
                                        <!-- Divider -->
                                        <li class="list-group-item d-flex justify-content-between pb-0">
                                            <span class="h5 fw-normal mb-0">Total</span>
                                            <span class="h5 fw-normal mb-0">
                                                @php
                                                    $price=$clothing->price + 1
                                                @endphp
                                                ${{ $price }}
                                            </span>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </aside>
                        <!-- Right sidebar END -->

                    </div>

                </div>
                <!-- Step content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Steps END -->

    </main>
    <script src="{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}"></script>
@endsection
