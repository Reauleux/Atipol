<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function add_user()
	{
		if($this->session->userdata('status') != 'ADMIN')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = "add_user_view";
		$data['fungsi'] = $this->admin_model->list_fungsi();
		$data['witel'] = $this->admin_model->list_witel();

		if($this->input->post('submit'))
			{
					if($this->admin_model->input_user() == TRUE)
					{
						$data['notif'] = 'Input Berhasil';
						$this->load->view('template2', $data);
					}
					else
					{
						$data['notif'] = 'Input Gagal';
						$this->load->view('template2', $data);					
					}
			}

			else
			{
				$this->load->view('template2',$data);
			}
		}
	}

	public function list_user()
	{
		if($this->session->userdata('status') != 'ADMIN')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$data['main_view'] = 'list_user_view';
		$data['user'] = $this->admin_model->cek_user();
		$this->load->view('template2', $data);
		}
	}

	public function hapus()
	{
		if($this->session->userdata('status') != 'ADMIN')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
		$id = $this->uri->segment(3);
		if($this->admin_model->hapus_user($id) == TRUE)
			{
				$this->session->set_flashdata('notif', 'Hapus data berhasil');
				redirect('admin/list_user');
			}
			else
			{
				$this->session->set_flashdata('notif', 'Hapus data gagal');
				redirect('admin/list_user');
			}
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
		$data['main_view']	= 'edit_user_view';
		$data['fungsi'] = $this->admin_model->list_fungsi();
		$data['witel'] = $this->admin_model->list_witel();
		$data['user'] = $this->admin_model->detil_user($this->uri->segment(3));

		if($this->input->post('submit'))
			{
				if($this->admin_model->edit_user($id) == TRUE)
				{
					$data['notif'] = 'Input Berhasil';
					redirect('admin/list_user');
				}
				else
				{
					$data['notif'] = 'Input Gagal';
					redirect('admin/list_user');					
				}
			}
			else
			{
					$this->load->view('template2',$data);
			}
		}
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */