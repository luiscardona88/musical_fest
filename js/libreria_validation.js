
class Validation
{

    init(mensaje="")
    {
        let flag_validation=true;

        if($("textarea").html() !=undefined  && $.trim($("textarea").val())=="")flag_validation=false;

        $("input").each(function(index,me)
        {
         
        if($.trim($(this).val())=="") 
        {
       
        flag_validation=false;
       
        }
        });
        
       if(flag_validation==false) alert(mensaje);
        return flag_validation;
        
    }



}

