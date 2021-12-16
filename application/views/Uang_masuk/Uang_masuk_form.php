
<?php echo _css('selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_no ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->no ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_masuk_cabang_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->cabang_id; 
								  echo create_cmb_database(array(	'id'			=>'cabang_id',
																	'name'			=>'cabang_id',
																	'table'			=>'app_cabang_cpc',
																	'field_show'	=>'nama_cabang',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_masuk_sentra_kas_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->sentra_kas_id; 
								  echo create_cmb_database(array(	'id'			=>'sentra_kas_id',
																	'name'			=>'sentra_kas_id',
																	'table'			=>'app_sentra_kas',
																	'field_show'	=>'sentra',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_jumlah_global ?></label>
							<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah_global' name='jumlah_global' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo number_format($data->jumlah_global,2) ?>' autocomplete='off'>
					</div>
					</div>
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_status_penerimaan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='status_penerimaan' name='status_penerimaan' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->status_penerimaan ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
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
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_tiba ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='waktu_tiba' name='waktu_tiba' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_tiba ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_waktu_serah_terima ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='waktu_serah_terima' name='waktu_serah_terima' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_serah_terima ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_detail_tas ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='detail_tas' name='detail_tas' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->detail_tas ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->keterangan ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_input_time ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='input_time' name='input_time' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->input_time ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_masuk_user_update ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->user_update; 
								  echo create_cmb_database(array(	'id'			=>'user_update',
																	'name'			=>'user_update',
																	'table'			=>'sys_user',
																	'field_show'	=>'nmuser',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_masuk_update_time ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='update_time' name='update_time' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->update_time ?>' >
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

<?php echo _js('selectize,datepicker')?>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');

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
		format:'dd.mm.yyyy',
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
	a.process('<?php echo $link_save?>',send_data,'POST');
	a.onAfterSuccess = function(){
			cancel();
	}
	a.onBeforeFailed = function(){
			cancel();
	}
}


</script>

