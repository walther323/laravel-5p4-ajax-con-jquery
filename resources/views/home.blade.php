@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Administrativo</div>

                <div class="panel-body">
                    <p>
                        {{ $products->total() }} registros | pagina {{ $products->currentPage() }} de {{ $products->lastPage() }}
                    </p>

                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombre del producto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($products as $item)
                                <tr>
                                    <td width="20px"> {{ $item->id }}</td>
                                    <td> {{ $item->name }} </td>
                                    <td width="20px"> Eliminar </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {!! $products->render() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
