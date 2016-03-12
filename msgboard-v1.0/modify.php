<?php
   
	include('conn.php');
    header("Content-type: text/html; charset=utf-8");

    $mesid = $_GET['mesid'];
    
    $sql="SELECT * FROM guestbook WHERE mesid = $mesid";
	$result = mysqli_query($conn,$sql);
	$re_arr = mysqli_fetch_array($result);
   	
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Vincentic">
    <meta name="generator" content="Sublime text2">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css" />
    <style>html{overflow-x:hidden; }</style>
    <script language="javascript">
		function checkmessage()
		{
			if (msgform.username.value=="")
			{
				alert("昵称不能为空！");
				msgform.username.focus();
				return false;
			}
			if (msgform.title.value=="")
			{
				alert("留言标题不能为空！");
				msgform.title.focus();
				return false;
			}
			if (msgform.content.value=="")
			{
				alert("留言内容不能为空！");
				msgform.content.focus();
				return false;
			}
		    return true;
		}
	</script>
	<title>留言板</title>
</head>
<body background="img/modify.jpg">
	<form name="msgform" class="form-horizontal" role="form" action="modify_post.php" method="post" enctype="multipart/form-data" onsubmit="return checkmessage()">
		<h1 align="center"><font color="blue"><strong>留言修改</strong></font></h1>
		<h3 align="center"><small><font color="#9B9B9B"><em>Modify the message</em></font></small></h3>
		<br/><br/><br/><br/>
		<div class="form-group" style="display:none;">
			<label class="col-sm-3 col-sm-offset-1 control-label"> 昵 称 : </label>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="mesid" 
				   value="<?php echo $re_arr['mesid']; ?>" placeholder="您的昵称....."/>
			</div>	
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-sm-offset-1 control-label"> 昵 称 : </label>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="username" 
				   value="<?php echo $re_arr['username']; ?>" placeholder="您的昵称....."/>
			</div>	
		</div>	
		<div class="form-group">
			<label class="col-sm-3 col-sm-offset-1 control-label"> 标 题 : </label>
			<div class="col-sm-3">
			   <input type="text" class="form-control" name="title" 
			   value="<?php echo $re_arr['title']; ?>" placeholder="您的留言标题....."/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-sm-offset-1 control-label"> 留 言 : </label>
			<div class="col-sm-4">
				<textarea name="content" class="form-control" rows="6" placeholder="您的留言内容....."><?php echo $re_arr['content']; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-6">
				<button  class="btn btn-primary btn-default col-sm-3" type="submit"  name="Submit"><strong>修&nbsp;&nbsp;改</strong></button>
				<button  class="btn btn-success btn-default col-sm-3" type="reset" name="Rewrite"><strong>重&nbsp;&nbsp;写</strong></button>
			</div>
		</div>	
	</form>
</body>
</html>
