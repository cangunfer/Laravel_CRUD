<form method="post" action= "{{url('/')}}/Home/update/{{$user->id}}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{$user->name}}">
    <button type="submit">
        Update
    </button>

</form>