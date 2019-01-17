<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        // Construct the parent class
         parent::__construct();		
		 $this->load->library('email');
		 $this->load->helper('mail');
		 $this->load->helper('notification');
		 $this->load->library('parser');
		 $this->load->library('session');

		//Get User data in session of user
		$this->data['user'] = ($this->session->userdata('userdetails')) ? $this->session->userdata('userdetails') : '' ;


		if($this->data['user'])
		{
			$where['id'] = $this->data['user']['id'];

			//Get Updated data of user
			$this->data['user'] = $this->admin_m->get_data('users',$where)->row_array();

			$this->user_id 	  	   = $this->data['user']['id'] ;
			$this->auth_level 	   = $this->data['user']['auth_level'] ;
			$this->approval_status = $this->data['user']['approval_status'] ;

			$this->data['userdata']  = $this->data['user'];
			$this->data['user_data']  = $this->data['user'];
			$this->data['user_info']  = $this->data['user'];
		}
		else
		{
			$this->user_id 	       = 0 ;
			$this->auth_level 	   = 0 ;
			$this->approval_status = 0 ;
		}

		$this->data['lang'] = 'en' ;
    }

    public function check_login()
    {	
    	if($this->auth_level!=9) //Logout and redirect
		{
			redirect('admin/logout');
			exit;
		}
    }


	public function login()
	{
		$this->load->view('admin/login',$this->data);
	}


    public function user_authentication()
	{
		$table = 'users';
		$error = array() ;
		$lang  = ($this->input->post('lang')) ? $this->input->post('lang'): "en";
		$data  = $this->input->post('data');

		if(!sizeof($data))
		{
			$message =  ($lang=='en') ? "Please provide valid credentials !" :"يرجى تقديم بيانات الاعتماد صالحة!";
			$result  = ['status'=>0,'message'=>$message];
		}

		if(empty($error))
		{
			$password 		  = $data['password'];
		    $data['password'] = base64_encode($password);

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$data['email']);
			$this->db->or_where('username',$data['email']);
			$this->db->where('password',$data['password']);

			$user = $this->db->get()->row_array();

			if($user['auth_level']==9)
			{
				$this->session->set_userdata('userdetails',$user);
				$this->session->userdata('userdetails');
				
				$message =  ($lang=='en') ? "Welcome Admin :) " :"نرحب الادارية :)";
				$result = ['status'=>1,'message'=>$message];
		    }
		    elseif($user['auth_level']==1)
		    {
		    	$message =  ($lang=='en') ? "Welcome Mr.".$user['username']."  :) " :":) ".$user['username']." مرحبا بالسيد";
				$result = ['status'=>2,'message'=>$message];
		    }
		    else
		    {
		    	$message =  ($lang=='en') ? "Something went wrong Please try again !" :"حدث خطأ ما. أعد المحاولة من فضلك !";
				$result = ['status'=>0,'message'=>$message];
			}
		}

		$json = json_encode($result);

		echo $json ;
	}

/*
	public function login()
	{
		if($this->auth_level==9)
		{ 
			redirect(base_url().'admin/index');
		}
		else
		{
			$this->load->view('home/login');
		}
	}
	*/

	public function logout()
	{
		session_destroy();
		redirect('home/register');
    }


	public function index()
	{		
		$this->check_login();  //Cheking for right user

		$this->data['page_name'] = 'dashboard' ;
		$this->data['total_users']    = $this->db->where('auth_level',1)->get('users')->num_rows();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/index',$this->data);
	}

   public function forgotpassword()
   {
	    $this->load->view('admin/forgotpasswordform'); 
   }


