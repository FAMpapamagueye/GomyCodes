@extends('layouts.app')
@section('title')
Categorie | formation
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="color : rgb(0, 0, 0)">
                                <i class="material-icons opacity-10" style="color : black"> </i>
                                <span>PERSONNALS</span>
                            </div>
                            <div class="text-end pt-1">
                                <h1 class="mb-0"><i class="ion ion-person" >1</i></h1>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute" style="color : rgba(0, 0, 0, 0.836)">
                                <span>Categorie Employe</span>
                                <i class="material-icons opacity-10" style="color : black"></i>
                            </div>
                            <div class="text-end pt-1">
                                <h1 class="mb-0"><i class="fa fas-person" >1</i></h1>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute" style="color : rgb(22, 22, 22)">
                                <span>TYPE CONTRACTS</span>
                                <i class="material-icons opacity-10" style="color : black"></i>
                            </div>
                            <div class="text-end pt-1">

                                <h1 class="mb-0"><i class="fa fa-desktop"
                                        aria-hidden="true">1</i></h1>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div class="col-xl-3 col-sm-6">
                <a href="">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute" style="color : rgb(14, 14, 14)">
                               <span>CONTRATS</span>
                                <i class="material-icons opacity-10"  style="color : black"></i>
                            </div>
                            <div class="text-end pt-1">
                                <h1 class="mb-0"><i class="fa fa-graduation-cap" aria-hidden="true"
                                       >
                                        1</i></h1>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
        </div>

    </div>
    {{-- <section class="content">
        <div class="container-fluid">
            <!-- DONUT CHART -->
            <div class="card">
                <div class="card-header" style="background-color: #5d3d23; color : white">
                    <h3 class="card-title">Le nombre de stagiaire par filiere</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                    </canvas>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section> --}}

    <section>
        <div class="card">
            <div class="card-header" style="background-color: #d87a0efd; color : white">
                <h3 class="card-title">Le nombre de Personne  par Categorie d'emploie</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <canvas id="donutChart2"
                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
    </section>

    <script type="text/javascript"  src="/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->okml,

    <script src="/css/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/css/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/css/adminlte.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
 $(function() {

//  -- -- -- -- -- -- -
 //- DONUT CHART -
 //----
 // Get context with jQuery - using jQuery's .get() method.
 var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
 var donutData = {
     labels: [],
     datasets: [{
         data: [],
         backgroundColor: [],
     }]
 }
 var CDATA = JSON.parse(`<?php echo $contrats; ?>`)
 let nbr_Personnal_fil = 0;

 //desruction de la collection  CDATA
 for (let a = 0; a < CDATA.length; a++) {

     // console.log(donutData.datasets)
     donutData.datasets[0].backgroundColor.push('#' + Math.floor(Math.random(1000000) * 100) + Math
         .floor(Math.random(100000) * 100) + Math.floor(Math.random(1000000) * 100));
         let id_personnals= CDATA[a].personal_id;
         let id_categories= CDATA[a].categorie_id;

     //destruction des collection CAPPRENANT et STAGES
     //en fin de d'obtenir le nombre d'apprenants qui font stages dans une filieres
     var CPERSONNAL =JSON.parse(`<?php  echo $personnals; ?>`)
     var CATEGORIE = JSON.parse(`<?php echo  $categories; ?>`)
        //  console.log(CPERSONNAL);
        //  console.log(CATEGORIE);
     for (let b = 0; b < CPERSONNAL.length; b++) {
        let personnal_id = CPERSONNAL[b].id;
        //  let Categories = CONTRATS[b].categorie_id;

         console.log(personnal_id);
         //on parcourt la collection de contrats
         for (let c = 0; c < CATEGORIE.length; c++) {
             //pour determiner si l'apprenants a fait ce stage

             //Verifier si le stage  est en rapport avec  ce filiere
             let retp = CATEGORIE[c].libelle;
             if (retp == id_categories) {
                 if (personnal_id == id_personnals) {
                     console.log(personnal_id, id_personnals,retp,id_categories);
                     nbr_Personnal_fil++;

                 }


             }

         }

         //                 //sinon

     }
    //  si id_categories existe deja ++
    const exit= donutData.labels.includes(id_categories);
    console.log(exit);
    if(exit == true){
    // nbr_Personnal_fil++;
     const val=donutData.datasets[0].data.indexOf(nbr_Personnal_fil);
     console.log(val);
     donutData.datasets[0].data[val]=++nbr_Personnal_fil;
    //  donutData.labels.push(id_categories);
    }else{
        donutData.datasets[0].data.push(nbr_Personnal_fil);
     donutData.labels.push(id_categories);
    }
     nbr_Personnal_fil = 0;
 }

//  console.log('gg', nbr_apprenant_fil);



 console.log(donutData.labels);
 console.log(donutData.datasets[0].backgroundColor);

 var donutOptions = {
         maintainAspectRatio: false,
         responsive: true,
     }
     //Create pie or douhnut chart
     //You can switch between pie and douhnut using the method below.
 new Chart(donutChartCanvas, {
     type: 'pie',
     data: donutData,
     options: donutOptions
 })

}

)
        //  $(function() {
        //     var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
        //     var donutData = {
        //         labels:
        //         //  ['test','categorie']
        //             {{Js::from($Idcategorie)}}
        //         ,
        //         datasets: [{
        //             data:
        //             //  [100,700]
        //                 {{Js::from($IdApprenant)}}
        //             ,
        //             backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        //         }]
        //     }
        //     var donutOptions = {
        //         maintainAspectRatio: false,
        //         responsive: true,
        //     }
        //     //Create pie or douhnut chart
        //     // You can switch between pie and douhnut using the method below.
        //     new Chart(donutChartCanvas, {
        //         type: 'pie',
        //         data: donutData,
        //         options: donutOptions
        //     })
        // })
    </script>
@endsection
