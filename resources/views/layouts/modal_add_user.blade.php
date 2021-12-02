<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{route('users.save')}}" method="post">
                @csrf
            <div class="modal-header">
                <h2 class="h6 modal-title">New user</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="miguel jose">
                </div>
                @error('name')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                @error('email')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">contraseña</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" placeholder="*******">
                </div>
                @error('password')
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