//Start Navigation Links

    public function users()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'users' ;
    	$this->data['users']	 = $this->db->where('auth_level',1)->get('users')->result_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/users',$this->data);

    }

    //newsletter Subscriptions
    public function newsletter_subscriptions()
    {
    	$this->check_login();

    	$this->data['page_name']      = 'newsletter_subscriptions' ;
    	$this->data['main_page_name'] = 'static' ;
    	$this->data['subscriptions']  = $this->db->get('newsletter_subscriptions')->result_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/newsletter_subscriptions',$this->data);

    }

    public function view_userdetails($id)
    {
      $this->check_login();

      $this->data['page_name'] = 'users' ;
	  $this->data['user']      = $this->admin_m->get_data('users',$id);
	  $lang      = $this->data['lang'];

      //echo "<pre>"; print_r($this->data['products']);exit;

	  $this->load->view('admin/includes/header',$this->data);
	  $this->load->view('admin/includes/footer',$this->data);
	  $this->load->view('admin/view_userdetails',$this->data);  
   }


    //Countries
    public function countries()
    {	
    	$this->check_login();

    	$this->data['page_name']  = 'countries' ;
		$this->data['countries']  = $this->db->order_by('priority','desc')->get('countries')->result_array();
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/countries',$this->data);
    }


    //Cities
    public function cities()
    {	
    	$this->check_login();

    	$this->data['page_name'] = 'cities' ;
		$this->data['cities']    = $this->db->select('c.*,co.name as country_name')
											->from('cities as c')
											->join('countries as co','co.id=c.country_id')
											->get()->result_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/cities',$this->data);
    }


    //Successfull Stories
    public function successfull_stories()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'stories';
    	$this->data['stories']   = $this->admin_m->get_data('stories')->result_array();

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/successfull_stories',$this->data);
    }


   //Social Media
   public function add_social_media()
   {
        $this->check_login();

        $id = @$this->input->post('id');

        if($id)
        {
            $this->data['media']  = $this->db->where('id',$id)->get('social_media')->row_array();
        }

        //print_r($this->data['media']);exit;

        $this->load->view('admin/add_social_media',$this->data);
   }


    //Successfull Stories
    public function add_story($story_id="")
    {
    	$this->check_login();

    	if($story_id)
    	{
    		$where['id']   = $story_id ;
    		$this->data['value'] = $this->admin_m->get_data('stories',$where)->row_array();
    	}


    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_story',$this->data);
    }

    //Blog
    public function blogs()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'blog';
    	$this->data['blogs']     = $this->admin_m->get_data('blogs')->result_array();

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/blogs',$this->data);
    }

    //Successfull Stories
    public function add_blog($blog_id="")
    {
    	$this->check_login();

    	if($blog_id)
    	{
    		$where['id']   = $blog_id ;
    		$this->data['value'] = $this->admin_m->get_data('blogs',$where)->row_array();
    	}

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_blog',$this->data);
    }


    //News
    public function news()
    {
        $this->check_login();

        $this->data['page_name'] = 'news';
        $this->data['news']      = $this->admin_m->get_data('news')->result_array();

        $this->load->view('admin/includes/header',$this->data);
        $this->load->view('admin/includes/footer',$this->data);
        $this->load->view('admin/news',$this->data);
    }

    //Add News
    public function add_news($news_id="")
    {
        $this->check_login();

        if($news_id)
        {
            $where['id']         = $news_id ;
            $this->data['value'] = $this->admin_m->get_data('news',$where)->row_array();
        }

        $this->load->view('admin/includes/header',$this->data);
        $this->load->view('admin/includes/footer',$this->data);
        $this->load->view('admin/add_news',$this->data);
    }

    //Events
    public function Events()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'events';
    	$this->data['events']    = $this->admin_m->get_data('events')->result_array();

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/events',$this->data);
    }

    //Successfull Stories
    public function add_event($event_id="")
    {
    	$this->check_login();

    	if($event_id)
    	{
    		$where['id']   = $event_id ;
    		$this->data['value'] = $this->admin_m->get_data('events',$where)->row_array();
    	}

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_event',$this->data);
    }



    //Exhibitions
    public function exhibitions()
    {
    	$this->check_login();

    	$this->data['page_name']   = 'exhibitions';
    	$this->data['exhibitions'] = $this->admin_m->get_data('exhibitions')->result_array();

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/exhibitions',$this->data);
    }

    //Add Exhibitions
    public function add_exhibition($exhi_id="")
    {
    	$this->check_login();

    	if($exhi_id)
    	{
    		$where['id']   = $exhi_id ;
    		$this->data['value'] = $this->admin_m->get_data('exhibitions',$where)->row_array();
    	}

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_exhibition',$this->data);
    }


    //Add Developmetn Map Flow
    public function add_map($map_id="")
    {
    	$this->check_login();

    	if($map_id)
    	{
    		$where['id']   = $map_id ;
    		$this->data['value'] = $this->admin_m->get_data('development_map',$where)->row_array();
    	}

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_map',$this->data);
    }


    //Gallery Albums
    public function gallery_albums()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'gallery_albums';

    	$albums = $this->admin_m->get_data('gallery_albums')->result_array();

    	foreach ($albums as $key => $album) 
    	{
    		$gallery = $this->db->where('album_id',$album['id'])->get('gallery')->result_array();

    		$albums[$key]['gallery'] = $gallery ;
    	}

    	$this->data['albums'] = $albums ;

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/gallery_albums',$this->data);
    }


    //Media databases
    public function databases()
    {
    	$this->check_login();

    	$this->data['main_page_name']  = 'media_databases';
    	$this->data['page_name'] 	   = 'databases';
    	$this->data['media_databases'] = $this->admin_m->get_data('media_databases')->result_array();


    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/databases',$this->data);
    }

    //add database
    public function add_database()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	$this->data['value'] = $this->admin_m->get_data('media_databases',['id'=>$id])->row_array();

		$this->load->view('admin/add_database',$this->data);
    }

   //Databse sites
    public function sites()
    {
    	$this->check_login();

    	$this->data['main_page_name'] = 'media_databases';
    	$this->data['page_name'] 	  = 'sites';
    	$this->data['media_sites']    = $this->db->select('s.*,d.title_en as database_name')
    											 ->order_by('s.database_id','desc')
    											 ->from('database_sites as s')
    											 ->join('media_databases d','d.id=s.database_id')
    											 ->get()->result_array();

    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/sites',$this->data);
    }

    //Add site
    public function add_site($site_id='')
    {
    	$this->check_login();

    	$this->data['value'] = $this->admin_m->get_data('database_sites',['id'=>$site_id])->row_array();

    	$this->data['databases'] = $this->admin_m->get_data('media_databases')->result_array();


    	$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_site',$this->data);
    }



