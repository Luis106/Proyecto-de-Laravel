<?PHP 
use App\Http\Controllers\PruebasController; 
?>

@extends('templates.master')


@section('title', "Hola") 

@section('header')
    @parent 
    <p>No sé que poner</p>
@stop

@section('Menu', "Menu Hpña")

@section('menu')
    @parent
@stop

@section("Formulario")
@parent

<form method = "POST" action=" {{ action([PruebasController::class, "fun_loggin"]) }}">
    {{csrf_field()}}

    <label for = "user">Usuario </label>
    <input type="text" id = "user" name = "user"  /> 
    <label for = "password">Contraseña </label>
    <input type="password" id = "password" name = "password"  /> 
    <input  type="submit" value= "Enviar"/>

</form>
@stop

