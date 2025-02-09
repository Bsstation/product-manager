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