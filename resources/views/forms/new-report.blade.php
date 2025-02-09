<form action="{{ route('reports.create') }}" method="post" target="_blank" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content" style="min-height: 370px;">
        <h4>Gerar Relatório</h4>
        <div class="row">
            <div class="input-field col s4">
                <select name="flux" required>
                    <option value="T" selected>Todos</option>
                    <option value="In">Entrada</option>
                    <option value="Out">Saída</option>
                </select>
                <label>Fluxo</label>
            </div>
            <div class="input-field col s4">
                <select name="company_id" required>
                    <option value="T" selected>Todas</option>
                    @foreach ($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
                <label>Empresa</label>
            </div>
            <div class="input-field col s4">
                <select name="product_id" required>
                    <option value="T" selected>Todos</option>
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>Produto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s3">
                <input name="initial_date" id="initial_date" type="text" class="datepicker" required>
                <label for="date">Data inicial</label>
            </div>
            <div class="input-field col s3">
                <input name="final_date" id="final_date" type="text" class="datepicker" required>
                <label for="date">Data final</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Gerar Relatório</button>
    </div>
</form>