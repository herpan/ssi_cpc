
<?php echo _css('selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_selisih_uang_masuk_id ?></label> 
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
							<label class='form-label'><?php echo $title->app_uang_selisih_no ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->no ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_mulai_proses ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='mulai_proses' name='mulai_proses' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->mulai_proses ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_selesai_proses ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='selesai_proses' name='selesai_proses' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->selesai_proses ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_nama_oa ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_oa' name='nama_oa' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->nama_oa ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_kasir_ttp ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='kasir_ttp' name='kasir_ttp' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->kasir_ttp ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_nama_kasir_bank_client ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_kasir_bank_client' name='nama_kasir_bank_client' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->nama_kasir_bank_client ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_ditemukan_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_oleh' name='ditemukan_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->ditemukan_oleh ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_ditemukan_id ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_id' name='ditemukan_id' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->ditemukan_id ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_disaksikan_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_oleh' name='disaksikan_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->disaksikan_oleh ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_disaksikan_id ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_id' name='disaksikan_id' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->disaksikan_id ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_diketahui_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_oleh' name='diketahui_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diketahui_oleh ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_diketahui_id ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_id' name='diketahui_id' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diketahui_id ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_catatan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='catatan' name='catatan' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->catatan ?>' >
					</div>
					</div>
			
			
					<div class='col-md-12 col-xl-12'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_selisih_lampiran ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='lampiran' name='lampiran' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->lampiran ?>' >
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

