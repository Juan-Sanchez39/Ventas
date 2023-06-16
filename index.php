<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
  background: rgba(0, 0, 0, 0.6);
  border-radius: 3px;
}
.center h1 {
  text-align: center;
  color: white;
  font-family: "Source Code Pro", monospace;
  text-transform: uppercase;
}
.container {
  width: 33%;
  height: 80%;
  background: rgba(255, 255, 255, 0.21);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(5.6px);
  -webkit-backdrop-filter: blur(5.6px);
  border: 1px solid rgba(255, 255, 255, 1);
}
.containerForm {
  width: 60%;
  padding-top: 30px;
  padding-bottom: 30px;
  font-size: x-large;
}
.containerForm input {
  width: 98.5%;
  font-family: 'IBM Plex Mono', monospace;
}
.imgcontainer {
  background-color: white;
  border-radius: 50%;
  width: 256px;
  margin-top: 6%;
}
.containerForm button{
  background-color: rgba(0, 0, 0, 0.1);
  font-size: large;
  border: 2px solid black;
  border-radius: 10px;
  color: black;
  padding: 4px;
  margin-top: 13px;
}
.containerForm button:hover{
  border: 2px solid white;
  color: white;
  box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255, 255, 255, 0.19);
}
h1{
  font-size: 70px;
  margin: 2%;
  color: white;
}

  </style>
<div class="center"></div>
<center>
  <h1>Ingresar Al Crud</h1>
  <div class="container">
    <form action="uscon.php" method="post">
      <div class="imgcontainer"><img src="resources/user1.png"></div>
      <div class="containerForm">
      <label for="uname"><b>Usuario</b></label><br>
      <input type="text" placeholder="Ingrese su Usuario" name="user" required><br>
      <label for="psw"><b>Contraseña</b></label><br>
      <input type="password" placeholder="Ingrese su Contraseña" name="pass" required><br>
      <button type="submit">Ingresar</button>
      </div>
    </form>
  </div>  
</center>
</body>
</html>