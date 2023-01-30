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
                <h1 class="title-primary">Welcome to</h1>
                <h2 class="title-secondary">TA in a Box</h2>
            </div>
            <div class="input__container">
                <div class="input__box">
                    <div class="input__icon-container">
                        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium input__icon css-2bj4eb" data-testid="EmailIcon" viewbox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                    </div><input class="input__field" placeholder="Email/Phone Number" type="email" value="">
                </div>
                <div class="input__box">
                    <div class="input__icon-container">
                        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium input__icon css-2bj4eb" data-testid="KeyIcon" viewbox="0 0 24 24">
                        <path d="M21 10h-8.35C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H13l2 2 2-2 2 2 4-4.04L21 10zM7 15c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"></path></svg>
                    </div><input class="input__field" placeholder="Password" type="password" value=""><button class="icon-button input__icon-container"><svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-13vggd2" data-testid="VisibilityIcon" viewbox="0 0 24 24">
                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"></path></svg></button>
                </div>
                <div class="width__80">
                    <a class="borderless__button float__left" href="forgotPassword.php">Forgot Password?</a><a class="borderless__button float__right" href="/registration">First Time?</a>
                </div>
                <a class="contained__button width__80" href="../../index.php">
                        <svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1tw2hkq" data-testid="LoginIcon" viewbox="0 0 24 24">
                    <path d="M11 7 9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5-5-5zm9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8v14z"></path></svg>Log In
                </a>
            </div><button class="contained__button"><svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1tw2hkq" data-testid="AddLinkIcon" viewbox="0 0 24 24">
            <path d="M8 11h8v2H8zm12.1 1H22c0-2.76-2.24-5-5-5h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1zM3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM19 12h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path></svg>Connect With UVU</button>
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