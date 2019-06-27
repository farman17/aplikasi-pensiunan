<div class="row">
	<div class="col-md-12">
		<div class="card">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_karyawan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil ditambahkan
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_karyawan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_karyawan'):
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
				<h1 style="text-align: center">Data Gaji Karyawan</h1>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2" data-toggle="modal" data-target="#tambah">
					<i class="ft-plus-circle"></i> Tambah data gaji
				</button>
			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" >
					<thead>
					<tr>
						<th>No</th>
						<th>Jabatan</th>
						<th>Gaji</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>

					<?php
					$no = 1;
					foreach ($gaji as $key=>$value):
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$value['gaji_jabatan']?></td>
						<td>Rp. <?=nominal($value['gaji_jumlah'])?></td>
						<td>
							<button class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit" data-toggle="modal" data-target="#ubah" value="<?=$value['gaji_id']?>"><i class="ft-edit"></i></button>
							<button class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus" data-toggle="modal" data-target="#hapus" value="<?=$value['gaji_id']?>"><i class="ft-trash"></i></button>
						</td>
					</tr>
					<?php
					$no++;
					endforeach;
					?>
					</tbody>
					<tfoot>
					<tr>
						<th>No</th>
						<th>Jabatan</th>
						<th>Gaji</th>
						<th>Aksi</th>
					</tr>
					</tfoot>
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
				<h3 class="modal-title" id="myModalLabel35"> Tambah Data Gaji</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('gaji/tambah')?>
				<div class="modal-body">
					<fieldset class="form-group floating-label-form-group">
						<label for="jabatan">Jabatan</label>
						<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" autocomplete="off">
					</fieldset>
					<fieldset class="form-group floating-label-form-group">
						<label for="gaji">Gaji</label>
						<input type="text" class="form-control" name="gaji" id="gaji" placeholder="Jumlah gaji" autocomplete="off">
					</fieldset>

				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
					<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
				</div>
			<?= form_close()?>
		</div>
	</div>
</div>

<!-- Modal ubah -->
<div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Ubah Data Gaji</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('gaji/update')?>
				<div class="modal-body" id="updateformgaji">

				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
					<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="update" value="Update">
				</div>
			<?= form_close()?>
		</div>
	</div>
</div>

<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Gaji ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
					<div id="hapusgaji">

					</div>
				</div>
		</div>
	</div>
</div>
