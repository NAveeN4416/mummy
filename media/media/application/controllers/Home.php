<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
  {
          // Construct the parent class
  		parent::__construct();

      $this->load->library('session');
  		
  		if($this->session->userdata('lang')) 
  		{
  			$language = $this->session->userdata('lang');
  		} 
  		else 
  		{
  			$this->session->set_userdata('lang','en');
        $language = 'en';
  		}

      $this->lang->load('main', $language);

      //Let user redirect to login if not admin
      $this->user = ($this->session->userdata('userdetails')) ? $this->session->userdata('userdetails') : '' ;

      if($this->user)
      {
        $this->user = $this->admin_m->get_data('users',$this->user['id'])->row_array();

        $this->user_id      = $this->user['id'] ;
        $this->auth_level   = $this->user['auth_level'] ;

        $this->data['userdata']  = $this->user;
        $this->data['user_info'] = $this->user;
        $this->data['user_id']   = $this->user_id ;
      }
      else
      {
        $this->user_id    = 0 ;
        $this->auth_level = 0 ;
      }

      //Common data
      //$this->data['countries']     = $this->db->where_in('priority','1,2')->get('countries')->result_array();
  		//$this->data['cities']        = $this->db->get('cities')->result_array();

      $this->data['about_us']        = $this->home_m->get_data('about_us')->row_array();
      $this->data['development_map'] = $this->home_m->get_data('development_map')->result_array();
      $this->data['social_media']    = $this->db->where('status',1)->get('social_media')->result_array();
      $this->data['blogs']           = array_reverse($this->home_m->get_data('blogs')->result_array());
      $this->data['exhibitions']     = array_reverse($this->home_m->get_data('exhibitions')->result_array());
      $this->data['events']          = array_reverse($this->home_m->get_data('events')->result_array());

      
      //echo $language;exit;

      $this->data['lang']          = $language ;


    //Loading banners data based on page

        //Explode the current url and find the method name
        $present_url = current_url();

        $array = explode('/', $present_url);

        $method_name =   isset($array[5]) ? $array[5]  : '' ; //At 5th index we can find the method name from url


        //Static ids from database table - 'banners' { Add ids to load banners on adding in admin if any }
        $pages = [
                    'blog'                  => '1',
                    'about'                 => '2',
                    'stories'               => '3',
                    'events'                => '4',
                    'gallery_albums'        => '5',
                    'gallery'               => '6',
                    'media_database'        => '7',
                    'contact'               => '8',
                    'register'              => '9',
                    'index_banner_content'  => '10',
                    'news'                  => '11',
                    'event_details'         => '12',
                  ];

        if(isset($pages[$method_name]))
        { 
          $where['id'] = $pages[$method_name] ;
          $this->data['banners'] = $this->home_m->get_data('banners',$where)->row_array();
        }

    //print_r($this->data['banners']);exit;
  }


  public function check_login()
  { 
    if($this->auth_level!=9 || $this->auth_level!=1) //Logout and redirect
    {
      redirect('admin/logout');
      exit;
    }
  }


  //Gateway in Writing Reponse
  public function load_pages($body,$data)
  {
      $page_path =  'frontend/pages/'.$body ;

      $this->load->view('frontend/includes/header',$data);
      $this->load->view($page_path,$data);
      $this->load->view('frontend/includes/footer',$data);
  }


  //Load Index Page - Home page
	public function index()
	{
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page'] = 'home' ;


      //Getting data
      $index_banners   = $this->home_m->get_data('index_banners')->result_array();

      foreach ($index_banners as $key => $i_banner) 
      {
        $content = $this->db->where('index_banner_id',$i_banner['id'])->get('index_banners_content')->num_rows();

        $index_banners[$key]['flag'] = ($content) ? 1 : 0 ;
      }

      $this->data['gallery_albums']  = array_reverse($this->home_m->get_data('gallery_albums')->result_array());
      $this->data['stories']         = array_reverse($this->home_m->get_data('stories')->result_array());
      $this->data['index_banners']   = $index_banners;
   

      $body = 'index' ;

      $this->load_pages($body,$this->data);

	}


  //Load Index Banner Content
  public function index_banner_content($content_id="")
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page'] = 'content' ;

      if($content_id)
      {
        $where['id']           = $content_id ;
        $this->data['content'] = $this->home_m->get_data('index_banners_content',$where)->row_array();
      }
      else
      {
        echo 'The Url you are redirected is wrong Please wait until we redirect you....';
        exit;
      }


      $body = 'content' ;

      $this->load_pages($body,$this->data);

  }


  //Load About Page
  public function about()
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page']  = 'about' ;


      $body = 'about' ;

      $this->load_pages($body,$this->data);

  }


  //Load Successfull Stories Page
  public function stories()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page']     = 'stories' ;

    $this->data['stories']  = array_reverse($this->home_m->get_data('stories')->result_array());


    $body = 'stories' ;

    $this->load_pages($body,$this->data);

  }

  
  //Load Blog Page
  public function blog()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'blog' ;

    $body = 'blog' ;

    $this->load_pages($body,$this->data);

  }


  //Load News Page
  public function news()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'news' ;

    $body = 'news' ;

    $this->load_pages($body,$this->data);
  }


  //Load Events Page
  public function events()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'events' ;

    $body = 'events' ;

    $this->load_pages($body,$this->data);
  }


  //Load Events Details Page
  public function event_details($event_id="")
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page'] = 'event_details' ;

      if($event_id)
      {
          $this->data['event_details'] = $this->db->where('id',$event_id)->get('events')->row_array();
      }

      $events = $this->db->where('id!=',$event_id)->get('events')->result_array() ;

      $this->data['events'] = array_chunk($events, 3);


      $body = 'event_details' ;

      $this->load_pages($body,$this->data);
  }


  //Load Gallery Albums Page
  public function gallery_albums()
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page'] = 'gallery' ;
      $this->data['gallery_albums'] = $this->home_m->get_data('gallery_albums')->result_array();

      $body = 'gallery_albums' ;

      $this->load_pages($body,$this->data);
  }


  //Load Album Gallery Page
  public function gallery($album_id="")
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page']    = 'gallery' ;

      $where['album_id']     = $album_id;
      $this->data['gallery'] = $this->home_m->get_data('gallery',$where)->result_array();

      $body = 'gallery' ;

      $this->load_pages($body,$this->data);
  }

  //Load Media Database Page
  public function media_database()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'media_database' ;

    $media_databases = $this->db->get('media_databases')->result_array() ;

    foreach ($media_databases as $key => $value) 
    {	
    	$sites 	= $this->db->select('*,id as site_id')
    					   ->where('database_id',$value['id'])
    					   ->get('database_sites')->result_array();
    
    	$media_databases[$key]['sites'] = array_chunk($sites,4);
    }

    $this->data['media_databases'] = $media_databases;

    $body = 'media_database' ;

    $this->load_pages($body,$this->data);							  

  }


  //Load Media Center Page
  public function media_center()
  {
      $lang    = $this->data['lang'];
      $user_id = $this->user_id;

      $this->data['page'] = 'media_center' ;

      $body = 'media_center' ;

      $this->load_pages($body,$this->data);   
  }


  //Load Contact Us Page
  public function contact()
  {

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'contact_us' ;

    $body = 'contact' ;

    $this->load_pages($body,$this->data); 

  }


  //Load Register Page
	public function register()
	{
    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'register' ;

    $body = 'register_login' ;

    $this->load_pages($body,$this->data);
	}


  //Get User login
  public function user_authentication()
  {
      $table = 'users' ;
      $error = array() ;
      $lang  = 'en'    ;
      $data  = $this->input->post('data');

        $password         = $data['password'];
        $data['password'] = base64_encode($password);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$data['email']);
        $this->db->or_where('phone_number',$data['email']);
        $this->db->where('password',$data['password']);

        $user = $this->db->get()->row_array();

        if($user)
        {
            $this->session->set_userdata('userdetails',$user);
            $this->session->userdata('userdetails');
        }


        if($user['auth_level']==9)
        {
          $message =  ($lang=='en') ? "Welcome Admin :) " :"نرحب الادارية :)";

          $result = ['status'=>1,'message'=>$message];
        }
        elseif($user['auth_level']==1)
        {
          $message =  ($lang=='en') ? "Welcome Mr.".$user['first_name']."  :) " :":) ".$user['first_name']." مرحبا بالسيد";

          $result = ['status'=>2,'message'=>$message];
        }
        else
        {
          $message =  ($lang=='en') ? "Please provide valid Credentials" : "يرجى تقديم بيانات اعتماد صالحة";

          $result = ['status'=>0,'message'=>$message];
        }

    $json = json_encode($result);

    echo $json ;

  }


