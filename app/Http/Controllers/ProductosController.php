<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{
  public function Listado(){

  $Productos=Producto::paginate(6);


  $vac = compact('Productos');
  return view ("ListadoProductos", $vac);

}

  public function detalle($id){

    $producto=Producto::find($id); 

    $vac= compact('producto');
    return  view ('detalleProducto',$vac);
    
  }



 public function agregar(request $req){



  $reglas=  [
    "nombre"=> "string|min:3|max:100|unique:productos,nombre",
    "descripcion"=> "string|max:255",
    // "categoria"=>"string",
    "stock"=>"integer|min:1",
    "precio"=>"numeric|min:1",
    "imagen"=>"file"
];



  $mensajes = [
  "string"=>"el campo attribute:  debe ser de tipo texto",
  "unique"=>"el campo attribute: tiene un minimo de :min",
  "max"=>"el campo attribute: tiene un maximo de :max",
  "numeric"=>"el campo attribute: debe ser un numero",
  "integer"=>"el campo attribute: debe ser un numero entero",
  "imagen"=>"el campo attribute: debe ser una imagen"

];

  $this->validate($req, $reglas, $mensajes);

   $productoNuevo= new Producto();

   $ruta=$req->file('imagen')->store('public');
   $nombreArchivo=basename($ruta);

   $productoNuevo->imagen= $nombreArchivo;
   $productoNuevo->nombre = $req['nombre'];
   $productoNuevo->descripcion = $req['descripcion'];
   $productoNuevo->categoria = $req['categoria'];
   $productoNuevo->stock = $req['stock'];
   $productoNuevo->precio = $req['precio'];


   $productoNuevo->save();

   return redirect("/productos");
 }
}
