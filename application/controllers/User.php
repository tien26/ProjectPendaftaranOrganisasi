<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	if (!$this->session->userdata('username')) {
    		redirect('Auth');
    	}elseif ($this->session->userdata('role_id') == 1) {
    		redirect('Admin');
    	}
    	$this->load->model('M_Osis');
		$this->load->model('M_Pramuka');
		$this->load->model('M_Paskibra');
		$this->load->model('M_Pmr');
		$this->load->model('M_Irmas');
		$this->load->model('M_Data');

    }

    public function error()
	{	
		$data['judul'] = 'Not Pound 404';
		$data['level'] = 'Anggota';

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('errors/error.php',$data);
		$this->load->view('Template/b_footer.php',$data);
	}


	public function index()
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
		$data['level'] = 'Anggota';

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/u_sidebar.php');
		$this->load->view('Backend/user/index.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function pengumuman()
	{	
		$data['judul'] = 'Pengumuman';
		$data['level'] = 'Anggota';

		$this->db->order_by('id','DESC');
		
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
		$this->load->view('Template/u_sidebar.php');
		$this->load->view('Backend/user/pengumuman.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function isi_aksi($id)
	{	
		$data['judul'] = 'Pengumuman';
		$data['level'] = 'Anggota';

		$where = array('id' => $id);
        $data['user'] = $this->M_Data->view_data($where,'pengumuman')->row_array();
        
        if ($data['user']['organisasi'] !== $this->session->userdata('organisasi')) {
        			redirect('User/pengumuman');
        		}

		$this->load->view('Template/b_header.php',$data);
		$this->load->view('Template/u_sidebar.php');
		$this->load->view('Backend/user/isi_pengumuman.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function anggota()
	{	
		$data['judul'] = 'Anggota';
		$data['level'] = 'Anggota';
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
		$this->load->view('Template/u_sidebar.php');
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
		$this->load->view('Template/u_sidebar.php');
		$this->load->view('Backend/user/proker.php',$data);
		$this->load->view('Template/b_footer.php');
	}

	public function s_profil()
	{	
		$data['judul'] = 'My Profil';
		$data['level'] = 'Anggota';


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
		$this->load->view('Template/u_sidebar.php');
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

			
			redirect('User');
		}
	}

	public function s_akun()
	{	
		$data['judul'] = 'My Profil';
		$data['level'] = 'Anggota';

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
		$this->load->view('Template/u_sidebar.php');
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


}