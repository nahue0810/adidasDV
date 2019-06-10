@extends("panel.layout")

@section("contenido")

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="h3">Nueva habitación</h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("habitaciones.store") }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                       placeholder="Ingrese el nombre" value="{{ old("nombre") }}">
                            </div>


                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input type="number" class="form-control" id="numero" name="numero"
                                       placeholder="Ingrese el numero">
                            </div>

                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control" id="precio" name="precio"
                                       placeholder="Ingrese el precio ($)">
                            </div>



                            <div class="form-group">
                                <label for="precio">Tipo</label>
                                <select class="form-contro w-100" name="tipo_habitaciones_id">
                                    <option selected>Seleccione el tipo</option>
                                    @foreach($tipos as $id => $nombre)
                                        <option value="{{ $id }}">{{ $nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="mt-2">Descripción</label>
                                <textarea class="form-control" id="descripcion" rows="3"></textarea>
                            </div>



                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="disponible" name="disponibilidad" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="disponible">Disponible</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="ocupado" name="disponibilidad" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="ocupado">Ocupado</label>
                            </div>


                            <div class="form-group mt-4">

                                <button type="submit" class="btn btn-primary">Cargar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection