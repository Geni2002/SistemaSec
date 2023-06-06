$('#tableusuarios').DataTable();
var tableusuarios;

document.addEventListener('DOMContentLoaded', function() {
     tableusuarios - $('#tableusuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": "./models/usuarios/table_usuarios.php",
            "dataSrc":"",
        },
        "columns": [
            {"data":"acciones"},
            {"data":"nombre"},
            {"data":"apellidos"},
            {"data":"fecha de nacimiento"},
            {"data":"grado"},
            {"data":"grupo"},
        ],
        "responsive": true,
        "bDestroy":true,
        "iDisplayLenght": 10,
        "order": [[0, "asc"]]
    
     })
})

function openModal() {
    $('#modalUsuario').modal('show');
}