<!DOCTYPE html>
<html>
    <head>
        <title>
            My First Web App
        </title> 
        <meta name="description" content="firstApp"> 
        <meta http-equiv="content-type" content="text/html;charset=UTF-8"> 
    </head>
    <body>
        <form method='POST'>
        <p>
            Enter your name
        </p>
        <input type='text' name='name'>
        <input type="submit" value='SUBMIT'>
        <? if($_POST['name']){ ?>
        <p>Hello<em> <?=$_POST['name']?> </em> !</p>
       <?}?>
        </form>
    </body>
</html>