//End Navigation Links


/*	//Forgot Password
    public function send_link($table)
    {
       $data = $this->input->post('data');
       $email = $data['email'];

            if(!$this->check_user_email($email))
            {
                $data = $this->db->select('id as user_id,email,username')
                                 ->get_where('users',array("email"=>$email,'auth_level'=>9))
                                 ->row_array();

                            $this->load->library('email');                
                            $this->load->helper('crypt');
                            $this->load->helper('mail');

                                            
                            $recovery_code = $this->RandomString();

                            $this->db->set(array('passwd_recovery_code'=>$recovery_code,'passwd_recovery_date'=>date('Y-m-d h:i:s')))->where('id',$data['user_id'])->update('users');

                            $link_protocol   = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https' : 'http';
                            $link_uri        = 'home/reset_password/' . encrpt($data['user_id']) . '/' . $recovery_code.'/'.encrpt(time());

                           $this->data['special_link'] =  $link_uri ; 


                           $this->data['username']     = $data['username'];

                           //echo $this->data['special_link'] ;exit;

                           $template = $this->load->view('mail_template',$this->data,true); 

                           send_mail($data['email'],'Engineering Works Password Change',$template);

                          echo 1;
            }
            else
            {
                echo 0;
            }  
    }

   public  function RandomString()
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 50; $i++) 
    {
         $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
    }
    return $randstring;
  }

  	//Check user email
	public function check_user_email($email) 
	{
	    if (count($this->db->get_where("users",array("email"=>$email))->row_array()) > 0) 
	    {
	        return FALSE;
	     }
	    else
	    {
	        return TRUE;
	    }          
	}
*/


   // SMS Page
   public function sms_page()
   {
   		$this->check_login();

		$this->data['userdata'] 	= $this->session->userdata['userdetails'];
		$this->data['page_name'] 	= 'sms';

		$this->data['users']	= $this->admin_m->usersdata();
		$this->data['sp']	    = $this->admin_m->serviceproviders(); 

		//print_r($this->data['users']);exit;
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer');
		$this->load->view('admin/sms_page',$this->data);
   }


	//Save data  from admin pages
	public function save_data($table,$table2="")
	{
		// $image_flag argument checks whether file is passing or not
		// $table2  argument checks for second table to store data related to $table

		$this->check_login();

		$data = array();

		$data 		 = $this->input->post('data');
		$id   		 = $this->input->post('id');
		$old_image   = @$this->input->post('old_image');


		//Selecting path based on table for file uploading
		$tables = [
					'banners'        		 => 'assets/uploads/banners/',
					'index_banners'  		 => 'assets/uploads/index_banners/',
					'index_banners_content'  => 'assets/uploads/index_banners_content/',
					'about_us' 	 	 		 => 'assets/uploads/about_us/',
					'users'    		 		 => 'assets/uploads/user_profiles/',
					'gallery_albums' 		 => 'assets/uploads/gallery_albums/',
					'gallery'  		 		 => 'assets/uploads/gallery/',
					'database_sites' 		 => 'assets/uploads/database_sites/',
					'blogs' 		 		 => 'assets/uploads/blogs/',
					'development_map' 		 => 'assets/uploads/development_map/',
                    'exhibitions'            => 'assets/uploads/exhibitions/',
					'news' 		             => 'assets/uploads/news/',
				   ] ;


	
		if(!empty($_FILES['file']['name']))
		{	
			$path = $tables[$table] ;

			if($table=='index_banners')
			{
				$file_formats = ['AVI', 'FLV', 'WMV', 'MOV' ,'MP4'] ;

				$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

				$data['file_type'] = (in_array(strtoupper($ext), $file_formats)) ? 1 : 0 ;
			}

			$image = $this->upload_files($table,$path) ;

			$data['image'] = ($image['image']) ? : '' ;

			if($data['image'])
			{
				@unlink($old_image);
			}
		}
		else
		{
			if($old_image)
			{
				$data['image'] = $old_image ;
			}
		}

		if($id)
		{
			$this->db->set($data)->where('id',$id)->update($table);
			$this->session->set_flashdata('success','Data Updated Successfully');
			echo 1;
		}
		else
		{
			$this->db->insert($table,$data);
			$this->session->set_flashdata('success','Data Inserted Successfully');
			echo 2;
		}

	}   


   	//Delete data from admin pages
   public function delete($table)
   {	
		$this->check_login(); //Check for right user

		$id = $this->input->post('id');

		if($table=='banners')
		{
			$images = $this->db->select('image')->where('id',$id)->get('banners')->result_array();

			delete_files($images,'image');
		}

		if($id)
		{
			$this->db->delete($table, array('id' => $id));
			$this->session->set_flashdata('success','Data Deleted Successfully');
			echo 1;
		}
		else
		{
			echo 0 ;
		}
	}


   public function comission_mng()
   {
   		$this->check_login();

	   if($this->session->userdata('userdetails')) 
	   { 
		   if($this->session->userdata['userdetails']['auth_level']) 
		   { 
				if($this->session->userdata['userdetails']['role'] =='admin')
				{

					$fromdate  = $this->input->post('from_date');
					$from 		= date('Y-m-d',strtotime($fromdate));	
					$todate 	= $this->input->post('to_date');
					$to 		= date('Y-m-d',strtotime($todate));

					if($from!='1970-01-01' && $to!='1970-01-01')
					{
					 	$session_datesdata = array (
	                									'fromdate'    => $from,
	                									'todate'        => $to
	                								);
					
				    	$this->session->set_userdata('searchfrom',$from);
				    	$this->session->set_userdata('searchto',$to);
				    	$this->data['searchdatedetails'] = $this->session->userdata['searchdates'];
					 
					}

					$this->data['userdata'] 		   = $this->session->userdata['userdetails'];
					$this->data['serviceproviderdata'] = $this->db->where('banned',0)->where('auth_level',5)-get('users')->result_array();
					//print_r($this->data['serviceproviderdata']);
					//exit;
					$this->data['page_name'] = 'comission';

		           $this->data['subpage_name'] = 'total';  

					$this->load->view('admin/includes/header',$this->data);
					$this->load->view('admin/includes/footer');
					$this->load->view('admin/comission_mng',$this->data);	
				}
		   }
	   }
	   else
	   {
		   redirect(base_url().'admin/login');
		   
	   }  
	   
   }

   	//Load modal (Pop up)
	public function modal($template_name,$table)
	{
		$this->check_login();

		$modal = "admin/".$template_name ;

		$where['id'] = $this->input->post('id');

		$data['value'] = ($where['id']) ? $this->admin_m->get_data($table,$where)->row_array() : '' ;


		if($table=='cities')
		{
			$data['countries'] = $this->admin_m->get_data('countries')->result_array();
		}


		$this->load->view($modal,$data);  
	}


	public function add_album()
	{
		$this->check_login();

		$where['id'] = $this->input->post('id');

		$data['value'] = ($where['id']) ? $this->admin_m->get_data('gallery_albums',$where)->row_array() : '' ;

		$this->load->view('admin/add_album',$data);  
	}


	public function add_gallery($album_id="")
	{
		$this->check_login();

		$where['id'] = $this->input->post('id');

		if($where['id'])
		{
			$at['album_id']  = $where['id'];
			$data['gallery'] = $this->admin_m->get_data('gallery',$at)->result_array();
		}

		$data['albums'] = $this->admin_m->get_data('gallery_albums')->result_array();
		$data['album_id'] = $where['id'];
		

		$this->load->view('admin/add_gallery',$data);  
	}

	public function save_gallery($table)
	{
		$this->check_login();

		$data = $this->input->post('data');

		if(@$_FILES['files']['name'])
		{
			$images = $this->upload_files($table,'assets/uploads/gallery/',1) ;

			foreach ($images as $key => $image) 
			{
				$data['image'] = $image['image'] ; 
				
				$this->db->insert('gallery',$data);
			}
			echo 1;
		}
	}

	public function save_about_us()
	{
		$this->check_login();

		$table = "about_us";
		$id    = $this->input->post('id');
		$data  = $this->input->post('data');
		$old_image1  = $this->input->post('old_image1');
		$old_image2  = $this->input->post('old_image2');
		$old_image3  = $this->input->post('old_image3');


		if(!empty($_FILES['file']['name']))
		{
			$image = $this->upload_files($table,'assets/uploads/about_us/') ;

			$data['image1'] = $image['image'] ; 

			@unlink($old_image1);  //Delete old file 
		}
		else
		{
			$data['image1'] = $old_image1 ; 
		}

		if(!empty($_FILES['files']['name'][0]))
		{
			$images = $this->upload_files($table,'assets/uploads/about_us/',1) ;

			$data['image2'] = $images[0]['image'] ;

			@unlink($old_image2); //Delete old file 
		}
		else
		{
			$data['image2'] = $old_image2 ; 
		}

		if(!empty($_FILES['image']['name']))
		{
				$path = 'assets/uploads/about_us/' ;

			    $file_name = 'image'.time();

	            $_FILES['image']['name']     = $_FILES['image']['name'];
	            $_FILES['image']['type']     = $_FILES['image']['type'];
	            $_FILES['image']['tmp_name'] = $_FILES['image']['tmp_name']; 
	            $_FILES['image']['size']     = $_FILES['image']['size']; 

	            $uploadPath              =  $path;
	            $config['upload_path']   =  $uploadPath;
	            $config['allowed_types'] = '*';
	            $config['file_name']     =  $file_name;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            
	            if($this->upload->do_upload('image'))
	            {
	                $fileData = $this->upload->data();

	                $uploadData['file_name'] = $fileData['file_name']; 
	            }
	            else
	            {
	                $error_img = $this->upload->display_errors();
	                print_r($error_img);
	                exit;
	            }

	            $data['image3'] = $uploadPath.$fileData['file_name'] ;

	            @unlink($old_image3); //Delete old file 
		}
		else
		{
			$data['image3'] = $old_image2 ; 
		}


		if($id)
		{
			$this->db->set($data)->where('id',$id)->update($table);
			$this->session->set_flashdata('success','Data Updated Successfully');
			echo 1;
		}
		else
		{
			$this->db->insert($table,$data);
			$this->session->set_flashdata('success','Data Inserted Successfully');
			echo 2;
		}

	}

	public function save_events()
	{
		$this->check_login();

		$table 		 = "events";
		$id    		 = $this->input->post('id');
		$data  		 = $this->input->post('data');
		$old_image1  = $this->input->post('old_image1');
		$old_image2  = $this->input->post('old_image2');

		//print_r($_FILES);exit;

		if($_FILES['org_logo']['error']==0)
		{
				$path = 'assets/uploads/org_logos/' ;

			    $file_name = 'image'.time();

	            $_FILES['image']['name']     = $_FILES['image']['name'];
	            $_FILES['image']['type']     = $_FILES['image']['type'];
	            $_FILES['image']['tmp_name'] = $_FILES['image']['tmp_name']; 
	            $_FILES['image']['size']     = $_FILES['image']['size']; 

	            $uploadPath              =  $path;
	            $config['upload_path']   =  $uploadPath;
	            $config['allowed_types'] = '*';
	            $config['file_name']     =  $file_name;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            
	            if($this->upload->do_upload('org_logo'))
	            {
	                $fileData = $this->upload->data();

	                $uploadData['file_name'] = $fileData['file_name']; 
	            }
	            else
	            {
	                $error_img = $this->upload->display_errors();
	                print_r($error_img);
	                exit;
	            }

	            $data['org_logo'] = $uploadPath.$fileData['file_name'] ;

	            @unlink($old_image2); //Delete old file 
		}
		else
		{
			$data['org_logo'] = $old_image2 ; 
		}


		if($_FILES['image']['error']==0)
		{
				$path = 'assets/uploads/event_images/' ;

			    $file_name = 'image'.time();

	            $_FILES['image']['name']     = $_FILES['image']['name'];
	            $_FILES['image']['type']     = $_FILES['image']['type'];
	            $_FILES['image']['tmp_name'] = $_FILES['image']['tmp_name']; 
	            $_FILES['image']['size']     = $_FILES['image']['size']; 

	            $uploadPath              =  $path;
	            $config['upload_path']   =  $uploadPath;
	            $config['allowed_types'] = '*';
	            $config['file_name']     =  $file_name;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            
	            if($this->upload->do_upload('image'))
	            {
	                $fileData = $this->upload->data();

	                $uploadData['file_name'] = $fileData['file_name']; 
	            }
	            else
	            {
	                $error_img = $this->upload->display_errors();
	                print_r($error_img);
	                exit;
	            }

	            $data['image'] = $uploadPath.$fileData['file_name'] ;

	            @unlink($old_image1); //Delete old file 
		}
		else
		{
			$data['image'] = $old_image1 ; 
		}


		if($id)
		{
			$this->db->set($data)->where('id',$id)->update($table);
			$this->session->set_flashdata('success','Data Updated Successfully');
			echo 1;
		}
		else
		{
			$this->db->insert($table,$data);
			$this->session->set_flashdata('success','Data Inserted Successfully');
			echo 2;
		}

	}


