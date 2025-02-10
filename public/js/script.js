initializeElements();

function initializeElements()
{
    //Modal
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });

    //Select
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });

    //Side Nav
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });

    //Dat Picker
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems);
    });

    M.updateTextFields();
    M.FormSelect.init(document.querySelectorAll('select'));
}

function editProduct(button)
{
    const product = JSON.parse(button.getAttribute('data-item'));

    document.getElementById("editId").value = product.id;
    document.getElementById("editName").value = product.name;
    document.getElementById("editPrice").value = product.price;
    document.getElementById("editDescription").value = product.description;
    document.getElementById("editStatus").value = product.status;

    M.updateTextFields();
    M.FormSelect.init(document.querySelectorAll('select'));
}

function editCompany(button)
{
    const company = JSON.parse(button.getAttribute('data-item'));

    document.getElementById("editId").value = company.id;
    document.getElementById("editName").value = company.name;
    document.getElementById("editType").value = company.type;
    document.getElementById("editDocument").value = company.document;
    document.getElementById("editAdress").value = company.adress;
    document.getElementById("editStatus").value = company.status;

    M.updateTextFields();
    M.FormSelect.init(document.querySelectorAll('select'));
}

function formatDocument(input, isEdit = true) {
    tempId = (isEdit) ? 'editType' : 'type';

    type = document.getElementById(tempId).value;

    let value = input.value.replace(/\D/g, '');

    if (type == 'PF') {
        input.maxLength = 14; 
        if (value.length <= 11) {
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }
    }else{
        input.maxLength = 18;
        if (value.length <= 14) {
            value = value.replace(/(\d{2})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1/$2');
            value = value.replace(/(\d{4})(\d{1,2})$/, '$1-$2');
        }
    }

    input.value = value;
}

function clearDocumentField(isEdit = true) {
    tempId = (isEdit) ? 'editDocument' : 'document';
    
    const input = document.getElementById(tempId);
    input.value = '';
}

document.getElementById('type').addEventListener('change', function() {
    clearDocumentField(false);
});

document.getElementById('editType').addEventListener('change', function() {
    clearDocumentField(true);
});

document.getElementById('document').addEventListener('input', function() {
    formatDocument(this, false);
});

document.getElementById('editDocument').addEventListener('input', function() {
    formatDocument(this, true);
});