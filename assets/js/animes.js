'use strict';

function printUsersTable(data)
{
    let tablaHTML = '';
    users.forEach(item => {
        tablaHTML = `
            <tr>
                <td>${item.ID}</td>
                <td>${item.Nombre}</td>
                <td>${item.Genero}</td>
                <td>${item.Link}</td>
                <td>
                    <button class="btn btn-sm btn-warning" id="btnEditUser">Edit</button>
                    <button class="btn btn-sm btn-danger" id="btnDeleteUser">Delete</button>
                </td>
            </tr>
        `;  
        $('#showUsers').append(tablaHTML); 
    });
}

function getData()
{
    $.ajax({
        type:"POST",
        url: base_url+"Crud/getAnimes",
        dataType: "JSON"
    }).done(resp => {
        console.log(resp);
        if(resp.length > 0)
        {
            printUsersTable(resp);
        }
    }).fail((jqxhr, textStatus, error) => {
        alert(textStatus + "," + error);
    });
}

$(document).ready(() => {
   getData();
});

$('#btnAddUser').on('click',() => {
    $('#modalAddUser').modal();
});