<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
			redirect(base_url('index.php/guest/dashboard'));
	}

	public function dashboard()
	{
		if($this->session->userdata('status') != 'GUEST')
		{
			redirect(base_url('index.php/verifikator/dashboard'));
		}
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		else
		{
			$data['teritori'] = $this->admin_model->list_teritori();
			$data['witel'] = $this->admin_model->list_witel();
			$data['pekerjaan'] = $this->admin_model->list_pekerjaan();
			$data['program'] = $this->admin_model->list_program();
			$data['status'] = $this->admin_model->list_status();
			$data['gmpm'] = $this->admin_model->list_gmpm();

			$data['main_view'] = "dashboard_guest";
			$this->load->view('template2', $data);
		}
	}

	public function data()
	{
		if($this->session->userdata('logged_in') == FALSE)
		{
			redirect(base_url('index.php/user/login'));
		}
		if($this->session->userdata('status') != 'GUEST')
		{
			redirect(base_url('index.php/user/login'));
		}
		$data['main_view'] = 'detail_user_dashboard_view';
		if($this->session->userdata('status') != 'GUEST')
		{
			redirect(base_url('index.php/user/dashboard'));
		}
		else
		{
			if($this->input->post('submit'))
			{
				$witel 				= $this->input->post('witel');
				$inv 				= $this->input->post('inv');
				$program 			= $this->input->post('program');
				$bast 				= $this->input->post('bast');
				$jenis_pekerjaan	= $this->input->post('jenis_pekerjaan');
				$po 				= $this->input->post('po');
				$status_pekerjaan 	= $this->input->post('status_pekerjaan');
				$query 					= "";
				$query1 				= "";
				$query2 				= "";
				$query3 				= "";
				$query4 				= "";
				$query5 				= "";
				$query6 				= "";
				if($witel != "all")
				{
					$query				= "AND A.id_witel='$witel'";
				}
				if($inv != "all")
				{
					$query1				= "AND A.inv='$inv'";
				}
				if($program != "all")
				{
					$query2				= "AND A.id_program='$program'";
				}
				if($bast != "all")
				{
					$query3				= "AND A.bast='$bast'";
				}
				if($jenis_pekerjaan != "all")
				{
					$query4				= "AND A.jenis_pekerjaan='$jenis_pekerjaan'";
				}
				if($po != "all")
				{
					$query5				= "AND A.po='$po'";
				}
				if($status_pekerjaan != "all")
				{
					$query6				= "AND A.status_pekerjaan='$status_pekerjaan'";
				}

				$data['user'] = $this->admin_model->cek_user_guest($query,$query1,$query2,$query3,$query4,$query5,$query6);
				$this->load->view('template2', $data);
			}
			else
			{
				$this->load->view('template2', $data);
			}
		}
	}

}

/* End of file guest.php */
/* Location: ./application/controllers/guest.php */