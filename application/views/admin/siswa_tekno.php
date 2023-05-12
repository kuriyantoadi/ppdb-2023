
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<h6 class="mb-0 text-uppercase">Data Siswa Teknologi</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">

						    <br><?= $this->session->flashdata('msg') ?>

						    <a style="margin-bottom: 20px;" type="button" class="btn btn-primary btn-sm" href="<?= site_url('C_admin/siswa_tekno_tambah/') ?>" >Tambah</a>

							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NISN</th>
										<th>Tanggal Lahir</th>
										<th>Kelas</th>
										<th>Kondisi</th>
										<th>Opsi</th>
									</tr>
								</thead>

								<tbody>

								 <?php
								$no=1;
								foreach ($tampil as $row) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td> <?= $row->nama_siswa ?></td>
										<td> <?= $row->nisn_siswa ?></td>
										<td> <?= $row->tempat_tgl_lahir ?></td>
										<td> <?= $row->nama_kelas ?></td>
										<td> <?= $row->status_kelulusan ?></td>
										<td>
											<div class="row row-cols-auto g-1">
												<div class="col">
													<a href="<?= site_url('C_admin/siswa_hapus_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-outline-danger"
													 onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')"><i class='lni lni-trash me-0'></i>
													</a>
												</div>
												<div class="col">
													<a href="<?= site_url('C_admin/siswa_pass_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-outline-warning"><i class='bx bx-key me-0'></i>
													</a>
												</div>
												<div class="col">
													<a href="<?= site_url('C_admin/siswa_edit_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-outline-info"><i class='lni lni-pencil-alt me-0'></i>
													</a>
												</div>
												
												<div class="col">
													<a href="<?= site_url('C_admin/siswa_detail_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-outline-primary"><i class='bx bx-file me-0'></i>
													</a>
												</div>
											</div>
										</td>
									</tr>
									

								 <?php
           							 } 
								?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NISN</th>
										<th>Tanggal Lahir</th>
										<th>Kelas</th>
										<th>Kondisi</th>
										<th>Opsi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		