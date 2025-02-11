<form action="{{ route('companies.update') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Editar Empresa</h4>
        <input type="hidden" name="id" id="editId" value="">
        <div class="row">
            <div class="input-field col s6">
                <input id="editName" name="name" type="text" class="validate" data-length="20" required>
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <select name="type" id="editType" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="PF">Pessoa Física</option>
                    <option value="PJ">Pessoa Jurídica</option>
                </select>
                <label>Tipo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input id="editDocument" name="document" type="text" class="validate" data-length="20" required>
                <label for="document">Número do Documento (CPF/CNPJ)</label>
            </div>
            <div class="input-field col s4">
                <select name="status" id="editStatus" required>
                    <option value="enabled">Ativo</option>
                    <option value="disabled">Desativado</option>
                </select>
                <label>Status</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="editAdress" name="adress" type="text" class="validate" required>
                <label for="adress">Endereço</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Atualizar</button>
    </div>
</form>