//Generate Username
  public function generate_username($username)
  {
      $org = $username ;

      $random = RandomString(3);

      $username = $username.$random;

      $at['username'] = $username;

      $flag = $this->home_m->check_data('users',$at);

      if($flag)
      {
         $this->generate_username($org);
      }
      else
      {
        return $username ;
      }
  }

	public function save_user()
	{
        $error = array();
        $data  = $this->input->post('data');

        //print_r($data);exit;

        //Reading data
        $lang             = $this->data['lang'];
        $first_name       = $data['first_name'];
        $last_name        = $data['last_name'];
        $mobile           = $data['phone_number'];
        $email            = $data['email'];
        $password         = $data['password'];
        $type             = $data['type'];


/*
        if($phonecode=="")
        {
            $error[] = ($lang=='en')? "Phone Code id is Required" :"أدخل بريد إلكتروني صالحا";
        }
        else
        {
           $country =  $this->db->select('sortname,phonecode')
                                ->where('id',$phonecode)
                                ->get('countries')->row();

           $user_data["country_code"] =  $country->sortname;
           $user_data["phone_code"]   =  $country->phonecode;
        }

*/
        if($mobile == "") 
        {
            $error[] =  ($lang=='en')? "Mobile is Required" :"أدخل بريد إلكتروني صالحا";
        } 
        else 
        {
            if ($this->check_user_mobile($mobile)) 
            {
              $user_data["phone_number"] = $mobile ;
            } 
            else 
            {
              $error[] = ($lang=='en')? "Mobile already in Use":"تم استخدام البريد الإلكتروني من قبل";
            }   
        }    


        if ($email != "") 
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $error['email'] =  ($lang=='en')? "Enter valid email" :"أدخل بريد إلكتروني صالحا";
            } 
            else 
            {
                if ($this->check_user_email($email))
                {
                  $user_data["email"] = $email;
                } 
                else 
                {
                  $error[] = ($lang=='en')? "Email already Used":"تم استخدام البريد الإلكتروني من قبل";
                }   
            }
        }    
        else 
        {
            $error[] = ($lang=='en')? "Email is Required" :"البريد الالكتروني مطلوب";
        }

