<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WanDirectory extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Wanimal');
        $this->load->library('session');
    }

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function register()
	{
		$data = $this->Wanimal->get_country();
		//$position = $this->Wanimal->get_position();
		$continent = $this->Wanimal->get_continent();
		$workarea = $this->Wanimal->get_workarea();
        $state = $this->Wanimal->get_state();
        //$title = $this->Wanimal->get_title();

		$this->load->view('Frontend/header');
		$this->load->view('Frontend/register',array("data"=>$data,"continent"=>$continent,"workarea"=>$workarea,"state"=>$state));
		$this->load->view('Frontend/footer');

	}

	public function register_insert()
	{	
		//die("test");
		$update = $this->input->post('update');

		$orgname = $this->input->post('orgname');
		$orgemail = $this->input->post('orgemail');
		$orgurl = $this->input->post('orgurl');
		
		$continent = $this->input->post('continent');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		
		$zip = $this->input->post('zip');
		$streetname = $this->input->post('streetname');
		$city = $this->input->post('city');
		$col23 = $this->input->post('col23');
		//$position = $this->input->post('position');

	//for unique email start
		// if(isset($orgemail)) {
		//   $check_email = $this->Wanimal->check_email($orgemail);
		//   if(!empty($check_email)) {
		//   	 $this->session->set_flashdata('register_errormsg', '<div class="alert alert-danger text-center">Email already exist.</div>');
		//         redirect("directory/register");
		//   }
		// }
		// die("testmail");
	//for unique email end	

		$col21 = $this->input->post('col21');
		if(isset($col21) && !empty($col21)){
			$col21 = 1;
		}else{
			$col21 = 0;
		}

		$col22 = $this->input->post('col22');
		if(isset($col22) && !empty($col22)){
			$col22 = 1;
		}else{
			$col22 = 0;
		}

		if(isset($col23) && !empty($col23)){
			$col23 = 1;
		}else{
			$col23 = 0;
		}
		$col29 = $this->input->post('col29');
		if(isset($col29) && !empty($col29)){
			$col29 = 1;
		}else{
			$col29 = 0;
		}

		$col30 = $this->input->post('col30');
		if(isset($col30) && !empty($col30)){
			$col30 = 1;
		}else{
			$col30 = 0;
		}

		$col31 = $this->input->post('col31');
		if(isset($col31) && !empty($col31)){
			$col31 = 1;
		}else{
			$col31 = 0;
		}

		$col32 = $this->input->post('col32');
		if(isset($col32) && !empty($col32)){
			$col32 = 1;
		}else{
			$col32 = 0;
		}

		$col33 = $this->input->post('col33');
		if(isset($col33) && !empty($col33)){
			$col33 = 1;
		}else{
			$col33 = 0;
		}

		$col34 = $this->input->post('col34');
		if(isset($col34) && !empty($col34)){
			$col34 = 1;
		}else{
			$col34 = 0;
		}

		$col35 = $this->input->post('col35');
		if(isset($col35) && !empty($col35)){
			$col35 = 1;
		}else{
			$col35 = 0;
		}

		$col37 = $this->input->post('col37');
		if(isset($col37) && !empty($col37)){
			$col37 = 1;
		}else{
			$col37 = 0;
		}

		$col38 = $this->input->post('col38');
		if(isset($col38) && !empty($col38)){
			$col38 = 1;
		}else{
			$col38 = 0;
		}

		$col40 = $this->input->post('col40');
		if(isset($col40) && !empty($col40)){
			$col40 = 1;
		}else{
			$col40 = 0;
		}

		$col44 = $this->input->post('col44');
		if(isset($col44) && !empty($col44)){
			$col44 = 1;
		}else{
			$col44 = 0;
		}

		$col47 = $this->input->post('col47');
		if(isset($col47) && !empty($col47)){
			$col47 = 1;
		}else{
			$col47 = 0;
		}

		$col53 = $this->input->post('col53');
		if(isset($col53) && !empty($col53)){
			$col53 = 1;
		}else{
			$col53 = 0;
		}

		$col54 = $this->input->post('col54');
		if(isset($col54) && !empty($col54)){
			$col54 = 1;
		}else{
			$col54 = 0;
		}

		$geographic = $this->input->post('geographic');
		$facebook = $this->input->post('facebook');
		$comments = $this->input->post('comments');
		$notes = $this->input->post('notes');
		$affiliate = $this->input->post('affiliate');
		if(isset($affiliate) && !empty($affiliate)){
			$affiliate = 1;
		}else{
			$affiliate = 0;
		}

		$published = $this->input->post('published');
		if(isset($published) && !empty($published)){
			$published = 1;
		}else{
			$published = 0;
		}

		$password = $this->input->post('password');
		$password = md5($password);

	   

	//for captcha start
		$secret = '6Lcx7eMZAAAAAACM-UzRb6iM6U_UFDsc-9edVXGa';
	    $response = $this->input->post('g-recaptcha-response');
	    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response);
	    $responseData = json_decode($verifyResponse);

	
	     if($responseData->success != true){
	     	$this->session->set_flashdata('register_errormsg', '<div class="alert alert-danger text-center">reCAPTCHA input is not valid.</div>');
			redirect("directory/register");
	    }else{
	      $this->session->set_userdata(array('message'=>'reCAPTCHA input is valid.'));
	      $captcha = true;
	    }
	//for captcha end 

	    $type = 0;    //for user=0 & admin=1
	    date_default_timezone_set("America/New_York");
		$d=time();
	    $created_at = date("Y-m-d H:i:s", $d);
	    //var_dump($created_at);die;

    	$input_data = array("password"=>$password,"type"=>$type,"affiliate"=>$affiliate,"published"=>$published,"organisation_name"=>$orgname,"organisation_email"=>$orgemail,"organisation_url"=>$orgurl,"continent"=>$continent,"country"=>$country,"state"=>$state,"zip"=>$zip,"streetname"=>$streetname,"city"=>$city,"col21"=>$col21,"col22"=>$col22,"col23"=>$col23,"col29"=>$col29,"col30"=>$col30,"col31"=>$col31,"col32"=>$col32,"col33"=>$col33,"col34"=>$col34,"col35"=>$col35,"col37"=>$col37,"col38"=>$col38,"col40"=>$col40,"col44"=>$col44,"col47"=>$col47,"col53"=>$col53,"col54"=>$col54,"workarea"=>$geographic,"facebook"=>$facebook,"comment"=>$comments,"notes"=>$notes,"created_at"=>$created_at);

