<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax and php GET requests</title>
</head>
<body>
	<h1>GET Form submit</h1>
	<form id="form1" action="forms.php">
	<input type="text" name="name1">
	<input type="submit" value="Submit">
	</form>

	<h1>AJAX GET Form submit</h1>
	<form id="form2">
	<input type="text" name="name2" id ="name2">
	<input type="submit" id="submit" value="Submit">
	</form>
</body>
<script>
	document.querySelector('#form2').addEventListener('submit',getme);
	function getme(e)
	{
		e.preventDefault();
		var xhr=new XMLHttpRequest();
		xhr.open("GET", "forms.php?name2="+document.getElementById('name2').value,"TRUE")
		xhr.onload=function(){
			if(this.status=200){
				console.log(this.responseText);
			}
		}
		xhr.send()
	}
</script>
</html>