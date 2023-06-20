<title>Gestion de Pedidos</title>
<link rel="icon" href="resources/icon.png" type="image/x-icon">
<?php
include('bd.php');
if (isset($_GET['idCat'])) {
    $idCat = $_GET['idCat'];
    $query = "DELETE FROM categories WHERE CategoryID=$idCat";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idCust'])) {
    $idCust = $_GET['idCust'];
    $query = "DELETE FROM customers WHERE CustomerID=$idCust";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idE'])) {
    $idE = $_GET['idE'];
    $query = "DELETE FROM employees WHERE EmployeeID=$idE";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idOD'])) {
    $idOD = $_GET['idOD'];
    $query = "DELETE FROM orderdetails WHERE OrderDetails=$idOD";
    $query2 = "ALTER TABLE orderdetails AUTO_INCREMENT = 1";
    $res1 = mysqli_query($cnx, $query2);
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idOr'])) {
    $idOr = $_GET['idOr'];
    $query = "DELETE FROM orders WHERE OrderID=$idOr";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idProd'])) {
    $idProd = $_GET['idProd'];
    $query = "DELETE FROM products WHERE ProductID=$idProd";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idShip'])) {
    $idShip = $_GET['idShip'];
    $query = "DELETE FROM shippers WHERE ShipperID=$idShip";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
} elseif (isset($_GET['idSupp'])) {
    $idSupp = $_GET['idSupp'];
    $query = "DELETE FROM suppliers WHERE SupplierID=$idSupp";
    $res = mysqli_query($cnx, $query);
    if (!$res) {
        echo '<script lenguage="javascript">alert("Error Al Eliminar")window.location="page1.php"</script>';
    } else {
        echo '<script lenguage="javascript">window.location="page1.php"</script>';
    }
}
