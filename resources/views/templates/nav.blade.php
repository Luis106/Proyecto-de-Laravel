<?php
use App\Http\Controllers\PruebasController;
?>

@yield("Menu")
@section('menu')
    

<nav>
    <li><a href="{{action([PruebasController::class,'fun_index'])}}">dsf</a></li>
    <li><a href="{{action([PruebasController::class,'fun_index'])}}">dsf</a></li>
    <li>2</li>

</nav>



@show