//========== Website Info Navigation Tabs START  ================================================

   public function privacy()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'privacy';
		$this->data['main_page_name'] = 'info';

		$where['id'] = 1 ;
		$this->data['getdata']   = $this->db->get('privacy')->row_array();
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/privacy',$this->data);
			
   }

   public function terms()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'terms';
		$this->data['main_page_name'] = 'info';

		$this->data['getdata']  = $this->db->get('terms')->row_array();


		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/terms',$this->data);
   }


   public function faq()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'faq';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->db->get('faq')->row_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/faq',$this->data);
   }

   public function help()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'help';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->db->get('help')->row_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/help',$this->data);
   }



   public function contact_details()
   {
   		$this->check_login();

		$this->data['userdata']    = $this->session->userdata['userdetails'];
		$this->data['contactdata'] = $this->admin_m->contact_details();
		$this->data['page_name']   = 'contact_details';
		$this->data['main_page_name'] = 'info';

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/contact_details',$this->data); 
   }


   public function save_static_data($table)
   {

   	 $this->check_login();

	 $data = $this->input->post('data');
     $id = $this->input->post('pid');

		if($id)
		{
		 	$this->session->set_flashdata('success','Data Updated Successfully');
	     	$this->db->set($data)->where('id',$id)->update($table);
		 	echo json_encode(["status"=>"success","message"=>"Data Updated successfully"]);	
		}
		else
		{
			$this->session->set_flashdata('success','Data Inserted Successfully');
	        $this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
		}
	
   }



