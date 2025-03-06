<?php 

class Hallo extends controller {
     public function index () {
         echo "Hallo My Lord" ;
      }
      public function tampilModel () {
            $data = $this -> model( 'mData')-> getData();
            echo $data;
       }
      public function tampilView () {
            $data = $this -> model( 'mData')-> getData();
            $this-> view( 'vtest', $data);
       }
}

?>