
<?php echo _css('selectize,datepicker,datetimepicker,datatables,icheck')?>

<?php echo card_open('Form No : '.$data->no,'bg-green',false)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>

					<div class='row'>
	
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_no ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' value='<?php if(isset($data)) echo $data->no ?>' readonly>
					</div>
					</div>


					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->c_bank_id ?></label> 
							<input type='text' class='form-control data-sending focus-color'  id='bank' name='bank' value='<?php if(isset($data)) echo $data->bank ?>' readonly>
					</div>
					</div>
								
			
					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_masuk_cabang_id ?></label> 
							<input type='text' class='form-control data-sending focus-color'  id='nama_cabang' name='nama_cabang' value='<?php if(isset($data)) echo $data->nama_cabang ?>' readonly>
					</div>
					</div>					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_tanggal_penerimaan ?></label>
							<div class='input-group'>
							<span class='input-group-prepend' id='basic-addon1'>
							<span class='input-group-text'><i class="fa fa-calendar"></i></span>
							</span>
							<input type='text' class='form-control data-sending' id='tanggal_penerimaan' value='<?php if(isset($data)) echo $data->tanggal_penerimaan?>' readonly>
							</div>
					</div>
					</div>
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_tiba ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_tiba' name='waktu_tiba'  value='<?php if(isset($data)) echo $data->waktu_tiba ?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_serah_terima ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_serah_terima' name='waktu_serah_terima'  value='<?php if(isset($data)) echo $data->waktu_serah_terima ?>' readonly>
					</div>
					</div>
					
										
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_diserahkan_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diserahkan_oleh' name='diserahkan_oleh'  value='<?php if(isset($data)) echo $data->diserahkan_oleh ?>' readonly>
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_diterima_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diterima_oleh' name='diterima_oleh'  value='<?php if(isset($data)) echo $data->diterima_oleh ?>' readonly>
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_no_kendaraan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no_kendaraan' name='no_kendaraan' placeholder='' value='<?php if(isset($data)) echo $data->no_kendaraan ?>' readonly>
					</div>
					</div>
					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='' value='<?php if(isset($data)) echo $data->keterangan ?>' readonly>
					</div>
					</div>	

					</div>
	</form>	

<?php echo card_close()?>

<?php echo card_open('Detail Uang Masuk dan Selisih','bg-teal',true)?>
	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail' class='table' style='width:150%'>
		<thead>	
            <tr>
			<th class="nst">No</th>			
			<th class="nst">Proses</th>
			<th>ID</th>			
			<th>JENIS_UANG</th>
			<th>PECAHAN</th>
			<th>JUMLAH</th>
			<th>SELISIH_KURANG</th>
			<th>SELISIH_LEBIH</th>
			<th>JUMLAH_PROSES</th>
			<th>BELUM_PROSES</th>
			
			</tr>
        </thead>
		<tbody>
		
		</tbody>

		<tfoot align="right">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				
		   </tr>
		</tfoot>
		</table>
		<div hidden>
			<button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modal-danger'   id='button_delete_single' ></button>
		</div>
		</small>
		</div>		
<?php echo card_close()?>


<?php echo card_open('Detail proses uang masuk','bg-teal',true)?>
<form id="form-b">
<div class='row'>
	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<input hidden class='data-sending' id='proses_id' name="id" value=''>
			<input hidden class='data-sending' id='uang_masuk_detail_id' name="uang_masuk_detail_id" value=''>
			<input hidden class='data-sending' id='pecahan_id' name="pecahan_id" value=''>			
			<input hidden class='data-sending' id='jumlah_old' name="jumlah_old" value=''>			
			<label class='form-label'>EMISI</label> 
			<?php
					echo create_cmb_database(array(	'id'			=>'jenis_pecahan_id',
													'name'			=>'jenis_pecahan_id',
													'table'			=>'select_pecahan_view',
													'field_show'	=>'pecahan',
													'primary_key'	=>'jenis_pecahan_id', 
													'selected'		=>'',
													'field_link'	=>'',
													'class'			=>'custom-select-link d-none')); 
			?>
			<?php 
					echo create_cmb_database(array(	'id'			=>'emisi_id',
													'name'			=>'emisi_id',
													'table'			=>'select_emisi_view',
													'field_show'	=>'emisi',
													'primary_key'	=>'id', 
													'selected'		=>'',
													'field_link'	=>'jenis_pecahan_id',
													'class'			=>'custom-select-link data-sending')); 
			?>
	</div>
	</div>	

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<label class='form-label'>KONDISI</label> 
			<?php
					echo create_cmb_database(array(	'id'			=>'kondisi_id',
													'name'			=>'kondisi_id',
													'table'			=>'app_kondisi',
													'field_show'	=>'kondisi',
													'primary_key'	=>'id', 
													'selected'		=>'',
													'field_link'	=>'',
													'class'			=>'custom-select data-sending')); 
			?>
	</div>
	</div>

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'>
			<label class='form-label'>JUMLAH (Rp)</label>
			<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah' name='jumlah' placeholder='<?php echo $title->general->desc_required ?>' value='' autocomplete='off'>
	</div>
	</div>

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'>
			<label class='form-label'>Tanggal Proses</label>
			<div class='input-group'>
							<span class='input-group-prepend' id='basic-addon1'>
							<span class='input-group-text'><i class="fa fa-calendar"></i></span>
							</span>
							<input readonly type='text' class='form-control data-sending input-simple-date' id='tanggal_pencatatan' value='<?php echo date('Y-m-d') ?>'>
							</div>
	</div>
	</div>

	<div class='col-md-3 col-lg-3'>
	<div class='form-group'>
	<label class='form-label'><br/></label>
	<div class="btn-group pull-right" role="group">
	<button type="button" id="btn-save-proses" class="btn btn-primary">Tambah</button>
	<button type="button" id="btn-cancel-proses" class="btn btn-danger">Batal</button>
	</div>	
	</div>
	</div>

