$(document).ready(function () {

	// ------------------------------------------------------------------------------------------
	// start
	// ------------------------------------------------------------------------------------------
	var root = window.location.origin + '/sigaka/';

	// ------------------------------------------------------------------------------------------

	$('#feedback').delay(3000).fadeOut('slow');

	// ------------------------------------------------------------------------------------------
	// jabatan
	// ------------------------------------------------------------------------------------------

	$('.gaji-edit').click(function () {
		var id = $(this).val();
		var getUrl = root + 'jabatan/updateForm/' + id;
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
						'<input type="text" class="form-control" name="jabatan" id="jabatan" value="'+response.jabatan_nama+'" placeholder="Jabatan" autocomplete="off" required>' +
						'</fieldset>' +
						'<fieldset class="form-group floating-label-form-group">' +
						'<label for="gaji">Gaji</label>' +
						'<input type="text" class="form-control" name="gaji" id="gaji" value="'+response.jabatan_gaji+'" placeholder="Jumlah gaji" autocomplete="off" required>' +
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
			'<a href="'+root+'jabatan/hapus/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>';
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
					$('#lihat_norek').val(response.karyawan_no_rekening);
					$('#lihat_tg').val(response.karyawan_tanggal_gabung);
					$('#lihat_jabatan_karyawan').val(response.jabatan_nama);
					$('#lihat_gaji_pokok').val(formatRupiah(response.jabatan_gaji,'Rp. '));
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
					$('#edit_norek').val(response.karyawan_no_rekening);
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
	});

	// ------------------------------------------------------------------------------------------

	$('.karyawan-hapus').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'karyawan/hapus/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>';
		$('#hapuskaryawan').html(html);
	});


	// ------------------------------------------------------------------------------------------
	// easy autocomplete
	// ------------------------------------------------------------------------------------------
	var options = {
		url : root + 'karyawan/ajaxIndex',
		getValue: 'karyawan_nama',
		adjustWidth : false,
		list: {
			sort: {
				enabled: true
			},
			showAnimation: {
				type: "fade", //normal|slide|fade
				time: 400,
				callback: function() {}
			},

			hideAnimation: {
				type: "slide", //normal|slide|fade
				time: 400,
				callback: function() {}
			},
			match: {
				enabled: true
			},
			onSelectItemEvent: function() {
				var value = $("#nama_karyawan").getSelectedItemData().karyawan_id;

				$("#id_karyawan").val(value).trigger("change");
			}
		}
	};

	$('#nama_karyawan').easyAutocomplete(options);

	// ------------------------------------------------------------------------------------------
	// absen
	// ------------------------------------------------------------------------------------------

	$('.absen-lembur').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'absen/lembur/'+id+'" class="btn btn-danger btn-bg-gradient-x-red-pink">Ok</a>';
		$('#tombol-lembur').html(html);
	});

	// ------------------------------------------------------------------------------------------
	// gaji
	// ------------------------------------------------------------------------------------------

	$('.gaji-lihat').click(function (e) {
		e.preventDefault();
		var id = $(this).val();
		var getUrl = root + 'gaji/lihat/' + id;
		var total = 0;
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				if (response != null){
					$('#gaji_lihat_nama').val(response.karyawan_nama);
					$('#gaji_lihat_jabatan').val(response.jabatan_nama);
					$('#gaji_lihat_tg').val(response.karyawan_tanggal_gabung);
					$('#gaji_lihat_lembur').val(formatRupiah(response.gaji_lembur,'Rp. '));
					$('#gaji_lihat_gaji').val(formatRupiah(response.gaji_total,'Rp. '));
					total = parseInt(response.gaji_lembur) + parseInt(response.gaji_total);
					$('#gaji_lihat_total').val(formatRupiah(total.toString(),'Rp. '));
					$('#gaji_lihat_bulan').val(response.gaji_bulan_ke);
					console.log(response);
				}
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		});
	});

	$('.gaji-slip').click(function (e) {
		e.preventDefault();
		var id = $(this).val();
		var getUrl = root + 'gaji/lihat/' + id;
		var total = 0;
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				if (response != null){
					$('#slip-nama').html(response.karyawan_nama);
					$('#slip-jabatan').html(response.jabatan_nama);
					$('#slip-nohp').html(response.karyawan_nomor_hp);
					$('#slip-lembur').html(formatRupiah(response.gaji_lembur));
					$('#slip-gaji').html(formatRupiah(response.gaji_total));
					total = parseInt(response.gaji_lembur) + parseInt(response.gaji_total);
					$('#slip-total').html(formatRupiah(total.toString()));

					var getUrl2 = root + 'gaji/pinjam/' + id;
					$.ajax({
						url : getUrl2,
						type : 'ajax',
						dataType : 'json',
						success : function (response2) {
							if (response2 != null){
								if ((parseInt(response2.pinjam_jumlah) - parseInt(response2.pinjam_bayar)) > 500000){
									$('.slip-pinjam').html(formatRupiah('500000'));
									bersih = total - 500000;
									sisa = (parseInt(response2.pinjam_jumlah) - parseInt(response2.pinjam_bayar)) - 500000;
									$('#slip-bersih').html(formatRupiah(bersih.toString()));
									$('#slip-sisa-pinjam').html(formatRupiah(sisa.toString()));
									$('#slip-terbilang').html(terbilang(bersih.toString()) + 'Rupiah');
								} else {
									pinjam = parseInt(response2.pinjam_jumlah) - parseInt(response2.pinjam_bayar);
									$('.slip-pinjam').html(formatRupiah(pinjam.toString()));
									bersih = total - pinjam;
									sisa = (parseInt(response2.pinjam_jumlah) - parseInt(response2.pinjam_bayar)) - pinjam;
									$('#slip-bersih').html(formatRupiah(bersih.toString()));
									$('#slip-sisa-pinjam').html(formatRupiah(sisa.toString()));
									$('#slip-terbilang').html(terbilang(bersih.toString()) + 'Rupiah');
								}
							}
							else {
								$('.slip-pinjam').html('Rp. 0');
								sisa = 0;
								$('#slip-bersih').html(formatRupiah(total.toString()));
								$('#slip-sisa-pinjam').html(formatRupiah(sisa.toString()));
								$('#slip-terbilang').html(terbilang(total.toString()) + 'Rupiah');
							}
						},
						error: function (response2) {
							console.log(response2.status + 'error');
						}
					});
					console.log(response);
				}
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		});
	});

	// ------------------------------------------------------------------------------------------

	$('.gaji-bayar').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'gaji/bayar/'+id+'" class="btn btn-danger btn-bg-gradient-x-blue-cyan">Konfirmasi</a>';
		$('#tombol-konfirmasi').html(html);
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

