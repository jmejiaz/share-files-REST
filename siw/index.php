
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>jmejiaz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Parcial 2</a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Juan Camilo Mejia 201010015010</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>



        <div class="container" style="margin-top: 60px">


            <table border="1" style="width:300px">
                <tr>
                    <td> <form name="input" action="List.php" method="get">
                <select name="server">
                    <?php
                    require_once './ReadSaw.php';

                    $listSaw = array();

                    //$saw = new ReadSaw();


                    $readSaw = new ReadSaw();
                    $listSaw = $readSaw->read();


                    foreach ($listSaw as &$value) {
                        ?>

                        <option value="<?php echo $value; ?>"><?php echo $value; ?> </option>

<?php } ?>
                </select>
                <input type="submit">
            </form></td>
                    <td>
                        
                        <form name="input" action="find.php" method="get">
                            <select name="server">
                    <?php
                    require_once './ReadSaw.php';

                    $listSaw = array();

                    //$saw = new ReadSaw();


                    $readSaw = new ReadSaw();
                    $listSaw = $readSaw->read();


                    foreach ($listSaw as &$value) {
                        ?>

                        <option value="<?php echo $value; ?>"><?php echo $value; ?> </option>

<?php } ?>
                </select>
                            Patron: <input type="text" name="pattern"><br>
                            <input type="submit">
                        </form>
                    </td>
                </tr>
            </table>
             
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



