
<?php echo _css('selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_journal_cpc_bank_wilayah_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->bank_wilayah_id; 
								  echo create_cmb_database(array(	'id'			=>'bank_wilayah_id',
																	'name'			=>'bank_wilayah_id',
																	'table'			=>'app_bank_wilayah',
																	'field_show'	=>'nama_wilayah',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_journal_cpc_jenis_uang_id ?></label> 
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
							<label class='form-label'><?php echo $title->app_journal_cpc_pecahan_id ?></label> 
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
							<label class='form-label'><?php echo $title->app_journal_cpc_emisi_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->emisi_id; 
								  echo create_cmb_database(array(	'id'			=>'emisi_id',
																	'name'			=>'emisi_id',
																	'table'			=>'app_emisi',
																	'field_show'	=>'emisi',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_journal_cpc_kondisi_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->kondisi_id; 
								  echo create_cmb_database(array(	'id'			=>'kondisi_id',
																	'name'			=>'kondisi_id',
																	'table'			=>'app_kondisi',
																	'field_show'	=>'kondisi',
																	'primary_key'	=>'id', 
																	'selected'		=>$v,
																	'field_link'	=>'',
																	'class'			=>'custom-select data-sending')); 
						    ?> 
					</div>
					</div>			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_journal_cpc_jumlah ?></label>
							<input type='text' class='form-control data-sending focus-color ybs-input-number' id='jumlah' name='jumlah' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo number_format($data->jumlah,2) ?>' autocomplete='off'>
					</div>
					</div>
			
					<!-- <div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_journal_cpc_status ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='status' name='status' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->status ?>' >
					</div>
					</div> -->

					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_journal_cpc_tanggal_penerimaan ?></label>
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
							<label class='form-label'><?php echo $title->app_journal_cpc_tanggal_pencatatan ?></label>
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
							<label class='form-label'><?php echo $title->app_journal_cpc_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='' value='<?php if(isset($data)) echo $data->keterangan ?>' >
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

