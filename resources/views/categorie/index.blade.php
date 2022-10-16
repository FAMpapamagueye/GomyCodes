@extends('layouts.app')
@section('title')
Categorie | formation
@endsection
@section('content')
	<div class="row">
		<button type="button" class="btn btn-primary col-sm-2" data-mdb-toggle="modal"
			data-mdb-target="#staticBackdrop">
			Add Categorie
		</button>
		<br>
		<br>
		<table class="table table-hover text-nowrap container">
			<thead>
				<tr>
                    <th scope="col">#</th>
					<th scope="col">Libelle</th>
					<th scope="col">Description</th>
					<th scope="col">logo</th>
				</tr>
			</thead>
			<tbody>
                @foreach($categories as $app )
                <tr>
                    <td>{{$app->id}}</td>
                    <td>{{$app->libelle}}</td>
                    <td>{{$app->description}}</td>
                    <td><img src="/storage/img/{{$app->logo}}" width="100px" height="100px" style="border-radius: 50px" alt=""></td>
                  </tr>
                  @endforeach

			</tbody>
		</table>

	</div>


	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
		aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Add Equipement</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{route('categorie.store')}}" enctype="multipart/form-data">
                        @csrf
						<!-- 2 column grid layout with text inputs for the first and last names -->
						<div class="row mb-4">
							<div class="col">
								<!-- Text input -->
								<div class="form mb-4">
									<input type="text" id="form6Example4" name="libelle" class="form-control" />
									<label class="form-label" for="form6Example4">libelle</label>
								</div>

								<!-- Email input -->
								<div class="form mb-4">
									<input type="text" id="form6Example5" name="description" class="form-control" />
									<label class="form-label" for="form6Example5">description</label>
								</div>

								<!-- Number input -->
								<div class="form mb-4">
									<input type="file" id="form6Example6" type="file/images" name="logo" class="form-control" />
									{{-- <label class="form-label" for="form6Example6">Logo</label> --}}
								</div>

								<!-- Message input -->


								<!-- Submit button -->
								<!--  <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>-->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary"
									data-mdb-dismiss="modal">Annuler</button>
								<button type="submit" class="btn btn-primary">Add Categorie</button>

							</div>

					</form>
				</div>
			</div>
		</div>


@endsection
