@extends('site.layout')

@section('title', 'Empresas')

@section('content')
    <div class="container">
        <h1>Empresas</h1>
        @if($companies->count() > 0)
            <div class="row">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Documento</th>
                            <th>Endereço</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->type  }}</td>
                            @if ($company->type == 'PF')
                                <td>{{ preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4',$company->document) }}</td>
                            @else
                                <td>{{ preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5',$company->document) }}</td>
                            @endif
                            <td>{{ $company->adress }}</td>
                            <td>{{ $company->status == 'enabled' ? 'Ativo' : 'Desativado' }}</td>
                            <td>
                                <button class="btn-floating btn-small waves-effect waves-light blue modal-trigger" href="#modal2"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--Paginação-->
            <div class="row center">
                {{ $companies->links('utils.pagination') }}
            </div>
            <!-- Modal Trigger -->
            <div class="row center-align mt-2 mb-2">
                <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
            </div>
        @else
            <div class="row">
                <div class="col s6">
                    <h3>Ainda não há empresas cadastradas, vamos adicionar uma?</h3>
                </div>
                <!-- Modal Trigger -->
                <div class="center-align col s6">
                    <br><br>
                    <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1">Adicionar</a>
                </div>
            </div>
        @endif

        <!-- Add Modal Structure -->
        <div id="modal1" class="modal col">
            @include('forms.new-company')
        </div>

        <!-- Edit Modal Structure -->
        <div id="modal2" class="modal col">
            @include('forms.edit-company')
        </div>
    </div>
@endsection