function terbilang(s){
	var bilangan=s;
	var kalimat="";
	var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
	var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
	var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
	var panjang_bilangan = bilangan.length;

	/* pengujian panjang bilangan */
	if(panjang_bilangan > 15){
		kalimat = "Diluar Batas";
	}else{
		/* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
		for(i = 1; i <= panjang_bilangan; i++) {
			angka[i] = bilangan.substr(-(i),1);
		}

		var i = 1;
		var j = 0;

		/* mulai proses iterasi terhadap array angka */
		while(i <= panjang_bilangan){
			subkalimat = "";
			kata1 = "";
			kata2 = "";
			kata3 = "";

			/* untuk Ratusan */
			if(angka[i+2] != "0"){
				if(angka[i+2] == "1"){
					kata1 = "Seratus";
				}else{
					kata1 = kata[angka[i+2]] + " Ratus";
				}
			}

			/* untuk Puluhan atau Belasan */
			if(angka[i+1] != "0"){
				if(angka[i+1] == "1"){
					if(angka[i] == "0"){
						kata2 = "Sepuluh";
					}else if(angka[i] == "1"){
						kata2 = "Sebelas";
					}else{
						kata2 = kata[angka[i]] + " Belas";
					}
				}else{
					kata2 = kata[angka[i+1]] + " Puluh";
				}
			}

			/* untuk Satuan */
			if (angka[i] != "0"){
				if (angka[i+1] != "1"){
					kata3 = kata[angka[i]];
				}
			}

			/* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
			if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
				subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
			}

			/* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
			kalimat = subkalimat + kalimat;
			i = i + 3;
			j = j + 1;
		}

		/* mengganti Satu Ribu jadi Seribu jika diperlukan */
		if ((angka[5] == "0") && (angka[6] == "0")){
			kalimat = kalimat.replace("Satu Ribu","Seribu");
		}
	}
	return kalimat;
}
