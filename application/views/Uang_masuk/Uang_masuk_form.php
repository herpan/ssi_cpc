
<?php echo _css('selectize,datepicker,datetimepicker,datatables,icheck')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>

					<div class='row'>
	
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_no ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->no ?>' >
					</div>
					</div>


					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->c_bank_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->bank_id; 
								  echo create_cmb_database(array(	'id'			=>'bank_id',
																	'name'			=>'bank_id',
																	'table'			=>'app_bank',
																	'field_show'	=>'bank',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select-link data-sending')); 
						    ?> 
					</div>
					</div>
								
			
					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_masuk_cabang_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->cabang_id; 
								  $where=null;
							      if($this->_user_sentra_ids!==NULL){
									$where="sentra_kas_id in ($this->_user_sentra_ids)";
								  }
								  echo create_cmb_database(array(	'id'			=>'cabang_id',
																	'name'			=>'cabang_id',
																	'table'			=>'app_cabang_cpc',
																	'field_show'	=>'nama_cabang',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'bank_id',
																	'class'			=>'custom-select-link data-sending'),$where); 
						    ?> 
					</div>
					</div>					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_tanggal_penerimaan ?></label>
							<div class='input-group'>
							<span class='input-group-prepend' id='basic-addon1'>
							<span class='input-group-text'><i class="fa fa-calendar"></i></span>
							</span>
							<input readonly type='text' class='form-control data-sending input-simple-date' placeholder='<?php echo $title->general->desc_required ?>' id='tanggal_penerimaan' value='<?php if(isset($data)) echo $data->tanggal_penerimaan?>'>
							</div>
					</div>
					</div>
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_tiba ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_tiba' name='waktu_tiba' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_tiba ?>' >
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_serah_terima ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_serah_terima' name='waktu_serah_terima' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_serah_terima ?>' >
					</div>
					</div>
					
										
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_diserahkan_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diserahkan_oleh' name='diserahkan_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diserahkan_oleh ?>' >
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_diterima_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diterima_oleh' name='diterima_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diterima_oleh ?>' >
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_no_kendaraan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no_kendaraan' name='no_kendaraan' placeholder='' value='<?php if(isset($data)) echo $data->no_kendaraan ?>' >
					</div>
					</div>
					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='' value='<?php if(isset($data)) echo $data->keterangan ?>' >
					</div>
					</div>	

					</div>
										 
	
	<div class='col-md-12 col-xl-12'>

	   <div class='form-group'>
		<button id='btn-apply' type='button' class='btn btn-primary'><i class='fe fe-check'></i> <?php echo $title->general->button_apply ?></button>	
		<button disabled='' id='btn-save' type='button' class='btn btn-primary'><i class="fe fe-save"></i> <?php echo $title->general->button_save ?></button>	
		<button disabled='' id='btn-cancel' type='button' class='btn btn-primary'> <?php echo $title->general->button_cancel ?></button>
		<a href='<?php echo $link_back ?>' id='btn-close' class='btn btn-primary'> <?php echo $title->general->button_close ?></a>
	   </div>
			 
	</div>
	</form>	

<?php echo card_close()?>

<?php echo card_open('Detail Uang Masuk','bg-teal',true)?>
<form id="form-b">
<div class='row'>	
	<div class='col-md-4 col-lg-3'>
	<div class='form-group'> 
			<input hidden class='data-sending' id='detail_id' name="id" value=''>
			<input hidden class='data-sending' id='uang_masuk_id' name="uang_masuk_id" value='<?php if(isset($uang_masuk_id))echo $uang_masuk_id?>'>
			<input hidden class='data-sending' id='kategori_selisih_id' name="kategori_selisih_id" value='0'>
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

	<div class='col-md-4 col-lg-3'>
	<div class='form-group'> 
			<label class='form-label'>PECAHAN</label> 
			<?php
					echo create_cmb_database(array(	'id'			=>'pecahan_id',
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

	<div class='col-md-4 col-lg-3'>
	<div class='form-group'>
			<label class='form-label'>JUMLAH (Rp)</label>
			<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah' name='jumlah' placeholder='<?php echo $title->general->desc_required ?>' value='' autocomplete='off'>
	</div>
	</div>

	<div class='col-md-4 col-lg-3'>
	<div class='form-group'>
	<label class='form-label'><br/></label>
	<div class="btn-group pull-right" role="group">
	<button type="button" id="btn-save-detail" class="btn btn-primary">Tambah</button>
	<button type="button" id="btn-cancel-detail" class="btn btn-danger">Batal</button>
	</div>	
	</div>
	</div>

</div>

</form>

	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail' class='table' style='width:150%'>
		<thead>	
            <tr>
			<th class="nst">No</th>		
			<th class="nst">Action</th>
			<th>ID</th>	
			<th>JENIS_UANG</th>
			<th>PECAHAN</th>
			<th>JUMLAH</th>
			<th>USER_INPUT</th>
			<th>INPUT_TIME</th>
			<th>USER_UPDATE</th>
			<th>UPDATE_TIME</th>
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

<?php echo card_open('Daftar Segel','bg-teal',true)?>
<form id='form-c'>
<div class='row'>
				<input hidden class='data-sending' id='detail_tas_id' name="id" value=''>
	
				<input hidden class='data-sending' id='tas_uang_masuk_id' name="uang_masuk_id" value='<?php if(isset($uang_masuk_id))echo $uang_masuk_id?>'>			
			
					<div class='col-md-4 col-lg-3'>
					<div class='form-group'>
							<label class='form-label'>NO_SEGEL</label>
							<input type='text' class='form-control data-sending focus-color'  id='no_segel' name='no_segel' placeholder='<?php echo $title->general->desc_required ?>' value='' >
					</div>
					</div>
			
			
					<div class='col-md-4 col-lg-3'>
					<div class='form-group'>
							<label class='form-label'>NO_TAS</label>
							<input type='text' class='form-control data-sending focus-color'  id='no_tas' name='no_tas' placeholder='' value='' >
					</div>
					</div>
			
			
					<div class='col-md-4 col-lg-3'>
					<div class='form-group'>
							<label class='form-label'>KETERANGAN</label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan_tas' name='keterangan' placeholder='' value='' >
					</div>
					</div>

					<div class='col-md-4 col-lg-3'>
					<div class='form-group'>
					<label class='form-label'><br/></label>
					<div class="btn-group pull-right" role="group">
					<button type="button" id="btn-save-detail-tas" class="btn btn-primary">Tambah</button>
					<button type="button" id="btn-cancel-detail-tas" class="btn btn-danger">Batal</button>
					</div>	
					</div>
					</div>
</div>
</form>
	


	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail-tas' class='table' style='width:150%'>
		<thead>	
		<tr>
			<th class="nst">No</th>			
			<th class="nst">Action</th>
			<th>ID</th>
			<th>NO_SEGEL</th>
			<th>NO_TAS</th>
			<th>KETERANGAN</th>
			<th>USER_INPUT</th>
			<th>INPUT_TIME</th>
			<th>USER_UPDATE</th>
			<th>UPDATE_TIME</th>
		</tr>
        </thead>
		<tbody>
		
		</tbody>
		</table>		
		</small>
		</div>		



<?php echo card_close()?>

<?php echo _js('ybs,selectize,mommentjs,datepicker,datetimepicker,datatables,icheck')?>

<script src=" <?= base_url('node_modules/socket.io/client-dist/socket.io.js') ?>"></script>
<script src=" <?= base_url('assets/js/ws.js') ?>"></script>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');

var url_save='<?php echo $link_save?>'

var link_add ='<?php echo $link_save_detail?>';
var link_update ='<?php echo $link_update_detail?>';
var action_link=link_add;

var link_add_tas ='<?php echo $link_save_detail_tas?>';
var link_update_tas ='<?php echo $link_update_detail_tas?>';
var action_link_tas=link_add_tas;

var link_refresh='<?php echo $link_refresh_table;?>';
var link_refresh_tas='<?php echo $link_refresh_table_tas;?>';

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

	linkToSelectize('bank_id','cabang_id');

	linkToSelectize('jenis_uang_id','pecahan_id');

	$('.timepicker').datetimepicker({
		format: 'HH:mm'        
	});	

})

	
$('.data-sending').keydown(function(e){
	remove_message();
	switch(e.which){
		case 13 :
		apply();
		return false;
	}
});

</script>

<script>
$('.input-simple-date').datepicker({ 
		autoclose: true ,
		format:'yyyy-mm-dd',
 })

$('#btn-apply').click(function(){
		apply();
		play_sound_apply();
});

$('#btn-close').click(function(){
	play_sound_apply();
});

$('#btn-cancel').click(function(){
	cancel();
	play_sound_apply();
});

$('#btn-save').click(function(){
	simpan();
})

$('#btn-save-detail').click(function(){
	simpan_detail();
})

$('#btn-cancel-detail').click(function(){
	reset_form_detail();
})

$('#btn-save-detail-tas').click(function(){
	simpan_detail_tas();
})

$('#btn-cancel-detail-tas').click(function(){
	reset_form_detail_tas();
})

function apply(){
	$.each(custom_select,function(key,val){
		val.selectize.disable();
	});
	
	<?php 
	// NOTE : FOR DISABLE CUSTOM-SELECT-LINK 
	?>
	// $.each(custom_select_link,function(key,val){
	// 		val.selectize.disable();
	// });
	
	$('.form-control').attr('disabled',true);
	$('#btn-apply').attr('disabled',true);
	$('#btn-cancel').attr('disabled',false);
	$('#btn-save').attr('disabled',false);
	$('#btn-save').focus();
}
function cancel(){
	$.each(custom_select,function(key,val){
		val.selectize.enable();
	});
	<?php 
	// NOTE : FOR ENABLE CUSTOM-SELECT-LINK  
	?>
	// $.each(custom_select_link,function(key,val){
	// 		val.selectize.enable();
	// });
	
	$('.form-control').attr('disabled',false);
	$('#btn-cancel').attr('disabled',true);
	$('#btn-save').attr('disabled',true);
	$('#btn-apply').attr('disabled',false);
	
}


function simpan(){
	<?php
	/* mengambil data yang akan di kirim dari form-a */
	/* dalam bentuk array json tanpa penutup.. */
	/* memungkinkan penambahan data dengan cara push */
	/* ex. data.push */
	?>
	var data = get_dataSending('form-a');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(url_save,send_data,'POST');
	a.onAfterSuccess = function(){		
			cancel();
	}
	a.onSuccess = function(data){
		show_success_message(data.message);							
		play_sound_success();		
		//console.log(data);
		if (data.id !== undefined){
			url_save='<?php echo base_url('Uang_masuk/Uang_masuk/update_action')?>'
			link_add ='<?php echo base_url('Uang_masuk_detail/Uang_masuk_detail/create_action')?>';
			link_update ='<?php echo base_url('Uang_masuk_detail/Uang_masuk_detail/update_action')?>';
			link_add_tas ='<?php echo base_url('Uang_masuk_tas/Uang_masuk_tas/create_action')?>';
			link_update_tas ='<?php echo base_url('Uang_masuk/Uang_masuk/update_action')?>';
			link_refresh = link_refresh.replace("xxxx", data.id);
			link_refresh_tas = link_refresh_tas.replace("xxxx", data.id);
			action_link=link_add;
			action_link_tas=link_add_tas;

			$('#id').val(data.id);
			$('#uang_masuk_id').val(data.id);
			$('#tas_uang_masuk_id').val(data.id);
		}
	}
	a.onBeforeFailed = function(){
			cancel();
	}
}

function simpan_detail(){
	<?php
	/* mengambil data yang akan di kirim dari form-a */
	/* dalam bentuk array json tanpa penutup.. */
	/* memungkinkan penambahan data dengan cara push */
	/* ex. data.push */
	?>
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
		reset_form_detail();		
	}	
}

function simpan_detail_tas(){
	<?php
	/* mengambil data yang akan di kirim dari form-a */
	/* dalam bentuk array json tanpa penutup.. */
	/* memungkinkan penambahan data dengan cara push */
	/* ex. data.push */
	?>
	var data = get_dataSending('form-c');
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending(data);

	var a = new ybsRequest();
	a.process(action_link_tas,send_data,'POST');
	a.onAfterSuccess = function(){
		refresh_table_tas();
		reset_form_detail_tas();
	}	
}

function cancel_detail(){	
	reset_form_detail();
}

function cancel_detail_tas(){	
	reset_form_detail_tas();
}

function reset_form_detail(){
	var $select = $("#jenis_uang_id").selectize();
	var selectize = $select[0].selectize;
	selectize.clear();
	

	var $select2 = $("#pecahan_id").selectize();
	var selectize2 = $select2[0].selectize;
	selectize2.clear();
	$("#jumlah").val('');

	$('#btn-save-detail').html('Tambah');

	action_link=link_add;
}

function getEdit(id,jenis_uang_id,pecahan_id,jumlah){	
	
	$('#detail_id').val(id);

	$('#jumlah').val(numberFormat(jumlah));	
	

	var $select = $("#jenis_uang_id").selectize();
	var selectize = $select[0].selectize;

	selectize.setValue(jenis_uang_id,false); 
	

	var $select2 = $("#pecahan_id").selectize();
	var selectize2 = $select2[0].selectize;
	selectize2.setValue(pecahan_id,false); 

	$('#btn-save-detail').html('Update');

	action_link=link_update;
}

function reset_form_detail_tas(){	
	$("#no_segel").val('');
	$("#no_tas").val('');
	$("#keterangan_tas").val('');	
	$('#btn-save-detail-tas').html('Tambah');
	action_link_tas=link_add_tas;
}

function getEditTas(id,no_segel,no_tas,keterangan){	

	
	$('#detail_tas_id').val(id);
	$('#no_segel').val(no_segel);
	$('#no_tas').val(no_tas);	
	$('#keterangan_tas').val(keterangan);	

	$('#btn-save-detail-tas').html('Update');

	 action_link_tas=link_update_tas;
}

</script>


<script>
var resp_table=true;
var table_detail;
$(document).ready(function(){

	$('#hscroll-table').prop('checked',true);
		set_scroll_table();
	
	$('#hscroll-table').change(function(){
		set_scroll_table();
	});
	
});

function set_scroll_table(){
	resp_table=!$('#hscroll-table').prop('checked');
	refresh_table();
}	

<?php //MEMBUAT INPUT SEARCH  ?>

// $('#table-detail thead tr').clone(true).appendTo( '#table-detail thead' );
// $('#table-detail thead tr:eq(1) th').each( function (i) {
// 	if($(this).hasClass('nst')){
// 		$(this).html('');
// 	}else{
// 		var bb =  '<input hidden  type="text" placeholder=" filter by.." class="column-search" data_index="'+i+'"/>' ;
// 		$(this).html(bb);
// 	}
// } );
					
	

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
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm " title="update" onclick=\' getEdit('+row.id+','+row.jenis_uang_id+','+row.pecahan_id+','+row.jumlah+') \'><i class="fa fa-edit"></i></button>'; 
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete ?>","#table-detail") \'  ><i class="fa fa-trash-o"></i></button></small>';
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
											{data:"nama_lengkap" ,},
											{data:"input_time" ,},
											{data:"userupdate_nama_lengkap" ,},
											{data:"update_time" ,},					
											
											
										],
				
				
				columnDefs			:	[ 
											<?php //SETTING UNTUK KOLOM 0 (NOMOR URUT) ?>
											{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
								
											<?php //SETTING UNTUK KOLOM 1 (CHECK) ?>
											//{"searchable": false,"orderable": false,"targets": 1} ,

											<?php //SETTING UNTUK KOLOM 2 (ACTION) ?>
											{"searchable": false,"orderable": false,"targets": 1} ,
											<?php //SETTING UNTUK KOLOM 3 (ACTION) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 2} ,
											{"className": 'dt-body-right',"targets": 4} ,
											{"className": 'dt-body-right',"targets": 5} ,
							
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
										
											
										// Update footer by showing the total with the reference of the column index 
									$( api.column(0).footer() ).html('Total');
										$( api.column(5).footer() ).html(numberFormat(Total)+".00");           
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
				lengthChange		: 	false,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	false,
				ordering			: 	true,
				info				: 	true,
				autoWidth			: 	false,
				responsive			: 	resp_table,
				orderCellsTop		:   true,

			});	
			refresh_table_tas();
			if(updated){
				update_data($('#bank_id').val());
			}
			else{
				updated=true;
			}
}
</script>


