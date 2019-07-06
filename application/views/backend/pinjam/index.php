<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_absen'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil absen
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_absen'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_absen'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil dihapus
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Pinjaman Karyawan</h1>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2"
						data-toggle="modal" data-target="#tambah">
					<i class="ft-plus-circle"></i> Tambah data Pinjaman
				</button>
			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration">
					<thead>
					<tr>
						<th>No</th>
						<th>Nama Karyawan</th>
						<th>Jumlah Pinjaman</th>
						<th>Tanggal Pinjaman</th>
						<th>Sudah Dibayar</th>
					</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal tambah -->
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah data Pinjaman</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?=form_open('pinjam/tambah')?>
			<div class="modal-body">
				<div class="form-group floating-label-form-group">
					<label for="nama_karyawan">Nama Karyawan</label>
					<input type="text" name="nama_autocomplete" id="nama_karyawan" class="form-control" placeholder="Nama Karyawan" required>
					<input type="hidden" id="id_karyawan" name="nama">
				</div>
				<div class="form-group floating-label-form-group">
					<label for="jumlah">Jumlah Pinjaman</label>
					<input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah Pinjaman" required>
				</div>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
			</div>
			<?=form_close()?>
		</div>
	</div>
</div>
