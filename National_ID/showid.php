<!DOCTYPE html>
<html>
<head>
	<title>Applicant ID</title>
	<style>
		body {
			background-color: #f2f2f2;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}

		h1 {
			font-size: 8rem;
			font-family: 'Arial', sans-serif;
			color: #1a1a1a;
			animation-name: example;
			animation-duration: 3s;
			animation-iteration-count: infinite;
		}

		@keyframes example {
			0% {color: #1a1a1a;}
			50% {color: #ff4d4d;}
			100% {color: #1a1a1a;}
		}
	</style>
</head>
<body>
    <center>
	<h1>Your applicant ID is <span><?php session_start(); echo $_SESSION['applicant_id']; ?></span></h1>
    </center>
</body>
</html>
