<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Email</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="">
        <table border="2">
            <tr>
                <td>
                    <h3>Name</h3>  
                </td>
                <td>
                    <input type="text" placeholder="Name" name="Name" required="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Age</h3>
                </td>
                <td>
                    <input type="text" placeholder="Age" name="Age" required="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Last Name</h3>
                </td>
                <td>
                    <input type="text" placeholder="LastName" name="LastName" required="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Email</h3>
                </td>
                <td>
                    <input type="text" placeholder="Email" name="Email" required="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Message</h3>
                </td>
                <td>
                    <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" name="Send">
    </form>
    <?php 
    
    ?>
</body>
</html>