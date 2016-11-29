
@if ($action == 'Editar')  
{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}
@endif


User::destroy($id);

$user = User::find($id);
$user->delete();