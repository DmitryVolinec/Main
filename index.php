<? include 'calc.php' ?>
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
        <h1>
            Mini Calc
        </h1>
<? 
        $model = new calc;
?>
           <p><b style='color:red'>*</b> Enter your nickname <input type='text' name='name'> </p>
           <hr>
           <p><b>example (7 + 3), (7 - 3), (7 / 3), (7 * 3), (7 % 3)</b></p>
        <table>
            <tr>
                <td>(<input type='text' name='1'>)</td>
                <td><select name='operation'>
                        <option>+</option>
                        <option>-</option>
                        <option>/</option>
                        <option>*</option>
                        <option>%</option>
                    </select></td>
                <td>(<input type='text' name='2'>)</td>
                <td> <input type="submit" value='RESULT'></td>
<?                  if(isset($_POST['name'])){
                       if($model->getName() && $model->checkNumberField()){
                           ?><tr><td><b><?=$model->getName()?></b>, your result is <em><u><?=$model->getResult()?></u></em></td></tr><?
                        } else {
                            ?><tr><td style='color:red'><b>Check all field!</b></td></tr><?         
                        }
                    } 
?>
         </table>
        </form>
    </body>
</html>