//========== Website Info Navigation Tabs END  =======================================================


//========== Website Static data Navigation Tabs START  ==============================================

	//Banners
    public function banners()
    {	
    	$this->check_login();

    	$this->data['main_page_name'] = 'static';
    	$this->data['page_name'] = 'banners' ;

		$this->data['banners'] 	= $this->admin_m->get_data('banners')->result_array();
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/banners',$this->data);
    }  


	//Index Banners
    public function index_banners()
    {	
    	$this->check_login();

    	$this->data['main_page_name'] = 'static';
    	$this->data['page_name']      = 'index_banners' ;

		$index_banners  = $this->admin_m->get_data('index_banners')->result_array();

		foreach ($index_banners as $key => $banner) 
		{
			$content = $this->db->where('index_banner_id',$banner['id'])->get('index_banners_content')->row_array();
			if($content)
			{
				$content['content_id'] = $content['id'];
				$index_banners[$key]['content'] = $content;
			}
		}

		$this->data['index_banners'] = $index_banners;

	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/index_banners',$this->data);
    }

    //add Index Banners content
    public function add_index_banner_content($index_banner_id,$content_id=0)
    {	
    	$this->check_login();

    	$this->data['main_page_name'] = 'static';
    	$this->data['page_name']      = 'index_banners' ;

    	if($content_id)
    	{
    		$where['id']         = $content_id ;
			$this->data['value'] = $this->admin_m->get_data('index_banners_content',$where)->row_array();
    	}

	
		$this->data['index_banner_id'] = $index_banner_id ;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/add_index_banner_content',$this->data);
    }

   public function contactus()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['data']      = $this->admin_m->admincontact();
		$this->data['page_name'] = 'contact_us';
		$this->data['main_page_name'] = 'info';

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/admincontact',$this->data);
   }


   public function about_us()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'about_us';
		$this->data['main_page_name'] = 'static';

		$where['id'] = 1;
		$this->data['about_us']       = $this->admin_m->get_data('about_us',$where)->row_array();


		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/about_us',$this->data);	
   }


   public function development_map()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'map';
		$this->data['main_page_name'] = 'static';

		$this->data['maps']  = $this->admin_m->get_data('development_map')->result_array();


		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/development_map',$this->data);	
   }

   public function contact()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'contact';
		$this->data['main_page_name'] = 'static';

		$where['id'] = 1;
		$this->data['contact_us']     = $this->admin_m->get_data('contact_us',$where)->row_array();
		

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/contact_us',$this->data);	
   }

   public function social_media()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'social_media';
		$this->data['main_page_name'] = 'static';

		$this->data['social_media']   = $this->db->get('social_media')->result_array();
		
		//echo "<pre>"; print_r($this->data);exit;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/social_media',$this->data);	
   }


