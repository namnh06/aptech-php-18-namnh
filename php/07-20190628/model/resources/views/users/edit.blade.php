<form action="{{asset('/users/'.$user->id)}}" method="POST">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div>
    <label for="">Name</label>
    <input type="text" name="name" value="{{$user->name}}">
  </div>
  <div>
    <label for="">Email</label>
    <input type="email" name="email" value="{{$user->email}}">
  </div>
  <button type="submit">Update</button>
</form>