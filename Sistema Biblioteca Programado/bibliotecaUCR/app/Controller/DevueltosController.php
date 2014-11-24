<?php
class DevueltosController extends AppController{

	public $helpers = array('Html' ,'Form');
	public $components = array('Session');

	public function index(){

		$this->set('devueltos',$this->Devuelto->find('all'));
	}

	public function add(){

		if($this->request -> is('post')){

						$this->redirect(array('action'=>'index'));
				    }else{

				    	$this->redirect(array('action'=>'index'));
				    }
				
				
	}


	public function edit($id = null){

			$this->Devuelto->id = $id;
			if($this->request->is('get')){
				$this->redirect(array('action'=>'index'));
			}else{// es post y este guarda
				
					$this->redirect(array('action'=>'index'));
				}

			}

		
		public function delete($id){
			$this->Devuelto->id = $id;
						if($this->request->is('get')){
								throw new MethodNotAllowedException();
						}else{// es post y este guarda
							
								$this->redirect(array('action'=>'index'));
							}

						}
	

	}

?>