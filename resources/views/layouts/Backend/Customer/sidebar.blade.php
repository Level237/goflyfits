<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
    <!-- Offcanvas header -->
    <div class="offcanvas-header justify-content-end pb-2">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
    </div>

    <!-- Offcanvas body -->
    <div class="offcanvas-body p-3 p-lg-0">
        <div class="card bg-light w-100">

            <!-- Edit profile button -->
            <div class="position-absolute top-0 end-0 p-3">
                <a href="#" class="text-primary-hover" data-bs-toggle="tooltip" data-bs-title="Edit profile">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </div>

            <!-- Card body START -->
            <div class="card-body p-3">
                <!-- Avatar and content -->
                <div class="text-center mb-3">
                    <!-- Avatar -->
                    <div  class="avatar avatar-xl mb-2">
                        <div style="background: {{ auth()->user()->color }}" class="avatar-img rounded-circle text-white"><span class="position-absolute top-50 start-50 translate-middle fw-bold">{{ auth()->user()->name[0] }}{{ auth()->user()->name[1] }}</span></div>
                      </div>
                    <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                    <a href="#" class="text-reset text-primary-hover small">{{ auth()->user()->email }}</a>
                    <hr>
                </div>

                <!-- Sidebar menu item START -->
                <ul class="nav nav-pills-primary-soft flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('customer.dashboard') }}"><i class="bi bi-person fa-fw me-2"></i>Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.preferences') }}"><i class="bi bi-ticket-perforated fa-fw me-2"></i>Mes préferences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.reservations') }}"><i class="bi bi-gear fa-fw me-2"></i>Mes Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account-delete.html.htm"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                      </form>
                    <li class="nav-item">
                        <a onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                    </li>
                </ul>
                <!-- Sidebar menu item END -->
            </div>
            <!-- Card body END -->
        </div>
    </div>
</div>
