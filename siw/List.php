




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
                <?php
                
                $json = file_get_contents($_GET["server"].'list.php');
                $obj = json_decode($json);
                foreach ($obj as &$data) {
                    
                        
                
                ?>
                
                    <tr>
                        <td><a href= "<?php echo $data->url ?>" download > <?php echo $data->filename ?></a>
                        </td>

                    </tr>
                     <?php
                    }
                    ?>
                </table>

               

            
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



