<form action="{{ route('products.edit') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Editar Produto</h4>
        <input type="hidden" id="editId" value="">
        <div class="row">
            <div class="input-field col s4">
                <input id="editName" name="name" type="text" class="validate" value="">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s4">
                <input id="editPrice" name="price" type="number" class="validate" value="">
                <label for="price">Valor unitário</label>
            </div>
            <div class="input-field col s4">
                <select name="status" id="editStatus">
                    <option value="enabled">Ativo</option>
                    <option value="disabled">Desativado</option>
                </select>
                <label>Status</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="editDescription" name="description" type="text" class="validate" value="">
                <label for="description">Descrição</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
    </div>
</form>