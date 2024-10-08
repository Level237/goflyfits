@extends('layouts.Frontend.main')

@section('title')
Nouvel vetement
@endsection

@section('content')

<section class="pt-4 pt-md-5 pb-0" >
	<div class="container" style="margin-top: 60px">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-2 mb-2">Nouveau Vetement

                    @if($gender==1)
                        (Homme)
                    @endif
                    @if($gender==0)
                        (Femme)
                    @endif
                </h1>
				<p class="mb-0">Praise effects wish change way and any wanted. Lively use looked latter regard had.</p>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Main content START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<form class="vstack gap-4" method="POST" action="{{ route('admin.clothings.store') }}" enctype="multipart/form-data">
                    @csrf
					<!-- Owner Detail START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Detail vetement</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Owner name -->
								<div class="col-12">
									<label class="form-label">Nom</label>
									<div class="input-group">
										<input type="text" class="form-control" name="title" placeholder="Entrez le nom du vetement">

									</div>
                                    @error('title')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
								</div>

								<!-- Contact number -->
								<div class="col-md-6">
									<label class="form-label">Prix</label>
									<input class="form-control" type="text" name="price" placeholder="Entrez le prix du vetement">
                                    @error('price')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
                                </div>

								<!-- Email -->
                                <div class="col-md-6 form-control-bg-light">
                                    <label class="form-label">Taille</label>
                                    <select  class="form-control" name="size" id="">
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="M">M</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                    </select>
                                    @error('size')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
                                </div>

								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Description</label>
									<textarea class="form-control" name="description" rows="4" placeholder="Entrez une description du vetement"></textarea>
                                    @error('description')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
                                </div>

								<!-- State -->
								<div class="col-md-12">
									<label class="form-label">Ville </label>
									<select name="town_id" class="form-select js-choice" data-search-enabled="true">
										<option>Selectionnez une ville</option>
                                        @foreach ($towns as $town)
                                            <option value="{{ $town->id }}">{{ $town->town_name }}</option>
                                        @endforeach
									</select>
                                    @error('town_id')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
								</div>


                                <div class="col-md-12">
									<label class="form-label">Marque </label>
									<select name="brand_id" class="form-select js-choice" data-search-enabled="true">
										<option>Selectionnez une marque</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_title }}</option>
                                        @endforeach
									</select>
                                    @error('brand_id')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
								</div>
								<!-- City -->

							</div>
						</div>
					</div>
					<!-- Owner Detail END -->

					<!-- Cab Detail START -->


                    <div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Media</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-md-12">
									<label class="form-label">Categorie</label>
									<select name="categories[]" multiple class="form-select js-choice" data-search-enabled="true">

                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->category_title }}</option>
                                        @endforeach
									</select>
                                    @error('categories')
                                        <div style="color:#c70609">{{ $message }}</div>
                                        @enderror
								</div>

								<!-- State -->

								<!-- Image Gallery -->
								<div class="col-12">
									<label class="form-label">Upload image *</label>
									<input class="form-control" name="image" type="file"  >
                                    @error('image')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
						</div>
					</div>

                    <div class="card shadow ">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Mesures</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								@if($gender===1)
                                <div class="col-md-6">
                                    <label class="form-label">Full shoulder width *</label>
                                    <input type="text" name="full_shoulder_width" class="form-control">
                                    @error('full_shoulder_width')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Sleeves *</label>
                                    <input type="text" name="sleeves" class="form-control">
                                    @error('sleeves')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Full Chest*</label>
                                <input type="text" name="full_chest" class="form-control">
                                @error('full_chest')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Waist *</label>
                                    <input type="text" name="waist" class="form-control">
                                    @error('waist')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Front shoulder width *</label>
                                <input type="text" name="front_shoulder_width" class="form-control">
                                @error('front_shoulder_width')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Back Shoulder Width *</label>
                                <input type="text" name="back_shoulder_width" class="form-control">
                                @error('back_shoulder_width')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Front Jacket Length *</label>
                                    <input type="text" name="front_jacket_length" class="form-control">
                                    @error('front_jacket_length')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Neck *</label>
                                <input type="text" name="neck" class="form-control">
                                @error('neck')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Trouser waist *</label>
                                    <input type="text" name="trouser_waist" class="form-control">
                                    @error('trouser_waist')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>


                                <div class="col-md-6">
                                    <label class="form-label">crotch *</label>
                                <input type="text" name="crotch" class="form-control">
                                @error('crotch')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Thigh *</label>
                                <input type="text" name="thigh" class="form-control">
                                @error('thigh')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Throuser Length*</label>
                                <input type="text" name="throuser_length" class="form-control">
                                @error('throuser_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Cuff*</label>
                                <input type="text" name="cuff" class="form-control">
                                @error('cuff')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Hips *</label>
                                <input type="text" name="hips" class="form-control">
                                @error('hips')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                @endif

                                @if($gender==0)
                                <div class="col-md-6">
                                    <label class="form-label">Front Shoulder Width*</label>
                                    <input type="text" name="front_shoulder_width" class="form-control">
                                    @error('front_shoulder_width')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Back Shoulder Width*</label>
                                <input type="text" name="back_shoulder_width" class="form-control">
                                @error('back_shoulder_width')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Front Jacket Length *</label>
                                <input type="text" name="front_jacket_length" class="form-control">
                                @error('front_jacket_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">bust *</label>
                                <input type="text" name="bust" class="form-control">
                                @error('bust')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Neck *</label>
                                <input type="text" name="neck" class="form-control">
                                @error('neck')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Throuser Length *</label>
                                <input type="text" name="throuser_length" class="form-control">
                                @error('throuser_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">cuff *</label>
                                <input type="text" name="cuff" class="form-control">
                                @error('cuff')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">back_length *</label>
                                <input type="text" name="Point Bust" class="form-control">
                                @error('back_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Point Bust *</label>
                                    <input type="text" name="point_bust" class="form-control">
                                    @error('point_bust')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>


                                <div class="col-md-6">
                                    <label class="form-label">Sleeve Length *</label>
                                <input type="text" name="sleeve_length" class="form-control">
                                @error('sleeve_length')
                            <div style="color:#c70609">{{ $message }}</div>
                            @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Arm *</label>
                                    <input type="text" name="arm" class="form-control">
                                    @error('arm')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">armHole*</label>
                                <input type="text" name="armHole" class="form-control">
                                @error('armHole')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">coat Length*</label>
                                <input type="text" name="coat_length" class="form-control">
                                @error('coat_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Skirt Length *</label>
                                <input type="text" name="skirt_length" class="form-control">
                                @error('skirt_length')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">hight hip *</label>
                                <input type="text" name="hight_hip" class="form-control">
                                @error('hight_hip')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Inseam *</label>
                                    <input type="text" name="inseam" class="form-control">
                                    @error('inseam')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>

                                <div class="col-md-6">
                                    <label class="form-label">Seat *</label>
                                <input type="text" name="seat" class="form-control">
                                @error('seat')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-6">
                                    <label class="form-label">Trouser Thigh*</label>
                                <input type="text" name="trouser_thigh" class="form-control">
                                @error('trouser_thigh')
                                <div style="color:#c70609">{{ $message }}</div>
                                @enderror
								</div>
                                <div class="col-md-12">
                                    <label class="form-label">Hips *</label>
                                    <input type="text" name="hips" class="form-control">
                                    @error('hips')
                                    <div style="color:#c70609">{{ $message }}</div>
                                    @enderror
								</div>
                                @endif
								<!-- State -->


							</div>
						</div>
					</div>
					<!-- Button -->
					<div class="text-end">
						<button type="submit"  class="btn btn-primary mb-0">Enregistrer</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dropzone/js/dropzone.js') }}"></script>
