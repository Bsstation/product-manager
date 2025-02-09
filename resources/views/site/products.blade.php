@extends('site.layout')

@section('title', 'Produtos')

@section('content')
    <div class="container">
        <h1>Produtos</h1>
        @if($products->count() > 0)
            <div class="row">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ Str::limit($product->description, 50)}}</td>
                            <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td>{{ $product->status == 'enabled' ? 'Ativo' : 'Desativado' }}</td>
                            <td>
                                <button class="btn-floating btn-small waves-effect waves-light blue modal-trigger" data-item="{{ json_encode($product) }}" 
                                    onclick="editProduct(this)" href="#modal2"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row center">
                {{ $products->links('utils.pagination') }}
            </div>
            <!-- Add Modal Trigger -->
            <div class="row center-align">
                <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
            </div>
        @else
            <div class="row">
                <div class="col s6">
                    <h3>Ainda não há produtos cadastrados, vamos adicionar um?</h3>
                </div>
                <!-- Add Modal Trigger -->
                <div class="center-align col s6">
                    <br><br>
                    <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
                </div>
            </div>
        @endif

        <!-- Add Modal Structure -->
        <div id="modal1" class="modal col">
            @include('forms.new-product')
        </div>

        <!-- Edit Modal Structure -->
        <div id="modal2" class="modal col">
            @include('forms.edit-product')
        </div>
    </div>
@endsection