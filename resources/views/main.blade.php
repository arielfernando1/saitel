@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a href="/working">
                    <img class="icon" src="{{ asset('img/mail.png') }}" alt="mail" width="200">
                    <div class="desc">Correo</div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/moodle">
                    <img class="icon" src="{{ asset('img/moodle.png') }}" alt="moodle" width="200">
                    <div class="desc">Capacitaciones</div>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ route('facturacion') }}">
                    <img class="icon" src="{{ asset('img/facturacion.png') }}" alt="Saitel" width="200">
                    <div class="desc">Facturación</div>
                </a>
            </div>
            <div class="col-auto">
                <a href="http://saitelapp.ec/antenas/test/">
                    <img class="icon" src="{{ asset('img/speedtest.svg') }}" alt="Saitel" width="225">
                    <div class="desc">SpeedTest</div>
                </a>
            </div>
        </div>
    </div>
@endsection
