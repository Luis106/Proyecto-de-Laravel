<?PHP 
use App\Http\Controllers\PruebasController; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>

    <div class="container">
    @php
    if (isset($res)) {
        echo " $res asdsdasd";
        # code...
    }else{
        echo " sin";
    }
          
    @endphp
        Hello, @{{  $res }}.
        <?php 
        ?>
    </div>



    <form method = "POST" action=" {{ action([PruebasController::class, "fun_work"]) }}">

        {{csrf_field()}}
    
        <label for = "a">a </label>
        <input type="text" id = "a" name = "a"  /> 
        <label for = "b">b </label>
        <input type="text" id = "b" name = "b"  /> 
        <input  type="submit" value= "Enviar"/>

    
    </form>

</body>
</html>