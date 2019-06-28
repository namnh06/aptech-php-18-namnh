@foreach($users as $user)
<div>
  {{-- <a href="http://localhost/aptech-php-18-namnh/php/07-20190628/model/public/users/{{$user->id}}">{{$user->email}}
  --}}
  {{-- <a href={{asset("users/".$user->id)}}>{{$user->email}} </a> --}}
  {{$user->id}} | {{$user->email}} | {{$user->name}}
  <form action="{{asset('users/'.$user->id)}}" method="GET">
    <button type="submit">Xem Chi Tiet</button>
  </form>
  <form action="{{asset('users/'.$user->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Xoa</button>
  </form>
  <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET">
    <button type="submit">edit</button>
  </form>
</div>
@endforeach