<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == 'USER')
		{
			redirect(base_url('index.php/all_data/user'));
		}
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$data['main_view'] = 'alldata_view';
		$data['induk'] = $this->admin_model->cek_induk();
		$this->load->view('template2', $data);
		}
	}

	public function user()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$data['main_view'] = 'alldata_user_view';
		$data['induk'] = $this->admin_model->cek_induk();
		$this->load->view('template2', $data);
		}
	}

	public function json()
	{
		$alert = "'Apakah anda yakin menghapus data ini ?'";

        $this->datatables->select('*');
        $this->datatables->select('tb_induk.id_lop AS idtok');
        $this->datatables->add_column('hapus', anchor('all_data/hapus/$1','Delete',array('class'=>'btn btn-danger btn', 'onclick'=>'return confirm('.$alert.')')),'idtok');
        $this->datatables->add_column('edit', anchor('all_data/edit/$1','Edit    ',array('class'=>'btn btn-info btn')),'idtok');
        $this->datatables->from('tb_induk');
        $this->datatables->join('tb_teritori', 'tb_teritori.id_teritori=tb_induk.teritori', 'INNER');
        $this->datatables->join('tb_witel', 'tb_witel.id_witel=tb_induk.id_witel', 'INNER');
        $this->datatables->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan=tb_induk.jenis_pekerjaan', 'INNER');
        $this->datatables->join('tb_program', 'tb_program.id_program=tb_induk.id_program', 'INNER');
        $this->datatables->join('tb_status', 'tb_status.id_status=tb_induk.id_status', 'INNER');
        $this->datatables->join('tb_gmpm', 'tb_gmpm.id_gmpm=tb_induk.gm', 'INNER');
        return print_r($this->datatables->generate());
    }

    public function json_user()
	{
		$alert = "'Apakah anda yakin menghapus data ini ?'";

        $this->datatables->select('*');
        $this->datatables->select('tb_induk.id_lop AS idtok');
        $this->datatables->add_column('hapus', anchor('user/hapus/$1','Delete',array('class'=>'btn btn-danger btn', 'onclick'=>'return confirm('.$alert.')')),'idtok');
        $this->datatables->add_column('edit', anchor('user/edit/$1','Edit    ',array('class'=>'btn btn-info btn')),'idtok');
        $this->datatables->from('tb_induk');
        $this->datatables->join('tb_teritori', 'tb_teritori.id_teritori=tb_induk.teritori', 'INNER');
        $this->datatables->join('tb_witel', 'tb_witel.id_witel=tb_induk.id_witel', 'INNER');
        $this->datatables->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan=tb_induk.jenis_pekerjaan', 'INNER');
        $this->datatables->join('tb_program', 'tb_program.id_program=tb_induk.id_program', 'INNER');
        $this->datatables->join('tb_status', 'tb_status.id_status=tb_induk.id_status', 'INNER');
        $this->datatables->join('tb_gmpm', 'tb_gmpm.id_gmpm=tb_induk.gm', 'INNER');
        $this->datatables->where('tb_induk.id_witel', $this->session->userdata('witel'));
        return print_r($this->datatables->generate());
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "all_data_lopita.xls";
        $judul = "LOPITA";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "ID LOP");
	xlsWriteLabel($tablehead, $kolomhead++, "Teritori");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Witel");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Project");
	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Program");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Deployer");
	xlsWriteLabel($tablehead, $kolomhead++, "Nilai Rekon");
	xlsWriteLabel($tablehead, $kolomhead++, "Bulan Tahun");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Vess");
	xlsWriteLabel($tablehead, $kolomhead++, "No Vestyna");
	xlsWriteLabel($tablehead, $kolomhead++, "Pr");
	xlsWriteLabel($tablehead, $kolomhead++, "Po");
	xlsWriteLabel($tablehead, $kolomhead++, "No Po");
	xlsWriteLabel($tablehead, $kolomhead++, "Ba Rekon");
	xlsWriteLabel($tablehead, $kolomhead++, "File");
	xlsWriteLabel($tablehead, $kolomhead++, "Bast");
	xlsWriteLabel($tablehead, $kolomhead++, "Inv");
	xlsWriteLabel($tablehead, $kolomhead++, "No Inv");
	xlsWriteLabel($tablehead, $kolomhead++, "Bulan Bast");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Anggaran");
	xlsWriteLabel($tablehead, $kolomhead++, "Gm");
	xlsWriteLabel($tablehead, $kolomhead++, "Baut");
	xlsWriteLabel($tablehead, $kolomhead++, "Comment");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Data");
	xlsWriteLabel($tablehead, $kolomhead++, "Oleh");

	foreach ($this->admin_model->cek_induk() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteLabel($tablebody, $kolombody++, $data->id_lop);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_teritori);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_witel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_project);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_program);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_deployer);
	    xlsWriteNumber($tablebody, $kolombody++, $data->nilai_rekon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bulan_tahun);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_pekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->vess);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_vestyna);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pr);
	    xlsWriteLabel($tablebody, $kolombody++, $data->po);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_po);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ba_rekon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bast);
	    xlsWriteLabel($tablebody, $kolombody++, $data->inv);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_inv);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bulan_bast);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->anggaran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_gmpm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->baut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->comment);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_data);
	    xlsWriteLabel($tablebody, $kolombody++, $data->oleh);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    	public function input()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		if($this->session->userdata('status') == 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$id = $this->uri->segment(3);
		$data['main_view']	= 'form_input_verif';
		$data['teritori'] = $this->admin_model->list_teritori();
		$data['witel'] = $this->admin_model->list_witel();
		$data['pekerjaan'] = $this->admin_model->list_pekerjaan();
		$data['program'] = $this->admin_model->list_program();
		$data['status'] = $this->admin_model->list_status();
		$data['gmpm'] = $this->admin_model->list_gmpm();
		$data['induk'] 		= $this->admin_model->detil_induk_verif($this->uri->segment(3));

		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');

        	$this->db->where('id', $id)->delete('tb_foto');
        	$this->db->insert('tb_foto',array('id'=>$id,'nama_foto'=>$nama,'token'=>$token));
        }
		if($this->input->post('submit'))
			{
				$this->form_validation->set_rules('teritori', 'Teritori', 'trim|required');
				$this->form_validation->set_rules('witel', 'Witel', 'trim|required');
				$this->form_validation->set_rules('id_project', 'ID Project', 'trim|required');
				$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('program', 'Program', 'trim|required');
				$this->form_validation->set_rules('nilai_rekon', 'Nilai Rekon', 'trim|required');
				$this->form_validation->set_rules('bulan_tahun', 'Bulan Tahun', 'trim|required');
				$this->form_validation->set_rules('status_pekerjaan', 'Status Pekerjaan', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
				$this->form_validation->set_rules('anggaran', 'Anggaran', 'trim|required');
				$this->form_validation->set_rules('gmpm', 'GM / PM', 'trim|required');
				$this->form_validation->set_rules('baut', 'BAUT', 'trim|required');
		
				if($this->form_validation->run() == TRUE)
				{
				if($this->admin_model->input() == TRUE)
				{
					$data['notif'] = 'Input Berhasil';
					redirect('all_data');
				}
				else
				{
					$data['notif'] = 'Input Gagal';
					redirect('all_data');					
				}
				}
			else
				{
					$data['notif'] = validation_errors();
					$this->load->view('template', $data);					
				}
			}
			else
			{
					$this->load->view('template2',$data);
			}
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		if($this->session->userdata('status') == 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$id = $this->uri->segment(3);
		if($this->admin_model->hapus_induk($id) == TRUE)
			{
				$this->session->set_flashdata('notif', 'Hapus data berhasil');
				redirect('all_data');
			}
			else
			{
				$this->session->set_flashdata('notif', 'Hapus data gagal');
				redirect('all_data');
			}
		}
	}

	public function edit()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		if($this->session->userdata('status') == 'USER')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$id = $this->uri->segment(3);
		$data['main_view']	= 'edit_data_view';
		$data['teritori'] = $this->admin_model->list_teritori();
		$data['witel'] = $this->admin_model->list_witel();
		$data['pekerjaan'] = $this->admin_model->list_pekerjaan();
		$data['program'] = $this->admin_model->list_program();
		$data['status'] = $this->admin_model->list_status();
		$data['gmpm'] = $this->admin_model->list_gmpm();
		$data['induk'] 		= $this->admin_model->detil_induk($this->uri->segment(3));

		$config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');

        	$this->db->where('id', $id)->delete('tb_foto');
        	$this->db->insert('tb_foto',array('id'=>$id,'nama_foto'=>$nama,'token'=>$token));
        }
		if($this->input->post('submit'))
			{
				if($this->admin_model->edit_induk($id) == TRUE)
				{
					$data['notif'] = 'Input Berhasil';
					redirect('all_data');
				}
				else
				{
					$data['notif'] = 'Input Gagal';
					redirect('all_data');					
				}
			}
			else
			{
					$this->load->view('template2',$data);
			}
		}
	}

	public function edit_user()
	{
		
	}
}

/* End of file select.php */
/* Location: ./application/controllers/select.php */