
<?php echo _css('datatables,icheck')?>

<div class="row">	
<div class='col-md-12 col-xl-12'>


<!--
		<a class="btn-lte3 btn-app text-lime">
			<i class="fas fa-plus"></i> Tambah
		</a>-->
		
		<a class="btn-lte3 btn-app text-red" id="btn-delete" href="javascript:void(0)">
			<i class="fas fa-trash"></i> Hapus yang di centang
		</a>

	<div class="alert  alert-danger" role="alert" style="font-size:12px">
 User yang belum logout tidak dapat di hapus permanent
</div>	
<br>
<br>
</div>

</div>



	<div class='box-body table-responsive'  id='box-table'>
		<small>
		<table id='table-detail' class='table table-striped' style='width:150%'>
		<thead>
	
            <tr >
			<th class="nst">No</th>
			<th class="nst"><label><input type='checkbox'  id='general_check'> </label></th>
			<?php foreach($title->table_column as $key=>$val){ ?>
				<th><?php echo $val ?></th>
			<?php } ?>
			<th class="nst">Access URL</th>
			<th class="nst">Action</th>
            </tr>

        </thead>
		<tbody>
		
		</tbody>
		</table>
		<div hidden>
			<button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modal-danger'   id='button_delete_single' ></button>
		</div>
		</small>
	</div>
		
		<div class='col-md-12 col-xl-12'>
		<div class='form-group'>
				
					<label class='custom-switch'>
						<input type='checkbox' id='hscroll-table' class='custom-switch-input' value='on'>
						<span class='custom-switch-indicator'></span>
						<span class='custom-switch-description'>HScroll</span>
					</label>
		</div>
			</div>

	






<?php echo _js('datatables,icheck')?>
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<script>var page_version="1.0.8"</script>

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
	// if($(this).hasClass('nst')){
		// $(this).html('');
	// }else{
		// var bb =  '<input hidden  type="text" placeholder=" filter by.." class="column-search" data_index="'+i+'"/>' ;
		// $(this).html(bb);
	// }
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
				ajax				:	{	url: "<?php echo $link_refresh_table; ?>" ,
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
											{data:null,width:"5%",
												<?php //MEMBUAT CHECKBOX ?>
												render: function ( data, type, row ) {
														if ( type === 'display' ) {
															 var konfirm='';
															 return '<input type="checkbox" class="checkbox flat-red dt-select2" value="'+row.id+"-"+konfirm+"  "+'">';
														}
														
														return data;
												},
											},
											
											<?php foreach($title->table_column as $alias_field=>$val){?>
												{data:"<?php echo $alias_field ?>" ,		},
											<?php }?>
											{data:null,width:"5%",
												<?php //MEMBUAT TOTAL ACCESS ?>
												render: function ( data, type, row ) {
														if ( type === 'display' ) {
															 var xx  = '<div class="tag tag-danger" style="font-size:10px">'+row.total_access+'x<span class="tag-addon"><i class="fe fe-activity"></i></span></div>';		
															 return xx;
														}
														
														return data;
												},
											},

											{data:null,width:"10%",
												<?php //MENAMBAHKAN BUTTON ACTION ?>
												render: function ( data, type, row ) {
														if ( type === 'display' ) {
															var konfirm='';
															var btn_group='';
															btn_group = btn_group + '<small><a class="btn btn-default text-gray btn-sm"  href="<?php echo $link_detail?>'+row.id+'" ><i class="fa fa-search-plus"></i></a></small>';
															btn_group = btn_group + '<small><button type="button" class="btn btn-default text-red btn-sm"  id="btn_pre_delete" onclick=\' ybsDeleteTable("'+row.id+"-"+konfirm+'","<?php echo $link_delete ?>","#table-detail") \'  ><i class="fa fa-trash-o"></i></button></small>';
															return btn_group;
														}	
														return data;	
												}	
											},
											
											
										],
				
				
				columnDefs			:	[ 
											<?php //SETTING UNTUK KOLOM 0 (NOMOR URUT) ?>
											{"searchable": false,"orderable": false,"targets": 0, "className":"dt-center"} ,
								
											<?php //SETTING UNTUK KOLOM 1 (CHECK) ?>
											{"searchable": false,"orderable": false,"targets": 1} ,
											<?php //SETTING UNTUK KOLOM 9 (TOTAL) ?>
											{"searchable": false,"orderable": false,"targets": 9} ,
							
										],
							
				order				: 	[[ 1, 'asc' ]],
			
				
										<?php //MENAMBAHKAN CLASS PADA ROW ?>
				rowCallback			: 	function(row, data, iDisplayIndex) {
											$(row).addClass('cursor-pointer');
											$(row).addClass('ybs-rows-click');
											$(row).css('font-size','12px');
					
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
				
				buttons				: ['copy','excel'],			
				
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
				info				: 	true,
				autoWidth			: 	false,
				responsive			: 	resp_table,
				orderCellsTop		:   true,

			});	
}


$('#btn-delete').click(function(){
	ybsDeleteTableChecked('<?php echo $link_delete?>','#table-detail');
});




	
</script>


