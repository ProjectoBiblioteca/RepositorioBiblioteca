<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Prestamo Bibliotecario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<?php include('menu.php'); ?>

</head>
<body id="top">
<div class="container">  
<table  border="1" >
  <tr>
    <td>

<h2>Prestamo</h2>
<div class="wrapper " > 
<h3>Tipo de Busqueda Usuario</h3>
<br/>
  <select name="tipoBusqueda"  >
  <option value="1">cedula</option>
  <option value="2">carnet</option>
  <option value="3">nombre</option>
  </select>
  </div>
  
  Busqueda
  <input name="buscar" type="text" /><input name="texto" type="button" value="Buscar"/>
  
 
  </td>
    
  	<td>
    <div class=" wrapper">  
 <h4> Formulario </h4>
<form action="" method="post" name="Usuario">
Cedula:  &nbsp;
<input type="text" name="txtTel" id="txtTel" /> <br/>
Nombre:&nbsp
 <input type="text" name="txtName" id="txtName"/> <br/>
 Libros
 <select name="libros"  >
  <option value="1">a</option>
  <option value="2">t</option>
  <option value="3">n</option>
  </select>
  <br/>
  <input type="submit" value="Prestar"
</form>
</div></td>
  </tr>
 
 </table>
 </div>
<div class="wrapper col4">
  <div class="container">
    <div class="content">
    <div id="header">
    
    </div>
     <h3>Tipo de Busqueda Libro</h3>
<br/>
  <select name="libros"  >
  <option value="1">IBMS</option>
  <option value="2">Titulo</option>
  <option value="3">Autor</option>
  </select>
   Busqueda
  <input name="buscar2" type="text" /><input name="texto2" type="button" value="Buscar"/>
      <h2>Libro(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td><input type="checkbox" name="a" /> </td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td><input type="checkbox" name="f" /> </td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td><input type="checkbox" name="o" /> </td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td><input type="checkbox" name="p" /> </td>
          </tr>
        </tbody>
      </table>
      
     <input type="button" id="agregar" value="Agregar" />
    </div>
    
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="footer">
   
    
   
    
    <br class="clear" />
  </div>
</div>

<?php include('pie.php'); ?>
</body>
</html>
