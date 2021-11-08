<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <link rel="stylesheet" href="css/estilosPagina.css">
  </head>
<body class="bodyTabla">
    <div class="container">
        <div class="cabecera">
                <center><label for=""><strong>TABLA 1</strong></label></center>
        </div>
        <div class="table-responsive">
        <table id="example"  data-order='[[ 0, "asc" ]]' data-page-length='10' width="100%"
            class="table table-sm table-striped table-hover table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Nombre del Proveedor</th>
                    <th scope="col">RUC</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ('conexion.php');
                    $contador = 0;
                    $SQLSelect ="SELECT * FROM persona";
                    $rs = $mysqliConexion->query($SQLSelect);
                    $NumeroRegistros = $rs->num_rows;
                    if($NumeroRegistros!=0){
                        
                        while($row=mysqli_fetch_assoc($rs)){
                            $class="odd";
                            $contador = $contador +1;
                            if($contador%2){
                                $class="even";
                            }                   
                            echo '<tr class="'.$class.'">';
                            echo '<td><strong>'.$contador.'</strong></td>';
                            echo '<td>'.$row['apellidoPaterno'].'</td>';
                            echo '<td>'.$row['apellidoMaterno'].'</td>';
                            echo '<td>'.$row['nombres'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '</td>';
                        }
                    }else{
                        echo '<tr><td colspan=7><center>No existen Registros</center></td></tr>';
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!--datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript" src="js/datatable.js"></script>
    <!--datatables-->
  </body>
</html>