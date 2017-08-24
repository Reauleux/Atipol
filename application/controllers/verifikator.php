<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function dashboard()
	{
		if($this->session->userdata('status') != 'VERIFIKATOR')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
			$data['count_history_input'] = $this->admin_model->count_history_input();
			$data['count_history_delete'] = $this->admin_model->count_history_delete();
			$data['count_history_edit'] = $this->admin_model->count_history_edit();
			$data['main_view'] = "dashboard_verifikator_view";
			$this->load->view('template2', $data);
		}
	}

	public function list_input()
	{
		if($this->session->userdata('status') != 'VERIFIKATOR')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'verif_input_view';
		$data['user'] = $this->admin_model->cek_verif_input();
		$this->load->view('template2', $data);
		}
	}

	public function list_delete()
	{
		if($this->session->userdata('status') != 'VERIFIKATOR')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'verif_input_view';
		$data['user'] = $this->admin_model->cek_verif_delete();
		$this->load->view('template2', $data);
		}
	}

	public function list_edit()
	{
		if($this->session->userdata('status') != 'VERIFIKATOR')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'verif_edit_view';
		$data['user'] = $this->admin_model->cek_verif_edit();
		$this->load->view('template2', $data);
		}
	}

	public function edit()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
		$id = $this->uri->segment(3);
		$data['main_view']	= 'form_edit_verif_view';
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

}

/* End of file verifikator.php */
/* Location: ./application/controllers/verifikator.php */