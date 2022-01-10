
<?php echo _css('selectize,datepicker,datetimepicker,datatables,icheck')?>

<?php echo card_open('Form','bg-green',true)?>	
	
	<form id='form-a'>
	<input hidden class='data-sending' id='id' value='<?php if(isset($id))echo $id?>'>

					<div class='row'>
	
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_no ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->no ?>' readonly>
					</div>
					</div>


					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->c_bank_id ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='bank_id' name='bank_id' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->bank ?>' readonly> 
					</div>
					</div>
								
			
					<div class='col-md-6 col-xl-6'>				
					<div class='form-group'> 
							<label class='form-label'><?php echo $title->app_uang_keluar_cabang_id ?></label> 
							<input type='text' class='form-control data-sending focus-color'  id='nama_cabang' name='nama_cabang' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->nama_cabang ?>' readonly> 
					</div>
					</div>					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_tanggal_pengiriman ?></label>
							<div class='input-group'>
							<span class='input-group-prepend' id='basic-addon1'>
							<span class='input-group-text'><i class="fa fa-calendar"></i></span>
							</span>
							<input readonly type='text' class='form-control data-sending input-simple-date' placeholder='<?php echo $title->general->desc_required ?>' id='tanggal_pengiriman' value='<?php if(isset($data)) echo $data->tanggal_pengiriman?>' readonly>
							</div>
					</div>
					</div>
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_waktu_kirim ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_kirim' name='waktu_kirim' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_kirim ?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_waktu_serah_terima ?></label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='waktu_serah_terima' name='waktu_serah_terima' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->waktu_serah_terima ?>' readonly>
					</div>
					</div>
					
										
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_diserahkan_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diserahkan_oleh' name='diserahkan_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diserahkan_oleh ?>' readonly>
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_diterima_oleh ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='diterima_oleh' name='diterima_oleh' placeholder='<?php echo $title->general->desc_required ?>' value='<?php if(isset($data)) echo $data->diterima_oleh ?>' readonly>
					</div>
					</div>

					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_no_kendaraan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='no_kendaraan' name='no_kendaraan' placeholder='' value='<?php if(isset($data)) echo $data->no_kendaraan ?>' readonly>
					</div>
					</div>
					
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'><?php echo $title->app_uang_keluar_keterangan ?></label>
							<input type='text' class='form-control data-sending focus-color'  id='keterangan' name='keterangan' placeholder='' value='<?php if(isset($data)) echo $data->keterangan ?>' readonly>
					</div>
					</div>	

					</div>
	</form>	

<?php echo card_close()?>

<?php echo card_open('Detail Uang Keluar','bg-teal',true)?>
	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail' class='table' style='width:150%'>
		<thead>	
            <tr>
			<th class="nst">No</th>				
			<th>ID</th>	
			<th>JENIS_UANG</th>
			<th>PECAHAN</th>
			<th>EMISI</th>
			<th>KONDISI</th>
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
				<th></th>
		   </tr>
		</tfoot>
		</table>		
		</small>
		</div>
<?php echo card_close()?>

<?php echo card_open('Daftar Segel','bg-teal',true)?>

	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail-tas' class='table' style='width:150%'>
		<thead>	
		<tr>
			<th class="nst">No</th>				
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

<div class='col-md-12 col-xl-12'>
	<div class='form-group'>
		<a href='<?php echo $link_back ?>' id='btn-close' class='btn btn-primary'> <?php echo $title->general->button_close ?></a>
	</div>			 
</div>

<?php echo _js('ybs,selectize,mommentjs,datepicker,datetimepicker,datatables,icheck')?>

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');


var link_refresh='<?php echo $link_refresh_table;?>';
var link_refresh_tas='<?php echo $link_refresh_table_tas;?>';

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
	$('.timepicker').datetimepicker({
		format: 'HH:mm'        
	});	

})

	
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
											{data:"id" },
											{data:"jenis_uang" ,},
											{data:"pecahan" ,render: $.fn.dataTable.render.number( ',', '.', 2, '' ),},
											{data:"emisi" ,},
											{data:"kondisi" ,},
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

											<?php //SETTING UNTUK KOLOM 3 (ACTION) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 1} ,
											{"className": 'dt-body-right',"targets": 3} ,
											{"className": 'dt-body-right',"targets": 4} ,
							
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
											.column(6)
											.data()
											.reduce( function (a, b) {
												return intVal(a) + intVal(b);
											}, 0 );	    
										
											
										// Update footer by showing the total with the reference of the column index 
									$( api.column(0).footer() ).html('Total');
										$( api.column(6).footer() ).html(numberFormat(Total)+".00");           
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
				responsive			: 	false,
				orderCellsTop		:   true,

			});	
			refresh_table_tas();
}
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

