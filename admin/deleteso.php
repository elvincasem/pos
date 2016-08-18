<?php
    include_once("include/functions.php");          
    $oid = $_POST['oid'];
         
    $orderlist = selectListSQL("DELETE FROM tmpsorder WHERE tmpsoid = '$oid'");
   	foreach ($orderlist as $orders => $so) {

   		if(count($orderlist)>1){
  			echo"dsfsdfsd";
   		}else{
			echo"asdasd";
   		}
    			

			
		}
		header("Location: index.php");
?>
