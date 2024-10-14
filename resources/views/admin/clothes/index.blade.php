@extends('layouts.Backend.Admin.main')

@section('title')
Listes des vetements
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
                <h5 class="card-header-title">Clothings</h5>
            </div>
            @if(Session::get("success"))
            <a href="#" class="badge bg-success p-3 bg-opacity-10 text-success"><i class="fas fa-circle me-2 small fw-bold"></i>{{ Session::get("success") }}</a>
           @endif

           @if(Session::get("danger"))
                <a href="#" class="badge bg-danger p-3 bg-opacity-10 text-danger"><i class="fas fa-circle me-2 small fw-bold"></i>{{ Session::get("danger") }}</a>
           @endif

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
                        <div class="col"><h6 class="mb-0">Nom</h6></div>
                        <div class="col"><h6 class="mb-0">Prix</h6></div>
                        <div class="col"><h6 class="mb-0">Taille</h6></div>
                        <div class="col"><h6 class="mb-0">Category</h6></div>
                        <div class="col"><h6 class="mb-0">Action</h6></div>
                    </div>
                </div>

              @foreach ($clothes as $cloth)
              <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Booked by:</small>
                    <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs flex-shrink-0">
                            <img class="avatar-img rounded-circle" src="{{ Storage::url($cloth->clothing_profile) }}" alt="avatar">
                        </div>
                        <!-- Info -->
                        <div class="ms-2">
                            <h6 class="mb-0 fw-light">{{ $cloth->title }}</h6>
                        </div>
                    </div>
                </div>

                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Check-in:</small>
                    <h6 class="text-success mb-0">{{ $cloth->price }}$</h6>
                </div>

                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Check-out:</small>
                    <h6 class="mb-0 fw-normal">{{ $cloth->size }}</h6>
                </div>

                <!-- Data item -->
                <div class="col">
                    <small class="d-block d-lg-none">Payment:</small>
                    @foreach ($cloth->categories as $category)

                        <div style="font-size: 12px" class="badge bg-primary bg-opacity-10 p-2 text-success">{{ $category->category_title }}</div>


                    @endforeach
                </div>

                <!-- Data item -->
                <div class="col">

                    <a href="{{ route('admin.clothings.edit',$cloth->id) }}" class="btn btn-sm btn-light mb-0"><i class="fa-solid fa-edit"></i></a>
                    <a href="{{ route('clothing.show',$cloth->slug) }}" class="btn btn-sm btn-light mb-0"><i class="fa-solid fa-eye"></i></a>
                    <form method="POST" action="{{ route('admin.clothings.destroy',$cloth->id) }}" onsubmit="return confirm('Are you sure?')">
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
