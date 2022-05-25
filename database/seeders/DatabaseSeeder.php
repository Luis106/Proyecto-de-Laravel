<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juego;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $Juego =  new Juego();

      $Juego->Nombre = "Super Mario Bros 3";
      $Juego->Desarrolladora = "Nintendo";
      $Juego ->Lanzamiento = Carbon::parse('1988-10-23');

      $Juego ->save();
      $Juego2 =  new Juego();

      $Juego2->Nombre = "Ace Combat 7: Skies Unkown ";
      $Juego2->Desarrolladora = "Namco";
      $Juego2 ->Lanzamiento = Carbon::parse('2019-01-18');

      $Juego2 ->save();

      $Juego3 =  new Juego();

      $Juego3->Nombre = "Ace Combat 5: The Unsung War ";
      $Juego3->Desarrolladora = "Namco";
      $Juego3 ->Lanzamiento = Carbon::parse('2004-10-21');

      $Juego3 ->save();

      $Juego4 =  new Juego();
      $Juego4->Nombre = "The Legend of Zelda Majora's Mask";
      $Juego4->Desarrolladora = "Nintendo";
      $Juego4 ->Lanzamiento = Carbon::parse('2000-04-21');

      $Juego4 ->save();

      $Juego5 =  new Juego();
      $Juego5->Nombre = "Super Smash Bros. Ultimate";
      $Juego5->Desarrolladora = "Nintendo";
      $Juego5 ->Lanzamiento = Carbon::parse('2000-12-07');

      $Juego5 ->save();

      $Juego6 =  new Juego();
      $Juego6->Nombre = "Shantae";
      $Juego6->Desarrolladora = "WayForward";
      $Juego6 ->Lanzamiento = Carbon::parse('2002-06-02');

      $Juego6 ->save();


    }
}
