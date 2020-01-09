<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>agregar producto</title>
  </head>
  <body>
    <form class="" action="/agregarproducto" method="post" enctype="multipart/form-data">
      {{-- <ul class="errores" style="color:red" >
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach --}}

      </ul>
      {{csrf_field()}}
      <label for="">nombre:</label>
      <input type="text" name="nombre" value="{{old('nombre')}}" ><br><br>
      {!!$errors->first('nombre','  <small>:message</small><br>')!!}

      <label for="">descripcion:</label><br>
      <textarea name="descripcion" value="{{old('descripcion')}}" rows="8" cols="80"  ></textarea><br><br>
      {!!$errors->first('descripcion','<small>:message</small><br>')!!}

      <label for="">categoria:</label>
      <input type="text" name="categoria" value="{{old('categoria')}}" ><br><br>
      {!!$errors->first('categoria','<small>:message</small><br>')!!}

      <label for="">stock:</label>
      <input type="number" name="stock" value="{{old('stock')}}" ><br><br>
      {!!$errors->first('stock','<small>:message</small><br>')!!}

      <label for="">precio:</label>
      <input type="text" name="precio" value="{{old('precio')}}"><br><br>
      {!!$errors->first('precio','<small>:message</small><br>')!!}

      <label for=""></label>
      <input type="file" name="imagen" value="{{old('imagen')}}"><br><br>
      {!!$errors->first('nombre','<small>:message</small><br>')!!}

      <input type="submit" name="" value="enviar">
    </form>

  </body>
</html>
