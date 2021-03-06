<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item nav-profile">
			<div class="nav-link">
				<div class="user-wrapper">
					<div class="profile-image">
						<img src="<?php echo base_url(); ?>asset/images/faces/no-avatar.png" alt="profile image">
					</div>
					<div class="text-wrapper">
						<p class="profile-name"><?php echo $this->session->userdata('nama');?></p>
						<div>
							<small class="designation text-muted"><?php echo $this->session->userdata('type');?></small>
							<span class="status-indicator online"></span>
						</div>
					</div>
				</div>
			</div>
		</li>
	 	<li class="nav-item">
        	<a class="nav-link" href="<?php echo base_url();?>home">
	          <i class="menu-icon mdi mdi-television"></i>
	          <span class="menu-title">Dashboard</span>
	        </a>
      	</li>
      	<?php if ($this->session->userdata('type') == 'Admin'){; ?>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
				<i class="menu-icon mdi mdi-content-copy"></i>
				<span class="menu-title">Master Data</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>user">User</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>murid">Murid</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>guru">Guru</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>kelas">Kelas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>mata_pelajaran">Mata Pelajaran</a>
					</li>
				</ul>
			</div>
		</li>
		<?php }; ?>
		
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
				<i class="menu-icon mdi mdi-table"></i>
				<span class="menu-title">Transaksi</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="auth">
				<ul class="nav flex-column sub-menu">
			      	<?php if ($this->session->userdata('type') != 'Orangtua'){; ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>wali_kelas">Wali Kelas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>jadwal_mata_pelajaran">Jadwal Mata Pelajaran</a>
					</li>
					<?php };?>
					<?php if ($this->session->userdata('type') == 'Orangtua'){; ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>jadwal_mata_pelajaran/view_jadwal">Jadwal Mapel Murid</a>
					</li>
					<?php };?>
					<?php if ($this->session->userdata('type') != 'Orangtua'){; ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>kkm">KKM</a>
					</li>
					<?php };?>
					<?php if ($this->session->userdata('type') != 'Orangtua'){; ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>nilai_murid">Nilai Murid</a>
					</li>
					<?php };?>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#Raport" aria-expanded="false" aria-controls="Raport">
				<i class="menu-icon mdi mdi-chart-line"></i>
				<span class="menu-title">Raport Murid</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="Raport">
				<ul class="nav flex-column sub-menu">
			      	<?php if ($this->session->userdata('type') <> 'Orangtua'){; ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>raport_murid">Input Raport</a>
					</li>
					<?php };?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>raport_murid/view_raport">Lihat Raport</a>
					</li>
				</ul>
			</div>
		</li>
	</ul>
</nav>