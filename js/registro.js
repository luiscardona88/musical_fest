

$(document).on("click","#submit",function(event)
{

    event.preventDefault();
    let nombre=$("#nombre").val();
    let edad=$("#edad").val();
    let correo=$("#email").val();
    let dir=$("#direccion").val();
    let password=$("#password").val();
    let class_method="nuevoRegistro";
    let flag_validation=true;

if($.trim($("textarea").val())=="")flag_validation=false;
$("input").each(function(index,me)
{
if($.trim($(this).val())=="") flag_validation=false;
});

if(flag_validation==false)
{
    alert("***TODOS LOS CAMPOS SON OBLIGATORIOS**");
    return false;
}

    object_send={"nombre":nombre,"edad":edad,"correo":correo,"direccion":dir,"password":password,"class_method":class_method};
    $.ajax({
        url: "backend/Controller.php",
        data: {object_send},
        method: "POST",
    
     
        success: function(response) {
           
           response=$.trim(response);
           if(response>=1)
           {
            $("#modal_body").html("ALTA EXITOSA!!!");
            $("#modal_msg").modal();

           }

        },

        fail: function() {

        }
    })
    
  
});


$(document).on("click","#login",function(event)
{

    event.preventDefault();
    
    let correo=$("#email").val();
    let password=$("#password").val();
    let class_method="login";

    object_send={"correo":correo,"password":password,"class_method":class_method};
    $.ajax({
        url: "backend/Controller.php",
        data: {object_send},
        method: "POST",
    
     
        success: function(response) {
           
           response=$.trim(response);

           if(response>=1)
           {
            window.location.href="index.php";

           }
           else

           {
            $("#modal_body").html("NO EXISTE USUARIO");
            $("#modal_msg").modal();
            
           }

        },

        fail: function() {

        }
    })
    
  
});






/*
$("#form-signin").on("submit",function(event)
{
    event.preventDefault();
   alert("Pruebas!!!");

})
*/