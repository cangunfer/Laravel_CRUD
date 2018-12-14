

<div class="row">



    <table class="table-striped table-bordered">
        <h2>User Name's</h2>
        <tr>

            @foreach($user as $rs)

                <dt>
                   <strong>{{$rs->name}}</strong>


                </dt>
            <dh>
                <a href="{{url('/')}}/Home/delete/{{$rs->id}}">
                    Sil
                </a>
            </dh>
                <dt> <a href="{{url('/')}}/Home/edit/{{$rs->id}}">
                        Düzenle
                    </a></dt>
                <hr/>
            @endforeach
        </tr>

    </table>





    <div>
       <button  class="btn-success">
           <a href="{{url('/')}}/Home/Create">Add User</a>
           </button>
    </div>

</div>