<form action="{{ route('products.store') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Adicionar Produto</h4>
        <div class="row">
            <div class="input-field col s6">
                <input id="name" name="name" type="text" class="validate" data-length="20" required>
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <input id="price" name="price" type="number" class="validate" min="0" required>
                <label for="price">Valor unitário</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="description" name="description" type="text" class="validate">
                <label for="description">Descrição</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
    </div>
</form>