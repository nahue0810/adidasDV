@extends("panel.layout")

@section("contenido")
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="h3">Habitaciones</h1>

                <a href="{{ route("habitaciones.create") }}" class="btn btn-primary float-right btn-sm">Nueva habitación</a>
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
                            <th>Tipo</th>
                            <th>Número</th>
                            <th>Precio</th>
                            <th>Disponibilidad</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @forelse($habitaciones as $habitacion)
                            <tr>
                                <td>{{ $habitacion->id }}</td>
                                <td>{{ $habitacion->nombre }}</td>
                                <td>{{ $habitacion->TipoHabitacion->nombre }}</td>
                                <td>{{ $habitacion->numero }}</td>
                                <td>{{ $habitacion->precio_formateado }}</td>
                                <td>{{ $habitacion->disponibilidad }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-success dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Acciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               href="">Editar</a>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="">
                                                <button type="submit" class="dropdown-item">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="6" class="text-center text-danger">No hay habitaciones cargadas</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection