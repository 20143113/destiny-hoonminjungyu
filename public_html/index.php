<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>로그인 폼</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./jquery.form.min.js"></script>
    <script type="text/javascript" src="mySignInForm.js"></script>
    <style rel="stylesheet">
    body {
       font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
       color: #333333;
       background: #596778;
    }

    .signIn {
       position: relative;
       margin: 50px auto;
       width: 280px;
       padding: 33px 25px 29px;
       background: #FFFFFF;
       border-bottom: 1px solid #C4C4C4;
       border-radius: 5px;
       -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
       box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    }

    .signIn:before,
    .signIn:after {
       content: '';
       position: absolute;
       bottom: 1px;
       left: 0;
       right: 0;
       height: 10px;
       background: inherit;
       border-bottom: 1px solid #D2D2D2;
       border-radius: 4px;
    }

    .signIn:after {
       bottom: 3px;
       border-color: #DCDCDC;
    }

    .signInTitle {
       margin: -25px -25px 25px;
       padding: 15px 25px;
       line-height: 35px;
       font-size: 26px;
       font-weight: 300;
       color: #777;
       text-align: center;
       text-shadow: 0 1px rgba(255, 255, 255, 0.75);
       background: #F7F7F7;
    }

    .signInTitle:before {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       height: 8px;
       background: #C4E17F;
       border-radius: 5px 5px 0 0;
       background-image: -webkit-linear-gradient(left, #C4E17F, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #db9CBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: -moz-linear-gradient(left, #c4e17f, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9CBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: -o-linear-gradient(left, #C4E17F, #C4E17F 12.5%, #F7FDCC 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9DBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: linear-gradient(to right, #C4E17F, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9CBE 62.5%, #c49cde 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62c2e4 87.5%, #62C2E4);
    }

    input {
       font-family: inherit;
       color: inherit;
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
    }

    .signInId, .signInPw {
       width: 100%;
       height: 50px;
       margin-bottom: 25px;
       padding: 0 15px 2px;
       font-size: 17px;
       background: white;
       border: 2px solid #EBEBEB;
       border-radius: 4px;
       -webkit-box-shadow: inset 0 -2px #EBEBEB;
       box-shadow: inset 0 -2px #EBEBEB;
    }

    .signInId:focus, .signInPw:focus {
       border-color: #62C2E4;
       outline: none;
       -webkit-box-shadow: inset 0 -2px #62C2E4;
       box-shadow: inset 0 -2px #62C2E4;
    }

    .lt-ie9 .signInId, .signInPw {
       line-height: 48px;
    }

    .signInButton {
       position: relative;
       vertical-align: top;
       width: 100%;
       height: 54px;
       padding: 0;
       font-size: 22px;
       color: white;
       text-align: center;
       text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
       background: #F0776C;
       border: 0;
       border-bottom: 2px solid #D76B60;
       border-radius: 5px;
       cursor: pointer;
       -webkit-box-shadow: inset 0 -2px #D76B60;
       box-shadow: inset 0 -2px #D76B60;
    }

    .signInButton:active {
       top: 1px;
       outline: none;
       -webkit-box-shadow: none;
       box-shadow: none;
    }

    :-moz-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    ::-moz-placeholder {
       color: #AAAAAA;
       opacity: 1;
       font-weight: 300;
    }

    ::-webkit-input-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    :-ms-input-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    ::-moz-focus-inner {
       border: 0;
       padding: 0;
    }
    </style>
  </head>
  <body>
    <form class="signIn" id="signIn" method="post">
       <h1 class="signInTitle">로그인</h1>
       <input type="text" class="signInId" name="student_id" placeholder="ID" autofocus required>
       <input type="password" class="signInPw" name="password" placeholder="password" required>
       <input type="submit" value="Login!" class="signInButton">
       <h3 class="title"><a href="./signUpForm.php">회원가입</a>
  </body>
  </html>
