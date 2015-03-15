<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Freedom Wall</title>
	<link href="/FreedomWall/assets/style.css" rel="stylesheet">
	<script src="/FreedomWall/assets/jquery.js"></script>
</head>
<body>

	<div id="container">
		<h1>Virtual Freedom Wall</h1>

		<div class="search"> 
			<select> 
				<option>Search By</option>
				<option>Username</option>
				<option>Content</option>
			</select>
			<input placeholder="Search">
			<button> Search </button>
		</div>

		<div class="post">
			<textarea class="postBox" placeholder="Post on the Freedom Wall!"></textarea>
			<div class="postFooter">
				<input type="text" class="username" placeholder="Your Username">
				<button class="postButton"> Post </button>
			</div>
		</div>

	</div>

</body>

<script src="/FreedomWall/assets/functionalities.js"></script>

</html>