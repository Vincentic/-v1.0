<?php
   
	include('conn.php');
    header("Content-type: text/html; charset=utf-8"); 
    
    $mesid = $_GET['mesid'];
    
    //var_dump($mesid);
	$sql = "DELETE FROM guestbook WHERE  mesid='$mesid'";
	$res = mysqli_query($conn,$sql);
	
	if ($res){
		echo "<script>alert(\"删除成功\")</script>";
		echo "<script>window.location = \"display.php\"</script>";
	}
	else {
		echo "<script>alert(\"删除失败\")window.history.go(-1)</script>";
	}
	mysqli_close($conn);
?>