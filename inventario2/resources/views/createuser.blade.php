@section('content')

    <h1>Crear Usuario</h1>

    <form method="POST" action="{{url('cliente')}}">
        {{ csrf_field() }}




    </form>



    @endsection