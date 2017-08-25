<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function get_all()
    {
        $this->db->order_by('id_lop', 'DESC');
        return $this->db->get('tb_induk')->result();
    }

	public function cek_role($nik)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'");
        return $query->row()->fungsi;
	}

	public function cek_nama($nik)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'");
        return $query->row()->nama;
	}

	public function cek_witel($nik)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'");
        return $query->row()->witel;
	}

	public function login()
	{
		$nik 	  = $this->input->post('username');
		$password = $this->input->post('password');
		$query	  = $this->db->where('nik', $nik)
							 ->where('password', $password)
							 ->get('tb_user');

		if($query->num_rows()>0)
		{
			$role 	  = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'")->row()->fungsi;
			$nama 	  = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'")->row()->nama;
			$witel    = $this->db->query("SELECT * FROM tb_user WHERE nik ='$nik'")->row()->witel;
			$data_session	= array('nik'		=> $nik,
									'nama'		=> $nama,
									'status'	=> $role,
									'witel'		=> $witel,
									'logged_in'	=> TRUE);

			$this->session->set_userdata($data_session);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function count_history_input()
	{
		$query = $this->db->query("SELECT COUNT(aksi) AS PO FROM `tb_history` WHERE aksi='INPUT DATA'");
		return $query->row()->PO;
	}

	public function count_history_delete()
	{
		$query = $this->db->query("SELECT COUNT(aksi) AS PO FROM `tb_history` WHERE aksi='DELETE DATA'");
		return $query->row()->PO;
	}

	public function count_history_edit()
	{
		$query = $this->db->query("SELECT COUNT(aksi) AS PO FROM `tb_history` WHERE aksi='EDIT DATA'");
		return $query->row()->PO;
	}

	public function count_proses_verif($witel)
	{
		$query = $this->db->query("SELECT COUNT(id_history) AS PO FROM `tb_history` A
																	LEFT JOIN tb_induk_verif  B ON A.id_lop = B.id_lop
																	WHERE B.id_witel = '$witel'");
		return $query->row()->PO;
	}

	public function count_nopo_status($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='NOK' AND status_pekerjaan='OGP' OR PO='NOK' AND status_pekerjaan='Persiapan' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_nopo_blm($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='NOK' AND status_pekerjaan='Selesai' AND ba_rekon='NOK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_nopo_sudah($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='NOK' AND status_pekerjaan='Selesai' AND ba_rekon='OK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_po_status($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='OK' AND status_pekerjaan='OGP' OR PO='OK' AND status_pekerjaan='Persiapan' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_po_blm($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='OK' AND status_pekerjaan='Selesai' AND ba_rekon='NOK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_po_bast($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='OK' AND status_pekerjaan='Selesai' AND ba_rekon='OK' AND bast='NOK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_po_inv($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='OK' AND status_pekerjaan='Selesai' AND ba_rekon='OK' AND bast='OK' AND inv='NOK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_po_done($witel)
	{
		$query = $this->db->query("SELECT COUNT(po) AS PO FROM `tb_induk` WHERE PO='OK' AND status_pekerjaan='Selesai' AND ba_rekon='OK' AND inv='OK' AND bast='OK' AND id_witel = '$witel' AND status_data = 'ok'");
		return $query->row()->PO;
	}

	public function count_file_rekon()
	{
		$query = $this->db->query("SELECT count(`nama_foto`) AS jumlah FROM `tb_foto` WHERE tipe_data='BA_REKON'");
		return $query->row()->jumlah;
	}

	public function count_file_bast()
	{
		$query = $this->db->query("SELECT count(`nama_foto`) AS jumlah FROM `tb_foto` WHERE tipe_data='BAST'");
		return $query->row()->jumlah;
	}

	public function count_file_po()
	{
		$query = $this->db->query("SELECT count(`nama_foto`) AS jumlah FROM `tb_foto` WHERE tipe_data='PO'");
		return $query->row()->jumlah;
	}

	public function list_teritori()
	{
		$query = $this->db->query('SELECT * FROM tb_teritori');
    	return $query->result();
	}

	public function list_fungsi()
	{
		$query = $this->db->query('SELECT fungsi FROM tb_user');
    	return $query->result();
	}

	public function list_user_witel()
	{
		$query = $this->db->query('SELECT witel,nama_witel FROM tb_user A LEFT JOIN tb_witel B ON A.witel = B.id_witel');
    	return $query->result();
	}

	public function list_witel()
	{
		$query = $this->db->query('SELECT * FROM tb_witel');
    	return $query->result();
	}

	public function list_pekerjaan()
	{
		$query = $this->db->query('SELECT * FROM tb_pekerjaan');
    	return $query->result();
	}

	public function list_program()
	{
		$query = $this->db->query('SELECT * FROM tb_program');
    	return $query->result();
	}

	public function list_status()
	{
		$query = $this->db->query('SELECT * FROM tb_status');
    	return $query->result();
	}

	public function list_gmpm()
	{
		$query = $this->db->query('SELECT * FROM tb_gmpm');
    	return $query->result();
	}

	public function input()
	{
		$id = $this->uri->segment(3);
		$data 	= array(
						'id_lop'			=> $id,
						'teritori'			=> $this->input->post('teritori'),
						'id_witel'			=> $this->input->post('witel'),
						'id_project'		=> $this->input->post('id_project'),
						'pekerjaan'			=> $this->input->post('pekerjaan'),
						'jenis_pekerjaan'	=> $this->input->post('jenis_pekerjaan'),
						'id_program'		=> $this->input->post('program'),
						'id_deployer'		=> $this->input->post('id_deployer'),
						'nilai_rekon'		=> $this->input->post('nilai_rekon'),
						'bulan_tahun'		=> $this->input->post('bulan_tahun'),
						'status_pekerjaan'	=> $this->input->post('status_pekerjaan'),
						'vess'				=> $this->input->post('input_vestyna'),
						'no_vestyna'		=> $this->input->post('no_vestyna'),
						'pr'				=> $this->input->post('pr'),
						'po'				=> $this->input->post('po'),
						'no_po'				=> $this->input->post('no_po'),
						'ba_rekon'			=> $this->input->post('ba_rekon'),
						'bast'				=> $this->input->post('bast'),
						'inv'				=> $this->input->post('inv'),
						'no_inv'			=> $this->input->post('no_inv'),
						'bulan_bast'		=> $this->input->post('bulan_bast'),
						'id_status'			=> $this->input->post('status'),
						'anggaran'			=> $this->input->post('anggaran'),
						'gm'				=> $this->input->post('gmpm'),
						'baut'				=> $this->input->post('baut'),
						'comment'			=> $this->input->post('comment'),
						);
		$this->db->insert('tb_induk', $data);
		$this->db->where('id_lop', $id)->delete('tb_history');

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function input_dummy($nik,$ba_rekon)
	{
		$query = $this->db->query("select max(max) as max_code FROM tb_incr");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 3, 4);

        $max_lop = $max_fix + 1;

        $lop = "LOP".sprintf("%04s", $max_lop);

		$data 	= array(
						'id_lop'			=> $lop,
						'teritori'			=> $this->input->post('teritori'),
						'id_witel'			=> $this->input->post('witel'),
						'id_project'		=> $this->input->post('id_project'),
						'pekerjaan'			=> $this->input->post('pekerjaan'),
						'jenis_pekerjaan'	=> $this->input->post('jenis_pekerjaan'),
						'id_program'		=> $this->input->post('program'),
						'id_deployer'		=> $this->input->post('id_deployer'),
						'nilai_rekon'		=> $this->input->post('nilai_rekon'),
						'bulan_tahun'		=> $this->input->post('bulan_tahun'),
						'status_pekerjaan'	=> $this->input->post('status_pekerjaan'),
						'vess'				=> $this->input->post('input_vestyna'),
						'no_vestyna'		=> $this->input->post('no_vestyna'),
						'pr'				=> $this->input->post('pr'),
						'po'				=> $this->input->post('po'),
						'no_po'				=> $this->input->post('no_po'),
						'ba_rekon'			=> $this->input->post('ba_rekon'),
						'bast'				=> $this->input->post('bast'),
						'inv'				=> $this->input->post('inv'),
						'no_inv'			=> $this->input->post('no_inv'),
						'bulan_bast'		=> $this->input->post('bulan_bast'),
						'id_status'			=> $this->input->post('status'),
						'anggaran'			=> $this->input->post('anggaran'),
						'gm'				=> $this->input->post('gmpm'),
						'baut'				=> $this->input->post('baut'),
						'comment'			=> $this->input->post('comment'),
						'oleh'				=> $this->session->userdata('nama')
						);
		$data1	= array(
						'id_lop'			=> $lop,
						'nik'				=> $nik,
						'aksi'				=> 'INPUT DATA'
						);
		$this->db->insert('tb_induk_verif', $data);
		$this->db->insert('tb_history', $data1);
		$this->db->insert('tb_incr', array('max' => $lop));
		$this->db->insert('tb_foto', $ba_rekon);

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function input_user()
	{
		$data 	= array(
						'nik'			=> $this->input->post('nik'),
						'nama'			=> $this->input->post('nama'),
						'fungsi'		=> $this->input->post('fungsi'),
						'witel'			=> $this->input->post('witel'),
						'password'		=> $this->input->post('password'),
						);
		$this->db->insert('tb_user', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function cek_induk()
	{
	$query = $this->db->query('SELECT * FROM tb_induk A 
										LEFT JOIN tb_teritori B 	ON B.id_teritori = A.teritori
                                        LEFT JOIN tb_witel C 		ON C.id_witel = A.id_witel
                                        LEFT JOIN tb_pekerjaan D 	ON D.id_pekerjaan = A.jenis_pekerjaan
                                        LEFT JOIN tb_program E		ON E.id_program = A.id_program
                                        LEFT JOIN tb_status F		ON F.id_status = A.id_status
                                        LEFT JOIN tb_gmpm G			ON G.id_gmpm = A.gm');
    return $query->result();
	}

	public function cek_user()
	{
	$query = $this->db->query('SELECT * FROM tb_user A 
										LEFT JOIN tb_witel B 		ON B.id_witel = A.witel');
    return $query->result();
	}

	public function cek_user_input($where,$witel)
	{
	$query = $this->db->query("SELECT * FROM tb_induk A 
										LEFT JOIN tb_teritori B 	ON B.id_teritori = A.teritori
                                        LEFT JOIN tb_witel C 		ON C.id_witel = A.id_witel
                                        LEFT JOIN tb_pekerjaan D 	ON D.id_pekerjaan = A.jenis_pekerjaan
                                        LEFT JOIN tb_program E		ON E.id_program = A.id_program
                                        LEFT JOIN tb_status F		ON F.id_status = A.id_status
                                        LEFT JOIN tb_gmpm G			ON G.id_gmpm = A.gm
                                        WHERE $where AND A.id_witel = '$witel' AND A.status_data = 'ok'");
    return $query->result();
	}

	public function cek_file($where,$witel)
	{
	$query = $this->db->query("SELECT *,COUNT(A.nama_foto) AS jumlah FROM tb_foto A 
															LEFT JOIN tb_induk B 	ON B.id_lop = A.id
															WHERE tipe_data='$where' AND B.id_witel = '$witel' 
															GROUP BY A.id,A.nama_foto ORDER BY A.id");
    return $query->result();
	}

	public function cek_user_guest($where)
	{
	$query = $this->db->query("SELECT * FROM tb_induk A 
										LEFT JOIN tb_teritori B 	ON B.id_teritori = A.teritori
                                        LEFT JOIN tb_witel C 		ON C.id_witel = A.id_witel
                                        LEFT JOIN tb_pekerjaan D 	ON D.id_pekerjaan = A.jenis_pekerjaan
                                        LEFT JOIN tb_program E		ON E.id_program = A.id_program
                                        LEFT JOIN tb_status F		ON F.id_status = A.id_status
                                        LEFT JOIN tb_gmpm G			ON G.id_gmpm = A.gm
                                        WHERE A.status_data = 'ok' $where");
    return $query->result();
	}

	public function cek_proses_verif($witel)
	{
	$query = $this->db->query("SELECT * FROM tb_history A 
										LEFT JOIN tb_induk_verif B 	ON A.id_lop = B.id_lop
										LEFT JOIN tb_user C 		ON A.nik 	= C.nik
                                        WHERE B.id_witel = '$witel'");
    return $query->result();
	}

	public function cek_verif_input()
	{
	$query = $this->db->query("SELECT * FROM tb_history A 
										LEFT JOIN tb_user B 		ON B.nik = A.nik 
										LEFT JOIN tb_induk_verif C 		ON C.id_lop = A.id_lop
										WHERE A.aksi = 'INPUT DATA'");
    return $query->result();
	}

	public function cek_verif_delete()
	{
	$query = $this->db->query("SELECT * FROM tb_history A 
										LEFT JOIN tb_user B 		ON B.nik = A.nik 
										LEFT JOIN tb_induk C 		ON C.id_lop = A.id_lop
										WHERE aksi = 'DELETE DATA'");
    return $query->result();
	}

	public function cek_verif_edit()
	{
	$query = $this->db->query("SELECT * FROM tb_history A 
										LEFT JOIN tb_user B 		ON B.nik = A.nik 
										LEFT JOIN tb_induk C 		ON C.id_lop = A.id_lop
										WHERE aksi = 'EDIT DATA'");
    return $query->result();
	}

	public function hapus_user($id)
	{
		$this->db->where('nik', $id)->delete('tb_user');
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function hapus_induk($id,$nik)
	{
		$this->db->where('id_lop', $id)->delete('tb_induk');
		$this->db->where('id_lop', $id)->delete('tb_history');
		$this->db->where('id_lop', $id)->where('aksi', 'DELETE DATA')->delete('tb_history');
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function hapus_verif($id, $nik)
	{
		$data	= array(
						'id_lop'			=> $id,
						'nik'				=> $nik,
						'aksi'				=> 'DELETE DATA'
						);
		$this->db->insert('tb_history', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function detil_induk($id)
	{
		$query = $this->db->query("SELECT * FROM tb_induk A 
										LEFT JOIN tb_teritori B 	ON B.id_teritori = A.teritori
                                        LEFT JOIN tb_witel C 		ON C.id_witel = A.id_witel
                                        LEFT JOIN tb_pekerjaan D 	ON D.id_pekerjaan = A.jenis_pekerjaan
                                        LEFT JOIN tb_program E		ON E.id_program = A.id_program
                                        LEFT JOIN tb_status F		ON F.id_status = A.id_status
                                        LEFT JOIN tb_gmpm G			ON G.id_gmpm = A.gm
                                   	WHERE id_lop = '$id' ");
    	return $query->row();
	}

	public function detil_induk_verif($id)
	{
		$query = $this->db->query("SELECT * FROM tb_induk_verif A 
										LEFT JOIN tb_teritori B 	ON B.id_teritori = A.teritori
                                        LEFT JOIN tb_witel C 		ON C.id_witel = A.id_witel
                                        LEFT JOIN tb_pekerjaan D 	ON D.id_pekerjaan = A.jenis_pekerjaan
                                        LEFT JOIN tb_program E		ON E.id_program = A.id_program
                                        LEFT JOIN tb_status F		ON F.id_status = A.id_status
                                        LEFT JOIN tb_gmpm G			ON G.id_gmpm = A.gm
                                   	WHERE id_lop = '$id' ");
    	return $query->row();
	}

	public function detil_user($id)
	{
		$query = $this->db->query("SELECT * FROM tb_user A 
									LEFT JOIN tb_witel B 		ON B.id_witel = A.witel
                                   	WHERE A.nik = '$id' ");
    	return $query->row();
	}

	public function edit_induk($max_id)
	{
		$data 	= array(
						'id_lop'			=> $max_id,
						'teritori'			=> $this->input->post('teritori'),
						'id_witel'			=> $this->input->post('witel'),
						'id_project'		=> $this->input->post('id_project'),
						'pekerjaan'			=> $this->input->post('pekerjaan'),
						'jenis_pekerjaan'	=> $this->input->post('jenis_pekerjaan'),
						'id_program'		=> $this->input->post('program'),
						'id_deployer'		=> $this->input->post('id_deployer'),
						'nilai_rekon'		=> $this->input->post('nilai_rekon'),
						'bulan_tahun'		=> $this->input->post('bulan_tahun'),
						'status_pekerjaan'	=> $this->input->post('status_pekerjaan'),
						'vess'				=> $this->input->post('input_vestyna'),
						'no_vestyna'		=> $this->input->post('no_vestyna'),
						'pr'				=> $this->input->post('pr'),
						'po'				=> $this->input->post('po'),
						'no_po'				=> $this->input->post('no_po'),
						'ba_rekon'			=> $this->input->post('ba_rekon'),
						'bast'				=> $this->input->post('bast'),
						'inv'				=> $this->input->post('inv'),
						'no_inv'			=> $this->input->post('no_inv'),
						'bulan_bast'		=> $this->input->post('bulan_bast'),
						'id_status'			=> $this->input->post('status'),
						'anggaran'			=> $this->input->post('anggaran'),
						'gm'				=> $this->input->post('gmpm'),
						'baut'				=> $this->input->post('baut'),
						'comment'			=> $this->input->post('comment'),
						'status_data'		=> 'ok',
						);

		$this->db->where('id_lop', $max_id)->update('tb_induk',$data);
		$this->db->where('id_lop', $max_id)->delete('tb_history');
		$this->db->where('id_lop', $max_id)->delete('tb_induk_verif');
   		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	} 

	public function edit_user($id)
	{
		$data 	= array(
						'nik'			=> $id,
						'nama'			=> $this->input->post('nama'),
						'fungsi'		=> $this->input->post('fungsi'),
						'witel'			=> $this->input->post('witel'),
						'password'		=> $this->input->post('password'),
						);

		$this->db->where('nik', $id)->update('tb_user',$data);
   		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function edit_profile($id)
	{
		$data 	= array(
						'nik'			=> $id,
						'password'		=> $this->input->post('password'),
						);

		$this->db->where('nik', $id)->update('tb_user',$data);
   		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function edit_induk_verif($max_id,$nik)
	{
		$data 	= array(
						'id_lop'			=> $max_id,
						'teritori'			=> $this->input->post('teritori'),
						'id_witel'			=> $this->input->post('witel'),
						'id_project'		=> $this->input->post('id_project'),
						'pekerjaan'			=> $this->input->post('pekerjaan'),
						'jenis_pekerjaan'	=> $this->input->post('jenis_pekerjaan'),
						'id_program'		=> $this->input->post('program'),
						'id_deployer'		=> $this->input->post('id_deployer'),
						'nilai_rekon'		=> $this->input->post('nilai_rekon'),
						'bulan_tahun'		=> $this->input->post('bulan_tahun'),
						'status_pekerjaan'	=> $this->input->post('status_pekerjaan'),
						'vess'				=> $this->input->post('input_vestyna'),
						'no_vestyna'		=> $this->input->post('no_vestyna'),
						'pr'				=> $this->input->post('pr'),
						'po'				=> $this->input->post('po'),
						'no_po'				=> $this->input->post('no_po'),
						'ba_rekon'			=> $this->input->post('ba_rekon'),
						'bast'				=> $this->input->post('bast'),
						'inv'				=> $this->input->post('inv'),
						'no_inv'			=> $this->input->post('no_inv'),
						'bulan_bast'		=> $this->input->post('bulan_bast'),
						'id_status'			=> $this->input->post('status'),
						'anggaran'			=> $this->input->post('anggaran'),
						'gm'				=> $this->input->post('gmpm'),
						'baut'				=> $this->input->post('baut'),
						'comment'			=> $this->input->post('comment'),
						'status_data'		=> 'verifikasi',
						);

		$data1	= array(
						'id_lop'			=> $max_id,
						'nik'				=> $nik,
						'aksi'				=> 'EDIT DATA'
						);
		$this->db->insert('tb_induk_veriF', $data);
		$this->db->where('id_lop', $max_id)->update('tb_induk',array(
																	'status_data'			=> 'verifikasi',
																	));
		$this->db->insert('tb_history', $data1);

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}  
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */