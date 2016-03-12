<?php
    
    include('conn.php');
    header("Content-type: text/html; charset=utf-8"); 
    ini_set('date.timezone','Asia/Shanghai');

	$username = $_POST['username'];
	$title = $_POST['title'];
	$content = $_POST['content'];
    
	$now = date("Y-m-d H:i:s");

    $sql="SELECT DISTINCT(mesid) FROM guestbook";
	$result = mysqli_query($conn,$sql);
	$msg_num = mysqli_num_rows($result) + 1;

    $sql = "INSERT INTO guestbook (username,title,
	content, addtime,mesid) VALUES('$username', '$title', '$content', '$now','$msg_num')";
    $res = mysqli_query($conn,$sql) or die ("插入数据失败: ".mysqli_error($conn));
    
    if($res){
        header("Location:display.php");
    	echo "<script>alert(\"提交成功！\");</script>";
        echo "<script>window.location = \"display.php\"</script>";
    } 
    else{
    	echo "<script>alert(\"提交失败！\");window.history.go(-1)</script>";
    }
	mysqli_close($conn);
  
?>
