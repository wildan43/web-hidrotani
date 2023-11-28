<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function panduan()
    {
        $this->load->view('panduan');
    }
	public function artikel()
    {
        $this->load->view('artikel');
    }
	public function maps2()
    {
        $this->load->view('maps2');
    }
	public function Login()
    {
        $this->load->view('Login');
    }
	public function SignUp()
    {
        $this->load->view('SignUp');
    }
	public function profile()
    {
        $this->load->view('profile');
    }
	public function Adminprofile()
    {
        $this->load->view('Adminprofile');
    }
	public function Admin_update_profile()
    {
        $this->load->view('Admin_update_profile');
    }
	public function saveupdate()
    {
        $this->load->view('saveupdate');
    }
	public function register()
    {
        $this->load->view('register');
    }
	public function adminbasic_table()
    {
        $this->load->view('adminbasic_table');
    }
	public function dataArticle()
    {
        $this->load->view('dataArticle');
    }
	public function AdminHidropeta()
    {
        $this->load->view('AdminHidropeta');
    }
	public function article1()
    {
        $this->load->view('article1');
    }
	
	public function InsertArticle()
    {
        $this->load->view('InsertArticle');
    }
	public function deletearticle()
    {
        $this->load->view('deletearticle');
    }
	public function sumbitarticle()
    {
        $this->load->view('sumbitarticle');
    }
	public function edit_article()
    {
        $this->load->view('edit_article');
    }
	public function SumbitHidropeta()
    {
        $this->load->view('SumbitHidropeta');
    }
	public function panduan1()
    {
        $this->load->view('panduan1');
    }
	public function panduan2()
    {
        $this->load->view('panduan2');
    }
	public function panduan3()
    {
        $this->load->view('panduan3');
    }
	public function panduan4()
    {
        $this->load->view('panduan4');
    }
	public function panduan5()
    {
        $this->load->view('panduan5');
    }
	public function panduan6()
    {
        $this->load->view('panduan6');
    }
	
	public function signin()
    {

		function callAPI($url, $method = 'GET', $data = false) {
			$curl = curl_init();
		
			$options = array(
				CURLOPT_URL => $url,
				CURLOPT_CUSTOMREQUEST => $method,
				CURLOPT_RETURNTRANSFER => true,
			);
		
			if ($data) {
				$options[CURLOPT_POSTFIELDS] = http_build_query($data);
			}
		
			curl_setopt_array($curl, $options);
			$response = curl_exec($curl);
			curl_close($curl);
			return json_decode($response, true);
		}

        $username = $this->input->get('username');
        $password = md5($this->input->get('password'));

        $loginUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-cjbzs/endpoint/gethidrotanipwanduser?username=' . $username . '&password=' . $password;
        $loginData = callAPI($loginUrl);

        if (count($loginData)) {
            $userData = array(
                'username' => $loginData[0]['username'],
                'email' => $loginData[0]['email'],
                'id' => $loginData[0]['_id'],
                'password' => $loginData[0]['password'],
                'nomortelepon' => $loginData[0]['nomortelepon'],
            );

            $this->session->set_userdata('user', $userData);

            // Periksa apakah pengguna adalah admin
            if ($loginData[0]['username'] == 'admin') {
                redirect('Adminprofile');
            } else {
                redirect('profile');
            }
        } else {
            $error_message = "Login failed. Please check your username and password.";
            $this->session->set_flashdata('error', $error_message);
            redirect('profile');
        }

		
    }

    
}
