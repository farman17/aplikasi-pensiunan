$(document).ready(function () {

	// ------------------------------------------------------------------------------------------
	// start
	// ------------------------------------------------------------------------------------------
	var root = window.location.origin + '/sigaka/';

	// ------------------------------------------------------------------------------------------

	$('#feedback').delay(3000).fadeOut('slow');

	// ------------------------------------------------------------------------------------------
	// gaji
	// ------------------------------------------------------------------------------------------

	$('.gaji-edit').click(function () {
		var id = $(this).val();
		var getUrl = root + 'gaji/updateForm/' + id;
		var html = '';
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				console.log(response);
				if (response != null){
					html += '' +
						'<input type="hidden" value="'+id+'" name="id">' +
						'<fieldset class="form-group floating-label-form-group">' +
						'<label for="jabatan">Jabatan</label>' +
						'<input type="text" class="form-control" name="jabatan" id="jabatan" value="'+response.gaji_jabatan+'" placeholder="Jabatan" autocomplete="off">' +
						'</fieldset>' +
						'<fieldset class="form-group floating-label-form-group">' +
						'<label for="gaji">Gaji</label>' +
						'<input type="text" class="form-control" name="gaji" id="gaji" value="'+response.gaji_jumlah+'" placeholder="Jumlah gaji" autocomplete="off">' +
						'</fieldset>';

					console.log(html);
					$('#updateformgaji').html(html);
				}
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		});
	});

	// ------------------------------------------------------------------------------------------

	$('.gaji-hapus').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'gaji/hapus/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>';
		$('#hapusgaji').html(html);
	});

	// ------------------------------------------------------------------------------------------
	// karyawan
	// ------------------------------------------------------------------------------------------

	$('.karyawan-lihat').click(function (e) {
		e.preventDefault();
		var id = $(this).val();
		var getUrl = root + 'karyawan/lihat/' + id;
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				if (response != null){
					$('#lihat_nama').val(response.karyawan_nama);
					$('#lihat_tempat').val(response.karyawan_tempat_lahir);
					$('#lihat_tl').val(response.karyawan_tanggal_lahir);
					$('#lihat_alamat').val(response.karyawan_alamat);
					$('#lihat_nohp').val(response.karyawan_nomor_hp);
					$('#lihat_tg').val(response.karyawan_tanggal_gabung);
					$('#lihat_jabatan_karyawan').val(response.gaji_jabatan);
					$('#lihat_gaji_pokok').val(formatRupiah(response.gaji_jumlah,'Rp. '));
					console.log(response);
				}
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		});
	});

	// ------------------------------------------------------------------------------------------

	$('.karyawan-edit').click(function (e) {
		e.preventDefault();
		var id = $(this).val();
		var getUrl = root + 'karyawan/lihat/' + id;
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				if (response != null){
					$('#karyawan_id').val(response.karyawan_id);
					$('#edit_nama').val(response.karyawan_nama);
					$('#edit_tempat').val(response.karyawan_tempat_lahir);
					$('#edit_tl').val(response.karyawan_tanggal_lahir);
					$('#edit_alamat').val(response.karyawan_alamat);
					$('#edit_nohp').val(response.karyawan_nomor_hp);
					$('#edit_tg').val(response.karyawan_tanggal_gabung);
					$('#edit_jabatan_karyawan').val(response.gaji_jabatan);
					$('#edit_gaji_pokok').val(formatRupiah(response.gaji_jumlah,'Rp. '));
					console.log(response);
				}
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		});
	})

	// ------------------------------------------------------------------------------------------

	$('.karyawan-hapus').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'karyawan/hapus/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>';
		$('#hapuskaryawan').html(html);
	});

	// ------------------------------------------------------------------------------------------
	// end
	// ------------------------------------------------------------------------------------------


});

// ------------------------------------------------------------------------------------------
// Fungsi-fungsi
// ------------------------------------------------------------------------------------------

function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
