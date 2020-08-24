


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <div class="panel-body">
        
            @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
        
            <a href="{{ route('admin/bicicletas/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a>
        
            <section class="example mt-4">
        
                <div class="table-responsive">
        
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bicicletas as $bic)
                            <tr>
                                <td class="v-align-middle">{{$bic->nombre}}</td>
                                <td class="v-align-middle">{{$bic->precio}}</td>
                                <td class="v-align-middle">{{$bic->stock}}</td>
                                <td class="v-align-middle">
                                    <img src="../uploads/{{$bic->imagenesbicicletas()->first()->nombre}}" width="30" class="img-responsive">
                                </td>
                                <td class="v-align-middle">
        
                                    <form action="{{ route('admin/bicicletas/eliminar',$bic->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
        
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button onclick="location.href='{{ url('admin/bicicletas/detallesproducto', [$bic->id]) }}'" href="" type="button" class="btn btn-dark">Ver</button>
        
                                        <a href="{{ route('admin/bicicletas/actualizar',$bic->id) }}" class="btn btn-primary">Editar</a>
        
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
        
                                    </form>
        
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        
        </div>

        <script type="text/javascript">
        
            function confirmarEliminar() {
                var x = confirm("Estas seguro de Eliminar?");
                if (x)
                    return true;
                else
                    return false;
            }
        
        </script>
    </body>
</html>