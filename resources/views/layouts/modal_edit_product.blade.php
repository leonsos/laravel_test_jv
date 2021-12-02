<div class="modal fade" id="modal-default-add{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default-add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{route('products.update',$product)}}" method="post">
                @method('PUT')
                @csrf
            <div class="modal-header">
                <h2 class="h6 modal-title">Terms of Service</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value="{{$product->price}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tax</label>
                    <input type="text" name="tax" class="form-control" id="exampleFormControlInput1" value="{{$product->tax}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Actualizar</button>
                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </form>
        </div>
    </div>
</div>