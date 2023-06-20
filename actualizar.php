<!-- ANALIZAR ERRORES
if (!$rSeis) {
    printf("Errormessage: %s\n", mysqli_error($cnx));
  } -->
<title>Gestion de Pedidos</title>
<link rel="icon" href="resources/icon.png" type="image/x-icon">
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

  .formContainer form {
    width: 50%;
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
    color: white;
  }

  .formContainer form input {
    width: 98.5%;
    font-family: 'IBM Plex Mono', monospace;
    border-radius: 6px;
    font-size: medium;
  }

  .formContainer label {
    font-size: large;
    color: white;
  }
</style>
<div class="center"></div>
<?php
include('bd.php');

if (isset($_GET['idSupp'])) {
  $id = $_GET['idSupp'];
  $query4 = "SELECT * FROM suppliers WHERE SupplierID='" . $id . "'";
  $res = mysqli_query($cnx, $query4);
  $rowS = mysqli_fetch_assoc($res);
  $spID = $rowS['SupplierID'];
  $spCN = $rowS['CompanyName'];
  $spCoN = $rowS['ContactName'];
  $spCT = $rowS['ContactTitle'];
  $spAd = $rowS['Address'];
  $spCi = $rowS['City'];
  $spRe = $rowS['Region'];
  $spPC = $rowS['PostalCode'];
  $spCo = $rowS['Country'];
  $spPh = $rowS['Phone'];
  $spF = $rowS['Fax'];
  $spH = $rowS['HomePage'];
?>

  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>SUPPLIERS</h1>
        <label>Supplier ID</label><br>
        <input type="number" name="suppID" value="<?php echo $spID; ?>"><br>
        <label>Company Name</label><br>
        <input type="text" name="suppName" value="<?php echo $spCN; ?>"><br>
        <label>Contact Name</label><br>
        <input type="text" name="suppCName" value="<?php echo $spCoN; ?>"><br>
        <label>Contact Title</label><br>
        <input type="text" name="suppTitle" value="<?php echo $spCT; ?>"><br>
        <label>Address</label><br>
        <input type="text" name="suppAdd" value="<?php echo $spAd; ?>"><br>
        <label>City</label><br>
        <input type="text" name="suppCity" value="<?php echo $spCi; ?>"><br>
        <label>Region</label><br>
        <input type="text" name="suppReg" value="<?php echo $spRe; ?>"><br>
        <label>Postal Code</label><br>
        <input type="text" name="suppPost" value="<?php echo $spPC; ?>"><br>
        <label>Country</label><br>
        <input type="text" name="suppCount" value="<?php echo $spCo; ?>"><br>
        <label>Phone</label><br>
        <input type="text" name="suppPhone" value="<?php echo $spPh; ?>"><br>
        <label>Fax</label><br>
        <input type="text" name="suppFax" value="<?php echo $spF; ?>"><br>
        <label>Home Page</label><br>
        <input type="text" name="suppHome" value="<?php echo $spH; ?>"><br>
        <input type="hidden" name="suppIDP" value="<?php echo $spID; ?>">
        <input type="submit" value="Enviar" name="enviarSupp">
      </form>
    </div>
  </center>
<?php
}

