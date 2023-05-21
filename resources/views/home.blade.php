@extends('app')
@section('content')
    <!-- Centered div -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Facturacion Electronica</div> --}}
                    <p style="text-align: center; padding: 2.5rem"> SAITEL pone a tu disposición el servicio de FACTURA
                        ELECTRÓNICA, recibe la
                        factura mensual de tu servicio directamente a tu correo electrónico y puedes descargar tu factura
                        eletrónica desde www.saitel.ec Reduce el tiempo de recepción del estado de cuenta y apoya al medio
                        ambiente en la disminución de uso de papel.
                    <div class="card-body">
                        <form method="get" action="{{ route('bills.index') }}">
                            @csrf
                            @error('dni')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Importante!</h4>
                                <p>Para poder acceder a su factura electrònica, por favor ingrese su numero de cèdula de
                                    identidad, sin guiones ni espacios.</p>
                                <hr>
                                <p class="mb-0">Si no puede acceder a su factura, por favor comuniquese con nosotros al
                                    072-822-000 o al correo:
                                    <a href="mailto: support@saitel.ec">support@saitel.ec</a>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="rfc" class="form-label">Cedula de Ciudadanìa (ejm: 1050363736)</label>
                                <input type="number" maxlength="10" class="form-control" id="dni" name="dni" required>
                                <div id="emailHelp" class="form-text">Ingrese los 10 digitos de su cèdula de identidad</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Consultar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
