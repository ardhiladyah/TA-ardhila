<?php

class DataWajibpajak extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Data Wajib Pajak";
		$data['wajibpajak'] = $this->pajakModel->get_data('data_wajibpajak')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/dataWajibpajak', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function tambahData()
	{
		$data['title'] = "Tambah Data Wajib Pajak";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/tambahDataWajibpajak', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function tambahDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambahData();
		} else {
			$npwp		= $this->input->post('npwp');
			$nama_wajibpajak		= $this->input->post('nama_wajibpajak');
			$alamat_wajibpajak		= $this->input->post('alamat_wajibpajak');
			$data = array(
				'npwp'	=> $npwp,
				'nama_wajibpajak'	=> $nama_wajibpajak,
				'alamat_wajibpajak'	=> $alamat_wajibpajak,

			);

			$this->pajakModel->insert_data($data, 'data_wajibpajak');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Wajib Pajak Berhasil Ditambahkan!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataWajibpajak');
		}
	}
	public function updateData($id)
	{
		$where = array('id_wajibpajak' => $id);
		$data['title'] = "Update Data Wajib Pajak";
		$data['wajibpajak'] = $this->db->query("SELECT * FROM data_wajibpajak WHERE id_wajibpajak='$id' ")->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/updateDataWajibpajak', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->updateData();
		} else {
			$id = $this->input->post('id_wajibpajak');
			$npwp		= $this->input->post('npwp');
			$nama_wajibpajak		= $this->input->post('nama_wajibpajak');
			$alamat_wajibpajak		= $this->input->post('alamat_wajibpajak');
			$data = array(
				'npwp'	=> $npwp,
				'nama_wajibpajak'	=> $nama_wajibpajak,
				'alamat_wajibpajak'	=> $alamat_wajibpajak,

			);
			$where = array(
				'id_wajibpajak' => $id
			);

			$this->pajakModel->update_data('data_wajibpajak', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Wajib Pajak Berhasil Diupdate!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataWajibpajak');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('npwp', 'npwp', 'required');
		$this->form_validation->set_rules('nama_wajibpajak', 'nama_wajibpajak', 'required');
		$this->form_validation->set_rules('alamat_wajibpajak', 'alamat_wajibpajak', 'required');

	}

	public function deleteData($id)
	{
		$where = array('id_wajibpajak' => $id);
		$this->pajakModel->delete_data($where, 'data_wajibpajak');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Data Wajib Pajak Berhasil Dihapus!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataWajibpajak');
	}
}
