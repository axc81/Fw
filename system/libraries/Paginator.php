<?php 

	class Paginator{

		var $data;

		function Paginate($value, $per_page){
			$total = count($value);
			// return $total;
			if (isset($_GET['page'])) {
				$current_page = $_GET['page'];
			}
			else{
				$current_page = 1;
			}

			$counts = ceil($total / $per_page);

			$param1 = ($current_page - 1) * $per_page;
			$this->data = array_slice($value, $param1, $per_page);

			for($x=1; $x<= $counts; $x++){
				$numbers[] = $x;
			}
			return $numbers;
		}

		function fetchResult(){
			$resultsValues = $this->data;
			return $resultsValues;
		}	
	}

?>