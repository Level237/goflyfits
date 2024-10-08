@extends("layouts.Frontend.main")

@section('title')
All Clothings
@endsection

@section('content')
@include('layouts.Frontend.header-sticky')
<main >

    <!-- =======================
    Main Banner START -->
    <section  class="pt-0">
        <div  class="container">
            <!-- Background image -->
            <div  class="rounded-3 p-3 p-sm-5" style="background-image: url({{ asset('assets/images/bg/05.jpg') }}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row my-2 my-xl-5">
                    <div class="col-md-8 mx-auto">
                        <h1 class="text-center text-white">{{ count($clothings) }} clothings</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
                    <div class="row g-4 align-items-center">
                        <!-- Location -->
                        <div class="col-lg-4">
                            <!-- Input -->

                            <div class="form-mix-icon-input form-size-lg">
                                <select name="category_id" class="form-select js-choice" data-search-enabled="true">
                                    <option value="">Enter one category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                    @endforeach
                                </select>
                                <!-- Icons -->
                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-geo-alt fs-5"></i></span>
                                <a href="#" class="h6 mb-0 position-absolute top-50 end-0 translate-middle pe-1">
                                    <i class="fa-solid fa-place"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Check in -->
                        <div class="col-lg-4">
                            <!-- Choices -->
                            <div class="form-mix-icon-input form-size-lg">
                                <select name="town" class="form-select js-choice" data-search-enabled="true">
                                    <option >Search your position</option>
                                    <option value="douala">Douala</option>
                                    <option value="yaoundé">Yaoundé</option>
                                    <option value="garoua">Garoua</option>
                                    <option value="bafoussam">Bafoussam</option>
                                </select>
                                <!-- Icons -->
                                <span class="position-absolute top-50 start-0 translate-middle ps-5"><i class="bi bi-geo-alt fs-5"></i></span>
                                <a href="#" class="h6 mb-0 position-absolute top-50 end-0 translate-middle pe-1">
                                    <i class="fa-solid fa-crosshairs"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Guest -->
                        <div class="col-lg-4">
                            <div class="form-icon-input ">
                                <input type="date" max="2024-07-25" min="2024-07-24" name="date" class="form-control form-control-lg flatpickr" data-date-format="d/m/y" placeholder="Selectionnez une date pour votre besoin">
                                <span class="form-icon"><i class="bi bi-calendar fs-5"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="btn-position-md-middle">
                        <a class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Title and Tabs START -->
    <section class="pt-0 pb-4">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta START -->
                    <div class="d-flex justify-content-between">
              <!-- Filter collapse button -->
              <input type="checkbox" class="btn-check" id="btn-check-soft">
              <label class="btn btn-primary-soft btn-primary-check mb-0" for="btn-check-soft" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-controls="collapseFilter">
                <i class="bi fa-fe bi-sliders me-2"></i>Show Filters
              </label>

              <!-- tabs -->
              <ul class="nav nav-pills nav-pills-dark" id="tour-pills-tab" role="tablist">
                <!-- Tab item -->
                <li class="nav-item">
                  <a class="nav-link rounded-start rounded-0 mb-0" href="hotel-list.html.htm"><i class="bi fa-fw bi-list-ul"></i></a>
                </li>
                <!-- Tab item -->
                <li class="nav-item">
                  <a class="nav-link rounded-end rounded-0 mb-0 active" href="hotel-grid.html.htm"><i class="bi fa-fw bi-grid-fill"></i></a>
                </li>
              </ul>
                    </div>
                    <!-- Meta END -->
                </div>
            </div>
            <!-- Title and button END -->

            <!-- Collapse body START -->
            <div class="collapse" id="collapseFilter">
                <div class="card card-body bg-light p-4 mt-4 z-index-9">

                    <!-- Form START -->
                    <form class="row g-4">
                        <!-- Input item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Enter Hotel Name</label>
                                <input type="text" class="form-control form-control-lg">
                            </div>
                        </div>

                        <!-- nouislider item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Price Range</label>
                                <div class="position-relative">
                                    <div class="noui-wrapper">
                                        <div class="d-flex justify-content-between">
                                            <input type="text" class="text-body input-with-range-min">
                                            <input type="text" class="text-body input-with-range-max">
                                        </div>
                                        <div class="noui-slider-range mt-2" data-range-min='500' data-range-max='2000' data-range-selected-min='700' data-range-selected-max='1500'></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Select item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-size-lg form-control-borderless">
                                <label class="form-label">Popular Filters</label>
                                <select class="form-select js-choice border-0">
                                    <option value="">Select Option</option>
                                    <option>Recently search</option>
                                    <option>Most popular</option>
                                    <option>Top rated</option>
                                </select>
                            </div>
                        </div>

                        <!-- Customer rating -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Customer Rating</label>
                                <ul class="list-inline mb-0 g-3">
                                    <!-- 1 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-1">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-1">3+</label>
                                    </li>
                                    <!-- 2 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-2">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-2">3.5+</label>
                                    </li>
                                    <!-- 3 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-3">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-3">4+</label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-4">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-4">4.5+</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Star rating -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-control-borderless">
                                <label class="form-label">Star Rating</label>
                                <ul class="list-inline mb-0 g-3">
                                    <!-- 1 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-9">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-9">1<i class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 2 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-10">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-10">2<i class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 3 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-11">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-11">3<i class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-12">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-12">4<i class="bi bi-star-fill"></i></label>
                                    </li>
                                    <!-- 4 -->
                                    <li class="list-inline-item">
                                        <input type="checkbox" class="btn-check" id="btn-check-13">
                                        <label class="btn btn-white btn-primary-soft-check" for="btn-check-13">5<i class="bi bi-star-fill"></i></label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Select item -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-size-lg form-control-borderless">
                                <label class="form-label">Hotel Type</label>
                                <select class="form-select js-choice border-0">
                                    <option value="">Select Option</option>
                                    <option>Free Cancellation Available</option>
                                    <option>Pay At Hotel Available</option>
                                    <option>Free Breakfast Included</option>
                                </select>
                            </div>
                        </div>

                        <!-- Check box item -->
                        <div class="col-12">
                            <div class="form-control-borderless">
                                <label class="form-label">Amenities</label>
                                <div class="row g-3">
                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault">
                                                Air Conditioning
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                            <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault2">
                                                Room Services
                                            </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault3">
                                                    Dining
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault4">
                                                    Caretaker
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault5">
                                                    Free Internet
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault6">
                                                    Business Service
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault7">
                                                    Bonfire
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault8">
                                                    Mask
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault9">
                                                    Spa
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault10">
                                                    Swimming pool
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault11">
                                                    Fitness Centre
                                                </label>
                                        </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                <label class="form-check-label h6 fw-light mb-0" for="flexCheckDefault12">
                                                    Bar
                                                </label>
                                        </div>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="text-end align-items-center">
                            <button class="btn btn-link p-0 mb-0">Clear all</button>
                            <button class="btn btn-dark mb-0 ms-3">Apply filter</button>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>
            </div>
            <!-- Collapse body END -->

        </div>
    </section>
    <!-- =======================
    Title and Tabs END -->

    <!-- =======================
    Hotel grid START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4">

                @foreach ($clothings as $clothing)
                <!-- Card item START -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow p-2 pb-0 h-100">
                        <!-- Overlay item -->


                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-xs arrow-dark rounded-2 overflow-hidden">
                            <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items="1">
                                <!-- Image item -->
                                <div><img src="{{ Storage::url($clothing->clothing_profile) }}" alt="Card image"></div>
                            </div>
                        </div>
                        <!-- Slider END -->

                        <!-- Card body START -->
                        <div class="card-body px-3 pb-0">
                            <!-- Rating and cart -->
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" class="badge bg-dark text-white"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a>
                                <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title"><a href="hotel-detail.html.htm">{{ $clothing->title }}</a></h5>

                            <!-- List -->
                            <div class="grid-cols-3">

                                @if(isset($category_name))
                                    <div style="margin-bottom: 6px;font-size:12px" class="badge bg-dark text-white">{{ $clothing->category_title }}</div>
                                @else
                                    @foreach ($clothing->categories as $category)

                                    <div style="margin-bottom: 6px;font-size:12px" class="badge bg-dark text-white">{{ $category->category_title }}</div>

                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0 mt-2">
                            <!-- Price and Button -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Price -->
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1">${{ $clothing->price }}</h5>
                                    <span class="mb-0 me-2">/day</span>

                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="{{ route('clothing.show',$clothing->slug) }}" class="btn btn-sm btn-primary-soft mb-0 w-100">View Detail<i class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div> <!-- Row END -->

            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Hotel grid END -->

    </main>
@endsection
