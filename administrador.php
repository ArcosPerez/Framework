<!DOCTYPE html>
<html>
<head>
<title>proyecto de framework</title>
<link rel="stylesheet" type="text/css" href="estilos.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(":file").css("background-color", "red");
});
</script>
</head>
<body >
<div class="titulo">
<h1 >Compu TEC</h1>
</div>

<div class="meu">
    <form action="accion">
        <p>Nombre: <input type="text" name="nombre" size="20" placeholder="nombre del producto"></p>
        <p>Cantidad: <input type="text" name="nombre" size="18" placeholder="   digite el número"></p>
        <p>Marca: <input type="text" name="nombre" size="15" placeholder="  SAMSUNG"></p>
        <p>Codigo: <input type="text" name="nombre" size="15" placeholder="012-2812-541"></p>
        <label for="start">Fecha registrado:</label>
        <input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
    </form>
    <form action="">
      imagen: <input type="file" name="myfile">
    </form>
    <button><samp onclick="newElement()" class="addBtn">Agregar</samp> </button>  
  </div>

  <div class="imagen">
<img src="imagen.jpg" alt="Trulli" width="250" height="150">
</div>


<div>
<table class="registro">
  <tr>
    <th>Nombre</th>
    <th>Cantidad</th>
    <th>Marca</th>
    <th>Codigo</th>
    <th>Fecha</th>
  </tr>
  <tr>
    <td>Telefono</td>
    <td>4</td>
    <td>asus</td>
    <td>102466</td>
    <td>2018-08-24</td>
  </tr>
  <tr>
    <td>laptop</td>
    <td>3</td>
    <td>asus</td>
    <td>102466</td>
    <td>2017-08-24</td>
  </tr>
  </table>

</div>



</body>
</html>