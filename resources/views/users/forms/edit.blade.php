<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editUsuario{{$user->id}}">
  Editar
</button>

<div class="modal fade" id="editUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('users.update', $user)}}" method="POST">

          {{ csrf_field() }} {{ method_field('PUT')}}

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Ingrese nombre">
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Ingrese email">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" placeholder="Ingrese password">
          </div>

          <button type="submit" class="btn btn-primary">Save changes</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
