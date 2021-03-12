
$(document).ready(function()

{
    object_send={class_method:"lista_admin"};

    table = $('#tabla_gestion').DataTable( {
                "sDom": "<'row'<'col-sm-6'<'dt_actions'>l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>"
              , "stateSave"   : true
              , "pageLength"  : 10
              , "order": [[ 0, "desc" ]]
    
    , "ajax": "backend/Controller.php?jquery_datable=1" 
              , "language": {
                  "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
              }
              
          } );


})
