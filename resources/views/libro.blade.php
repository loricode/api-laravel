<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CRUD</a>
   <div class="collapse navbar-collapse">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Laravel 
        <span class="sr-only">(current)</span></a> 
    </div>
  </div>
</nav>


<div class="container p-4">
    <div class="row ">
        <div class="col-md-6">
            <form class="card p-2" method="POST" action="libro">
                @csrf
                <div class="form-group">
                  <input type ="text"
                         name ="nombre" 
                         placeholder ="Nombre"
                         class ="form-control" />
                 </div>
                <div class="form-group">
                  <input type ="text"
                         name ="edicion"
                         placeholder ="Edicion"
                         class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
        </div>
    
    <div class="col-md-6">
        
            <ul class="list-group">
                @foreach ($libros as $libro)
                <li class="list-group-item">
                  <p class="text-uppercase">Nombre: {{ $libro->nombre }}<p>
                  <p>Edicion: {{ $libro->edicion }}<p>
                   <div class="row">
                        <div class="col-md-3">
                        <a href="libro/{{$libro->id}}">delete</a>
                        </div>
                        
                      </div>
                </li>
            @endforeach
            </ul>
          </div> 
    </div>
  </div>
</div>