//Password
        if($password!="")
         {  
            if($password<6)
            {
              $error[] = ($lang=='en')? 'Password should contain alteast 6 charaters !' : "يجب أن تحتوي كلمة المرور على مؤثرات alteast 6!";
            }

            $user_data['password']  =  base64_encode($password);
         } 
         else 
         {
            $error[] = ($lang=='en')? 'Password is required' : "كلمة المرور مطلوبة";
         }

/*
//User Name
        if ($username!= "") 
        {
           $at['username'] = $username ;

           $exist_flag = $this->home_m->check_data('users',$at);

           if($exist_flag)
           {
              $suggestion = $this->generate_username($username);

              $error[] = ($lang=='en')? 'Username already exist you can use '.$suggestion : "كلمة المرور مطلوبة";
           }

           $user_data["username"] =  $username;

           unset($at);
        }
        else
        {
           $error['username'] =  ($lang=='en')? "User Name is required" : "مطلوب موبايل";
        }
*/

        $user_data['created_at']       = date('Y-m-d H:i:s');
        $user_data["auth_level"]       = 1 ;
        $user_data["role"]             = "user";
        $user_data["approval_status"]  = 1 ;
        $user_data["type"]             = $type ;

    if(empty($error)) 
    {
        $user_data['image'] = "assets/uploads/user_profiles/profile.png";

        $flag = $this->db->insert('users',$user_data);

        $user_id = $this->db->insert_id();

        $message[] = ($lang=='en')? "Registered successfully": "تم التسجيل بنجاح" ;

        $result = ["status"=>1,"message"=>$message];
    }
    else
    {
    	$result = ['status'=>0,'message'=>$error];
    }

    $json_data = json_encode($result);

    echo $json_data ; exit;

}


//Check Username
public function check_username_post()
{
    $error     = "";
    $lang      = $this->data['lang'];
    $username  = $this->post('username');

      $at['username'] = $username ;

      $exist_flag = $this->services_m->check_data('users',$at);

      if($exist_flag)
      {
          $suggestion = $this->generate_username($username);

          $message = ($lang=='en') ? $username." already exist you can use ".$suggestion : $suggestion." موجودة بالفعل يمكنك استخدامها  ".$username ;

      }
      else
      {
          $message = ($lang=='en') ? $username." available " : " متاح  ".$username ;
      }

      $result = ["status"=>1,"message"=> $message,'base_url'=>base_url()];

      $this->response($result,REST_Controller::HTTP_OK);
}



