@extends('layouts.Frontend.main')

@section('title')
Nouvel vetement
@endsection

@section('content')

<section class="pt-4 pt-md-5 pb-0" >
	<div class="container" style="margin-top: 60px">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-2 mb-2">Nouveau Vetement</h1>
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
								</div>

								<!-- Contact number -->
								<div class="col-md-6">
									<label class="form-label">Prix</label>
									<input class="form-control" type="text" name="price" placeholder="Entrez le prix du vetement">
								</div>

								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Taille</label>
									<input class="form-control" type="text" name="size" placeholder="Entrez la taille du vetement">
								</div>

								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Description</label>
									<textarea class="form-control" name="description" rows="4" placeholder="Entrez une description du vetement"></textarea>
								</div>

								<!-- State -->
								<div class="col-md-12">
									<label class="form-label">Ville </label>
									<select name="source" class="form-select js-choice" data-search-enabled="true">
										<option>Selectionnez une source</option>
										<option value="douala">Douala</option>
										<option value="yaoundé">Yaoundé</option>
										<option value="bafoussam">Bafoussam</option>
										<option value="garoua">Garoua</option>
                                        <option value="kribi">Kribi</option>
									</select>
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
							<h5 class="mb-0">Media & Categorie</h5>
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
								</div>

								<!-- State -->

								<!-- Image Gallery -->
								<div class="col-12">
									<label class="form-label">Upload image *</label>
									<input class="form-control" name="image" type="file" name="size" >

								</div>
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