</div>

</form>

	<div class='box-body table-responsive'  id='box-table'>		
		<table id='table-detail-proses' class='table' style='width:150%'>
		<thead>
	
            <tr >
			<th class="nst">No</th>			
			<th class="nst">Action</th>
			<th>ID</th>
			<th>JENIS_UANG</th>
			<th>PECAHAN</th>
			<th>EMISI</th>
			<th>KONDISI</th>
			<th>JUMLAH</th>
			<th>TANGGAL_PENCATATAN</th>
			<th>USER_INPUT</th>
			<th>INPUT_TIME</th>
			<th>USER_UPDATE</th>
			<th>UPDATE_TIME</th>
            </tr>

        </thead>
		<tbody>
		
		</tbody>
		</table>
	</div>

<?php echo card_close()?>


<?php echo card_open('Berita Acara Selisih','bg-teal',true)?>

<form id='form-c'>	
<div class='row'>	
					<input hidden class='data-sending' id='id' value='<?php if(isset($data_selisih)) echo $data_selisih->id ?>'>
	
					<input hidden class='data-sending' id='uang_masuk_id' name="uang_masuk_id" value='<?php echo $uang_masuk_id?>'>			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>NO</label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->no?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>MULAI_PROSES</label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='mulai_proses' name='mulai_proses' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->mulai_proses?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>SELESAI_PROSES</label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='selesai_proses' name='selesai_proses' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->selesai_proses?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>NAMA_OA</label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_oa' name='nama_oa' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->nama_oa?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>KASIR_TTP</label>
							<input type='text' class='form-control data-sending focus-color'  id='kasir_ttp' name='kasir_ttp' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->kasir_ttp?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>NAMA_KASIR_BANK/CLIENT</label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_kasir_bank_client' name='nama_kasir_bank_client' placeholder='' value='<?php if(isset($data_selisih)) echo $data_selisih->nama_kasir_bank_client?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DITEMUKAN_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_oleh' name='ditemukan_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->ditemukan_oleh?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DITEMUKAN_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_id' name='ditemukan_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->ditemukan_id?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DISAKSIKAN_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_oleh' name='disaksikan_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->disaksikan_oleh?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DISAKSIKAN_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_id' name='disaksikan_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->disaksikan_id?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DIKETAHUI_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_oleh' name='diketahui_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->diketahui_oleh?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DIKETAHUI_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_id' name='diketahui_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->diketahui_id?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>CATATAN</label>
							<input type='text' class='form-control data-sending focus-color'  id='catatan' name='catatan' value='<?php if(isset($data_selisih)) echo $data_selisih->catatan?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>LAMPIRAN</label>
							<input type='text' class='form-control data-sending focus-color'  id='lampiran' name='lampiran' value='<?php if(isset($data_selisih)) echo $data_selisih->lampiran?>' >
					</div>
					</div>
	
	<div class='col-md-12 col-xl-12'>
	   <div class='form-group'>		
		<button id='btn-save-selisih' type='button' class='btn btn-primary'><i class="fe fe-save"></i> Simpan</button>	
	  </div>			 
	</div>
</div>
</form>

<div class='col-md-12 col-xl-12'>
	<h4>Rincian Selisih</h4>			 
</div>

