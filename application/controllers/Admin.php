<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	if (!$this->session->userdata('username')) {
    		redirect('Auth');
    	}elseif ($this->session->userdata('role_id') == 2) {
    		redirect('User/error');
    	}

    	$this->load->model('M_Osis');
    	$this->load->model('M_Pramuka');
    	$this->load->model('M_Paskibra');
    	$this->load->model('M_Pmr');
    	$this->load->model('M_Irmas');
    	$this->load->model('M_Data');

    }

	public function index()
	{	

		$data['judul'] = 'Dashboard';
		$data['level'] = 'Sekertaris';

		$where = array('is_active' => 2);
		$tot = array('is_active' => 1);



		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->result();
        $data['calon'] = $this->M_Osis->view_data($where,'tbl_a_osis')->num_rows();
        $data['anggota'] = $this->M_Osis->view_data($tot,'tbl_a_osis')->num_rows();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->result();
        $data['calon'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->num_rows();
        $data['anggota'] = $this->M_Pramuka->view_data($tot,'tbl_a_pramuka')->num_rows();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->result();
        $data['calon'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->num_rows();
        $data['anggota'] = $this->M_Paskibra->view_data($tot,'tbl_a_paskibra')->num_rows();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->result();
        $data['calon'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->num_rows();
        $data['anggota'] = $this->M_Pmr->view_data($tot,'tbl_a_pmr')->num_rows();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->result();
        $data['calon'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->num_rows();
        $data['anggota'] = $this->M_Irmas->view_data($tot,'tbl_a_irmas')->num_rows();
		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/index.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function aktivasi($id)
	{	
		$data['judul'] = 'Dashboard';
		$data['level'] = 'Sekertaris';

		$where = array('id' => $id);

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->row_array();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->row_array();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/Admin/aktivasi.php',$data);
		$this->load->view('Template/b_footer.php');
		
	}

	public function ak_edit(){
		$id = $this->input->POST('id');
			$nama = $this->input->POST('nama');
			$username = $this->input->POST('username');
			$kelas = $this->input->POST('kelas');
			$no_hp = $this->input->POST('no_hp');
			$aktivasi = $this->input->POST('aktivasi');

			$data = array(
				'nama' => $nama,
				'username' => $username,
				'kelas' => $kelas,
				'no_hp' => $no_hp,
				'is_active' => $aktivasi

			);

			$where = array(
                'id' => $id
            );

        if ($this->session->userdata('organisasi')== 'Osis') {
        	$this->M_Osis->update_data($where, $data,'tbl_a_osis');
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        	$this->M_Pramuka->update_data($where, $data,'tbl_a_pramuka');
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        	$this->M_Paskibra->update_data($where, $data,'tbl_a_paskibra');
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        	$this->M_Pmr->update_data($where, $data,'tbl_a_pmr');
		}
		else{
        	$this->M_Irmas->update_data($where, $data,'tbl_a_irmas');
		}

			
			redirect('Admin');
	}

	public function buat_pengumuman()
	{	

		$data['judul'] = 'Buat Pengumuman';
		$data['level'] = 'Sekertaris';

		$this->db->order_by('id','DESC');


		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['user'] = $this->M_Osis->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['user'] = $this->M_Pramuka->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['user'] = $this->M_Paskibra->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['user'] = $this->M_Pmr->view_data($where,'pengumuman')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['user'] = $this->M_Irmas->view_data($where,'pengumuman')->result();
		}

		$this->form_validation->set_rules('judul', 'Judul' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('penerima', 'Penerima' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('isi', 'Isi' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/buat_pengumuman.php',$data);
		$this->load->view('Template/b_footer.php'); 
		}else{
			
				$judul = htmlspecialchars($this->input->post('judul', true));
				$penerima = htmlspecialchars($this->input->post('penerima', true));
				$isi = htmlspecialchars($this->input->post('isi', true));
				$nama = htmlspecialchars($this->input->post('nama', true));
				$organisasi = htmlspecialchars($this->input->post('organisasi', true));

				$data = array(
					'judul' => $judul,
					'penerima' => $penerima,
					'isi' => $isi,
					'nama' => $nama,
					'dibuat' => time(),
					'organisasi' => $organisasi
				);
			
				$this->M_Data->input_data($data,'pengumuman');
			
			
            redirect('Admin/pengumuman');
				
		}
	}

	public function ubah_pengumuman($id){
		$data['judul'] = 'Buat Pengumuman';
		$data['level'] = 'Sekertaris';

		$where = array('id' => $id);
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->row_array();

        if ($data['user']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/buat_pengumuman#data');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_pengumuman.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_pengumuman_aksi(){

		$id = $this->input->POST('id');
		$judul = $this->input->POST('judul');
		$penerima = $this->input->POST('penerima');
		$isi = $this->input->POST('isi');
		$nama = $this->input->POST('nama');
		$organisasi = $this->input->POST('organisasi');
			
			$data = array(
				'judul' => $judul,
				'penerima' => $penerima,
				'isi' => $isi,
				'nama' => $nama,
				'dibuat' => time(),
				'organisasi' => $organisasi
			);

			$where = array(
                'id' => $id
            );

        	$this->M_Osis->update_data($where, $data,'pengumuman');
		
			redirect('Admin/pengumuman');

	}

	function pengumuman_hapus($id){
        $where = array('id'=> $id);

        $data['pengumuman'] = $this->M_Data->view_data($where,'pengumuman')->row_array();

        if ($data['pengumuman']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/buat_pengumuman');
        		}

        $this->M_Data->delete_data($where,'pengumuman');		
		redirect('Admin/buat_pengumuman#data');
    }

	public function upload_dokumentasi()
	{	

		$data['judul'] = 'Upload Dokumentasi';
		$data['level'] = 'Sekertaris';

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['foto'] = $this->M_Osis->view_data($where,'tbl_foto')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['foto'] = $this->M_Pramuka->view_data($where,'tbl_foto')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['foto'] = $this->M_Paskibra->view_data($where,'tbl_foto')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['foto'] = $this->M_Pmr->view_data($where,'tbl_foto')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['foto'] = $this->M_Irmas->view_data($where,'tbl_foto')->result();
		}

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['artikel'] = $this->M_Osis->view_data($where,'artikel')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['artikel'] = $this->M_Pramuka->view_data($where,'artikel')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['artikel'] = $this->M_Paskibra->view_data($where,'artikel')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['artikel'] = $this->M_Pmr->view_data($where,'artikel')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['artikel'] = $this->M_Irmas->view_data($where,'artikel')->result();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/upload_dokumentasi.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function upload_proker()
	{	
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		if ($this->session->userdata('organisasi')== 'Osis') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Osis');
        $data['visi'] = $this->M_Osis->view_data($where,'tbl_visi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Pramuka->view_data($where,'tbl_visi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Paskibra->view_data($where,'tbl_visi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Pmr->view_data($where,'tbl_visi')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
			$this->db->order_by('id','DESC');
        $data['visi'] = $this->M_Irmas->view_data($where,'tbl_visi')->result();
		}

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['misi'] = $this->M_Osis->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Pramuka->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Paskibra->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Pmr->view_data($where,'tbl_misi')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['misi'] = $this->M_Irmas->view_data($where,'tbl_misi')->result();
		}

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['proker'] = $this->M_Osis->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Pramuka->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Paskibra->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Pmr->view_data($where,'proker')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['proker'] = $this->M_Irmas->view_data($where,'proker')->result();
		}


		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/upload_proker.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function data_anggota()
	{	

		$data['judul'] = 'Data Anggota';
		$data['level'] = 'Sekertaris';

		$this->db->order_by('id','DESC');
		$where = array('is_active' => 1);

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->result();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->result();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/data_anggota.php',$data);
		$this->load->view('Template/b_footer.php');
	}


	public function my_profil()
	{	
		$where = array('username' => $this->session->userdata('username'));

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->row_array();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->row_array();
		}


		$data['judul'] = 'My Profil';
		$data['level'] = 'Sekertaris';

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/index.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function pengumuman()
	{	
		$data['judul'] = 'Pengumuman';
		$data['level'] = 'Sekertaris';

		$this->db->order_by('dibuat','DESC');

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Paskibra');
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pmr');
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->result();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/pengumuman.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function isi_aksi($id)
	{	
		$data['judul'] = 'Pengumuman';
		$data['level'] = 'Sekertaris';

		
			$where = array('id' => $id);
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->row_array();
        
        if ($data['user']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/pengumuman');
        		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/isi_pengumuman.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function anggota()
	{	
		$data['judul'] = 'Anggota';
		$data['level'] = 'Sekertaris';
		$this->db->order_by('id','DESC');
		$where = array('is_active' => 1);

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->result();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->result();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/anggota.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function proker() 
	{	
		$data['judul'] = 'Program Kerja';
		$data['level'] = 'Sekertaris';

		if ($this->session->userdata('organisasi')== 'Osis') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Osis');
        $data['visi'] = $this->M_Osis->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();
		} 
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Pramuka->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Paskibra->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$this->db->order_by('id','DESC');
			$where = array('organisasi' => 'Pramuka');
        $data['visi'] = $this->M_Pmr->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();
		}
		else{
			$where = array('organisasi' => 'Irmas');
			$this->db->order_by('id','DESC');
        $data['visi'] = $this->M_Irmas->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();
		}

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['misi'] = $this->M_Osis->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Pramuka->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Paskibra->view_data($where,'tbl_misi')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['misi'] = $this->M_Pmr->view_data($where,'tbl_misi')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['misi'] = $this->M_Irmas->view_data($where,'tbl_misi')->result();
		}

		if ($this->session->userdata('organisasi')== 'Osis') {
			$where = array('organisasi' => 'Osis');
        $data['proker'] = $this->M_Osis->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Pramuka->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Paskibra->view_data($where,'proker')->result();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
			$where = array('organisasi' => 'Pramuka');
        $data['proker'] = $this->M_Pmr->view_data($where,'proker')->result();
		}
		else{
			$where = array('organisasi' => 'Irmas');
        $data['proker'] = $this->M_Irmas->view_data($where,'proker')->result();
		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/proker.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	

	public function s_profil()
	{	
		$data['judul'] = 'My Profil';
		$data['level'] = 'Sekertaris';

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		$where = array('username' => $this->session->userdata('username'));

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->row_array();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->row_array();
		}

		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/setting_profile.php',$data);
		$this->load->view('Template/b_footer.php');
		}else{
			$username = $this->input->POST('username');
			$nama = htmlspecialchars($this->input->POST('nama',true));
			$kelas = htmlspecialchars($this->input->POST('kelas',true));
			$t_lahir = htmlspecialchars($this->input->POST('t_lahir',true));
			$alamat = htmlspecialchars($this->input->POST('alamat',true));
			$no_hp = htmlspecialchars($this->input->POST('no_hp',true));

			$data = array(
				'nama' => $nama,
				'kelas' => $kelas,
				't_lahir' => $t_lahir,
				'alamat' => $alamat,
				'no_hp' => $no_hp

			);

			$where = array(
                'username' => $username
            );

        if ($this->session->userdata('organisasi')== 'Osis') {
        	$this->M_Osis->update_data($where, $data,'tbl_a_osis');
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        	$this->M_Pramuka->update_data($where, $data,'tbl_a_pramuka');
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        	$this->M_Paskibra->update_data($where, $data,'tbl_a_paskibra');
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        	$this->M_Pmr->update_data($where, $data,'tbl_a_pmr');
		}
		else{
        	$this->M_Irmas->update_data($where, $data,'tbl_a_irmas');
		}

			
			redirect('Admin/my_profil');
		}
	}

	public function s_akun()
	{	
		$data['judul'] = 'My Profil';
		$data['level'] = 'Sekertaris';

		$where = array('username' => $this->session->userdata('username'));

		if ($this->session->userdata('organisasi')== 'Osis') {
        $data['user'] = $this->M_Osis->view_data($where,'tbl_a_osis')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $data['user'] = $this->M_Pramuka->view_data($where,'tbl_a_pramuka')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $data['user'] = $this->M_Paskibra->view_data($where,'tbl_a_paskibra')->row_array();
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $data['user'] = $this->M_Pmr->view_data($where,'tbl_a_pmr')->row_array();
		}
		else{
        $data['user'] = $this->M_Irmas->view_data($where,'tbl_a_irmas')->row_array();
		}

		$this->form_validation->set_rules('password', 'Password' , 'required|trim' , [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password1', 'Password1' , 'required|trim|min_length[3]|matches[password2]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('password2', 'Password2' , 'required|trim|matches[password1]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter',
			'matches' => 'Password tidak sama'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/user/setting_akun.php',$data);
		$this->load->view('Template/b_footer.php');
		}else{
			$pass_lama = $this->input->post('password');
			$pass_baru = $this->input->post('password1');

			if (!password_verify($pass_lama, $data['user']['password'])) {

				$this->session->set_flashdata('pass','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('User/s_akun');

			}else{
				if ($pass_lama == $pass_baru) {
					$this->session->set_flashdata('pass','<div class="alert alert-danger text-center" role="alert">
							  Password tidak boleh sama dengan password lama !!
							</div>'
						);
		            redirect('User/s_akun');
				}else{
					$password = password_hash($pass_baru, PASSWORD_DEFAULT);

					$data = array(
						'password' => $password

					);

					$where = array(
                		'username' => $this->session->userdata('username')
            		);

            		if ($this->session->userdata('organisasi')== 'Osis') {
			        	$this->M_Osis->update_data($where, $data,'tbl_a_osis');
					}
					elseif ($this->session->userdata('organisasi')== 'Pramuka') {
			        	$this->M_Pramuka->update_data($where, $data,'tbl_a_pramuka');
					}
					elseif ($this->session->userdata('organisasi')== 'Paskibra') {
			        	$this->M_Paskibra->update_data($where, $data,'tbl_a_paskibra');
					}
					elseif ($this->session->userdata('organisasi')== 'Pmr') {
			        	$this->M_Pmr->update_data($where, $data,'tbl_a_pmr');
					}
					else{
			        	$this->M_Irmas->update_data($where, $data,'tbl_a_irmas');
					}
						redirect('User');

				}

			}
		}
	}



	function anggota_hapus($id){
        $where = array('id'=> $id);

        if ($this->session->userdata('organisasi')== 'Osis') {
        $this->M_Osis->delete_data($where,'tbl_a_osis');
		}
		elseif ($this->session->userdata('organisasi')== 'Pramuka') {
        $this->M_Osis->delete_data($where,'tbl_a_pramuka');
		}
		elseif ($this->session->userdata('organisasi')== 'Paskibra') {
        $this->M_Osis->delete_data($where,'tbl_a_paskibra');
		}
		elseif ($this->session->userdata('organisasi')== 'Pmr') {
        $this->M_Osis->delete_data($where,'tbl_a_pmr');
		}
		else{
        $this->M_Osis->delete_data($where,'tbl_a_irmas');
		}
		redirect('Admin');
    }

	public function tambah_visi()
	{	
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$this->form_validation->set_rules('ketua_l', 'Ketua_l' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('ketua_p', 'Ketua_p' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('visi', 'Visi' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('periode', 'Periode' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('organisasi', 'Organisasi' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/tambah_visi.php',$data);
		$this->load->view('Template/b_footer.php');
		}else{
		$ketua_l = htmlspecialchars($this->input->post('ketua_l', true));
		$ketua_p = htmlspecialchars($this->input->post('ketua_p', true));
		$visi = htmlspecialchars($this->input->post('visi', true));
		$periode = htmlspecialchars($this->input->post('periode', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'ketua_l' => $ketua_l,
				'ketua_p' => $ketua_p,
				'visi' => $visi,
				'periode' => $periode,
				'organisasi' => $organisasi
			);
			
		$this->M_Data->input_data($data,'tbl_visi');
			
		redirect('Admin/proker');
		}
	}

	public function ubah_visi($id){
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$where = array('id' => $id);
        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

        if ($data['visi']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_visi.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_visi_aksi(){

		$id = htmlspecialchars($this->input->post('id', true));
		$ketua_l = htmlspecialchars($this->input->post('ketua_l', true));
		$ketua_p = htmlspecialchars($this->input->post('ketua_p', true));
		$visi = htmlspecialchars($this->input->post('visi', true));
		$periode = htmlspecialchars($this->input->post('periode', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'ketua_l' => $ketua_l,
				'ketua_p' => $ketua_p,
				'visi' => $visi,
				'periode' => $periode,
				'organisasi' => $organisasi
			);

			$where = array(
                'id' => $id
            );

        	$this->M_Data->update_data($where, $data,'tbl_visi');
		
			redirect('Admin/upload_proker');

	}

	function visi_hapus($id){
        $where = array('id'=> $id);

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

        if ($data['visi']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}
        $this->M_Data->delete_data($where,'tbl_visi');
		
		redirect('Admin/upload_proker');
    }

	public function tambah_misi()
	{	
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$where = array('organisasi' => $this->session->userdata('organisasi'));
		$data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

		$this->form_validation->set_rules('misi', 'Misi' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/tambah_misi.php',$data);
		$this->load->view('Template/b_footer.php');
		}else{
		$misi = htmlspecialchars($this->input->post('misi', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'misi' => $misi,
				'organisasi' => $organisasi
			);
			
		$this->M_Data->input_data($data,'tbl_misi');
			
		redirect('Admin/upload_proker');
		}
	}

	public function ubah_misi($id){
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$where = array('organisasi' => $this->session->userdata('organisasi'));
		$data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

		$where = array('id' => $id);
        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->row_array();

        if ($data['misi']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_misi.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_misi_aksi(){

		$id = htmlspecialchars($this->input->post('id', true));
		$misi = htmlspecialchars($this->input->post('misi', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'misi' => $misi,
				'organisasi' => $organisasi
			);

			$where = array(
                'id' => $id
            );

        	$this->M_Data->update_data($where, $data,'tbl_misi');
		
			redirect('Admin/upload_proker');

	}

	function misi_hapus($id){
        $where = array('id'=> $id);
        $this->M_Data->delete_data($where,'tbl_misi');

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->row_array();

        if ($data['misi']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}
		
		redirect('Admin/upload_proker');
    }

	public function tambah_proker()
	{	
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$where = array('organisasi' => $this->session->userdata('organisasi'));
		$data['proker'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

		$this->form_validation->set_rules('proker', 'Proker' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/tambah_proker.php',$data);
		$this->load->view('Template/b_footer.php');
		}else{
		$proker = htmlspecialchars($this->input->post('proker', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'proker' => $proker,
				'organisasi' => $organisasi
			);
			
		$this->M_Data->input_data($data,'proker');
			
		redirect('Admin/upload_proker');
		}
	}

	public function ubah_proker($id){
		$data['judul'] = 'Upload Program Kerja';
		$data['level'] = 'Sekertaris';

		$where = array('organisasi' => $this->session->userdata('organisasi'));
		$data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();

		$where = array('id' => $id);
        $data['proker'] = $this->M_Data->view_data($where,'proker')->row_array();

        if ($data['proker']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_proker.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_proker_aksi(){

		$id = htmlspecialchars($this->input->post('id', true));
		$proker = htmlspecialchars($this->input->post('proker', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'proker' => $proker,
				'organisasi' => $organisasi
			);

			$where = array(
                'id' => $id
            );

        	$this->M_Data->update_data($where, $data,'proker');
		
			redirect('Admin/upload_proker');

	}

	function proker_hapus($id){
        $where = array('id'=> $id);
        $this->M_Data->delete_data($where,'proker');

        $data['proker'] = $this->M_Data->view_data($where,'proker')->row_array();

        if ($data['proker']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_proker');
        		}
		
		redirect('Admin/upload_proker');
    }

    public function tambah_foto()
	{	
		$data['judul'] = 'Upload Dokumentasi';
		$data['level'] = 'Sekertaris';

		$this->form_validation->set_rules('judul', 'Judul' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$config['upload_path']      ='./uploads/galery';
        $config['allowed_types']    ='jpg|png|jpeg';
        $config['max_size']         = 4096;
        $config['ecrypt_name']      = TRUE;
        $this->load->library('upload',$config);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/tambah_foto.php',$data);
		$this->load->view('Template/b_footer.php');
		}elseif (! $this->upload->do_upload('foto')) {
			$this->session->set_flashdata('error','<div class="alert alert-danger text-center" role="alert">
					Upload Gambar Gagal !!
					</div>'
				);
		    redirect('Admin/tambah_foto');
		}
		else{

		$judul = htmlspecialchars($this->input->post('judul', true));
		$foto = $this->upload->data("file_name");
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'judul' => $judul,
				'foto' => $foto,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);
			
		$this->M_Data->input_data($data,'tbl_foto');
			
		redirect('Admin/upload_dokumentasi');
		}
	}

	public function ubah_foto($id){
		$data['judul'] = 'Upload Dokumentasi';
		$data['level'] = 'Sekertaris';

		$where = array('id' => $id);
		$data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->row_array();

        if ($data['foto']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_dokumentasi');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_foto.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_foto_aksi()
    {   
        if (empty($_FILES["foto"]["name"])) {
        
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));

			$data = array(
				'judul' => $judul,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);

            $where = array(
                'id' => $id
            );

            $this->M_Data->update_data($where,$data,'tbl_foto');
            redirect('Admin/upload_dokumentasi');
        }
        else{
            $config['upload_path']      ='./uploads/galery';
	        $config['allowed_types']    ='jpg|png|jpeg';
	        $config['max_size']         = 4096;
	        $config['ecrypt_name']      = TRUE;
	        $this->load->library('upload',$config);
            $this->upload->initialize($config);

            $id = htmlspecialchars($this->input->post('id', true));
	        $judul = htmlspecialchars($this->input->post('judul', true));
	        $this->upload->do_upload('foto');
            $foto = $this->upload->data("file_name");
			$organisasi = htmlspecialchars($this->input->post('organisasi', true));
            

            $data = array(
				'judul' => $judul,
				'foto' => $foto,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);

            $where = array(
                'id' => $id
            );
            //delete otomatis ketika update
            $file = $this->db->get_where('tbl_foto',['id'=>$id])->row();
            unlink("./uploads/galery/".$file->foto);

            $this->M_Data->update_data($where,$data,'tbl_foto');
            redirect('Admin/upload_dokumentasi');
        }
    }

	function foto_hapus($id){
        $where = array('id'=> $id);
        $file = $this->db->get_where('tbl_foto',['id'=>$id])->row();
            unlink("./uploads/galery/".$file->foto);
        $this->M_Data->delete_data($where,'tbl_foto');

        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->row_array();

        if ($data['foto']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_dokumentasi');
        		}
		
		redirect('Admin/upload_dokumentasi');
    }

	public function tambah_artikel()
	{	
		$data['judul'] = 'Upload Dokumentasi';
		$data['level'] = 'Sekertaris';

		$this->form_validation->set_rules('judul', 'Judul' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('isi', 'Isi' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$config['upload_path']      ='./uploads/artikel';
        $config['allowed_types']    ='jpg|png';
        $config['max_size']         = 4096;
        $config['ecrypt_name']      = TRUE;
        $this->load->library('upload',$config);

		if ($this->form_validation->run() == false) {
		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/tambah_artikel.php',$data);
		$this->load->view('Template/b_footer.php');
		}elseif (! $this->upload->do_upload('foto')) {
			$this->session->set_flashdata('artikel','<div class="alert alert-danger text-center" role="alert">
					Upload Gambar Gagal !! pastikan ukuran dibawah 4 Mb !
					</div>'
				);
		    redirect('Admin/tambah_artikel');
		}
		else{

		$judul = htmlspecialchars($this->input->post('judul', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));
		$foto = $this->upload->data("file_name");
		$isi = htmlspecialchars($this->input->post('isi', true));

			$data = array(
				'judul' => $judul,
				'foto' => $foto,
				'isi' => $isi,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);
			
		$this->M_Data->input_data($data,'artikel');
			
		redirect('Admin/upload_dokumentasi');
		}
	}

	public function ubah_artikel($id){
		$data['judul'] = 'Upload Dokumentasi';
		$data['level'] = 'Sekertaris';

		$where = array('id' => $id);
		$data['artikel'] = $this->M_Data->view_data($where,'artikel')->row_array();

        if ($data['artikel']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_dokumentasi');
        		}		

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/a_sidebar.php');
		$this->load->view('Backend/admin/ubah_artikel.php',$data);
		$this->load->view('Template/b_footer.php'); 
	}

	public function ubah_artikel_aksi()
    {   
        if (empty($_FILES["foto"]["name"])) {
        
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));
		$isi = htmlspecialchars($this->input->post('isi', true));

			$data = array(
				'judul' => $judul,
				'isi' => $isi,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);

            $where = array(
                'id' => $id
            );

            $this->M_Data->update_data($where,$data,'artikel');
            redirect('Admin/upload_dokumentasi');
        }
        else{
            $config['upload_path']      ='./uploads/artikel';
	        $config['allowed_types']    ='jpg|png|jpeg';
	        $config['max_size']         = 4096;
	        $config['ecrypt_name']      = TRUE;
	        $this->load->library('upload',$config);
            $this->upload->initialize($config);

        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
		$organisasi = htmlspecialchars($this->input->post('organisasi', true));
		$this->upload->do_upload('foto');
		$foto = $this->upload->data("file_name");
		$isi = htmlspecialchars($this->input->post('isi', true));

			$data = array(
				'judul' => $judul,
				'foto' => $foto,
				'isi' => $isi,
				'organisasi' => $organisasi,
				'dibuat' => time()
			);

            $where = array(
                'id' => $id
            );
            //delete otomatis ketika update
            $file = $this->db->get_where('artikel',['id'=>$id])->row();
            unlink("./uploads/artikel/".$file->foto);

            $this->M_Data->update_data($where,$data,'artikel');
            redirect('Admin/upload_dokumentasi');
        }
    }

	function artikel_hapus($id){
        $where = array('id'=> $id);
        $file = $this->db->get_where('artikel',['id'=>$id])->row();
            unlink("./uploads/artikel/".$file->foto);
        $this->M_Data->delete_data($where,'artikel');

        $data['artikel'] = $this->M_Data->view_data($where,'artikel')->row_array();

        if ($data['artikel']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('Admin/upload_dokumentasi');
        		}
		
		redirect('Admin/upload_dokumentasi');
    }

}