@extends("panel.layout")

@section("contenido")
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="h3">Articulos</h1>

                <a href="{{ route('articulos.create') }}" class="btn btn-primary float-right btn-sm">Nuevo articulo</a>
            </div>
        </div>

        <div class="row mt-2 mb-5">

            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm fs-90">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>imagen</th>
                            <th>Tipo de articulo</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @forelse($articulo as $art)
                            <tr>
                                <td>{{ $art->id }}</td>
                                <td>{{ $art->nombre }}</td>
                                <td>{{ $art->imagen }}</td>
                                <td>{{ $art->TipoArticulo->nombre }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-success dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Acciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               href="{{ route('articulos.edit',$art->id) }}">Editar</a>
                                            <form action="{{ route('articulos.destroy',$art->id) }}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="dropdown-item">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="6" class="text-center text-danger">No hay articulos cargados</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection