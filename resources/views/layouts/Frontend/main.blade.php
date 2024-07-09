<!DOCTYPE html>
<html lang="en">
<head>
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

<body>

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
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>
</html>