<form id="form-d">
<div class='row'>	
	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<input hidden class='data-sending' id='detail_id' name="id" value=''>
			<input hidden class='data-sending' id='uang_masuk_id2' name="uang_masuk_id" value='<?php if(isset($uang_masuk_id))echo $uang_masuk_id?>'>
			<label class='form-label'>JENIS_UANG</label> 
			<?php 
					echo create_cmb_database(array(	'id'			=>'jenis_uang_id',
													'name'			=>'jenis_uang_id',
													'table'			=>'app_jenis_uang',
													'field_show'	=>'jenis_uang',
													'primary_key'	=>'id', 
													'selected'		=>'',
													'field_link'	=>'',
													'class'			=>'custom-select-link data-sending')); 
			?> 
	</div>
	</div>	

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<label class='form-label'>PECAHAN</label> 
			<?php
					echo create_cmb_database(array(	'id'			=>'pecahan_id2',
													'name'			=>'pecahan_id',
													'table'			=>'select_pecahan_view',
													'field_show'	=>'pecahan',
													'primary_key'	=>'id', 
													'selected'		=>'',
													'field_link'	=>'jenis_uang_id',
													'class'			=>'custom-select-link data-sending')); 
			?> 
	</div>
	</div>

	<div class='col-md-2 col-xl-2'>				
	<div class='form-group'> 
			<label class='form-label'>JENIS_SELISIH</label> 
			<?php 
					echo create_cmb_database(array(	'id'			=>'kategori_selisih_id',
													'name'			=>'kategori_selisih_id',
													'table'			=>'app_kategori_selisih',
													'field_show'	=>'nama_selisih',
													'primary_key'	=>'id', 
													'selected'		=>'',
													'field_link'	=>'',
													'class'			=>'custom-select data-sending')); 
			?> 
	</div>
	</div>

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'>
			<label class='form-label'>JUMLAH (Rp)</label>
			<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah2' name='jumlah' placeholder='<?php echo $title->general->desc_required ?>' value='' autocomplete='off'>
	</div>
	</div>

	<div class='col-md-3 col-lg-3'>
	<div class='form-group'>
		<label class='form-label'><br/></label>
		<div class="btn-group pull-right" role="group">
			<button type="button" id="btn-save-selisih-detail" class="btn btn-primary">Tambah</button>
			<button type="button" id="btn-cancel-selisih-detail" class="btn btn-danger">Batal</button>
		</div>	
	</div>
	</div>
</div>
</form>


	<div class='box-body table-responsive'  id='box-table-selisih'>
		<small>
		<table id='table-detail-selisih' class='table' style='width:150%'>
		<thead>	
            <tr >
			<th class="nst">No</th>			
			<th class="nst">Hapus</th>							
				<th>JENIS_UANG</th>
				<th>PECAHAN</th>
				<th>NAMA_SELISIH</th>
				<th>JUMLAH</th>
				<th>USER_INPUT</th>
				<th>INPUT_TIME</th>		
			</tr>

        </thead>
		<tbody>
		
		</tbody>
		</table>	
		</small>
		</div>


<div class='col-md-12 col-xl-12'>
	<br/>
	<h4>Penjelasan Selisih</h4>			 
</div>

<form id="form-e">
<div class='row'>	
	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<input hidden class='data-sending' id='penjelasan_id' name="id" value=''>
			<input hidden class='data-sending' id='uang_masuk_id3' name="uang_masuk_id" value='<?php if(isset($uang_masuk_id))echo $uang_masuk_id?>'>
			<label class='form-label'>PENJELASAN</label> 
			<input type='text' class='form-control data-sending focus-color'  id='penjelasan' name='penjelasan' placeholder='<?php echo $title->general->desc_required ?>' value='' >
	</div>
	</div>	

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'> 
			<label class='form-label'>JAM</label> 
			<input type='text' class='form-control data-sending focus-color timepicker'  id='jam' name='jam' placeholder='<?php echo $title->general->desc_required ?>' value='' > 
	</div>
	</div>

	<div class='col-md-2 col-xl-2'>				
	<div class='form-group'> 
			<label class='form-label'>KAMERA</label> 
			<input type='text' class='form-control data-sending focus-color'  id='kamera' name='kamera' placeholder='<?php echo $title->general->desc_required ?>' value='' > 
	</div>
	</div>

	<div class='col-md-2 col-lg-2'>
	<div class='form-group'>
			<label class='form-label'>NO_SERI</label>
			<input type='text' class='form-control data-sending focus-color'  id='no_seri' name='no_seri' placeholder='<?php echo $title->general->desc_required ?>' value='' >
	</div>
	</div>

	<div class='col-md-3 col-lg-3'>
	<div class='form-group'>
		<label class='form-label'><br/></label>
		<div class="btn-group pull-right" role="group">
			<button type="button" id="btn-save-penjelasan" class="btn btn-primary">Tambah</button>
			<button type="button" id="btn-cancel-penjelasan" class="btn btn-danger">Batal</button>
		</div>	
	</div>
	</div>
