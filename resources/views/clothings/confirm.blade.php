@extends("layouts.Frontend.main")

@section('title')
Booking clothing {{ $clothing->title }}
@endsection

@section('content')
@include('layouts.Frontend.header-sticky')

<main>

    <!-- =======================
    Main content START -->
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">

                    <div class="card shadow">
                        <!-- Image -->
                        <img src="assets/images/gallery/04.jpg" class="rounded-top" alt="">

                        <!-- Card body -->
                        <div class="card-body text-center p-4">
                            <!-- Title -->
                            <h1 class="card-title fs-3">🎊 Congratulations! 🎊</h1>
                            <p class="lead mb-3">Votre Vetement à bien été reserver</p>

                            <!-- Second title -->
                            <h5 class="text-primary mb-4">{{ $clothing->title }}</h5>

                            <!-- List -->
                            <div class="row justify-content-between text-start mb-4">
                                <div class="col-lg-5">
                                    <ul class="list-group list-group-borderless">

                                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                            <span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Reservé par:</span>
                                            <span class="h6 fw-normal mb-0">{{ auth()->user()->full_name }}</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                            <span class="mb-0"><i class="bi bi-wallet2 fa-fw me-2"></i>Payment Method:</span>
                                            <span class="h6 fw-normal mb-0">Credit card</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                            <span class="mb-0"><i class="bi bi-currency-dollar fa-fw me-2"></i>Total Price:</span>
                                            <span class="h6 fw-normal mb-0">${{ $clothing->price + 1 }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5">
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                            <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Date:</span>
                                            <span class="h6 fw-normal mb-0">{{ $reservation->reservedOf }}</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                                            <span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>Tour Date:</span>
                                            <span class="h6 fw-normal mb-0">{{ $reservation->reservedTo }}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="d-sm-flex justify-content-sm-end d-grid">
                                <!-- Share button with dropdown -->
                                <div class="dropdown me-sm-2 mb-2 mb-sm-0">
                                    <a href="{{ route('homepage') }}" class="btn btn-light mb-0 w-100"   aria-expanded="false">
                                        <i class="bi bi-share me-2"></i>Accueil
                                    </a>
                                    <!-- dropdown button -->

                                </div>
                                <!-- Download button -->
                                <a href="#" class="btn btn-primary mb-0"><i class="bi bi-file-pdf me-2"></i>Mes Reservations</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main content START -->

    </main>
@endsection
