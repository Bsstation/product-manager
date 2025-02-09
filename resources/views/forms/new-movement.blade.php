<form action="{{ route('movements.store') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Adicionar Movimentação</h4>
        <div class="row">
            <div class="input-field col s3">
                <select name="flux" required>
                    <option value="" disabled selected>Selecione o fluxo</option>
                    <option value="In">Entrada</option>
                    <option value="Out">Saída</option>
                </select>
                <label>Fluxo</label>
            </div>
            <div class="input-field col s4">
                <select name="company_id" required>
                    <option value="" disabled selected>Selecione a empresa</option>
                    @foreach ($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
                <label>Empresa</label>
            </div>
            <div class="input-field col s3">
                <select name="product_id" required>
                    <option value="" disabled selected>Selecione um produto</option>
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>Produto</label>
            </div>
            <div class="input-field col s2">
                <input id="quantity" min="1" step="1" name="quantity" type="number" class="validate" required>
                <label for="quantity">Quantidade</label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s3">
                <input id="delivery" name="delivery_price" type="number" class="validate" step="0.01" min="0">
                <label for="delivery">Valor do Frete</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="obs" name="observations" type="text" class="validate">
                <label for="obs">Observações</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
    </div>
</form>