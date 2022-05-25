<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>


<?PHP 
use App\Http\Controllers\JuegoController; 
?>

<body>
    <h1 class="display-4">Videojuegos</h1>
    <table class="table table-dark table-striped   ">
        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Desarrolladora</th>
                <th scope="col">Lanzamiento</th>
                <th scope="col">Opciones</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach( $juegos as $juego )
            <tr>
                <td>{{$juego->id}}</td>
                <td>{{$juego->Nombre}}</td>
                <td>{{$juego->Desarrolladora}}</td>
                <td>{{$juego->Lanzamiento}}</td>
                <td>
                    <a class="btn btn-light" href=" {{ url("/Juegos/editar"."$juego->id")}}" >Editar </a>
                     | <form action=" {{ action([JuegoController::class, "destroy"]) }}" method="POST">
                        {{csrf_field()}}
                      
                        
                            <input type="hidden" name="id" id = "id" value={{$juego->id}}>
                            <button  class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres eliminar el registro? Se irá por mucho timepo')">Eliminar</button>

                    </form>
                    
                    

               
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div >
    <p  class="h4" >Crear un nuevo registro <br>
        <a c class="btn btn-success"href=" {{ url("/Juegos/crear")}}"> Crear </a>
    </p>
    </div>

    
</body>
</html>