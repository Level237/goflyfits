@extends('layouts.Frontend.main')

@section('title')
Selectionnez le genre de vetement
@endsection

@section('content')


<!-- =======================
Page Banner END -->

<!-- =======================
Main content START -->
<section>
	<div class="container mt-8">
		<div class="row">
			<div class="col-lg-10 mx-auto ">
				<form class="vstack gap-4" method="POST" action="{{ route('admin.selectGender') }}" enctype="multipart/form-data">
                    @csrf
					<!-- Owner Detail START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Selectionnez le genre de vetement?</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">


                                <div class="col-md-12">
									<label class="form-label">Genre</label>
									<select name="gender" class="form-select js-choice" data-search-enabled="true">
										<option>Selectionnez un genre</option>

                                            <option value="1">Homme</option>
                                            <option value="0">Femme</option>
									</select>
                                    @error('gender')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
								</div>

								<!-- City -->

							</div>
						</div>
					</div>



					<!-- Button -->
					<div class="text-end">
						<button type="submit"  class="btn btn-primary mb-0">Suivant</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dropzone/js/dropzone.js') }}"></script>
