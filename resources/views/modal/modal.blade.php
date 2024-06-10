<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Marcar sin Stock</h5>

            </div>
            <div class="modal-body">
                <p>Esta seguro que quiere marcar el producto como sin Stock? </p>
            </div>
            <div class="modal-footer">
                <form class="d-inline" method="POST" action="{{ route('productos.destroy', $producto) }}">
                    @csrf
                    @method('Delete')
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-outline-danger">Marcar SIN Stock</button>
                </form>
            </div>
        </div>
    </div>
</div>
