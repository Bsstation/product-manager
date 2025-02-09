<form action="{{ route('companies.store') }}" method="post" class="col s12">
    @csrf
    <div></div>
    <div class="modal-content">
        <h4>Adicionar Empresa</h4>
        <div class="row">
            <div class="input-field col s6">
                <input id="name" name="name" type="text" class="validate" data-length="20">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <select name="type">
                    <option value="PF">Pessoa Física</option>
                    <option value="PJ">Pessoa Jurídica</option>
                </select>
                <label>Tipo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="document" name="document" type="text" class="validate" data-length="20">
                <label for="document">Documento</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="adress" name="adress" type="text" class="validate">
                <label for="adress">Endereço</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
    </div>
</form>