<?php

class BooksController extends AppController{

	public $helpers = array('Html' ,'Form');
	public $components = array('Session');

	public function index(){

		$this->set('books',$this->Book->find('all'));
	}

	public function add(){

		if($this->request -> is('post')){
					if($this->Book->save($this->request->data) ){
						$this->Session->setFlash('Libro guardado');
						$this->redirect(array('action'=>'index'));
				    }else{
				    		$this->Session->setFlash('No se pudo guardar el Libro');
				    }
				}
				$materia=$this->Book->Materia->find('list');
				$editorial=$this->Book->Editorial->find('list');
				$location=$this->Book->Location->find('list');
				$this->set(compact('materia','editorial','location'));
	}


	public function edit($id = null){

			$this->Book->id = $id;
			if($this->request->is('get')){

				$this->request->data = $this->Book->read();
			}else{// es post y este guarda
				if($this->Book->save($this->request->data)){
					$this->Session->setFlash('Libro guardado');
					$this->redirect(array('action'=>'index'));
				}else{
				    		$this->Session->setFlash('No se pudo guardar el Libro');
				    }

			}
			$materia=$this->Book->Materia->find('list');
				$editorial=$this->Book->Editorial->find('list');
				$location=$this->Book->Location->find('list');
				$this->set(compact('materia','editorial','location'));

		}
		public function delete($id){
			$this->Book->id = $id;
						if($this->request->is('get')){
								throw new MethodNotAllowedException();
						}else{// es post y este guarda
							if($this->Book->delete($id)){
								$this->Session->setFlash('Libro borrado');
								$this->redirect(array('action'=>'index'));
							}else{
							    		$this->Session->setFlash('No se pudo borrar el Libro');
							    }

						}


		}

	}

?>