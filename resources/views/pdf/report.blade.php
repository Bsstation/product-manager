<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
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
        @else
            <div class="col s12 m6">
                <h3>Ainda não há movimentações, vamos adicionar uma?</h3>
            </div>
        @endif
    </div>
</body>
</html>