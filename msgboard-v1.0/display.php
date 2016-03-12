<h1 align="center"><font color="blue"><strong>留 言 板</strong></font></h1>
<h3 align="center"><small><font color="#9B9B9B"><em>Welcome to my messageboard</em></font></small></h3>
<?php
   
	include('conn.php');
    header("Content-type: text/html; charset=utf-8"); 
    
    $sql="SELECT * FROM guestbook ORDER BY id DESC";
	$result = mysqli_query($conn,$sql);
	while($info = mysqli_fetch_array($result)){
?>

<!DOCTYPE>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<title>留言板</title>
	<style>body{margin-left: 200px;}h1{margin-left: -200px;margin-bottom: 20px;} h3{margin-left: -200px;margin-bottom: 50px;}.jumbotron{margin-right: 200px;}.jumbotron .on{margin-top: -23px;}.jumbotron .on img{float:left;margin-top: 8px;}</style>
</head>
<body background="img/viewmsg.jpg">	  
    <div class="jumbotron">
        <p class="on">
        	<img src="img/user.jpg" width="50" height="50"> 
        	<font color="#000">
			<?php echo $info['username'];?></font>
			<font color="#9B9B9B"><em><small>第<?php echo $info['id'];?>楼</small></em></font>
		</p>
		<p>
			<font color="#000">
			<small><?php echo $info['title'];?></small></font>
		</p>
		<p>
			<font color="#0080FF">
				<?php echo $info['content'];?>
			</font>
		</p>
		<div class="col-md-3">
			<p>
				<font color="#9B9B9B"><em><small><?php echo $info['addtime'];?></small></em></font> 
			</p>
		</div>
		<div class="col-md-2">
			<p>
				<a href="modify.php?mesid=<?php echo $info['mesid'];?>" title="修改该留言" > 
				<img src="img/edi.gif"><small>修改</small></a>
			</p>
		</div>
		<div class="col-md-2">
			<p>
				<a href="delete.php?mesid=<?php echo $info['mesid'];?>" title="删除该留言" >
				<img src="img/del.gif"><small>删除</small></a>
			</p>
		</div>
    </div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
} 
?>