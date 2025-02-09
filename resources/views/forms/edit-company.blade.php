<form action="{{ route('companies.edit') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Editar Empresa</h4>
        <input type="hidden" id="editId" value="">
        <div class="row">
            <div class="input-field col s6">
                <input id="editName" name="name" type="text" class="validate" data-length="20">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <select name="type" id="editType">
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="PF">Pessoa Física</option>
                    <option value="PJ">Pessoa Jurídica</option>
                </select>
                <label>Tipo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input id="editDocument" name="document" type="text" class="validate" data-length="20">
                <label for="document">Documento</label>
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
                <input id="editAdress" name="adress" type="text" class="validate">
                <label for="adress">Endereço</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
    </div>
</form>