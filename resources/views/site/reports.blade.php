@extends('site.layout')

@section('title', 'Relatórios')

@section('content')
    <div class="row">
        <h1>Relatórios</h1>
        <div class="col s12 m6">
            <h3>Clique no botão ao lado para gerar um relatório.</h3>
        </div>
        <!-- Modal Trigger -->
        <div class="center-align col s12 m6">
            <br><br>
            <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
        </div>

        <!-- Modal Structure -->
        <div id="modal1" class="modal col">
            @include('forms.new-report')
        </div>
    </div>
@endsection