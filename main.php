<!DOCTYPE html>
<html>
    <body>
        <title>Данні успішно вкрадено</title>
        <form action="main.php" method="POST">
        <?php
    function print_form($name, $surname, $email, $zip_code, $favorite_subject)
        {
        ?>
            <table cellspacing="3" cellpadding="2" border="1">
                <tr>
                    <td>Ім'я</td>
                    <td><input name="name" type="text" value="<?php echo "$name"?>"></td>
                </tr>
                <tr>
                    <td>Прізвище<b>*</b></td>
                    <td><input name="surname" type="text" value="<?php echo "$surname"?>"></td>
                </tr>
                <tr>
                    <td>Еmail адреса<b>*</b></td>
                    <td><input name="email" type="text" value="<?php echo "$email"?>"></td>
                </tr>
                <tr>
                    <td>Поштовий індекс<b>*</b></td>
                    <td><input name="zip_code" type="text" value="<?php echo "$zip_code"?>"></td>
                </tr>
                <tr>
                    <td>Улюблений предмет</td>
                    <td><input name="favorite_subject" type="text" value="<?php echo "$favorite_subject"?>"></td>
                </tr>
            </table>
            <br>
            <input name="submit" type="submit" value="Ввести">
            <input name="reset" type="reset" value="Скинути">  
      
        <?php    
        }   
            function check_form($name, $surname, $email, $zip_code, $favorite_subject)
            {
                if(!$surname || !$email || !$zip_code): echo "<h3> Помилка у заповненні форми!</h3>";
                if(!$surname) { echo "<h3> Ви не заповнили поле <b>ПРІЗВИЩЕ</b></h3>";}
                if(!$email)  {echo "<h3> Ви не заповнили поле <b>EMAIL</b></h3>";}
                if(!$zip_code) { echo "<h3> Ви не заповнили поле <b>ПОШТОВИЙ ІНДЕКС</b></h3>";}
                print_form($name, $surname, $email, $zip_code, $favorite_subject);
                else : confirm_form($name, $surname, $email, $zip_code, $favorite_subject);
            endif;
            }
      function confirm_form($name, $surname, $email, $zip_code, $favorite_subject)
      {
     ?>
         </form>
     <h2> Дякую! Усі дані збережено! </h2>
     <b>Інформація яку ви надали</b>
     <?php
     echo "<br><b>Ім'я:</b> $name<br><b>Прізвище:</b> $surname<br><b>пошта:</b> $email<br><b>Поштовий індекс:</b> $zip_code<br><b>Хобі:</b>  $favorite_subject\n";
      }    
      $submit=$_POST['submit'];
      $name=$_POST['name'];
      $surname=$_POST['surname'];
      $email=$_POST['email'];
      $zip_code=$_POST['zip_code'];
      $favorite_subject=$_POST['favorite_subject'];  
      if(!$submit):
        print_form("","","","","");
    else: check_form($name, $surname, $email, $zip_code, $favorite_subject);
    endif;
        ?>
        </form>
    </body>
</html>