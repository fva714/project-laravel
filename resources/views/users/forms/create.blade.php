<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createUsuario">
  Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="createUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('users.create')}}" method="POST">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Ingrese nombre">
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Ingrese email">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Ingrese email">
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
