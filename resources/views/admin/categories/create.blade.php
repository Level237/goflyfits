@extends('layouts.Frontend.main')

@section('title')
Nouvel vetement
@endsection

@section('content')

<section class="pt-4 pt-md-5 pb-0" >
	<div class="container" style="margin-top: 60px">
		<div class="row">
			<div class="col-12 mx-auto text-center">
				<h1 class="fs-2 mb-2">Nouvel categorie</h1>
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
				<form class="vstack gap-4" method="POST" action="{{ route('admin.categories.store') }}">
                    @csrf
					<!-- Owner Detail START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Category</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Owner name -->
								<div class="col-12">
									<label class="form-label">Nom de la category</label>
									<div class="input-group">
										<input type="text" class="form-control" name="category_title" placeholder="Entrez le nom de la categorie">

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
