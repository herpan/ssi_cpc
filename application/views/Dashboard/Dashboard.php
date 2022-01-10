<?php echo _css("chartjs,datatables,datepicker") ?>
<div class="col-md-12 col-xl-12 text-uppercase text-center">
    <h1>Kondisi Uang Dalam Khasanah</h1>
    <table style="width:100%">
    <thead>
    <tr>
        <td style="width:30%"></td>     
        <td style="width:40%">

        <div class='input-group'>            
            <span class='input-group-prepend' id='basic-addon1'>
                <span class='input-group-text'><i class="fa fa-university"></i></span>
            </span>        
        <?php 
                $where=NULL;
                $bank_id="";
                if($this->_user_bank_id!==NULL){
                    $where = ['id'=> $this->_user_bank_id];
                    $bank_id=$this->_user_bank_id;
                }
                echo create_cmb_database(array(	'id'			=>'bank_id',
                                                'name'			=>'bank_id',
                                                'table'			=>'app_bank',
                                                'field_show'	=>'bank',
                                                'primary_key'	=>'id',
                                                'selected'	    =>$bank_id,                                                     
                                                'field_link'	=>'',
                                                'class'			=>'custom-select data-sending'),$where); 
                                                
        ?>
        <span class='input-group-text'><i class="fa fa-calendar"></i></span>       
        <input readonly type='text' class='form-control data-sending input-simple-date' placeholder='Pilih tanggal' id='tanggal_pencatatan' value='<?php echo date('Y-m-d')?>'>
       
            <span class='input-group-button'><button id='btn-apply' type='button' class='btn btn-primary' onclick="load_dashboard(true)"><i class='fe fe-check'></i> Filter</button></span>
    
        </div>

        </td>
        <td style="width:30%"></td>       
    </tr>
    </thead>
    </table>         
</div> 
<div id="message-container" class="col-md-12 col-xl-12">
</div>
<div id="dashboard-container" class="col-md-12 col-xl-12">      
</div>

<?php echo _js('ybs,datatables,chartjs,datepicker')?>

<script src=" <?= base_url('node_modules/socket.io/client-dist/socket.io.js') ?>"></script>
<script src=" <?= base_url('assets/js/ws.js') ?>"></script>

<script>

let bank_id="";

$(window).on("load", function() {    
    $('#content-body').addClass("fadeIn");    
});

$('.input-simple-date').datepicker({ 
		autoclose: true ,
		format:'yyyy-mm-dd',
});

$(document).ready(function(){ 

   load_dashboard(); 

   //Realtime Update Dashboard
   socket.on('new_update', function(data) {   
        let to_bank = data.to_bank;      
        if ((to_bank==bank_id) || (bank_id=="")) {   
            load_dashboard(); 
            show_success_message("Data telah di update");            
        }
    }); 

    $('.toast-message').click(function(){
        alert(1);
        $('#toast-container').fadeOut();
    });
});

function load_dashboard(clear=false){

    bank_id=$('#bank_id').val();    
    $("#dashboard-container").hide();  
    $.ajax({
    type: 'POST',    
    url: '<?php echo base_url('Home/load_dashboard')?>',
    data: { 
        'bank_id': $('#bank_id').val(),
        'tanggal_pencatatan': $('#tanggal_pencatatan').val()
    },    
    success: function(result){
        $("#dashboard-container").html(result);
        $("#dashboard-container").fadeIn();
    }
});
}
</script>