//========== Website Static data Navigation Tabs END  ==============================================


//====================== Admin Profile Pages START ================================================ 

   //Profile Page
   public function profile($id="")
   {
		$this->check_login();

		$this->data['profiledata'] = $this->data['user'];
    	$this->data['cities']      = $this->admin_m->get_data('cities')->result_array();

    	$this->load->view('admin/includes/header',$this->data);
    	$this->load->view('admin/profile',$this->data); 
		$this->load->view('admin/includes/footer');
    	
   }
   
   //Update User Profile
   public function update_user()
   {
   		$this->check_login();

   		$table = 'users';
		$data  = $this->input->post('data');
		$id    = $data['id'];
	
	    if(!empty($_FILES['image']['name']))
	    {
           $config['upload_path']   = 'assets/uploads/user_profiles/';
           $config['allowed_types'] = 'jpg|jpeg|png|gif';
           $config['file_name']     = $_FILES['image']['name'];
                  
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
             
           if($this->upload->do_upload('image'))
           {
	           $uploadData = $this->upload->data();
	           $data['image'] = $config['upload_path'].$uploadData['file_name'];
           }
           else
           {
          	  $data['image'] = '';
           }
        }
        else
        {
        	 $data['image'] = $this->input->post('old_image');
        }
		
		if($id)
		{
		   $this->session->set_flashdata('success','Profile Updated Successfully');
           $this->db->set($data)->where('id',$id)->update($table);
		   
		   echo json_encode(["status"=>"success","message"=>"Profile Updated successfully"]);
		}
	 
   }

   //Password Update
   public function update_password($table)
   {
	
	    $data 		= $this->input->post('data2');
		$user_id    = $data['id'];

		$old_password  = base64_encode($data['password']);
		$new_password  = base64_encode($data['new_pass']);

		$res = $this->db->where('id',$user_id)->get('users')->row_array();

		$db_pass = $res['password']; //Old endcoded password in DB

		if($db_pass===$old_password)
		{
	        $this->db->set('password',$new_password)->where('id',$user_id)->update($table);
	        $this->session->set_flashdata('success','Password Updated Successfully');
			echo json_encode(["status"=>"success","message"=>"Password Updated successfully"]);
		}
		else
		{
			echo json_encode(["status"=>"error","message"=>"Old Password is Incorrect !"]);
		}
   }


	//Forgot Password
    public function send_link()
    {

       $table = 'users' ;

       $email = $this->input->post('email');

        $data = $this->db->select('id as user_id,email,username')
                         ->or_where('email',$email)
                         ->or_where("username",$email)
                         ->get('users')->row_array();

        //print_r($data);exit;

        $this->load->library('email');                
        $this->load->helper('crypt');
        $this->load->helper('mail');

                        
        $recovery_code = $this->RandomString();


        $this->db->set(array('passwd_recovery_code'=>$recovery_code,'passwd_recovery_date'=>date('Y-m-d h:i:s')))->where('id',$data['user_id'])->update('users');

        $link_protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https' : 'http';
        $link_uri      = 'home/reset_password/'.encrpt($data['user_id']).'/'.$recovery_code.'/'.encrpt(time());

        $this->data['special_link'] = $link_uri;

        $this->data['username']     = $data['username'];

        $template = $this->load->view('mail_template',$this->data,true); 

        $flag = send_mail($data['email'],'MEDIA Password Change',$template);

        echo $flag;
    }



