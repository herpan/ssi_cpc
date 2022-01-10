
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
	<div class='box-body table-responsive'  id='box-table'>		
		<table id='table-detail-proses' class='table' style='width:150%'>
		<thead>
	
            <tr >
			<th class="nst">No</th>			
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
							<input type='text' class='form-control data-sending focus-color'  id='no' name='no' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->no?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>MULAI_PROSES</label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='mulai_proses' name='mulai_proses' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->mulai_proses?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>SELESAI_PROSES</label>
							<input type='text' class='form-control data-sending focus-color timepicker'  id='selesai_proses' name='selesai_proses' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->selesai_proses?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>NAMA_OA</label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_oa' name='nama_oa' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->nama_oa?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>KASIR_TTP</label>
							<input type='text' class='form-control data-sending focus-color'  id='kasir_ttp' name='kasir_ttp' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->kasir_ttp?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>NAMA_KASIR_BANK/CLIENT</label>
							<input type='text' class='form-control data-sending focus-color'  id='nama_kasir_bank_client' name='nama_kasir_bank_client' placeholder='' value='<?php if(isset($data_selisih)) echo $data_selisih->nama_kasir_bank_client?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DITEMUKAN_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_oleh' name='ditemukan_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->ditemukan_oleh?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DITEMUKAN_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='ditemukan_id' name='ditemukan_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->ditemukan_id?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DISAKSIKAN_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_oleh' name='disaksikan_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->disaksikan_oleh?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DISAKSIKAN_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='disaksikan_id' name='disaksikan_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->disaksikan_id?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DIKETAHUI_OLEH</label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_oleh' name='diketahui_oleh' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->diketahui_oleh?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>DIKETAHUI_ID</label>
							<input type='text' class='form-control data-sending focus-color'  id='diketahui_id' name='diketahui_id' placeholder='wajib di isi..' value='<?php if(isset($data_selisih)) echo $data_selisih->diketahui_id?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>CATATAN</label>
							<input type='text' class='form-control data-sending focus-color'  id='catatan' name='catatan' value='<?php if(isset($data_selisih)) echo $data_selisih->catatan?>' readonly>
					</div>
					</div>
			
			
					<div class='col-md-6 col-xl-6'>
					<div class='form-group'>
							<label class='form-label'>LAMPIRAN</label>
							<input type='text' class='form-control data-sending focus-color'  id='lampiran' name='lampiran' value='<?php if(isset($data_selisih)) echo $data_selisih->lampiran?>' readonly>
					</div>
					</div>
</div>
</form>

<div class='col-md-12 col-xl-12'>
	<h4>Rincian Selisih</h4>			 
</div>
	<div class='box-body table-responsive'  id='box-table-selisih'>
		<small>
		<table id='table-detail-selisih' class='table' style='width:150%'>
		<thead>	
            <tr >
			<th class="nst">No</th>		
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
		<div class='box-body table-responsive'  id='box-table-penjelasan'>
		<small>
		<table id='table-penjelasan' class='table' style='width:150%'>
		<thead>	
            <tr >
			<th class="nst">No</th>											
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

<script>var page_version="1.0.8"</script>

<script> 
var custom_select = $('.custom-select').selectize({}); 	
var custom_select_link = $('.custom-select-link');
var link_refresh='<?php echo $link_refresh_table;?>';
var link_refres_proses='<?php echo $link_refresh_proses;?>';
var link_refresh_selisih='<?php echo $link_refresh_selisih;?>';
var link_refresh_penjelasan='<?php echo $link_refresh_penjelasan;?>';



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
											
											{data:"id" },
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
											<?php //SETTING UNTUK KOLOM 3 (ACTION) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 1} ,
											{"className": 'dt-body-right',"targets": 3} ,
											{"className": 'dt-body-right',"targets": 4} ,
											{"className": 'dt-body-right',"targets": 5} ,
											{"className": 'dt-body-right',"targets": 6} ,
							
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
											.column(4)
											.data()
											.reduce( function (a, b) {
												return intVal(a) + intVal(b);
											}, 0 );	  
										var TotalSK = api
										.column(5)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	  

										var TotalSL = api
										.column(6)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	

										var TotalP = api
										.column(7)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	

										var TotalB = api
										.column(8)
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );	
										
											
										// Update footer by showing the total with the reference of the column index 
									$( api.column(0).footer() ).html('Total');
									$( api.column(4).footer() ).html(numberFormat(Total)+".00"); 
									$( api.column(5).footer() ).html(numberFormat(TotalSK)+".00");
									$( api.column(6).footer() ).html(numberFormat(TotalSL)+".00");
									$( api.column(7).footer() ).html(numberFormat(TotalP)+".00");
									$( api.column(8).footer() ).html(numberFormat(TotalB)+".00");
										          
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
											<?php //SETTING UNTUK KOLOM 1 (ID) ?>
											{"searchable": false,"orderable": false,"visible": false,"targets": 1} ,
							
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
				paging				: 	true,
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
