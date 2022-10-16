<section class="content">
    @extends('layouts.app')
    @section('title')
 Admin |dashborad
    @endsection
    @section('content')
    <section class="content">
       <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Add User
  </button>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Matricule</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">Telephone</th>
            <th scope="col">profil</th>
          </tr>
        </thead>
        <tbody>
         @foreach($User as $app )
        <tr>
            <td>{{$app->id}}</td>
            <td>{{$app->username}}</td>
            <td>{{$app->email}}</td>
            <td>{{$app->telephone}}</td>
            <td>{{$app->profil}}</td>

          </tr>
          @endforeach



        </tbody>
      </table>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="#" method="POST">
            @csrf
              <div class="form-group">
                  <label for="nom">nom</label>
                  <input class="input-md textinput textInput form-control" type="text" name="username" required>
              </div>
              <div class="form-group">
                <label for="prenom">prenom</label>
                <input class="input-md textinput textInput form-control" type="text" name="profil" required>
            </div>
            <div class="form-group">
                <label for="prenom">Email</label>
                <input class="input-md textinput textInput form-control" type="email" name="email" required>
            </div>
            <div id="div_id_gender" class="form-group required">
                <label for="id_gender"  class="control-label col-md-4  requiredField"> genre<span class="asteriskField">*</span> </label>
                <div class="controls col-md-8 "  style="margin-bottom: 10px">
                     <label class="radio-inline"> <input class="row-sm"  type="radio" name="genre" id="id_gender_1" value="M"  style="margin-bottom: 10px">Masculin</label>
                     <label class="radio-inline"> <input  class="row-sm"type="radio" name="genre" id="id_gender_2" value="F"  style="margin-bottom: 10px">Feminin </label>
                </div>
                <div class="form-group">
                    <label for="prenom">Date Naissance</label>
                    <input class="input-md textinput textInput form-control" type="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Entreprises</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="filiere">
                        {{-- @foreach ($entreprise as $fil )
                        <option value="{{$fil->libelle}}">{{$fil->libelle}}</option>
                        @endforeach --}}
                        <option value="">1</option>

                    </select>
                  </div>
                  {{-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Promotion</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="promo">
                        @foreach ($promo as $pro )
                        <option value="{{$pro->annee}}" >{{$pro->annee}}</option>
                        @endforeach

                    </select>
                  </div> --}}

        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" >Close</button> --}}
          <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close">
          <input type="submit" class="btn btn-primary" value="Save changes">

        </div>
    </form>
      </div>
    </div>
  </div>
    </section>
    @endsection
{{--
</section>
@endsection --}}
