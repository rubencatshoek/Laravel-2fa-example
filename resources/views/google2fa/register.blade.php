@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Opzetten van  Google Authenticator</div>

                    <div class="panel-body" style="text-align: center;">
                        <p>Scan de barcode hieronder of gebruik de volgende code: {{ $secret }}</p>
                        <div>
                            <img src="{{ $QR_Image }}">
                        </div>
                        <p>Je moet de Google Authenticator app juist opzetten, anders kan je zo niet meer inloggen!</p>
                        <div>
                            <a href="./complete-registration"><button class="btn-primary">Voltooi registratie</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
