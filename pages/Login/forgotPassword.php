<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div id="root">
		<section class="login__container">
			<div class="login__title">
				<h1 class="title-primary">Forgot Your Password?</h1>
				<h2 class="title-tertiary">Please type in your Email/Phone number below</h2>
			</div>
			<div class="input__container">
				<div class="input__box">
					<div class="input__icon-container">
						<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium input__icon css-2bj4eb" data-testid="EmailIcon" viewbox="0 0 24 24">
						<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"></path></svg>
					</div><input class="input__field" placeholder="Email/Phone Number" type="email" value="">
				</div>
				<div class="width__80">
					<button class="contained__button float__left">Send Code<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-lmvmt0" data-testid="SendIcon" viewbox="0 0 24 24">
					<path d="M2.01 21 23 12 2.01 3 2 10l15 2-15 2z"></path></svg></button><a class="contained__button float__right" href="login.php"><svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1tw2hkq" data-testid="KeyboardBackspaceIcon" viewbox="0 0 24 24">
					<path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"></path></svg>Go Back</a>
				</div>
			</div>
		</section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="js/library.js"></script>
</body>
</html>