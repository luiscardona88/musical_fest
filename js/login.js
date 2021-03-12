$(document).ready(function()
{
    let class_method="login_detalles";

    object_send={"id":$("#id_registro").val(),"class_method":class_method};

	$.ajax({
        url: "backend/Controller.php",
        data:{object_send},
        method: "GET",
    
     
        success: function(response) {
           
            try
            {
           response=$.trim(response);
           response=JSON.parse(response);

          
          $("#nombre").val(response[0].nombre);
          $("#direccion").val(response[0].direccion);
          $("#correo").val(response[0].correo);


           console.log(response);

            }
            catch(ex)
            {
              console.log(ex)

            }

           

        },

        fail: function() {

        }
    })
	
	
});


$(document).on("click","#editar",function()
{
    $("#form-login").find("textarea").eq(0).attr("readonly",false);

    
    $("#form-login").find("input").each(function(index,me)
    {
     
      $(this).attr("readonly",false);

    })

});


$(document).on("click","#actualizar",function()
{
    let nombre=$("#nombre").val();
    let direccion=$("#direccion").val();
    let correo=$("#correo").val();
    let password=$("#password").val();
    let class_method="actualizar_registro";
    let id=$("#id_registro").val();


    object_send={"id":id,"nombre":nombre,"direccion":direccion,"correo":correo,"password":password,"class_method":class_method};
    $.ajax({
        url: "backend/Controller.php",
        data: {object_send},
        method: "POST",
    
     
        success: function(response) {
           
           response=$.trim(response);

           if(response>=1)
           {
            $("#modal_body").html("ACTUALIZADO CON EXITO!!!");
            $("#modal_msg").modal();

           }
           else

           {
            //$("#modal_body").html("ERROR");
            //$("#modal_msg").modal();
            
           }

        },

        fail: function() {

        }
    })
    
});