if (isset($_GET['idShip'])) {
  $idSh = $_GET['idShip'];
  $query2 = "SELECT * FROM shippers WHERE ShipperID='" . $idSh . "'";
  $res2 = mysqli_query($cnx, $query2);
  $row = mysqli_fetch_assoc($res2);
  $shID = $row['ShipperID'];
  $shCN = $row['CompanyName'];
  $shP = $row['Phone'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>SHIPPERS</h1>
        <label>Shipper ID</label><br>
        <input type="number" name="shipperId" value="<?php echo $shID; ?>"><br>
        <label>Company Name</label><br>
        <input type="text" name="shippersComp" value="<?php echo $shCN; ?>"><br>
        <label>Phone</label><br>
        <input type="text" name="shippersPhone" value="<?php echo $shP; ?>"><br>
        <input type="hidden" name="shIDP" value="<?php echo $shID; ?>">
        <input type="submit" value="Enviar" name="enviarShipp">
      </form>
    </div>
  </center>
<?php
}

if (isset($_GET['idProd'])) {
  $idPr = $_GET['idProd'];
  $query3 = "SELECT * FROM products";
  $res3 = mysqli_query($cnx, $query3);
  $row = mysqli_fetch_assoc($res3);
  $idPrs = $row['ProductID'];
  $prN = $row['ProductName'];
  $prSId = $row['SupplierID'];
  $prCatID = $row['CategoryID'];
  $prQ = $row['QuantityPerUnit'];
  $prUP = $row['UnitPrice'];
  $prUS = $row['UnitsInStock'];
  $prUO = $row['UnitsOnOrder'];
  $prRL = $row['ReorderLevel'];
  $prDis = $row['Discontinued'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>PRODUCTS</h1>
        <label>Product ID</label><br>
        <input type="number" name="prodID" value="<?php echo $idPrs; ?>"><br>
        <label>Product Name</label><br>
        <input type="text" name="prodName" value="<?php echo $prN; ?>"><br>
        <label>Supplier ID</label><br>
        <input type="number" name="prodSuppID" value="<?php echo $prSId; ?>"><br>
        <label>Category ID</label><br>
        <input type="number" name="prodCatID" value="<?php echo $prCatID; ?>"><br>
        <label>Quantity Per Unit</label><br>
        <input type="number" name="prodUnit" value="<?php echo $prQ; ?>"><br>
        <label>Unit Price</label><br>
        <input type="number" name="prodUPrice" value="<?php echo $prUP; ?>"><br>
        <label>Units in Stock</label><br>
        <input type="number" name="prodStock" value="<?php echo $prUS; ?>"><br>
        <label>Units On Order</label><br>
        <input type="number" name="prodUnitsOrder" value="<?php echo $prUO; ?>"><br>
        <label>Reorder Level</label><br>
        <input type="text" name="prodReord" value="<?php echo $prRL; ?>"><br>
        <label>Discontinued</label><br>
        <input type="text" name="prodDisc" value="<?php echo $prDis; ?>"><br>
        <input type="hidden" name="prodIDP" value="<?php echo $idPrs; ?>">
        <input type="submit" id="boton14" value="Enviar" name="enviarProd">
      </form>
    </div>
  </center>
<?php
}
if (isset($_GET['idOr'])) {
  $idOr = $_GET['idOr'];
  $querys = "SELECT * FROM orders";
  $res2 = mysqli_query($cnx, $querys);
  $row = mysqli_fetch_assoc($res2);
  $orid = $row['OrderID'];
  $orcid = $row['CustomerID'];
  $oreid = $row['EmployeeID'];
  $ordate = $row['OrderDate'];
  $orRD = $row['RequiredDate'];
  $orsd = $row['ShippedDate'];
  $orShid = $row['ShipperID'];
  $orShV = $row['ShipVia'];
  $orFr = $row['Freight'];
  $orSN = $row['ShipName'];
  $orAdd = $row['ShipAddress'];
  $orCit = $row['ShipCity'];
  $orreg = $row['ShipRegion'];
  $orPC = $row['ShipPostalCode'];
  $orSCount = $row['ShipCountry'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>ORDERS</h1>
        <label>Order ID</label><br>
        <input type="number" name="ordsID" value="<?php echo $orid; ?>"><br>
        <label>Customer ID</label><br>
        <input type="number" name="ordsCustID" value="<?php echo $orcid; ?>"><br>
        <label>Employee ID</label><br>
        <input type="number" name="ordsEmpID" value="<?php echo $oreid; ?>"><br>
        <label>Order Date</label><br>
        <input type="date" name="ordsDate" value="<?php echo $ordate; ?>"><br>
        <label>Required Date</label><br>
        <input type="date" name="ordsReqDate" value="<?php echo $orRD; ?>"><br>
        <label>Shipped Date</label><br>
        <input type="date" name="ordsShipDate" value="<?php echo $orsd; ?>"><br>
        <label>Shipper ID</label><br>
        <input type="number" name="ordsShipperID" value="<?php echo $orShid; ?>"><br>
        <label>Ship Via</label><br>
        <input type="text" name="ordsShipV" value="<?php echo $orShV; ?>"><br>
        <label>Freight</label><br>
        <input type="text" name="ordsFre" value="<?php echo $orFr; ?>"><br>
        <label>Ship Name</label><br>
        <input type="text" name="ordsShipN" value="<?php echo $orSN; ?>"><br>
        <label>Ship Address</label><br>
        <input type="text" name="ordsShipAd" value="<?php echo $orAdd; ?>"><br>
        <label>Ship City</label><br>
        <input type="text" name="ordsShipCit" value="<?php echo $orCit; ?>"><br>
        <label>Ship Region</label><br>
        <input type="text" name="ordsShipReg" value="<?php echo $orreg; ?>"><br>
        <label>Ship Postal Code</label><br>
        <input type="text" name="ordShipPost" value="<?php echo $orPC; ?>"><br>
        <label>Ship Country</label><br>
        <input type="text" name="ordsShipCo" value="<?php echo $orSCount; ?>"><br>
        <input type="hidden" name="ordsIDP" value="<?php echo $orid; ?>">
        <input type="submit" id="boton13" value="Enviar" name="enviarOrds"><br>
      </form>
    </div>
  </center>
<?php
}
if (isset($_GET['idOD'])) {
  $idOD = $_GET['idOD'];
  $query2 = "SELECT * FROM orderdetails WHERE OrderDetails='$idOD'";
  $res2 = mysqli_query($cnx, $query2);
  $row = mysqli_fetch_assoc($res2);
  $idpOrds = $row['OrderDetails'];
  $idODS = $row['OrderID'];
  $prODS = $row['ProductID'];
  $upODS = $row['UnitPrice'];
  $qODS = $row['Quantity'];
  $dODS = $row['Discount'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>ORDER DETAILS</h1>
        <label>Order ID</label><br>
        <input type="number" name="ordID" value="<?php echo $idODS; ?>"><br>
        <label>Product ID</label><br>
        <input type="number" name="ordPID" value="<?php echo $prODS; ?>"><br>
        <label>Unit Price</label><br>
        <input type="number" name="ordPrice" value="<?php echo $upODS; ?>"><br>
        <label>Quantity</label><br>
        <input type="number" name="ordQuant" value="<?php echo $qODS; ?>"><br>
        <label>Discount</label><br>
        <input type="number" name="ordDisc" value="<?php echo $dODS; ?>"><br>
        <input type="hidden" name="ordsDP" value="<?php echo $idpOrds; ?>">
        <input type="submit" id="boton12" value="Enviar" name="enviarOrdDet">
      </form>
    </div>
  </center>
<?php
}

if (isset($_GET['idE'])) {
  $idE = $_GET['idE'];
  $query2 = "SELECT * FROM employees WHERE EmployeeID='$idE'";
  $res2 = mysqli_query($cnx, $query2);
  $row = mysqli_fetch_assoc($res2);
  $eid = $row['EmployeeID'];
  $eln = $row['LastName'];
  $efn = $row['FirstName'];
  $et = $row['Title'];
  $etc = $row['TitleOfCourtesy'];
  $ebd = $row['BirthDate'];
  $ehd = $row['HireDate'];
  $eas = $row['Address'];
  $eci = $row['City'];
  $ere = $row['Region'];
  $epc = $row['PostalCode'];
  $eco = $row['Country'];
  $ehp = $row['HomePhone'];
  $ee = $row['Extension'];
  $eph = $row['Photo'];
  $en = $row['Notes'];
  $ert = $row['ReportsTo'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>EMPLOYEES</h1>
        <label>Employee ID</label><br>
        <input type="number" name="empID" value="<?php echo $eid; ?>"><br>
        <label>Last Name</label><br>
        <input type="text" name="empLName" value="<?php echo $eln; ?>"><br>
        <label>First Name</label><br>
        <input type="text" name="empFName" value="<?php echo $efn; ?>"><br>
        <label>Title</label><br>
        <input type="text" name="empTitle" value="<?php echo $et; ?>"><br>
        <label>Title Of Courtesy</label><br>
        <input type="text" name="empTCourt" value="<?php echo $etc; ?>"><br>
        <label>Birth Date</label><br>
        <input type="date" name="empBirth" value="<?php echo $ebd; ?>"><br>
        <label>Hire Date</label><br>
        <input type="date" name="empHire" value="<?php echo $ehd; ?>"><br>
        <label>Address</label><br>
        <input type="text" name="empAddress" value="<?php echo $eas; ?>"><br>
        <label>City</label><br>
        <input type="text" name="empCity" value="<?php echo $eci; ?>"><br>
        <label>Region</label><br>
        <input type="text" name="empRegion" value="<?php echo $ere; ?>"><br>
        <label>Postal Code</label><br>
        <input type="text" name="empPost" value="<?php echo $epc; ?>"><br>
        <label>Country</label><br>
        <input type="text" name="empCountry" value="<?php echo $eco; ?>"><br>
        <label>HomePhone</label><br>
        <input type="text" name="empHPhone" value="<?php echo $ehp; ?>"><br>
        <label>Extension</label><br>
        <input type="text" name="empExt" value="<?php echo $ee; ?>"><br>
        <label>Photo</label><br>
        <input type="text" name="empPhoto" value="<?php echo $eph; ?>"><br>
        <label>Notes</label><br>
        <input type="text" name="empNotes" value="<?php echo $en; ?>"><br>
        <label>Reports To</label><br>
        <input type="text" name="empReports" value="<?php echo $ert; ?>"><br>
        <input type="hidden" name="empIDP" value="<?php echo $eid; ?>">
        <input type="submit" id="boton11" value="Enviar" name="enviarEmp"><br>
      </form>
    </div>
  </center>
<?php
}

if (isset($_GET['idCust'])) {
  $idCust = $_GET['idCust'];
  $query2 = "SELECT * FROM customers WHERE CustomerID='$idCust'";
  $res2 = mysqli_query($cnx, $query2);
  $row = mysqli_fetch_assoc($res2);
  $idC = $row['CustomerID'];
  $idCN = $row['CompanyName'];
  $idCoN = $row['ContactName'];
  $idCT = $row['ContactTitle'];
  $idA = $row['Address'];
  $idCi = $row['City'];
  $idR = $row['Region'];
  $idPC = $row['PostalCode'];
  $idCou = $row['Country'];
  $idPho = $row['Phone'];
  $idFax = $row['Fax'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>CUSTOMERS</h1>
        <input type="hidden" name="custIDP" value="<?php echo $idC; ?>">
        <label>Customer ID</label><br>
        <input type="number" name="custID" placeholder="Enter your ID" value="<?php echo $idC; ?>"><br>
        <label>Company Name</label><br>
        <input type="text" name="custCName" placeholder="Enter your Company Name" value="<?php echo $idCN; ?>"><br>
        <label>Contact Name</label><br>
        <input type="text" name="custConName" placeholder="Enter your Contact Name" value="<?php echo $idCoN; ?>"><br>
        <label>Contact Title</label><br>
        <input type="text" name="custConTitle" placeholder="Enter your Contact Title" value="<?php echo $idCT; ?>"><br>
        <label>Address</label><br>
        <input type="text" name="custAddress" placeholder="Enter your Address" value="<?php echo $idA; ?>"><br>
        <label>City</label><br>
        <input type="text" name="custCity" placeholder="Enter your City" value="<?php echo $idCi; ?>"><br>
        <label>Region</label><br>
        <input type="text" name="custRegion" placeholder="Enter your Region" value="<?php echo $idR; ?>"><br>
        <label>Postal Code</label><br>
        <input type="text" name="custPostal" placeholder="Enter your Postal Code" value="<?php echo $idPC; ?>"><br>
        <label>Country</label><br>
        <input type="text" name="custCountry" placeholder="Enter your Country" value="<?php echo $idCou; ?>"><br>
        <label>Phone</label><br>
        <input type="text" name="custPhone" placeholder="Enter your Phone" value="<?php echo $idPho; ?>"><br>
        <label>Fax</label><br>
        <input type="text" name="custFax" placeholder="Enter your Fax" value="<?php echo $idFax; ?>"><br>
        <input type="submit" id="boton10" value="Enviar" name="enviarCust">
      </form>
    </div>
  </center>
<?php
}

if (isset($_GET['idCat'])) {
  $idCat = $_GET['idCat'];
  $query2 = "SELECT * FROM categories WHERE CategoryID='$idCat'";
  $res2 = mysqli_query($cnx, $query2);
  $row = mysqli_fetch_assoc($res2);
  $catID = $row['CategoryID'];
  $catN = $row['CategoryName'];
  $catDes = $row['Description'];
  $catPic = $row['Picture'];
?>
  <center>
    <div class="formContainer">
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>CATEGORIES</h1>
        <input type="hidden" name="catIDP" value="<?php echo $catID; ?>">
        <label>Category ID</label><br>
        <input type="number" name="catID" placeholder="Enter your ID" value="<?php echo $catID; ?>"><br>
        <label>Category Name</label><br>
        <input type="text" name="catName" placeholder="Enter your Category Name" value="<?php echo $catN; ?>"><br>
        <label>Descripcion</label><br>
        <input type="text" name="catDescr" placeholder="Enter your Description" value="<?php echo $catDes; ?>"><br>
        <label>Picture</label><br>
        <input type="text" name="catPic" placeholder="Enter your Picture" value="<?php echo $catPic; ?>"><br>
        <input type="submit" id="boton9" class="env" value="Enviar" name="enviarCat">
      </form>
    </div>
  </center>
<?php
}


// FORMULARIO ENVIADO

if (isset($_POST['enviarSupp'])) {
  $spID = $_POST['suppIDP'];
  $suppID = $_POST['suppID'];
  $suppName = $_POST['suppName'];
  $suppCName = $_POST['suppCName'];
  $suppTitle = $_POST['suppTitle'];
  $suppAdd = $_POST['suppAdd'];
  $suppCity = $_POST['suppCity'];
  $suppReg = $_POST['suppReg'];
  $suppPost = $_POST['suppPost'];
  $suppCount = $_POST['suppCount'];
  $suppPhone = $_POST['suppPhone'];
  $suppFax = $_POST['suppFax'];
  $suppHome = $_POST['suppHome'];
  $query = "UPDATE suppliers
SET SupplierID='$suppID',CompanyName='$suppName',ContactName='$suppCName',ContactTitle='$suppTitle',Address='$suppAdd',City='$suppCity',Region='$suppReg',PostalCode='$suppPost',Country='$suppCount',Phone='$suppPhone',Fax='$suppFax',Homepage='$suppHome' WHERE SupplierID='$spID'";
  $resul = mysqli_query($cnx, $query);
  if ($resul) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Actualizados!!")
  window.location="page1.php"
  </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos No Pudieron Ser Actualizados!!")
  window.location="page1.php"
  </script>';
  }
}
if (isset($_POST['enviarShipp'])) {
  $shipIDP = $_POST['shIDP'];
  $shipID = $_POST['shipperId'];
  $shipCN = $_POST['shippersComp'];
  $shipP = $_POST['shippersPhone'];
  $query3 = "UPDATE shippers
SET ShipperID='$shipID', CompanyName='$shipCN', Phone='$shipP' WHERE ShipperID='$shipIDP'";
  $resul = mysqli_query($cnx, $query3);
  if ($resul) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Actualizados!!")
  window.location="page1.php"
  </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos No Pudieron Ser Actualizados!!")
  window.location="page1.php"
  </script>';
  }
}

if (isset($_POST['enviarProd'])) {
  $prodIDP = $_POST['prodIDP'];
  $prodID = $_POST['prodID'];
  $prodName = $_POST['prodName'];
  $prodSuppID = $_POST['prodSuppID'];
  $prodCatID = $_POST['prodCatID'];
  $prodUnit = $_POST['prodUnit'];
  $prodUPrice = $_POST['prodUPrice'];
  $prodStock = $_POST['prodStock'];
  $prodUnitsOrder = $_POST['prodUnitsOrder'];
  $prodReord = $_POST['prodReord'];
  $prodDisc = $_POST['prodDisc'];
  $query3 = "UPDATE products
SET ProductID='$prodID', ProductName='$prodName', SupplierID='$prodSuppID',CategoryID='$prodCatID',QuantityPerUnit='$prodUnit',UnitPrice='$prodUPrice',UnitsInStock='$prodStock',UnitsOnOrder='$prodUnitsOrder',ReorderLevel='$prodReord',Discontinued='$prodDisc' WHERE ProductID='$prodIDP'";
  $resul = mysqli_query($cnx, $query3);
  if ($resul) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Actualizados!!")
  window.location="page1.php"
  </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos No Pudieron Ser Actualizados!!")
  window.location="page1.php"
  </script>';
  }
}

if (isset($_POST['enviarOrds'])) {
  $osID = $_POST['ordsID'];
  $osIDP = $_POST['ordsIDP'];
  $osCID = $_POST['ordsCustID'];
  $osEID = $_POST['ordsEmpID'];
  $osDate = $_POST['ordsDate'];
  $osRDate = $_POST['ordsReqDate'];
  $osSDate = $_POST['ordsShipDate'];
  $osShipID = $_POST['ordsShipperID'];
  $osShipV = $_POST['ordsShipV'];
  $osFre = $_POST['ordsFre'];
  $osShipN = $_POST['ordsShipN'];
  $osShipAd = $_POST['ordsShipAd'];
  $osShipC = $_POST['ordsShipCit'];
  $osShipR = $_POST['ordsShipReg'];
  $osShipP = $_POST['ordShipPost'];
  $osShipCo = $_POST['ordsShipCo'];
  $query5 = "UPDATE orders 
    SET OrderID='$osID',CustomerID='$osCID',EmployeeID='$osEID',OrderDate='$osDate',RequiredDate='$osRDate',ShippedDate='$osSDate',ShipperID='$osShipID',ShipVia='$osShipV',Freight='$osFre',ShipName='$osShipN',ShipAddress='$osShipAd',ShipCity='$osShipC',ShipRegion='$osShipR',ShipPostalCode='$osShipP',ShipCountry='$osShipCo' WHERE OrderID='$osIDP'";
  $rSeis = mysqli_query($cnx, $query5);
  if ($rSeis) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Enviados!!")
             window.location="page1.php"
             </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos NO Han Sido Enviados!!")
             window.location="page1.php"
             </script>';;
  }
}

if (isset($_POST['enviarOrdDet'])) {
  $oIDP = $_POST['ordsDP'];
  $oID = $_POST['ordID'];
  $oPID = $_POST['ordPID'];
  $oPri = $_POST['ordPrice'];
  $oQu = $_POST['ordQuant'];
  $oDisc = $_POST['ordDisc'];
  $query4 = "UPDATE orderdetails 
  SET OrderID='$oID',ProductID='$oPID',UnitPrice='$oPri',Quantity='$oQu',Discount='$oDisc' WHERE OrderDetails='$oIDP'";
  $re = mysqli_query($cnx, $query4);
  if ($re) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos NO Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  }
}

if (isset($_POST['enviarEmp'])) {
  $eIDP = $_POST['empIDP'];
  $eID = $_POST['empID'];
  $eLName = $_POST['empLName'];
  $eFName = $_POST['empFName'];
  $eTit = $_POST['empTitle'];
  $eTCourt = $_POST['empTCourt'];
  $eBirth = $_POST['empBirth'];
  $eHire = $_POST['empHire'];
  $eAdd = $_POST['empAddress'];
  $eCity = $_POST['empCity'];
  $eReg = $_POST['empRegion'];
  $ePost = $_POST['empPost'];
  $eCount = $_POST['empCountry'];
  $eHPhone = $_POST['empHPhone'];
  $eExt = $_POST['empExt'];
  $ePhot = $_POST['empPhoto'];
  $eNotes = $_POST['empNotes'];
  $eRep = $_POST['empReports'];
  $query3 = "UPDATE employees SET EmployeeID='$eID',LastName='$eLName',FirstName='$eFName',Title='$eTit',TitleOfCourtesy='$eTCourt',BirthDate='$eBirth',HireDate='$eHire',Address='$eAdd',City='$eCity',Region='$eReg',PostalCode='$ePost',Country='$eCount',HomePhone='$eHPhone',Extension='$eExt',Photo='$ePhot',Notes='$eNotes',ReportsTo='$eRep' WHERE EmployeeID='$eIDP'";
  $resul = mysqli_query($cnx, $query3);
  if ($resul) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Actualizados!!")
  window.location="page1.php"
  </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos No Pudieron Ser Actualizados!!")
  window.location="page1.php"
  </script>';
  }
}


