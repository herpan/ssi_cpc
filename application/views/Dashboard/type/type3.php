  <div class="col-md-12 table-dashboard-container my-2">    
    <font size="2%" face="Arial" >     
    <table id="dashboard-kondisi" class="styled-table">
    
    <thead>
    <tr>
            <td rowspan="2" class="lebar1">PECAHAN</td>
            <td colspan="2">POSISI KAS</td>
            <td colspan="3">STOK UANG BI</td>
            <td colspan="3">HASIL PROSES</td>
            <td colspan="2">UANG RUSAK</td>
            <td >CAMPUR</td>
            <td colspan="2">BELUM DI PROSES</td>
            </tr>
            <tr>
            <td class="lebar2">RUPIAH</td>
            <td class="lebar1">EMISI</td>
            <td class="lebar1">GRESS BI</td>
            <td class="lebar1">RECYCLE BI</td>
            <td class="lebar1">DROPSHOT</td>
            <td class="lebar1">FIT ATM</td>
            <td class="lebar1">FIT CABANG</td>
            <td class="lebar1">UTLE</td>
            <td class="lebar1">MINOR</td>
            <td class="lebar1">MAYOR</td>
            <td class="lebar1" >RUPIAH</td>
            <td class="lebar1">LEMBAR</td>
            <td class="lebar1">RUPIAH</td>
            </tr>
    </thead>
