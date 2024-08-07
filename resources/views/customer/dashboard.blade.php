@extends('layouts.Backend.Customer.main')

@section('title')
Dashboard Client
@endsection

@section('content')
<div class="d-grid mb-0 d-lg-none w-100">
    <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
        <i class="fas fa-sliders-h"></i> Menu
    </button>
</div>

<div class="vstack gap-4">
    <!-- Verified message -->
    <div class="bg-light rounded p-3">
        <!-- Progress bar -->
        <div class="overflow-hidden">
            <h6>Complete Your Profile</h6>
            <div class="progress progress-sm bg-success bg-opacity-10">
                <div class="progress-bar bg-success aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                <span class="progress-percent-simple h6 fw-light ms-auto">85%</span>
            </div>
        </div>
        <p class="mb-0">Get the best out of booking by adding the remaining details!</p>
        </div>
        <!-- Content -->
        <div class="bg-body rounded p-3 mt-3">
            <ul class="list-inline hstack flex-wrap gap-2 justify-content-between mb-0">
                <li class="list-inline-item h6 fw-normal mb-0"><a href="#"><i class="bi bi-check-circle-fill text-success me-2"></i>Verified Email</a></li>
                <li class="list-inline-item h6 fw-normal mb-0"><a href="#"><i class="bi bi-check-circle-fill text-success me-2"></i>Verified Mobile Number</a></li>
                <li class="list-inline-item h6 fw-normal mb-0"><a href="#" class="text-primary"><i class="bi bi-plus-circle-fill me-2"></i>Complete Basic Info</a></li>
            </ul>
        </div>
    </div>

    <!-- Personal info START -->
    <div class="card border">
        <!-- Card header -->
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Personal Information</h4>
        </div>

        <!-- Card body START -->
        <div class="card-body">
            <!-- Form START -->
            <form class="row g-3">
                <!-- Profile photo -->
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div  class="avatar avatar-xl mb-2">
                            <div style="background: {{ auth()->user()->color }}" class="avatar-img rounded-circle text-white"><span class="position-absolute top-50 start-50 translate-middle fw-bold">{{ auth()->user()->name[0] }}{{ auth()->user()->name[1] }}</span></div>
                          </div>
                        <!-- Upload button -->

                        <input id="uploadfile-1" class="form-control d-none" type="file">
                    </div>
                </div>

                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ auth()->user()->name  }}" placeholder="Enter your full name">
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="{{ auth()->user()->email  }}" placeholder="Enter your email id">
                </div>

                <!-- Mobile -->
                <div class="col-md-6">
                    <label class="form-label">Mobile number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ auth()->user()->phone_number }}" placeholder="Enter your mobile number">
                </div>

                <!-- Nationality -->
                <div class="col-md-6">
                    <label class="form-label">Nationality<span class="text-danger">*</span></label>
                    <select class="form-select js-choice">
                        <option value="">Select your country</option>
                        <option>USA</option>
                        <option selected="">Cameroon</option>
                        <option>India</option>
                        <option>UK</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Town<span class="text-danger">*</span></label>
                    <select class="form-select js-choice">
                        @foreach ($towns as $town)
                        <option @selected($town->id===auth()->user()->town_id) value="{{ $town->id }}">{{ $town->town_name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Button -->
                <div class="col-12 text-end">
                    <a href="#" class="btn btn-primary mb-0">Save Changes</a>
                </div>
            </form>
            <!-- Form END -->
        </div>
        <!-- Card body END -->
    </div>
    <!-- Personal info END -->

    <!-- Update email START -->
    <div class="card border">
        <!-- Card header -->
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Update email</h4>
            <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
        </div>

        <!-- Card body START -->
        <div class="card-body">
            <form>
                <!-- Email -->
                <label class="form-label">Enter your new email id<span class="text-danger">*</span></label>
                <input type="email" class="form-control" placeholder="Enter your email id">

                <div class="text-end mt-3">
                    <a href="#" class="btn btn-primary mb-0">Save Email</a>
                </div>
            </form>
        </div>
        <!-- Card body END -->
    </div>
    <!-- Update email END -->

    <!-- Update Password START -->
    <div class="card border">
        <!-- Card header -->
        <div class="card-header border-bottom">
            <h4 class="card-header-title">Update Password</h4>
            <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
        </div>

        <!-- Card body START -->
        <form class="card-body">
            <!-- Current password -->
            <div class="mb-3">
                <label class="form-label">Current password</label>
                <input class="form-control" type="password" placeholder="Enter current password">
            </div>
            <!-- New password -->
            <div class="mb-3">
                <label class="form-label"> Enter new password</label>
                <div class="input-group">
                    <input class="form-control fakepassword" placeholder="Enter new password" type="password" id="psw-input">
                    <span class="input-group-text p-0 bg-transparent">
                        <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                    </span>
                </div>
            </div>
            <!-- Confirm -->
            <div class="mb-3">
                <label class="form-label">Confirm new password</label>
                <input class="form-control" type="password" placeholder="Confirm new password">
            </div>

            <div class="text-end">
                <a href="#" class="btn btn-primary mb-0">Change Password</a>
            </div>
        </form>
        <!-- Card body END -->
    </div>
    <!-- Update Password END -->
</div>

@endsection
