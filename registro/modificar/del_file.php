<?php
	
	$file = $_POST['idusuario'];
	
	if(is_file($file)){
		chmod($file,0777);
		if(!unlink($file)){
		echo false;
		}
	}else{
        echo "mecagoendios";
    }
	
?>