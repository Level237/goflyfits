@extends("layouts.Backend.Customer.main")

@section("title")
Préferences utilisateur
@endsection

@section("content")
<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>

				<!-- Wishlist START -->
				<div class="card border">
					<!-- Card header -->
					<div class="card-header border-bottom">
						<h4 class="card-header-title">Edition Préference</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body vstack gap-4">
						<!-- Traveler item START -->
						<div class="card">
							<form method="POST" action="{{ route('customer.preferences.update') }}" class="card-body p-0 pt-3">
								@csrf
                                @method('PUT')
								<div class="mb-3">
									<label class="form-label">Préferences</label>
									<select name="categories[]" multiple class="form-select " data-search-enabled="true">
                                        @foreach ($categoriesSelected as $cat)
                                        <option selected value="{{ $cat->id }}">{{ $cat->category_title }}</option>
                                        @endforeach
                                        @foreach ($categories as $index =>$category)

                                            <option  value="{{ $category->id }}">{{ $category->category_title }}</option>
                                        @endforeach
									</select>
								</div>
                                <hr>
                                <div class="text-end">
                                    <button class="btn btn-primary mb-0" type="submit" data-bs-toggle="modal" data-bs-target="#inquiryForm">
                                        <i class="bi bi-plus-lg"></i> Mise à jour
                                    </button>
                                </div>
							</form>
                            <!-- Button -->

						</div>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Wishlist END -->
@endsection
