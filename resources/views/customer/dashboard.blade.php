<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking - Multipurpose Online Booking Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})

	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link rel="stylesheet" href="css2-1?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min-1.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons-1.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min-1.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="dashboard">

<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html-1.htm">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll">

					<!-- Nav item Listing -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index.html-1.htm">Hotel Home</a></li>
									<li> <a class="dropdown-item" href="index-hotel-chain.html.htm">Hotel Chain</a></li>
									<li> <a class="dropdown-item" href="index-resort.html.htm">Hotel Resort</a></li>
									<li> <a class="dropdown-item" href="hotel-grid.html.htm">Hotel Grid</a></li>
									<li> <a class="dropdown-item" href="hotel-list.html.htm">Hotel List</a></li>
									<li> <a class="dropdown-item" href="hotel-detail.html.htm">Hotel Detail</a></li>
									<li> <a class="dropdown-item" href="room-detail.html.htm">Room Detail</a></li>
									<li> <a class="dropdown-item" href="hotel-booking.html.htm">Hotel Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Flight</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-flight.html.htm">Flight Home</a></li>
									<li> <a class="dropdown-item" href="flight-list.html.htm">Flight List</a></li>
									<li> <a class="dropdown-item" href="flight-detail.html.htm">Flight Detail</a></li>
									<li> <a class="dropdown-item" href="flight-booking.html.htm">Flight Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Tour</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-tour.html.htm">Tour Home</a></li>
									<li> <a class="dropdown-item" href="tour-grid.html.htm">Tour Grid</a></li>
									<li> <a class="dropdown-item" href="tour-detail.html.htm">Tour Detail</a></li>
									<li> <a class="dropdown-item" href="tour-booking.html.htm">Tour Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Cab</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-cab.html.htm">Cab Home</a></li>
									<li> <a class="dropdown-item" href="cab-list.html.htm">Cab List</a></li>
									<li> <a class="dropdown-item" href="cab-detail.html.htm">Cab Detail</a></li>
									<li> <a class="dropdown-item" href="cab-booking.html.htm">Cab Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Directory</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-directory.html.htm">Directory Home</a></li>
									<li> <a class="dropdown-item" href="directory-detail.html.htm">Directory Detail</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="join-us.html.htm">Join us</a></li>
									<li> <a class="dropdown-item" href="add-listing.html.htm">Add Listing</a></li>
									<li> <a class="dropdown-item" href="add-listing-minimal.html.htm">Add Listing Minimal</a></li>
									<li> <a class="dropdown-item" href="listing-added.html.htm">Listing Added</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hero</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="hero-inline-form.html.htm">Hero Inline Form</a></li>
									<li> <a class="dropdown-item" href="hero-multiple-search.html.htm">Hero Multiple Search</a></li>
									<li> <a class="dropdown-item" href="hero-image-gallery.html.htm">Hero Image Gallery</a></li>
									<li> <a class="dropdown-item" href="hero-split.html.htm">Hero Split</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="booking-confirm.html.htm">Booking Confirmed</a></li>
							<li> <a class="dropdown-item" href="compare-listing.html.htm">Compare Listing</a></li>
							<li> <a class="dropdown-item" href="offer-detail.html.htm">Offer Detail</a></li>
						</ul>
					</li>

					<!-- Nav item Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">

							<li> <a class="dropdown-item" href="about.html.htm">About</a></li>
							<li> <a class="dropdown-item" href="contact.html.htm">Contact</a></li>
							<li> <a class="dropdown-item" href="contact-2.html.htm">Contact 2</a></li>
							<li> <a class="dropdown-item" href="team.html.htm">Our Team</a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html.htm">Sign In</a></li>
									<li> <a class="dropdown-item" href="sign-up.html.htm">Sign Up</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html.htm">Forgot Password</a></li>
									<li> <a class="dropdown-item" href="two-factor-auth.html.htm">Two factor authentication</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Blog</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="blog.html.htm">Blog</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html.htm">Blog Detail</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Help</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="help-center.html.htm">Help Center</a></li>
									<li> <a class="dropdown-item" href="help-detail.html.htm">Help Detail</a></li>
									<li> <a class="dropdown-item" href="privacy-policy.html.htm">Privacy Policy</a></li>
									<li> <a class="dropdown-item" href="terms-of-service.html.htm">Terms of Service</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="pricing.html.htm">Pricing</a></li>
							<li> <a class="dropdown-item" href="faq.html.htm">FAQs</a></li>
							<li> <a class="dropdown-item" href="error.html.htm">Error 404</a></li>
							<li> <a class="dropdown-item" href="coming-soon.html.htm">Coming Soon</a></li>
						</ul>
					</li>

					<!-- Nav item Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">User Profile</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="account-profile.html.htm">My Profile</a> </li>
									<li> <a class="dropdown-item" href="account-bookings.html.htm">My Bookings</a> </li>
									<li> <a class="dropdown-item" href="account-travelers.html.htm">Travelers</a> </li>
									<li> <a class="dropdown-item" href="account-payment-details.html.htm">Payment Details</a> </li>
									<li> <a class="dropdown-item" href="account-wishlist.html.htm">Wishlist</a> </li>
									<li> <a class="dropdown-item" href="account-settings.html.htm">Settings</a> </li>
									<li> <a class="dropdown-item" href="account-delete.html.htm">Delete Profile</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Agent Dashboard</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="agent-dashboard.html.htm">Dashboard</a> </li>
									<li> <a class="dropdown-item" href="agent-listings.html.htm">Listings</a> </li>
									<li> <a class="dropdown-item" href="agent-bookings.html.htm">Bookings</a> </li>
									<li> <a class="dropdown-item" href="agent-activities.html.htm">Activities</a> </li>
									<li> <a class="dropdown-item" href="agent-earnings.html.htm">Earnings</a> </li>
									<li> <a class="dropdown-item" href="agent-reviews.html.htm">Reviews</a> </li>
									<li> <a class="dropdown-item" href="agent-settings.html.htm">Settings</a> </li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="admin-dashboard.html.htm">Master Admin</a> </li>
						</ul>
					</li>

					<!-- Nav item Contact -->
					<li class="nav-item"> <a class="nav-link" href="contact.html.htm">Contact Us</a>	</li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Profile and Notification START -->
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

				<!-- Notification dropdown START -->
				<li class="nav-item ms-0 ms-md-3 dropdown">
					<!-- Notification button -->
					<a class="nav-link p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<i class="bi bi-bell fa-fw fs-5"></i>
					</a>
					<!-- Notification dote -->
					<span class="notif-badge animation-blink"></span>

					<!-- Notification dropdown menu START -->
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg">
						<div class="card bg-transparent">
							<!-- Card header -->
							<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
								<a class="small" href="#">Clear all</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-0">
								<ul class="list-group list-group-flush list-unstyled p-2">
									<!-- Notification item -->
									<li>
										<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
											<h6 class="mb-2">New! Booking flights from New York ✈️</h6>
											<p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
											<span>Wednesday</span>
										</a>
									</li>
									<!-- Notification item -->
									<li>
										<a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
											<h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
											<span>15 Nov 2022</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class="card-footer bg-transparent text-center border-top">
								<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
							</div>
						</div>
					</div>
					<!-- Notification dropdown menu END -->
				</li>
				<!-- Notification dropdown END -->

				<!-- Profile dropdown START -->
				<li class="nav-item ms-3 dropdown">
					<!-- Avatar -->
					<a class="avatar avatar-xs p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
					</a>

					<!-- Profile dropdown START -->
					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3 mb-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
									<p class="small m-0">example@gmail.com</p>
								</div>
							</div>
						</li>

						<!-- Links -->
						<li> <hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
						<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li> <hr class="dropdown-divider"></li>

						<!-- Dark mode options START -->
						<li>
							<div class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
								<span>Mode:</span>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0" data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"></path>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
										<use href="#"></use>
									</svg>
								</button>
								<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active" data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
										<use href="#"></use>
									</svg>
								</button>
							</div>
						</li>
						<!-- Dark mode options END-->
					</ul>
					<!-- Profile dropdown END -->
				</li>
				<!-- Profile dropdown END -->

				<!-- Button -->
				<li class="nav-item ms-3 d-none d-sm-block">
					<a class="btn btn-sm btn-primary-soft mb-0" href="#"><i class="bi bi-lightning-charge"></i> Upgrade now</a>
				</li>
			</ul>
			<!-- Profile and Notification START -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Content START -->
