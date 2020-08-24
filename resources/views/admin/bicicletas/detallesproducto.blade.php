
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>



<div class="content-box-large">
 
 <div class="panel-heading">

     <div class="panel-title">
         <h2>{{ $bicicletas->nombre }}</h2></div>

 </div>

 <div class="panel-body">

     <section class="example mt-4">

         <strong>Precio:</strong>
         <br> {{ $bicicletas->precio }}

         <br>
         <br>

         <strong>Stock:</strong>
         <br> {{ $bicicletas->stock }}

         <br>
         <br>

         <strong>Creado:</strong>
         <br> {{ $bicicletas->created_at }}

         <br>
         <br>

         <strong>Actualizado:</strong>
         <br> {{ $bicicletas->updated_at }}

         <br>
         <br>

         <strong>Galería de Imágenes:</strong>
         <br>

         <!-- Mostramos todas las imágenes pertenecientes a a este registro -->
         @foreach($imagenes as $img)

             <a data-fancybox="gallery" href="../../../uploads/{{ $img->nombre }}">
                 <img src="../../../uploads/{{ $img->nombre }}" width="200" class="img-fluid"> 
             </a> 

         @endforeach

         <br><br>

         <a href="{{ route('admin/bicicletas') }}" class="btn btn-dark">Volver</a>

     </section>

 </div>

</div>

 
<script src="../../../js/jquery.min.js"></script>
<link rel="stylesheet" href="../../../css/jquery.fancybox.min.css" />
<script src="../../../js/jquery.fancybox.min.js"></script>

</body>
</html>