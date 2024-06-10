
<div class="modal fade  modal-lg " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header">
          
          <h5 class="modal-title" id="exampleModalLabel" >{{ $prod->nombre }}</h5>
          
        </div>
        <div class="modal-body">
            <div class="card-body">
                <img class="imagen-producto" src="{{ asset('/storage/' . $prod->imagen) }}" alt="">
                <hr>
                <h5>Precio:</h5>
                {{ $prod->precio_format() }}
                <hr>
                <h5>Bodega:</h5>
                @foreach ($bodegas as $bod)
                    @if ($bod->id == $prod->bodega_id)
                        {{ $bod->bodega_name }}
                    @endif
                @endforeach
                <hr>
                <h5>Categoria:</h5>
                @foreach ($categorias as $cat)
                    @if ($prod->categoria_id==$cat->id )
                        {{ $cat->nombre }}
                    @endif
                @endforeach

                <hr>
                <h5>Nota de cata:</h5>
                {{ $prod->nota_cata }}
                <hr>
                <h5>Crianza / Barricado:</h5>
                {{ $prod->crianza_barricado }}

                <hr>
                <h5>Descripcion:</h5>
                {{ $prod->descripcion }}

                <hr>
            </div>
        </div>
        <div class="modal-footer">
          <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>