//====================== Admin Profile Pages END ====================================================


//====================== Helper Functions Start =====================================================

    //Random String Generation
	public  function RandomString()
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < 50; $i++) 
	    {
	         $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
	    }
	    return $randstring;
	}

	//Files Uploading function
	public function upload_files($folder='other',$path="assets/uploads/other",$multiple=FALSE)
	{

	    if(isset($_FILES['files']) && $multiple)
	    {
	        if (!file_exists(FCPATH.'assets/uploads/'.$folder)) { mkdir(FCPATH.'assets/uploads/'.$folder,0777,true); } 

	        foreach($_FILES['files']['name'] as $key => $value)
	        {
	            $file_name = 'image'.time();

	            $_FILES['file']['name']     = $_FILES['files']['name'][$key];
	            $_FILES['file']['type']     = $_FILES['files']['type'][$key];
	            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$key]; 
	            $_FILES['file']['size']     = $_FILES['files']['size'][$key]; 

	            $uploadPath              =  $path;
	            $config['upload_path']   =  $uploadPath;
	            $config['allowed_types'] = '*';
	            $config['file_name']     =  $file_name;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            
	            if($this->upload->do_upload('file'))
	            {
	                $fileData = $this->upload->data();

	                $uploadData[$key]['file_name'] = $fileData['file_name']; 
	            }
	            else
	            {
	                $error_img = $this->upload->display_errors();
	                print_r($error_img);
	                exit;
	            }

	            $files[] = array('image'=>$uploadPath.$fileData['file_name']);
	        }

	        return $files ;
	    }

	    if(isset($_FILES['file']) && $multiple==FALSE)
	    {
	        if (!file_exists(FCPATH.'assets/uploads/'.$folder)) { mkdir(FCPATH.'assets/uploads/'.$folder,0777,true); }     

            $file_name = 'image'.time();

            $_FILES['file']['name']     = $_FILES['file']['name'];
            $_FILES['file']['type']     = $_FILES['file']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['file']['tmp_name']; 
            $_FILES['file']['size']     = $_FILES['file']['size']; 

            $uploadPath              =  $path;
            $config['upload_path']   =  $uploadPath;
            $config['allowed_types'] = '*';
            $config['file_name']     =  $file_name;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('file'))
            {
                $fileData = $this->upload->data();

                $uploadData['file_name'] = $fileData['file_name']; 
            }
            else
            {
                $error_img = $this->upload->display_errors();
                print_r($error_img);
                exit;
            }

	        $file = array('image'=>$uploadPath.$fileData['file_name']); 
	       
	        return $file;
	    }
	}