// echo "<pre>"; print_r($this->input->post());
//   print_r($input_data);die;
             $data = $this->Wanimal->insert_wandir($input_data);


    	if($data == 1)
    	{
    		//for email start
    		 $country = $this->Wanimal->get_country();
             $state = $this->Wanimal->get_state();
             $c_s_data = array("country"=>$country,"state"=>$state);
             $s_db = array("input_data"=>$input_data,"c_s_data"=>$c_s_data);
		     $from = 'sronan@gmail.com';
		     $adminmail = 'sronan@gmail.com';
	         $subject = 'Notification for World Federation for Animals new registration';
	         $msg_template = $this->load->view('Frontend/register_email_template',$s_db,TRUE);
			 $this->load->helper('email_method_helper');
			 $data = email_fn($adminmail,$from,$subject,$msg_template);
			//for email end  

		     redirect("directory/register-success");
		       
    	}else{
			  $this->session->set_flashdata('register_errormsg', '<div class="alert alert-danger text-center">Not register , Error !</div>');
		        redirect("directory/register");
		    
	    }

	}
		public function register_success(){
			$this->load->view('Frontend/header');
			$this->load->view("Frontend/register_success");
			$this->load->view('Frontend/footer');

		}


	public function edit_directory(){
		    $sessiondata = $this->session->get_userdata();

			//$position = $this->Wanimal->get_position();
			$continent = $this->Wanimal->get_continent();
			$workarea = $this->Wanimal->get_workarea();
			//$title = $this->Wanimal->get_title();


			if (isset($sessiondata['mysessdata']) && !empty($sessiondata['mysessdata']))
			{
				// $data = $sessiondata['mysessdata'][0];
			    $id = $sessiondata['mysessdata'][0]['id'];
				$data = $this->Wanimal->get_user_by_id($id);
				$data = $data[0];
				$this->load->view('Frontend/header');
				$this->load->view("Frontend/edit_profile",array("continent"=>$continent,"workarea"=>$workarea,"data"=>$data));
				$this->load->view('Frontend/footer');

			}else{
			        redirect("login-form");
			}
	}
   	public function searchdir()
	{ 
		$data = $this->Wanimal->get_country();
		$continent = $this->Wanimal->get_continent();
		$result = array("data"=>$data,"continent"=>$continent);
		$this->load->view('Frontend/header');
		$this->load->view('Frontend/searchdir',$result);
		$this->load->view('Frontend/footer');

	}
	public function searchdirresult()
	{ 
		$orgname = $this->input->get('orgname');
		$country = $this->input->get('country');
		$city = $this->input->get('city');
		$zip = $this->input->get('zip');
		$focus = $this->input->get('focus');

		$continentID = $this->input->get('continentID');
		if (isset($continentID) && !empty($continentID)) {
			$continentid = $continentID;
		}else{$continentid = "";}

		$countryID = $this->input->get('countryID');
		if (isset($countryID) && !empty($countryID)) {
			$countryid = $countryID;
		}else{$countryid = "";}

		$state = $this->input->get('state');
		if (isset($state) && !empty($state)) {
			$stateid = $state;
		}else{$stateid = "";}


	    $results_per_page = 50;  

		$input_data = array("orgname"=>$orgname,"country"=>$country,"city"=>$city,"zip"=>$zip,"focus"=>$focus,"continentid"=>$continentid,"countryid"=>$countryid,"stateid"=>$stateid);

		$data = $this->Wanimal->get_directory_by_search($input_data);

		$check_continent = $this->Wanimal->get_continent();
		$check_country = $this->Wanimal->get_country();
        $check_state = $this->Wanimal->get_state();

         //var_dump($this->db->last_query()); 
//pagination start
		if (isset($data['result']) && !empty($data['result'])) {
			$count = $data['count'];

		$number_of_page = ceil ($count / $results_per_page);
		//var_dump($number_of_page);die;
		  $page = $this->input->get('page');
	    if (isset($page) && !empty($page))
	    {  
	        $page = $page;  
	    } else {  
	        $page =1;  
	    }  
		$page_first_result = ($page-1) * $results_per_page;

		$this->db->limit($results_per_page,$page_first_result);
//for filters(pagination) start
		if(isset($orgname) && !empty($orgname))
        { $this->db->like('organisation_name', $orgname); }
        if(isset($country) && !empty($country))
        {  $this->db->where('country', $country); }
        if(isset($city) && !empty($city))
        { $this->db->like('city', $city); }
        if(isset($zip) && !empty($zip))
        { $this->db->like('zip', $zip ,'after'); }
        if(isset($focus) && !empty($focus))
        { $this->db->where($focus,1); }
        if(isset($continentid) && !empty($continentid))
        { $this->db->where('continent',$continentid); }
        if(isset($countryid) && !empty($countryid))
        { $this->db->where('country',$countryid);}
          
        if(isset($stateid) && !empty($stateid))
        { $this->db->where('state',$stateid); }
//for filters(pagination) end
        $this->db->where('type',0);
    	$this->db->where('published',1);
    	$this->db->order_by('organisation_name',"asc");
		$query = $this->db->get('wa_wandir_entrees');
        $new_data = $query->result_array();

        // var_dump($this->db->last_query()); 
       // echo "<pre>";print_r($data);
//pagination end

			$result = array("data"=>$new_data,"count"=>$count,"page"=>$number_of_page,"input_data"=>$input_data,"check_continent"=>$check_continent,"check_country"=>$check_country,"check_state"=>$check_state);
       // echo "<pre>";print_r($result);die;

		}else{
			$result = array("data"=>$data,"check_continent"=>$check_continent,"check_country"=>$check_country,"check_state"=>$check_state);
		}
		$this->load->view('Frontend/header');
		$this->load->view('Frontend/searchdirresult',$result);
		$this->load->view('Frontend/footer');

	}
	public function login()
	 {
	    	$data = $this->session->get_userdata('mysessdata');
	    	//echo "<pre>";print_r($data);

			if (empty($data['mysessdata']))
			{		
				$this->load->view('Frontend/header');
				$this->load->view('Frontend/Login');
				$this->load->view('Frontend/footer');

	    	}else{
	    		redirect("registration/profile");
	    	}
	    }
  
	public function user_home()
	{
			$email = $this->input->post("email");
	    	$password = $this->input->post("password");
	    	$password = md5($password);
		    $usr_result = $this->Wanimal->selectUser($email, $password);

			if (isset($usr_result) && !empty($usr_result)) {
				
		   		if($usr_result[0]['type'] == 0) {
		   		$this->session->set_userdata('mysessdata',$usr_result);
		   		//var_dump($usr_result[0]['type']);die;
			        redirect("registration/profile");
				}else{
				  $this->session->set_flashdata('user_errormsg', 'Incorrect Orgasnisation Credential!');
			        redirect("login-form");
			     }
			}
			else{
				$this->session->set_flashdata('user_errormsg', 'Username and password do not match or you do not have an account yet.');
			        redirect("login-form");
			}
	}
	public function dashboard(){
			$data = $this->session->get_userdata();

			$country = $this->Wanimal->get_country();
			//$position = $this->Wanimal->get_position();
			$continent = $this->Wanimal->get_continent();
			$workarea = $this->Wanimal->get_workarea();
	        $state = $this->Wanimal->get_state();
	       // $title = $this->Wanimal->get_title();
			//echo "<pre>";print_r($data);die;
			if (isset($data['mysessdata']) && !empty($data['mysessdata']))
			{
				$id = $data['mysessdata'][0]['id'];
				$result = $this->Wanimal->get_user_by_id($id);
				$this->load->view('Frontend/header');
				$this->load->view("Frontend/user_home",array("data"=>$result,"country"=>$country,"state"=>$state,"workarea"=>$workarea,"continent"=>$continent));
				$this->load->view('Frontend/footer');

			}else{
			        redirect("login-form");
			}
	}
	public function continent_search(){
		$continentID = $this->input->get('continentID');
		$continent = $this->Wanimal->get_continent();
	//for country	
		if (isset($continentID) && !empty($continentID)) {
		    $country = $this->Wanimal->get_country_by_continent_id($continentID);

	//for state
			$countryID = $this->input->get('countryID');
			if (isset($countryID) && !empty($countryID)) {
		      $states = $this->Wanimal->get_state_by_country_id($countryID);
			}else{
				$states = "";
			}
			if (isset($countryID) && !empty($countryID)) {
				//var_dump($states);
				if(empty($states)) {
				    redirect(base_url("directory/search-wan-directory-result?continentID=".$continentID."&countryID=".$countryID."&societyname=&country=0&city=&zip=&focus=0"));
				 } 
			}

	//for state end	
		    $data = array("continent"=>$continent,"country"=>$country,"state"=>$states);
		// echo "<pre>";print_r($data);die;
   		$this->load->view('Frontend/header');
		$this->load->view('Frontend/continent_search',$data);
		$this->load->view('Frontend/footer');

		}
	//for country end
		//var_dump("expression");die;
		// var_dump($continentID);die;
		// $data = 1;
	}

	public function directory_more_info(){
			$id = $this->uri->segment(3);
		    $result = $this->Wanimal->get_dir_more_info($id);
		    $check_continent = $this->Wanimal->get_continent();
			$check_country = $this->Wanimal->get_country();
			$check_state = $this->Wanimal->get_state();	
		    $data = array("data"=>$result[0],"check_continent"=>$check_continent,"check_country"=>$check_country,"check_state"=>$check_state);
		    //echo "<pre>";print_r($data);die;
    		$this->load->view('Frontend/header');
		    $this->load->view('Frontend/dir_more_info',$data);
    		$this->load->view('Frontend/footer');

	}
	public function logout()
	{	
		$data = $this->session->get_userdata('mysessdata');
		//var_dump($data);die;
		   $this->session->unset_userdata('mysessdata');
		   $this->session->sess_destroy();
	
		   redirect("login-form");
	}

	public function get_country(){
		$id = $this->input->post('id');
		$country = $this->Wanimal->get_country_by_continent_id($id);
		echo json_encode($country); die;
	}
	public function get_state(){
		$id = $this->input->post('id');
		$state = $this->Wanimal->get_state_by_country_id($id);
		echo json_encode($state); die;
	}


    public function update_profile()
	{	
		$update = $this->input->post('update');

		
		$orgname = $this->input->post('orgname');
		$orgemail = $this->input->post('orgemail');
		$orgurl = $this->input->post('orgurl');
		
		$continent = $this->input->post('continent');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		
		$zip = $this->input->post('zip');
		$streetname = $this->input->post('streetname');
		$city = $this->input->post('city');
		
		$col21 = $this->input->post('col21');
		if(isset($col21) && !empty($col21)){
			$col21 = 1;
		}else{
			$col21 = 0;
		}

		$col22 = $this->input->post('col22');
		if(isset($col22) && !empty($col22)){
			$col22 = 1;
		}else{
			$col22 = 0;
		}	
		$col23 = $this->input->post('col23');
		if(isset($col23) && !empty($col23)){
			$col23 = 1;
		}else{
			$col23 = 0;
		}
		$col29 = $this->input->post('col29');
		if(isset($col29) && !empty($col29)){
			$col29 = 1;
		}else{
			$col29 = 0;
		}

		$col30 = $this->input->post('col30');
		if(isset($col30) && !empty($col30)){
			$col30 = 1;
		}else{
			$col30 = 0;
		}

		$col31 = $this->input->post('col31');
		if(isset($col31) && !empty($col31)){
			$col31 = 1;
		}else{
			$col31 = 0;
		}

		$col32 = $this->input->post('col32');
		if(isset($col32) && !empty($col32)){
			$col32 = 1;
		}else{
			$col32 = 0;
		}

		$col33 = $this->input->post('col33');
		if(isset($col33) && !empty($col33)){
			$col33 = 1;
		}else{
			$col33 = 0;
		}

		$col34 = $this->input->post('col34');
		if(isset($col34) && !empty($col34)){
			$col34 = 1;
		}else{
			$col34 = 0;
		}

		$col35 = $this->input->post('col35');
		if(isset($col35) && !empty($col35)){
			$col35 = 1;
		}else{
			$col35 = 0;
		}

		$col37 = $this->input->post('col37');
		if(isset($col37) && !empty($col37)){
			$col37 = 1;
		}else{
			$col37 = 0;
		}

		$col38 = $this->input->post('col38');
		if(isset($col38) && !empty($col38)){
			$col38 = 1;
		}else{
			$col38 = 0;
		}

		$col40 = $this->input->post('col40');
		if(isset($col40) && !empty($col40)){
			$col40 = 1;
		}else{
			$col40 = 0;
		}

		$col44 = $this->input->post('col44');
		if(isset($col44) && !empty($col44)){
			$col44 = 1;
		}else{
			$col44 = 0;
		}

		$col47 = $this->input->post('col47');
		if(isset($col47) && !empty($col47)){
			$col47 = 1;
		}else{
			$col47 = 0;
		}

		$col53 = $this->input->post('col53');
		if(isset($col53) && !empty($col53)){
			$col53 = 1;
		}else{
			$col53 = 0;
		}

		$col54 = $this->input->post('col54');
		if(isset($col54) && !empty($col54)){
			$col54 = 1;
		}else{
			$col54 = 0;
		}

		$geographic = $this->input->post('geographic');
		$facebook = $this->input->post('facebook');
		$comments = $this->input->post('comments');
		$notes = $this->input->post('notes');
		$affiliate = $this->input->post('affiliate');
		if(isset($affiliate) && !empty($affiliate)){
			$affiliate = 1;
		}else{
			$affiliate = 0;
		}

		
		$password = $this->input->post('password');

	    $sessiondata = $this->session->get_userdata();

			if (isset($password) && !empty($password)) {
		        $password = md5($password);
		    }else{
		    	if (isset($sessiondata['mysessdata'])) {
		    	    $password = $sessiondata['mysessdata'][0]['password'];
		    	}
		    }

	//for captcha start
		$secret = '6Lcx7eMZAAAAAACM-UzRb6iM6U_UFDsc-9edVXGa';
	    $response = $this->input->post('g-recaptcha-response');
	    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response);
	    $responseData = json_decode($verifyResponse);

	    if($responseData->success != true){

	      	$this->session->set_flashdata('update_errormsg', '<div class="alert alert-danger text-center">reCAPTCHA input is not valid.</div>');
			 redirect("registration/edit-profile/".$sessiondata['mysessdata'][0]['id']."");
	    }else{
	      $this->session->set_userdata(array('message'=>'reCAPTCHA input is valid.'));
	      $captcha = true;
	    }

	//for captcha end 
	    //$type = 0;    //for user=0 & admin=1
	    date_default_timezone_set("America/New_York");
		$d=time();
	    $created_at = date("Y-m-d H:i:s", $d);

	    $id = $sessiondata['mysessdata'][0]['id'];

    	$input_data = array("password"=>$password,"affiliate"=>$affiliate,"organisation_name"=>$orgname,"organisation_email"=>$orgemail,"organisation_url"=>$orgurl,"continent"=>$continent,"country"=>$country,"state"=>$state,"zip"=>$zip,"streetname"=>$streetname,"city"=>$city,"col21"=>$col21,"col22"=>$col22,"col23"=>$col23,"col29"=>$col29,"col30"=>$col30,"col31"=>$col31,"col32"=>$col32,"col33"=>$col33,"col34"=>$col34,"col35"=>$col35,"col37"=>$col37,"col38"=>$col38,"col40"=>$col40,"col44"=>$col44,"col47"=>$col47,"col53"=>$col53,"col54"=>$col54,"workarea"=>$geographic,"facebook"=>$facebook,"comment"=>$comments,"notes"=>$notes);
		// var_dump($captcha);
  //   	echo "<pre>";print_r($input_data);die("update test_form");

        	 $data = $this->Wanimal->update_wandir($id,$input_data);

    	if($data == 1)
    	{
		        	$this->session->set_flashdata('update_msg', 'Directory updated successfully !');
		    	    redirect("registration/profile");
		        
    	}else{
    		//die("utest");
		        	$this->session->set_flashdata('update_errormsg', '<div class="alert alert-danger text-center">Not updated , Error !</div>');
		    	    redirect("registration/edit-profile/".$sessiondata['mysessdata'][0]['id']."");

	    }

	}
	public function forgot_password_view(){
		$this->load->view('Frontend/header');
		$this->load->view("Frontend/forgot_password");
	    $this->load->view('Frontend/footer');

	}
	public function send_forgot_password(){

		$to = $this->input->post("email");
		$check_email = $this->Wanimal->check_email($to);
		//echo $this->db->last_query();
		//var_dump($to);var_dump($check_email);die;
		if (isset($check_email) && !empty($check_email)) {
			
			//var_dump($check_email);die;
			$this->load->helper('email_method_helper');

	        $from = 'sronan@gmail.com';
	        $subject = 'Password Reset';
	        $msg_template = "<a href=".base_url().'directory/reset?id='.$check_email[0]['id'].">Click here to reset your password !</a>";
	        
			$data = email_fn($to,$from,$subject,$msg_template);

			if($data == TRUE)
			{
				$this->session->set_flashdata('user_errormsg', 'A verification code has been sent to your email '.$to.'');
			    redirect("login-form");
			}else{
				$this->session->set_flashdata('check_email_msg', '<div class="alert alert-danger text-center">Oops something went wrong!</div>');
			   redirect("registration/forgot-password");
			}
		}else{
			$this->session->set_flashdata('check_email_msg', '<div class="alert alert-danger text-center">This is not an organization email address!</div>');
			 redirect("registration/forgot-password");
		}	
	}

    public function reset_forgot_password(){
    		$this->load->view('Frontend/header');
    		$this->load->view("Frontend/reset_forgot_password");
    		$this->load->view('Frontend/footer');
	}
	public function reset_update_forgot_password(){
		$id = $this->input->post("id");
		$pwd = $this->input->post("password");
		$pwd2 = md5($pwd);

        $password = array("password"=>$pwd2);
        $usr_result = $this->Wanimal->reset_pwd($id, $password);

		if (isset($usr_result) == 1) {
			$this->session->set_flashdata('user_errormsg', 'Password updated successfully.');
			    redirect("login-form");
		}else { 
			var_dump("error");
		}
	}

	public function forgot_username_view(){
		$this->load->view('Frontend/header');
		$this->load->view("Frontend/forgot_username");
	    $this->load->view('Frontend/footer');

	}

	public function send_forgot_username(){

		$to = $this->input->post("email");
		$check_email = $this->Wanimal->check_email($to);
		if (isset($check_email) && !empty($check_email)) {
			
			//var_dump($check_email);die;
			$this->load->helper('email_method_helper');

	        $from = 'sronan@gmail.com';
	        $subject = 'Username Reset';
	        $msg_template = "Your username is ".$check_email[0]['organisation_email']."";
	        
			$data = email_fn($to,$from,$subject,$msg_template);

			if($data == TRUE)
			{
				$this->session->set_flashdata('user_errormsg', 'A verification code has been sent to your email '.$to.' ');
			    redirect("login-form");
			}else{
				$this->session->set_flashdata('check_email_msg', '<div class="alert alert-danger text-center">Oops something went wrong!</div>');
		        redirect("registration/forgot-password");
			}
		}else{
			$this->session->set_flashdata('check_email_msg', '<div class="alert alert-danger text-center">The user name should be the organization email address !</div>');
			 redirect("registration/forgot-password");
		}	
	}

	public function email_link(){
		$mailto = $this->input->post("mailto");
		$from = $this->input->post("sender");
		$fromx = $this->input->post("from");
		$subject = $this->input->post("subject");

		$link = $this->input->post("link");

		//var_dump($mailto);
		$this->load->helper('email_method_helper');

		$data = email_fn($mailto,$from,$subject,$link);
		if ($data == true) {
		    echo "<center><h3><span style='color:white;background-color: #5b85d3;'>Link has been shared successfully!</span></h3></center>";
		}else{
			echo "<center><h3><span style='color:white;background-color: #5b85d3;'>Oops something went wrong!</span></h3></center>";
		 }

	}
	public function check_email(){
		$orgemail = $this->input->post('orgemail');

		if(isset($orgemail) && !empty($orgemail)) {
		  $check_email = $this->Wanimal->check_email($orgemail);
		  if(!empty($check_email)) {
		  	$data = array("flag"=>true);
		  	echo json_encode($data);die;
		  }else{
		  	$data = array("flag"=>false);
			echo json_encode($data);die;
		  }
		}else{
		  	$data = array("flag"=>false);
			echo json_encode($data);die;
		}
	}

	public function delete_dir()
    {
        $id = $this->input->get('id');
        $delete = $this->Wanimal->delete_dir($id);
        // $delete = true;

        if($delete == true) {
           $data = $this->session->get_userdata('mysessdata');
           $data = array("mysessdata"=>$data['mysessdata']);
		   $this->session->unset_userdata('mysessdata');
		   //$this->session->sess_destroy();
           $this->session->set_flashdata('user_errormsg', 'Directory deleted successfully !');
		      redirect("login-form");
        }else{
           $this->session->set_flashdata('update_msg', 'Oops something went wrong!');
	        redirect("registration/profile");
        }
    }


}


    