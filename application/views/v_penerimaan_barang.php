<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page"><a href="#">Penerimaan Barang</a></li>
	</ol>
</nav>

<h4 class="text-gray-800 title">Penerimaan Barang</h4>


<hr class="whiter" />
<div class="row">
	<div class="container-fluid">

		<a class="btn btn-sm btn-danger add_this" href="#">
			<i class="fa fa-plus"></i>
			Tambah Penerimaan Barang
		</a>
		<br><br>
		<div class="card shadow mb-4">
			<div class="container" id="add_form" style="display:none">
				<div class="card-body">
					<form method="post" role="form" action="">
						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="inputEmail4">Nama Barang</label>
								<input type="text" class="form-control" id="inputEmail4" placeholder="Isi Nama Barang"
									name="nama" value="">
								<div class="error"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="inputPassword4">Tipe Barang</label>
								<input type="text" class="form-control" name="tipe" id="inputPassword4"
									placeholder="Isi Tipe barang ">
								<div class="error"></div>
							</div>
                            <div class="form-group col-md-2">
								<label for="inputPassword4">Jumlah</label>
								<input type="number" class="form-control" name="jumlah" id="inputPassword4"
									placeholder="0">
								<div class="error"></div>
							</div>

							<div class="form-group col-md-3">
								<label>Satuan</label>
								<select class="form-control input-sm" name="satuan" required>
									<option value="">Pilih satuan</option>
                                    <option value="">Buah</option>
                                    <option value="">Pcs</option>
                                    <option value="">Kg</option>
								</select>
							</div>

                            <div class="form-group col-md-3">
								<label for="inputPassword4">Harga</label>
								<input type="number" class="form-control" name="harga" id="inputPassword4"
									placeholder="Rp.0">
								<div class="error"></div>
							</div>

                            <div class="form-group col-md-4">
								<label>Supplier</label>
								<select class="form-control input-sm" name="grup_user" required>
									<option value="">Pilih supplier</option>
                                    <option value="">PT. Bangun Raya</option>
                                    <option value="">PT. Sentosa</option>
                                    <option value="">PT. Wapon Jaya</option>
								</select>
							</div>


                            <div class="form-group col-md-3">
								<label for="inputPassword4">Tanggal Masuk</label>
								<input type="date" class="form-control" name="tanggal" id="inputPassword4"
									placeholder="" value="<?= Date("Y-m-d"); ?>">
								<div class="error"></div>
							</div>

                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Upload Nota</label>
                                <input type="file" class="form-control input-sm" name="file">
                            </div>
						</div>
						<button type="submit" class="btn btn-primary float-right">Simpan</button>
						<br>
					</form>
				</div>
            </div>
            
            <div class="container" id="edit_form" style="display:none">
				<div class="card-body">
                <form method="post" role="form" action="">
						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="inputEmail4">Nama Barang</label>
								<input type="text" class="form-control" id="inputEmail4" placeholder="Isi Nama Barang"
									name="nama" value="">
								<div class="error"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="inputPassword4">Tipe Barang</label>
								<input type="text" class="form-control" name="tipe" id="inputPassword4"
									placeholder="Isi Tipe barang ">
								<div class="error"></div>
							</div>
                            <div class="form-group col-md-2">
								<label for="inputPassword4">Jumlah</label>
								<input type="number" class="form-control" name="jumlah" id="inputPassword4"
									placeholder="0">
								<div class="error"></div>
							</div>

							<div class="form-group col-md-3">
								<label>Satuan</label>
								<select class="form-control input-sm" name="satuan" required>
									<option value="">Pilih satuan</option>
                                    <option value="">Buah</option>
                                    <option value="">Pcs</option>
                                    <option value="">Kg</option>
								</select>
							</div>

                            <div class="form-group col-md-3">
								<label for="inputPassword4">Harga</label>
								<input type="number" class="form-control" name="harga" id="inputPassword4"
									placeholder="Rp.0">
								<div class="error"></div>
							</div>

                            <div class="form-group col-md-4">
								<label>Supplier</label>
								<select class="form-control input-sm" name="grup_user" required>
									<option value="">Pilih supplier</option>
                                    <option value="">PT. Bangun Raya</option>
                                    <option value="">PT. Sentosa</option>
                                    <option value="">PT. Wapon Jaya</option>
								</select>
							</div>


                            <div class="form-group col-md-3">
								<label for="inputPassword4">Tanggal Masuk</label>
								<input type="date" class="form-control" name="tanggal" id="inputPassword4"
									placeholder="" value="<?= Date("Y-m-d"); ?>">
								<div class="error"></div>
							</div>

                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Upload Nota</label>
                                <input type="file" class="form-control input-sm" name="file">
                            </div>
						</div>
						<button type="submit" class="btn btn-primary float-right">Ubah</button>
						<br>
					</form>
				</div>
			</div>
		</div>


		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Tipe</th>
								<th>Satuan</th>
								<th>Jumlah</th>
                                <th>Harga</th>
                                <th>Supplier</th>
                                <th>Nota</th>
                                <th>Tanggal Masuk</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>1</td>
								<td>Mesin Cuci</td>
								<td>Tipe</td>
								<td>pcs</td>
								<td>2</td>
                                <td>Rp.60.000</td>
								<td>PT. bangun raya</td>
								<td>nota.jpg</td>
                                <td>21 agustus 2019</td>
								<td>
                                <div class="btn-group">

										<a href="#" class="btn btn-sm btn-primary edit_this"
											><i
												class="fa fa-edit"></i> Edit</a>
										<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
									</div>
                                
                                </td>
							</tr>

                            <tr>
								<td>2</td>
								<td>Kulkas</td>
								<td>Tipe</td>
								<td>pcs</td>
								<td>5</td>
                                <td>Rp.300.000</td>
								<td>PT. Sentosa</td>
								<td>nota533.jpg</td>
                                <td>22 agustus 2019</td>
								<td>
                                <div class="btn-group">

										<a href="#" class="btn btn-sm btn-primary edit_this"
											><i
												class="fa fa-edit"></i> Edit</a>
										<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
									</div>
                                
                                </td>
							</tr>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" role="form" action="<?=base_url('auth/update_new_password'); ?>">
						<input type="hidden" id="pass_this" name="id_user" class="form-control input-sm m-b-10"
							placeholder="New Password">

						<div class="form-group col-md-12">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" name="password" id="inputPassword4"
                                placeholder="Isi Password Baru">
                            <div class="error"></div>
						</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </form>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	$(".add_this").click(function () {
        // alert('res');
        $("#edit_form").hide()
		$("#add_form").stop().toggle("fast", function () {
			// Animation complete.
		});
    });


    $( ".edit_this" ).click(function() {
   
   $( "#edit_form" ).toggle( "fast", function() {
	    
      });
      $("#add_form").hide();


});
</script>