</div>
</form>

		<div class='box-body table-responsive'  id='box-table-penjelasan'>
		<small>
		<table id='table-penjelasan' class='table' style='width:150%'>
		<thead>	
            <tr >
			<th class="nst">No</th>			
			<th class="nst">Hapus</th>							
				<th>PENJELASAN</th>
				<th>JAM</th>
				<th>KAMERA</th>
				<th>NO_SERI</th>
				<th>USER_INPUT</th>
				<th>INPUT_TIME</th>		
			</tr>

        </thead>
		<tbody>
		
		</tbody>
		</table>	
		</small>
		</div>



<?php echo card_close()?>

<div class='col-md-12 col-xl-12'>
	<div class='form-group'>
		<a href='<?php echo $link_back ?>' id='btn-close' class='btn btn-primary'> <?php echo $title->general->button_close ?></a>
	</div>			 
</div>

<?php echo _js('ybs,selectize,mommentjs,datepicker,datetimepicker,datatables,icheck')?>

<script src=" <?= base_url('node_modules/socket.io/client-dist/socket.io.js') ?>"></script>
<script src=" <?= base_url('assets/js/ws.js') ?>"></script>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');
var link_refresh='<?php echo $link_refresh_table;?>';
var link_refres_proses='<?php echo $link_refresh_proses;?>';
var action_link='<?php echo $link_save_proses;?>';
var action_link_update='<?php echo $link_update_proses;?>';
var action_link_ba_selisih='<?php echo $link_save_ba_selisih;?>';
var action_link_selisih_detail='<?php echo $action_link_selisih_detail;?>';
var action_link_penjelasan='<?php echo $action_link_penjelasan;?>';
var link_refresh_selisih='<?php echo $link_refresh_selisih;?>';
var link_refresh_penjelasan='<?php echo $link_refresh_penjelasan;?>';

var bank_id='<?php echo $data->bank_id?>';

var updated=false;


$(document).ready(function(){
	<?php
	/*
	|--------------------------------------------------------------
	| CARA MEMBUAT COMBOBOX LINK
	|--------------------------------------------------------------
	| COMBOBOX LINK adalah proses membuat sebuah combobox menjadi 
	| referensi combobox lainnya dalam menampilkan data.
	| misal :
	|  combobox grup menjadi referensi combobox subgrup.
	|  perubahan/pemilihan data combobox grup menyebabkan 
	|  perubahan data combobox subgrup. 
	|--------------------------------------------------------------
	| cara :
	|  - isi "field_link" pada combobox target 
	| 	 'field_link'	=>'nama_field_join_database'.
	|  - gunakan class "custom-select-link" pada kedua combobox ,
	|	 referensi dan target.
	|  - tambahkan script :
	|     linkToSelectize('id_cmb_referensi','id_cmb_target');
	|--------------------------------------------------------------
	| note :
	|   - struktur database harus menggunakan field id sebagai primary key
	|   - combobox harus di buat dengan php code
	|	-  "create_cmb_database" untuk row < 1000
	|	-  dan linkToSelectize untuk row < 1000
	|
	|	-  "create_cmb_database_bigdata" untuk row > 1000
	|	-  dan linkToSelectize_Big untuk row > 1000
	|   - 
	|   - class harus menggunakan "custom-select-link"
	|
	*/
	?>

	linkToSelectize('jenis_pecahan_id','emisi_id');

	linkToSelectize('jenis_uang_id','pecahan_id2');

	$('.timepicker').datetimepicker({
		format: 'HH:mm'        
	});	

	$('.data-sending').keydown(function(e){
		remove_message();
		switch(e.which){
			case 13 :
			apply();
			return false;
		}
	});

	$('.input-simple-date').datepicker({ 
			autoclose: true ,
			format:'yyyy-mm-dd',
	});

	$('#btn-save-proses').click(function(){
		simpanProses();
	});

	$('#btn-cancel-proses').click(function(){
		resetProses();
	});

	$('#btn-save-selisih').click(function(){
		simpanBASelisih();
	});

	$('#btn-save-selisih-detail').click(function(){
		simpanSelisihDetail();
	});

	$('#btn-save-penjelasan').click(function(){
		simpanPenjelasan();
	});

	$('#btn-cancel-penjelasan').click(function(){
		resetPenjelasan();
	});

	refresh_table();

});
 
var resp_table=true;
var table_detail;

function refresh_table(value_search){
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };	
	if(!resp_table){
		$('.column-search').removeAttr('hidden');
	}else{
		$('.column-search').attr('hidden','hidden');
	}	

				
