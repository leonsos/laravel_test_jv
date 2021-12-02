<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{route('products.save')}}" method="post">
                @csrf
            <div class="modal-header">
                <h2 class="h6 modal-title">New product</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Product x">
                </div>
                @error('name')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="125" >
                </div>
                @error('price')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">tax</label>
                    <input type="text" name="tax" class="form-control @error('tax') is-invalid @enderror" id="exampleFormControlInput1" placeholder="2%">
                </div>
                @error('tax')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Guardar</button>
                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </form>
        </div>
    </div>
</div>