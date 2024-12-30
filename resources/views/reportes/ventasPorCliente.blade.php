@extends('template')

@section('content')
    <h1 class="mt-4">Ventas por Cliente</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reporte de Ventas por Cliente
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Total Ventas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{ $venta->cliente }}</td>
                            <td>{{ number_format($venta->total, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection