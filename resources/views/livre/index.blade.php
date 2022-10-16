@extends('layouts.app')
@section('title')
Categorie | formation
@endsection
@section('content')
	<div class="row">
		<button type="button" class="btn btn-primary col-sm-2" data-mdb-toggle="modal"
			data-mdb-target="#staticBackdrop">
			Add Livres
		</button>
		<br>
		<br>
		<table class="table table-hover text-nowrap container">
			<thead>
				<tr>

					<th scope="col">Libelle</th>
					<th scope="col">Categorie</th>
					<th scope="col">Document</th>
				</tr>
			</thead>
			<tbody>
				@foreach($livre as $app )
        <tr>
            <td>{{$app->id}}</td>
            <td>{{$app->libelle}}</td>
            <td>{{$app->categorie}}</td>
            <td>
                <a href="{{ route('lire',$app->id)}}" class="btn " style="background:#fdddb3 ">LIRE</a>

                <a href="{{ route('storage',$app->document)}}" class="btn " style="background:#fdddb3 ">
                <i class="fas fa-download"></i>
              </a>

            </td>
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
					<h5 class="modal-title" id="staticBackdropLabel">Add Livres</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{route('livres.store')}}" enctype="multipart/form-data">
                        @csrf
						<!-- 2 column grid layout with text inputs for the first and last names -->
						<div class="row mb-4">
							<div class="col">
								<!-- Text input -->
								<div class="form-outline mb-4">
									<input type="text" id="form6Example4" name="libelle" class="form-control" />
									<label class="form-label" for="form6Example4">libelle</label>
								</div>

								<!-- Email input -->
								<div class="form-outline mb-4">
									{{-- <input type="text" id="form6Example5" name="description" class="form-control" /> --}}
                                    <select name="categorie" class="form-select" id="">
                                        @foreach ($categories as $fil )
                                        <option value="{{$fil->id}}">{{$fil->libelle}}</option>
                                        @endforeach
                                    </select>
									<label class="form-label" for="form6Example5">Categorie</label>
								</div>

								<!-- Number input -->
								<div class="form-outline mb-4">
									<input type="file" id="form6Example6" type="file/files" name="document" class="form-control" />
									{{-- <label class="form-label" for="form6Example6">Logo</label> --}}
								</div>

								<!-- Message input -->


								<!-- Submit button -->
								<!--  <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>-->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary"
									data-mdb-dismiss="modal">Annuler</button>
								<button type="submit" class="btn btn-primary">Add Livres</button>

							</div>

					</form>
					<div th:replace="fragment/menu.html :: jsfiles">
					</div>
				</div>
			</div>
		</div>


@endsection
