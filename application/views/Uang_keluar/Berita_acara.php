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
        left: 40px;
        top :10px;
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

    @media screen {
      .logo-ssi{
              left: 313px;
              top :30px;
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
<p style="text-align: center;"><strong>NO. <?php echo $row->no ?></strong></p>
<p style="text-align: center;"><strong>BERITA ACARA PENGAMBILAN/PENGANTARAN UANG TUNAI DAN SURAT BERHARGA</strong></p>
<table class="ba-table">
<tbody>
<tr style="height: 18px;">
<td style="width: 58.4294%; height: 18px;" colspan="3" class="bordered"><div style="padding-right:285px;"><strong>DARI</strong></div></td>
<td style="height: 72px; width: 1.41044%;" rowspan="4" ></td>
<td style="height: 18px; width: 83.7172%;" colspan="7" class="bordered"><strong>KEPADA</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px;" class="bordered">PERUSAHAAN</td>
<td style="width: 48.4294%; height: 18px;" colspan="2" class="bordered"><?php echo $row->nama_cabang?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered">PERUSAHAAN</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo $row->nama_sentra?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px;" class="bordered">ALAMAT</td>
<td style="width: 48.4294%; height: 18px;" colspan="2" class="bordered"><?php echo $row->alamat?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered">ALAMAT</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo $row->s_alamat?></td>
</tr>
<tr>
<td class="spacer" colspan="11" ></td>
</tr>
<tr style="height: 18px;">
<td style="height: 18px; width: 143.557%;" colspan="11" >Bersama ini kami menyatakan telah menerima sejumalah uang sebagaimana diuraikan di bawah ini :</td>
</tr>
<tr>
<td class="spacer" colspan="3" ></td>
<td style="width: 1.41044%; height: 411px;" rowspan="24"></td>
<td class="spacer" colspan="7" ></td>
</tr>
<tr style="height: 18px;">
<td style="width: 58.4294%; height: 13px; text-align: center;" colspan="3" class="bordered"><strong>IDR (Rupiah)</strong></td>
<td style="width: 83.7172%; height: 13px; text-align: center;" colspan="7" class="bordered"><strong>VALAS (Mata Uang Asing)</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 20px; text-align: center;" rowspan="2" class="bordered"><strong>Kertas</strong></td>
<td style="width: 2.84692%; height: 20px; text-align: center;" rowspan="2"class="bordered"><strong>Lembar</strong></td>
<td style="width: 45.5825%; height: 20px; text-align: center;" rowspan="2"class="bordered"><strong>Jumlah</strong></td>
<td style="width: 34.9113%; height: 20px;" rowspan="2" class="bordered"><strong>Kertas</strong></td>
<td style="width: 26.4922%; height: 10px;" colspan="2" class="bordered"><strong>USD</strong></td>
<td style="width: 17.8509%; height: 10px;" colspan="2" class="bordered">&nbsp;</td>
<td style="width: 4.46273%; height: 10px;" colspan="2" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 2.69103%; height: 10px;" class="bordered"><strong>Lembar</strong></td>
<td style="width: 23.8012%; height: 10px;" class="bordered"><strong>Jumlah</strong></td>
<td style="width: 11.9006%; height: 10px;" class="bordered"><strong>Lembar</strong></td>
<td style="width: 5.9503%; height: 10px;" class="bordered"><strong>Jumlah</strong></td>
<td style="width: 2.97515%; height: 10px;" class="bordered"><strong>Lembar</strong></td>
<td style="width: 1.48758%; height: 10px;" class="bordered"><strong>Jumlah</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">100.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-100000']!==0) echo rupiah($pecahan['L-1-100000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-100000']!==0) echo rupiah($pecahan['1-100000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">100</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">75.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-75000']!==0) echo rupiah($pecahan['L-1-75000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-75000']!==0) echo rupiah($pecahan['1-75000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">50</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">50.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-50000']!==0) echo rupiah($pecahan['L-1-50000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-50000']!==0) echo rupiah($pecahan['1-50000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">20</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">20.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-20000']!==0) echo rupiah($pecahan['L-1-20000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-20000']!==0) echo rupiah($pecahan['1-20000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">10</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">10.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-10000']!==0) echo rupiah($pecahan['L-1-10000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-10000']!==0) echo rupiah($pecahan['1-10000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">5</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">5.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-5000']!==0) echo rupiah($pecahan['L-1-5000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-5000']!==0) echo rupiah($pecahan['1-5000']) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: right;" class="bordered">1</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">2.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-2000']!==0) echo rupiah($pecahan['L-1-2000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-2000']!==0) echo rupiah($pecahan['1-2000']) ?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">1.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-1000']!==0) echo rupiah($pecahan['L-1-1000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-1000']!==0) echo rupiah($pecahan['1-1000']) ?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">500</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-500']!==0) echo rupiah($pecahan['L-1-500']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['1-500']!==0) echo rupiah($pecahan['1-500']) ?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: center;" class="bordered"><strong>TOTAL</strong></td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php if($pecahan['L-1']!==0) echo rupiah($pecahan['L-1']) ?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php if($total)  echo rupiah($total->total_kertas);  ?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered"><strong>TOTAL</strong></td>
<td style="width: 2.69103%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;" class="bordered">&nbsp;</td>
</tr>
<tr>
<td class="spacer" colspan="3"></td>
<td class="spacer" colspan="7"></td>
</tr>
<tr>
<td class="spacer" colspan="3"></td>
<td class="spacer" colspan="7"></td>
</tr>
<tr style="height: 18px;">
<td style="width: 58.4294%; text-align: center; height: 18px;" colspan="3" class="bordered"><strong>IDR (Rupiah)</strong></td>
<td style="width: 83.7172%; height: 18px; text-align: center;" colspan="7" class="bordered"><strong>TERBILANG</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered"><strong>Logam</strong></td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><strong>Keping</strong></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><strong>Jumlah</strong></td>
<td style="width: 34.9113%; height: 18px;" class="bordered"><strong><span style="text-decoration: line-through;">USD</span></strong></td>
<td style="width: 48.8059%; height: 36px;" colspan="6" rowspan="2" class="bordered"><strong><?php if($total)  echo terbilang($total->total);  ?></strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">1.000</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-1000']!==0) echo rupiah($pecahan['L-2-1000']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-1000']!==0) echo rupiah($pecahan['2-1000']) ?></td>
<td style="width: 34.9113%; height: 18px;" class="bordered"><strong>IDR</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">500</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-500']!==0) echo rupiah($pecahan['L-2-500']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-500']!==0) echo rupiah($pecahan['2-500']) ?></td>
<td style="width: 34.9113%; height: 18px;">&nbsp;</td>
<td style="width: 2.69103%; height: 18px;">&nbsp;</td>
<td style="width: 23.8012%; height: 18px;">&nbsp;</td>
<td style="width: 11.9006%; height: 18px;">&nbsp;</td>
<td style="width: 5.9503%; height: 18px;">&nbsp;</td>
<td style="width: 2.97515%; height: 18px;">&nbsp;</td>
<td style="width: 1.48758%; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">200</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-200']!==0) echo rupiah($pecahan['L-2-200']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-200']!==0) echo rupiah($pecahan['2-200']) ?></td>
<td style="width: 83.7172%; height: 18px;" colspan="7" class="bordered"><strong>TRANSAKSI NON TUNAI</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: right;" class="bordered">100</td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-100']!==0) echo rupiah($pecahan['L-2-100']) ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if($pecahan['2-100']!==0) echo rupiah($pecahan['2-100']) ?></td>
<td style="width: 37.6023%; height: 18px;" colspan="2" class="bordered"><strong>No. Cek / Bilyet Giro</strong></td>
<td style="width: 35.7018%; height: 18px;" colspan="2" class="bordered"><strong>Bank</strong></td>
<td style="width: 10.413%; height: 18px;" colspan="3" class="bordered"><strong>Jumlah</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered"><strong>TOTAL</strong></td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered">&nbsp;</td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if (!(@$total->total_logam==0)) echo rupiah($total->total_logam); ?></td>
<td style="width: 37.6023%; height: 36px;" colspan="2" rowspan="2" class="bordered">&nbsp;</td>
<td style="width: 35.7018%; height: 36px;" colspan="2" rowspan="2" class="bordered">&nbsp;</td>
<td style="width: 10.413%; height: 36px;" colspan="3" rowspan="2" class="bordered">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered"><strong>GRAND TOTAL</strong></td>
<td style="width: 2.84692%; height: 18px; text-align: right;" class="bordered"><?php if (!($pecahan['L']==0)) echo rupiah($pecahan['L']); ?></td>
<td style="width: 45.5825%; height: 18px; text-align: right;" class="bordered"><?php if (!(@$total->total==0)) echo rupiah($total->total); ?></td>
</tr>
<tr>
<td class="spacer" colspan="3"></td>
<td class="spacer" colspan="7"></td>
</tr>
<tr>
<td class="spacer" colspan="3"></td>
<td class="spacer" colspan="7"></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 36px;" rowspan="2" class="bordered"><strong>No</strong></td>
<td style="width: 2.84692%; height: 36px; text-align: center;" rowspan="2" class="bordered"><strong>No. Segel</strong></td>
<td style="width: 45.5825%; height: 36px; text-align: center;" rowspan="2" class="bordered"><strong>No. Tas Uang</strong></td>
<td style="width: 36.3217%; height: 18px; text-align: center;" colspan="2" class="bordered"><strong>Paraf</strong></td>
<td style="width: 48.8059%; height: 36px; text-align: center;" colspan="6" rowspan="2" class="bordered"><strong>Catatan</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 1.41044%; height: 18px; text-align: center;" class="bordered"><strong>Pelanggan</strong></td>
<td style="width: 34.9113%; height: 18px; text-align: center;" class="bordered"><strong>Pegawai</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered">1</td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[0]['no_segel']?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[0]['no_tas']?></td>
<td style="width: 1.41044%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo @$tas[0]['keterangan']?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered">2</td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[1]['no_segel']?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[1]['no_tas']?></td>
<td style="width: 1.41044%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo @$tas[1]['keterangan']?></td></tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered">3</td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[2]['no_segel']?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[2]['no_tas']?></td>
<td style="width: 1.41044%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo @$tas[2]['keterangan']?></td></tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered">4</td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[3]['no_segel']?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[3]['no_tas']?></td>
<td style="width: 1.41044%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo @$tas[3]['keterangan']?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; text-align: center; height: 18px;" class="bordered">5</td>
<td style="width: 2.84692%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[4]['no_segel']?></td>
<td style="width: 45.5825%; text-align: right; height: 18px;" class="bordered"><?php echo @$tas[4]['no_tas']?></td>
<td style="width: 1.41044%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 34.9113%; height: 18px;" class="bordered">&nbsp;</td>
<td style="width: 48.8059%; height: 18px;" colspan="6" class="bordered"><?php echo @$tas[4]['keterangan']?></td></tr>
<tr>
<td class="spacer" colspan="11"></td>
</tr>
<tr style="height: 18px;">
<td style="width: 143.557%; height: 18px; text-align: left;" colspan="11">Metode Serah Terima : Said To Contain / Count On Site / Gloubal Count</td>
</tr>
<tr>
<td class="spacer" colspan="11"></td>
</tr>
<tr style="height: 18px;">
<td style="width: 58.4294%; text-align: center; height: 18px;" colspan="3" class="bordered"><strong>PENGAMBILAN</strong></td>
<td style="width: 1.41044%; height: 126px;" rowspan="7">&nbsp;</td>
<td style="width: 83.7172%; height: 18px; text-align: center;" colspan="7" class="bordered"><strong>PENGANTARAN</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: left;" class="bordered" colspan="2">Tanggal</td>
<td style="width: 48.4294%; height: 18px; text-align: left;" class="bordered"><?php echo ybs_tanggal_indo(strtotime($row->tanggal_penerimaan)) ?></td>
<td style="width: 34.9113%; height: 18px; text-align: left;" class="bordered" colspan="3">Tanggal</td>
<td style="width: 48.8059%; height: 18px; text-align: left;" colspan="4" class="bordered">:</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: left;" class="bordered" colspan="2">Waktu Tiba</td>
<td style="width: 48.4294%; height: 18px; text-align: left;" class="bordered"><?php echo $row->waktu_tiba ?></td>
<td style="width: 34.9113%; height: 18px; text-align: left;" class="bordered" colspan="3">Waktu Tiba</td>
<td style="width: 48.8059%; height: 18px; text-align: left;" colspan="4" class="bordered">:</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: left;" class="bordered" colspan="2">Waktu Serah Terima</td>
<td style="width: 48.4294%; height: 18px; text-align: left;" class="bordered"><?php echo $row->waktu_tiba ?></td>
<td style="width: 34.9113%; height: 18px; text-align: left;" class="bordered" colspan="3">Waktu Serah Terima</td>
<td style="width: 48.8059%; height: 18px; text-align: left;" colspan="4" class="bordered">:</td>
</tr>
<tr style="height: 18px;">
<td style="width: 10%; height: 18px; text-align: left;" class="bordered" colspan="2">No. Pol Kendaraan</td>
<td style="width: 48.4294%; height: 18px; text-align: left;" class="bordered"><?php echo $row->no_kendaraan ?></td>
<td style="width: 34.9113%; height: 18px; text-align: left;" class="bordered" colspan="3">No. Pol Kendaraan</td>
<td style="width: 48.8059%; height: 18px; text-align: left;" colspan="4" class="bordered">:</td>
</tr>
<tr style="height: 18px;">
<td style="width: 12.8469%; text-align: center; height: 18px;" colspan="2" class="bordered"><strong>Diserahkan</strong></td>
<td style="width: 45.5825%; height: 18px; text-align: left;" class="bordered"><strong>Diterima</strong></td>
<td style="width: 34.9113%; height: 18px;" class="bordered" colspan="3"><strong>Diserahkan</strong></td>
<td style="width: 48.8059%; height: 18px;" colspan="4" class="bordered"><strong>Diterima</strong></td>
</tr>
<tr style="height: 18px;">
<td style="text-align: center; height: 18px; width: 12.8469%;" colspan="2" class="bordered">
<p style="text-align: left;">Nama&nbsp; : <?php echo $row->diserahkan_oleh ?></p>
<p style="text-align: left;">TTD&nbsp;&nbsp;&nbsp; :</p>
</td>
<td style="width: 45.5825%; height: 18px; text-align: left;" class="bordered">
<p>Nama&nbsp; : <?php echo $row->diterima_oleh ?></p>
<p>TTD&nbsp;&nbsp;&nbsp; :</p>
</td>
<td style="width: 34.9113%; height: 18px;" class="bordered" colspan="3">
<p>Nama&nbsp; : </p>
<p>TTD&nbsp;&nbsp;&nbsp; :</p>
</td>
<td style="height: 18px; width: 48.8059%;" colspan="4" class="bordered">
<p>Nama&nbsp; :</p>
<p>TTD&nbsp;&nbsp;&nbsp; :</p>
</td>
</tr>
<tr style="height: 31px;">
<td style="text-align: center; width: 143.557%; height: 31px;" colspan="11">
<p><strong>PT.SWADHARMA SARANA INFORMATIKA</strong></p>
<p>Bellagio Office Park, Unit OUG 31-32 Jl. Mega Kuningan Barat Kav E4.3</p>
<p>Kawasan Mega Kuningan, Setiabudi-Jakarta Selatan 12950</p>
<p>Telp. (021) 30066109, 30066110, 30066112, Fax. (021) 30066120 e-mail: ssi@ssilink.co.id, http://www.ssilink.co.id</p>
</td>
</tr>
<tr style="height: 46px;">
<td style="width: 12.8469%; text-align: center; height: 46px;" colspan="2">
<p style="text-align: left;">Lembar 1 : PT. SSI</p>
</td>
<td style="width: 45.5825%; text-align: left; height: 46px;">
<p>Lembar 2 : Copy</p>
</td>
<td style="width: 1.41044%; height: 46px;">&nbsp;</td>
<td style="width: 34.9113%; height: 46px;" colspan="3">
<p>Lembar 3 : Penerima</p>
</td>
<td style="width: 48.8059%; height: 46px;" colspan="3">
<p>Lembar 4 : Pengirim</p>
</td>
</tr>
</tbody>
</table>
<!-- <script>
  window.onload = function() {
    window.print();
  }
</script> -->

</html>