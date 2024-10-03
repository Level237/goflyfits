<!DOCTYPE html>
<html lang="en">
<head>
	<title>Step three:Entrez vos informations personnelles</title>

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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min-1.css') }}">


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
		<div style="display: flex;justify-items:center;justify-content:center;align-items:center" class="row g-4 mt-6">
			<div class="col-lg-12">
				<!-- Title -->
				<h1 class="text-center">Mesures Corporelles(2)</h1>

				<!-- Contact form -->
				<form method="POST" action="{{ route('stepFive') }}" class="mt-4">
                    @csrf
					<!-- Name -->
					<!-- Email -->
                        @if($gender_user==1)
                        <div class="row">
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Neck *</label>
                                <input type="text" name="neck" class="form-control">
                                @error('neck')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Trouser waist *</label>
                                <input type="text" name="trouser_waist" class="form-control">
                                @error('trouser_waist')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">crotch *</label>
                                <input type="text" name="crotch" class="form-control">
                                @error('crotch')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Thigh *</label>
                                <input type="text" name="thigh" class="form-control">
                                @error('thigh')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Throuser Length*</label>
                                <input type="text" name="throuser_length" class="form-control">
                                @error('throuser_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Cuff*</label>
                                <input type="text" name="cuff" class="form-control">
                                @error('cuff')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- Message -->


                        @endif

                        @if($gender_user==0)
                        <div class="row">
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Quel est votre Taille? *</label>
                                <select  class="form-control" name="height" id="">

                                        <option value="1,50">1.50</option>


                                </select>
                                @error('height')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Quel est votre poids? *</label>
                                <select  class="form-control" name="weight" id="">

                                        <option value="1,50">55</option>
                                        <option value="1,50">65</option>
                                        <option value="1,50">75</option>
                                        <option value="1,50">85</option>
                                </select>
                                @error('weight')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-lg-4 mb-4 form-control-bg-light">
                                <label class="form-label">Hips *</label>
                                <input type="text" name="hips" class="form-control">
                                @error('hips')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">Front Shoulder Width*</label>
                                <input type="text" name="front_shoulder_width" class="form-control">
                                @error('front_shoulder_width')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">Back Shoulder Width*</label>
                                <input type="text" name="back_shoulder_width" class="form-control">
                                @error('back_shoulder_width')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">Front Jacket Length *</label>
                                <input type="text" name="front_jacket_length" class="form-control">
                                @error('front_jacket_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">bust *</label>
                                <input type="text" name="bust" class="form-control">
                                @error('bust')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">Neck *</label>
                                <input type="text" name="neck" class="form-control">
                                @error('neck')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">Throuser Length *</label>
                                <input type="text" name="throuser_length" class="form-control">
                                @error('throuser_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 form-control-bg-light">
                                <label class="form-label">cuff *</label>
                                <input type="text" name="cuff" class="form-control">
                                @error('cuff')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-4 bel form-control-bg-light">
                                <label class="form-label">back_length *</label>
                                <input type="text" name="Point Bust" class="form-control">
                                @error('back_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        @endif
					<!-- Button -->
					<div style="display: flex;justify-content:end" class="flex items-end"><button type="submit" class="btn mt-4 btn-lg btn-primary mb-0" type="button">Suivant</button></div>
				</form>
			</div>

			<!-- Image -->

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
<script src="{{ asset('assets/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
