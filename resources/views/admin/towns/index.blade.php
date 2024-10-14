@extends('layouts.Backend.Admin.main')

@section('title')
Listes des villes
@endsection

@section('content')
<div class="page-content">

    <!-- Top bar START -->
    @include('layouts.Backend.Admin.nav')
    <!-- Top bar END -->

    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">



        <!-- Booking table START -->
        <div class="card shadow">
            <!-- Card header START -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Villes</h5>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-3">
                    <!-- Search -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select js-choice" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Free</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->

                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-7 g-4">
                        <div class="col"><h6 class="mb-0">Nom de la ville</h6></div>
                        <div class="col"><h6 class="mb-0">nombre de vetements</h6></div>
                        <div class="col"><h6 class="mb-0">Action</h6></div>
                    </div>
                </div>

              @foreach ($towns as $town)
              <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Booked by:</small>
                    <div class="d-flex align-items-center">

                        <!-- Info -->
                        <div class="ms-2">
                            <h6 class="mb-0 fw-light">{{ $town->town_name }}</h6>
                        </div>
                    </div>
                </div>





                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Payment:</small>


                        <div style="font-size: 13px" class="badge bg-primary bg-opacity-10 p-2 text-success">{{ count($town->clothing) }} look</div>
                </div>

                <!-- Data item -->
                <div class="col">

                    <a href="" class="btn btn-sm btn-light mb-0"><i class="fa-solid fa-edit"></i></a>
                    <form method="POST" action="{{ route('admin.towns.destroy',$town->id) }}" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-sm btn-light mb-0"><i class="fa-solid fa-trash"></i></button>
                      </form>
                </div>

            </div>
              @endforeach

            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer pt-0">
                <!-- Pagination and content -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Booking table END -->

    </div>
    <!-- Page main content END -->
</div>
@endsection
