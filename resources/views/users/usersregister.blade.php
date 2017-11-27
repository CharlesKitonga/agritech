<! doctype html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <title>User Login</title>
        <link rel="stylesheet"  href="styles.css">
        <style>
            body{
                margin: 0;
                padding: 0;
                background-image: url('img/background/nature.jpg');
                background-size: cover;
                font-family: sans-serif;
            }
            .loginBox{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 400px;
                height: 450px;
                padding: 80px 40px;
                box-sizing:border-box;
                background: rgba(0,0,0,.5); 

            }
            .user{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                overflow: hidden;
                position: absolute;
                top: calc(-100px/2);
                left: calc(50%-50px);

            }
            h2{
                margin: 0;
                padding: 0 0 20px;
                color: #efed40;
                text-align: center;
            }
            .loginBox p{
                margin: 0;
                padding: 0;
                font-weight: bold;
                content: #fff;
            }
            .loginBox input{
                width: 100%;
                margin-bottom: 20px;
            }
            .loginBox input[type='text'],
            .loginBox input[type='password']{
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 20px;
                color: #fff;
                font-size: 18px;
            }
            ::placeholder{
                color: rgba(255,255,255,.5);
            }
            .loginBox input[type='submit']{
                border: none;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 18px;
                background: #ff267e;
                border-radius: 20px;
            }
            .loginBox input[type='text']:hover{
                background: #efed40;
                color: #262626;
            }
            .loginBox a{
                color: #fff;
                font-size: 16px;
                font-weight: bold;
                text-decoration: none;
            }


        </style>
    </head>
        <body>
            <div class="loginBox">
                <img src="user.png" class="user">
                <h2>Log in here</h2>
                <form class="form-horizontal" method="POST" action="{{ route('usersregister') }}">
                        {{ csrf_field() }}
                        <p>Name</p>
                        <input type="text" name ="" placeholder ="Enter Email..">

                        <p>E-mail Address</p>
                        <input type="text" name ="" placeholder ="Enter Email..">

                        <p>Password</p>
                        <input type="text" name ="" placeholder ="Enter Email..">


                        <p>Confirm password</p>
                        <input type="password" name ="" placeholder ="...">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" href="{{ route('post') }}" class="btn btn-primary">
                                    Register
                                </button>

                               
                            </div>
                        </div>
                    </form>
            </div>
</body>
</html>