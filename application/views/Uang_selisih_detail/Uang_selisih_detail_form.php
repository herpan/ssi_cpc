
<?php echo _css('selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_uang_masuk_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->uang_masuk_id; 
								  echo create_cmb_database(array(	'id'			=>'uang_masuk_id',
																	'name'			=>'uang_masuk_id',
																	'table'			=>'app_uang_masuk',
																	'field_show'	=>'no',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_jenis_uang_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->jenis_uang_id; 
								  echo create_cmb_database(array(	'id'			=>'jenis_uang_id',
																	'name'			=>'jenis_uang_id',
																	'table'			=>'app_jenis_uang',
																	'field_show'	=>'jenis_uang',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_pecahan_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->pecahan_id; 
								  echo create_cmb_database(array(	'id'			=>'pecahan_id',
																	'name'			=>'pecahan_id',
																	'table'			=>'app_pecahan',
																	'field_show'	=>'pecahan',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_kategori_selisih_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->kategori_selisih_id; 
								  echo create_cmb_database(array(	'id'			=>'kategori_selisih_id',
																	'name'			=>'kategori_selisih_id',
																	'table'			=>'app_kategori_selisih',
																	'field_show'	=>'nama_selisih',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_jumlah ?></label>
							<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah' name='jumlah' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo number_format($data->jumlah,2) ?>' autocomplete='off'>
					</div>
					</div>
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_status ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='status' name='status' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->status ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_tanggal_pencatatan ?></label>
							<div class='input-group'>
							<span class='input-group-prepend' id='basic-addon1'>
							<span class='input-group-text'><i class="fa fa-calendar"></i></span>
							</span>
							<input readonly type='text' class='form-control data-sending input-simple-date' placeholder='<?php echo $title->general->desc_required ?>' id='tanggal_pencatatan' value='<?php if(isset($data)) echo $data->tanggal_pencatatan?>'>
							</div>
					</div>
					</div>
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->keterangan ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_input_time ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='input_time' name='input_time' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->input_time ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_user_update ?></label> 
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
							<label class='form-label'><?php echo $title->app_uang_selisih_detail_update_time ?></label>
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
});

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

