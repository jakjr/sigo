@extends('forms::list')

@section('content')
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
@stop

@section('actions')
    <button type="button" class="btn btn-default">Ação default</button>
@endsection