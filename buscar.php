<?php
include('bd.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=IBM+Plex+Mono:ital,wght@1,300;1,400&display=swap');

        body {
            background-image: url("https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg");
            background-size: fill;
            -webkit-animation: slidein 100s;
            animation: slidein 100s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            animation-direction: alternate;
            font-family: 'IBM Plex Mono', monospace;
        }

        @-webkit-keyframes slidein {
            from {
                background-position: top;
                background-size: 3000px;
            }

            to {
                background-position: -100px 0px;
                background-size: 2750px;
            }
        }

        @keyframes slidein {
            from {
                background-position: top;
                background-size: 3000px;
            }

            to {
                background-position: -100px 0px;
                background-size: 2750px;
            }
        }

        .center {
            z-index: -10;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            /* background: rgba(0, 0, 0, 0.7); */
            border-radius: 3px;
        }

        .center h1 {
            text-align: center;
            color: white;
            font-family: "Source Code Pro", monospace;
            text-transform: uppercase;
        }

        /* Add a black background color to the top navigation */
        .topnav {
            background-color: rgba(0, 0, 0, 0.6);
            overflow: hidden;
            width: 100%;
            border-radius: 16px;
        }

        /* Style the links inside the navigation bar */
        .topnav button {
            background-color: rgba(0, 0, 0, 0);
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            width: 12.5%;
            font-family: 'IBM Plex Mono', monospace;
        }

        /* Change the color of links on hover */
        .topnav button:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav button.active {
            background-color: #04AA6D;
            color: white;
        }

        td a {
            text-decoration: none;

        }

        #form1 {
            display: none;
        }

        #form2 {
            display: none;
        }

        #form3 {
            display: none;
        }

        #form4 {
            display: none;
        }

        #form5 {
            display: none;
        }

        #form6 {
            display: none;
        }

        #form7 {
            display: none;
        }

        #form8 {
            display: none;
        }

        .form {
            width: 100%;

        }

        .formContainer {
            color: white;
            width: 14%;
            float: left;
        }

        .tableContainer {
            width: 86%;
            float: left;
        }

        .tableContainer table {
            font-size: 15px;
            width: 96%;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3.6px);
            -webkit-backdrop-filter: blur(3.6px);
            border: 2px solid black;
            padding: 5px;
            color: white;
            margin-left: 30px;
        }

        .formContainer form {
            width: 100%;
            font-size: small;
            margin-right: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3.6px);
            -webkit-backdrop-filter: blur(3.6px);
            border: 2px solid black;
            padding: 8px;
        }

        .formContainer form h1 {
            margin: 0;
        }

        .formContainer form input {
            width: 98.5%;
            font-family: 'IBM Plex Mono', monospace;
            border-radius: 6px;
            font-size: medium;
        }

        .env {
            background-color: rgba(0, 0, 0, 0.1);
            font-size: small;
            border: 2px solid black;
            border-radius: 10px;
            color: black;
            padding: 4px;
            margin-top: 13px;
        }

        .env:hover {
            border: 2px solid white;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255, 255, 255, 0.19);
        }

        .pdfbt {
            background-color: rgba(0, 0, 0, 0.1);
            font-size: x-large;
            border: 2px solid black;
            border-radius: 10px;
            color: black;
            padding: 4px;
            margin-top: 13px;
            margin-left: 0.8%;
            width: 106%;
        }

        .pdfbt:hover {
            border: 2px solid white;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255, 255, 255, 0.19);
        }
    </style>
</head>

<?php

