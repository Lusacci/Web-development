<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="description" content="PFR Hero Login Page">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
            <h1>PFR Status Hero</h1>
            <p>Login and get inside me!</p>
            </div>
        </div>
        <div class="container">
        <div id="login-form">
            <div class="box-inner">
                <form name="form" action="config.php" method="post">
                    <input type="hidden" name="_token" value="token">
                    <input type="hidden" name="_task" value="login">
                    <input type="hidden" name="_action" value="login">
                    <input type="hidden" name="_timezone" id="rcmlogintz" value="_default_">
                    <input type="hidden" name="_url" id="rcmloginurl" value=""><table><tbody><tr>
                    <td class="title"><label for="rcmloginuser">Username</label>
                    </td>
                    <td class="input"><input name="_user" id="rcmloginuser" size="40" autocapitalize="off" autocomplete="off" type="text"></td>
                    </tr>
                    <tr><td class="title"><label for="rcmloginpwd">Password</label>
                        </td>
                            <td class="input"><input name="_pass" id="rcmloginpwd" size="40" autocapitalize="off" autocomplete="off" type="password"></td>
                    </tr>
                    </tbody>
                    </table>
                    <p class="formbuttons"><input type="submit" class="button mainaction" value="Login" /></p>
                </form>
            </div>
            <div class="box-bottom">
	   <div id="message"></div>
	   <noscript>
		  <p class="noscriptwarning">Warning: This webmail service requires Javascript! In order to use it please enable Javascript in your browser's     settings.</p>
	</noscript>
</div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>

