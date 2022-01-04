<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Berita Acara</title>
  <style type="text/css">
    /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: #FAFAFA;
      font: 8pt "Tahoma";
    }

    * {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
    }    

    .page {
      width: 210mm;
      min-height: 297mm;
      padding-left: 10mm;
      padding-top: 10mm;
      margin: 5mm auto;
      border: 1px #D3D3D3 solid;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    @page {
      size: A4;
      margin: 0;
    }

    @media print {

      html,
      body {
        width: 210mm;
        height: 297mm;
        -webkit-print-color-adjust: exact;
      }

       .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
      } 

      td.bordered {
        border: 1px solid #000 !important;    
      }
      .logo-ssi{
        left: 600px;
        top :50px;      
        width: 122px;
        height: 80px;
        position: absolute;
      }
    }

    .style1 {
      color: #FFFFFF
    }

    .ba-table{
      border-collapse: collapse; 
      width: 91.1259%; 
      height: 866px;
      border: none;
    }

    .ba-table td {
      border: none;     
    } 

    td.bordered {
      border: 1px solid black;    
    }

    .spacer {
      height:5px;
    }

    .letter-header{
      margin-top: 25px;
    }

    @media screen {
      .logo-ssi{
              left: 900px;
              top :75px;
              width: 122px;
              height: 80px;
              position: absolute;
            }
    
    }
    
  </style>
</head>

<body>
  <div class="page">
