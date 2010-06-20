

<div id='cabtext'><p class='title'>¿Qu&eacute; es Geonio?</p>
    <p class='text'>

        Geonio es un gestor de microbloging de noticias geolocalizadas en tu ciudad.

    </p>

    <p class='title'>¿C&oacute;mo funciona geonio?</p>
    <p class='text'>

        Muy sencillo!! Geolocaliza la noticia y red&aacute;ctala. Los usuarios mediantes sus votos generan la relevancia de la noticia.
    </p>
</div>";
<div id='register'><table><form action="register.php" method="post">
            <tr><td>Usuario:</td><td><input type="text" id="nameuser" name="nameuser"  onkeyup="chk('nameuser')" ></input><div id="nameuser_"></div></td></br>
            </tr><tr><td>Password:</td><td><input type="password" name="password"></input></td>
            </tr>
            <tr><td>Repita Password:</td><td><input type="password" name="password2"></input></td>
            </tr>
            <tr><td>Email:</td><td><input type="text" name="email" id="email" onkeyup="chk('email')"></input><div id="email_"></div>

                </td>
            </tr>
            <tr><td></td><td><i>(Recuerde utilizar una correo v&aacute;lido, hay se enviar&aacute; la validaci&oacute;n de la cuenta)</i></td></tr>
            <tr>
            <tr><td></td><td><input type='checkbox' name='req'>Has le&iacute;do y aceptas las <a href='legal.php' target='_blank'>condiciones de uso</a> </td></tr>
            <?php

            if(is_restrict($_SERVER['REMOTE_ADDR'])!=-1||is_restrict(getIPfromXForwarded())!=-1 ) {

                echo "<tr><td colspan=\"2\" style='background-color:#CCCCCC'><center><img src=\"include/captcha/captcha.php\" width=\"100\" height=\"30\" vspace=\"3\"><br>
		  <input name=\"tmptxt\" type=\"text\" size=\"30\"><br>
		  <input name=\"legal\" type=\"hidden\" value=\"checkdata\">
		  <br><i>Introduzca el texto de la imagen.</i></center>
		  </td></tr>";

            }?>

            <tr><td><p class='submit'><input type="submit" name="submit" value= "enviar"></input></p></td><td></td></tr>
        </form>
    </table></div>



