<?php echo _css("chartjs,datatables") ?>
<div class="container">
    <div class="row">
        <!--pie chart -->
        <div class="col-md-6">
            <div class="panel panel-lte">
                <div class="panel-heading lte-heading-warning">STATUS PEKERJAAN</div>
                <div class="panel-body">
                    <canvas id="pieChart" style="height:230px; min-height:230px"></canvas>
                </div>
            </div>
            <div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-lte">
                <div class="panel-heading lte-heading-warning">KETERANGAN</div>
                <div class="panel-body table-responsive">
                    <table id="keterangan">
                        <thead>
                            <tr>
                                <th>
                                    Keterangan
                                </th>
                                <th>
                                    Jumlah
                                </th>

                                <th>
                                    %
                                </th>

                                <th>
                                    Grafik
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    SELESAI TARIK
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/selesai tarik"); ?>">
                                        <?php echo $selesai ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($selesai / $total * 100), 2) ?> %
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($selesai / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    SELESAI KIRIM
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/selesai kirim"); ?>">
                                        <?php echo $selesai_kirim ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($selesai_kirim / $total * 100), 2) ?> %
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($selesai_kirim / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    GAGAL
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/gagal"); ?>">
                                        <?php echo $gagal ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($gagal / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($gagal / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    PENDING
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/pending"); ?>">
                                        <?php echo $pending ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($pending / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($pending / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    CANCEL
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/cancel"); ?>">
                                        <?php echo $cancel ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($cancel / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($cancel / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    TERKONFIRMASI
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/sudah terkonfirmasi"); ?>">
                                        <?php echo $terkonfirmasi ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($terkonfirmasi / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($terkonfirmasi / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    TERJADWAL
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/terjadwal"); ?>">
                                        <?php echo $terjadwal ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($terjadwal / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($terjadwal / $total * 100), 2) ?>% " aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    BELUM TERKONFIRMASI
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/belum terkonfirmasi"); ?>">
                                        <?php echo $belum ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($belum / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($belum / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    TERINFORMASI DI BNI
                                </td>
                                <td>
                                    <a href="<?php echo base_url(uri_string() . "/show/edc terinformasi sudah di bni"); ?>">
                                        <?php echo $ditarik_bni ?>
                                    </a>
                                </td>

                                <td>
                                    <small>
                                        <?php echo $total == 0 ? 0 : round(($ditarik_bni / $total * 100), 2) ?>%
                                    </small>
                                </td>

                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $total == 0 ? 0 : round(($ditarik_bni / $total * 100), 2) ?>%" aria-valuenow="96.17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </td>

                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    Total
                                </th>
                                <th>
                                    <a href="<?php echo base_url(uri_string() . "/show"); ?>">
                                        <?php echo $total ?>
                                    </a>
                                </th>
                                <th>
                                    <small>
                                        100%
                                    </small>
                                </th>
                                <th>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </th>
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
<?php echo _js("chartjs,datatables") ?>


<script>
    //---pie chart---// 
    var donutData = {
        labels: [
            'SELESAI TARIK : <?php echo $selesai ?>',
            'PENDING : <?php echo $pending ?>',
            'GAGAL : <?php echo $gagal ?>',
            'CANCEL : <?php echo $cancel ?>',
            'TERKONFIRMASI : <?php echo $terkonfirmasi ?>',
            'TERJADWAL: <?php echo $terjadwal ?>',
            'BELUM TERKONFIRMASI : <?php echo $belum ?>',
            'DITARIK BNI: <?php echo $ditarik_bni ?>',
            'SELESAI KIRIM : <?php echo $kunjungan_kembali ?>',
        ],
        datasets: [{
            data: [<?php echo $selesai . "," . $pending . "," . $gagal . "," . $cancel . "," . $terkonfirmasi . "," . $terjadwal . "," . $belum . "," . $ditarik_bni . "," . $selesai_kirim ?>],
            backgroundColor: ['yellow', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', 'green', 'grey', 'red', 'blue'],
        }]
    }

    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }

    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })
    $(document).ready(function() {
        $('#keterangan').DataTable({
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>