if (isset($_POST['enviarCust'])) {
  $custID = $_POST['custID'];
  $custIDP = $_POST['custIDP'];
  $custName = $_POST['custCName'];
  $custConName = $_POST['custConName'];
  $custConTitle = $_POST['custConTitle'];
  $custAddress = $_POST['custAddress'];
  $custCity = $_POST['custCity'];
  $custRegion = $_POST['custRegion'];
  $custPostal = $_POST['custPostal'];
  $custCountry = $_POST['custCountry'];
  $custPhone = $_POST['custPhone'];
  $custFax = $_POST['custFax'];
  $query2 = "UPDATE customers SET CustomerID='$custID',CompanyName='$custName',ContactName='$custConName',ContactTitle='$custConTitle',Address='$custAddress',City='$custCity',Region='$custRegion',PostalCode='$custPostal',Country='$custCountry',Phone='$custPhone',Fax='$custFax' WHERE CustomerID='$custIDP'";
  $ress = mysqli_query($cnx, $query2);
  if ($ress) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos NO Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  }
}

if (isset($_POST['enviarCat'])) {
  $catIDP = $_POST['catIDP'];
  $catID = $_POST['catID'];
  $catName = $_POST['catName'];
  $catDescr = $_POST['catDescr'];
  $catPic = $_POST['catPic'];
  $query = "UPDATE categories SET CategoryID='$catID',CategoryName='$catName',Description='$catDescr',Picture='$catPic' WHERE CategoryID='$catIDP'";
  $res = mysqli_query($cnx, $query);
  if ($res) {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  } else {
    echo '<script lenguage="javascript">';
    echo 'alert("Sus Datos NO Han Sido Enviados!!")
          window.location="page1.php"
          </script>';
  }
}
?>