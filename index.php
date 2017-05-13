<!DOCTYPE html>
<html>
<head>
	<title>json Practise</title>
</head>
<body>
	<h3>Json on the board</h3>
	<ul id="people"></ul>
	<script>
		var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		       var response = JSON.parse(xhttp.responseText);
		      var people = response.people;
		      var output = '';
		      for(var i =0; i < people.length; i++){
		      	output += '<li>'+people[i].name+'</li>';
		      }
		      document.getElementById('people').innerHTML = output;
		    }
		};
		xhttp.open("GET", "people.json", true);
		xhttp.send();
	</script>
</body>
</html>