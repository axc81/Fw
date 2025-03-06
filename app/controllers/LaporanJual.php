<?php 

class LaporanJual extends Controller{

	public $pdf;

	public function __construct(){
		$this->pdf = new FPDF;
	}

	public function index(){
		$data['penjualan'] = $this->model('Mkeranjang')->getLaporan();

        $this->pdf->AddPage();
		$this->pdf->SetFont('Arial', 'B', '16');

		foreach ($data['penjualan'] as $report) {
			$this->pdf->Cell(20,10,$report['uId']);
			$this->pdf->Cell(20,10,$report['pId']);	
			$this->pdf->Cell(20,10,$report['total']);	
		}
		$this->pdf->Output();
	}
}

?>
