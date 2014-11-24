<?php 

// el nombre del archivo y la clase debe llamarse En Mayuscula,plural y
// en CamelCase
// por convencion el archivo y clase debe llevar el sufijo Controller

	class StudentsController extends AppController{


		//var $scaffold;

	public $helpers = array('Html' ,'Form');
	public $components = array('Session');

		public function index(){
			$this->set('students',$this->Student->find('all'));
		}

		public function add(){

			if($this->request -> is('post')){
					if($this->Student->save($this->request->data) ){
						$this->Session->setFlash('Usuario guardado');
						$this->redirect(array('action'=>'index'));
				    }else{
				    		$this->Session->setFlash('No se pudo guardar el Estudiante');
				    }
				}
				$tipousuario = $this->Student->TipoUsuario->find('list');
				$this->set('tipousuario',$tipousuario);
		}
		
		// funcion para modificar
		public function edit($id = null){

			$this->Student->id = $id;
			if($this->request->is('get')){

				$this->request->data = $this->Student->read();
			}else{// es post y este guarda
				if($this->Student->save($this->request->data)){
					$this->Session->setFlash('Usuario guardado');
					$this->redirect(array('action'=>'index'));
				}else{
				    		$this->Session->setFlash('No se pudo guardar el Usuario');
				    }

			}
			$tipousuario = $this->Student->TipoUsuario->find('list');

							$this->set('tipousuario',$tipousuario);

		}
		public function delete($id){
			$this->Student->id = $id;
						if($this->request->is('get')){
								throw new MethodNotAllowedException();
						}else{// es post y este guarda
							if($this->Student->delete($id)){
								$this->Session->setFlash('Usuario borrado');
								$this->redirect(array('action'=>'index'));
							}else{
							    		$this->Session->setFlash('No se pudo borrar el Usuario');
							    }

						}


		}

	}

?>