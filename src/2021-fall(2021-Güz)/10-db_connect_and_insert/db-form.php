<html>
    <head>
        <title>Form</title>
        <meta charset="UTF-8">
    </head>
    <style>
        table{
            border:1;
        }
    </style>
    <body>
        <form action="db-insert.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" /></td>
                </tr>                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>