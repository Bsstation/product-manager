@extends('site.layout')

@section('title', 'Home')

@section('content')
    <div class="container mt-2 mb-2">
        <h1>Olá, {{auth()->user()->name}}!</h1>
        @if($movements->count() > 0)
            <div class="row">
                <h2>Olá, {{auth()->user()->name}}!</h2>
                <h3>Aqui estão suas movimentações do dia.</h3>
            </div>
            <div class="row">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Produtos</th>
                            <th>Fluxo</th>
                            <th>Empresa</th>
                            <th>Realizado por</th>
                            <th>Frete</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($movements as $movement)
                                <td>{{$movement->getFormatedDate()}}</td>
                                <td>{{$movement->getProductsFormatedNames()}}</td>
                                <td>{{$movement->getFormatedFlux()}}</td>
                                <td>{{$movement->company->name}}</td>
                                <td>{{$movement->user->name}}</td>
                                <td>{{$movement->getFormatedDeliveryValue()}}</td>
                                <td>{{$movement->getTotalValue(true)}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Paginação-->
            <div class="row center">
                {{ $movements->links('utils.pagination') }}
            </div>
            <!-- Modal Trigger -->
            <div class="row">
                <div class="container center-align">
                    <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col s12 m6">
                    <h3>Vamos realizar a nossa primeira movimentação do dia?</h3>
                </div>
                <!-- Modal Trigger -->
                <div class="center-align col s12 m6">
                    <br><br>
                    <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
                </div>
            </div>
        @endif

        <!-- Modal Structure -->
        <div id="modal1" class="modal col">
            @include('forms.new-movement')
        </div>
    </div>
@endsection