table_detail = $('#table-detail').dataTable({
				destroy				: true,
				processing			: true,
				serverSide			: true,				
				language			: {processing : '<div class="dimmer active"><div class="loader"></div><br><br><br>mohon tunggu...</div>'},
				ajax				:	{	url: link_refresh,
											type: "POST",
											dataSrc: "message",	
										
											data : function ( d ){
													if(value_search!==undefined){
														d.search = {value:value_search,regex:false};
													}
													<?php //MENGIRIM TOKEN CSRF ?>
													d.<?php echo $this->security->get_csrf_token_name() ?> = get_sec_val();
													
												},
												
											<?php //MENGESET ULANG TOKEN CSRF ?>
											dataFilter: function(response){
															set_sec_val(response);
															return response;
												},										},
							
				 
				columns				:	[	{data:null,width:"5%"},
											
											{data:null,width:"10%",
												<?php //MENAMBAHKAN BUTTON ACTION ?>
												render: function ( data, type, row ) {
														if ( type === 'display' ) {
															var konfirm='';
															var btn_group='';
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm " title="proses" onclick=\' getProses('+row.id+','+row.jenis_uang_id+','+row.pecahan_id+','+row.jumlah_belum_diproses+') \'><i class="fa fa-play"></i></button>'; 
															return btn_group;
														}	
														return data;	
												}	
											},
											
											{data:"id" },
		// 																					{data:"no" ,										
		// },
											{data:"jenis_uang" ,},
											{data:"pecahan" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"jumlah" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"selisih_kurang" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"selisih_lebih" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"jumlah_proses" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"jumlah_belum_diproses" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											
															
											
											
										],
				
				
				columnDefs			:	[ 
											<?php //SETTING UNTUK KOLOM 0 (NOMOR URUT) ?>
											{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
											<?php //SETTING UNTUK KOLOM 2 (ACTION) ?>
											{"searchable": false,"orderable": false,"targets": 1} ,
											<?php //SETTING UNTUK KOLOM 3 (ACTION) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 2} ,
											{"className": 'dt-body-right',"targets": 4} ,
											{"className": 'dt-body-right',"targets": 5} ,
											{"className": 'dt-body-right',"targets": 6} ,
											{"className": 'dt-body-right',"targets": 7} ,
							
										],
							
				order				: 	[[ 1, 'asc' ]],
			
				
										<?php //MENAMBAHKAN CLASS PADA ROW ?>
				rowCallback			: 	function(row, data, iDisplayIndex) {
											$(row).addClass('cursor-pointer');
											$(row).addClass('ybs-rows-click');
					
											var info = this.fnPagingInfo();
											var page = info.iPage;
											var length = info.iLength;
											var index = page * length + (iDisplayIndex + 1);
											$('td:eq(0)', row).html(index);
										},							
				
			   footerCallback : function ( row, data, start, end, display ) {
										var api = this.api(), data;
							
										// converting to interger to find total
										var intVal = function ( i ) {
											return typeof i === 'string' ?
												i.replace(/[\$,]/g, '')*1 :
												typeof i === 'number' ?
													i : 0;
										};
							
										// computing column Total of the complete result 
										var Total = api
											.column(5)
											.data()
											.reduce( function (a, b) {
												return intVal(a) + intVal(b);
											}, 0 );	  
										var TotalSK = api
										.column(6)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	  

										var TotalSL = api
										.column(7)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	

										var TotalP = api
										.column(8)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	

										var TotalB = api
										.column(9)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	
										
											
										// Update footer by showing the total with the reference of the column index 
									$( api.column(0).footer() ).html('Total');
									$( api.column(5).footer() ).html(numberFormat(Total)+".00"); 
									$( api.column(6).footer() ).html(numberFormat(TotalSK)+".00");
									$( api.column(7).footer() ).html(numberFormat(TotalSL)+".00");
									$( api.column(8).footer() ).html(numberFormat(TotalP)+".00");
									$( api.column(9).footer() ).html(numberFormat(TotalB)+".00");
										          
									},
				dom					: 'Blfrtip',
				
				buttons				: [],						
	
				scrollY 			:	"300px",
				scrollCollapse		:	false,
				scrollX 			:	true,
				paging				: 	false,
				lengthChange		: 	false,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	false,
				ordering			: 	true,
				info				: 	false,
				autoWidth			: 	false,
				responsive			: 	false,
				orderCellsTop		:   true,

			});
			refresh_table_proses();
			refresh_table_selisih();	
			refresh_table_penjelasan();	
			if(updated){
				update_data(bank_id);
			}
			else{
				updated=true;
			}
				
}

function getProses(id,jenis,pecahan,jumlah){
	if(parseInt(jumlah)>0){
		$('#uang_masuk_detail_id').val(id);
		$('#jenis_uang_id').val(jenis);
		$('#pecahan_id').val(pecahan);
		var $select = $("#jenis_pecahan_id").selectize();
		var selectize = $select[0].selectize;
		selectize.setValue(jenis+''+pecahan,false); 
		$('#jumlah').val(numberFormat(jumlah));
		$('#jumlah').focus();
	}else{
		alert('Tidak ada data yang belum di proses');
	}
	
}

function simpanProses(){
	var data = get_dataSending('form-b');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(action_link,send_data,'POST');
	a.onAfterSuccess = function(){
		refresh_table();
		resetProses();		
	}	
}

function resetProses(){
	var $select = $("#emisi_id").selectize();
	var selectize = $select[0].selectize;
	selectize.clear();
	

	var $select2 = $("#kondisi_id").selectize();
	var selectize2 = $select2[0].selectize;
	selectize2.clear();
	$("#jumlah").val('');
	$("#jumlah_old").val('');
	$("#tanggal_pencatatan").val(new Date().toISOString().slice(0, 10));

	$('#btn-save-proses').html('Tambah');

	action_link='<?php echo $link_save_proses;?>';
}

function getEdit(id,uang_masuk_detail_id,emisi_id,kondisi_id,jumlah,pecahan_id,jenis_uang_id){	
	
	$('#proses_id').val(id);

	$('#uang_masuk_detail_id').val(uang_masuk_detail_id);

	$('#jumlah').val(numberFormat(jumlah));

	$("#jumlah_old").val(jumlah);	
	$("#pecahan_id").val(pecahan_id);

	var $select2 = $("#jenis_pecahan_id").selectize();
	var selectize2 = $select2[0].selectize;

	selectize2.setValue(jenis_uang_id+''+pecahan_id,false);

	var $select = $("#emisi_id").selectize();
	var selectize = $select[0].selectize;

	selectize.setValue(emisi_id,false); 
	

	var $select2 = $("#kondisi_id").selectize();
	var selectize2 = $select2[0].selectize;
	selectize2.setValue(kondisi_id,false); 

	$('#btn-save-proses').html('Update');

	$('#jumlah').focus();

	action_link=action_link_update;
}

function simpanBASelisih(){
	var data = get_dataSending('form-c');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(action_link_ba_selisih,send_data,'POST');
	a.onAfterSuccess = function(){
		refresh_table();				
	}
}

function simpanSelisihDetail(){
	var data = get_dataSending('form-d');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(action_link_selisih_detail,send_data,'POST');
	a.onAfterSuccess = function(){
		refresh_table();
		resetSelisih();					
	}
}

function resetSelisih(){
	var $select = $("#jenis_uang_id").selectize();
	var selectize = $select[0].selectize;
	selectize.clear();
	

	var $select2 = $("#pecahan_id2").selectize();
	var selectize2 = $select2[0].selectize;
	selectize2.clear();

	var $select3 = $("#kategori_selisih_id").selectize();
	var selectize3 = $select3[0].selectize;
	selectize3.clear();

	$("#jumlah2").val('');

	$('#btn-save-selisih-detail').html('Tambah');
	action_link_selisih_detail='<?php echo $action_link_selisih_detail;?>';	
}

function simpanPenjelasan(){
	var data = get_dataSending('form-e');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(action_link_penjelasan,send_data,'POST');
	a.onAfterSuccess = function(){
		refresh_table();
		resetPenjelasan();					
	}
}

function resetPenjelasan(){
	$("#penjelasan").val('');
	$("#jam").val('');
	$("#kamera").val('');
	$("#no_seri").val('');
	$('#btn-save-penjelasan').html('Tambah');
	action_link_penjelasan='<?php echo $action_link_penjelasan;?>';	
}

var table_detail_proses;
function refresh_table_proses(value_search){
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };	
		

				
	table_detail_proses = $('#table-detail-proses').dataTable({
				destroy				: true,
				processing			: true,
				serverSide			: true,				
				language			: {processing : '<div class="dimmer active"><div class="loader"></div><br><br><br>mohon tunggu...</div>'},
				ajax				:	{	url: link_refres_proses ,
											type: "POST",
											dataSrc: "message",	
										
											data : function ( d ){
													if(value_search!==undefined){
														d.search = {value:value_search,regex:false};
													}
													<?php //MENGIRIM TOKEN CSRF ?>
													d.<?php echo $this->security->get_csrf_token_name() ?> = get_sec_val();
													
												},
												
											<?php //MENGESET ULANG TOKEN CSRF ?>
											dataFilter: function(response){
															set_sec_val(response);
															return response;
												},										},
							
				 
				columns				:	[	{data:null,width:"5%"},											
											{data:null,width:"10%",
												<?php //MENAMBAHKAN BUTTON ACTION ?>
												render: function ( data, type, row ) {
														if ( type === 'display' ) {
															var konfirm='';
															var btn_group='';
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm " title="update" onclick=\' getEdit('+row.id+','+row.uang_masuk_detail_id+','+row.emisi_id+','+row.kondisi_id+','+row.jumlah+','+row.pecahan_id+','+row.jenis_uang_id+') \'><i class="fa fa-edit"></i></button>'; 
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete_proses ?>","#table-detail") \'  ><i class="fa fa-trash-o"></i></button></small>';
															return btn_group;
														}	
														return data;	
												}	
											},
											
											{data:"id",},
											{data:"jenis_uang",},
											{data:"pecahan",},
											{data:"emisi",},
											{data:"kondisi",},
											{data:"jumlah",render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"tanggal_pencatatan",},
											{data:"nama_lengkap",},
											{data:"input_time",},
											{data:"userupdate_nama_lengkap",},
											{data:"update_time",},					
											
											
										],
				
				
				columnDefs			:	[ 
											<?php //SETTING UNTUK KOLOM 0 (NOMOR URUT) ?>
											{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
											<?php //SETTING UNTUK KOLOM 2 (ACTION) ?>
											{"searchable": false,"orderable": false,"targets": 1} ,
											<?php //SETTING UNTUK KOLOM 3 (ACTION) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 2} ,
							
										],
							
				order				: 	[[ 1, 'asc' ]],
			
				
										<?php //MENAMBAHKAN CLASS PADA ROW ?>
				rowCallback			: 	function(row, data, iDisplayIndex) {
											$(row).addClass('cursor-pointer');
											$(row).addClass('ybs-rows-click');
					
											var info = this.fnPagingInfo();
											var page = info.iPage;
											var length = info.iLength;
											var index = page * length + (iDisplayIndex + 1);
											$('td:eq(0)', row).html(index);
										},							
				
										<?php //MEMANGGIL ULANG FUNGSI SAAT TABLE DI DRAW ULANG	 ?>
				drawCallback		: 	function() {
											$('.dt-select2').iCheck({
												checkboxClass: 'icheckbox_flat-green',
											});
											
										},
				dom					: 'Blfrtip',
				
				buttons				: [],			
				
				initComplete		: 	function() {
											var api = this.api();
											if(value_search!==undefined){
												api.search(value_search).draw();	
											}
											
											$('#table-detail_filter input')
													.off('.DT')
													.on('keyup.DT', function(e) {
														if (e.keyCode == 13) {
															value_search =this.value;
															api.search(this.value).draw();
														}
											});									
											
											$('.column-search').on('keyup', function(e) {
												if (e.keyCode == 13) {
														var i = $(this).attr('data_index');
														api.columns(i).search(this.value).draw();
												}
											});									},						
				
				scrollY 			:	"300px",
				scrollCollapse		:	false,
				scrollX 			:	true,
				paging				: 	false,
				lengthChange		: 	true,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	true,
				ordering			: 	true,
				info				: 	false,
				autoWidth			: 	false,
				responsive			: 	false,
				orderCellsTop		:   true,

			});	
}

var table_detail_selisih;

function refresh_table_selisih(value_search){
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };	
	

				
table_detail_selisih = $('#table-detail-selisih').dataTable({
				destroy				: true,
				processing			: true,
				serverSide			: true,				
				language			: {processing : '<div class="dimmer active"><div class="loader"></div><br><br><br>mohon tunggu...</div>'},
				ajax				:	{	url: link_refresh_selisih ,
											type: "POST",
											dataSrc: "message",	
										
											data : function ( d ){
													if(value_search!==undefined){
														d.search = {value:value_search,regex:false};
													}
																										d.ci_csrf_token = get_sec_val();
													
												},
												
																						dataFilter: function(response){
															set_sec_val(response);
															return response;
												},										},
							
				 
				columns				:	[	{data:null,width:"5%"},											
											{data:null,width:"10%",
																								render: function ( data, type, row ) {
														if ( type === 'display' ) {
															var konfirm='';
															var btn_group='';
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete_selisih_detail ?>","#table-detail-selisih") \'  ><i class="fa fa-trash-o"></i></button></small>';
															return btn_group;
														}	
														return data;	
												}	
											},										
										
											{data:"jenis_uang" ,},
											{data:"pecahan" ,},
											{data:"nama_selisih" ,},
											{data:"jumlah" ,},										
											{data:"nama_lengkap" ,},
											{data:"input_time" ,},										
																
											
											
										],
				
				
				columnDefs			:	[ 
																						{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
								
																						{"searchable": false,"orderable": false,"targets": 1} ,

																						{"searchable": false,"orderable": false,"targets": 2} ,
																						{"searchable": false,"orderable": false,"visible": false,"targets": 3} ,
							
										],
							
				order				: 	[[ 1, 'asc' ]],
			
				
														rowCallback			: 	function(row, data, iDisplayIndex) {
											$(row).addClass('cursor-pointer');
											$(row).addClass('ybs-rows-click');
					
											var info = this.fnPagingInfo();
											var page = info.iPage;
											var length = info.iLength;
											var index = page * length + (iDisplayIndex + 1);
											$('td:eq(0)', row).html(index);
										},							
				
														drawCallback		: 	function() {
											$('.dt-select2').iCheck({
												checkboxClass: 'icheckbox_flat-green',
											});
											
										},
				dom					: 'Blfrtip',
				
				buttons				: [],			
				
				initComplete		: 	function() {
											var api = this.api();
											if(value_search!==undefined){
												api.search(value_search).draw();	
											}
											
											$('#table-detail_filter input')
													.off('.DT')
													.on('keyup.DT', function(e) {
														if (e.keyCode == 13) {
															value_search =this.value;
															api.search(this.value).draw();
														}
											});									
											
											$('.column-search').on('keyup', function(e) {
												if (e.keyCode == 13) {
														var i = $(this).attr('data_index');
														api.columns(i).search(this.value).draw();
												}
											});									},						
				
				scrollY 			:	"300px",
				scrollCollapse		:	false,
				scrollX 			:	true,
				paging				: 	false,
				lengthChange		: 	true,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	true,
				ordering			: 	true,
				info				: 	false,
				autoWidth			: 	false,
				responsive			: 	false,
				orderCellsTop		:   true,

			});	
}

var table_penjelasan;

function refresh_table_penjelasan(value_search){
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };	
	

				
table_penjelasan = $('#table-penjelasan').dataTable({
				destroy				: true,
				processing			: true,
				serverSide			: true,				
				language			: {processing : '<div class="dimmer active"><div class="loader"></div><br><br><br>mohon tunggu...</div>'},
				ajax				:	{	url: link_refresh_penjelasan ,
											type: "POST",
											dataSrc: "message",	
										
											data : function ( d ){
													if(value_search!==undefined){
														d.search = {value:value_search,regex:false};
													}
																										d.ci_csrf_token = get_sec_val();
													
												},
												
																						dataFilter: function(response){
															set_sec_val(response);
															return response;
												},										},
							
				 
				columns				:	[	{data:null,width:"5%"},											
											{data:null,width:"10%",
																								render: function ( data, type, row ) {
														if ( type === 'display' ) {
															var konfirm='';
															var btn_group='';
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete_penjelasan ?>","#table-penjelasan") \'  ><i class="fa fa-trash-o"></i></button></small>';
															return btn_group;
														}	
														return data;	
												}	
											},										
										
											{data:"penjelasan" ,		},
											{data:"jam" ,		},
											{data:"kamera" ,		},
											{data:"no_seri" ,		},
											{data:"nama_lengkap" ,		},
											{data:"input_time" ,		},								
																
											
											
										],
				
				
				columnDefs			:	[ 
																						{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
								
																						{"searchable": false,"orderable": false,"targets": 1} ,

																						{"searchable": false,"orderable": false,"targets": 2} ,
																						{"searchable": false,"orderable": false,"visible": false,"targets": 3} ,
							
										],
							
				order				: 	[[ 1, 'asc' ]],
			
				
														rowCallback			: 	function(row, data, iDisplayIndex) {
											$(row).addClass('cursor-pointer');
											$(row).addClass('ybs-rows-click');
					
											var info = this.fnPagingInfo();
											var page = info.iPage;
											var length = info.iLength;
											var index = page * length + (iDisplayIndex + 1);
											$('td:eq(0)', row).html(index);
										},							
				
														drawCallback		: 	function() {
											$('.dt-select2').iCheck({
												checkboxClass: 'icheckbox_flat-green',
											});
											
										},
				dom					: 'Blfrtip',
				
				buttons				: [],			
				
				initComplete		: 	function() {
											var api = this.api();
											if(value_search!==undefined){
												api.search(value_search).draw();	
											}
											
											$('#table-detail_filter input')
													.off('.DT')
													.on('keyup.DT', function(e) {
														if (e.keyCode == 13) {
															value_search =this.value;
															api.search(this.value).draw();
														}
											});									
											
											$('.column-search').on('keyup', function(e) {
												if (e.keyCode == 13) {
														var i = $(this).attr('data_index');
														api.columns(i).search(this.value).draw();
												}
											});									},						
				
				scrollY 			:	"300px",
				scrollCollapse		:	false,
				scrollX 			:	true,
				paging				: 	false,
				lengthChange		: 	true,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	true,
				ordering			: 	true,
				info				: 	false,
				autoWidth			: 	false,
				responsive			: 	false,
				orderCellsTop		:   true,

			});	
}
</script>
