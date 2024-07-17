@extends("layouts.Backend.Customer.main")

@section("title")
Préferences utilisateur
@endsection

@section("content")
<div class="d-grid mb-0 d-lg-none w-100">
    <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
        <i class="fas fa-sliders-h"></i> Menu
    </button>
</div>

<div class="card border bg-transparent">
    <!-- Card header -->
    <div class="card-header bg-transparent border-bottom">
        <h4 class="card-header-title">Mes Préferences</h4>
    </div>

    <!-- Card body START -->
    <div class="card-body p-0">



        <!-- Tabs content START -->
        <div class="tab-content p-2 p-sm-4" id="nav-tabContent">

            <!-- Tab content item START -->
            <div class="tab-pane fade show active" id="tab-1">
                <h6>Préferences({{ count(auth()->user()->preferences) }})</h6>

                <div class="card border mb-4">
                    <!-- Card header -->
                    <div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                        <!-- Icon and Title -->
                        <div class="d-flex align-items-center">
                            <ul class="avatar-group">
                                @foreach ($clothings as $clothing)
                                <li class="avatar">
                                    <img class="avatar-img rounded-circle" src="{{ Storage::url($clothing->clothing_profile) }}" alt="avatar">
                                  </li>
                                @endforeach
                                <li class="avatar">
                                  <div class="avatar-img rounded-circle text-bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                </li>
                              </ul>

                            <!-- Title -->
                            <div class="ms-2">
                                @foreach ($categories as $category)
                                    <div style="font-size: 11px" class="badge bg-primary  p-2 text-dark">{{ $category->category_title }}</div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="mt-2 mt-md-0">
                            <a href="#" class="btn btn-primary-soft mb-0">Modifier vos préferences</a>
                        </div>
                    </div>

                    <!-- Card body -->

                </div>
                <!-- Card item END -->


            </div>
        </div>

    </div>
    <!-- Card body END -->
</div>
@endsection
