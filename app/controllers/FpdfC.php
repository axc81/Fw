<?php 

class FpdfC extends Controller{

	public $fpdf;
	public function __construct(){
		$this->fpdf = new FPDF;
	}
	public function index(){
		$nama = 'ansa';

		$this->fpdf->AddPage();
		$this->fpdf->SetFont('Arial','B',16);
		$this->fpdf->Cell(50,10, $nama);
		$this->fpdf->Output();
	}
}

?>