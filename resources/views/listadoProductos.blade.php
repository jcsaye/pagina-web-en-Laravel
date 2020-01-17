@extends('layouts.app')

@section('content')

{{-- <div class="container">
  <br>
  <div class="row">
   <div class="col-3">
     
    <img title="producto" alt="Card image cap" class="card-img-top" src="/images/gamers.jpg" >
    <div class="card-body">
      <h4 class="card-title">$300</h4>
      <p class="card-text">descripcion</p>
      <button  value="agregar" type="submit" class="btn btn-primary">agregar a carrito</button>
    </div>
  
   </div>
  
  </div>

 {{$Productos->links()}}
</div> --}}
{{-- <div class="row">
  @forelse($Productos as $Producto)


   <div class="col-3">
     
      <div class="card">
    <div class="card-body ">
        <img 
        class="card-img img-thumbnail" 
        src="storage/{{$Producto->imagen}}"
        alt="titulo"
        title="titulo producto"

        >
        
          <span>{{ $Producto->nombre}}</span>
          <h5 class="card-title">${{ $Producto->precio}} </h5>
          <p class="card-text">{{$Producto->descripcion}}</p>

          <button  class="btn btn-primary" 
          name="btnaccion" 
          type="submit">
            agregar al carrito
          </button>


            @empty
               <p>No hay productos</p>

         
        </div>
      
       
    </div>

   </div>
     @endforelse 
</div> --}}

{{-- <button  class="btn btn-danger" type="button" name="button"><a href="/agregarproducto">agregar Productos</a></button> --}}

  {{-- expr --}}
<div class="col-3">


<div class="row">
 @forelse($Productos as $Producto)
<div class="card text-center">
  <img class="card-img-top" src="storage/{{$Producto->imagen}}" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">ir al acrrito</a>
  </div>
</div>

 @empty
               <p>No hay productos</p>

@endforelse 
</div>


  
</div>






@endsection
