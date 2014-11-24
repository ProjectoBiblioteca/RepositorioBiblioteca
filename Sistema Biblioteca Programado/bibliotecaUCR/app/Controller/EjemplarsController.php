<?php 

// el nombre del archivo y la clase debe llamarse En Mayuscula,plural y
// en CamelCase
// por convencion el archivo y clase debe llevar el sufijo Controller

	class EjemplarsController extends AppController{


		//var $scaffold;

	public $helpers = array('Html' ,'Form');
	public $components = array('Session');

		public function index(){
			$this->set('ejemplars',$this->Ejemplar->find('all'));
		}

		public function add(){

			if($this->request -> is('post')){
					if($this->Ejemplar->save($this->request->data) ){
						$this->Session->setFlash('Ejemplar guardado');
						$this->redirect(array('action'=>'index'));
				    }else{
				    		$this->Session->setFlash('No se pudo guardar el Ejemplar');
				    }
				}
				$ejemplar = $this->Ejemplar->Book->find('list');
				$this->set('ejemplar',$ejemplar);
		}
		
		// funcion para modificar
		public function edit($id = null){

			$this->Ejemplar->id = $id;
			if($this->request->is('get')){

				$this->request->data = $this->Ejemplar->read();
			}else{// es post y este guarda
				if($this->Ejemplar->save($this->request->data)){
					$this->Session->setFlash('Ejemplar guardado');
					$this->redirect(array('action'=>'index'));
				}else{
				    		$this->Session->setFlash('No se pudo guardar el Ejemplar');
				    }

			}
			$ejemplar = $this->Ejemplar->Book->find('list');
				$this->set('ejemplar',$ejemplar);

		}
		public function delete($id){
				$this->Session->setFlash('No se pudo borrar el Ejemplar');
							


		}

	}

?>