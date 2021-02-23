<?php

class dashboard extends CI_Controller{
	public function index()
	{
		$data['title'] = "Dashboard";
		$pegawai = $this->db->query("SELECT * FROM data_pegawai");
		$wajibpajak = $this->db->query("SELECT * FROM data_wajibpajak");
		$data['pegawai']=$pegawai->num_rows();
		$data['wajibpajak']=$wajibpajak->num_rows();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer',$data);
	}
}

?>