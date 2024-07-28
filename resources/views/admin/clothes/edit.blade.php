@extends('layouts.Frontend.main')

@section('title')
{{ $clothing->title }}:Mise à jour
@endsection

@section('content')

<section class="pt-4 pt-md-5 pb-0" >
	<div class="container" style="margin-top: 60px">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-2 mb-2">{{ $clothing->title }}</h1>
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
				<form class="vstack gap-4" method="POST" action="{{ route('admin.clothings.update',$clothing->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
										<input type="text" value={{ $clothing->title }} class="form-control" name="title" placeholder="Entrez le nom du vetement">

									</div>
								</div>

								<!-- Contact number -->
								<div class="col-md-6">
									<label class="form-label">Prix</label>
									<input class="form-control" value={{ $clothing->price }} type="text" name="price" placeholder="Entrez le prix du vetement">
								</div>

								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Taille</label>
									<input class="form-control" value={{ $clothing->size }} type="text" name="size" placeholder="Entrez la taille du vetement">
								</div>

								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Description</label>
									<textarea class="form-control"  name="description" rows="4" placeholder="Entrez une description du vetement">{{ $clothing->description }}</textarea>
								</div>

								<!-- State -->
								<div class="col-md-12">
									<label class="form-label">Ville </label>
									<select name="source" class="form-select js-choice" data-search-enabled="true">

                                        @foreach ($towns as $town)
                                        <option @selected($town->id===$clothing->town_id) value="{{ $town->id }}">{{ $town->town_name }}</option>
                                    @endforeach
									</select>
								</div>
                                <div class="col-md-12">
									<label class="form-label">Marque </label>
									<select name="brand_id" class="form-select js-choice" data-search-enabled="true">
										<option>Selectionnez une marque</option>
                                        @foreach ($brands as $brand)
                                            <option @selected($brand->id===$clothing->brand_id) value="{{ $brand->id }}">{{ $brand->brand_title }}</option>
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
							<h5 class="mb-0">Media & Categorie</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-md-12">
									<label class="form-label">Categorie</label>
									<select name="categories[]" multiple class="form-select js-choice" data-search-enabled="true">

                                        @foreach ($categories as $index =>$category)
                                            @foreach ($clothing->categories as $cat)
                                            <option @selected($cat->id===$category->id) value="{{ $category->id }}">{{ $category->category_title }}</option>
                                            @endforeach

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
						<button type="submit"  class="btn btn-primary mb-0">Mettre à jour</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dropzone/js/dropzone.js') }}"></script>
