@extends('layouts.Backend.Customer.main')

@section('title')
Reservations
@endsection

@section('content')
<div class="d-grid mb-0 d-lg-none w-100">
    <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
        <i class="fas fa-sliders-h"></i> Menu
    </button>
</div>

<!-- Wishlist START -->
<div class="card border bg-transparent">
    <!-- Card header -->
    <div class="card-header bg-transparent border-bottom">
        <h4 class="card-header-title">Mes Reservations</h4>
    </div>

    <!-- Card body START -->
    <div class="card-body vstack gap-4">
        <!-- Select and button -->
        <form class="d-flex justify-content-between">
            <div class="col-6 col-xl-3">
                <select class="form-select form-select-sm js-choice border-0">
                    <option value="">Sort by</option>
                    <option>Recently search</option>
                    <option>Most popular</option>
                    <option>Top rated</option>
                </select>
            </div>
            <!-- Button -->
            <button class="btn btn-danger-soft mb-0"><i class="fas fa-trash me-2"></i>Remove all</button>
        </form>

        @foreach ($reservations as $reservation)
        <div class="card shadow p-2">
            <div class="row g-0">
                <!-- Card img -->
                <div class="col-md-3">
                    <img src="{{ Storage::url($reservation->clothing_profile) }}" class="card-img rounded-2" alt="Card image">
                </div>

                <!-- Card body -->
                <div class="col-md-9">
                    <div class="card-body py-md-2 d-flex flex-column h-100">

                        <!-- Rating and buttons -->


                        <!-- Title -->
                        <h5 class="card-title mb-1"><a href="hotel-detail.html.htm">{{ $reservation->title }}</a></h5>
                        <small><i class="bi bi-geo-alt me-2"></i></small>

                        <!-- Price and Button -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                            <!-- Button -->
                            <div class="d-flex align-items-center">
                                <h5 class="fw-bold mb-0 me-1">$980</h5>
                                <span class="mb-0 me-2">/day</span>
                            </div>
                            <!-- Price -->
                            <div class="mt-3 mt-sm-0">
                                <a href="hotel-detail.html.htm" class="btn btn-sm btn-dark w-100 mb-0">View hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <!-- Wishlist item END -->

    </div>
    <!-- Card body END -->
</div>
@endsection
