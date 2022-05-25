<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PruebasController extends Controller
{
    
    public function fun_index(){
        return view('inicio', 
        [
            "param1" => "Hola",
            "param2" => "Mundo"
        ]
    );}
    
    public function fun_demo($algo){
        return view('inicio', ["param1"=>$algo]);

    }

    public function fun_template(){
        return view('pagina');
    }

    public function fun_welcome(){
        return view('welcome');
    }

    public function fun_loggin(Request $request){
       $user = $request -> input('user');
       $pass = $request -> input('password');
       

        return  redirect()-> action([PruebasController::class, "fun_index"]);
    }

    public function fun_work(Request $request){

        /*Problema 1
        if ($a > 40)
        {
            $res = (40 * $b) + ($a - 40) * ($b*2);
        }else{
            $res = ($b * $b);
        }
        
        if($a < 10){
            $res = "Tarjeta";
        }else if ($a >11 && $a < 100){
            $res = "Chocolate";
        }else if ($a > 101 && $a < 250){
            $res = "Flores";
        }else{
            $res = "Joyas";
        }
        */  

        $a = $request -> input('a');
        $b = $request -> input('b');
        $res = 0;

        if($a >= 18  ){
            if($b >= 9){

             $res = 2000;

            }else if ($b >= 6){

                $res = 500;
            }else{
                $res = "Sigua estudiando";
            }
        }else{
            if($b >= 9){

                $res = 3000;
   
               }else if ($b >= 8){
   
                   $res = 2000;
                }else if ($b >= 6){
   
                    $res = 100;
               }else{
                   $res = "Sigua estudiando";
        }
    }

        return "$a y $b resultado: $res";
        # return  redirect()-> action([PruebasController::class, "fun_formulario"])-> with("res" ,$a);
     }


    public function fun_formulario(){
        return view('formulario');
     }


}


