<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <br>
<div class="  form-group mx-2">
    <label  for = "Nombre">Nombre </label>
    <input class="form-control" placeholder="Ace Combat 7: Skies Unknown" required="required" minlength="2" type="text" pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ:]{2,}" value="{{isset($juego->Nombre)?$juego->Nombre:""   }}" id = "Nombre" name = "Nombre"  /> 

    <label for = "Desarrolladora">Desarrolladora </label>
    <input placeholder="Namco" class="form-control" required="required"  minlength="2" type="text" pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" value="{{ isset($juego->Desarrolladora)?$juego->Desarrolladora:"" }}" id = "Desarrolladora" name = "Desarrolladora"/> 

    <label for = "Lanzamiento">Lanzamiento </label>
    <input placeholder="2019-01-18" pattern="^[1-2][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]$" class="form-control" required="required" minlength="10" maxlength="10" type="text" class="datepicker"  value="{{ isset($juego->Lanzamiento)?$juego->Lanzamiento:"" }}" id = "Lanzamiento" name = "Lanzamiento"  />

    <input type="hidden" name="id" id = "id" value="{{ isset($juego->id)?$juego->id:""}}">
    <br>
    <input class="btn btn-primary"  type="submit" value= "Enviar"/>

</div>
<br>