//Check user email
public function check_user_email($email)
{
    $where['email'] = $email ;

    if (count($this->home_m->get_data('users',$where)->row_array()) > 0) 
    {
        return FALSE;
     }
    else
    {
        return TRUE;
    }          
}

//Check user mobile    
    public function check_user_mobile($mobile) 
    {
        $where['phone_number'] = $mobile ;

        if (count($this->home_m->get_data('users',$where)->row_array()) > 0) 
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }          
    }


	public function login()
	{
		$this->load->view('frontend/includes/header',$this->data);
		$this->load->view('frontend/login',$this->data);
		$this->load->view('frontend/includes/footer',$this->data);
	}


  public function privacy_policy()
  {
      // Hold current url of this page in session for redirection purpose
      $url = array('url' => current_url());

      $this->session->set_userdata($url);

      $this->data['privacy'] = $this->home_m->get_data('privacy')->row_array();


      $body = 'privacy' ;

      $this->load_pages($body,$this->data);
  }

  public function faq()
  {
      // Hold current url of this page in session for redirection purpose
      $url = array('url' => current_url());

      $this->session->set_userdata($url);

      $this->data['faq'] = $this->home_m->get_data('faq')->row_array();

      $body = 'faq' ;

      $this->load_pages($body,$this->data);

  }

  public function help()
  {
      // Hold current url of this page in session for redirection purpose
      $url = array('url' => current_url());

      $this->session->set_userdata($url);

      $this->data['help'] = $this->home_m->get_data('help')->row_array();

      $body = 'help' ;

      $this->load_pages($body,$this->data);
  }

  //Load Terms and Conditions
  public function terms_conditions()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['terms'] = $this->home_m->get_data('terms')->row_array();

    $body = 'terms_conditions' ;

    $this->load_pages($body,$this->data);
  }


  //Setting user alerts flag - users choice
  public function set_alerts()
  {
     $status    = $this->input->post('status');
     $user_id = $this->user_id;

     $this->db->set('notification_flag',$status)->where('id',$user_id)->update('users');

     echo 1 ; 

     exit;
  }


  //User Profile
  public function update_profile()
  {
     $data    = $this->input->post('data');
     $user_id = $this->input->post('id');

     $name    = $data['name'];
     $address = $data['address'];

     $this->db->set($data)->where('id',$user_id)->update('users');

     echo 1 ; 

     $message = array(
                  'status'  => 1,
                  'message' => 'Profile Updated Successfully'
                );

      $this->session->set_userdata($message);

     exit;
  }


  //Change USER profile Image
  public function change_profile_image()
  {
      $user_id  = $this->user_id;

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

    $this->db->set($data)->where('id',$user_id)->update('users');


    $message = array(
                  'status'  => 1,
                  'message' => 'Profile Picture Update Successfully :)'
                );

    $this->session->set_userdata($message);

    redirect('home/user_profile');

  }


  //Editing Password
  public function edit_password()
  {
    $user_id = $this->input->post('id');

    $this->data['userdata'] = $this->db->where('id',$user_id)->get('users')->row_array();

    $this->load->view('frontend/edit_password',$this->data) ;

  }


  //Check old Password
  public function check_old_pass()
  {

    $old_password = $this->input->post('old_password');
    $user_id      = $this->user_id;

    //print_r($old_password);exit;

    $old_password = base64_encode($old_password) ;

    $db_password = $this->db->where('id',$user_id)->get('users')->row_array()['password'];

    if($db_password==$old_password)
    {
      echo 1 ; 
    }
    else
    {
      echo 0 ;
    }
  }

  //Update Password
  public function update_password()
  {
     $password = $this->input->post('password');
     $user_id  = $this->input->post('id');

     $password = base64_encode($password);

     $this->db->set('password',$password)->where('id',$user_id)->update('users');

     echo 1 ; 

      $message = array(
                        'status'  => 1,
                        'message' => 'Password Updated Successfully'
                      );

      $this->session->set_userdata($message);

     exit;
  }


  //Newsletter Subscription
  public function newsletter_subscriptions()
  {  
      $lang = $this->data['lang'] ;


      $data['email'] = $this->input->post('email');
      
      $this->db->insert('newsletter_subscriptions',$data);

      $message = ($lang=='en') ? "You will get notify with our News and Upgrades :)" :"سوف تحصل على إخطار لدينا أخبار وترقيات :)";
     
      $result = ['status'=>'success','message'=>$message];

      $this->session->set_userdata($result);

      redirect('home/index');
  }


  //Forgot Password ?
   public function forgot_password()
   {
      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/forgot_pass_form');
      $this->load->view('frontend/includes/footer',$this->data);
   } 


    //Check for user email/username
    public function check_for_user()
    {
      $email = $this->input->post('email');

      $count = $this->db->or_where('email',$email)->or_where('username',$email)->get('users')->row_array();

        if ($count > 0) 
        {
            echo 1 ; exit;
         }
        else
        {
            echo  0 ; exit;
        }          
    }


  //Reset Password
	public function reset_password($user_id,$reciv_recov_code,$time)
	{
		$this->load->helper('crypt');
                                 
		$user_id  = decrpt($user_id);
		$time  	  = decrpt($time);



	     $reciv_date  = date('Y-m-d',$time);	                
	     $present     = date('Y-m-d');
	   
	     $diff        = strtotime($present)-strtotime($reciv_date);


	     $years  = floor($diff / (365*60*60*24));
	     $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	     $days   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


  		$db_recov_code = $this->db->select('passwd_recovery_code')
						  ->where('id',$user_id)
						  ->get('users')->row()->passwd_recovery_code;

      if($user_id)
      {					  
    			if( ($reciv_recov_code == $db_recov_code) && $days<=2)
    			{
    				$data['user'] = $this->db->where('id',$user_id)->get('users')->row();

    				$this->load->view('change_password',$data);
    			}
          elseif(($reciv_recov_code != $db_recov_code) && $db_recov_code!='')
          {
            echo 'You have redirected with wrong link.......' ;
          }
			    else if($days>=2)
  		    {
  		    	echo 'This Link is Expired.....';
  		    }
  		    else
  		    {
  		    	echo 'You can Use this link only one time.....';
  		    }
  		}    
  		else
  		{
  			echo 'You Are Not The Authorized User.......';
  		}

	}


  //Change Password
	public function change_password()
	{
		$data   	   =  $this->input->post('data');

		$user_id       = base64_decode($data['user_id']);
		$new_password  = base64_encode($data['password']);

		$result = $this->db->set(array('password'=>$new_password,'passwd_recovery_code'=>NULL,'passwd_modified_at'=>date('Y-m-d h:i:s')))->where('id',$user_id)->update('users');

		echo $result;
	}


  //Saving Contact
  public function save_contact()
  {
    $table = 'contact_list';
    $data  = $this->input->post('data');
    $lang  = $this->data['lang'];


    $this->db->insert($table, $data);

    $message = ($lang=='en') ? "We have recieved your message we will be in touch with you :) " : "لقد استلمنا رسالتك وسنتواصل معك";
     
    $result = ['status'=>1,'message'=>$message];

    $json_data = json_encode($result);

    print_r($json_data);

    //$this->session->set_userdata($result);

    //redirect('home/contact');
  }



  //Save data  from admin pages
  public function save_data($table)
  {
    // $image_flag argument checks whether file is passing or not
    // $table2  argument checks for second table to store data related to $table

      $data = array();

      $data      = $this->input->post('data');
      $id        = $this->input->post('id');

      if($table=='users')
      {
         $data['auth_level'] = 1 ;
         $data['password']   = base64_encode($data['password']) ;
         $data['role']       = 'user' ;
      }

      if($id)
      {
        $this->db->set($data)->where('id',$id)->update($table);

        $message = ($lang=='en') ? "We have recieved your message we will be in touch with you :) " : "لقد استلمنا رسالتك وسنتواصل معك";
      }
      else
      {
        $this->db->insert($table,$data);

        $message = ($lang=='en') ? "We have recieved your message we will be in touch with you :) " : "لقد استلمنا رسالتك وسنتواصل معك";
      }

    $result = ['status'=>1,'message'=>$message];

    $json_data = json_encode($result);

    print_r($json_data);

  }   


}

//Helping Functions

  function RandomString($size='')
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';

    if($size=='')
    {
      for ($i = 0; $i < 50; $i++) 
      {
          $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
      }
    }
    else
    {
      for ($i = 0; $i < $size; $i++)
      {
          $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
      }
      
    }
    return $randstring;
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
