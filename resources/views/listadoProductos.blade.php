<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
  </head>
  <link rel="stylesheet" href="css/app.css">
  <body>
    <h1>Listado de Productos</h1>
    <ul>
      @forelse($Productos as $Producto)
         <li>{{$Producto->id}}</li>
        {{ $Producto->nombre}}
        <br>
        {{$Producto->descripcion}}
        <br>
        ${{$Producto->precio}}
        <br>
        <div class="">
          <img  style="width-200px"  src="/storage/{{$Producto->imagen}}" alt="">
        </div>

        @empty
       <p>No hay productos</p>

      @endforelse
    </ul>

{{$Productos->links()}}

<button type="button" name="button"><a href="/agregarproducto">agregar Producto</a></button>
  </body>
</html>
