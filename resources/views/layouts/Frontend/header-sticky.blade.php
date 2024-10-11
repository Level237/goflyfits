<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-dark navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="{{ route('homepage') }}">
				<img class="navbar-brand-item" src="{{ asset('assets/images/logo2.png') }}" alt="logo">
			</a>
			<!-- Logo END -->

      <!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item Listing -->
					<li class="nav-item">
						<a class="nav-link " href="{{ route('all.clothing') }}">Clothings</a>

					</li>
                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Par Category</a>
								<ul class="dropdown-menu" data-bs-popper="none">
                                    @foreach ($categories as $category)
                                    <li> <a class="dropdown-item" href="clothings?category={{ $category->category_title }}">{{ $category->category_title }}</a></li>
                                    @endforeach
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Par Ville</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-flight.html.htm">douala</a></li>
									<li> <a class="dropdown-item" href="flight-list.html.htm">yaoundé</a></li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="{{ route('all.clothing') }}">All Clothings</a></li>
						</ul>
					</li>
					<li class="">
						<a class="nav-link" href="sign-up.html.htm">A propos</a>

					</li>
					<!-- Nav item Pages -->


					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Contact</a> </li>
                    @auth
                    @if(auth()->user()->role_id===1)
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a> </li>
                    @endif
                    @if(auth()->user()->role_id===2)
                    <li class="nav-item"> <a class="nav-link" href="{{ route('customer.dashboard') }}">Dashboard</a> </li>
                @endif
                @endauth
					<!-- Nav item Link -->



				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Profile and Notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">



				<!-- Dark mode options START -->
				<li class="nav-item dropdown ms-3">
					<button class="nav-notification btn btn-light lh-0 p-0 mb-0" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewbox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
							<use href="#"></use>
						</svg>
					</button>

					<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewbox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
									<use href="#"></use>
								</svg>Light
							</button>
						</li>
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewbox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
									<use href="#"></use>
								</svg>Dark
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
									<use href="#"></use>
								</svg>Auto
							</button>
						</li>
					</ul>
				</li>
				<!-- Dark mode options END -->

				@auth
                <li class="nav-item ms-3 dropdown">
					<!-- Avatar -->
                    <div  class="avatar href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false"">
                        <div style="background: {{ auth()->user()->color }}" class="avatar-img rounded-circle text-white"><span class="position-absolute top-50 start-50 translate-middle fw-bold">{{ auth()->user()->name[0] }}{{ auth()->user()->name[1] }}</span></div>
                      </div>


					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
                                <div  class="avatar href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false"">
                                    <div style="background: {{ auth()->user()->color }}" class="avatar-img rounded-circle text-white"><span class="position-absolute top-50 start-50 translate-middle fw-bold">{{ auth()->user()->name[0] }}{{ auth()->user()->name[1] }}</span></div>
                                  </div>
								<div class="mx-2">
									<a class="h6 mt-2 mt-sm-0" href="#">{{ auth()->user()->name }}</a>
									<p class="small m-0">{{ auth()->user()->email }}</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
						<li>
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                              </form>
                              <a style="cursor: pointer" class="dropdown-item bg-danger-soft-hover" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i class="bi bi-power fa-fw me-2"></i>Deconnexion</a></li>
					</ul>
				</li>
                @endauth
                @guest
                <a class="btn btn-md mx-3 btn-primary mb-0" href="{{ route('login') }}">Login</a>
                @endguest
				<!-- Profile dropdown END -->
			</ul>
			<!-- Profile and Notification START -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
