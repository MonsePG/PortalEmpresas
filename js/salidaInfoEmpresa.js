$(document).ready(function(event) {
    $.getJSON("getInfoEmpresa.php", function(datos) {
        $(".Empresa").empty();
        $.each(datos, function(i, v) {
            makeSalidasInfo(v, ".Empresa")
        });
    });
});

function makeSalidasInfo(data, target) {
    var Nombre = data.Nombre;
    var Descripcion = data.Descripcion;
    var Telefono = data.Telefono;
    var salidas = $("<div>", {
        class: "mb-3 campo"
    }).data("campo", data);
    $("<input>",{
        type: "hidden",
        value: data.Id_Empresa,
        name: "Id_Empresa"
    }).appendTo(salidas);
    $("<input>",{
        type: "hidden",
        value: data.Id_Usuario,
        name: "Id_Usuario"
    }).appendTo(salidas);
    $("<input>",{
        type: "hidden",
        value: data.Id_Categoria,
        name: "Id_Categoria"
    }).appendTo(salidas);
    $("<input>",{
        type: "hidden",
        value: data.Id_Direccion,
        name: "Id_Direccion"
    }).appendTo(salidas);
    $("<input>",{
        type: "hidden",
        value: data.Correo,
        name: "Correo"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Nombre
    }).html("Nombre de la Empresa: ").appendTo(salidas);
    $("<input>", {
        type: "text",
        class: "form-control",
        id: Nombre,
        value: Nombre,
        name: "Nombre"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Telefono
    }).html("Número telefónico: ").appendTo(salidas);
    $("<input>", {
        type: "tel",
        class: "form-control",
        id: Telefono,
        value: Telefono,
        name: "Telefono",
        pattern: "[0-9]{10}"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: "h_abre"
    }).html("Hora de apertura: ").appendTo(salidas);
    $("<input>", {
        type: "time",
        class: "form-control",
        id: "h_abre",
        value: data.H_Open,
        name: "H_Open"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: "h_cierra"
    }).html("Hora de cierre: ").appendTo(salidas);
    $("<input>", {
        type: "time",
        class: "form-control",
        id: "h_cierra",
        value: data.H_Close,
        name: "H_Close"
    }).appendTo(salidas);
    $("<label>", {
        class: "form-label",
        for: Descripcion
    }).html("Descripción de la empresa ").appendTo(salidas);
    $("<input>", {
        type: "text",
        class: "form-control",
        id: Descripcion,
        value: Descripcion,
        name: "Descripcion"
    }).appendTo(salidas);
    /*$("<button>", {
        type: "submit",
        class: "btn btn-success"
    }).html("Actualizar").appendTo(salidas);
*/
    if (target == undefined) {
        return salidas;
    } else {
        salidas.appendTo(target);
    }
}