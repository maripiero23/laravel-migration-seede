<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Viene caricato il JS ed anche il file app.scss --}}
    @vite('resources/js/app.js') 
</head>
<body class="text-success bg-warning">

    <div class="container">
        <h1 class="text-center text-danger">Laravel Migration</h1>

        <h2 class="text-center py-5 text-primary">Treni in partenza oggi</h2>
        <div class="row">
             @foreach($trains as $train)
                
             <div class="col-6">
                 <div class="card border-0 text-center">
                     <h4>Azienda:{{$train->azienda}}</h4>
                     <h4>Stazione partenza: {{$train->stazione_partenza}}</h4>
                     <h4>Stazione arrivo: {{$train->stazione_arrivo}}</h4>
                     <h4>Orario di partenza: {{$train->orario_partenza}}</h4>
                     <h4>ID Treno: {{$train->orario_arrivo}}</h4>
                     <h4>Numero Carrozza: {{$train->id_treno}}</h4>
                     <h4>In orario: {{$train->numero_carrozza}}</h4>
                 </div>
             </div>
             @endforeach

            
        </div>




    </div>
    
</body>
</html>