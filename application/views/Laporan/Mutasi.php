
<?php echo _css('datatables,icheck,datepicker')?>

<?php echo card_open('Laporan Mutasi','bg-teal',true)?>

	<div class='row mb-5'>
		<div class='col-md-6 col-lg-4'>
		<?php 
			if($this->_user_bank_id==NULL){				
		?>
			<div class='input-group'>            
				<span class='input-group-prepend' id='basic-addon1'>
					<span class='input-group-text'>Bank</span>
				</span>
			<?php 				
					echo create_cmb_database(array(	'id'			=>'bank_id',
													'name'			=>'bank_id',
													'table'			=>'app_bank',
													'field_show'	=>'bank',
													'primary_key'	=>'id',
													'selected'	    =>'',                                                     
													'field_link'	=>'',
													'class'			=>'custom-select data-sending')); 
													
			?>
			</div>
		<?php } 
			else{
				echo '<input type="hidden" value="'.$this->_user_bank_id.'" id="bank_id">';
			}
		?>
		</div>		
		<div class='col-md-6 col-lg-4'>	
			<div class='input-group'>
				<span class='input-group-text'>Dari</span>       
				<input readonly type='text' class='form-control data-sending input-simple-date' placeholder='Pilih tanggal' id='dari' value='<?php echo date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );?>'>
				<span class='input-group-text'>Sampai</span>
				<input readonly type='text' class='form-control data-sending input-simple-date' placeholder='Pilih tanggal' id='sampai' value='<?php echo date('Y-m-d')?>'>				
			</div>	
		</div>
		<div class='col-md-6 col-lg-4'>	
			<div class='input-group'>
				<span class='input-group-button'><button id='btn-apply' type='button' class='btn btn-primary' onclick="load_mutasi()"><i class='fe fe-check'></i> Filter</button></span>
			</div>	
		</div>
	</div>

	<div class='box-body table-responsive'  id='box-table'>
	<?php //Isi Mutasi ?>		
	</div>

<?php echo card_close()?>

<?php echo _js('ybs,datepicker')?>

<script src=" <?= base_url('node_modules/socket.io/client-dist/socket.io.js') ?>"></script>
<script src=" <?= base_url('assets/js/ws.js') ?>"></script>

<script> 
var page_version="1.0.8"; 
let bank_id='';

$(document).ready(function(){ 

$('.input-simple-date').datepicker({ 
		autoclose: true ,
		format:'yyyy-mm-dd',
});

load_mutasi(); 

//Realtime Update Mutasi
socket.on('new_update', function(data) {   
	 let to_bank = data.to_bank;      
	 if ((parseInt(to_bank)==parseInt(bank_id)) || (bank_id=="")) {    
		 load_mutasi(); 
		 show_success_message("Data telah di update");            
	 }
 }); 
});

function load_mutasi(){
bank_id=$('#bank_id').val();
$("#box-table").hide();  
$.ajax({
type: 'POST',    
url: '<?php echo base_url('Laporan/Uang_masuk/load_mutasi')?>',
data: { 
	'bank_id': $('#bank_id').val(),
	'dari': $('#dari').val(),
	'sampai': $('#sampai').val()
},    
success: function(result){
	$("#box-table").html(result);
	$("#box-table").fadeIn();
}
});
}
</script>