<tbody>
<tr>
<td rowspan="4"> 100.000</td>
<td rowspan="4"> <?php echo @$jml['KERTAS100000']+@$belum['KERTAS100000']>0 ? rupiah(@$jml['KERTAS100000']+@$belum['KERTAS100000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS1000002016'] >0 ? rupiah(@$GRESS_BI['KERTAS1000002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS1000002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS1000002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS1000002016']>0 ? rupiah(@$DROPSHOT['KERTAS1000002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS1000002016']>0 ? rupiah(@$ULE['KERTAS1000002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS1000002016']>0 ? rupiah(@$ULE2['KERTAS1000002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS1000002016']>0 ? rupiah(@$UTLE['KERTAS1000002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS1000002016']>0 ? rupiah(@$MINOR['KERTAS1000002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS1000002016']>0 ? rupiah(@$MAYOR['KERTAS1000002016']):'' ?></td>
<td rowspan="4"></td>
<td rowspan="4"><?php echo @$lembarbelum['KERTAS100000']>0 ? @$lembarbelum['KERTAS100000'] : '' ?></td>
<td rowspan="4"><?php echo @$belum['KERTAS100000']>0 ? rupiah(@$belum['KERTAS100000']):'' ?></td>
</tr>
<tr>
<td>2014</td>
<td><?php echo @$GRESS_BI['KERTAS1000002014']>0 ? rupiah(@$GRESS_BI['KERTAS1000002014']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS1000002014']>0 ? rupiah(@$RECYCLE_BI['KERTAS1000002014']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS1000002014']>0 ? rupiah(@$DROPSHOT['KERTAS1000002014']):'' ?></td>
<td><?php echo @$ULE['KERTAS1000002014']>0 ? rupiah(@$ULE['KERTAS1000002014']):'' ?></td>
<td><?php echo @$ULE2['KERTAS1000002014']>0 ? rupiah(@$ULE2['KERTAS1000002014']):'' ?></td>
<td><?php echo @$UTLE['KERTAS1000002014']>0 ? rupiah(@$UTLE['KERTAS1000002014']):'' ?></td>
<td><?php echo @$MINOR['KERTAS1000002014']>0 ? rupiah(@$MINOR['KERTAS1000002014']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS1000002014']>0 ? rupiah(@$MAYOR['KERTAS1000002014']):'' ?></td>
</tr>
<tr>
<td>2004</td>
<td><?php echo @$GRESS_BI['KERTAS1000002004']>0 ? rupiah(@$GRESS_BI['KERTAS1000002004']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS1000002004']>0 ? rupiah(@$RECYCLE_BI['KERTAS1000002004']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS1000002004']>0 ? rupiah(@$DROPSHOT['KERTAS1000002004']):'' ?></td>
<td><?php echo @$ULE['KERTAS1000002004']>0 ? rupiah(@$ULE['KERTAS1000002004']):'' ?></td>
<td><?php echo @$ULE2['KERTAS1000002004']>0 ? rupiah(@$ULE2['KERTAS1000002004']):'' ?></td>
<td><?php echo @$UTLE['KERTAS1000002004']>0 ? rupiah(@$UTLE['KERTAS1000002004']):'' ?></td>
<td><?php echo @$MINOR['KERTAS1000002004']>0 ? rupiah(@$MINOR['KERTAS1000002004']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS1000002004']>0 ? rupiah(@$MAYOR['KERTAS1000002004']):'' ?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td > 75.000</td>
<td> <?php echo @$jml['KERTAS75000']+@$belum['KERTAS75000']>0 ? rupiah(@$jml['KERTAS75000']+@$belum['KERTAS75000']):'' ?></td>
<td>2020</td>
<td><?php echo @$GRESS_BI['KERTAS750002020']>0 ? rupiah(@$GRESS_BI['KERTAS750002020']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS750002020']>0 ? rupiah(@$RECYCLE_BI['KERTAS750002020']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS750002020']>0 ? rupiah(@$DROPSHOT['KERTAS750002020']):'' ?></td>
<td><?php echo @$ULE['KERTAS750002020']>0 ? rupiah(@$ULE['KERTAS750002020']):'' ?></td>
<td><?php echo @$ULE2['KERTAS750002020']>0 ? rupiah(@$ULE2['KERTAS750002020']):'' ?></td>
<td><?php echo @$UTLE['KERTAS750002020']>0 ? rupiah(@$UTLE['KERTAS750002020']):'' ?></td>
<td><?php echo @$MINOR['KERTAS750002020']>0 ? rupiah(@$MINOR['KERTAS750002020']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS750002020']>0 ? rupiah(@$MAYOR['KERTAS750002020']):'' ?></td>
<td></td>
<td><?php echo @$lembarbelum['KERTAS75000']>0 ? @$lembarbelum['KERTAS75000'] : '' ?></td>
<td><?php echo @$belum['KERTAS75000']>0 ? rupiah(@$belum['KERTAS75000']):'' ?>      </td>
</tr>
<tr>
<td rowspan="3"> 50.000</td>
<td rowspan="3"> <?php echo @$jml['KERTAS50000']+@$belum['KERTAS50000']>0 ? rupiah(@$jml['KERTAS50000']+@$belum['KERTAS50000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS500002016']>0 ? rupiah(@$GRESS_BI['KERTAS500002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS500002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS500002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS500002016']>0 ? rupiah(@$DROPSHOT['KERTAS500002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS500002016']>0 ? rupiah(@$ULE['KERTAS500002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS500002016']>0 ? rupiah(@$ULE2['KERTAS500002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS500002016']>0 ? rupiah(@$UTLE['KERTAS500002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS500002016']>0 ? rupiah(@$MINOR['KERTAS500002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS500002016']>0 ? rupiah(@$MAYOR['KERTAS500002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['KERTAS50000']>0 ? @$lembarbelum['KERTAS50000'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['KERTAS50000']>0 ? rupiah(@$belum['KERTAS50000']):'' ?>      </td>
</tr>
<tr>
<td>2005</td>
<td><?php echo @$GRESS_BI['KERTAS500002005']>0 ? rupiah(@$GRESS_BI['KERTAS500002005']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS500002005']>0 ? rupiah(@$RECYCLE_BI['KERTAS500002005']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS500002005']>0 ? rupiah(@$DROPSHOT['KERTAS500002005']):'' ?></td>
<td><?php echo @$ULE['KERTAS500002005']>0 ? rupiah(@$ULE['KERTAS500002005']):'' ?></td>
<td><?php echo @$ULE2['KERTAS500002005']>0 ? rupiah(@$ULE2['KERTAS500002005']):'' ?></td>
<td><?php echo @$UTLE['KERTAS500002005']>0 ? rupiah(@$UTLE['KERTAS500002005']):'' ?></td>
<td><?php echo @$MINOR['KERTAS500002005']>0 ? rupiah(@$MINOR['KERTAS500002005']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS500002005']>0 ? rupiah(@$MAYOR['KERTAS500002005']):'' ?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="3"> 20.000</td>
<td rowspan="3"> <?php echo @$jml['KERTAS20000']+@$belum['KERTAS20000']>0 ? rupiah(@$jml['KERTAS20000']+@$belum['KERTAS20000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS200002016']>0 ? rupiah(@$GRESS_BI['KERTAS200002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS200002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS200002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS200002016']>0 ? rupiah(@$DROPSHOT['KERTAS200002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS200002016']>0 ? rupiah(@$ULE['KERTAS200002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS200002016']>0 ? rupiah(@$ULE2['KERTAS200002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS200002016']>0 ? rupiah(@$UTLE['KERTAS200002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS200002016']>0 ? rupiah(@$MINOR['KERTAS200002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS200002016']>0 ? rupiah(@$MAYOR['KERTAS200002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['KERTAS20000']>0 ? @$lembarbelum['KERTAS20000'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['KERTAS20000']>0 ? rupiah(@$belum['KERTAS20000']):'' ?>      </td>
</tr>
<tr>
<td>2004</td>
<td><?php echo @$GRESS_BI['KERTAS200002004']>0 ? rupiah(@$GRESS_BI['KERTAS200002004']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS200002004']>0 ? rupiah(@$RECYCLE_BI['KERTAS200002004']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS200002004']>0 ? rupiah(@$DROPSHOT['KERTAS200002004']):'' ?></td>
<td><?php echo @$ULE['KERTAS200002004']>0 ? rupiah(@$ULE['KERTAS200002004']):'' ?></td>
<td><?php echo @$ULE2['KERTAS200002004']>0 ? rupiah(@$ULE2['KERTAS200002004']):'' ?></td>
<td><?php echo @$UTLE['KERTAS200002004']>0 ? rupiah(@$UTLE['KERTAS200002004']):'' ?></td>
<td><?php echo @$MINOR['KERTAS200002004']>0 ? rupiah(@$MINOR['KERTAS200002004']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS200002004']>0 ? rupiah(@$MAYOR['KERTAS200002004']):'' ?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="4"> 10.000</td>
<td rowspan="4"> <?php echo @$jml['KERTAS10000']+@$belum['KERTAS10000']>0 ? rupiah(@$jml['KERTAS10000']+@$belum['KERTAS10000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS100002016']>0 ? rupiah(@$GRESS_BI['KERTAS100002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS100002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS100002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS100002016']>0 ? rupiah(@$DROPSHOT['KERTAS100002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS100002016']>0 ? rupiah(@$ULE['KERTAS100002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS100002016']>0 ? rupiah(@$ULE2['KERTAS100002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS100002016']>0 ? rupiah(@$UTLE['KERTAS100002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS100002016']>0 ? rupiah(@$MINOR['KERTAS100002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS100002016']>0 ? rupiah(@$MAYOR['KERTAS100002016']):'' ?></td>
<td rowspan="4"></td>
<td rowspan="4"><?php echo @$lembarbelum['KERTAS10000']>0 ? @$lembarbelum['KERTAS10000'] : '' ?></td>
<td rowspan="4"><?php echo @$belum['KERTAS10000']>0 ? rupiah(@$belum['KERTAS10000']):'' ?>      </td>
</tr>
<tr>
<td>2005 BARU</td>
<td><?php echo @$GRESS_BI['KERTAS100002005BARU']>0 ? rupiah(@$GRESS_BI['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS100002005BARU']>0 ? rupiah(@$RECYCLE_BI['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS100002005BARU']>0 ? rupiah(@$DROPSHOT['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$ULE['KERTAS100002005BARU']>0 ? rupiah(@$ULE['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$ULE2['KERTAS100002005BARU']>0 ? rupiah(@$ULE2['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$UTLE['KERTAS100002005BARU']>0 ? rupiah(@$UTLE['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$MINOR['KERTAS100002005BARU']>0 ? rupiah(@$MINOR['KERTAS100002005BARU']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS100002005BARU']>0 ? rupiah(@$MAYOR['KERTAS100002005BARU']):'' ?></td>
</tr>
<tr>
<td>2005 LAMA</td>
<td><?php echo @$GRESS_BI['KERTAS100002005LAMA']>0 ? rupiah(@$GRESS_BI['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS100002005LAMA']>0 ? rupiah(@$RECYCLE_BI['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS100002005LAMA']>0 ? rupiah(@$DROPSHOT['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$ULE['KERTAS100002005LAMA']>0 ? rupiah(@$ULE['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$ULE2['KERTAS100002005LAMA']>0 ? rupiah(@$ULE2['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$UTLE['KERTAS100002005LAMA']>0 ? rupiah(@$UTLE['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$MINOR['KERTAS100002005LAMA']>0 ? rupiah(@$MINOR['KERTAS100002005LAMA']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS100002005LAMA']>0 ? rupiah(@$MAYOR['KERTAS100002005LAMA']):'' ?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="3"> 5000</td>
<td rowspan="3"> <?php echo @$jml['KERTAS5000']+@$belum['KERTAS5000']>0 ? rupiah(@$jml['KERTAS5000']+@$belum['KERTAS5000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS50002016']>0 ? rupiah(@$GRESS_BI['KERTAS50002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS50002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS50002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS50002016']>0 ? rupiah(@$DROPSHOT['KERTAS50002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS50002016']>0 ? rupiah(@$ULE['KERTAS50002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS50002016']>0 ? rupiah(@$ULE2['KERTAS50002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS50002016']>0 ? rupiah(@$UTLE['KERTAS50002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS50002016']>0 ? rupiah(@$MINOR['KERTAS50002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS50002016']>0 ? rupiah(@$MAYOR['KERTAS50002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['KERTAS5000']>0 ? @$lembarbelum['KERTAS5000'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['KERTAS5000']>0 ? rupiah(@$belum['KERTAS5000']):'' ?>      </td>
</tr>
<tr>
<td>2001</td>
<td><?php echo @$GRESS_BI['KERTAS50002001']>0 ? rupiah(@$GRESS_BI['KERTAS50002001']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS50002001']>0 ? rupiah(@$RECYCLE_BI['KERTAS50002001']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS50002001']>0 ? rupiah(@$DROPSHOT['KERTAS50002001']):'' ?></td>
<td><?php echo @$ULE['KERTAS50002001']>0 ? rupiah(@$ULE['KERTAS50002001']):'' ?></td>
<td><?php echo @$ULE2['KERTAS50002001']>0 ? rupiah(@$ULE2['KERTAS50002001']):'' ?></td>
<td><?php echo @$UTLE['KERTAS50002001']>0 ? rupiah(@$UTLE['KERTAS50002001']):'' ?></td>
<td><?php echo @$MINOR['KERTAS50002001']>0 ? rupiah(@$MINOR['KERTAS50002001']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS50002001']>0 ? rupiah(@$MAYOR['KERTAS50002001']):'' ?></td>
</tr>
<tr>
<td>1992</td>
<td><?php echo @$GRESS_BI['KERTAS50001992']>0 ? rupiah(@$GRESS_BI['KERTAS50001992']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS50001992']>0 ? rupiah(@$RECYCLE_BI['KERTAS50001992']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS50001992']>0 ? rupiah(@$DROPSHOT['KERTAS50001992']):'' ?></td>
<td><?php echo @$ULE['KERTAS50001992']>0 ? rupiah(@$ULE['KERTAS50001992']):'' ?></td>
<td><?php echo @$ULE2['KERTAS50001992']>0 ? rupiah(@$ULE2['KERTAS50001992']):'' ?></td>
<td><?php echo @$UTLE['KERTAS50001992']>0 ? rupiah(@$UTLE['KERTAS50001992']):'' ?></td>
<td><?php echo @$MINOR['KERTAS50001992']>0 ? rupiah(@$MINOR['KERTAS50001992']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS50001992']>0 ? rupiah(@$MAYOR['KERTAS50001992']):'' ?></td>
</tr>
<tr>
<td rowspan="2"> 2.000</td>
<td rowspan="2"> <?php echo @$jml['KERTAS2000']+ @$belum['KERTAS2000']>0 ? rupiah(@$jml['KERTAS2000'] + @$belum['KERTAS2000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS20002016']>0 ? rupiah(@$GRESS_BI['KERTAS20002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS20002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS20002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS20002016']>0 ? rupiah(@$DROPSHOT['KERTAS20002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS20002016']>0 ? rupiah(@$ULE['KERTAS20002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS20002016']>0 ? rupiah(@$ULE2['KERTAS20002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS20002016']>0 ? rupiah(@$UTLE['KERTAS20002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS20002016']>0 ? rupiah(@$MINOR['KERTAS20002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS20002016']>0 ? rupiah(@$MAYOR['KERTAS20002016']):'' ?></td>
<td rowspan="2"></td>
<td rowspan="2"><?php echo @$lembarbelum['KERTAS2000']>0 ? @$lembarbelum['KERTAS2000'] : '' ?></td>
<td rowspan="2"><?php echo @$belum['KERTAS2000']>0 ? rupiah(@$belum['KERTAS2000']):'' ?>      </td>
</tr>
<tr>
<td>2009</td>
<td><?php echo @$GRESS_BI['KERTAS20002009']>0 ? rupiah(@$GRESS_BI['KERTAS20002009']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS20002009']>0 ? rupiah(@$RECYCLE_BI['KERTAS20002009']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS20002009']>0 ? rupiah(@$DROPSHOT['KERTAS20002009']):'' ?></td>
<td><?php echo @$ULE['KERTAS20002009']>0 ? rupiah(@$ULE['KERTAS20002009']):'' ?></td>
<td><?php echo @$ULE2['KERTAS20002009']>0 ? rupiah(@$ULE2['KERTAS20002009']):'' ?></td>
<td><?php echo @$UTLE['KERTAS20002009']>0 ? rupiah(@$UTLE['KERTAS20002009']):'' ?></td>
<td><?php echo @$MINOR['KERTAS20002009']>0 ? rupiah(@$MINOR['KERTAS20002009']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS20002009']>0 ? rupiah(@$MAYOR['KERTAS20002009']):'' ?></td>
</tr>
<tr>
<td rowspan="3"> 1.000</td>
<td rowspan="3"> <?php echo @$jml['KERTAS1000']+@$belum['KERTAS1000']>0 ? rupiah(@$jml['KERTAS1000']+@$belum['KERTAS1000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['KERTAS10002016']>0 ? rupiah(@$GRESS_BI['KERTAS10002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS10002016']>0 ? rupiah(@$RECYCLE_BI['KERTAS10002016']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS10002016']>0 ? rupiah(@$DROPSHOT['KERTAS10002016']):'' ?></td>
<td><?php echo @$ULE['KERTAS10002016']>0 ? rupiah(@$ULE['KERTAS10002016']):'' ?></td>
<td><?php echo @$ULE2['KERTAS10002016']>0 ? rupiah(@$ULE2['KERTAS10002016']):'' ?></td>
<td><?php echo @$UTLE['KERTAS10002016']>0 ? rupiah(@$UTLE['KERTAS10002016']):'' ?></td>
<td><?php echo @$MINOR['KERTAS10002016']>0 ? rupiah(@$MINOR['KERTAS10002016']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS10002016']>0 ? rupiah(@$MAYOR['KERTAS10002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['KERTAS1000']>0 ? @$lembarbelum['KERTAS1000'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['KERTAS1000']>0 ? rupiah(@$belum['KERTAS1000']):'' ?>      </td>
</tr>
<tr>
<td>2000</td>
<td><?php echo @$GRESS_BI['KERTAS10002000']>0 ? rupiah(@$GRESS_BI['KERTAS10002000']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS10002000']>0 ? rupiah(@$RECYCLE_BI['KERTAS10002000']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS10002000']>0 ? rupiah(@$DROPSHOT['KERTAS10002000']):'' ?></td>
<td><?php echo @$ULE['KERTAS10002000']>0 ? rupiah(@$ULE['KERTAS10002000']):'' ?></td>
<td><?php echo @$ULE2['KERTAS10002000']>0 ? rupiah(@$ULE2['KERTAS10002000']):'' ?></td>
<td><?php echo @$UTLE['KERTAS10002000']>0 ? rupiah(@$UTLE['KERTAS10002000']):'' ?></td>
<td><?php echo @$MINOR['KERTAS10002000']>0 ? rupiah(@$MINOR['KERTAS10002000']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS10002000']>0 ? rupiah(@$MAYOR['KERTAS10002000']):'' ?></td>
</tr>
<tr>
<td>1992</td>
<td><?php echo @$GRESS_BI['KERTAS10001992']>0 ? rupiah(@$GRESS_BI['KERTAS10001992']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS10001992']>0 ? rupiah(@$RECYCLE_BI['KERTAS10001992']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS10001992']>0 ? rupiah(@$DROPSHOT['KERTAS10001992']):'' ?></td>
<td><?php echo @$ULE['KERTAS10001992']>0 ? rupiah(@$ULE['KERTAS10001992']):'' ?></td>
<td><?php echo @$ULE2['KERTAS10001992']>0 ? rupiah(@$ULE2['KERTAS10001992']):'' ?></td>
<td><?php echo @$UTLE['KERTAS10001992']>0 ? rupiah(@$UTLE['KERTAS10001992']):'' ?></td>
<td><?php echo @$MINOR['KERTAS10001992']>0 ? rupiah(@$MINOR['KERTAS10001992']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS10001992']>0 ? rupiah(@$MAYOR['KERTAS10001992']):'' ?></td>
</tr>
<tr>
<td > 500</td>
<td> <?php echo @$jml['KERTAS500']+@$belum['KERTAS500']>0 ? rupiah(@$jml['KERTAS500']+@$belum['KERTAS500']):'' ?></td>
<td>1992</td>
<td><?php echo @$GRESS_BI['KERTAS5001992']>0 ? rupiah(@$GRESS_BI['KERTAS5001992']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS5001992']>0 ? rupiah(@$RECYCLE_BI['KERTAS5001992']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS5001992']>0 ? rupiah(@$DROPSHOT['KERTAS5001992']):'' ?></td>
<td><?php echo @$ULE['KERTAS5001992']>0 ? rupiah(@$ULE['KERTAS5001992']):'' ?></td>
<td><?php echo @$ULE2['KERTAS5001992']>0 ? rupiah(@$ULE2['KERTAS5001992']):'' ?></td>
<td><?php echo @$UTLE['KERTAS5001992']>0 ? rupiah(@$UTLE['KERTAS5001992']):'' ?></td>
<td><?php echo @$MINOR['KERTAS5001992']>0 ? rupiah(@$MINOR['KERTAS5001992']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS5001992']>0 ? rupiah(@$MAYOR['KERTAS5001992']):'' ?></td>
<td></td>
<td><?php echo @$lembarbelum['KERTAS500']>0 ? @$lembarbelum['KERTAS500'] : '' ?></td>
<td><?php echo @$belum['KERTAS500']>0 ? rupiah(@$belum['KERTAS500']):'' ?>      </td>
</tr>
<tr>
<td> 100</td>
<td> <?php echo @$jml['KERTAS100']+@$belum['KERTAS100']>0 ? rupiah(@$jml['KERTAS100']+@$belum['KERTAS100']):'' ?></td>
<td>1992</td>
<td><?php echo @$GRESS_BI['KERTAS1001992']>0 ? rupiah(@$GRESS_BI['KERTAS1001992']):'' ?></td>
<td><?php echo @$RECYCLE_BI['KERTAS1001992']>0 ? rupiah(@$RECYCLE_BI['KERTAS1001992']):'' ?></td>
<td><?php echo @$DROPSHOT['KERTAS1001992']>0 ? rupiah(@$DROPSHOT['KERTAS1001992']):'' ?></td>
<td><?php echo @$ULE['KERTAS1001992']>0 ? rupiah(@$ULE['KERTAS1001992']):'' ?></td>
<td><?php echo @$ULE2['KERTAS1001992']>0 ? rupiah(@$ULE2['KERTAS1001992']):'' ?></td>
<td><?php echo @$UTLE['KERTAS1001992']>0 ? rupiah(@$UTLE['KERTAS1001992']):'' ?></td>
<td><?php echo @$MINOR['KERTAS1001992']>0 ? rupiah(@$MINOR['KERTAS1001992']):'' ?></td>
<td><?php echo @$MAYOR['KERTAS1001992']>0 ? rupiah(@$MAYOR['KERTAS1001992']):'' ?></td>
<td></td>
<td><?php echo @$lembarbelum['KERTAS100']>0 ? @$lembarbelum['KERTAS100'] : '' ?></td>
<td><?php echo @$belum['KERTAS100']>0 ? rupiah(@$belum['KERTAS100']):'' ?>      </td>
</tr>
<tr>
<td>TTL KERTAS</td>
<td><?php echo @$sub_total['KERTAS']+@$belum['KERTAS']>0 ? rupiah(@$sub_total['KERTAS']+@$belum['KERTAS']):'' ?></td>
<td></td>
<td><?php echo @$sub_total['KERTASGRESS_BI']>0 ? rupiah(@$sub_total['KERTASGRESS_BI']):'' ?></td>
<td><?php echo @$sub_total['KERTASRECYCLE_BI']>0 ? rupiah(@$sub_total['KERTASRECYCLE_BI']):'' ?></td>
<td><?php echo @$sub_total['KERTASDROPSHOT']>0 ? rupiah(@$sub_total['KERTASDROPSHOT']):'' ?></td>
<td><?php echo @$sub_total['KERTASULE']>0 ? rupiah(@$sub_total['KERTASULE']):'' ?></td>
<td><?php echo @$sub_total['KERTASULE2']>0 ? rupiah(@$sub_total['KERTASULE2']):'' ?></td>
<td><?php echo @$sub_total['KERTASUTLE']>0 ? rupiah(@$sub_total['KERTASUTLE']):'' ?></td>
<td><?php echo @$sub_total['KERTASMINOR']>0 ? rupiah(@$sub_total['KERTASMINOR']):'' ?></td>
<td><?php echo @$sub_total['KERTASMAYOR']>0 ? rupiah(@$sub_total['KERTASMAYOR']):'' ?></td>
<td><?php echo @$sub_total['KERTASGRESS_BI']+ @$sub_total['KERTASRECYCLE_BI']+@$sub_total['KERTASDROPSHOT']+@$sub_total['KERTASULE']+@$sub_total['KERTASULE2']+@$sub_total['KERTASUTLE']+@$sub_total['KERTASMINOR']+@$sub_total['KERTASMAYOR']>0 ? rupiah(@$sub_total['KERTASGRESS_BI']+ @$sub_total['KERTASRECYCLE_BI']+@$sub_total['KERTASDROPSHOT']+@$sub_total['KERTASULE']+@$sub_total['KERTASULE2']+@$sub_total['KERTASUTLE']+@$sub_total['KERTASMINOR']+@$sub_total['KERTASMAYOR']):'' ?></td>
<td><?php echo @$lembarbelum['KERTAS']>0 ? @$lembarbelum['KERTAS'] : '' ?></td>
<td><?php echo @$belum['KERTAS']>0 ? rupiah(@$belum['KERTAS']):'' ?>      </td>
</tr>
<tr>
<td>LOGAM</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="3"> 1.000</td>
<td rowspan="3"> <?php echo @$jml['LOGAM1000']+@$belum['LOGAM1000']>0 ? rupiah(@$jml['LOGAM1000']+@$belum['LOGAM1000']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['LOGAM10002016']>0 ? rupiah(@$GRESS_BI['LOGAM10002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM10002016']>0 ? rupiah(@$RECYCLE_BI['LOGAM10002016']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM10002016']>0 ? rupiah(@$DROPSHOT['LOGAM10002016']):'' ?></td>
<td><?php echo @$ULE['LOGAM10002016']>0 ? rupiah(@$ULE['LOGAM10002016']):'' ?></td>
<td><?php echo @$ULE2['LOGAM10002016']>0 ? rupiah(@$ULE2['LOGAM10002016']):'' ?></td>
<td><?php echo @$UTLE['LOGAM10002016']>0 ? rupiah(@$UTLE['LOGAM10002016']):'' ?></td>
<td><?php echo @$MINOR['LOGAM10002016']>0 ? rupiah(@$MINOR['LOGAM10002016']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM10002016']>0 ? rupiah(@$MAYOR['LOGAM10002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['LOGAM1000']>0 ? @$lembarbelum['LOGAM1000'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['LOGAM1000']>0 ? rupiah(@$belum['LOGAM1000']):'' ?>      </td>
</tr>
<tr>
<td>2010</td>
<td><?php echo @$GRESS_BI['LOGAM10002010']>0 ? rupiah(@$GRESS_BI['LOGAM10002010']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM10002010']>0 ? rupiah(@$RECYCLE_BI['LOGAM10002010']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM10002010']>0 ? rupiah(@$DROPSHOT['LOGAM10002010']):'' ?></td>
<td><?php echo @$ULE['LOGAM10002010']>0 ? rupiah(@$ULE['LOGAM10002010']):'' ?></td>
<td><?php echo @$ULE2['LOGAM10002010']>0 ? rupiah(@$ULE2['LOGAM10002010']):'' ?></td>
<td><?php echo @$UTLE['LOGAM10002010']>0 ? rupiah(@$UTLE['LOGAM10002010']):'' ?></td>
<td><?php echo @$MINOR['LOGAM10002010']>0 ? rupiah(@$MINOR['LOGAM10002010']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM10002010']>0 ? rupiah(@$MAYOR['LOGAM10002010']):'' ?></td>
</tr>
<tr>
<td>1993</td>
<td><?php echo @$GRESS_BI['LOGAM10001993']>0 ? rupiah(@$GRESS_BI['LOGAM10001993']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM10001993']>0 ? rupiah(@$RECYCLE_BI['LOGAM10001993']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM10001993']>0 ? rupiah(@$DROPSHOT['LOGAM10001993']):'' ?></td>
<td><?php echo @$ULE['LOGAM10001993']>0 ? rupiah(@$ULE['LOGAM10001993']):'' ?></td>
<td><?php echo @$ULE2['LOGAM10001993']>0 ? rupiah(@$ULE2['LOGAM10001993']):'' ?></td>
<td><?php echo @$UTLE['LOGAM10001993']>0 ? rupiah(@$UTLE['LOGAM10001993']):'' ?></td>
<td><?php echo @$MINOR['LOGAM10001993']>0 ? rupiah(@$MINOR['LOGAM10001993']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM10001993']>0 ? rupiah(@$MAYOR['LOGAM10001993']):'' ?></td>
</tr>
<tr>
<td rowspan="3"> 500</td>
<td rowspan="3"> <?php echo @$jml['LOGAM500']+@$belum['LOGAM500']>0 ? rupiah(@$jml['LOGAM500']+@$belum['LOGAM500']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['LOGAM5002016']>0 ? rupiah(@$GRESS_BI['LOGAM5002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM5002016']>0 ? rupiah(@$RECYCLE_BI['LOGAM5002016']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM5002016']>0 ? rupiah(@$DROPSHOT['LOGAM5002016']):'' ?></td>
<td><?php echo @$ULE['LOGAM5002016']>0 ? rupiah(@$ULE['LOGAM5002016']):'' ?></td>
<td><?php echo @$ULE2['LOGAM5002016']>0 ? rupiah(@$ULE2['LOGAM5002016']):'' ?></td>
<td><?php echo @$UTLE['LOGAM5002016']>0 ? rupiah(@$UTLE['LOGAM5002016']):'' ?></td>
<td><?php echo @$MINOR['LOGAM5002016']>0 ? rupiah(@$MINOR['LOGAM5002016']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM5002016']>0 ? rupiah(@$MAYOR['LOGAM5002016']):'' ?></td>
<td rowspan="3"></td>
<td rowspan="3"><?php echo @$lembarbelum['LOGAM500']>0 ? @$lembarbelum['LOGAM500'] : '' ?></td>
<td rowspan="3"><?php echo @$belum['LOGAM500']>0 ? rupiah(@$belum['LOGAM500']):'' ?>      </td>
</tr>
<tr>
<td>2003</td>
<td><?php echo @$GRESS_BI['LOGAM5002003']>0 ? rupiah(@$GRESS_BI['LOGAM5002003']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM5002003']>0 ? rupiah(@$RECYCLE_BI['LOGAM5002003']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM5002003']>0 ? rupiah(@$DROPSHOT['LOGAM5002003']):'' ?></td>
<td><?php echo @$ULE['LOGAM5002003']>0 ? rupiah(@$ULE['LOGAM5002003']):'' ?></td>
<td><?php echo @$ULE2['LOGAM5002003']>0 ? rupiah(@$ULE2['LOGAM5002003']):'' ?></td>
<td><?php echo @$UTLE['LOGAM5002003']>0 ? rupiah(@$UTLE['LOGAM5002003']):'' ?></td>
<td><?php echo @$MINOR['LOGAM5002003']>0 ? rupiah(@$MINOR['LOGAM5002003']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM5002003']>0 ? rupiah(@$MAYOR['LOGAM5002003']):'' ?></td>
</tr>
<tr>
<td>1997</td>
<td><?php echo @$GRESS_BI['LOGAM5001997']>0 ? rupiah(@$GRESS_BI['LOGAM5001997']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM5001997']>0 ? rupiah(@$RECYCLE_BI['LOGAM5001997']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM5001997']>0 ? rupiah(@$DROPSHOT['LOGAM5001997']):'' ?></td>
<td><?php echo @$ULE['LOGAM5001997']>0 ? rupiah(@$ULE['LOGAM5001997']):'' ?></td>
<td><?php echo @$ULE2['LOGAM5001997']>0 ? rupiah(@$ULE2['LOGAM5001997']):'' ?></td>
<td><?php echo @$UTLE['LOGAM5001997']>0 ? rupiah(@$UTLE['LOGAM5001997']):'' ?></td>
<td><?php echo @$MINOR['LOGAM5001997']>0 ? rupiah(@$MINOR['LOGAM5001997']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM5001997']>0 ? rupiah(@$MAYOR['LOGAM5001997']):'' ?></td>
</tr>
<tr>
<td rowspan="2"> 200</td>
<td rowspan="2"> <?php echo @$jml['LOGAM200']+@$belum['LOGAM200']>0 ? rupiah(@$jml['LOGAM200']+@$belum['LOGAM200']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['LOGAM2002016']>0 ? rupiah(@$GRESS_BI['LOGAM2002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM2002016']>0 ? rupiah(@$RECYCLE_BI['LOGAM2002016']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM2002016']>0 ? rupiah(@$DROPSHOT['LOGAM2002016']):'' ?></td>
<td><?php echo @$ULE['LOGAM2002016']>0 ? rupiah(@$ULE['LOGAM2002016']):'' ?></td>
<td><?php echo @$ULE2['LOGAM2002016']>0 ? rupiah(@$ULE2['LOGAM2002016']):'' ?></td>
<td><?php echo @$UTLE['LOGAM2002016']>0 ? rupiah(@$UTLE['LOGAM2002016']):'' ?></td>
<td><?php echo @$MINOR['LOGAM2002016']>0 ? rupiah(@$MINOR['LOGAM2002016']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM2002016']>0 ? rupiah(@$MAYOR['LOGAM2002016']):'' ?></td>
<td rowspan="2"></td>
<td rowspan="2"><?php echo @$lembarbelum['LOGAM200']>0 ? @$lembarbelum['LOGAM200'] : '' ?></td>
<td rowspan="2"><?php echo @$belum['LOGAM200']>0 ? rupiah(@$belum['LOGAM200']):'' ?>      </td>
</tr>
<tr>
<td>2003</td>
<td><?php echo @$GRESS_BI['LOGAM2002003']>0 ? rupiah(@$GRESS_BI['LOGAM2002003']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM2002003']>0 ? rupiah(@$RECYCLE_BI['LOGAM2002003']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM2002003']>0 ? rupiah(@$DROPSHOT['LOGAM2002003']):'' ?></td>
<td><?php echo @$ULE['LOGAM2002003']>0 ? rupiah(@$ULE['LOGAM2002003']):'' ?></td>
<td><?php echo @$ULE2['LOGAM2002003']>0 ? rupiah(@$ULE2['LOGAM2002003']):'' ?></td>
<td><?php echo @$UTLE['LOGAM2002003']>0 ? rupiah(@$UTLE['LOGAM2002003']):'' ?></td>
<td><?php echo @$MINOR['LOGAM2002003']>0 ? rupiah(@$MINOR['LOGAM2002003']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM2002003']>0 ? rupiah(@$MAYOR['LOGAM2002003']):'' ?></td>
</tr>
<tr>
<td rowspan="5"> 100</td>
<td rowspan="5"> <?php echo @$jml['LOGAM100']+@$belum['LOGAM100']>0 ? rupiah(@$jml['LOGAM100']+@$belum['LOGAM100']):'' ?></td>
<td>2016</td>
<td><?php echo @$GRESS_BI['LOGAM1002016']>0 ? rupiah(@$GRESS_BI['LOGAM1002016']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM1002016']>0 ? rupiah(@$RECYCLE_BI['LOGAM1002016']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM1002016']>0 ? rupiah(@$DROPSHOT['LOGAM1002016']):'' ?></td>
<td><?php echo @$ULE['LOGAM1002016']>0 ? rupiah(@$ULE['LOGAM1002016']):'' ?></td>
<td><?php echo @$ULE2['LOGAM1002016']>0 ? rupiah(@$ULE2['LOGAM1002016']):'' ?></td>
<td><?php echo @$UTLE['LOGAM1002016']>0 ? rupiah(@$UTLE['LOGAM1002016']):'' ?></td>
<td><?php echo @$MINOR['LOGAM1002016']>0 ? rupiah(@$MINOR['LOGAM1002016']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM1002016']>0 ? rupiah(@$MAYOR['LOGAM1002016']):'' ?></td>
<td rowspan="5"></td>
<td rowspan="5"><?php echo @$lembarbelum['LOGAM100']>0 ? @$lembarbelum['LOGAM100'] : '' ?></td>
<td rowspan="5"><?php echo @$belum['LOGAM100']>0 ? rupiah(@$belum['LOGAM100']):'' ?>      </td>
</tr>
<tr>
<td>1999</td>
<td><?php echo @$GRESS_BI['LOGAM1001999']>0 ? rupiah(@$GRESS_BI['LOGAM1001999']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM1001999']>0 ? rupiah(@$RECYCLE_BI['LOGAM1001999']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM1001999']>0 ? rupiah(@$DROPSHOT['LOGAM1001999']):'' ?></td>
<td><?php echo @$ULE['LOGAM1001999']>0 ? rupiah(@$ULE['LOGAM1001999']):'' ?></td>
<td><?php echo @$ULE2['LOGAM1001999']>0 ? rupiah(@$ULE2['LOGAM1001999']):'' ?></td>
<td><?php echo @$UTLE['LOGAM1001999']>0 ? rupiah(@$UTLE['LOGAM1001999']):'' ?></td>
<td><?php echo @$MINOR['LOGAM1001999']>0 ? rupiah(@$MINOR['LOGAM1001999']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM1001999']>0 ? rupiah(@$MAYOR['LOGAM1001999']):'' ?></td>
</tr>
<tr>
<td>1991</td>
<td><?php echo @$GRESS_BI['LOGAM1001991']>0 ? rupiah(@$GRESS_BI['LOGAM1001991']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM1001991']>0 ? rupiah(@$RECYCLE_BI['LOGAM1001991']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM1001991']>0 ? rupiah(@$DROPSHOT['LOGAM1001991']):'' ?></td>
<td><?php echo @$ULE['LOGAM1001991']>0 ? rupiah(@$ULE['LOGAM1001991']):'' ?></td>
<td><?php echo @$ULE2['LOGAM1001991']>0 ? rupiah(@$ULE2['LOGAM1001991']):'' ?></td>
<td><?php echo @$UTLE['LOGAM1001991']>0 ? rupiah(@$UTLE['LOGAM1001991']):'' ?></td>
<td><?php echo @$MINOR['LOGAM1001991']>0 ? rupiah(@$MINOR['LOGAM1001991']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM1001991']>0 ? rupiah(@$MAYOR['LOGAM1001991']):'' ?></td>
</tr>
<tr>
<td>1978</td>
<td><?php echo @$GRESS_BI['LOGAM1001978']>0 ? rupiah(@$GRESS_BI['LOGAM1001978']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM1001978']>0 ? rupiah(@$RECYCLE_BI['LOGAM1001978']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM1001978']>0 ? rupiah(@$DROPSHOT['LOGAM1001978']):'' ?></td>
<td><?php echo @$ULE['LOGAM1001978']>0 ? rupiah(@$ULE['LOGAM1001978']):'' ?></td>
<td><?php echo @$ULE2['LOGAM1001978']>0 ? rupiah(@$ULE2['LOGAM1001978']):'' ?></td>
<td><?php echo @$UTLE['LOGAM1001978']>0 ? rupiah(@$UTLE['LOGAM1001978']):'' ?></td>
<td><?php echo @$MINOR['LOGAM1001978']>0 ? rupiah(@$MINOR['LOGAM1001978']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM1001978']>0 ? rupiah(@$MAYOR['LOGAM1001978']):'' ?></td>
</tr>
<tr>
<td>1973</td>
<td><?php echo @$GRESS_BI['LOGAM1001973']>0 ? rupiah(@$GRESS_BI['LOGAM1001973']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM1001973']>0 ? rupiah(@$RECYCLE_BI['LOGAM1001973']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM1001973']>0 ? rupiah(@$DROPSHOT['LOGAM1001973']):'' ?></td>
<td><?php echo @$ULE['LOGAM1001973']>0 ? rupiah(@$ULE['LOGAM1001973']):'' ?></td>
<td><?php echo @$ULE2['LOGAM1001973']>0 ? rupiah(@$ULE2['LOGAM1001973']):'' ?></td>
<td><?php echo @$UTLE['LOGAM1001973']>0 ? rupiah(@$UTLE['LOGAM1001973']):'' ?></td>
<td><?php echo @$MINOR['LOGAM1001973']>0 ? rupiah(@$MINOR['LOGAM1001973']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM1001973']>0 ? rupiah(@$MAYOR['LOGAM1001973']):'' ?></td>
</tr>
<tr>
<td rowspan="2"> 50</td>
<td rowspan="2"> <?php echo @$jml['LOGAM50']+@$belum['LOGAM50']>0 ? rupiah(@$jml['LOGAM50']+@$belum['LOGAM50']):'' ?></td>
<td>1999</td>
<td><?php echo @$GRESS_BI['LOGAM501999']>0 ? rupiah(@$GRESS_BI['LOGAM501999']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM501999']>0 ? rupiah(@$RECYCLE_BI['LOGAM501999']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM501999']>0 ? rupiah(@$DROPSHOT['LOGAM501999']):'' ?></td>
<td><?php echo @$ULE['LOGAM501999']>0 ? rupiah(@$ULE['LOGAM501999']):'' ?></td>
<td><?php echo @$ULE2['LOGAM501999']>0 ? rupiah(@$ULE2['LOGAM501999']):'' ?></td>
<td><?php echo @$UTLE['LOGAM501999']>0 ? rupiah(@$UTLE['LOGAM501999']):'' ?></td>
<td><?php echo @$MINOR['LOGAM501999']>0 ? rupiah(@$MINOR['LOGAM501999']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM501999']>0 ? rupiah(@$MAYOR['LOGAM501999']):'' ?></td>
<td rowspan="2"></td>
<td rowspan="2"><?php echo @$lembarbelum['LOGAM50']>0 ? @$lembarbelum['LOGAM50'] : '' ?></td>
<td rowspan="2"><?php echo @$belum['LOGAM50']>0 ? rupiah(@$belum['LOGAM50']):'' ?>      </td>
</tr>
<tr>
<td>1991</td>
<td><?php echo @$GRESS_BI['LOGAM501991']>0 ? rupiah(@$GRESS_BI['LOGAM501991']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM501991']>0 ? rupiah(@$RECYCLE_BI['LOGAM501991']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM501991']>0 ? rupiah(@$DROPSHOT['LOGAM501991']):'' ?></td>
<td><?php echo @$ULE['LOGAM501991']>0 ? rupiah(@$ULE['LOGAM501991']):'' ?></td>
<td><?php echo @$ULE2['LOGAM501991']>0 ? rupiah(@$ULE2['LOGAM501991']):'' ?></td>
<td><?php echo @$UTLE['LOGAM501991']>0 ? rupiah(@$UTLE['LOGAM501991']):'' ?></td>
<td><?php echo @$MINOR['LOGAM501991']>0 ? rupiah(@$MINOR['LOGAM501991']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM501991']>0 ? rupiah(@$MAYOR['LOGAM501991']):'' ?></td>
</tr>
<tr>
<td rowspan="2"> 25</td>
<td rowspan="2"> <?php echo @$jml['LOGAM25']+@$belum['LOGAM25']>0 ? rupiah(@$jml['LOGAM25']+@$belum['LOGAM25']):'' ?></td>
<td>-</td>
<td><?php echo @$GRESS_BI['LOGAM25-']>0 ? rupiah(@$GRESS_BI['LOGAM25-']):'' ?></td>
<td><?php echo @$RECYCLE_BI['LOGAM25-']>0 ? rupiah(@$RECYCLE_BI['LOGAM25-']):'' ?></td>
<td><?php echo @$DROPSHOT['LOGAM25-']>0 ? rupiah(@$DROPSHOT['LOGAM25-']):'' ?></td>
<td><?php echo @$ULE['LOGAM25-']>0 ? rupiah(@$ULE['LOGAM25-']):'' ?></td>
<td><?php echo @$ULE2['LOGAM25-']>0 ? rupiah(@$ULE2['LOGAM25-']):'' ?></td>
<td><?php echo @$UTLE['LOGAM25-']>0 ? rupiah(@$UTLE['LOGAM25-']):'' ?></td>
<td><?php echo @$MINOR['LOGAM25-']>0 ? rupiah(@$MINOR['LOGAM25-']):'' ?></td>
<td><?php echo @$MAYOR['LOGAM25-']>0 ? rupiah(@$MAYOR['LOGAM25-']):'' ?></td>
<td></td>
<td rowspan="2"><?php echo @$lembarbelum['LOGAM25']>0 ? @$lembarbelum['LOGAM25'] : '' ?></td>
<td rowspan="2"><?php echo @$belum['LOGAM25']>0 ? rupiah(@$belum['LOGAM25']):'' ?>      </td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>TOTAL COIN</td>
<td><?php echo @$sub_total['LOGAM']+@$belum['LOGAM']>0 ? rupiah(@$sub_total['LOGAM']+@$belum['LOGAM']):'' ?></td>
<td></td>
<td><?php echo @$sub_total['LOGAMGRESS_BI']>0 ? rupiah(@$sub_total['LOGAMGRESS_BI']):'' ?></td>
<td><?php echo @$sub_total['LOGAMRECYCLE_BI']>0 ? rupiah(@$sub_total['LOGAMRECYCLE_BI']):'' ?></td>
<td><?php echo @$sub_total['LOGAMDROPSHOT']>0 ? rupiah(@$sub_total['LOGAMDROPSHOT']):'' ?></td>
<td><?php echo @$sub_total['LOGAMULE']>0 ? rupiah(@$sub_total['LOGAMULE']):'' ?></td>
<td><?php echo @$sub_total['LOGAMULE2']>0 ? rupiah(@$sub_total['LOGAMULE2']):'' ?></td>
<td><?php echo @$sub_total['LOGAMUTLE']>0 ? rupiah(@$sub_total['LOGAMUTLE']):'' ?></td>
<td><?php echo @$sub_total['LOGAMMINOR']>0 ? rupiah(@$sub_total['LOGAMMINOR']):'' ?></td>
<td><?php echo @$sub_total['LOGAMMAYOR']>0 ? rupiah(@$sub_total['LOGAMMAYOR']):'' ?></td>
<td><?php echo @$sub_total['LOGAMGRESS_BI']+@$sub_total['LOGAMRECYCLE_BI']+@$sub_total['LOGAMDROPSHOT']+@$sub_total['LOGAMULE']+@$sub_total['LOGAMULE2']+@$sub_total['LOGAMUTLE']+@$sub_total['LOGAMMINOR']+@$sub_total['LOGAMMAYOR']>0 ? rupiah(@$sub_total['LOGAMGRESS_BI']+@$sub_total['LOGAMRECYCLE_BI']+@$sub_total['LOGAMDROPSHOT']+@$sub_total['LOGAMULE']+@$sub_total['LOGAMULE2']+@$sub_total['LOGAMUTLE']+@$sub_total['LOGAMMINOR']+@$sub_total['LOGAMMAYOR']):'' ?></td>
<td><?php echo @$lembarbelum['LOGAM']>0 ? @$lembarbelum['LOGAM'] : '' ?></td>
<td><?php echo @$belum['LOGAM']>0 ? rupiah(@$belum['LOGAM']):'' ?>      </td>
</tr>
<tr>
<td ></td>
<td></td>
<td></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td ></td>
<td></td>
<td></td>
</tr>
</tbody>
</tfoot>
<tr>
<th>GRAND TTL</th>
<th><?php echo @$sub_total['LOGAM']+ @$belum['LOGAM']+@$sub_total['KERTAS']+@$belum['KERTAS'] > 0 ? rupiah(@$sub_total['LOGAM']+ @$belum['LOGAM']+@$sub_total['KERTAS']+@$belum['KERTAS']):'' ?></th>
<th></th>
<th><?php echo @$sub_total['LOGAMGRESS_BI']+@$sub_total['KERTASGRESS_BI'] > 0 ? rupiah(@$sub_total['LOGAMGRESS_BI']+@$sub_total['KERTASGRESS_BI']):'' ?></th>
<th><?php echo @$sub_total['LOGAMRECYCLE_BI']+@$sub_total['KERTASRECYCLE_BI'] > 0 ? rupiah(@$sub_total['LOGAMRECYCLE_BI']+@$sub_total['KERTASRECYCLE_BI']):'' ?></th>
<th><?php echo @$sub_total['LOGAMDROPSHOT']+@$sub_total['KERTASDROPSHOT'] > 0 ? rupiah(@$sub_total['LOGAMDROPSHOT']+@$sub_total['KERTASDROPSHOT']):'' ?></th>
<th><?php echo @$sub_total['LOGAMULE']+@$sub_total['KERTASULE'] > 0 ? rupiah(@$sub_total['LOGAMULE']+@$sub_total['KERTASULE']):'' ?></th>
<th><?php echo @$sub_total['LOGAMULE2']+@$sub_total['KERTASULE2'] > 0 ? rupiah(@$sub_total['LOGAMULE2']+@$sub_total['KERTASULE2']):'' ?></th>
<th><?php echo @$sub_total['LOGAMUTLE']+@$sub_total['KERTASUTLE'] > 0 ? rupiah(@$sub_total['LOGAMUTLE']+@$sub_total['KERTASUTLE']):'' ?></th>
<th><?php echo @$sub_total['LOGAMMINOR']+@$sub_total['KERTASMINOR'] > 0 ? rupiah(@$sub_total['LOGAMMINOR']+@$sub_total['KERTASMINOR']):'' ?></th>
<th><?php echo @$sub_total['LOGAMMAYOR']+@$sub_total['KERTASMAYOR'] > 0 ? rupiah(@$sub_total['LOGAMMAYOR']+@$sub_total['KERTASMAYOR']):'' ?></th>
<th><?php echo @$sub_total['LOGAMGRESS_BI']+@$sub_total['KERTASGRESS_BI']+@$sub_total['LOGAMRECYCLE_BI']+@$sub_total['KERTASRECYCLE_BI']+@$sub_total['LOGAMDROPSHOT']+@$sub_total['KERTASDROPSHOT']+@$sub_total['LOGAMULE']+@$sub_total['KERTASULE']+@$sub_total['LOGAMULE2']+@$sub_total['KERTASULE2']+@$sub_total['LOGAMUTLE']+@$sub_total['KERTASUTLE']+@$sub_total['LOGAMMINOR']+@$sub_total['KERTASMINOR']+@$sub_total['LOGAMMAYOR']+@$sub_total['KERTASMAYOR'] > 0 ? rupiah(@$sub_total['LOGAMGRESS_BI']+@$sub_total['KERTASGRESS_BI']+@$sub_total['LOGAMRECYCLE_BI']+@$sub_total['KERTASRECYCLE_BI']+@$sub_total['LOGAMDROPSHOT']+@$sub_total['KERTASDROPSHOT']+@$sub_total['LOGAMULE']+@$sub_total['KERTASULE']+@$sub_total['LOGAMULE2']+@$sub_total['KERTASULE2']+@$sub_total['LOGAMUTLE']+@$sub_total['KERTASUTLE']+@$sub_total['LOGAMMINOR']+@$sub_total['KERTASMINOR']+@$sub_total['LOGAMMAYOR']+@$sub_total['KERTASMAYOR']):'' ?></th>
<th><?php echo @$lembarbelum['LOGAM']+@$lembarbelum['KERTAS']>0 ? @$lembarbelum['LOGAM']+@$lembarbelum['KERTAS'] : '' ?></th>
<th><?php echo @$belum['LOGAM']+@$belum['KERTAS']>0 ? rupiah(@$belum['LOGAM']+@$belum['KERTAS']):'' ?>      </th>
</tr>
</tfoot>

    </table>
    </font>      
</div>

<!--donut chart-->
<div class="col-md-6 my-2 table-dashboard-container">
	<div class="panel panel-lte">
		<div class="panel-heading lte-heading-danger">Grafik Kondisi Uang Dalam Khasanah</div>
		<div class="panel-body">
		<canvas id="donutChart" style="height:230px; min-height:230px"></canvas>
		</div>
	</div>
</div>	

<script> 
//---donut chart---// 
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutData        = {
  labels: [
	  'Gress BI', 
	  'Recycle BI',
	  'Dropshot',
	  'Fit ATM', 
    'Fit Cabang', 
	  'UTLE', 
	  'Rusak Minor', 
      'Rusak Mayor', 
      'Campur', 
      'Belum di Prosess',
  ],
  datasets: [
	{
	  data: [<?php echo @$sub_total['LOGAMGRESS_BI']+@$sub_total['KERTASGRESS_BI']?>,
      <?php echo @$sub_total['LOGAMRECYCLE_BI']+@$sub_total['KERTASRECYCLE_BI']?>,
      <?php echo @$sub_total['LOGAMDROPSHOT']+@$sub_total['KERTASDROPSHOT']?>,
      <?php echo @$sub_total['LOGAMULE']+@$sub_total['KERTASULE']?>,
      <?php echo @$sub_total['LOGAMULE2']+@$sub_total['KERTASULE2']?>,
      <?php echo @$sub_total['LOGAMUTLE']+@$sub_total['KERTASUTLE']?>,
      <?php echo @$sub_total['LOGAMMINOR']+@$sub_total['KERTASMINOR']?>,
      <?php echo @$sub_total['LOGAMMAYOR']+@$sub_total['KERTASMAYOR']?>,
      <?php echo'0'?>,
      <?php echo @$belum['LOGAM']+@$belum['KERTAS']?>],
	  backgroundColor : ['#f56954', 
                        '#00a65a',      
                        '#f39c12', 
                        '#00c0ef',
                        '#00c0ff', 
                        '#3c8dbc', 
                        '#95c70c',
                        '#c7c40c', 
                        '#c75a0c', 
                        '#c70c15'],
	}
  ]
}
var donutOptions     = {
    maintainAspectRatio : false,
    responsive : true,     
}
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
var donutChart = new Chart(donutChartCanvas, {
  type: 'doughnut',
  data: donutData,
  options: donutOptions
})

</script>
