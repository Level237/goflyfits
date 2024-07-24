<!DOCTYPE html>
<html lang="en">
<head>
    @if(isset($isSearch) && $isSearch)
        <title>Search</title>
    @endif
	<title>@yield('title')</title>

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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox-1.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

@if(isset($isSearch) && $isSearch)
    @php
        $isHidden="hidden"
    @endphp
@else
    @php
        $isHidden="none"
    @endphp
@endif
<body style="overflow-y:{{ $isHidden }}">
    @if(isset($isSearch) && $isSearch)
    <title>Search</title>
        <section style="position: fixed;background-color:#222529f8;overflow-y:hidden;gap:0px;top:0;left:0px;right:0px;z-index:999999999999999999999999999999999999999;bottom:0px">
            <div style="display: flex;align-items:center;justify-content:end;margin-right:50px">
                <a href="/">
                    <i style="width: 30px;height:50px;cursor: pointer;" class="fa-solid fa-close"></i>
                </a>
            </div>
            <div style="display: flex;justify-content:start;flex-direction:column;align-items:center;height:100vh;margin-top:9rem">
                <!-- Search START -->

                <h1>Rechercher</h1>
                <div class="col-xl-8 mx-auto">
                    <div class="bg-blur bg-white bg-opacity-10 border border-light border-opacity-25 rounded-3 p-4 mt-5">
                        <!-- Form START -->
                        <form class="row g-3 justify-content-center align-items-center">
                            <div class="col-lg-5">
                                <!-- Input -->

                                <div class="form-mix-icon-input form-size-lg">
                                    <select class="form-select js-choice" data-search-enabled="true">
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

                            <div class="col-lg-5">
                                <!-- Choices -->
                                <div class="form-mix-icon-input form-size-lg">
                                    <select class="form-select js-choice" data-search-enabled="true">
                                        <option value="">Search your position</option>
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

                            <div class="col-lg-2 d-grid">
                                <!-- Search -->
                                <a class="btn btn-lg btn-primary mb-0" href="#">Search</a>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>
                <!-- Search END -->
            </div>
        </section>
    @endif

    <div class="preloader">
        <div class="preloader-item">
            <div class="spinner-grow text-primary"></div>
        </div>
    </div>
<!-- Header START -->

@include('layouts.Frontend.header')

@yield('content')


<footer class="bg-dark py-7">
	<div class="container">
		<div class="row mx-auto">
			<div class="col-md-10 col-xl-6 mx-auto text-center">
				<!-- Logo -->
				<img class="mx-auto h-60px" src="assets/images/logo-light.svg" alt="logo">
				<p class="mt-3 text-white">Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced.</p>
				<!-- Links -->
				<ul class="nav justify-content-between text-primary-hover mt-3 mt-md-0">
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">About</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Terms</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Privacy</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Career</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Contact us</a></li>
					<li class="nav-item"><a class="nav-link p-2 text-white" href="#">Cookies</a></li>
				</ul>
				<!-- Social media button -->
				<ul class="list-inline mt-3 mb-0">
					<li class="list-inline-item">
						<a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
							<i class="fab fa-fw fa-instagram"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
							<i class="fab fa-fw fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<!-- copyright text -->
				<div class="text-muted text-primary-hover mt-3"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-muted">Webestica</a>. </div>
			</div>
		</div>

	</div>
</footer>



<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>
<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