<script>
var resp_table_tas=true;
var table_detail_tas;
$(document).ready(function(){

	$('#hscroll-table-tas').prop('checked',true);
		set_scroll_table_tas();
	
	$('#hscroll-table-tas').change(function(){
		set_scroll_table_tas();
	});
	
});

function set_scroll_table_tas(){
	resp_table_tas=!$('#hscroll-table-tas').prop('checked');
	refresh_table_tas();
}	

// $('#table-detail-tas thead tr').clone(true).appendTo( '#table-detail-tas thead' );
// $('#table-detail-tas thead tr:eq(1) th').each( function (i) {
// 	if($(this).hasClass('nst')){
// 		$(this).html('');
// 	}else{
// 		var bb =  '<input hidden  type="text" placeholder=" filter by.." class="column-search" data_index="'+i+'"/>' ;
// 		$(this).html(bb);
// 	}
// } );
					
	

function refresh_table_tas(value_search_tas){
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
	if(!resp_table_tas){
		$('.column-search-tas').removeAttr('hidden');
	}else{
		$('.column-search-tas').attr('hidden','hidden');
	}	

				
table_detail_tas = $('#table-detail-tas').dataTable({
				destroy				: true,
				processing			: true,
				serverSide			: true,				
				language			: {processing : '<div class="dimmer active"><div class="loader"></div><br><br><br>mohon tunggu...</div>'},
				ajax				:	{	url: link_refresh_tas,
											type: "POST",
											dataSrc: "message",	
										
											data : function ( d ){
													if(value_search_tas!==undefined){
														d.search = {value:value_search_tas,regex:false};
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
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm " title="update" onclick=\' getEditTas('+row.id+','+'"'+row.no_segel+'"'+','+'"'+row.no_tas+'"'+','+'"'+row.keterangan+'"'+') \'><i class="fa fa-edit"></i></button>'; 
															btn_group = btn_group + '<button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete_tas ?>","#table-detail-tas") \'  ><i class="fa fa-trash-o"></i></button></small>';
															return btn_group;
														}	
														return data;	
												}	
											},
											
																							{data:"id" ,		},
																							{data:"no_segel" ,		},
																							{data:"no_tas" ,		},
																							{data:"keterangan" ,		},
																							{data:"nama_lengkap" ,		},
																							{data:"input_time" ,		},
																							{data:"userupdate_nama_lengkap" ,		},
																							{data:"update_time" ,		},
																
											
											
										],
				
				
				columnDefs			:	[ 
																						{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
								
																					
																						{"searchable": false,"orderable": false,"targets": 1} ,
																						{"searchable": false,"orderable": false,"visible": false,"targets": 2} ,
							
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
											if(value_search_tas!==undefined){
												api.search(value_search_tas).draw();	
											}
											
											$('#table-detail-tas_filter input')
													.off('.DT')
													.on('keyup.DT', function(e) {
														if (e.keyCode == 13) {
															value_search_tas =this.value;
															api.search(this.value).draw();
														}
											});									
											
											$('.column-search-tas').on('keyup', function(e) {
												if (e.keyCode == 13) {
														var i = $(this).attr('data_index');
														api.columns(i).search(this.value).draw();
												}
											});									},						
				
				scrollY 			:	"300px",
				scrollCollapse		:	false,
				scrollX 			:	true,
				paging				: 	false,
				lengthChange		: 	false,
				lengthMenu			: 	[[10,50,100], [10,50,100]],
				searching			: 	false,
				ordering			: 	true,
				info				: 	true,
				autoWidth			: 	false,
				responsive			: 	resp_table_tas,
				orderCellsTop		:   true,

			});	
}
</script>

