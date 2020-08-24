

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    <div>
    </div class="container-fluid">
        <div class="panel-body">
        
            <section class="example mt-4">
        
                <form method="POST" action="{{ route('admin/bicicletas/store') }}" role="form" enctype="multipart/form-data">
        
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    
                    @include('admin.bicicletas.frm.prt')
        
                </form>
        
            </section>
        
        </div>
    </body>
</html>