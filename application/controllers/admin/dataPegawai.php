<?php

class DataPegawai extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Data Pegawai";
		$data['pegawai'] = $this->pajakModel->get_data('data_pegawai')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/dataPegawai', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function tambahData()
	{
		$data['title'] = "Tambah Data Pegawai";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/tambahDataPegawai', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function tambahDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambahData();
		} else {
			$nip		= $this->input->post('nip');
			$nama_pegawai		= $this->input->post('nama_pegawai');
			$alamat_pegawai		= $this->input->post('alamat_pegawai');
			$jabatan		= $this->input->post('jabatan');
			$keterangan		= $this->input->post('keterangan');
			$data = array(
				'nip'	=> $nip,
				'nama_pegawai'	=> $nama_pegawai,
				'alamat_pegawai'	=> $alamat_pegawai,
				'jabatan'	=> $jabatan,
				'keterangan'	=> $keterangan,
			);

			$this->pajakModel->insert_data($data, 'data_pegawai');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Berhasil Ditambahkan!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataPegawai');
		}
	}
	public function updateData($id)
	{
		$where = array('id_pegawai' => $id);
		$data['title'] = "Update Data Pegawai";
		$data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai='$id' ")->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/updateDataPegawai', $data);
		$this->load->view('templates_admin/footer', $data);
	}
	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->updateData();
		} else {
			$id = $this->input->post('id_pegawai');
			$nip		= $this->input->post('nip');
			$nama_pegawai		= $this->input->post('nama_pegawai');
			$alamat_pegawai		= $this->input->post('alamat_pegawai');
			$jabatan		= $this->input->post('jabatan');
			$keterangan		= $this->input->post('keterangan');
			$data = array(
				'nip'	=> $nip,
				'nama_pegawai'	=> $nama_pegawai,
				'alamat_pegawai'	=> $alamat_pegawai,
				'jabatan'	=> $jabatan,
				'keterangan'	=> $keterangan,
			);

			$where = array(
				'id_pegawai' => $id
			);

			$this->pajakModel->update_data('data_pegawai', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data Berhasil Diupdate!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataPegawai');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required');
		$this->form_validation->set_rules('alamat_pegawai', 'alamat_pegawai', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangans', 'required');
	}

	public function deleteData($id)
	{
		$where = array('id_pegawai' => $id);
		$this->pajakModel->delete_data($where, 'data_pegawai');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Data Berhasil Dihapus!</strong> 
				  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('admin/dataPegawai');
	}
}
