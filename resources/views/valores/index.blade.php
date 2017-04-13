@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Index valores!
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($valores as $valor)
                                <tr>
                                    <td>{{ $valor->cod_val }}</td>
                                    <td>{{ $valor->des_val }}</td>
                                    <td><button type="button" name="button">Seleccionar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $valores->links() }}
                    {{--
                     --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
