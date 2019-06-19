@extends("web.layout")


@section("contenido")

<section id="Productos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-left">ARTICULOS</h1>
                </div>
            </div>
            
            <article class="row">
               <?php
                use adidasDV\Modelos\Articulo;
                
                $articulos = Articulo::all();
                
                foreach($articulos  as $articulo):
                ?>                   
                    <div class="col-xs-12 col-sm-5 col-md-3">
                        <a data-fancybox="calzado" href="<?= $articulo->imagen; ?>">
                        <img src="<?= $articulo->imagen; ?>" alt="" class="img-fluid rounded">
                        </a>
                    </div>                
                
                <?php
                  endforeach;
                ?>
            </article>
        </div>
    </section>
@endsection