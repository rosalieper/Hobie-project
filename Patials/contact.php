<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
		<?php include "head.php"; ?>
	<script type="text/javascript">
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<style type="text/css">

.form-style-4{
	max-width: 450px;
	margin:10px auto;
	font-size: 16px;
	background: #fff;
	padding: 30px 30px 15px 30px;
	border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #495C70;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	float: left;
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=date],
.form-style-4 input[type=datetime],
.form-style-4 input[type=number],
.form-style-4 input[type=search],
.form-style-4 input[type=time],
.form-style-4 input[type=url],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	overflow: hidden;
	resize:none;
	height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=date]:focus,
.form-style-4 input[type=datetime]:focus,
.form-style-4 input[type=number]:focus,
.form-style-4 input[type=search]:focus,
.form-style-4 input[type=time]:focus,
.form-style-4 input[type=url]:focus,
.form-style-4 input[type=email]:focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #6B9FFF;
}
</style>
</head>

<body>

<form class="form-style-4" action="" method="post">
<label for="field1">
<span>Enter Your Name</span><input type="text" name="field1" required="true" />
</label>
<label for="field2">
<span>Email Address</span><input type="email" name="field2" required="true" />
</label>
<label for="field3">
<span>Short Subject</span><input type="text" name="field3" required="true" />
</label>
<label for="field4">
<span>Message to Us</span><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
</label>
<label>
<span>&nbsp;</span><input type="submit" value="Send Letter" class = "btn btn-primary"  />
</label>
</form>
</html>