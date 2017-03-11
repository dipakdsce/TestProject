<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<div class="container">
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="" autocomplete="on">
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname" data-icon="u" > Your email or username </label>
                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <p class="login button">
                            <input type="submit" value="Login" />
                        </p>
                        <p class="change_link">
                            Not a member yet ? aa
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  action="urlshorter/login" autocomplete="on" onsubmit="submitForm()" method="post">
                        <h1> Sign up </h1>
                        {!! csrf_field() !!}

                        <p>
                            <label for="firstnamesignup" class="fname" data-icon="u">First Name</label>
                            <input id="firstnamesignup" name="firstNameSignUp" required="required" type="text" placeholder="John" />
                        </p>
                        <p>
                            <label for="middlenamesignup" class="mname" data-icon="u">Middle Name</label>
                            <input id="middlenamesignup" name="middleNameSignUp"  type="text" placeholder="L" />
                        </p>
                        <p>
                            <label for="lastnamesignup" class="lname" data-icon="u">Last Name</label>
                            <input id="lastnamesignup" name="lastNameSignUp" required="required" type="text" placeholder="Smith" />
                        </p>
                        {{--<p>--}}
                            {{--<label for="addresssignup" class="address" data-icon="u">Mailing Address</label>--}}
                            {{--<input id="addresssignup" name="addressSignUp" required="required" type="text" placeholder="27th Street UK" />--}}
                        {{--</p>--}}
                        {{--<p>
                            <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                            <input id="usernamesignup" name="userNameSignUp" required="required" type="text" placeholder="mysuperusername690" />
                        </p>--}}
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                            <input id="emailsignup" name="emailSignUp" required="required" type="email" placeholder="mysupermail@mail.com"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                            <input id="passwordsignup" name="passwordSignUp" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                            <input id="passwordsignup_confirm" name="passwordSignUpConfirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            {{--<input type="submit" onsubmit="return submit();" value="Sign up"/>--}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </p>
                        <p class="change_link">
                            Already a member ?
                            <a href="#tologin" class="to_register"> Go and log in </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    function submitForm() {

        var pwd = document.getElementById("passwordsignup");
        var cnfpwd = document.getElementById("passwordsignup_confirm");
        windows.console.log("pwd:" + pwd);
        windows.console.log("cnfpwd:" + cnfpwd);
        if(pwd != cnfpwd)
        {
            alert('password does not match');
            return;
        }

    }
</script>
</body>
</html>