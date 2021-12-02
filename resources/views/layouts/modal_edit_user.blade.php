<div class="modal fade" id="modal-default-add{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default-add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{route('users.update',$user)}}" method="post">
                @method('PUT')
                @csrf
            <div class="modal-header">
                <h2 class="h6 modal-title">Terms of Service</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" value="{{$user->password}}">
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