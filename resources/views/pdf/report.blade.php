<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    <style>
        table, td, th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div>
        <h2>Relatório de Movimentações</h2>
        <br>
        <hr>
        <br>
        @if($movements->count() > 0)
            <div>
                <table>
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
        @else
            <div>
                <h3>Não a movimentações nas condições selecionadas</h3>
            </div>
        @endif
        <br>
        <hr>
        <br>
        <div">
            <p><b>Entrada Total:</b> R$ {{ number_format($totalIn, 2, ',', '.') }}</p>
            <p><b>Saída Total:</b> R$ {{ number_format($totalOut, 2, ',', '.') }}</p>
            <br>
            <hr>
            <p>Relatório gerado por <b>{{ Auth::user()->name }}</b> em <b>{{ $today }}</b>.</p>
        </div>
    </div>
</body>
</html>