<?php
class PrestamosController extends AppController{

	public $helpers = array('Html' ,'Form');
	public $components = array('Session');

	public function index(){

		$this->set('prestamos',$this->Prestamo->find('all',array('conditions'=>array('Prestamo.devuelto'=>'0'))));
	}

	public function add(){

		if($this->request -> is('post')){
					if($this->Prestamo->save($this->request->data) ){
						$this->Session->setFlash('Prestamo exitoso');
						$this->redirect(array('action'=>'index'));
				    }else{
				    		$this->Session->setFlash('No se pudo realizar el Prestamo');
				    }
				}
				$book=$this->Prestamo->Book->find('list');
				$student=$this->Prestamo->Student->find('list');
				
				$this->set(compact('book','student'));
	}


	public function edit($id = null){

			$this->Prestamo->id = $id;
			if($this->request->is('get')){

				$this->request->data = $this->Prestamo->read();
			}else{// es post y este guarda
				if($this->Prestamo->save($this->request->data)){
					$this->Session->setFlash('Devolucion realizada');
					$this->redirect(array('action'=>'index'));
				}else{
				    		$this->Session->setFlash('No se pudo devolver el libro');
				    }

			}
			$book=$this->Prestamo->Book->find('list');
				$student=$this->Prestamo->Student->find('list');
				
				$this->set(compact('book','student'));

		}
		public function delete($id){
			$this->Prestamo->id = $id;
						if($this->request->is('get')){
								throw new MethodNotAllowedException();
						}else{// es post y este guarda
							
								$this->redirect(array('action'=>'index'));
							}

						}

	}

?>