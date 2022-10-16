@extends('nav.user')
@section('titre')
accueil | GoMyBibliotec
@endsection
@section('content')
<main class="" style="text-align: center;justify-content:center;background-color:rgba(99, 99, 99, 0.616)">
  <div class="bg-light p-5 rounded mt-3" style="background-color:rgb(240, 0, 0)">
    <h1><font style="vertical-align: inherit;">Accede a +10000 livres dans notre GoMyBibliotec </font></h1>
    <p class="lead"><font style="vertical-align: inherit;">Lire et télécharger gratuitement des livres pour vos projets de différents domaines .</font></p>
    <br>
    <div class="input-group" style="justify-content: center" >
        <select name="categorie" id="categorie"  style="border-radius:5% 5% 5% 5% ;height:40px;background-color:gray;outline:none;color:rgb(248, 248, 248)">
            @foreach ($categories as $cat1)
            <option value="{{$cat1->id}}">{{$cat1->libelle}}</option>
            @endforeach

        </select>

        <div class="form-outline" >
          <input type="search" id="form1" class="form-control"  style="background-color:gray;height:40px;" />
          <label class="form-label" for="form1">Search</label>
        </div>
        <button type="button" class="btn btn-outline-danger">
          <i class="fas fa-search"></i>
        </button>
      </div>

</main>
<br>
<br>
<div class="container">
<!--Grid row-->
<div>
    <span>Nos Gategorie</span>
</div>
<br>
<div class="row">
@foreach ($categories as $cat)

    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
      <!-- Image with no mask -->
      <div class="bg-image rounded-6">
        <img
          src="storage/img/{{$cat->logo}}"
          class="w-100"
          alt="Alternative text"
        />
        <!-- Mask -->
        <div class="mask">
          <div
            class="
              bottom-0
              d-flex
              align-items-end
              h-100
              text-center
              justify-content-center
            "
          >
            <div>
              <h2 class="fw-bold text-white mb-4">{{$cat->libelle}}</h2>
              <span style="color: white">{{$cat->description}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endforeach
{{--
    <div class="col-lg-4 mb-4 mb-lg-0">
      <!-- Image with black mask -->
      <div class="bg-image rounded-6">
        <img
          src="https://mdbootstrap.com/img/new/ecommerce/vertical/010.jpg"
          class="w-100"
          alt="Alternative text"
        />
        <!-- Mask -->
        <div
          class="mask"
          style="
            background: linear-gradient(
              to bottom,
              hsla(0, 0%, 0%, 0) 50%,
              hsla(0, 0%, 0%, 0.5)
            );
          "
        >
          <div
            class="
              bottom-0
              d-flex
              align-items-end
              h-100
              text-center
              justify-content-center
            "
          >
            <div>
              <h2 class="fw-bold text-white mb-4">Can you see me?</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <!-- Image with violet mask -->
      <div class="bg-image rounded-6">
        <img
          src="https://mdbootstrap.com/img/new/ecommerce/vertical/010.jpg"
          class="w-100"
          alt="Alternative text"
        />
        <!-- Mask -->
        <div
          class="mask"
          style="
            background: linear-gradient(
              to bottom,
              hsla(0, 0%, 0%, 0),
              hsla(263, 80%, 20%, 0.5)
            );
          "
        >
          <div
            class="
              bottom-0
              d-flex
              align-items-end
              h-100
              text-center
              justify-content-center
            "
          >
            <div>
              <h2 class="fw-bold text-white mb-4">Can you see me?</h2>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  <!--Grid row-->

</div>
<br>
<br>
@endsection
