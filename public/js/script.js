$(function(){
	$('.tombolTambahData').on('click', function(){
		('#formModal').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');

	});


	$('.tampilModalUbah').on('click', function(){
		$('#myModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/anscript/public/Keranjang/Add');

		const id = $(this).data('id');
		// console.log(id); 


		$.ajax({
			url: 'http://localhost/anscript/public/Keranjang/getAdd',
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#quantity').val(data.quantity);
				$('#nim').val(data.nim);
				$('#jurusan').val(data.jurusan); 
				$('#id').val(data.id); 
			} 
		});
	});
});