<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="process_multiple_file_upload_01.php" method="post" enctype="multipart/form-data">
            <input type="file" name="pfi[]" multiple="">

            <br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>
