<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Registration Form - 30DaysOfCSS3</title>
        <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Nova+Mono|Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
        <style>
            body {
                /* text-align: center; */
                background-image: linear-gradient(135deg, #007991 30%, #78ffd6 90%);
            }

            .register-wrapper {
                position: relative;
                z-index: 3;
                padding: 100px;
                font-size: 18px;
                color: #999999;
            }

            .register-wrapper * {
                box-sizing: border-box;
            }

            .register-wrapper form input {
                display: inline-block;
                width: 100%;
                padding: 0 20px;
                line-height: 50px;
                height: 80px;
                background-color: white;
                border: 2px solid #e6e6e6;
                border-bottom-width: 3px;
                border-radius: 5px;
                outline: 0;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }

            .register-wrapper form input:not(:last-child) {
                margin-bottom: 20px;
            }

            .register-wrapper form input[type="email"]:focus,
            .register-wrapper form input[type="email"]:active,
            .register-wrapper form input[type="password"]:focus,
            .register-wrapper form input[type="password"]:active {
                border-color: #cccccc;
            }

            .register-wrapper form input[type="submit"] {
                position: relative;
                z-index: 1;
                display: inline-block;
                padding: 0 20px;
                font-size: 1rem;
                background-color: #f2395a;
                background-size: 100%;

                background-image: linear-gradient(45deg,
                        rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%,
                        rgba(0, 0, 0, 0) 50%,
                        rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%,
                        rgba(0, 0, 0, 0));

                background-size: 20px 20px, 100% 100%;
                border: 1px solid #f02146;
                border-bottom-width: 3px;
                color: white;
                outline: none;
                cursor: pointer;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }

            .register-wrapper form input[type="submit"]:hover {
                background-size: 40px 40px;
            }

            .register-title {
                font-size: 1.5em;
                padding-bottom: 30px;
                margin: 0 0 20px;
                border-bottom: 1px dashed #e6e6e6;
            }

            .register-block {
                position: relative;
                display: block;
                width: 100%;
                max-width: 1000px;
                /* height: 150px; */
                margin: auto;
                padding: 30px;
                background-color: white;
                box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
                border-radius: 5px;

            }

            .register-block:before,
            .register-block:after {
                position: absolute;
                z-index: -1;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: block;
                width: 100%;
                height: 100px;
                content: "";
                background-color: white;
                border: 1px solid #e6e6e6;
                border-radius: 5px;
                -webkit-transform: scale(0.9) translate(0, 0);
                transform: scale(0.9) translate(0, 0);
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }

            .register-block:hover:before {
                z-index: -1;
                -webkit-transform: scale(0.96) translate(0, 16px);
                transform: scale(0.96) translate(0, 16px);
            }

            .register-block:hover:after {
                z-index: -2;
                -webkit-transform: scale(0.92) translate(0, 32px);
                transform: scale(0.92) translate(0, 32px);
            }

            h1,
            a {
                font-family: 'Parisienne', cursive;
                color: #fff;
                font-size: 50px;
                text-decoration: none;
                text-shadow: 2px 2px 3px lightblue;
                padding-top: 35px;
            }
        </style>

    </head>

    <body>

        <div class="content">
            <section>
                <div class="register-wrapper">
                    <div class="register-block">
                        <h3 class="register-title">Create an account</h3>
                        <form action="{{route('User.store')}}" method="post">
                            @csrf
                            <label for="#">Name</label>
                            <input type="text" name="name" placeholder="Enter your Name" />
                            <label for="#">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" />
                            <label for="#">phone</label>
                            <input type="number" name="phone" placeholder="Enter your phone" />
                            <label for="#">address</label>
                            <input type="text" name="address" placeholder="Enter your address" />
                            <label for="#">Password</label>
                            <input type="password" name="password" placeholder="Enter your password" />
                           
                            <input type="submit" class="mt-5" value="Create my account" />
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </body>

    </html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>