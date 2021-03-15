<?php
class Validation
{
	
	public static function init_sanitize(...$elements)
	{
	
   for($i=0;$i<count($elements);$i++):
	   
				
	if($i==2):
		
      $elements[$i]=filter_var($elements[$i], FILTER_SANITIZE_EMAIL);
	  
	  elseif($i==1):
	    $elements[$i]=filter_var($elements[$i], FILTER_SANITIZE_NUMBER_INT);
	else:
		  $elements[$i]=filter_var($elements[$i], FILTER_SANITIZE_STRING);
	endif;

		
		endfor;
		
		return true;
	}
	
	public static function validEmpty($elements=array())
	{		
		for($e=0;$e<count($elements);$e++):
		     if(empty($elements[$e])==true)return false;
		endfor;
		return true;
		
	}
	
}
?>