<img class="logo-ssi" src="<?php echo base_url('api/Public_Access/get_logo_login')?>">
<div class="letter-header">
<p><strong>NO : <?php echo $row4->no ?></strong></p>
<p><strong>PT. SWADHARMA SARANA INFORMATIKA</strong></p>
<p><strong>Kepada Yth :</strong></p>
<p><strong></strong></p>
<p><strong>U.P : <?php echo $row4->up ?></strong></p>
</div>
<p style="text-align: center;"><strong><u>BERITA ACARA SELISIH HASIL PROSES</u></strong></p>
<table class="ba-table">
<tbody>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Client / Cabang Proses</td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="2"><?php echo $row->bank?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3"><?php echo $row->nama_cabang?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Tanggal Pengambilan</td>
<td class="bordered" style="width: 60%; height: 18px;" colspan="5"><?php echo ybs_tanggal_indo(strtotime($row->tanggal_penerimaan)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Jam Mulai Proses / Selesai Proses</td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="2"><?php echo $row4->mulai_proses?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3"><?php echo $row4->selesai_proses?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">No. Segel</td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="2"><?php echo implode(",",$no_segel);?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">No. TTP</td>
<td class="bordered" style="width: 60%; height: 18px;" colspan="5"><?php echo $row->no ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">No. Bag</td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="2"><?php echo implode(",",$no_tas);?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Kondisi Segel &amp; Bag</td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="2"><?php echo implode(",",$keterangan_tas);?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Nama OA / Kasir di TTP</td>
<td class="bordered" style="height: 18px; width: 15%;"><?php echo $row4->nama_oa?></td>
<td class="bordered" style="width: 15%; height: 18px;"><?php echo $row4->kasir_ttp?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Nama Kasir Bank / Client</td>
<td class="bordered" style="width: 60%; height: 18px;" colspan="5">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">No. Pol Kendaraan</td>
<td class="bordered" style="width: 60%; height: 18px;" colspan="5"><?php echo $row->no_kendaraan ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Total Proses</td>
<td class="bordered" style="width: 30%; height: 18px; text-align: right;" colspan="2">Rp. <?php echo rupiah($row->jumlah_global) ?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Total TTP</td>
<td class="bordered" style="width: 30%; height: 18px; text-align: right;" colspan="2">Rp.<?php echo rupiah($row->jumlah_global) ?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Total Fisik</td>
<td class="bordered" style="width: 30%; height: 18px; text-align: right;" colspan="2">Rp.<?php echo rupiah($row->jumlah_global+$row->selisih_lebih-$row->selisih_kurang) ?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 40%; height: 18px;" colspan="3">Total Selisih</td>
<td class="bordered" style="width: 30%; height: 18px; text-align: right;" colspan="2">Rp.<?php $selisih=$row->selisih_lebih-$row->selisih_kurang;  echo $selisih<0 ? "(".rupiah(0-$selisih).")" : rupiah($selisih) ?></td>
<td class="bordered" style="width: 30%; height: 18px;" colspan="3">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 100%; height: 18px;" colspan="8">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 100%; height: 18px;" colspan="8">Rincian Selisih</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">No.</td>
<td class="bordered" style="width: 15%; height: 18px;">&nbsp;</td>
<td class="bordered" style="width: 15%; height: 18px;">Kurang (lbr)</td>
<td class="bordered" style="width: 12%; height: 18px;">Diduga Palsu (lbr)</td>
<td class="bordered" style="width: 12%; height: 18px;">Mutilasi (lbr)</td>
<td class="bordered" style="width: 12%; height: 18px;">Lebih (lbr)</td>
<td class="bordered" style="width: 24%; height: 18px;" colspan="2">Total (Rp)</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">1</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">100.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s11000001/100000>0 ? @$s11000001/100000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11000002/100000>0 ? @$s11000002/100000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11000003/100000>0 ? @$s11000003/100000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11000004/100000>0 ? @$s11000004/100000:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s1100000=@$s11000004-@$s11000003-@$s11000002-@$s11000001; echo $s1100000<0 ? "(".rupiah($s1100000).")" : ($s1100000==0 ? '': rupiah($s1100000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">2</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">75.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo  @$s1750001/75000>0 ?@$s1750001/75000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1750002/75000>0 ?@$s1750002/75000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1750003/75000>0 ?@$s1750003/75000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1750004/75000>0 ?@$s1750004/75000 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s175000=@$s1750004-@$s1750003-@$s1750002-@$s1750001; echo $s175000<0 ? "(".rupiah(0-$s175000).")" : ($s175000==0 ? '': rupiah($s175000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">3</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">50.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo  @$s1500001/50000>0 ?@$s1500001/50000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1500002/50000>0 ?@$s1500002/50000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1500003/50000>0 ?@$s1500003/50000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo  @$s1500004/50000>0 ?@$s1500004/50000 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s150000=@$s1500004-@$s1500003-@$s1500002-@$s1500001; echo $s150000<0 ? "(".rupiah(0-$s150000).")" : ($s150000==0 ? '': rupiah($s150000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">4</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">20.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s1200001/20000>0 ? @$s1200001/20000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1200002/20000>0 ? @$s1200002/20000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1200003/20000>0 ? @$s1200003/20000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1200004/20000>0 ? @$s1200004/20000:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s120000=@$s1200004-@$s1200003-@$s1200002-@$s1200001; echo $s120000<0 ? "(".rupiah(0-$s120000).")" : ($s120000==0 ? '': rupiah($s120000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">5</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">10.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s1100001/10000 > 0 ? @$s1100001/10000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1100002/10000 > 0 ? @$s1100002/10000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1100003/10000 > 0 ? @$s1100003/10000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s1100004/10000 > 0 ? @$s1100004/10000:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s110000=@$s1100004-@$s1100003-@$s1100002-@$s1100001; echo $s110000<0 ? "(".rupiah(0-$s110000).")" : ($s110000==0 ? '': rupiah($s110000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">6</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">5.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s150001/5000>0 ? @$s150001/5000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s150002/5000>0 ? @$s150002/5000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s150003/5000>0 ? @$s150003/5000:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s150004/5000>0 ? @$s150004/5000:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s15000=@$s150004-@$s150003-@$s150002-@$s150001; echo $s15000<0 ? "(".rupiah(0-$s15000).")" : ($s15000==0 ? '': rupiah($s15000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">7</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">2.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s120001/2000>0 ? @$s120001/2000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s120002/2000>0 ? @$s120002/2000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s120003/2000>0 ? @$s120003/2000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s120004/2000>0 ? @$s120004/2000 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s12000=@$s120004-@$s120003-@$s120002-@$s120001; echo $s12000<0 ? "(".rupiah(0-$s12000).")" : ($s12000==0 ? '': rupiah($s12000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">8</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">1.000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s110001/1000 > 0 ? @$s110001/1000 : ''?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s110002/1000 > 0 ? @$s110002/1000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s110003/1000 > 0 ? @$s110003/1000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s110004/1000 > 0 ? @$s110004/1000 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s11000=@$s110004-@$s110003-@$s110002-@$s110001; echo $s11000<0 ? "(".rupiah(0-$s11000).")" : ($s11000==0 ? '': rupiah($s11000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">9</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">500</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s15001/500 > 0 ? @$s15001/500 :'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s15002/500 > 0 ? @$s15002/500 :'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s15003/500 > 0 ? @$s15003/500 :'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s15004/500 > 0 ? @$s15004/500 :'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s1500=@$s15004-@$s15003-@$s15002-@$s15001; echo $s1500<0 ? "(".rupiah(0-$s1500).")" : ($s1500==0 ? '': rupiah($s1500)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">10</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">100</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s11001/100 > 0 ? @$s11001/100 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11002/100 > 0 ? @$s11002/100 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11003/100 > 0 ? @$s11003/100 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s11004/100 > 0 ? @$s11004/100 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s1100=@$s11004-@$s11003-@$s11002-@$s11001; echo $s1100<0 ? "(".rupiah(0-$s1100).")" : ($s1100==0 ? '': rupiah($s1100)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 18px; text-align: center;" colspan="2">Coin</td>
<td class="bordered" style="width: 15%; height: 18px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 18px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 18px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 18px;">&nbsp;</td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">11</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">1000</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s210001/1000 > 0 ? @$s210001/1000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s210002/1000 > 0 ? @$s210002/1000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s210003/1000 > 0 ? @$s210003/1000 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s210004/1000 > 0 ? @$s210004/1000 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s21000=@$s210004-@$s210003-@$s210002-@$s210001; echo $s21000<0 ? "(".rupiah(0-$s21000).")" : ($s21000==0 ? '': rupiah($s21000)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">12</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">500</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s25001/500 > 0 ?  @$s25001/500 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s25002/500 > 0 ?  @$s25002/500 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s25003/500 > 0 ?  @$s25003/500 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s25004/500 > 0 ?  @$s25004/500 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s2500=@$s25004-@$s25003-@$s25002-@$s25001; echo $s2500<0 ? "(".rupiah(0-$s2500).")" : ($s2500==0 ? '': rupiah($s2500)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">13</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">200</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s21001/200>0 ? @$s22001/200:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s22002/200>0 ? @$s22002/200:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s22003/200>0 ? @$s22003/200:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s22004/200>0 ? @$s22004/200:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s2200=@$s22004-@$s22003-@$s22002-@$s22001; echo $s2200<0 ? "(".rupiah(0-$s2200).")" : ($s2200==0 ? '': rupiah($s2200)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">14</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">100</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s21001/100 > 0 ? @$s21001/100:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s21002/100 > 0 ? @$s21002/100:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s21003/100 > 0 ? @$s21003/100:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s21004/100 > 0 ? @$s21004/100:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s2100=@$s21004-@$s21003-@$s21002-@$s21001; echo $s2100<0 ? "(".rupiah(0-$s2100).")" : ($s2100==0 ? '': rupiah($s2100)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">15</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">50</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s2501/50 > 0 ? @$s2501/50:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2502/50 > 0 ? @$s2502/50:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2503/50 > 0 ? @$s2503/50:'' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2504/50 > 0 ? @$s2504/50:'' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s250=@$s2504-@$s2503-@$s2502-@$s2501; echo $s250<0 ? "(".rupiah(0-$s250).")" : ($s250==0 ? '': rupiah($s250)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 10%; height: 18px; text-align: center;">16</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: right;">25</td>
<td class="bordered" style="width: 15%; height: 18px; text-align: center;"><?php echo @$s2251/25 > 0 ? @$s2251/25 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2252/25 > 0 ? @$s2252/25 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2253/25 > 0 ? @$s2253/25 : '' ?></td>
<td class="bordered" style="width: 12%; height: 18px; text-align: center;"><?php echo @$s2254/25 > 0 ? @$s2254/25 : '' ?></td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php $s225=@$s2254-@$s2253-@$s2252-@$s2251; echo $s225<0 ? "(".rupiah(0-$s225).")" : ($s225==0 ? '': rupiah($s225)) ?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 76%; height: 18px;" colspan="6">Grand Total</td>
<td class="bordered" style="width: 24%; height: 18px; text-align: right;" colspan="2">Rp.<?php echo $selisih<0 ? "(".rupiah(0-$selisih).")" : rupiah($selisih)?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 36px;" colspan="2">Catatan:</td>
<td class="bordered" style="width: 75%; height: 36px;" colspan="6"><?php echo $row4->catatan?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 64%; height: 18px;" colspan="5">Penjelasan</td>
<td class="bordered" style="width: 12%; height: 18px;">Jam</td>
<td class="bordered" style="width: 12%; height: 18px;">Kamera</td>
<td class="bordered" style="width: 12%; height: 18px;">No. Seri</td>
</tr>
<?php foreach($row2 as $r) { ?>
<tr style="height: 18px;">
<td class="bordered" style="width: 64%; height: 18px;" colspan="5"><?php echo $r['penjelasan'] ?></td>
<td class="bordered" style="width: 12%; height: 18px;"><?php echo $r['jam'] ?></td>
<td class="bordered" style="width: 12%; height: 18px;"><?php echo $r['kamera'] ?></td>
<td class="bordered" style="width: 12%; height: 18px;"><?php echo $r['no_seri'] ?></td>
</tr>
<?php } ?>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 36px; text-align: center;" colspan="2">Lampiran:</td>
<td class="bordered" style="width: 75%; height: 36px;" colspan="6"><?php echo $row4->lampiran?></td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 100%; height: 18px;" colspan="8">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 36px;" colspan="2">Keterangan</td>
<td class="bordered" style="width: 15%; height: 36px; text-align: center;">Nama</td>
<td class="bordered" style="width: 12%; height: 36px; text-align: center;">ID</td>
<td class="bordered" style="width: 36%; height: 36px; text-align: center;" colspan="3">Tanda Tangan</td>
<td class="bordered" style="width: 12%; height: 36px;">Pemeriksa</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 36px;" colspan="2">Ditemukan Oleh,</td>
<td class="bordered" style="width: 15%; height: 36px;"><?php echo $row4->ditemukan_oleh?></td>
<td class="bordered" style="width: 12%; height: 36px;"><?php echo $row4->ditemukan_id?></td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td class="bordered" style="width: 25%; height: 36px;" colspan="2">Disaksikan Oleh,</td>
<td class="bordered" style="width: 15%; height: 36px;"><?php echo $row4->disaksikan_oleh?></td>
<td class="bordered" style="width: 12%; height: 36px;"><?php echo $row4->disaksikan_id?></td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
</tr>
<tr style="height: 36px;">
<td class="bordered" style="width: 25%; height: 36px;" colspan="2">Diketahui Oleh,</td>
<td class="bordered" style="width: 15%; height: 36px;"><?php echo $row4->diketahui_oleh?></td>
<td class="bordered" style="width: 12%; height: 36px;"><?php echo $row4->diketahui_id?></td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">&nbsp;</td>
<td class="bordered" style="width: 12%; height: 36px;">Tgl :&nbsp;&nbsp; Jam:</td>
</tr>
</tbody>
</table>
<!-- <script>
  window.onload = function() {
    window.print();
  }
</script> -->

</html>