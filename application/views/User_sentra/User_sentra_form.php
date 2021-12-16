
<?php echo _css('datatables,icheck,selectize,datepicker')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>
	
					<div class='col-md-12 col-xl-12'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_user_sentra_user_id ?></label> 
							<?php $v='';  if(isset($data)) $v = $data->user_id; 
								  echo create_cmb_database(array(	'id'			=>'user_id',
																	'name'			=>'user_id',
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
					<div class="form-group">
						<label class="form-label">Pilih Sentra Kas</label>
						<label class="form-label"><small>hanya Sentra yang di pilih yang akan di tampilkan.</small></label>

						<div class='box-body table-responsive'  id='box-table'>
							<small>
							<table id="table-detail-sentra" class="table ybs-table" style="width:150%">
							<thead>
						
								<tr>
								<th>No</th>
								<th class="checkbox-header"></th>
								<th>Sentra Kas</th>												
								</tr>

							</thead>
							<tbody>
							
							</tbody>
							</table>

							</small>
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

<?php echo _js('datatables,icheck,selectize,datepicker')?>

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

	refresh_table_sentra(<?php echo $data_sentra?>);
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

	var s		= $('#table-detail-sentra').get_checked();
	s     		= get_json_format('sentra_kas',s);
	
	<?php
	/* complite json format */
	/* ybs_dataSending(array); */
	?>
	send_data = ybs_dataSending([data,s]);

	var a = new ybsRequest();
	a.process('<?php echo $link_save?>',send_data,'POST');
	a.onAfterSuccess = function(){
			cancel();
	}
	a.onBeforeFailed = function(){
			cancel();
	}
}

function refresh_table_sentra(list){

$('#table-detail-sentra').DataTable({
			data				: list,		
						
			 
			columns				:	[	{data:'no',width:"5%"},
										{data:null,width:"5%",
											render: function ( data, type, row ) {
													if ( type === 'display' ) {
														 var konfirm="";
														 return '<input type="checkbox" class="checkbox flat-red dt-select2" '+ row.checked +' value="'+row.id+'">';
													}
													
													return data;
											},
										},
										
										
										{data: "sentra",										
										}
									
																				
									],
			
			
			columnDefs			:	[ 
										//SETTING UNTUK KOLOM 0 (NOMOR URUT)
										{"searchable": false,"orderable": false,"targets": 0} ,
							
										//SETTING UNTUK KOLOM 1 (CHECK)
										{"searchable": false,"orderable": false,"targets": 1} ,
						
									],
						
			order				: 	[[ 1, 'asc' ]],
		
			
									//MENAMBAHKAN CLASS PADA ROW
			createdRow			: 	function ( row, data, index ) {
										$(row).addClass('cursor-pointer');
										$(row).addClass('ybs-rows-click');
									},
			
									//MEMANGGIL ULANG FUNGSI SAAT TABLE DI DRAW ULANG	
			drawCallback		: 	function() {
										$('.dt-select2').iCheck({
											checkboxClass: 'icheckbox_flat-green',
										});
										
									},
			
			
			scrollY 			:	"300px",
			scrollCollapse		:	false,
			scrollX 			:	true,
			paging				: 	true,
			lengthChange		: 	false,
			lengthMenu			: 	[[ -1], [ "All"]],
			searching			: 	true,
			ordering			: 	true,
			info				: 	true,
			autoWidth			: 	false,
			responsive			: 	false,

		});
		
		//membuat nomor urut
		var t = $('#table-detail-sentra').DataTable();
		t.on( 'draw.dt', function () {
		var PageInfo = $('#table-detail-sentra').DataTable().page.info();
			 t.column(0, { page: 'current' }).nodes().each( function (cell, i) {
				 var num = i + 1 + PageInfo.start;
				cell.innerHTML = '<small>' + num + '</small>';
			} );
		} );

}


</script>