//====================== Helper Functions END =====================================================


//====================== END of Controller ========================================================

}


function days_ago($date_time)
{
 //Calculating Days
    $past_date  = strtotime($date_time) ;

    $past_date    = date('Y-m-d',$past_date);
    $present_date = date('Y-m-d');
   
    $diff     = strtotime($present_date)-strtotime($past_date);

    $years  = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $weeks  = floor($days/7);

    $days_ago = '';

    if($days==0)
    {
        $days_ago = 'Today';
    }

    if($days>=1)
    {
       $days_ago  = $days.(($days==1) ? ' day ' : ' days ').'ago';
    }

/*        if($weeks>=1)
    {
       $days_ago  = $weeks.(($weeks==1) ? ' Week ' : ' Weeks ').'ago';
    }

    if($months>=1)
    {
      $days_ago  = $months.(($months==1) ? ' Month ' : ' Months ').'ago';
    }

    if($years>=1)
    {
      $days_ago  = $years.(($years==1) ? ' Year ' : ' Years ').'ago';
    }*/

    return $days_ago;
}


function delete_files($array_of_files,$type="")
{
	$type = ($type) ? $type : 'image' ;

	foreach ($array_of_files as $key => $file) 
	{
		$file = $file[$type] ;

		unlink($file);
	}
}