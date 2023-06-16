<?php 
    include("bd.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #form1{
            display: none;
        }
        #form2{
            display: none;
        }
        #form3{
            display: none;
        }
        #form4{
            display: none;
        }
        #form5{
            display: none;
        }
        #form6{
            display: none;
        }
        #form7{
            display: none;
        }
        #form8{
            display: none;
        }
    </style>
    <button id="boton" onclick="mostrar8();">SUPPLIERS</button>
    <button id="boton2" onclick="mostrar();">CATEGORIES</button>
    <button id="boton3" onclick="mostrar2();">CUSTOMERS</button>
    <button id="boton4" onclick="mostrar7();">SHIPPERS</button>
    <button id="boton5" onclick="mostrar3();">EMPLOYEES</button>
    <button id="boton6" onclick="mostrar5();">ORDERS</button>
    <button id="boton7" onclick="mostrar6();">PRODUCTS</button>
    <button id="boton8" onclick="mostrar4();">ORDER DETAILS</button>
    
    <br>
    <div class="form" id="form1">
        <h1>CATEGORIES</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Category ID</label><br>
            <input type="number" name="catID" placeholder="Enter your ID"><br>
            <label>Category Name</label><br>
            <input type="text" name="catName" placeholder="Enter your Category Name"><br>
            <label>Descripcion</label><br>
            <input type="text" name="catDescr" placeholder="Enter your Description"><br>
            <label>Picture</label><br>
            <input type="text" name="catPic" placeholder="Enter your Picture"><br>
            <input type="submit" id="boton9" value="Enviar" name="enviarCat">
        </form>
        <h1>CATEGORIES</h1>
        <table border="1" width="100%">
            <tr>
                <th>ID Cliente</th>
                <th>Nombre de Cliente</th>
                <th>Apellido de Cliente</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
            <?php
                $queryM="SELECT * FROM categories";
                $res=mysqli_query($cnx,$queryM);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                            <a href="eliminar.php?idCat=<?php echo $row['CategoryID']; ?>">
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idCat=<?php echo $row['CategoryID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form2">
        <h1>CUSTOMERS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Customer ID</label><br>
            <input type="number" name="custID" placeholder="Enter your ID"><br>
            <label>Company Name</label><br>
            <input type="text" name="custCName" placeholder="Enter your Company Name"><br>
            <label>Contact Name</label><br>
            <input type="text" name="custConName" placeholder="Enter your Contact Name"><br>
            <label>Contact Title</label><br>
            <input type="text" name="custConTitle" placeholder="Enter your Contact Title"><br>
            <label>Address</label><br>
            <input type="text" name="custAddress" placeholder="Enter your Address"><br>
            <label>City</label><br>
            <input type="text" name="custCity" placeholder="Enter your City"><br>
            <label>Region</label><br>
            <input type="text" name="custRegion" placeholder="Enter your Region"><br>
            <label>Postal Code</label><br>
            <input type="text" name="custPostal" placeholder="Enter your Postal Code"><br>
            <label>Country</label><br>
            <input type="text" name="custCountry" placeholder="Enter your Country"><br>
            <label>Phone</label><br>
            <input type="text" name="custPhone" placeholder="Enter your Phone"><br>
            <label>Fax</label><br>
            <input type="text" name="custFax" placeholder="Enter your Fax"><br>
            <input type="submit" id="boton10" value="Enviar" name="enviarCust">
        </form>
        <br><h1>CUSTOMERS</h1>
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
                $queryM2="SELECT * FROM customers";
                $res=mysqli_query($cnx,$queryM2);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="30">
                            </a>
                            <a href="actualizar.php?idCust=<?php echo $row['CustomerID']; ?>">
                                <img src="resources/actualizar.png" width="30">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form3">
        <h1>EMPLOYEES</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Employee ID</label><br>
            <input type="number" name="empID"><br>
            <label>Last Name</label><br>
            <input type="text" name="empLName"><br>
            <label>First Name</label><br>
            <input type="text" name="empFName"><br>
            <label>Title</label><br>
            <input type="text" name="empTitle"><br>
            <label>Title Of Courtesy</label><br>
            <input type="text" name="empTCourt"><br>
            <label>Birth Date</label><br>
            <input type="date" name="empBirth"><br>
            <label>Hire Date</label><br>
            <input type="date" name="empHire"><br>
            <label>Address</label><br>
            <input type="text" name="empAddress"><br>
            <label>City</label><br>
            <input type="text" name="empCity"><br>
            <label>Region</label><br>
            <input type="text" name="empRegion"><br>
            <label>Postal Code</label><br>
            <input type="text" name="empPost"><br>
            <label>Country</label><br>
            <input type="text" name="empCountry"><br>
            <label>HomePhone</label><br>
            <input type="text" name="empHPhone"><br>
            <label>Extension</label><br>
            <input type="text" name="empExt"><br>
            <label>Photo</label><br>
            <input type="text" name="empPhoto"><br>
            <label>Notes</label><br>
            <input type="text" name="empNotes"><br>
            <label>Reports To</label><br>
            <input type="text" name="empReports"><br>
            <input type="submit" id="boton11" value="Enviar" name="enviarEmp"><br>
        </form>
        <h1>EMPLOYEES</h1>
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
                $queryM3="SELECT * FROM employees";
                $res=mysqli_query($cnx,$queryM3);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idE=<?php echo $row['EmployeeID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form4">
        <h1>ORDER DETAILS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Order ID</label><br>
            <input type="number" name="ordID"><br>
            <label>Product ID</label><br>
            <input type="number" name="ordPID"><br>
            <label>Unit Price</label><br>
            <input type="number" name="ordPrice"><br>
            <label>Quantity</label><br>
            <input type="number" name="ordQuant"><br>
            <label>Discount</label><br>
            <input type="number" name="ordDisc"><br>
            <input type="submit" id="boton12" value="Enviar" name="enviarOrdDet">
        </form>
        <h1>ORDER DETAILS</h1>
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
                $queryM4="SELECT * FROM orderdetails";
                $res=mysqli_query($cnx,$queryM4);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idOD=<?php echo $row['OrderDetails']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form5">
        <h1>ORDERS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Order ID</label><br>
            <input type="number" name="ordsID"><br>
            <label>Customer ID</label><br>
            <input type="number" name="ordsCustID"><br>
            <label>Employee ID</label><br>
            <input type="number" name="ordsEmpID"><br>
            <label>Order Date</label><br>
            <input type="date" name="ordsDate"><br>
            <label>Required Date</label><br>
            <input type="date" name="ordsReqDate"><br>
            <label>Shipped Date</label><br>
            <input type="date" name="ordsShipDate"><br>
            <label>Shipper ID</label><br>
            <input type="number" name="ordsShipperID"><br>
            <label>Ship Via</label><br>
            <input type="text" name="ordsShipV"><br>
            <label>Freight</label><br>
            <input type="text" name="ordsFre"><br>
            <label>Ship Name</label><br>
            <input type="text" name="ordsShipN"><br>
            <label>Ship Address</label><br>
            <input type="text" name="ordsShipAd"><br>
            <label>Ship City</label><br>
            <input type="text" name="ordsShipCit"><br>
            <label>Ship Region</label><br>
            <input type="text" name="ordsShipReg"><br>
            <label>Ship Postal Code</label><br>
            <input type="text" name="ordShipPost"><br>
            <label>Ship Country</label><br>
            <input type="text" name="ordsShipCo"><br>
            <input type="submit" id="boton13" value="Enviar" name="enviarOrds"><br>
        </form>
        <h1>ORDERS</h1>
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
                <th>Acciones</th>
            </tr>
            <?php
                $queryM5="SELECT * FROM orders";
                $res=mysqli_query($cnx,$queryM5);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idOr=<?php echo $row['OrderID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form6">
        <h1>PRODUCTS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Product ID</label><br>
            <input type="number" name="prodID"><br>
            <label>Product Name</label><br>
            <input type="text" name="prodName"><br>
            <label>Supplier ID</label><br>
            <input type="number" name="prodSuppID"><br>
            <label>Category ID</label><br>
            <input type="number" name="prodCatID"><br>
            <label>Quantity Per Unit</label><br>
            <input type="number" name="prodUnit"><br>
            <label>Unit Price</label><br>
            <input type="number" name="prodUPrice"><br>
            <label>Units in Stock</label><br>
            <input type="number" name="prodStock"><br>
            <label>Units On Order</label><br>
            <input type="number" name="prodUnitsOrder"><br>
            <label>Reorder Level</label><br>
            <input type="text" name="prodReord"><br>
            <label>Discontinued</label><br>
            <input type="text" name="prodDisc"><br>
            <input type="submit" id="boton14" value="Enviar" name="enviarProd">
        </form>
        <h1>Products</h1>
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
                $queryM6="SELECT * FROM products";
                $res=mysqli_query($cnx,$queryM6);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idProd=<?php echo $row['ProductID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="form" id="form7">
        <h1>SHIPPERS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Shipper ID</label><br>
            <input type="number" name="shipperId"><br>
            <label>Company Name</label><br>
            <input type="text" name="shippersComp"><br>
            <label>Phone</label><br>
            <input type="text" name="shippersPhone"><br>
            <input type="submit" id="boton15" value="Enviar" name="enviarShipp">
        </form>
        <h1>SHIPPERS</h1>
        <table border="1" width="100%">
            <tr>
                <th>Shipper ID</th>
                <th>Company Name</th>
                <th>Phone</th>
                <th>Acciones</th>
            </tr>
            <?php
                $queryM8="SELECT * FROM shippers";
                $res8a=mysqli_query($cnx,$queryM8);
                while ($row=mysqli_fetch_array($res8a)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idShip=<?php echo $row['ShipperID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>


    <div class="form" id="form8">
        <h1>SUPPLIERS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Supplier ID</label><br>
            <input type="number" name="suppID"><br>
            <label>Company Name</label><br>
            <input type="text" name="suppName"><br>
            <label>Contact Name</label><br>
            <input type="text" name="suppCName"><br>
            <label>Contact Title</label><br>
            <input type="text" name="suppTitle"><br>
            <label>Address</label><br>
            <input type="text" name="suppAdd"><br>
            <label>City</label><br>
            <input type="text" name="suppCity"><br>
            <label>Region</label><br>
            <input type="text" name="suppReg"><br>
            <label>Postal Code</label><br>
            <input type="text" name="suppPost"><br>
            <label>Country</label><br>
            <input type="text" name="suppCount"><br>
            <label>Phone</label><br>
            <input type="text" name="suppPhone"><br>
            <label>Fax</label><br>
            <input type="text" name="suppFax"><br>
            <label>Home Page</label><br>
            <input type="text" name="suppHome"><br>
            <input type="submit" id="boton16" value="Enviar" name="enviarSupp">
        </form>
        <h1>Suppliers</h1>
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
                $queryM7="SELECT * FROM suppliers";
                $res=mysqli_query($cnx,$queryM7);
                while ($row=mysqli_fetch_array($res)) { ?>
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
                                <img src="resources/eliminar.png" width="50">
                            </a>
                            <a href="actualizar.php?idSupp=<?php echo $row['SupplierID']; ?>">
                                <img src="resources/actualizar.png" width="50">
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <script>
        function mostrar(){
            document.getElementById('form1').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar2(){
            document.getElementById('form2').style.display='block'
            document.getElementById('form1').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar3(){
            document.getElementById('form3').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form1').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar4(){
            document.getElementById('form4').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form1').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar5(){
            document.getElementById('form5').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form1').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar6(){
            document.getElementById('form6').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form1').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar7(){
            document.getElementById('form7').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form1').style.display='none'
            document.getElementById('form8').style.display='none'
        }
        function mostrar8(){
            document.getElementById('form8').style.display='block'
            document.getElementById('form2').style.display='none'
            document.getElementById('form3').style.display='none'
            document.getElementById('form4').style.display='none'
            document.getElementById('form5').style.display='none'
            document.getElementById('form6').style.display='none'
            document.getElementById('form7').style.display='none'
            document.getElementById('form1').style.display='none'
        }

// Obtener referencias a los botones
var botones = document.querySelectorAll('button');

// Función para manejar el evento de clic en los botones
function handleClick(event) {
  var botonPresionado = event.target.id; // Obtener el ID del botón presionado
  
  // Guardar el ID del botón presionado en localStorage
  localStorage.setItem('botonPresionado', botonPresionado);
}

// Agregar eventos a los botones para manejar el clic
botones.forEach(function(boton) {
  boton.addEventListener('click', handleClick);
});

// Verificar y restaurar el estado del botón al cargar la página
var botonPresionado = localStorage.getItem('botonPresionado');
if (botonPresionado) {
  var botonRestaurar = document.getElementById(botonPresionado);
  if (botonRestaurar) {
    botonRestaurar.click();
  }
}
    </script>
</body>
</html>
<?php
    if (isset($_POST['enviarCat'])) {
        $catID=$_POST['catID'];
        $catName=$_POST['catName'];
        $catDescr=$_POST['catDescr'];
        $catPic=$_POST['catPic'];
        $query="INSERT INTO categories(CategoryID,CategoryName,Description,Picture) VAlUES ('$catID','$catName','$catDescr','$catPic')";
        $res=mysqli_query($cnx, $query);
        if ($res) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif (isset($_POST['enviarCust'])) {
        $custID=$_POST['custID'];
        $custName=$_POST['custCName'];
        $custConName=$_POST['custConName'];
        $custConTitle=$_POST['custConTitle'];
        $custAddress=$_POST['custAddress'];
        $custCity=$_POST['custCity'];
        $custRegion=$_POST['custRegion'];
        $custPostal=$_POST['custPostal'];
        $custCountry=$_POST['custCountry'];
        $custPhone=$_POST['custPhone'];
        $custFax=$_POST['custFax'];
        $query2="INSERT INTO customers(CustomerID,CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax) VAlUES ('$custID','$custName','$custConName','$custConTitle','$custAddress','$custCity','$custRegion','$custPostal','$custCountry','$custPhone','$custFax')";
        $ress=mysqli_query($cnx, $query2);
        if ($ress) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif (isset($_POST['enviarEmp'])) {
        $eID=$_POST['empID'];
        $eLName=$_POST['empLName'];
        $eFName=$_POST['empFName'];
        $eTit=$_POST['empTitle'];
        $eTCourt=$_POST['empTCourt'];
        $eBirth=$_POST['empBirth'];
        $eHire=$_POST['empHire'];
        $eAdd=$_POST['empAddress'];
        $eCity=$_POST['empCity'];
        $eReg=$_POST['empRegion'];
        $ePost=$_POST['empPost'];
        $eCount=$_POST['empCountry'];
        $eHPhone=$_POST['empHPhone'];
        $eExt=$_POST['empExt'];
        $ePhot=$_POST['empPhoto'];
        $eNotes=$_POST['empNotes'];
        $eRep=$_POST['empReports'];
        $query3="INSERT INTO employees(EmployeeID,LastName,FirstName,Title,TitleOfCourtesy,BirthDate,HireDate,Address,City,Region,PostalCode,Country,HomePhone,Extension,Photo,Notes,ReportsTo) VALUES('$eID','$eLName','$eFName','$eTit','$eTCourt','$eBirth','$eHire','$eAdd','$eCity','$eReg','$ePost','$eCount','$eHPhone','$eExt','$ePhot','$eNotes','$eRep')";
        $resss=mysqli_query($cnx,$query3);
        if ($resss) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif(isset($_POST['enviarOrdDet'])) {
        $oID=$_POST['ordID'];
        $oPID=$_POST['ordPID'];
        $oPri=$_POST['ordPrice'];
        $oQu=$_POST['ordQuant'];
        $oDisc=$_POST['ordDisc'];
        $query4="INSERT INTO orderdetails(OrderID,ProductID,UnitPrice,Quantity,Discount) VALUES('$oID','$oPID','$oPri','$oQu','$oDisc')";
        $re=mysqli_query($cnx,$query4);
        if($re) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }
    elseif (isset($_POST['enviarOrds'])) {
        $osID=$_POST['ordsID'];
        $osCID=$_POST['ordsCustID'];
        $osEID=$_POST['ordsEmpID'];
        $osDate=$_POST['ordsDate'];
        $osRDate=$_POST['ordsReqDate'];
        $osSDate=$_POST['ordsShipDate'];
        $osShipID=$_POST['ordsShipperID'];
        $osShipV=$_POST['ordsShipV'];
        $osFre=$_POST['ordsFre'];
        $osShipN=$_POST['ordsShipN'];
        $osShipAd=$_POST['ordsShipAd'];
        $osShipC=$_POST['ordsShipCit'];
        $osShipR=$_POST['ordsShipReg'];
        $osShipP=$_POST['ordShipPost'];
        $osShipCo=$_POST['ordsShipCo'];
        $query5="INSERT INTO orders(OrderID,CustomerID,EmployeeID,OrderDate,RequiredDate,ShippedDate,ShipperID,ShipVia,Freight,ShipName,ShipAddress,ShipCity,ShipRegion,ShipPostalCode,ShipCountry) VALUES('$osID','$osCID','$osEID','$osDate','$osRDate','$osSDate','$osShipID','$osShipV','$osFre','$osShipN','$osShipAd','$osShipC','$osShipR','$osShipP','$osShipCo')";
        $rSeis=mysqli_query($cnx,$query5);
        if($rSeis) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif (isset($_POST['enviarProd'])) {
        $prodID=$_POST['prodID'];
        $prodName=$_POST['prodName'];
        $prodSuppID=$_POST['prodSuppID'];
        $prodCatID=$_POST['prodCatID'];
        $prodUnit=$_POST['prodUnit'];
        $prodUPrice=$_POST['prodUPrice'];
        $prodStock=$_POST['prodStock'];
        $prodUnitsOrder=$_POST['prodUnitsOrder'];
        $prodReord=$_POST['prodReord'];
        $prodDisc=$_POST['prodDisc'];
        $query6="INSERT INTO products(ProductID,ProductName,SupplierID,CategoryID,QuantityPerUnit,UnitPrice,UnitsInStock,UnitsOnOrder,ReorderLevel,Discontinued) VALUES ('$prodID','$prodName','$prodSuppID','$prodCatID','$prodUnit','$prodUPrice','$prodStock','$prodUnitsOrder','$prodReord','$prodDisc')";
        $res6=mysqli_query($cnx,$query6);
        if($res6) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif (isset($_POST['enviarShipp'])) {
        $shipperId=$_POST['shipperId'];
        $shippersComp=$_POST['shippersComp'];
        $shippersPhone=$_POST['shippersPhone'];
        $query7="INSERT INTO shippers(ShipperID,CompanyName,Phone) VALUES('$shipperId','$shippersComp','$shippersPhone')";
        $res7a=mysqli_query($cnx,$query7);
        if($res7a) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }elseif (isset($_POST['enviarSupp'])) {
        $suppID=$_POST['suppID'];
        $suppName=$_POST['suppName'];
        $suppCName=$_POST['suppCName'];
        $suppTitle=$_POST['suppTitle'];
        $suppAdd=$_POST['suppAdd'];
        $suppCity=$_POST['suppCity'];
        $suppReg=$_POST['suppReg'];
        $suppPost=$_POST['suppPost'];
        $suppCount=$_POST['suppCount'];
        $suppPhone=$_POST['suppPhone'];
        $suppFax=$_POST['suppFax'];
        $suppHome=$_POST['suppHome'];
        $query8="INSERT INTO suppliers(SupplierID,CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax,Homepage) VALUES ('$suppID','$suppName','$suppCName','$suppTitle','$suppAdd','$suppCity','$suppReg','$suppPost','$suppCount','$suppPhone','$suppFax','$suppHome')";
        $res8=mysqli_query($cnx,$query8);
        if($res8) {
            echo '<script lenguage="javascript">';
            echo 'alert("Sus Datos Han Sido Enviados!!")
            window.location="page1.php"
            </script>';
        }else{
            echo "Datos no Enviados";
        }
    }

?>