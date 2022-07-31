
<html>

<head>

  <meta charset="UTF-8">

  <title>EMS - Login</title>

    <link rel="stylesheet" href="css1/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>EMS-Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="check_user.php" method="post">


          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="uname" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not Registered or fogot password? Please contact your System Administrator.</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>