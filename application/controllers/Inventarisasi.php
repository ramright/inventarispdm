<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventarisasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_inventarisasi'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
	}

	public function index()
	{
		$data = array(
			'title' => 'Sistem Inventarisasi',
			'pagetitle' => 'Dashboard',
			'pagesubtitle' => '',
			'content' => 'content/dashboard',
		);
		$this->load->view('indexpage', $data);
	}

	public function inventory()
	{
		$data = array(
			'title' => 'Sistem Inventarisasi',
			'pagetitle' => 'Halaman',
			'pagesubtitle' => 'Inventarisasi',
			'content' => 'content/inventarisasi',
		);
		$data['peruntukan'] = $this->M_inventarisasi->get_dd('peruntukan');
		$data['lokasi'] = $this->M_inventarisasi->get_dd('lokasi');
		$data['get_data'] = $this->M_inventarisasi->data_inventory();
		$this->load->view('indexpage', $data);
	}

	public function data_inventory()
	{
		$data = $this->M_inventarisasi->data_inventory();
		echo json_encode($data);
	}

	public function add_inventory()
	{
		$data = $this->M_inventarisasi->add_inventory();
		echo json_encode($data);
	}

	public function update_inventorys()
	{
		$nosertif = $this->input->post('nosertif');
		$luas = $this->input->post('luas');
		$peruntukan	= $this->input->post('peruntukan');
		$lokasi = $this->input->post('lokasi');
		$idinvent = $this->input->post('idinvent');

		$data = ['nosertif' => $nosertif, 'luas' => $luas, 'lokasi' => $lokasi, 'peruntukan' => $peruntukan];

		$data = $this->M_inventarisasi->update_inventory($idinvent, $data);
		echo json_encode($data);
	}

	public function update_inventory()
	{
		$this->form_validation->set_rules('nosertif', 'Nomor Sertifikat', 'required');
		$this->form_validation->set_rules('luas', 'Luas', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('peruntukan', 'Peruntukan', 'required');
		$this->form_validation->set_error_delimiters('<button class="btn position-relative">Required <span class="badge bg-red badge-notification badge-blink"></span></button>');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('swalnotification', "<script>Swal.fire({icon: 'error',title: 'Gagal!',text: 'Gagal mengubah data.'})</script>");
			redirect(base_url('inventaris'));
		} else {
		}
		$data = array(
			'nosertif' => $this->input->post('nosertif'),
			'luas' => $this->input->post('luas'),
			'lokasi' => $this->input->post('lokasi'),
			'peruntukan' => $this->input->post('peruntukan')
		);
		$this->M_inventarisasi->update_data('inventaris', 'idinvent', $this->input->post('idinvent'), $data);
		$this->session->set_flashdata('swalnotification', "<script>Swal.fire({icon: 'success',title: 'Success!',text: 'Data telah diubah.'})</script>");
		redirect(base_url('inventarisasi'));
	}

	public function delete_inventory()
	{
		$data = $this->M_inventarisasi->delete_inventory();
		echo json_encode($data);
	}

	public function another()
	{
		$data = array(
			'title' => 'Sistem Inventarisasi',
			'pagetitle' => 'Halaman',
			'pagesubtitle' => 'Lainnya',
			'content' => 'content/lainnya',
		);
		$data['get_unit'] = $this->M_inventarisasi->data_unit();
		$data['get_location'] = $this->M_inventarisasi->data_location();
		$this->load->view('indexpage', $data);
	}

	public function data_unit()
	{
		$data = $this->M_inventarisasi->data_unit();
		echo json_encode($data);
	}

	public function delete_unit()
	{
		$data = $this->M_inventarisasi->delete_unit();
		echo json_encode($data);
	}

	public function add_unit()
	{
		$data = $this->M_inventarisasi->add_unit();
		echo json_encode($data);
	}

	public function data_location()
	{
		$data = $this->M_inventarisasi->data_location();
		echo json_encode($data);
	}

	public function delete_location()
	{
		$data = $this->M_inventarisasi->delete_location();
		echo json_encode($data);
	}

	public function add_location()
	{
		$data = $this->M_inventarisasi->add_location();
		echo json_encode($data);
	}

	public function process()
	{
		$data = array(
			'title' => 'Sistem Inventarisasi',
			'pagetitle' => 'Proses',
			'pagesubtitle' => '',
			'content' => 'content/proses',
		);
		$this->load->view('indexpage', $data);
	}
}
