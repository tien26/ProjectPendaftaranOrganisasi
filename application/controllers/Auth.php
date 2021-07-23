<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	$this->load->model('M_Data');

    }

	public function index(){
	if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}

		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		if ($this->form_validation->run() == false) {

			$this->load->view('Auth/login.php');
		}else{

			$this->_login();

		}
		
	}

	private function _login(){ 
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$organisasi = $this->input->post('organisasi');

		if ($organisasi == "Osis") {
					$user = $this->db->get_where('tbl_a_osis', ['username' => $username])->row_array();
					
					if ($user) {
					//user aktif
					if ($user['is_active'] == 1) {
						// cek password
						if (password_verify($password, $user['password'])) {
							$data = [
								'username' => $user['username'],
								'nama' => $user['nama'],
								'organisasi' => $user['organisasi'],
								'gambar' => $user['gambar'],
								'role_id' => $user['role_id'],
							];
							$this->session->set_userdata($data);

							if ($user['role_id'] == 1) {
								// Admin
							redirect('Admin');
							}else{
								//User
							redirect('User');
							}
							

						}else{
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('Auth/index');
						}

					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Dizinkan, Mohon Tunggu !!
						</div>'
						);
		            redirect('Auth/index');
					}

				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Terdaftar !!
						</div>'
						);
		            redirect('Auth/index');
				}
			
		}elseif ($organisasi == "Pramuka") {
			$user = $this->db->get_where('tbl_a_pramuka', ['username' => $username])->row_array();
			
			if ($user) {
					//user aktif
					if ($user['is_active'] == 1) {
						// cek password
						if (password_verify($password, $user['password'])) {
							$data = [
								'username' => $user['username'],
								'nama' => $user['nama'],
								'organisasi' => $user['organisasi'],
								'gambar' => $user['gambar'],
								'role_id' => $user['role_id'],
							];
							$this->session->set_userdata($data);
							
							if ($user['role_id'] == 1) {
								// Admin
							redirect('Admin');
							}else{
								//User
							redirect('User');
							}

						}else{
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('Auth/index');
						}

					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Dizinkan, Mohon Tunggu !!
						</div>'
						);
		            redirect('Auth/index');
					}

				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Terdaftar !!
						</div>'
						);
		            redirect('Auth/index');
				}
		}elseif ($organisasi == "Paskibra") {
			$user = $this->db->get_where('tbl_a_paskibra', ['username' => $username])->row_array();
			
			if ($user) {
					//user aktif
					if ($user['is_active'] == 1) {
						// cek password
						if (password_verify($password, $user['password'])) {
							
							$data = [
								'username' => $user['username'],
								'nama' => $user['nama'],
								'organisasi' => $user['organisasi'],
								'gambar' => $user['gambar'],
								'role_id' => $user['role_id'],
							];
							$this->session->set_userdata($data);
							
							if ($user['role_id'] == 1) {
								// Admin
							redirect('Admin');
							}else{
								//User
							redirect('User');
							}

						}else{
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('Auth/index');
						}

					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Dizinkan, Mohon Tunggu !!
						</div>'
						);
		            redirect('Auth/index');
					}

				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Terdaftar !!
						</div>'
						);
		            redirect('Auth/index');
				}
		}elseif ($organisasi == "Pmr") {
			$user = $this->db->get_where('tbl_a_pmr', ['username' => $username])->row_array();
			
			if ($user) {
					//user aktif
					if ($user['is_active'] == 1) {
						// cek password
						if (password_verify($password, $user['password'])) {
							
							$data = [
								'username' => $user['username'],
								'nama' => $user['nama'],
								'organisasi' => $user['organisasi'],
								'gambar' => $user['gambar'],
								'role_id' => $user['role_id'],
							];
							$this->session->set_userdata($data);
							
							if ($user['role_id'] == 1) {
								// Admin
							redirect('Admin');
							}else{
								//User
							redirect('User');
							}

						}else{
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('Auth/index');
						}

					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Dizinkan, Mohon Tunggu !!
						</div>'
						);
		            redirect('Auth/index');
					}

				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Terdaftar !!
						</div>'
						);
		            redirect('Auth/index');
				}
		}else{
			$user = $this->db->get_where('tbl_a_irmas', ['username' => $username])->row_array();
			
			if ($user) {
					//user aktif
					if ($user['is_active'] == 1) {
						// cek password
						if (password_verify($password, $user['password'])) {
							
							$data = [
								'username' => $user['username'],
								'nama' => $user['nama'],
								'organisasi' => $user['organisasi'],
								'gambar' => $user['gambar'],
								'role_id' => $user['role_id'],
							];
							$this->session->set_userdata($data);
							
							if ($user['role_id'] == 1) {
								// Admin
							redirect('Admin');
							}else{
								//User
							redirect('User');
							}

						}else{
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
							  Password Salah, Mohon Teliti !!
							</div>'
						);
		            redirect('Auth/index');
						}

					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Dizinkan, Mohon Tunggu !!
						</div>'
						);
		            redirect('Auth/index');
					}

				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">
						  Username Belum Terdaftar !!
						</div>'
						);
		            redirect('Auth/index');
				}
		}
}
	


	public function d_osis(){
		if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}

		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[3]|matches[kpassword]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter'
		]);
		$this->form_validation->set_rules('kpassword', 'Password' , 'required|trim|matches[password]');
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		if ($this->form_validation->run() == false) {
			
			$data['tittle'] = 'Daftar Anggota Osis';
			$data['judul'] = 'Osis';
			$data['action'] = 'Auth/d_osis';
			$data['kembali'] = 'Frontend/osis';
		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/daftar.php');
		$this->load->view('Template/f_footer.php'); 

		}else{
			
				$nama = htmlspecialchars($this->input->post('nama', true));
				$username = htmlspecialchars($this->input->post('username', true));
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$t_lahir = htmlspecialchars($this->input->post('t_lahir', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$kelas = $this->input->post('kelas');
				$no_hp = htmlspecialchars($this->input->post('no_hp', true));

				$data = array(
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					't_lahir' => $t_lahir,
					'alamat' => $alamat,
					'kelas' => $kelas,
					'no_hp' => $no_hp,
					'organisasi' => 'Osis',
					'gambar' => 'default.jpg',
					'role_id' => 2,
					'is_active' => 2,
					'dibuat' => time()
				);
			

			$this->load->model('M_Osis');

			$cek = $this->M_Osis->cek($username);

			if ($cek->num_rows() < 1) {

				$this->M_Osis->input_data($data,'tbl_a_osis');
				$this->session->set_flashdata('msg','<div class="alert alert-info" role="alert">
				  Tunggu data sedang dicek Sekertaris Osis !
				</div>'
				);
            redirect('Auth/index');
				
			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username sudah digunakan silahkan isi data kembali, buat <strong>Username</strong> berbeda !
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('Auth/d_osis');
			}
		}
	} 


	public function d_pramuka(){	
		if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}

		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[3]|matches[kpassword]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter'
		]);
		$this->form_validation->set_rules('kpassword', 'Password' , 'required|trim|matches[password]');
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		if ($this->form_validation->run() == false) {
			
			$data['tittle'] = 'Daftar Anggota Pramuka'; 
			$data['judul'] = 'Pramuka';
			$data['action'] = 'Auth/d_pramuka';
			$data['kembali'] = 'Frontend/pramuka';
		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/daftar.php');
		$this->load->view('Template/f_footer.php');

		}else{
			
				$nama = htmlspecialchars($this->input->post('nama', true));
				$username = htmlspecialchars($this->input->post('username', true));
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$t_lahir = htmlspecialchars($this->input->post('t_lahir', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$kelas = $this->input->post('kelas');
				$no_hp = htmlspecialchars($this->input->post('no_hp', true));

				$data = array(
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					't_lahir' => $t_lahir,
					'alamat' => $alamat,
					'kelas' => $kelas,
					'no_hp' => $no_hp,
					'organisasi' => 'Pramuka',
					'gambar' => 'default.jpg',
					'role_id' => 2,
					'is_active' => 2,
					'dibuat' => time()
				);
			

			$this->load->model('M_Pramuka');

			$cek = $this->M_Pramuka->cek($username);

			if ($cek->num_rows() < 1) {

				$this->M_Pramuka->input_data($data,'tbl_a_pramuka');
				$this->session->set_flashdata('msg','<div class="alert alert-info" role="alert">
				  Tunggu data sedang dicek Sekertaris Pramuka !
				</div>'
				);
            redirect('Auth/index');
				
			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username sudah digunakan silahkan isi data kembali, buat <strong>Username</strong> berbeda !
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('Auth/d_pramuka');
			}
		}
	}


	public function d_paskibra(){

	if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}	
		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[3]|matches[kpassword]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter'
		]);
		$this->form_validation->set_rules('kpassword', 'Password' , 'required|trim|matches[password]');
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		if ($this->form_validation->run() == false) {
			
			$data['tittle'] = 'Daftar Anggota Paskibra';
			$data['judul'] = 'Paskibra';
			$data['action'] = 'Auth/d_paskibra';
			$data['kembali'] = 'Frontend/paskibra'; 
		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/daftar.php');
		$this->load->view('Template/f_footer.php');

		}else{
			
				$nama = htmlspecialchars($this->input->post('nama', true));
				$username = htmlspecialchars($this->input->post('username', true));
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$t_lahir = htmlspecialchars($this->input->post('t_lahir', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$kelas = $this->input->post('kelas');
				$no_hp = htmlspecialchars($this->input->post('no_hp', true));

				$data = array(
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					't_lahir' => $t_lahir,
					'alamat' => $alamat,
					'kelas' => $kelas,
					'no_hp' => $no_hp,
					'organisasi' => 'Paskibra',
					'gambar' => 'default.jpg',
					'role_id' => 2,
					'is_active' => 2,
					'dibuat' => time()
				);
			

			$this->load->model('M_Paskibra');

			$cek = $this->M_Paskibra->cek($username);

			if ($cek->num_rows() < 1) {

				$this->M_Paskibra->input_data($data,'tbl_a_paskibra');
				$this->session->set_flashdata('msg','<div class="alert alert-info" role="alert">
				  Tunggu data sedang dicek Sekertaris Paskibra !
				</div>'
				);
            redirect('Auth/index');
				
			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username sudah digunakan silahkan isi data kembali, buat <strong>Username</strong> berbeda !
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('Auth/d_paskibra');
			}
		}
	}


	public function d_pmr(){	
		if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}

		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[3]|matches[kpassword]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter'
		]);
		$this->form_validation->set_rules('kpassword', 'Password' , 'required|trim|matches[password]');
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		if ($this->form_validation->run() == false) {
			
			$data['tittle'] = 'Daftar Anggota Pmr'; 
			$data['judul'] = 'Pmr';
			$data['action'] = 'Auth/d_pmr';
			$data['kembali'] = 'Frontend/pmr';
		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/daftar.php');
		$this->load->view('Template/f_footer.php');

		}else{
			
				$nama = htmlspecialchars($this->input->post('nama', true));
				$username = htmlspecialchars($this->input->post('username', true));
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$t_lahir = htmlspecialchars($this->input->post('t_lahir', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$kelas = $this->input->post('kelas');
				$no_hp = htmlspecialchars($this->input->post('no_hp', true));

				$data = array(
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					't_lahir' => $t_lahir,
					'alamat' => $alamat,
					'kelas' => $kelas,
					'no_hp' => $no_hp,
					'organisasi' => 'Pmr',
					'gambar' => 'default.jpg',
					'role_id' => 2,
					'is_active' => 2,
					'dibuat' => time()
				);
			

			$this->load->model('M_Pmr');

			$cek = $this->M_Pmr->cek($username);

			if ($cek->num_rows() < 1) {

				$this->M_Pmr->input_data($data,'tbl_a_pmr');
				$this->session->set_flashdata('msg','<div class="alert alert-info" role="alert">
				  Tunggu data sedang dicek Sekertaris Pmr !
				</div>'
				);
            redirect('Auth/index');
				
			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username sudah digunakan silahkan isi data kembali, buat <strong>Username</strong> berbeda !
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('Auth/d_pmr');
			}
		}
	}


	public function d_irmas(){	
		if ($this->session->userdata('username')) {
    		if ($this->session->userdata('role_id') ==1) {
    			redirect('Admin');
    		}else{
    			redirect('User');
    		}
    	}
    	
		$this->form_validation->set_rules('nama', 'Nama' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('username', 'Username' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim|min_length[3]|matches[kpassword]', [
			'required' => 'Kolom Tidak Boleh Kosong',
			'min_length' => 'Password terlalu pendek !! Minimal 3 Karakter'
		]);
		$this->form_validation->set_rules('kpassword', 'Password' , 'required|trim|matches[password]');
		$this->form_validation->set_rules('t_lahir', 'T_lahir' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('kelas', 'Kelas' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);
		$this->form_validation->set_rules('no_hp', 'No_hp' , 'required|trim', [
			'required' => 'Kolom Tidak Boleh Kosong'
		]);

		$data['kelas'] = $this->M_Data->tampil_data()->result();

		if ($this->form_validation->run() == false) {
			
			$data['tittle'] = 'Daftar Anggota Irmas'; 
			$data['judul'] = 'Irmas';
			$data['action'] = 'Auth/d_irmas';
			$data['kembali'] = 'Frontend/irmas';
		$this->load->view('Template/f_header.php',$data);
		$this->load->view('Frontend/daftar.php');
		$this->load->view('Template/f_footer.php');

		}else{
			
				$nama = htmlspecialchars($this->input->post('nama', true));
				$username = htmlspecialchars($this->input->post('username', true));
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$t_lahir = htmlspecialchars($this->input->post('t_lahir', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$kelas = $this->input->post('kelas');
				$no_hp = htmlspecialchars($this->input->post('no_hp', true));

				$data = array(
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					't_lahir' => $t_lahir,
					'alamat' => $alamat,
					'kelas' => $kelas,
					'no_hp' => $no_hp,
					'organisasi' => 'Irmas',
					'gambar' => 'default.jpg',
					'role_id' => 2,
					'is_active' => 2,
					'dibuat' => time()
				);
			

			$this->load->model('M_Irmas');

			$cek = $this->M_Irmas->cek($username);

			if ($cek->num_rows() < 1) {

				$this->M_Irmas->input_data($data,'tbl_a_irmas');
				$this->session->set_flashdata('msg','<div class="alert alert-info" role="alert">
				  Tunggu data sedang dicek Sekertaris Irmas !
				</div>'
				);
            redirect('Auth/index');
				
			}else{
				$this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username sudah digunakan silahkan isi data kembali, buat <strong>Username</strong> berbeda !
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('Auth/d_irmas');
			}
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		$url=base_url('Auth/index');
            redirect($url);
	}

}