if (isset($_GET['busquedaCat'])) {
    $busquedaCat = $_GET['busquedaCat'];
?>
    <div class="formContainer">
        <form action="buscar.php" method="GET">
            <input type="text" placeholder="Buscar.." name="busquedaCat" value="<?php echo $busquedaCat; ?>">
            <input type="submit" class="env">
        </form>
    </div>
    <div class="tableContainer">
        <table border="1" width="100%">
            <tr>
                <th>ID Cliente</th>
                <th>Nombre de Cliente</th>
                <th>Apellido de Cliente</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
            <?php
            if (empty($busquedaCat)) {
                echo '<script lenguage="javascript">window.location="page1.php"</script>';
            }
            $queryM = "SELECT * FROM categories WHERE (CategoryID like '%$busquedaCat%' or CategoryName like '%$busquedaCat%' or Description like '%$busquedaCat%' or Picture like '%$busquedaCat%')";

            $res = mysqli_query($cnx, $queryM);
            while ($row = mysqli_fetch_array($res)) { ?>
                <tr>
                    <td>
                        <?php
                        echo $row['CategoryID'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row['CategoryName'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row['Description'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row['Picture'];
                        ?>
                    </td>
                    <td align="center">
                        <a href="eliminar.php?idCat=<?php echo $row['CategoryID']; ?>"><img src="resources/eliminar.png" width="25"></a>
                        <a href="actualizar.php?idCat=<?php echo $row['CategoryID']; ?>"><img src="resources/actualizar.png" width="25"></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
} elseif (isset($_GET['busquedaCust'])) {
    $busquedaCust = $_GET['busquedaCust'];
?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaCust" value="<?php echo $busquedaCust; ?>">
        <input type="submit">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Customer ID</th>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Contact Title</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaCust)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM2 = "SELECT * FROM customers WHERE (CustomerID like '%$busquedaCust%' or CompanyName like '%$busquedaCust%' or ContactName like '%$busquedaCust%' or ContactTitle like '%$busquedaCust%' or Address like '%$busquedaCust%' or City like '%$busquedaCust%' or Region like '%$busquedaCust%' or PostalCode like '%$busquedaCust%' or Country like '%$busquedaCust%' or Phone like '%$busquedaCust%' or Fax like '%$busquedaCust%')";
        $res = mysqli_query($cnx, $queryM2);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['CustomerID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['CompanyName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ContactName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ContactTitle'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Address'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['City'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Region'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['PostalCode'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Country'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Phone'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Fax'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idCust=<?php echo $row['CustomerID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idCust=<?php echo $row['CustomerID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaEmp'])) {
    $busquedaEmp = $_GET['busquedaEmp']
?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaEmp" value="<?php echo $busquedaEmp; ?>">
        <input type="submit">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Employee ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Title</th>
            <th>Title Of Courtesy</th>
            <th>Birth Date</th>
            <th>Hire Date</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>HomePhone</th>
            <th>Extension</th>
            <th>Photo</th>
            <th>Notes</th>
            <th>Reports To</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaEmp)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM3 = "SELECT * FROM employees WHERE (EmployeeID like '%$busquedaEmp%' or LastName like '%$busquedaEmp%' or FirstName like '%$busquedaEmp%' or Title like '%$busquedaEmp%' or TitleOfCourtesy like '%$busquedaEmp%' or BirthDate like '%$busquedaEmp%' or HireDate like '%$busquedaEmp%' or Address like '%$busquedaEmp%' or City like '%$busquedaEmp%' or Region like '%$busquedaEmp%' or PostalCode like '%$busquedaEmp%' or Country like '%$busquedaEmp%' or HomePhone like '%$busquedaEmp%' or Extension like '%$busquedaEmp%' or Photo like '%$busquedaEmp%' or Notes like '%$busquedaEmp%' or ReportsTo like '%$busquedaEmp%')";
        $res = mysqli_query($cnx, $queryM3);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['EmployeeID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['LastName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['FirstName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Title'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['TitleOfCourtesy'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['BirthDate'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['HireDate'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Address'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['City'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Region'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['PostalCode'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Country'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['HomePhone'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Extension'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Photo'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Notes'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ReportsTo'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idE=<?php echo $row['EmployeeID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idE=<?php echo $row['EmployeeID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaOrdsD'])) {
    $busquedaOrdsD = $_GET['busquedaOrdsD'];
?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaOrdsD" value="<?php echo $busquedaOrdsD; ?>">
        <input type="submit" class="env" value="BUSCAR">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Discount</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaOrdsD)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM4 = "SELECT * FROM orderdetails WHERE (OrderID like '%$busquedaOrdsD%' or ProductID like '%$busquedaOrdsD%' or UnitPrice like '%$busquedaOrdsD%' or Quantity like '%$busquedaOrdsD%' or Discount like '%$busquedaOrdsD%')";
        $res = mysqli_query($cnx, $queryM4);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['OrderID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ProductID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['UnitPrice'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Quantity'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Discount'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idOD=<?php echo $row['OrderDetails']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idOD=<?php echo $row['OrderDetails']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaOrd'])) {
    $busquedaOrd = $_GET['busquedaOrd'];
?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaOrd" value="<?php echo $busquedaOrd; ?>">
        <input type="submit" class="env" value="BUSCAR">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Employee ID</th>
            <th>Order Date</th>
            <th>Required Date</th>
            <th>Shipped Date</th>
            <th>Shipper ID</th>
            <th>Ship Via</th>
            <th>Freight</th>
            <th>Ship Name</th>
            <th>Ship Address</th>
            <th>Ship City</th>
            <th>Ship Region</th>
            <th>Ship Postal Code</th>
            <th>Ship Country</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaOrd)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM5 = "SELECT * FROM orders WHERE (OrderID like '%$busquedaOrd%' or CustomerID like '%$busquedaOrd%' or EmployeeID like '%$busquedaOrd%' or OrderDate like '%$busquedaOrd%' or RequiredDate like '%$busquedaOrd%' or ShippedDate like '%$busquedaOrd%' or ShipperID like '%$busquedaOrd%' or ShipVia like '%$busquedaOrd%' or Freight like '%$busquedaOrd%' or ShipName like '%$busquedaOrd%' or ShipAddress like '%$busquedaOrd%' or ShipCity like '%$busquedaOrd%' or ShipRegion like '%$busquedaOrd%' or ShipPostalCode like '%$busquedaOrd%' or ShipCountry like '%$busquedaOrd%')";
        $res = mysqli_query($cnx, $queryM5);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['OrderID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['CustomerID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['EmployeeID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['OrderDate'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['RequiredDate'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShippedDate'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipperID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipVia'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Freight'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipAddress'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipCity'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipRegion'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipPostalCode'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ShipCountry'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idOr=<?php echo $row['OrderID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idOr=<?php echo $row['OrderID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaProduct'])) {
    $busquedaProduct = $_GET['busquedaProduct'];

?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaProduct" value="<?php echo $busquedaProduct; ?>">
        <input type="submit" class="env" value="BUSCAR">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Supplier ID</th>
            <th>Category ID</th>
            <th>Quantity Per Unit</th>
            <th>Unit Price</th>
            <th>Units In Stock</th>
            <th>Units On Order</th>
            <th>Reorder Level</th>
            <th>Discontinued</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaProduct)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM6 = "SELECT * FROM products WHERE(ProductID like '%$busquedaProduct%' or ProductName like '%$busquedaProduct%' or SupplierID like '%$busquedaProduct%' or CategoryID like '%$busquedaProduct%' or QuantityPerUnit like '%$busquedaProduct%' or UnitPrice like '%$busquedaProduct%' or UnitsInStock like '%$busquedaProduct%' or UnitsOnOrder like '%$busquedaProduct%' or ReorderLevel like '%$busquedaProduct%' or Discontinued like '%$busquedaProduct%')";
        $res = mysqli_query($cnx, $queryM6);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['ProductID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ProductName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['SupplierID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['CategoryID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['QuantityPerUnit'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['UnitPrice'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['UnitsInStock'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['UnitsOnOrder'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ReorderLevel'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Discontinued'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idProd=<?php echo $row['ProductID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idProd=<?php echo $row['ProductID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaShip'])) {
    $busquedaShip = $_GET['busquedaShip'];
?>

<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaShip" value="<?php echo $busquedaShip; ?>">
        <input type="submit" class="env" value="BUSCAR">
    </form></div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Shipper ID</th>
            <th>Company Name</th>
            <th>Phone</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaShip)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM8 = "SELECT * FROM shippers WHERE (ShipperID like '%$busquedaShip%' or CompanyName like '%$busquedaShip%' or Phone like '%$busquedaShip%')";
        $res8a = mysqli_query($cnx, $queryM8);
        while ($row = mysqli_fetch_array($res8a)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['ShipperID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['CompanyName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Phone'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idShip=<?php echo $row['ShipperID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idShip=<?php echo $row['ShipperID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
} elseif (isset($_GET['busquedaSupp'])) {
    $busquedaSupp = $_GET['busquedaSupp'];
?>
<div class="formContainer">
    <form action="buscar.php" method="GET">
        <input type="text" placeholder="Buscar.." name="busquedaSupp" value="<?php echo $busquedaSupp; ?>">
        <input type="submit" class="env" value="BUSCAR">
    </form>
    </div>
    <div class="tableContainer">
    <table border="1" width="100%">
        <tr>
            <th>Supplier ID</th>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Contact Title</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
            <th>Home Page</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (empty($busquedaSupp)) {
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
        $queryM7 = "SELECT * FROM suppliers WHERE (SupplierID like '%$busquedaSupp%' or CompanyName like '%$busquedaSupp%' or ContactName like '%$busquedaSupp%' or ContactTitle like '%$busquedaSupp%' or Address like '%$busquedaSupp%' or City like '%$busquedaSupp%' or Region like '%$busquedaSupp%' or PostalCode like '%$busquedaSupp%' or Country like '%$busquedaSupp%' or Phone like '%$busquedaSupp%' or Fax like '%$busquedaSupp%' or Homepage like '%$busquedaSupp%')";
        $res = mysqli_query($cnx, $queryM7);
        while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td>
                    <?php
                    echo $row['SupplierID'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['CompanyName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ContactName'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['ContactTitle'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Address'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['City'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Region'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['PostalCode'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Country'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Phone'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Fax'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['HomePage'];
                    ?>
                </td>
                <td align="center">
                    <a href="eliminar.php?idSupp=<?php echo $row['SupplierID']; ?>">
                        <img src="resources/eliminar.png" width="25">
                    </a>
                    <a href="actualizar.php?idSupp=<?php echo $row['SupplierID']; ?>">
                        <img src="resources/actualizar.png" width="25">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
<?php
}
?>