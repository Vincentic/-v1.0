<?php

	
	include('conn.php');
    
    $mesid = $_POST['mesid'];
    $username = $_POST['username'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $strsql="UPDATE guestbook SET username='$username',title='$title',content='$content'WHERE mesid='$mesid'";
	$res = mysqli_query($conn,$strsql) or die ("修改数据失败: ".mysql_error());

	if ($res){
		echo "<script>alert(\"修改成功\")</script>";
		echo "<script>window.location = \"display.php\"</script>";
	}
	else {
		echo "<script>alert(\"修改失败\")window.history.go(-1);</script>";
	}

	mysqli_close($conn);
?>