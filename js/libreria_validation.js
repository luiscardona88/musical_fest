
class Validation
{

    init(mensaje="")
    {
        this.flag_validation=true
        if($.trim($("textarea").val())=="")this.flag_validation=false;
        $("input").each(function(index,me)
        {
        if($.trim($(this).val())=="") this.flag_validation=false;
        });
        
        
        if(this.flag_validation==false)
        {
            alert(mensaje);
            return false;
        }

    }



}

