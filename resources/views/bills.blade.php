@extends('app')
@section('content')
    <!-- table with bill information -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- client first name -->
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $client->first_name . ' ' . $client->last_name }}" readonly>
                    <input type="text" class="form-control" value="{{ $client->address}}" readonly>
                    <input type="text" class="form-control" value="{{ $client->city}}" readonly>


                </div>

                <div class="card">
                    {{-- <div class="card-header">Facturacion Electronica</div>                     --}}
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sucursal</th>
                                    <th scope="col">No. de Factura</th>
                                    <th scope="col">Fecha Emisión</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Descargar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills as $bill)
                                    <tr>
                                        <td>{{ $bill->branch }}</td>
                                        <td>{{ $bill->id }}</td>
                                        <td>{{ $bill->date }}</td>
                                        <td>{{ $bill->total }}</td>
                                        <td>{{ $bill->status }}</td>
                                        <td><a href="{{route('generate-pdf')}}" target="_blank">Descargar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
@endsection