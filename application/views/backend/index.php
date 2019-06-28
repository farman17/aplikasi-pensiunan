<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">

			</div>
			<?php
			if ($this->session->flashdata('alert') == 'login_sukses'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" style="position: absolute; width: 100%;"  id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil Login <?= $this->session->userdata('session_hak_akses');?>, <?= $this->session->userdata('session_nama');?>
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'sudah_login'):
				?>
				<div class="alert alert-warning alert-dismissible animated fadeInDown" style="position: absolute; width: 100%;"  id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Sudah Login
				</div>
			<?php
			endif;
			?>
			<div class="card-body">
				Selamat Datang Manajer
			</div>
		</div>
	</div>
</div>
