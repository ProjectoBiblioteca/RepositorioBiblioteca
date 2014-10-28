<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
    <head profile="http://gmpg.org/xfn/11">
        <title>Modern Business</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="imagetoolbar" content="no" />
        <link rel="stylesheet" href="styles/layout.css" type="text/css" />
        <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="scripts/jquery.nivo.slider.setup.js"></script>
        <!--[if lt IE 8]>
        <style type="text/css" media="screen">.nivo-controlNav a{float:left;}</style>
        <![endif]-->
    </head>
    <body id="top">
        <?php include('menu.php') ?>

        <div id="featured_slide">  
            <h1>Insertar Libro</h1>
            <table>
                <tr>
                    <td>Nombre:&nbsp;</td>
                    <td> <input type="text" name="txtName" id="txtName"/> </td>
                </tr>
                <tr>
                    <td>Autor:&nbsp;</td>
                    <td><input type="text" name="txtApellidos" id="txtApellidos" /></td>
                </tr>
                <tr>
                    <td>Idioma:&nbsp;</td>
                    <td><input type="text" name="txtCarné" id="txtCarné" /></td>
                </tr>
                <tr>
                    <td>Materia:&nbsp;</td>
                    <td><input type="text" name="txtId" id="txtId" /></td>
                </tr>
                <tr>
                    <td>Editorial:&nbsp;</td>
                    <td><input type="text" name="txtTipo" id="txtWage" /></td>
                </tr>
                <tr>
                    <td>ISBN:&nbsp;</td>
                    <td><input type="text" name="txtTel" id="txtTel" /></td>
                </tr>
                <tr>
                    <td>Localización:&nbsp;</td>
                    <td><input type="text" name="txtDirección" id="txtDirección" /></td>
                </tr>


            </table>
            <tr>
                    <td></td>
                    <td> <input type="submit" name="btnInsert" id="btnInsert" value="Insert"/> </td>
                </tr>
        </div>
        <div id="featured_intro">
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col4">
            <div id="latest">
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
         <?php include('pie.php') ?>
    </body>
</html>
