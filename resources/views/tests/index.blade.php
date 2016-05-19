@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hola Mundo</div>
                    <div class="panel-body">
                        <div id="nodo_test"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('assets')
    <script type="text/babel" src="{{asset('js/components/tests.jsx')}}"></script>
@endsection