<?PHP 
use App\Http\Controllers\JuegoController; 
?>

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


<body class="bg-dark text-white">
<form method = "POST" action=" {{ action([JuegoController::class, "create"]) }} ">
   
        {{csrf_field()}}

        @include('juegos.template/form')


  
</form>
<div class=" mx-2" >
    
    <p   >Volver al inicio <br>
        <a c class="btn btn-danger"href=" {{ url("/Juegos")}}"> Volver </a>
</p>
</div>
    
</body>
</html>