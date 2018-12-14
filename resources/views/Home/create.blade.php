<form method="post" action= "{{url('/')}}/Home/Store">
    @csrf
<label>Name:</label>
    <input type="text" name="name">
    <button type="submit">
        Create User
    </button>

</form>