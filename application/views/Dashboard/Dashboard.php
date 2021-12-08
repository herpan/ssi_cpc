<?php echo _css("chartjs,datatables") ?>
<div class="container">
    <div class="row">
        <!--pie chart -->
        <div class="col-md-12">
            <div class="panel panel-lte">
                <div class="panel-heading lte-heading-warning">KONDISI UANG DALAM KHASANAH</div>
                <div class="panel-body table-responsive">

                <table id="dashboard-konsisi" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Jenis Uang</th>
                            <th rowspan="2">Pecahan</th>
                            <th colspan="2">Posisi Kas</th>
                            <th colspan="3">Stok uang BI</th>
                            <th colspan="2">Hasil Proses</th>
                            <th colspan="2">Uang Rusak</th>
                        </tr>
                        <tr>
                            <th>Rupiah</th>
                            <th>Emisi</th>
                            <th>Gress BI</th>
                            <th>Recycle BI</th>
                            <th>Dropshot</th>
                            <th>ULE</th>
                            <th>UTLE</th>
                            <th>Minor</th>
                            <th>Mayor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $jenis_uang='';
                            $pecahan='';
                            foreach($kondisi as $row) { 
                        ?>
                        <tr>
                            <td>
                                <?php 
                                    if($row->jenis_uang!=$jenis_uang) {
                                        echo $row->jenis_uang;
                                        $jenis_uang=$row->jenis_uang;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php 
                                    if($row->pecahan!=$pecahan) {
                                        echo $row->pecahan;
                                        $pecahan=$row->pecahan;
                                    }
                                ?>
                            </td>                            
                            <td>Rupiah</td>
                            <td><?php echo $row->emisi ?></td>
                            <td><?php echo $row->GRESS_BI ?></td>
                            <td><?php echo $row->RECYCLE_BI ?></td>
                            <td><?php echo $row->DROPSHOT ?></td>
                            <td><?php echo $row->ULE ?></td>
                            <td><?php echo $row->UTLE ?></td>
                            <td><?php echo $row->MINOR ?></td>
                            <td><?php echo $row->MAYOR ?></td> 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                   
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dashboard-konsisi').DataTable({
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>