@extends('forms::list')

@section('content')
    <form action="{{action('\Sigo\Http\Controllers\AtendimentoController@filter')}}" method="POST">

        {{csrf_field()}}

        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
            </thead>
        </table>

        <input name="filter" class="form-control" value="{{old('filter')}}">

        <div class="form-actions fluid text-center">
            <button class="btn btn-default" type="submit">Ação default</button>
        </div>

    </form>
@stop
