
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1>Sistama Bibliotecario</h1>
      <p>Biblioteca en linea</p>
    </div>
   
    <br class="clear" />
  </div>
</div>

<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li ><?php echo $this->Html->link('Inicio',array('controller'=>'pages','action'=>'display','home')); ?>
          </li>
          <li><a href="#">Usuario</a>
            <ul>
                                <li><?php echo $this->Html->link('Lista',array('controller'=>'students','action'=>'index')); ?>
                                  </li>
                                <li><?php echo $this->Html->link('Agregar',array('controller'=>'students','action'=>'add')); ?></li>
                               
                            </ul>
          </li>
        <li><a href="#">Prestamo</a>
             <ul>
                                <li><?php echo $this->Html->link('Lista',array('controller'=>'prestamos','action'=>'index')); ?>
                                  </li>
                                <li><?php echo $this->Html->link('Agregar',array('controller'=>'prestamos','action'=>'add')); ?></li>
                               
                            </ul>
        </li>
         <li><?php echo $this->Html->link('Devolución',array('controller'=>'devueltos','action'=>'index')); ?></li>
                        <li><a href="#">Libros </a>
                            <ul>
                                <li><?php echo $this->Html->link('Lista',array('controller'=>'books','action'=>'index')); ?></li>
                                <li><?php echo $this->Html->link('Agregar',array('controller'=>'books','action'=>'add')); ?></li>
    
                            </ul>
                        </li>   
                        <li><a href="#">Busqueda</a></li>
      </ul>
    </div>
   
    <br class="clear" />
  </div>
</div>

