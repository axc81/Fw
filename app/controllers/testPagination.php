<?php 

	
	class testPagination extends Controller{
		
		public function index(){

		$pag = new Paginator();
		$data = array("hey","hello","awesome");

		$numbers = $pag->Paginate($data,1);
		
		$result = $pag->fetchResult();
		
		foreach ($result as $r) {
			echo '<div>'.$r.'</div>';
		}

		}
}
?>

