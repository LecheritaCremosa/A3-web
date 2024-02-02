$(document).ready(function(){
    $('#table_data').DataTable()
});

function remove()
{
    if(confirm("¿Esta seguro de eliminar el registro?"))
        return true;
    else
        return false;
}