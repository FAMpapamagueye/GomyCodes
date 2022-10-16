@extends('nav.user')
@section('titre')
accueil | GoMyBibliotec
@endsection
@section('content')
<div class="row">
    @foreach($livres as $liv)

    <div class="col-sm-3"  style="border-color: rgb(43, 30, 12)" >
      <div class="card" style="">
    {{-- <div class="col-sm-4" > --}}
        <div class="card-body" style="background-color: rgb(252, 252, 252);border:#ffffff 3px solid" >

          <h5 class="card-title" style="color:#000000 ">{{ $liv->libelle }}</h5>
          <p class="card-text" style="color:#000000 ">{{ $liv->description }}

          </p>
          <a href="{{ route('lire',$liv->id)}}" class="btn " style="background:#e6150d">LIRE</a>

            <a href="{{ route('storage',$liv->document)}}" class="btn " style="background:#e6150d ">
            <i class="fas fa-download"></i>
          </a>

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
