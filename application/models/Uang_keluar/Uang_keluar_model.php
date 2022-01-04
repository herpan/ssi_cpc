<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_uang_keluar.id as id,
			app_uang_keluar.no as no,
			app_uang_keluar.cabang_id as cabang_id,
			app_uang_keluar.sentra_kas_id as sentra_kas_id,
			sum(d.jumlah) as jumlah_global,
			app_uang_keluar.status_penerimaan as status_penerimaan,
			app_uang_keluar.tanggal_penerimaan as tanggal_penerimaan,
			app_uang_keluar.waktu_tiba as waktu_tiba,
			app_uang_keluar.waktu_serah_terima as waktu_serah_terima,
			app_uang_keluar.no_kendaraan as no_kendaraan,
			app_uang_keluar.diserahkan_oleh as diserahkan_oleh,
			app_uang_keluar.diterima_oleh as diterima_oleh,
			app_uang_keluar.detail_tas as detail_tas,
			app_uang_keluar.keterangan as keterangan,
			app_uang_keluar.user_input as user_input,
			app_uang_keluar.input_time as input_time,
			app_uang_keluar.user_update as user_update,
			app_uang_keluar.update_time as update_time,
			c.id as c_id,
			c.bank_id as bank_id,
			c.kategori_cabang_id as kategori_cabang_id,
			c.nama_cabang as nama_cabang,
			c.alamat as alamat,
			c.deskripsi as deskripsi,
			c.sentra_kas_id as c_sentra_kas_id,
			c.user_input as c_user_input,
			c.input_time as c_input_time,
			c.user_update as c_user_update,
			c.update_time as c_update_time,
			s.id as s_id,
			s.kode_sentra as kode_sentra,
			s.sentra as sentra,
			s.nama_sentra as nama_sentra,
			s.alamat as s_alamat,
			s.user_input as s_user_input,
			s.input_time as s_input_time,
			s.user_update as s_user_update,
			s.update_time as s_update_time,
			userinput.id as userinput_id,
			userinput.nmuser as nmuser,
			userinput.passuser as passuser,
			userinput.nama_lengkap as nama_lengkap,
			userinput.tanda_tangan as tanda_tangan,
			userinput.opt_level as opt_level,
			userinput.opt_status as opt_status,
			userinput.picture as picture,
			userupdate.id as userupdate_id,
			userupdate.nmuser as userupdate_nmuser,
			userupdate.passuser as userupdate_passuser,
			userupdate.nama_lengkap as userupdate_nama_lengkap,
			userupdate.tanda_tangan as userupdate_tanda_tangan,
			userupdate.opt_level as userupdate_opt_level,
			userupdate.opt_status as userupdate_opt_status,
			userupdate.picture as userupdate_picture,
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as b_deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
		');
		
		$this->datatables->from('app_uang_keluar');

		$this->datatables->join('app_uang_keluar_detail d','d.uang_keluar_detail=app_uang_keluar.id','LEFT'); 
	
		$this->datatables->join('app_cabang_cpc c','c.id=app_uang_keluar.cabang_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas s','s.id=app_uang_keluar.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_keluar.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_keluar.user_update','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->datatables->group_by('d.uang_keluar_id');

			
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_uang_keluar.id as id',
			'app_uang_keluar.no as no',
			'app_uang_keluar.cabang_id as cabang_id',
			'app_uang_keluar.sentra_kas_id as sentra_kas_id',
			'app_uang_keluar.jumlah_global as jumlah_global',
			'app_uang_keluar.status_penerimaan as status_penerimaan',
			'app_uang_keluar.tanggal_penerimaan as tanggal_penerimaan',
			'app_uang_keluar.waktu_tiba as waktu_tiba',
			'app_uang_keluar.waktu_serah_terima as waktu_serah_terima',
			'app_uang_keluar.no_kendaraan as no_kendaraan',
			'app_uang_keluar.diserahkan_oleh as diserahkan_oleh',
			'app_uang_keluar.diterima_oleh as diterima_oleh',
			'app_uang_keluar.detail_tas as detail_tas',
			'app_uang_keluar.keterangan as keterangan',
			'app_uang_keluar.user_input as user_input',
			'app_uang_keluar.input_time as input_time',
			'app_uang_keluar.user_update as user_update',
			'app_uang_keluar.update_time as update_time',
			'c.id as c_id',
			'c.bank_id as bank_id',
			'c.kategori_cabang_id as kategori_cabang_id',
			'c.nama_cabang as nama_cabang',
			'c.alamat as alamat',
			'c.deskripsi as deskripsi',
			'c.sentra_kas_id as c_sentra_kas_id',
			'c.user_input as c_user_input',
			'c.input_time as c_input_time',
			'c.user_update as c_user_update',
			'c.update_time as c_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as s_alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as opt_status',
			'userinput.picture as picture',
			'userupdate.id as userupdate_id',
			'userupdate.nmuser as userupdate_nmuser',
			'userupdate.passuser as userupdate_passuser',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',
			'userupdate.tanda_tangan as userupdate_tanda_tangan',
			'userupdate.opt_level as userupdate_opt_level',
			'userupdate.opt_status as userupdate_opt_status',
			'userupdate.picture as userupdate_picture',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as b_deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
		
		);
		$this->db->select($afield);
		$this->db->join('app_cabang_cpc c','c.id=app_uang_keluar.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_uang_keluar.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->db->order_by('app_uang_keluar.id', 'ASC');
		return $this->db->get('app_uang_keluar')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_keluar.id as id',
			'app_uang_keluar.no as no',
			'app_uang_keluar.cabang_id as cabang_id',
			'app_uang_keluar.sentra_kas_id as sentra_kas_id',
			'd.jumlah as jumlah_global',
			'd.jumlah_proses as jumlah_proses',
			'd.selisih_kurang as selisih_kurang',
			'd.selisih_lebih as selisih_lebih',
			'd.jumlah_belum_proses',
			'app_uang_keluar.status_penerimaan as status_penerimaan',
			'app_uang_keluar.tanggal_penerimaan as tanggal_penerimaan',
			'app_uang_keluar.waktu_tiba as waktu_tiba',
			'app_uang_keluar.waktu_serah_terima as waktu_serah_terima',
			'app_uang_keluar.no_kendaraan as no_kendaraan',
			'app_uang_keluar.diserahkan_oleh as diserahkan_oleh',
			'app_uang_keluar.diterima_oleh as diterima_oleh',
			'app_uang_keluar.detail_tas as detail_tas',
			'app_uang_keluar.keterangan as keterangan',
			'app_uang_keluar.user_input as user_input',
			'app_uang_keluar.input_time as input_time',
			'app_uang_keluar.user_update as user_update',
			'app_uang_keluar.update_time as update_time',
			'c.id as c_id',
			'c.bank_id as bank_id',
			'c.kategori_cabang_id as kategori_cabang_id',
			'c.nama_cabang as nama_cabang',
			'c.alamat as alamat',
			'c.deskripsi as deskripsi',
			'c.sentra_kas_id as c_sentra_kas_id',
			'c.user_input as c_user_input',
			'c.input_time as c_input_time',
			'c.user_update as c_user_update',
			'c.update_time as c_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as s_alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as opt_status',
			'userinput.picture as picture',
			'userupdate.id as userupdate_id',
			'userupdate.nmuser as userupdate_nmuser',
			'userupdate.passuser as userupdate_passuser',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',
			'userupdate.tanda_tangan as userupdate_tanda_tangan',
			'userupdate.opt_level as userupdate_opt_level',
			'userupdate.opt_status as userupdate_opt_status',
			'userupdate.picture as userupdate_picture',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as b_deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
		
		);
		$this->db->select($afield);
		$this->datatables->join('(select uang_keluar_id,sum(jumlah) as jumlah,sum(jumlah_proses) as jumlah_proses,sum(selisih_kurang) as selisih_kurang,sum(selisih_lebih) as selisih_lebih,sum(jumlah_belum_diproses) as jumlah_belum_proses  from proses_list_view group by uang_keluar_id) d','d.uang_keluar_id=app_uang_keluar.id','LEFT');
		$this->db->join('app_cabang_cpc c','c.id=app_uang_keluar.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_uang_keluar.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->db->where('app_uang_keluar.id', $id);
		$this->db->order_by('app_uang_keluar.id', 'ASC');
		return $this->db->get('app_uang_keluar')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_keluar.id <>',$id);

		$q = $this->db->get_where('app_uang_keluar', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_keluar', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		//Mencegah proses jika sudah ada data yang di proses
		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->where('app_uang_keluar_detail.uang_keluar_id',$id);
		$cek=$this->db->get('app_uang_keluar_detail')->row();
		if($cek->jumlah>0){
			return false;
		}

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_keluar.id', $id);
		$this->db->update('app_uang_keluar', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){

		//Mencegah proses jika sudah ada data yang di proses

		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->where_in('app_uang_keluar_detail.uang_keluar_id',$data);
		$cek=$this->db->get('app_uang_keluar_detail')->row();
		if($cek->jumlah>0){
			return false;
		}

		/* transaction rollback */
		
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_keluar.id',$data);	
	
			$this->db->delete('app_uang_keluar');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_keluar', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 	}

	 //Untuk Berita Acara
	
	function get_summary($id){
		$this->db->select("
		SUM(CASE WHEN jenis_uang_id = 1 then jumlah ELSE 0 END) as total_kertas,
		SUM(CASE WHEN jenis_uang_id = 2 then jumlah ELSE 0 END) as total_logam,
		SUM(jumlah) as total
		");
		$this->db->where('uang_keluar_id',$id);
		$this->db->where('kategori_selisih_id','0');
		$this->db->group_by('uang_keluar_id');
		if($data=$this->db->get('app_uang_keluar_detail')){
			return $data->row();
		}
		return false;
	}

	public function get_pecahan($id){
		$afield = array(
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',			
			'p.pecahan as pecahan',
			'app_uang_keluar_detail.jumlah as jumlah',		
		);
		$this->db->select($afield);		
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 				
		$this->db->where('app_uang_keluar_detail.uang_keluar_id',$id);
		$this->db->where('app_uang_keluar_detail.kategori_selisih_id','0');
		return $this->db->get('app_uang_keluar_detail')->result();
    }

	public function get_selisih($id){
		$afield = array(
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',			
			'p.pecahan as pecahan',
			'app_uang_keluar_detail.kategori_selisih_id as kategori_selisih_id',
			'app_uang_keluar_detail.jumlah as jumlah',		
		);
		$this->db->select($afield);		
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 				
		$this->db->where('app_uang_keluar_detail.uang_keluar_id',$id);
		$this->db->where('app_uang_keluar_detail.kategori_selisih_id<>0');
		return $this->db->get('app_uang_keluar_detail')->result();
    }

    //End Untuk Berita Acara

	//Untuk Dashboard 

	public function get_dashboard($bank_id,$tanggal){
		$q="SELECT 
		app_jenis_uang.jenis_uang as jenis_uang,
		app_pecahan.pecahan as pecahan,
		app_emisi.emisi as emisi,
		SUM(CASE WHEN app_kondisi.kondisi='GRESS BI' then app_journal_proses.jumlah ELSE 0 END) as 'GRESS_BI',
		SUM(CASE WHEN app_kondisi.kondisi='RECYCLE BI' then app_journal_proses.jumlah ELSE 0 END) as 'RECYCLE_BI',
		SUM(CASE WHEN app_kondisi.kondisi='DROPSHOT' then app_journal_proses.jumlah ELSE 0 END) as 'DROPSHOT',
		SUM(CASE WHEN app_kondisi.kondisi='ULE' then app_journal_proses.jumlah ELSE 0 END) as 'ULE',
		SUM(CASE WHEN app_kondisi.kondisi='UTLE' then app_journal_proses.jumlah ELSE 0 END) as 'UTLE',
		SUM(CASE WHEN app_kondisi.kondisi='MINOR' then app_journal_proses.jumlah ELSE 0 END) as 'MINOR',
		SUM(CASE WHEN app_kondisi.kondisi='MAYOR' then app_journal_proses.jumlah ELSE 0 END) as 'MAYOR',
		0 as jumlah_campur,
		app_uang_keluar_detail.jumlah_belum_diproses as jumlah_belum
		FROM app_uang_keluar
		INNER JOIN  proses_list_view AS app_uang_keluar_detail ON app_uang_keluar.id=app_uang_keluar_detail.uang_keluar_id
		INNER JOIN  app_cabang_cpc ON app_cabang_cpc.id=app_uang_keluar.cabang_id
		LEFT JOIN  app_journal_proses ON app_uang_keluar_detail.id=app_journal_proses.uang_keluar_detail_id
		LEFT JOIN  app_pecahan ON app_pecahan.id=app_uang_keluar_detail.pecahan_id
		LEFT JOIN  app_jenis_uang ON app_jenis_uang.id=app_uang_keluar_detail.jenis_uang_id
		LEFT JOIN  app_emisi ON app_emisi.id=app_journal_proses.emisi_id
		LEFT JOIN  app_kondisi ON app_kondisi.id=app_journal_proses.kondisi_id
		LEFT JOIN (select
                   app_journal_proses.uang_keluar_detail_id,
                   app_uang_keluar_detail.pecahan_id,
                   sum(COALESCE(app_journal_proses.jumlah, 0)) as jumlah_proses 
                   from app_uang_keluar_detail  
                   left join app_journal_proses ON app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id
                   group by app_uang_keluar_detail.pecahan_id,app_journal_proses.uang_keluar_detail_id) pr ON pr.uang_keluar_detail_id=app_uang_keluar_detail.id AND pr.pecahan_id=app_uang_keluar_detail.pecahan_id
		WHERE app_cabang_cpc.bank_id=$bank_id
		AND app_uang_keluar.tanggal_penerimaan='$tanggal'
		GROUP BY app_jenis_uang.jenis_uang,app_pecahan.pecahan,app_emisi.emisi  
		ORDER BY app_jenis_uang.jenis_uang ASC,app_pecahan.pecahan  DESC;";	
		return $this->db->query($q)->result();
		
	}
   


};
