@extends('site.layout')

@section('title', 'Movimentações')

@section('content')
    <div class="container">
        <h1>Movimentações</h1>
        @if($movements->count() > 0)
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
                        @foreach ($movements as $movement)
                            <tr>
                                <td>{{$movement->getFormatedDate()}}</td>
                                <td>{{$movement->getProductsFormatedNames()}}</td>
                                <td>{{$movement->getFormatedFlux()}}</td>
                                <td>{{$movement->company->name}}</td>
                                <td>{{$movement->user->name}}</td>
                                <td>{{$movement->getFormatedDeliveryValue()}}</td>
                                <td>{{$movement->getTotalValue(true)}}</td>
                            </tr>
                        @endforeach
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
                    <h3>Ainda não há movimentações, vamos adicionar uma?</h3>
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