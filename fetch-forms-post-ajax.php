<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax and php POST requests</title>
</head>
<body>
	
	</form>
	<h1>POST Form submit</h1>
	<form id="form1" method="POST" action="forms.php">
	<input type="text" name="name3">
	<input type="submit" value="Submit">
	</form>

	<h1>AJAX POST Form submit</h1>
	<form id="form2">
	<input type="text" name="name4" id ="name4">
	<input type="submit" id="submit" value="Submit">
	</form>
</body>
<script>

		document.querySelector('#form2').addEventListener('submit',postme);
	function postme(e)
	{
		e.preventDefault();
		var xhr=new XMLHttpRequest();
		xhr.open("POST", "forms.php","TRUE");
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.onload=function(){
			if(this.status=200){
				console.log(this.responseText);
				
			}
		}
		xhr.send("name2="+document.getElementById('name4').value);
	}
</script>
</html>