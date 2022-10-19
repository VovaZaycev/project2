<!DOCTYPE html>
<html>
    <head>
        <title>Завдання 2. Зайцев В.О.</title>
    </head>
    <body>   
        <form action="main.php" method="POST">
            <h2>Будь ласка введіть інформацію про себе</h2>
            <h3>поля з * є обов'язковими для заповнення </h3>
            <table cellspacing="2" cellpadding="2" border="1">
                <tr>
                    <td>Ім'я</td>
                    <td><input name="name" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Прізвище<b>*</b></td>
                    <td><input name="surname" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Еmail адреса<b>*</b></td>
                    <td><input name="email" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Поштовий індекс<b>*</b></td>
                    <td><input name="zip_code" type="text" value=""></td>
                </tr>
                <tr>
                    <td>Улюблений предмет</td>
                    <td><input name="favorite_subject" type="text" value=""></td>
                </tr>
            </table>
            <br>
            <input name="submit" type="submit" value="Ввести">
            <input name="reset" type="reset" value="Скинути">  
        </form>
    </body>
</html>