<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
	function __construct(){
    	parent::__construct();
    	if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}
    }

	public function index()
	{	

		$data['judul'] = 'Aplikasi Organisasi';
		$data['judul1'] = 'SMK Negeri 5 Kuningan';
		$data['tittle'] = 'Home - App Organisasi';
		$data['berita'] = 'Artikel Organisasi';

			$where = array('id' => 'id');
			$this->load->model('M_Data');
			$this->load->helper('text');
        $data['artikel'] = $this->M_Data->artikel()->result();
	

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/index.php',$data);
		$this->load->view('Template/f_footer.php');
	}

	public function berita($id)
	{	
		$data['tittle'] = 'Berita - App Organisasi';
		$this->load->model('M_Data');

		$where = array('id' => $id);
        $data['artikel'] = $this->M_Data->view_data($where,'artikel')->row_array();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/berita.php');
		$this->load->view('Template/f_footer.php');
	}

	public function osis()
	{	
		$data['judul'] = 'OSIS';
		$data['judul1'] = 'Organisasi Siswa Intra Sekolah';
		$data['tittle'] = 'Osis - App Organisasi';
		$data['url'] = 'Auth/d_osis';
		$data['logo'] = 'osis.png';

		$this->load->model('M_Data');

		$where = array('organisasi' => 'Osis');
        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->result();
        $data['anggota'] = $this->M_Data->view_data($where,'tbl_a_osis')->result();

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->result();
        $data['proker'] = $this->M_Data->view_data($where,'proker')->result();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/organisasi.php',$data);
		$this->load->view('Template/f_footer.php');
	}

	public function pramuka()
	{	
		$data['judul'] = 'Organisasi PRAMUKA';
		$data['judul1'] = 'Praja Muda Karana';
		$data['tittle'] = 'Pramuka - App Organisasi';
		$data['url'] = 'Auth/d_pramuka';
		$data['logo'] = 'pramuka.png';

		$this->load->model('M_Data');

		$where = array('organisasi' => 'Pramuka');
        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->result();
        $data['anggota'] = $this->M_Data->view_data($where,'tbl_a_pramuka')->result();

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->result();
        $data['proker'] = $this->M_Data->view_data($where,'proker')->result();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/organisasi.php',$data);
		$this->load->view('Template/f_footer.php');
	}
	public function paskibra()
	{	
		$data['judul'] = 'Organisasi PASKIBRA';
		$data['judul1'] = 'Pasukan Pengibar Bendera';
		$data['tittle'] = 'Paskibra - App Organisasi';
		$data['url'] = 'Auth/d_paskibra';
		$data['logo'] = 'paskibra.png';

		$this->load->model('M_Data');

		$where = array('organisasi' => 'Paskibra');
        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->result();
        $data['anggota'] = $this->M_Data->view_data($where,'tbl_a_paskibra')->result();

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->result();
        $data['proker'] = $this->M_Data->view_data($where,'proker')->result();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/organisasi.php',$data);
		$this->load->view('Template/f_footer.php');
	}
	public function pmr()
	{	
		$data['judul'] = 'Organisasi PMR';
		$data['judul1'] = 'Palang Merah Remaja';
		$data['tittle'] = 'Pmr - App Organisasi';
		$data['url'] = 'Auth/d_pmr';
		$data['logo'] = 'pmr.png';

		$this->load->model('M_Data');

		$where = array('organisasi' => 'Pmr');
        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->result();
        $data['anggota'] = $this->M_Data->view_data($where,'tbl_a_pmr')->result();

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->result();
        $data['proker'] = $this->M_Data->view_data($where,'proker')->result();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/organisasi.php',$data);
		$this->load->view('Template/f_footer.php');
	}
	public function irmas()
	{	
		$data['judul'] = 'Organisasi IRMAS';
		$data['judul1'] = 'Ikatan Remaja Masjid';
		$data['tittle'] = 'Irmas - App Organisasi';
		$data['url'] = 'Auth/d_irmas';
		$data['logo'] = 'irmas.png';

		$this->load->model('M_Data');

		$where = array('organisasi' => 'Irmas');
        $data['foto'] = $this->M_Data->view_data($where,'tbl_foto')->result();
        $data['anggota'] = $this->M_Data->view_data($where,'tbl_a_irmas')->result();

        $data['visi'] = $this->M_Data->view_data($where,'tbl_visi')->row_array();
        $data['kosong'] = $this->M_Data->view_data($where,'tbl_visi')->num_rows();

        $data['misi'] = $this->M_Data->view_data($where,'tbl_misi')->result();
        $data['proker'] = $this->M_Data->view_data($where,'proker')->result();

		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/organisasi.php',$data);
		$this->load->view('Template/f_footer.php');
	}
}
