@extends("layouts.Frontend.main")

@section('title')
{{ $clothing->title }}
@endsection

@section('content')
@include('layouts.Frontend.header-sticky')
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-4">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta -->
                    <div class="d-flex justify-content-between align-items-lg-center">
                        <!-- Title -->
                        <ul class="nav nav-divider align-items-center mb-0">
                            <li class="nav-item h4">{{ $clothing->source }}</li>
                            <li class="nav-item h5 fw-light">disponibilité</li>
                            <li class="nav-item h5 fw-light">22 Jan 2025 - 07.25 PM</li>
                        </ul>

                        <!-- Buttons -->
                        <div class="ms-3">
                            <!-- Share button -->
                            <a href="#" class="btn btn-sm btn-light px-2 mb-0" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-fw fa-share-alt"></i>
                            </a>
                            <!-- dropdown button -->
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Main Content START -->
    <section class="pt-0">
        <div class="container" data-sticky-container="">
            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">

                        <!-- Main cab list START -->
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
                                                <h5>${{ $clothing->price }}/jour</h5>
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
                        <!-- Main cab list END -->



                        <!-- Driver and cab detail START -->
                        <div class="card bg-transparent">

                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Description</h4>
                            </div>

                            <!-- Card body -->
                            <div class="card-body pt-4 p-0">
                                <!-- List -->
                                <div>
                                    {{ $clothing->description }}
                                </div>




                            </div>

                        </div>
                        <!-- Driver and cab detail END -->

                        <!-- Inclusion & Exclusion START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Inclusion & Exclusion</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- Detail START -->
                                <div class="row g-3">
                                    <!-- List -->
                                    <div class="col-sm-6">
                                        <h5>Included in your price</h5>
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item mb-0 pb-0"><i class="fa-solid fa-check text-success me-1"></i>
                                                State tax
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i class="fa-solid fa-check text-success me-1"></i>
                                                Toll charge
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i class="fa-solid fa-check text-success me-1"></i>
                                                Driver Allowance
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i class="fa-solid fa-check text-success me-1"></i>
                                                Only one pickup and drop
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- List -->
                                    <div class="col-sm-6">
                                        <h5>Extra charge</h5>
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item mb-0 pb-0"><i class="bi bi-x-lg text-danger me-1"></i>
                                                Fare beyond 600kms
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i class="bi bi-x-lg text-danger me-1"></i>
                                                Airport entry charge
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Inclusion & Exclusion END -->
                        <div class="border-bottom bg-transparent">

                        </div>
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Sidebar START -->
                <aside class="col-xl-4">
                    <div data-sticky="" data-margin-top="80" data-sticky-for="1199">
                        <div class="card card-body bg-light p-4">
                            <!-- Title -->
                            <h6 class="text-danger fw-normal">Hurry! Limited cars left</h6>

                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Base Price</span>
                                    <span class="h6 fw-light mb-0">$260</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">State Tax</span>
                                    <span class="h6 fw-light mb-0">$50</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Night Charge</span>
                                    <span class="h6 fw-light mb-0">$100</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Convenience Fee</span>
                                    <span class="h6 fw-light mb-0">$25</span>
                                </li>
                                <li class="list-group-item py-0"><hr class="my-0"></li>
                                <!-- Divider -->
                                <li class="list-group-item d-flex justify-content-between pb-0">
                                    <span class="h5 fw-normal mb-0">Total</span>
                                    <span class="h5 fw-normal mb-0">$435</span>
                                </li>
                            </ul>

                            <div class="d-grid mt-4 gap-2">
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount1" value="option1" checked="">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount1">Pay $220 now (Half Payment)</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions" id="discount2" value="option2">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount2">Pay $435 now (Full payment)</label>
                                </div>

                                <!-- Button -->
                                <a href="cab-booking.html.htm" class="btn btn-dark mb-0 mt-2">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main Content END -->

    </main>
@endsection
