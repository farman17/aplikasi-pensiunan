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
				<h1 style="text-align: center">Gaji Karyawan</h1>
			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<td>No</td>
						<td>Nama Karyawan</td>
						<td>Jabatan</td>
						<td>Tanggal Gabung</td>
						<td>Gaji Bulan Ini</td>
						<td>Gaji Bulan ke</td>
						<td style="text-align: center"><i class="ft-settings"></i></td>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($gaji as $key => $value):
						?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $value['karyawan_nama'] ?></td>
							<td><?= $value['jabatan_nama'] ?></td>
							<td><?= date_indo($value['karyawan_tanggal_gabung']) ?></td>
							<td>Rp. <?= nominal($value['gaji_lembur'] + $value['gaji_total']) ?></td>
							<td><?= $value['gaji_bulan_ke'] ?></td>
							<td>
								<button
									class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-lihat"
									data-toggle="modal" data-target="#lihat" value="<?= $value['gaji_id'] ?>"
									title="Lihat selengkapnya"><i class="ft-eye"></i></button>
							</td>
						</tr>

						<?php
						$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal lihat -->
<div class="modal fade text-left" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Lihat Data Gaji</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_nama">Nama Karyawan</label>
					<input type="text" class="form-control" name="nama" id="gaji_lihat_nama" placeholder="Nama Karyawan"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_jabatan">Jabatan</label>
					<input type="text" class="form-control" name="tempat_lahir" id="gaji_lihat_jabatan" value=""
						   placeholder="Tempat Lahir" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="gaji_lihat_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_lembur">Gaji Lembur</label>
					<input type="text" class="form-control" name="jabatan" id="gaji_lihat_lembur"
						   placeholder="Gaji lembur" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_gaji">Gaji Biasa</label>
					<input type="number" class="form-control" id="gaji_lihat_gaji" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_total">Total Gaji</label>
					<input type="number" class="form-control" id="gaji_lihat_total" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_bulan">Bulan ke</label>
					<input type="number" class="form-control" id="gaji_lihat_bulan" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
			</div>
		</div>
	</div>
</div>

