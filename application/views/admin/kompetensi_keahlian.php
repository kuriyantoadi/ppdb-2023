		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<h6 class="mb-0 text-uppercase">Data Kompetensi Keahlian</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">

						    <a style="margin-bottom: 20px" class="btn btn-primary btn-sm" href="<?= site_url('C_admin/kompetensi_keahlian_tambah/') ?>" >Tambah</a>

							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kompetensi Keahlian</th>
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
										<td> <?= $row->nama_kompetensi_keahlian ?></td>
										
										<td>
											<div class="row row-cols-auto g-1">
												<div class="col">
													<a href="<?= site_url('C_admin/kompetensi_keahlian_hapus/'.$row->id_kompetensi_keahlian); ?>" type="button" class="btn btn-outline-danger btn-sm"
													onclick="return confirm('Anda yakin menghapus data <?= $row->nama_kompetensi_keahlian ?> ?')"><i class='lni lni-trash me-0'></i>
													</a>
												</div>
												
												<div class="col">
													<a href="<?= site_url('C_admin/kompetensi_keahlian_edit/'.$row->id_kompetensi_keahlian); ?>" type="button" class="btn btn-outline-info btn-sm"><i class='lni lni-pencil-alt me-0'></i>
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
										<th>Nama Kompetensi Keahlian</th>
										<th>Opsi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		