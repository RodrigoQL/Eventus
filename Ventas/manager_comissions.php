<?php
    include('resources/managers/SaleManager.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comisiones - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    <script src="jquery-3.3.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>
</head>

<body>
    <form action="index.html">
        <input type="submit" value="Inicio" />
    </form>
    <form action="comissions.html">
        <input type="submit" value="Comisiones" />
    </form>
    <form action="new_sale.html">
        <input type="submit" value="Nueva Venta" />
    </form>
    <h1>Comisiones<h2>
            <!-- PHP AQUI -->
            <table>
                <tr>
                    <th scope="col">dog</th>
                    <th scope="col">cat</th>
                    <th scope="col">horse</th>
                    <th scope="col">iguana</th>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2</td>
                    <td>10</td>
                    <td>500</td>
                </tr>

            </table>
            <!-- /PHP AQUI -->
            <p> Filtrar por fecha de ingreso del:</p>
            <input type="date"> al <input type="date"><br>
            <button type="button" class="btn btn-primary">Aceptar</button>
            <p>Filtrar por fecha de pago del:</p>
            <input type="date"> al <input type="date"><br>
            <button type="button" class="btn btn-primary">Aceptar</button>

            <table id="myTable">
                <thead>
                    <tr>
                        <th>Vendedor</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                   <?php echo HtmlComissionsTable(); ?>
                </tbody>
            </table>

            <script>
                $(document).ready( function () {
                $('#myTable').DataTable();
            } );
            </script>
</body>

</html>