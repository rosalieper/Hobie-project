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
<!-- link to external css file -->
<link rel = "stylesheet" type="text/css" href = "CSS/contact.css">
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
