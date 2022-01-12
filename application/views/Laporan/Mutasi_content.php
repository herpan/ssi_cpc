		<small>
		<table id='table-detail' class='table' style='width:150%'>
		<thead>
            <tr>
			<th>No</th>
			<th>Uraian</th>
			<th>Waktu Input</th>
			<th>Tipe</th>
			<th>Nominal</th>
			<th>Saldo Akhir</th>
            </tr>
        </thead>
		<tbody>
			<?php
				$saldo;	 			
				foreach($mutasi as $row) { 
			?>
			<tr>
			<td><?php echo @++$no ?></td>
			<td><?php echo $row->uraian ?></td>
			<td><?php echo $row->input_time ?></td>
			<td><?php echo $row->type ?></td>
			<td><?php echo rupiah($row->jumlah) ?></td>
			<td><?php echo rupiah($saldo)?></td>
            </tr>
			<?php 
				$row->type=='K' ? $saldo-= $row->jumlah : $saldo+= $row->jumlah;
				} 
			?>
		</tbody>
		</table>
		</small>
		
<?php echo _js('datatables')?>

<script> 
$("#table-detail").DataTable({
	pageLength: 10,
	dom					: 'Blfrtip',
	buttons	: ['copy','excel'],
});
</script>