<?php

function divide($dividend,$divideby)
{
	if($divideby==0)
	{
		throw new Exception("unable to divide",1);
	}
	else{
		return $dividend/$divideby;
	}

}
try{
	  echo divide(6,0);

    }
    catch(Exception $e){

    	echo "unable to divide by 0";

       }

?>