<!DOCTYPE html>
<html lang="en">
<head>
	<title>Step one:Entrez vos informations personnelles</title>

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

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body style="overflow-y: hidden">


    <!-- Pre loader -->
    <div class="preloader">
        <div class="preloader-item">
            <div class="spinner-grow text-primary"></div>
        </div>
    </div>
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main banner START -->
<section class="pt-4 pt-md-5">
	<div class="container">
		<!-- Content and form START -->
		<div class="row g-4">
			<div class="col-lg-6">
				<!-- Title -->
				<h1>Parlez nous de vous</h1>

				<!-- Contact form -->
				<form method="POST" action="{{ route('stepOne') }}" class="mt-4">
                    @csrf
					<!-- Name -->
					<div class="mb-4 form-control-bg-light">
						<label class="form-label">full name *</label>
						<input type="text" name="full_name" class="form-control">
                        @error('full_name')
                        <div style="color:#c70609">{{ $message }}</div>
                        @enderror
					</div>

                    <div class="mb-4 form-control-bg-light">
						<label class="form-label">Nom d'utilisateur *</label>
						<input type="text" name="name" class="form-control">
                        @error('name')
                        <div style="color:#c70609">{{ $message }}</div>
                        @enderror
					</div>



                    <div class="mb-4 form-control-bg-light">
						<label class="form-label">genre *</label>
						<select  class="form-control" name="gender_user" id="">
                            <option value="1">Homme</option>
                            <option value="0">Femme</option>
                        </select>

					</div>
					<!-- Button -->
					<div><button type="submit" class="btn mt-4 btn-lg btn-primary mb-0" type="button">Suivant</button></div>
				</form>
			</div>

			<!-- Image -->
			<div class="col-lg-6 col-xl-5 text-center text-lg-end position-relative ms-auto">
				<!-- Svg decoration -->
				<figure class="position-absolute start-0 top-0 d-none d-md-block mt-n5 ms-n3">
					<svg height="400" class="fill-primary opacity-2" viewbox="0 0 340 340">
						<circle cx="194.2" cy="2.2" r="2.2"></circle>
						<circle cx="2.2" cy="2.2" r="2.2"></circle>
						<circle cx="218.2" cy="2.2" r="2.2"></circle>
						<circle cx="26.2" cy="2.2" r="2.2"></circle>
						<circle cx="242.2" cy="2.2" r="2.2"></circle>
						<circle cx="50.2" cy="2.2" r="2.2"></circle>
						<circle cx="266.2" cy="2.2" r="2.2"></circle>
						<circle cx="74.2" cy="2.2" r="2.2"></circle>
						<circle cx="290.2" cy="2.2" r="2.2"></circle>
						<circle cx="98.2" cy="2.2" r="2.2"></circle>
						<circle cx="314.2" cy="2.2" r="2.2"></circle>
						<circle cx="122.2" cy="2.2" r="2.2"></circle>
						<circle cx="338.2" cy="2.2" r="2.2"></circle>
						<circle cx="146.2" cy="2.2" r="2.2"></circle>
						<circle cx="170.2" cy="2.2" r="2.2"></circle>
						<circle cx="194.2" cy="26.2" r="2.2"></circle>
						<circle cx="2.2" cy="26.2" r="2.2"></circle>
						<circle cx="218.2" cy="26.2" r="2.2"></circle>
						<circle cx="26.2" cy="26.2" r="2.2"></circle>
						<circle cx="242.2" cy="26.2" r="2.2"></circle>
						<circle cx="50.2" cy="26.2" r="2.2"></circle>
						<circle cx="266.2" cy="26.2" r="2.2"></circle>
						<circle cx="74.2" cy="26.2" r="2.2"></circle>
						<circle cx="290.2" cy="26.2" r="2.2"></circle>
						<circle cx="98.2" cy="26.2" r="2.2"></circle>
						<circle cx="314.2" cy="26.2" r="2.2"></circle>
						<circle cx="122.2" cy="26.2" r="2.2"></circle>
						<circle cx="338.2" cy="26.2" r="2.2"></circle>
						<circle cx="146.2" cy="26.2" r="2.2"></circle>
						<circle cx="170.2" cy="26.2" r="2.2"></circle>
						<circle cx="194.2" cy="50.2" r="2.2"></circle>
						<circle cx="2.2" cy="50.2" r="2.2"></circle>
						<circle cx="218.2" cy="50.2" r="2.2"></circle>
						<circle cx="26.2" cy="50.2" r="2.2"></circle>
						<circle cx="242.2" cy="50.2" r="2.2"></circle>
						<circle cx="50.2" cy="50.2" r="2.2"></circle>
						<circle cx="266.2" cy="50.2" r="2.2"></circle>
						<circle cx="74.2" cy="50.2" r="2.2"></circle>
						<circle cx="290.2" cy="50.2" r="2.2"></circle>
						<circle cx="98.2" cy="50.2" r="2.2"></circle>
						<circle cx="314.2" cy="50.2" r="2.2"></circle>
						<circle cx="122.2" cy="50.2" r="2.2"></circle>
						<circle cx="338.2" cy="50.2" r="2.2"></circle>
						<circle cx="146.2" cy="50.2" r="2.2"></circle>
						<circle cx="170.2" cy="50.2" r="2.2"></circle>
						<circle cx="194.2" cy="74.2" r="2.2"></circle>
						<circle cx="2.2" cy="74.2" r="2.2"></circle>
						<circle cx="218.2" cy="74.2" r="2.2"></circle>
						<circle cx="26.2" cy="74.2" r="2.2"></circle>
						<circle cx="242.2" cy="74.2" r="2.2"></circle>
						<circle cx="50.2" cy="74.2" r="2.2"></circle>
						<circle cx="266.2" cy="74.2" r="2.2"></circle>
						<circle cx="74.2" cy="74.2" r="2.2"></circle>
						<circle cx="290.2" cy="74.2" r="2.2"></circle>
						<circle cx="98.2" cy="74.2" r="2.2"></circle>
						<circle cx="314.2" cy="74.2" r="2.2"></circle>
						<circle cx="122.2" cy="74.2" r="2.2"></circle>
						<circle cx="338.2" cy="74.2" r="2.2"></circle>
						<circle cx="146.2" cy="74.2" r="2.2"></circle>
						<circle cx="170.2" cy="74.2" r="2.2"></circle>
						<circle cx="194.2" cy="98.2" r="2.2"></circle>
						<circle cx="2.2" cy="98.2" r="2.2"></circle>
						<circle cx="218.2" cy="98.2" r="2.2"></circle>
						<circle cx="26.2" cy="98.2" r="2.2"></circle>
						<circle cx="242.2" cy="98.2" r="2.2"></circle>
						<circle cx="50.2" cy="98.2" r="2.2"></circle>
						<circle cx="266.2" cy="98.2" r="2.2"></circle>
						<circle cx="74.2" cy="98.2" r="2.2"></circle>
						<circle cx="290.2" cy="98.2" r="2.2"></circle>
						<circle cx="98.2" cy="98.2" r="2.2"></circle>
						<circle cx="314.2" cy="98.2" r="2.2"></circle>
						<circle cx="122.2" cy="98.2" r="2.2"></circle>
						<circle cx="338.2" cy="98.2" r="2.2"></circle>
						<circle cx="146.2" cy="98.2" r="2.2"></circle>
						<circle cx="170.2" cy="98.2" r="2.2"></circle>
						<circle cx="194.2" cy="122.2" r="2.2"></circle>
						<circle cx="2.2" cy="122.2" r="2.2"></circle>
						<circle cx="218.2" cy="122.2" r="2.2"></circle>
						<circle cx="26.2" cy="122.2" r="2.2"></circle>
						<circle cx="242.2" cy="122.2" r="2.2"></circle>
						<circle cx="50.2" cy="122.2" r="2.2"></circle>
						<circle cx="266.2" cy="122.2" r="2.2"></circle>
						<circle cx="74.2" cy="122.2" r="2.2"></circle>
						<circle cx="290.2" cy="122.2" r="2.2"></circle>
						<circle cx="98.2" cy="122.2" r="2.2"></circle>
						<circle cx="314.2" cy="122.2" r="2.2"></circle>
						<circle cx="122.2" cy="122.2" r="2.2"></circle>
						<circle cx="338.2" cy="122.2" r="2.2"></circle>
						<circle cx="146.2" cy="122.2" r="2.2"></circle>
						<circle cx="170.2" cy="122.2" r="2.2"></circle>
						<circle cx="194.2" cy="146.2" r="2.2"></circle>
						<circle cx="2.2" cy="146.2" r="2.2"></circle>
						<circle cx="218.2" cy="146.2" r="2.2"></circle>
						<circle cx="26.2" cy="146.2" r="2.2"></circle>
						<circle cx="242.2" cy="146.2" r="2.2"></circle>
						<circle cx="50.2" cy="146.2" r="2.2"></circle>
						<circle cx="266.2" cy="146.2" r="2.2"></circle>
						<circle cx="74.2" cy="146.2" r="2.2"></circle>
						<circle cx="290.2" cy="146.2" r="2.2"></circle>
						<circle cx="98.2" cy="146.2" r="2.2"></circle>
						<circle cx="314.2" cy="146.2" r="2.2"></circle>
						<circle cx="122.2" cy="146.2" r="2.2"></circle>
						<circle cx="338.2" cy="146.2" r="2.2"></circle>
						<circle cx="146.2" cy="146.2" r="2.2"></circle>
						<circle cx="170.2" cy="146.2" r="2.2"></circle>
						<circle cx="194.2" cy="170.2" r="2.2"></circle>
						<circle cx="2.2" cy="170.2" r="2.2"></circle>
						<circle cx="218.2" cy="170.2" r="2.2"></circle>
						<circle cx="26.2" cy="170.2" r="2.2"></circle>
						<circle cx="242.2" cy="170.2" r="2.2"></circle>
						<circle cx="50.2" cy="170.2" r="2.2"></circle>
						<circle cx="266.2" cy="170.2" r="2.2"></circle>
						<circle cx="74.2" cy="170.2" r="2.2"></circle>
						<circle cx="290.2" cy="170.2" r="2.2"></circle>
						<circle cx="98.2" cy="170.2" r="2.2"></circle>
						<circle cx="314.2" cy="170.2" r="2.2"></circle>
						<circle cx="122.2" cy="170.2" r="2.2"></circle>
						<circle cx="338.2" cy="170.2" r="2.2"></circle>
						<circle cx="146.2" cy="170.2" r="2.2"></circle>
						<circle cx="170.2" cy="170.2" r="2.2"></circle>
						<circle cx="194.2" cy="194.2" r="2.2"></circle>
						<circle cx="2.2" cy="194.2" r="2.2"></circle>
						<circle cx="218.2" cy="194.2" r="2.2"></circle>
						<circle cx="26.2" cy="194.2" r="2.2"></circle>
						<circle cx="242.2" cy="194.2" r="2.2"></circle>
						<circle cx="50.2" cy="194.2" r="2.2"></circle>
						<circle cx="266.2" cy="194.2" r="2.2"></circle>
						<circle cx="74.2" cy="194.2" r="2.2"></circle>
						<circle cx="290.2" cy="194.2" r="2.2"></circle>
						<circle cx="98.2" cy="194.2" r="2.2"></circle>
						<circle cx="314.2" cy="194.2" r="2.2"></circle>
						<circle cx="122.2" cy="194.2" r="2.2"></circle>
						<circle cx="338.2" cy="194.2" r="2.2"></circle>
						<circle cx="146.2" cy="194.2" r="2.2"></circle>
						<circle cx="170.2" cy="194.2" r="2.2"></circle>
						<circle cx="194.2" cy="218.2" r="2.2"></circle>
						<circle cx="2.2" cy="218.2" r="2.2"></circle>
						<circle cx="218.2" cy="218.2" r="2.2"></circle>
						<circle cx="26.2" cy="218.2" r="2.2"></circle>
						<circle cx="242.2" cy="218.2" r="2.2"></circle>
						<circle cx="50.2" cy="218.2" r="2.2"></circle>
						<circle cx="266.2" cy="218.2" r="2.2"></circle>
						<circle cx="74.2" cy="218.2" r="2.2"></circle>
						<circle cx="290.2" cy="218.2" r="2.2"></circle>
						<circle cx="98.2" cy="218.2" r="2.2"></circle>
						<circle cx="314.2" cy="218.2" r="2.2"></circle>
						<circle cx="122.2" cy="218.2" r="2.2"></circle>
						<circle cx="338.2" cy="218.2" r="2.2"></circle>
						<circle cx="146.2" cy="218.2" r="2.2"></circle>
						<circle cx="170.2" cy="218.2" r="2.2"></circle>
						<circle cx="194.2" cy="242.2" r="2.2"></circle>
						<circle cx="2.2" cy="242.2" r="2.2"></circle>
						<circle cx="218.2" cy="242.2" r="2.2"></circle>
						<circle cx="26.2" cy="242.2" r="2.2"></circle>
						<circle cx="242.2" cy="242.2" r="2.2"></circle>
						<circle cx="50.2" cy="242.2" r="2.2"></circle>
						<circle cx="266.2" cy="242.2" r="2.2"></circle>
						<circle cx="74.2" cy="242.2" r="2.2"></circle>
						<circle cx="290.2" cy="242.2" r="2.2"></circle>
						<circle cx="98.2" cy="242.2" r="2.2"></circle>
						<circle cx="314.2" cy="242.2" r="2.2"></circle>
						<circle cx="122.2" cy="242.2" r="2.2"></circle>
						<circle cx="338.2" cy="242.2" r="2.2"></circle>
						<circle cx="146.2" cy="242.2" r="2.2"></circle>
						<circle cx="170.2" cy="242.2" r="2.2"></circle>
						<circle cx="194.2" cy="266.2" r="2.2"></circle>
						<circle cx="2.2" cy="266.2" r="2.2"></circle>
						<circle cx="218.2" cy="266.2" r="2.2"></circle>
						<circle cx="26.2" cy="266.2" r="2.2"></circle>
						<circle cx="242.2" cy="266.2" r="2.2"></circle>
						<circle cx="50.2" cy="266.2" r="2.2"></circle>
						<circle cx="266.2" cy="266.2" r="2.2"></circle>
						<circle cx="74.2" cy="266.2" r="2.2"></circle>
						<circle cx="290.2" cy="266.2" r="2.2"></circle>
						<circle cx="98.2" cy="266.2" r="2.2"></circle>
						<circle cx="314.2" cy="266.2" r="2.2"></circle>
						<circle cx="122.2" cy="266.2" r="2.2"></circle>
						<circle cx="338.2" cy="266.2" r="2.2"></circle>
						<circle cx="146.2" cy="266.2" r="2.2"></circle>
						<circle cx="170.2" cy="266.2" r="2.2"></circle>
						<circle cx="194.2" cy="290.2" r="2.2"></circle>
						<circle cx="2.2" cy="290.2" r="2.2"></circle>
						<circle cx="218.2" cy="290.2" r="2.2"></circle>
						<circle cx="26.2" cy="290.2" r="2.2"></circle>
						<circle cx="242.2" cy="290.2" r="2.2"></circle>
						<circle cx="50.2" cy="290.2" r="2.2"></circle>
						<circle cx="266.2" cy="290.2" r="2.2"></circle>
						<circle cx="74.2" cy="290.2" r="2.2"></circle>
						<circle cx="290.2" cy="290.2" r="2.2"></circle>
						<circle cx="98.2" cy="290.2" r="2.2"></circle>
						<circle cx="314.2" cy="290.2" r="2.2"></circle>
						<circle cx="122.2" cy="290.2" r="2.2"></circle>
						<circle cx="338.2" cy="290.2" r="2.2"></circle>
						<circle cx="146.2" cy="290.2" r="2.2"></circle>
						<circle cx="170.2" cy="290.2" r="2.2"></circle>
						<circle cx="194.2" cy="314.2" r="2.2"></circle>
						<circle cx="2.2" cy="314.2" r="2.2"></circle>
						<circle cx="218.2" cy="314.2" r="2.2"></circle>
						<circle cx="26.2" cy="314.2" r="2.2"></circle>
						<circle cx="242.2" cy="314.2" r="2.2"></circle>
						<circle cx="50.2" cy="314.2" r="2.2"></circle>
						<circle cx="266.2" cy="314.2" r="2.2"></circle>
						<circle cx="74.2" cy="314.2" r="2.2"></circle>
						<circle cx="290.2" cy="314.2" r="2.2"></circle>
						<circle cx="98.2" cy="314.2" r="2.2"></circle>
						<circle cx="314.2" cy="314.2" r="2.2"></circle>
						<circle cx="122.2" cy="314.2" r="2.2"></circle>
						<circle cx="338.2" cy="314.2" r="2.2"></circle>
						<circle cx="146.2" cy="314.2" r="2.2"></circle>
						<circle cx="170.2" cy="314.2" r="2.2"></circle>
						<circle cx="194.2" cy="338.2" r="2.2"></circle>
						<circle cx="2.2" cy="338.2" r="2.2"></circle>
						<circle cx="218.2" cy="338.2" r="2.2"></circle>
						<circle cx="26.2" cy="338.2" r="2.2"></circle>
						<circle cx="242.2" cy="338.2" r="2.2"></circle>
						<circle cx="50.2" cy="338.2" r="2.2"></circle>
						<circle cx="266.2" cy="338.2" r="2.2"></circle>
						<circle cx="74.2" cy="338.2" r="2.2"></circle>
						<circle cx="290.2" cy="338.2" r="2.2"></circle>
						<circle cx="98.2" cy="338.2" r="2.2"></circle>
						<circle cx="314.2" cy="338.2" r="2.2"></circle>
						<circle cx="122.2" cy="338.2" r="2.2"></circle>
						<circle cx="338.2" cy="338.2" r="2.2"></circle>
						<circle cx="146.2" cy="338.2" r="2.2"></circle>
						<circle cx="170.2" cy="338.2" r="2.2"></circle>
					</svg>
				</figure>
				<!-- Image -->
				<img src="https://blush.design/api/download?shareUri=1Jn-WnCvIToU8avc&c=Skin_0%7Eca8f67-0.2%7Eff8282-0.3%7Eca8f67&w=800&h=800&fm=png" class="rounded-3 position-relative" alt="">
			</div>
		</div>
		<!-- Content and form END -->


	</div>
</section>
<!-- =======================
Main banner START -->

<!-- =======================
Map and office START -->

<!-- =======================
Map and office END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->

<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
