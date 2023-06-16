<?php
    include('bd.php');
    if (isset($_GET['idCat'])) {
        $idCat=$_GET['idCat'];
        $query="DELETE FROM categories WHERE CategoryID=$idCat";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idCust'])) {
        $idCust=$_GET['idCust'];
        $query="DELETE FROM customers WHERE CustomerID=$idCust";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }
    elseif (isset($_GET['idE'])) {
        $idE=$_GET['idE'];
        $query="DELETE FROM employees WHERE EmployeeID=$idE";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idOD'])) {
        $idOD=$_GET['idOD'];
        $query="DELETE FROM orderdetails WHERE OrderDetails=$idOD";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idOr'])) {
        $idOr=$_GET['idOr'];
        $query="DELETE FROM orders WHERE OrderID=$idOR";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idProd'])) {
        $idProd=$_GET['idProd'];
        $query="DELETE FROM products WHERE ProductID=$idProd";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idShip'])) {
        $idShip=$_GET['idShip'];
        $query="DELETE FROM shippers WHERE ShipperID=$idShip";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }elseif (isset($_GET['idSupp'])) {
        $idSupp=$_GET['idSupp'];
        $query="DELETE FROM suppliers WHERE SupplierID=$idSupp";
        $res=mysqli_query($cnx,$query);
        if (!$res) {
            die ("Error al Eliminar");
        }else{
            echo '<script lenguage="javascript">window.location="page1.php"</script>';
        }
    }
?>