<section class="pt-3">
	<div class="container">
		<div class="row">

			<!-- Sidebar START -->
			<div class="col-lg-4 col-xl-3">
				<!-- Responsive offcanvas body START -->
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
									<div class="avatar avatar-xl mb-2">
										<img class="avatar-img rounded-circle border border-2 border-white" src="assets/images/avatar/01.jpg" alt="">
									</div>
									<h6 class="mb-0">Jacqueline Miller</h6>
									<a href="#" class="text-reset text-primary-hover small">hello@gmail.com</a>
									<hr>
								</div>

								<!-- Sidebar menu item START -->
								<ul class="nav nav-pills-primary-soft flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="account-profile.html.htm"><i class="bi bi-person fa-fw me-2"></i>My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-bookings.html.htm"><i class="bi bi-ticket-perforated fa-fw me-2"></i>My Bookings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-travelers.html.htm"><i class="bi bi-people fa-fw me-2"></i>Travelers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-payment-details.html.htm"><i class="bi bi-wallet fa-fw me-2"></i>Payment Details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-wishlist.html.htm"><i class="bi bi-heart fa-fw me-2"></i>Wishlist</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-settings.html.htm"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-delete.html.htm"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
									</li>
								</ul>
								<!-- Sidebar menu item END -->
							</div>
							<!-- Card body END -->
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->
			</div>
			<!-- Sidebar END -->

			<!-- Main content START -->
			<div class="col-lg-8 col-xl-9">

				<!-- Offcanvas menu button -->
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
									<label class="form-label">Upload your profile photo<span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
											<!-- Avatar place holder -->
											<span class="avatar avatar-xl">
												<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
											</span>
										</label>
										<!-- Upload button -->
										<label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
										<input id="uploadfile-1" class="form-control d-none" type="file">
									</div>
								</div>

								<!-- Name -->
								<div class="col-md-6">
									<label class="form-label">Full Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="Jacqueline Miller" placeholder="Enter your full name">
								</div>

								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email address<span class="text-danger">*</span></label>
									<input type="email" class="form-control" value="hello@gmail.com" placeholder="Enter your email id">
								</div>

								<!-- Mobile -->
								<div class="col-md-6">
									<label class="form-label">Mobile number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="222 555 666" placeholder="Enter your mobile number">
								</div>

								<!-- Nationality -->
								<div class="col-md-6">
									<label class="form-label">Nationality<span class="text-danger">*</span></label>
									<select class="form-select js-choice">
										<option value="">Select your country</option>
										<option>USA</option>
										<option selected="">Paris</option>
										<option>India</option>
										<option>UK</option>
									</select>
								</div>

								<!-- Date of birth -->
								<div class="col-md-6">
									<label class="form-label">Date of Birth<span class="text-danger">*</span></label>
									<input type="text" class="form-control flatpickr" value="29 Aug 1996" placeholder="Enter date of birth" data-date-format="d M Y">
								</div>

								<!-- Gender -->
								<div class="col-md-6">
									<label class="form-label">Select Gender<span class="text-danger">*</span></label>
									<div class="d-flex gap-4">
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
											<label class="form-check-label" for="flexRadioDefault1">
												Male
											</label>
										</div>
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											<label class="form-check-label" for="flexRadioDefault2">
												Female
											</label>
										</div>
										<div class="form-check radio-bg-light">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Others
											</label>
										</div>
									</div>
								</div>

								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Address</label>
									<textarea class="form-control" rows="3" spellcheck="false">2119 N Division Ave, New Hampshire, York, United States</textarea>
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
			</div>
			<!-- Main content END -->

		</div>
	</div>
</section>
<!-- =======================
Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">

			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-center text-md-start mb-3 mb-md-0">
					<a href="index.html-1.htm"> <img class="h-30px" src="assets/images/logo-light.svg" alt="logo"> </a>
				</div>
			</div>

			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-muted text-primary-hover"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-muted">Webestica</a>. </div>
			</div>

			<!-- Widget -->
			<div class="col-md-4">
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>
</html>
