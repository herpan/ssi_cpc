<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Journal_cpc_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_journal_cpc.id as id,
			app_journal_cpc.bank_id as bank_id,
			app_journal_cpc.sentra_kas_id as sentra_kas_id,
			app_journal_cpc.jenis_uang_id as jenis_uang_id,
			app_journal_cpc.pecahan_id as pecahan_id,
			app_journal_cpc.emisi_id as emisi_id,
			app_journal_cpc.kondisi_id as kondisi_id,
			app_journal_cpc.jumlah as jumlah,
			app_journal_cpc.status as status,
			app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan,
			app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan,
			app_journal_cpc.keterangan as keterangan,
			app_journal_cpc.user_input as user_input,
			app_journal_cpc.input_time as input_time,
			app_journal_cpc.user_update as user_update,
			app_journal_cpc.update_time as update_time,
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
			s.id as s_id,
			s.kode_sentra as kode_sentra,
			s.sentra as sentra,
			s.nama_sentra as nama_sentra,
			s.alamat as alamat,
			s.user_input as s_user_input,
			s.input_time as s_input_time,
			s.user_update as s_user_update,
			s.update_time as s_update_time,
			j.id as j_id,
			j.jenis_uang as jenis_uang,
			j.keterangan as j_keterangan,
			j.user_input as j_user_input,
			j.input_time as j_input_time,
			j.user_update as j_user_update,
			j.update_time as j_update_time,
			p.id as p_id,
			p.pecahan as pecahan,
			p.keterangan as p_keterangan,
			p.user_input as p_user_input,
			p.input_time as p_input_time,
			p.user_update as p_user_update,
			p.update_time as p_update_time,
			e.id as e_id,
			e.emisi as emisi,
			e.keterangan as e_keterangan,
			e.user_input as e_user_input,
			e.input_time as e_input_time,
			e.user_update as e_user_update,
			e.update_time as e_update_time,
			k.id as k_id,
			k.kategori_id as kategori_id,
			k.kondisi as kondisi,
			k.user_input as k_user_input,
			k.input_time as k_input_time,
			k.user_update as k_user_update,
			k.update_time as k_update_time,
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
			kk.id as kk_id,
			kk.nama_kategori as nama_kategori,
			kk.user_input as kk_user_input,
			kk.input_time as kk_input_time,
			kk.user_update as kk_user_update,
			kk.update_time as kk_update_time,
		');
		
		$this->datatables->from('app_journal_cpc');
	
		$this->datatables->join('app_bank b','b.id=app_journal_cpc.bank_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas s','s.id=app_journal_cpc.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
	
		$this->datatables->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
	
		$this->datatables->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

    public function get_all(){
		$afield = array(
			'app_journal_cpc.id as id',
			'app_journal_cpc.bank_id as bank_id',
			'app_journal_cpc.sentra_kas_id as sentra_kas_id',
			'app_journal_cpc.jenis_uang_id as jenis_uang_id',
			'app_journal_cpc.pecahan_id as pecahan_id',
			'app_journal_cpc.emisi_id as emisi_id',
			'app_journal_cpc.kondisi_id as kondisi_id',
			'app_journal_cpc.jumlah as jumlah',
			'app_journal_cpc.status as status',
			'app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan',
			'app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_cpc.keterangan as keterangan',
			'app_journal_cpc.user_input as user_input',
			'app_journal_cpc.input_time as input_time',
			'app_journal_cpc.user_update as user_update',
			'app_journal_cpc.update_time as update_time',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
			'j.id as j_id',
			'j.jenis_uang as jenis_uang',
			'j.keterangan as j_keterangan',
			'j.user_input as j_user_input',
			'j.input_time as j_input_time',
			'j.user_update as j_user_update',
			'j.update_time as j_update_time',
			'p.id as p_id',
			'p.pecahan as pecahan',
			'p.keterangan as p_keterangan',
			'p.user_input as p_user_input',
			'p.input_time as p_input_time',
			'p.user_update as p_user_update',
			'p.update_time as p_update_time',
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
			'k.kondisi as kondisi',
			'k.user_input as k_user_input',
			'k.input_time as k_input_time',
			'k.user_update as k_user_update',
			'k.update_time as k_update_time',
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
			'kk.id as kk_id',
			'kk.nama_kategori as nama_kategori',
			'kk.user_input as kk_user_input',
			'kk.input_time as kk_input_time',
			'kk.user_update as kk_user_update',
			'kk.update_time as kk_update_time',
		
		);
		$this->db->select($afield);
		$this->db->join('app_bank b','b.id=app_journal_cpc.bank_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_journal_cpc.sentra_kas_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
		$this->db->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 

		$this->db->order_by('app_journal_cpc.id', 'ASC');
		return $this->db->get('app_journal_cpc')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_journal_cpc.id as id',
			'app_journal_cpc.bank_id as bank_id',
			'app_journal_cpc.sentra_kas_id as sentra_kas_id',
			'app_journal_cpc.jenis_uang_id as jenis_uang_id',
			'app_journal_cpc.pecahan_id as pecahan_id',
			'app_journal_cpc.emisi_id as emisi_id',
			'app_journal_cpc.kondisi_id as kondisi_id',
			'app_journal_cpc.jumlah as jumlah',
			'app_journal_cpc.status as status',
			'app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan',
			'app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_cpc.keterangan as keterangan',
			'app_journal_cpc.user_input as user_input',
			'app_journal_cpc.input_time as input_time',
			'app_journal_cpc.user_update as user_update',
			'app_journal_cpc.update_time as update_time',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
			'j.id as j_id',
			'j.jenis_uang as jenis_uang',
			'j.keterangan as j_keterangan',
			'j.user_input as j_user_input',
			'j.input_time as j_input_time',
			'j.user_update as j_user_update',
			'j.update_time as j_update_time',
			'p.id as p_id',
			'p.pecahan as pecahan',
			'p.keterangan as p_keterangan',
			'p.user_input as p_user_input',
			'p.input_time as p_input_time',
			'p.user_update as p_user_update',
			'p.update_time as p_update_time',
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
			'k.kondisi as kondisi',
			'k.user_input as k_user_input',
			'k.input_time as k_input_time',
			'k.user_update as k_user_update',
			'k.update_time as k_update_time',
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
			'kk.id as kk_id',
			'kk.nama_kategori as nama_kategori',
			'kk.user_input as kk_user_input',
			'kk.input_time as kk_input_time',
			'kk.user_update as kk_user_update',
			'kk.update_time as kk_update_time',
		
		);
		$this->db->select($afield);
		$this->db->join('app_bank b','b.id=app_journal_cpc.bank_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_journal_cpc.sentra_kas_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
		$this->db->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 

		$this->db->where('app_journal_cpc.id', $id);
		$this->db->order_by('app_journal_cpc.id', 'ASC');
		return $this->db->get('app_journal_cpc')->row();
   }

   public function get_dashboard(){
	$q="SELECT
	`j`.`jenis_uang` as `jenis_uang`,
	`p`.`pecahan` as `pecahan`,
	`e`.`emisi` as `emisi`,
	SUM(CASE WHEN `k`.`kondisi`='GRESS BI' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `GRESS_BI`,
	SUM(CASE WHEN `k`.`kondisi`='RECYCLE BI' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `RECYCLE_BI`,
	SUM(CASE WHEN `k`.`kondisi`='DROPSHOT' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `DROPSHOT`,
	SUM(CASE WHEN `k`.`kondisi`='ULE' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `ULE`,
	SUM(CASE WHEN `k`.`kondisi`='UTLE' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `UTLE`,
	SUM(CASE WHEN `k`.`kondisi`='MINOR' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `MINOR`,
	SUM(CASE WHEN `k`.`kondisi`='MAYOR' then `app_journal_cpc`.`jumlah` ELSE 0 END) as `MAYOR`,
	`C`.`jumlah_campur` as `jumlah_campur`,
	`B`.`jumlah_belum` as `jumlah_belum`
	FROM `app_journal_cpc` 
	LEFT JOIN `app_sentra_kas` `s` ON `s`.`id`=`app_journal_cpc`.`sentra_kas_id` 
	LEFT JOIN `app_jenis_uang` `j` ON `j`.`id`=`app_journal_cpc`.`jenis_uang_id` 
	LEFT JOIN `app_pecahan` `p` ON `p`.`id`=`app_journal_cpc`.`pecahan_id` 
	LEFT JOIN `app_emisi` `e` ON `e`.`id`=`app_journal_cpc`.`emisi_id` 
	LEFT JOIN `app_kondisi` `k` ON `k`.`id`=`app_journal_cpc`.`kondisi_id` 
	LEFT JOIN `app_kategori_kondisi` `kat` ON `k`.`kategori_id`=`kat`.`id` 
	LEFT JOIN `sys_user` `userinput` ON `userinput`.`id`=`app_journal_cpc`.`user_input` 
	LEFT JOIN `sys_user` `userupdate` ON `userupdate`.`id`=`app_journal_cpc`.`user_update` 
	LEFT JOIN `app_bank` `b` ON `b`.`id`=`app_journal_cpc`.`bank_id`
	
	LEFT JOIN (SELECT
	`j`.`jenis_uang` as `jenis_uang`,
	`p`.`pecahan` as `pecahan`,		
	`app_journal_campur_cpc`.`jumlah` as `jumlah_campur`
	FROM `app_journal_campur_cpc` 
	LEFT JOIN `app_sentra_kas` `s` ON `s`.`id`=`app_journal_campur_cpc`.`sentra_kas_id` 
	LEFT JOIN `app_jenis_uang` `j` ON `j`.`id`=`app_journal_campur_cpc`.`jenis_uang_id` 
	LEFT JOIN `app_pecahan` `p` ON `p`.`id`=`app_journal_campur_cpc`.`pecahan_id` 
	LEFT JOIN `app_bank` `b` ON `b`.`id`=`app_journal_campur_cpc`.`bank_id` 
	GROUP BY `p`.`pecahan`
	ORDER BY `j`.`jenis_uang`,`p`.`pecahan` ASC) `C` on `C`.`pecahan`=`p`.`pecahan` and `C`.`jenis_uang`=`j`.`jenis_uang`

	LEFT JOIN (SELECT
	`j`.`jenis_uang` as `jenis_uang`,
	`p`.`pecahan` as `pecahan`,		
	`app_journal_belum_proses_cpc`.`jumlah` as `jumlah_belum`
	FROM `app_journal_belum_proses_cpc` 
	LEFT JOIN `app_sentra_kas` `s` ON `s`.`id`=`app_journal_belum_proses_cpc`.`sentra_kas_id` 
	LEFT JOIN `app_jenis_uang` `j` ON `j`.`id`=`app_journal_belum_proses_cpc`.`jenis_uang_id` 
	LEFT JOIN `app_pecahan` `p` ON `p`.`id`=`app_journal_belum_proses_cpc`.`pecahan_id` 
	LEFT JOIN `app_bank` `b` ON `b`.`id`=`app_journal_belum_proses_cpc`.`bank_id` 
	GROUP BY `p`.`pecahan`
	ORDER BY `j`.`jenis_uang`,`p`.`pecahan` ASC) `B` on `B`.pecahan=`p`.`pecahan` and `B`.`jenis_uang`=`j`.`jenis_uang`
	
	GROUP BY `p`.`pecahan`,`e`.`emisi`
	ORDER BY `j`.`jenis_uang`,`p`.`pecahan` ASC";
	
	return $this->db->query($q)->result();
}


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_journal_cpc.id <>',$id);

		$q = $this->db->get_where('app_journal_cpc', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_journal_cpc', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_journal_cpc.id', $id);
		$this->db->update('app_journal_cpc', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_journal_cpc.id',$data);	
	
			$this->db->delete('app_journal_cpc');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_journal_cpc', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 	}


};
