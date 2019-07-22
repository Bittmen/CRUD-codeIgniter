'use strict';

let nombre =  rol == "USUARIO" ? "Animes" : "Users"; 

function printUsersTable(data, whatToPrint)
{
    let printThis = "";

    let tablaHTML = '';
    data.forEach(item => {
        if(whatToPrint == "getAnimes")
        {
            printThis = `
                <td>${item.Genero}</td>
                <td><a href="${item.Link}" target="_blank">Ve al sitio</a></td>
            `;
        }
        else
        {
            printThis = `
                <td>${item.Apellidos}</td>
                <td>${item.Edad}</td>
                <td>${item.Sexo}</td>
            `;
        }
        tablaHTML = `
            <tr>
                <td>${item.ID}</td>
                <td>${item.Nombre}</td>
                ${printThis}
                <td>
                    <button class="btn btn-sm btn-warning" id="btnEdit${nombre}">Edit</button>
                    <button class="btn btn-sm btn-danger" id="btnDelete${nombre}">Delete</button>
                </td>
            </tr>
        `;  
        $('#show'+nombre).append(tablaHTML);
        $('#id'+nombre).DataTable();
    });
}

function getData(rol)
{
    let funcion = rol == "USUARIO" ? "getAnimes" : "getUsers"; 

    $.ajax({
        type:"POST",
        url: base_url+"Crud/"+funcion,
        dataType: "JSON"
    }).done(resp => {
        console.log(resp);
        if(resp.length > 0)
        {
            printUsersTable(resp, funcion);
        }
    }).fail((jqxhr, textStatus, error) => {
        alert(textStatus + "," + error);
    });
}

$(document).ready(() => {
   getData(rol);
});

$('#btnAdd'+nombre).on('click',() => {
    $('#modalAdd'+nombre).modal();
});