<?php echo _css("chartjs,datatables") ?>
<div class="container">
    <div class="row">
        <!--pie chart -->
        <div class="col-md-12">
            <div class="panel panel-lte">
                <div class="panel-heading lte-heading-danger">KONDISI UANG DALAM KHASANAH</div>
                <div class="panel-body table-responsive">

                <table id="dashboard-kondisi" class="styled-table">
                    <thead>
                        <tr>
                            <th rowspan="2">Jenis Uang</th>
                            <th rowspan="2">Pecahan</th>
                            <th colspan="2">Posisi Kas</th>
                            <th colspan="3">Stok uang BI</th>
                            <th colspan="2">Hasil Proses</th>
                            <th colspan="2">Uang Rusak</th>
                            <th rowspan="2">Campur</th>
                            <th rowspan="2">Belum Diproses</th>
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
                            
                            <?php 
                                if($row->jenis_uang!=$jenis_uang) {
                                    echo '<td rowspan="'.$jml_jenis[$row->jenis_uang].'">'.$row->jenis_uang.'</td>';
                                    $jenis_uang=$row->jenis_uang;
                                }
                            ?>
                            
                            
                            <?php 
                                if($row->pecahan!=$pecahan) {
                                    echo '<td rowspan="'.$jml_pecahan[$row->pecahan].'">'.rupiah($row->pecahan).'</td>';
                                    echo '<td rowspan="'.$jml_pecahan[$row->pecahan].'">'.rupiah($jml[$row->pecahan]+$row->jumlah_campur+$row->jumlah_belum).'</td>';
                                    //$pecahan=$row->pecahan;
                                }
                            ?>           
                            <td><?php echo $row->emisi ?></td>
                            <td><?php echo $row->GRESS_BI=='0' ? '':  rupiah($row->GRESS_BI) ?></td>
                            <td><?php echo $row->RECYCLE_BI=='0' ? '':  rupiah($row->RECYCLE_BI) ?></td>
                            <td><?php echo $row->DROPSHOT=='0' ? '':  rupiah($row->DROPSHOT) ?></td>
                            <td><?php echo $row->ULE=='0' ? '':  rupiah($row->ULE) ?></td>
                            <td><?php echo $row->UTLE=='0' ? '':  rupiah($row->UTLE) ?></td>
                            <td><?php echo $row->MINOR=='0' ? '':  rupiah($row->MINOR) ?></td>
                            <td><?php echo $row->MAYOR=='0' ? '':  rupiah($row->MAYOR) ?></td> 
                            <?php 
                                if($row->pecahan!=$pecahan) {
                                    $jml_c=$row->jumlah_campur == 0 ? '' : rupiah($row->jumlah_campur);
                                    $jml_b=$row->jumlah_belum == 0 ? '' : rupiah($row->jumlah_belum);
                                    echo '<td rowspan="'.$jml_pecahan[$row->pecahan].'">'.$jml_c.'</td>';                                 
                                    echo '<td rowspan="'.$jml_pecahan[$row->pecahan].'">'.$jml_b.'</td>';
                                    $pecahan=$row->pecahan;
                                    @$campur+=$row->jumlah_campur;
                                    @$belum+=$row->jumlah_belum;
                                }
                            ?>
                        </tr>
                        <?php
                          @$GRESS_BI+= $row->GRESS_BI;
                          @$RECYCLE_BI+= $row->RECYCLE_BI;
                          @$DROPSHOT+= $row->DROPSHOT;
                          @$ULE+= $row->ULE;
                          @$UTLE+= $row->UTLE;
                          @$MINOR+= $row->MINOR;
                          @$MAYOR+= $row->MAYOR;
                        } 
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><?php echo rupiah(@$GRESS_BI) ?></th>
                            <th><?php echo rupiah(@$RECYCLE_BI) ?></th>
                            <th><?php echo rupiah(@$DROPSHOT) ?></th>
                            <th><?php echo rupiah(@$ULE) ?></th>
                            <th><?php echo rupiah(@$UTLE) ?></th>
                            <th><?php echo rupiah(@$MINOR) ?></th>
                            <th><?php echo rupiah(@$MAYOR) ?></th>
                            <th><?php echo rupiah(@$campur) ?></th>
                            <th><?php echo rupiah(@$belum) ?></th>
                        </tr>
                    </tfoot>
                </table>
                   
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
<?php echo _js('datatables,icheck')?>