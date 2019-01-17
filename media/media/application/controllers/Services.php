<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Services extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        //$this->load->model('examples/examples_model');
        $this->load->database();
        $this->load->model('services_m');
        $this->load->helper("notification");

    }


//Contact Us
  public function contact_us_post()
   {
   $lang  = ($this->post('lang')) ? $this->post('lang'): "en";

     $data['contact_details'] = $this->db->select('username as name,email,phone_number,address')
                       ->where('email','admin@gmail.com')
                       ->get('users')->row_array();
  
   $result = ["status"=>1,"message"=> ($lang=='en')? "success": "دخل بريد إلكتروني صالحا",'base_url'=>base_url(),'data'=>$data];
        
     $this->response($result,REST_Controller::HTTP_OK);
   }


//Privacy
   public function privacy_post()
   {
      $lang   = ($this->post('lang')) ? $this->post('lang'): "en";

      $content['privacy'] = $this->db->select('content_'.$lang.' as content')
                                     ->where('id',1)
                                     ->get('privacy')->row_array();

      $result = ["status"=>1,"message"=> ($lang=='en')? "success": "دخل بريد إلكتروني صالحا",'base_url'=>base_url(),'data'=>$content];
         
      $this->response($result,REST_Controller::HTTP_OK);
   }


//Terms
   public function terms_post()
   {
      $lang  = ($this->post('lang')) ? $this->post('lang'): "en";

      $content['terms'] = $this->db->select('content_'.$lang.' as content')
                       ->where('id',1)
                       ->get('terms')->row_array();

    $result = ["status"=>1,"message"=> ($lang=='en')? "success": "دخل بريد إلكتروني صالحا",'base_url'=>base_url(),'data'=>$content];
         
     $this->response($result,REST_Controller::HTTP_OK);                  
   }


    public function type_of_land_post()
   {
       $lang   = ($this->post('lang')) ? $this->post('lang'): "en";

       $lands  = $this->services_m->get_lands($lang);

       $result = ["status"=>1,"message"=> ($lang=='en')? "": "",'base_url'=>base_url(),'data'=>$lands];
      
       $this->response($result,REST_Controller::HTTP_OK);
   }




    public function phone_code_post()
    {
        $lang        = ($this->post('lang')) ? $this->post('lang'): "en";

        $phone_codes = $this->db->select('id as phonecode_id,phonecode,name as country_name')
                                 ->where_in('priority',array(1,2))
                                 ->order_by("priority", "DESC")
                                 ->get('countries')
                                 ->result_array();

         foreach ($phone_codes as $key => $code)
         {
           $code['phonecode'] = '+'.$code['phonecode'];

           $code['country_id'] = $code['phonecode_id'];

           $filter_codes[] = $code;
         }

         $cities = $this->db->select('id as city_id,name_'.$lang.' as city_name')->get('cities')->result_array();


         $result = ["status"=>1,"message"=> ($lang=='en')? "": "",'base_url'=>base_url(),'data'=>$filter_codes,'cities'=>$cities];
         
         $this->response($result,REST_Controller::HTTP_OK);
    }

//Generate Username
    public function generate_username($username)
    {
      $org = $username ;

      $random = RandomString(3);

      $username = $username.$random;

      $at['username'] = $username;

      $flag = $this->services_m->check_data('users',$at);

      if($flag)
      {
         $this->generate_username($org);
      }
      else
      {
        return $username ;
      }

    }


//Registration Function 
    public function registration_post()  
    {

        $error            = "";
        $lang             = ($this->post('lang')) ? $this->post('lang'): "en";
        $username         = $this->post('username');
        $name             = $this->post('name');
        $mobile           = $this->post('mobile');
        $email            = $this->post('email');
        $password         = $this->post('password');
        $phonecode        = $this->post('phonecode_id');
        $package_selected = $this->post('package_id');


        $device_type    = $this->post('device_type');
        $device_token   = $this->post('device_token');
        

        if($device_token=="")
        {
            $error =  ($lang=='en')? "Device Token is Required" :"أدخل بريد إلكتروني صالحا";
            $result = ["status"=>0,"message"=>$error];
        }
        else
        {
            $user_data['device_token'] = $device_token;
        }

        if($device_type=="")
        {
            $error =  ($lang=='en')? "Device Type is Required" :"أدخل بريد إلكتروني صالحا";
            $result = ["status"=>0,"message"=>$error];
            
        }
        else
        {
            $user_data['device_type'] = $device_type;
        }

        if($name=="")
        {
            $error =  ($lang=='en')? "Name is Required" :"مطلوب اسم";
            $result = ["status"=>0,"message"=>$error];
        }
        else
        {
            $user_data['name'] = $name;
        }

        if($phonecode=="")
        {
            $error =  ($lang=='en')? "Phone Code id is Required" :"أدخل بريد إلكتروني صالحا";
            $result = ["status"=>0,"message"=>$error];
        }
        else
        {
           $country =  $this->db->select('sortname,phonecode')
                                ->where('id',$phonecode)
                                ->get('countries')->row();

           $user_data["country_code"] =  $country->sortname;
           $user_data["phone_code"]   =  $country->phonecode;
        }

        if ($mobile == "") 
        {
           
            $error =  ($lang=='en')? "Mobile is Required" :"أدخل بريد إلكتروني صالحا";
            $result = ["status"=>0,"message"=>$error];
        } 
        else 
        {
            if ($this->check_user_mobile($mobile)) 
            {
              $user_data["phone_number"] = $mobile ;
              $user_data['otp']          = 1234 ;
            } 
            else 
            {
                $error = ($lang=='en')? "Mobile already in Use":"تم استخدام البريد الإلكتروني من قبل";
                $result = ["status"=>0,"message"=>$error];
            }   
        }    


        if (($this->post('email')) != "") 
        {
            if (!filter_var($this->post('email'), FILTER_VALIDATE_EMAIL)) 
            {
                $error =  ($lang=='en')? "Enter valid email" :"أدخل بريد إلكتروني صالحا";
                $result = ["status"=>0,"message"=>$error];
            } 
            else 
            {
                if ($this->check_user_email($this->post('email'))) 
                {
                  $user_data["email"] = $this->post('email');
                } 
                else 
                {
                    $error = ($lang=='en')? "Email already Used":"تم استخدام البريد الإلكتروني من قبل";
                    $result = ["status"=>0,"message"=>$error];
                }   
            }
        }    
        else 
        {
            $error = ($lang=='en')? "Email is Required" :"البريد الالكتروني مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

//Password
        if ($password!= "")
         {
            if($password <= 6)
            {
              $error = ($lang=='en')? 'Password should contain alteast 6 charaters !' : "يجب أن تحتوي كلمة المرور على مؤثرات alteast 6!";
              $result = ["status"=>0,"message"=>$error];
            }

            $user_data['password']  =  base64_encode($password);
         }
         else 
         {
            $error = ($lang=='en')? 'Password is required' : "كلمة المرور مطلوبة";
            $result = ["status"=>0,"message"=>$error];
         }

//User Name
        if($username!= "") 
        {
            if(strlen($username)<3)
            {
                $error = ($lang=='en')? 'Username should contain atleast 3 characters' : "يجب أن يحتوي اسم المستخدم على 3 أحرف على الأقل";

                $result = ["status"=>0,"message"=>$error];
            }
            else
            {

               $at['username'] = $username ;

               $exist_flag = $this->services_m->check_data('users',$at);

               if($exist_flag)
               {
                  $suggestion = $this->generate_username($username);

                  $error = ($lang=='en')? 'Username already Exist' : "كلمة المرور مطلوبة";

                  $result = ["status"=>2,"message"=>$error,'suggestion'=>$suggestion];
               }

               $user_data["username"] =  $username;
            }
        }
        else
        {
           $error =  ($lang=='en')? "User Name is required" : "مطلوب موبايل";
           $result = ["status"=>0,"message"=>$error];
        }

        $user_data['created_at']        = date('Y-m-d H:i:s');
        $user_data["auth_level"]        = 1 ;
        $user_data["role"]              = "customer";
        $user_data["approval_status"]   = 1 ;
        $user_data["register_through"]  = 1 ;
        $user_data["package_selected"]  = ($package_selected) ? $package_selected : 0 ;


    if ($error=="" ) 
    {

        $user_data['image']   =  "assets/uploads/user_profiles/profile.png";

        //print_r($user_data);exit;

        $flag = $this->db->insert('users',$user_data);

        //print_r($this->db->last_query());exit;

        $user_id = $this->db->insert_id();

        if($user_id)
        {
              if($user_data['package_selected'])
              {
                $at = array();

                  $at['id'] = $package_selected ;

                  $package_details = $this->services_m->get_data('packages',$at)->row_array();
                  
                  $insert['user_id']     = $user_id;
                  $insert['package_id']  = $package_selected;
                  $insert['total_items'] = $package_details['cars_quantity'];
                  $insert['items_left']  = $package_details['cars_quantity'];
                  $insert['status']      = 1 ;

                  $iflag = $this->db->insert('subscriptions',$insert);
              }
        }

        $user_data['image'] = $this->db->select('image')->where('id',$user_id)->get('users')->row()->image;

        $user_data['user_id']      = $user_id ;
        $user_data['phonecode']    = $phonecode ;

        $result = ["status"=>1,"message"=> ($lang=='en')? "Registered successfully": "تم التسجيل بنجاح",'base_url'=>base_url(), "user_info"=>$user_data];
    }

    $this->response($result,REST_Controller::HTTP_OK);
}


//Check Username
public function check_username_post()
{
    $error     = "";
    $lang      = ($this->post('lang'))?($this->post('lang')):'en';
    $username  = $this->post('username');

    $at['username'] = $username ;

      if((strlen($username))<3)
      {
          $error = ($lang=='en')? 'Username should contain atleast 3 characters' : "يجب أن يحتوي اسم المستخدم على 3 أحرف على الأقل";

          $result = ["status"=>0,"message"=>$error];
      }
      else
      { 
          $exist_flag = $this->services_m->check_data('users',$at);

          if($exist_flag)
          {
              $suggestion = $this->generate_username($username);

              $message = ($lang=='en') ? $username." already exist you can use ".$suggestion : $suggestion." موجودة بالفعل يمكنك استخدامها  ".$username ;

              $result = ["status"=>1,"message"=> $message,'base_url'=>base_url()];
          }
          else
          {
              $message = ($lang=='en') ? $username." available " : " متاح  ".$username ;

              $result = ["status"=>1,"message"=> $message,'base_url'=>base_url()];
          }

    }

    $this->response($result,REST_Controller::HTTP_OK);

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

//Check user mobile    
    public function check_user_mobile($mobile) 
    {
        if (count($this->db->get_where("users",array("phone_number"=>$mobile))->row_array()) > 0) 
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }          
    }


//Save Phone Number Verification
/*    public  function save_phone_number_post()
    {
       $error              = "";
       $lang               = ($this->post('lang'))?($this->post('lang')):'en';
       $user_id            = $this->post('user_id');
       $phone_number       = $this->post('phone_number');
       $country_code       = $this->post('country_code');

       if($user_id=="")
       {
            $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

       if($country_code=="")
       {
            $error = ($lang=='en')? "Country Code Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

       if($phone_number=="")
       {
            $error = ($lang=='en')? "Phone Number Is Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {
            $user_data['phone_number'] = $phone_number;
            $user_data['otp']          = 1234 ;
            $user_data['country_code'] = $country_code ;

            $flag = $this->db->set($user_data)->where('id',$user_id)->update('users');

            if($flag)
            {
                $data['user_id']      = $user_id;
                $data['phone_number'] = $phone_number ;
                $data['country_code'] = $country_code ;

                 $result = ["status"=>1,"message"=> ($lang=='en')? "Please Enter The OTP": "خطأ غير معروف",'base_url'=>base_url(),'data'=>$data];
            }


        }
        $this->response($result,REST_Controller::HTTP_OK);
    }*/

//Phone Verification
    public function phone_verification_post()
    {
       $error     = "";
       $lang      = ($this->post('lang'))?($this->post('lang')):'en';
       $user_id   = $this->post('user_id');
       $user_otp  = $this->post('otp');


       if($user_id=="")
       {
            $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

       if($user_otp=="")
       {
            $error = ($lang=='en')? "Please Enter OTP" :"يرجى إدخال OTP";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {
            
            $db_otp = $this->db->select('otp')->where('id',$user_id)->get('users')->row()->otp;

            if($db_otp==$user_otp)
            {
                $this->db->set('otp_verif_flag',1)->where('id',$user_id)->update('users');

                $result = ["status"=>1,"message"=> ($lang=='en')? "Your Phone Number Is Verified": "تم التحقق من رقم هاتفك",'base_url'=>base_url()];
            }
            else
            {
                $result = ["status"=>0,"message"=> ($lang=='en')? "OTP Is Wrong": "OTP غير صحيح",'base_url'=>base_url()];
            }

        }
         $this->response($result,REST_Controller::HTTP_OK);
    }

//Resend OTP
    public function resend_otp_post()
    {
        $error    = "";
        $lang     = ($this->post('lang'))?($this->post('lang')):'en';
        $user_id  = $this->post('user_id');


        if($user_id=="")
        {
            $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {

          $result = ["status"=>1,"message"=> ($lang=='en')? "OTP sent successfully": "تم إرسال OTP بنجاح"];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Login Function
    public function login_post() 
    {
        $error = "";
		    $lang = ($this->post('lang')) ? $this->post('lang'): "en";

    		if (($this->post('email')) != "") 
        {
            $data['email'] = $this->post('email');
        } 
        else 
        {
          $error =  ($lang=='en')? "email is required": "اسم المستخدم مطلوب";
          goto end;
        }

    		if (($this->post('password')) != "") 
        {
            $data['password'] = base64_encode($this->post('password'));
        }
        else
        {
            $error =  ($lang=='en')? "password is required": "اسم المستخدم مطلوب";
            goto end;
        }

		    if (($this->post('device_type')) != "") 
        {
           $device_type = $this->post('device_type');
        }
        else 
        {
          $error =  ($lang=='en')? "device type is required": "اسم المستخدم مطلوب";
          goto end;
        }

		   if (($this->post('device_token')) != "") 
       {
           $device_token = $this->post('device_token');
       }
       else
       {
          $error =  ($lang=='en')? "device_token is required": "اسم المستخدم مطلوب";
          goto end;
       }


		end:

		if($error!="")
    {
			 $result = ["status"=>0,"message"=>$error];
		}
    else
    {
			/*$data['phone_number']  = $this->post('mobile');
			$data['password']     = base64_encode($this->post('password'));
			$device_type          = $this->input->post('device_type');
			$device_token         = $this->input->post('device_token');*/
			$data['auth_level'] = 1;

			$res = $this->services_m->login($data); 


      //Manipulating for checking payment status of user
      $user_id = @$res["log_detail"]['user_id'] ;

      $subscription =  $this->db->where('user_id',$user_id)->get('subscriptions')->row_array();

      //print_r($subscription); exit;

      $res['log_detail']['payment_status'] = (@$subscription['status']==1) ? 1 : 0 ;

			//print_r($res);exit;

			if($res["status"] == 1) 
			{	
				$user_update['device_token'] = $device_token; 
				$user_update['device_type']  = $device_type;
				$data['user_id'] = $res["log_detail"]['user_id'];
				$updation = $this->services_m->update_device($user_update,$data);
				
				$res['log_detail']['image'] = (empty($res['log_detail']['image']))? "assets/uploads/user_profiles/profile.png": $res['log_detail']['image'];
				$result = ["status"=>1,"message"=> ($lang=='en')? "You have successfully logged in": "لقد قمت بتسجيل الدخول بنجاح",'base_url'=>base_url(),"data"=>$res["log_detail"] ];
			} 
			else if($res["status"] == 2) 
			{
				$result = ["status"=>0,"message"=> ($lang=='en')? "Admin need to Approve Your Account": "تم حظر حسابك",'base_url'=>base_url(),"data"=>[]];            
			} 
			else if($res["status"] == 3) 
			{
				$result = ["status"=>3,"message"=> ($lang=='en')? "Please Verify your Mobile": "يرجى التحقق من هاتفك المحمول",'base_url'=>base_url(),"user_details"=>$res["log_detail"]];             
			} 
			else if($res["status"] == 0) 
			{
				$result = ["status"=>4,"message"=>($lang=='en')? "Wrong credentials" : "أوراق اعتماد خاطئة",'base_url'=>base_url(),"data"=>[]];          
			} 
			else 
			{                
				$result = ["status"=>5,"message"=> ($lang=='en')? "Unknown error Please Try Agian" : "خطأ غير معروف","data"=>[],'base_url'=>base_url()]; 
			}
		}
        $this->response($result,REST_Controller::HTTP_OK);
    }



//Sending Colors
    public function get_colors_post()
    {
        $error   = "";
        $lang    = ($this->post('lang'))?($this->post('lang')):'en';
        
        $colors  = $this->db->select('id as color_id,color_'.$lang.' as color_name')
                            ->where('status',1)
                            ->get('colors')->result_array();
 
        if($colors)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result  = ["status"=>1,"message"=>$message,'colors'=>$colors];
        }
        else
        {
          $message = ($lang=='en')? "No data found !" :"لاتوجد بيانات !";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


/*//Sending Countries
    public function get_countries_post()
    {
        $error   = "";
        $lang    = ($this->post('lang'))?($this->post('lang')):'en';
        
        $countries  = $this->db->select('id as country_id,name as country_name')
                               ->where_in('priority','1,2')
                               ->get('countries')->result_array();
 
        if($countries)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result  = ["status"=>1,"message"=>$message,'countries'=>$countries];
        }
        else
        {
          $message = ($lang=='en')? "No data found !" :"لاتوجد بيانات !";
          $result = ["status"=>0,"message"=>$message];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }*/



//Sending Packages
    public function get_packages_post()
    {
        $error   = "";
        $lang    = ($this->post('lang'))?($this->post('lang')):'en';

        //Id userid exist
        $user_id = @$this->post('user_id');
        

        //Read Packages from DATABASE
            $this->db->select('p.id as package_id,p.name_'.$lang.' as package_name, p.price, p.cars_quantity,p.bids_quantity,p.duration as months,p.image as package_image');
            //$this->db->where('p.status',1);

            if($user_id)
            {
              $this->db->where('s.user_id',$user_id);
              $this->db->join('subscriptions as s','s.package_id=p.id');
            }

            $packages = $this->db->get('packages as p')->result_array();


        if($packages)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'packages'=>$packages];
        }
        elseif($user_id)
        {
          $message = ($lang=='en')? "You don't have packages yet" :"ليس لديك حزم حتى الآن";
          $result  = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }
        else
        {
          $message = ($lang=='en')? "No data found !" :"لاتوجد بيانات !";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Subscribing to Package
    public function package_subscription_post()
    {
        $error       = "";
        $lang        = ($this->post('lang'))?($this->post('lang')):'en';
        $package_id  = @$this->post('package_id');
        $user_id     = $this->post('user_id');


        if($package_id=="")
        {
            $error = ($lang=='en')? "Package Id Required" :"معرف الحزمة المطلوبة";
            $result = ["status"=>0,"message"=>$error];
        }

        if($user_id=="")
        {
            $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {

          $at['id'] = @$package_id ;

          $package_details = $this->services_m->get_data('packages',$at)->row_array();


          //Check for already existance
          $where['user_id'] = $user_id;

          $subscription_details = $this->services_m->get_data('subscriptions',$where)->row_array();
          $where = array() ;

          $message = '' ;

             if($subscription_details)
             {  
                if($subscription_details['status']!=0)
                 {
                    $message = ($lang=='en')? "Already you have active package ! you can't subscribe more than one !" :"بالفعل لديك حزمة نشطة! لا يمكنك الاشتراك بأكثر من واحد";

                    $result  = ["status"=>0,"message"=>$message,'base_url'=>base_url(),'package_selected'=>$subscription_details['package_id']];
                 }
                 else
                 {
                    $this->db->where('user_id',$user_id)->delete('subscriptions');
                 }
             }

            if($message=='')
            {
                $insert['user_id']     = $user_id;
                $insert['package_id']  = $package_id;
                $insert['total_items'] = $package_details['cars_quantity'];
                $insert['items_left']  = $package_details['cars_quantity'];

                $iflag = $this->db->insert('subscriptions',$insert);

                if($iflag)
                {
                  //Update package_selected flag to package_id in users table
                    $this->db->set('package_selected',$package_id)->where('id',$user_id)->update('users');

                    $message  = ($lang=='en')? "Successfully Subscribed" :"نجاح";
                    $result   = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'package_selected'=>$package_id];
                }
                else
                {
                    $message  = ($lang=='en')? "Sorry something went wrong !" :"عذرا، هناك خطأ ما !";
                    $result   = ["status"=>1,"message"=>$message,'base_url'=>base_url()];
                }
              }

            $subscription = $this->db->where('user_id',$user_id)->get('subscriptions')->row_array();

            $result['payment_status'] = (@$subscription['status']==1) ? 1 : 0 ;

          }


        $this->response($result,REST_Controller::HTTP_OK);
    }


//Making Payment
    public function make_payment_post()
    {
        $error       = "";
        $lang        = ($this->post('lang'))?($this->post('lang')):'en';
        $package_id  = $this->post('package_id');
        $user_id     = $this->post('user_id');



        if($package_id=="")
        {
            $error = ($lang=='en')? "Package Id Required" :"معرف الحزمة المطلوبة";
            $result = ["status"=>0,"message"=>$error];
        }

        if($user_id=="")
        {
            $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=='')
        { 
          //Check for already existance
            $where['user_id'] = $user_id;

            $subscription_details = $this->services_m->get_data('subscriptions',$where)->row_array();
            $where = array() ;


             if($subscription_details['status']==0)
             {
                $at['items_left'] =  $subscription_details['total_items'] ;
                $at['id']         =  $subscription_details['id'] ;
                $at['status']     =  1 ;

                $this->db->set($at)->where('id',$subscription_details['id'])->update('subscriptions');
                $at = array();

                $message  = ($lang=='en')? "Payment successfull :)" :"دفع successfull :)";
                $result   = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'package_selected'=>$subscription_details['package_id']];
             }
             else
             {
                $message = ($lang=='en')? "Already you have active package ! you can't subscribe more than one !" :"بالفعل لديك حزمة نشطة! لا يمكنك الاشتراك بأكثر من واحد";
                $result  = ["status"=>0,"message"=>$message,'base_url'=>base_url(),'package_selected'=>$subscription_details['package_id']];
             }


            $subscription = $this->db->where('user_id',$user_id)->get('subscriptions')->row_array();

            $result['payment_status'] = (@$subscription['status']==1) ? 1 : 0 ;

        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Sending Categories
    public function get_categories_post()
    {
        $error              = "";
        $lang               = ($this->post('lang'))?($this->post('lang')):'en';


        $categories = $this->db->select('id as category_id,image,name_'.$lang.' as category')
                               ->where('status',1)
                               ->get('categories')->result_array();
 
        if($categories)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'categories'=>$categories];
        }
        else
        {
          $message = ($lang=='en')? "No data found !" :"لاتوجد بيانات !";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Sending Sub Categories
    public function get_subcategories_post()
    {
        $error         = "";
        $lang          = ($this->post('lang'))?($this->post('lang')):'en';
        $category_id   = $this->post('category_id');


        $subcategories = $this->db->select('sc.id as sub_category_id,category_id,sc.image,sc.name_'.$lang.' as sub_category,c.name_'.$lang.' as category_name ')
                               ->where('sc.status',1)
                               ->where('sc.category_id',$category_id)
                               ->from('sub_categories as sc')
                               ->join('categories as c','c.id=sc.category_id')
                               ->get()->result_array();
 
        if($subcategories)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'subcategories'=>$subcategories];
        }
        else
        {
          $message = ($lang=='en')? "Sorry no data found !" :"عذرا لا توجد بيانات";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Sending Products based on sub_category_id
    public function get_products_post()
    {
        $error           = "";
        $at              = array();

        $lang            = ($this->post('lang'))?($this->post('lang')):'en';
        $sub_category_id = @$this->post('sub_category_id');


        //Flags for searching, adavanced_searching, sorting  (depending on these flow continues)
        $search_flag          = (@$this->post('search_flag'))          ? 1 : 0 ;
        $sort_flag            = (@$this->post('sort_flag'))            ? 1 : 0 ;
        $advanced_search_flag = (@$this->post('advanced_search_flag')) ? 1 : 0 ;

        
        if($search_flag==1) //for normal searching
        {
            $category_id     = @$this->post('category_id');
            $sub_category_id = @$this->post('sub_category_id');
            $year            = @$this->post('year');
            $country_id      = @$this->post('country_id');
            
            if($year!='')
            {
              $between_years = explode('-',$year);
              
              $min_year = $between_years[0];
              $max_year = $between_years[1];
            }
            else
            {
              $min_year = 0;
              $max_year = 0;
            }

            $at['min_year']        = $min_year ;
            $at['max_year']        = $max_year ;
            $at['country_id']      = $country_id ;
            $at['category_id']     = $category_id ;
            $at['sub_category_id'] = $sub_category_id ;
 
            $products = $this->services_m->search_products($at,$lang);

            unset($at) ;
        }
        elseif($advanced_search_flag==1) //for advanced searching
        {

            $at['category_id']       = (@$this->post('category_id'))       ? $this->post('category_id')       : 0 ;
            $at['sub_category_id']   = (@$this->post('sub_category_id'))   ? $this->post('sub_category_id')   : 0 ;
            $at['exterior_color_id'] = (@$this->post('exterior_color_id')) ? $this->post('exterior_color_id') : 0 ;
            $at['interior_color_id'] = (@$this->post('interior_color_id')) ? $this->post('interior_color_id') : 0 ;
            $at['country_id']        = (@$this->post('country_id'))        ? $this->post('country_id')        : 0 ;
            $at['min_bid']           = (@$this->post('min_bid'))           ? $this->post('min_bid')           : 0 ;
            $at['seller_star']       = (@$this->post('seller_star'))       ? $this->post('seller_star')       : 0 ; 
            $at['cylinders']         = (@$this->post('cylinders'))         ? $this->post('cylinders')         : 0 ; 
            $at['gears']             = (@$this->post('gears'))             ? $this->post('gears')             : 0 ; 

            $at['from_year']         = (@$this->post('from_year')) ? $this->post('from_year') : 0 ;
            $at['to_year']           = (@$this->post('to_year'))   ? $this->post('to_year')   : 0 ;

            $at['from_milage']       = (@$this->post('from_milage')) ? $this->post('from_milage') : 0 ;
            $at['to_milage']         = (@$this->post('to_milage'))   ? $this->post('to_milage')   : 0 ;

            $at['warranty']          = (@$this->post('warranty')=='yes')  ? 1 : 0 ;       
            $at['inspected']         = (@$this->post('inspected')=='yes') ? 1 : 0 ;       
            $at['sun_roof']          = (@$this->post('sun_roof')=='yes')  ? 1 : 0 ; 

            
            $products = $this->services_m->advanced_search_products($at,$lang);

            unset($at) ;
        }
        elseif($sort_flag==1)  //Sorting Products
        { 

            // newyear     - New CARS
            // oldyear     - Old CARS
            // highmileage - More Mileage CARS
            // lowmileage  - Low Mileage  CARS
            // highprice   - High Price  CARS
            // lowprice    - Low Price  CARS

            $a['hyear']     = (@$this->post('newyear')==1)     ? 1 : 0 ;
            $a['lyear']     = (@$this->post('oldyear')==1)     ? 1 : 0 ;
            $a['hmilage']   = (@$this->post('highmileage')==1) ? 1 : 0 ;
            $a['lmilage']   = (@$this->post('lowmileage')==1)  ? 1 : 0 ;
            $a['hprice']    = (@$this->post('highprice')==1)   ? 1 : 0 ;
            $a['lprice']    = (@$this->post('lowprice')==1)    ? 1 : 0 ;

           //Search in  
            $in[0]  = 'year';
            $in[1]  = 'milage';
            $in[2]  = 'price' ;

            foreach($a as $key => $value) 
            {
              if($value==1)
              {
                foreach($in as $k => $field)
                {
                    if(strpos($key,$field))
                    {
                      $explode = explode($key,$field) ;
                      $flag    = $explode[0] ;

                      $at['field']  = $field ;
                      $at['value']  = ($key[0]=='h') ? 'desc' : 'asc' ;
                      //print_r($at);exit;
                    }
                } 
                break;
              }
            }

            $at['sub_category_id'] = $sub_category_id ;

            $products = $this->services_m->sort_products($at,$lang);
            unset($at) ;
        }
        else
        {
            $sub_category_id = $this->post('sub_category_id');
            $products = $this->services_m->get_products($sub_category_id,$lang);
        }


       // $products = $this->services_m->get_products($sub_category_id,$lang);


        //Setting Days ago  from created date
        foreach ($products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $products[$key]['created_at'] = days_ago($created_at) ;
        }


        if($products) 
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'products'=>$products];
        }
        else
        {
          $message = ($lang=='en')? "Sorry no data found !" :"عذرا لا توجد بيانات";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

        $this->response($result,REST_Controller::HTTP_OK);
    }


//Sending Product Details
  public function get_product_details_post()
  {
      $error       = "";
      $lang        = ($this->post('lang'))?($this->post('lang')):'en';
      $product_id  = $this->post('product_id');
      $user_id     = $this->post('user_id');


      if($product_id=="")
      {
          $error = ($lang=='en')? "Product Id Required" :"معرف المنتج مطلوب";
          $result = ["status"=>0,"message"=>$error];
      }

      if($error=='')
      {
          $product_details = $this->services_m->get_product_details($product_id);

          if($product_details)
          {

            //========== Colors Start =========================================================

                //Setting Colors of Product
                $where['id'] = $product_details['exterior_color_id'];

                $ext_color  = $this->services_m->get_data('colors',$where)->row_array();

                $where['id'] = $product_details['interior_color_id'];

                $int_color  = $this->services_m->get_data('colors',$where)->row_array();

                //release param 
                $where = array() ;
                

                //Remove these params from array 
                unset($product_details['exterior_color_id']);
                unset($product_details['interior_color_id']);


                $product_details['exterior_color'] = $ext_color['color'] ; 
                $product_details['interior_color'] = $int_color['color'] ; 

            //=========== Colors End ===========================================================


                //Setting inspection param
                $product_details['inspected'] = ($product_details['inspected']=='1') ? 'Yes' : 'No' ;
                $product_details['sun_roof'] = ($product_details['sun_roof']=='1') ? 'Yes' : 'No' ;


                //Setting images of products
                $product_details['images'] = $this->services_m->get_product_images($product_id);

                foreach ($product_details['images'] as $key => $image) 
                {
                  $product_details['images'][$key]['image_id'] = $image['id'];
                  unset($product_details['images'][$key]['id']);
                }


            //Seller details  Start =====================================================

                //Setting Seller Details
                $seller_id = $product_details['seller_id'] ;

                $product_details['seller_details'] = $this->db->select('username,user_rating,image')
                                                              ->where('id',$seller_id)
                                                              ->get('users')->row_array();
            //Seller Details End ========================================================

                                             
            //Bidder details  Start =====================================================

              //Setting Bidder Details
              $product_details['bidder_details'] = $this->db->select('u.username,u.user_rating,u.image,b.bid_value')
                                                            ->where('b.product_id',$product_id)
                                                            ->limit('1') //For sending only Last bidder 
                                                            ->order_by('b.id','desc')
                                                            ->from('bids as b')
                                                            ->join('users as u','u.id=b.user_id')
                                                            ->get()->result_array();

            //Bidder details End ======================================================

            //Favorites Start =========================================================
              if($user_id)
              {
                //If user loggedin then send favorites of product
                $at['id'] = $user_id ;

                //Check for package selection
                $userdetails = $this->services_m->get_data('users',$at)->row_array();
                $subscription_flag = ($userdetails['package_selected']==0) ? 0 : 1 ;

                $where['user_id']    = $user_id;
                $where['product_id'] = $product_id;
                $favorite_flag = $this->services_m->get_data('favorites',$where)->num_rows();


                $product_details['is_favorite_flag']  = ($favorite_flag) ? 1 : 0 ;
                $product_details['subscription_flag'] = $subscription_flag ;
              }
              else
              {
                $product_details['is_favorite_flag']  = 0 ;
                $product_details['subscription_flag'] = 0 ;
              }
            //Favorites End ============================================================



            $message = ($lang=='en')? "Success" :"نجاح";
            $result  = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'product_details'=>$product_details];
          }
          else
          {
            $message = ($lang=='en')? "Sorry details not found !" :"الصنف غير موجود !";
            $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
          }
      }  

      $this->response($result,REST_Controller::HTTP_OK);

  }


//Favorite and Unfavorite Product
  public function favorite_unfavorite_post()
  {
      $error       = "";
      $lang        = ($this->post('lang'))?($this->post('lang')):'en';
      $product_id  = $this->post('product_id');
      $user_id     = $this->post('user_id');


      if($product_id=="")
      {
          $error = ($lang=='en')? "Product Id Required" :"معرف المنتج مطلوب";
          $result = ["status"=>0,"message"=>$error];
      }

      if($user_id=="")
      {
          $error  = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
          $result = ["status"=>0,"message"=>$error];
      }


      if($error=='')
      {
          $where['user_id']    = $user_id;
          $where['product_id'] = $product_id;

          //Check wheather the product is already in favorite list
          $count = $this->services_m->get_data('favorites',$where)->num_rows();

          //if is there then unfavorite the product ( delete )
          if($count)
          {
              $flag = $this->db->where($where)->delete('favorites');

              if($flag)
              {
                $message = ($lang=='en')? "Removed from favorites list" :"تمت إزالته من قائمة المفضلة";
                $result  = ["status"=>1,"message"=>$message];
              }
          }
          else
          {
              $flag = $this->db->insert('favorites',$where);

              //else add favorites
              if($flag)
              {
                $message = ($lang=='en')? "Added to favorites list" :"أضيفت إلى قائمة المفضلة";
                $result  = ["status"=>1,"message"=>$message,'base_url'=>base_url()];
              }

          }

          if(!$flag)
          {
            $message = ($lang=='en')? "Something went wrong please try again !" :"حدث خطأ ما. أعد المحاولة من فضلك !";
            $result  = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
          }


          $where['user_id']    = $user_id;
          $where['product_id'] = $product_id;
          $favorite_flag       = $this->services_m->get_data('favorites',$where)->num_rows();

          $result['is_favorite_flag'] = ($favorite_flag) ? 1 : 0 ;

      }

      $this->response($result,REST_Controller::HTTP_OK);

  }



//Selling product by User
  public function sell_product_post()
  {
      $error  = "";
      $lang   = ($this->post('lang'))?($this->post('lang')):'en';


    //Receiving DATA    
      $insert['user_id']            = $this->post('user_id');
      $insert['category_id']        = $this->post('category_id');
      $insert['sub_category_id']    = $this->post('sub_category_id');
      $insert['exterior_color_id']  = $this->post('exterior_color_id');
      $insert['interior_color_id']  = $this->post('interior_color_id');
      $insert['year']               = $this->post('year');
      $insert['milage']             = $this->post('mileage');
      $insert['warranty']           = $this->post('warranty');
      $insert['inspected']          = $this->post('inspected');
      $insert['gears']              = $this->post('gears');
      $insert['cylinders']          = $this->post('cylinders');
      $insert['country_id']         = $this->post('country_id');
      $insert['sun_roof']           = $this->post('sun_roof');
      $insert['description']        = $this->post('description');
      $insert['price']              = $this->post('price');
      $insert['min_bid']            = $this->post('minimum_bid');
      $insert['serial_num']         = $this->post('serial_num');


      //Manipulating DATA
      $insert['sun_roof']  = ($insert['sun_roof']=='yes') ? 1 : 0 ;
      $insert['warranty']  = ($insert['warranty']=='yes') ? 1 : 0 ;
      $insert['inspected'] = ($insert['inspected']=='yes') ? 1 : 0 ;


      $where['user_id'] = $insert['user_id'] ;
      
      //Checking wheather package limit for selling cars
      $user_subscription = $this->services_m->get_data('subscriptions',$where)->row_array();

      unset($where);

      if($user_subscription) //If user subscribed
      {
          if($user_subscription['status']==1)
          {
              //Decrease the items in user subscription package and update in table after successful insertion of product
              $set['items_left'] = $user_subscription['items_left'] - 1 ;
              
              if($set['items_left']==0)
              {
                $set['status'] = 0 ;

                //Update package_selected flag to package_id in users table
                $this->db->set('package_selected',0)->where('id',$insert['user_id'])->update('users');
              }

          }
          else
          {
            //if subscription expired then terminate the request and send response
              $error  = ($lang=='en')? "You subscription expired, please reactivate or choose new package to enjoy our services" : "انتهت صلاحية اشتراكك ، يرجى إعادة تفعيل أو اختيار باقة جديدة للاستمتاع بخدماتنا";

              $result = ["status"=>0,"message"=>$error,'base_url'=>base_url()];
              
              $this->response($result,REST_Controller::HTTP_OK);
              exit;
          }
      }
      else
      {
          //if User has no Package  or user not subscribed
          $error  = ($lang=='en')? "You don't have package yet ! Please subscribe" : "ليس لديك حزمة حتى الآن! يرجى الاشتراك";

          $result = ["status"=>0,"message"=>$error,'base_url'=>base_url()];
          
          $this->response($result,REST_Controller::HTTP_OK);
          exit;
      }


      //Files Handling
      if(!isset($_FILES['images']['name']))
      {
          $error  = ($lang=='en')? "Images are required" : "الصور مطلوبة";
          $result = ["status"=>0,"message"=>$error];
      }
      else
      {
          $filescount = count($_FILES['images']['name']) ;

          if($filescount<10)
          {
            $error  = ($lang=='en')? "Sorry minimum 1 image of product needed !" : "آسف الحد الأدنى 1 صور للمنتج المطلوب!";
            $result = ["status"=>0,"message"=>$error];
          }
      }


      if($error=='')
      {
          for($i = 0; $i < $filescount; $i++)
          {
            $file_name = $insert['user_id'].'_image'.time();

                $_FILES['image']['name']     = $_FILES['images']['name'][$i];
                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i]; 
                $_FILES['image']['size']     = $_FILES['images']['size'][$i]; 

                $uploadPath              = 'assets/uploads/product_images/';
                $config['upload_path']   =  $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name']     =  $file_name;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image'))
                {
                    $fileData = $this->upload->data();

                    $uploadData[$i]['file_name'] = $fileData['file_name']; 
                }
                else
                {
                    $error_img = $this->upload->display_errors();

                    $result = ["status"=>0,"message"=> $error_img,'base_url'=>base_url()];

                    $this->response($result,REST_Controller::HTTP_OK);

                    exit;
                }

                $product_images[] = array('image'=>$uploadPath.$fileData['file_name']); 
            }


          $insert['image'] = $product_images[0]['image'];

          //Insert $insert  data into products table
          $iflag = $this->db->insert('products',$insert);

          $product_id = $this->db->insert_id();

          //Inserting Images into product_images
          $pri['product_id'] = $product_id ;

          foreach ($product_images as $key => $image) 
          {
            $pri['image'] = $image['image'];

            $this->db->insert('product_images',$pri);
          }

          $message  = ($lang=='en')? "Product posted Successfully :)" : "تم نشر المنتج بنجاح:";
          $result   = ["status"=>1,"message"=>$message,'base_url'=>base_url()];


          //Update the subscriptions tabel
          $this->db->set($set)->where('user_id',$insert['user_id'])->update('subscriptions');

      }

      $this->response($result,REST_Controller::HTTP_OK);
  }


//Bidding on product
public function product_bidding_post()
{
    $error      = "";
    $user_id    = $this->post('user_id');
    $product_id = $this->post('product_id');
    $bid_value  = $this->post('bid_value');
    $lang       = ($this->post('lang'))?($this->post('lang')):'en';

    if($user_id=="")
    {
        $error  = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
        $result = ["status"=>0,"message"=>$error];
    }

    if($product_id=="")
    {
        $error  = ($lang=='en')? "Product Id Required" :"معرف المنتج مطلوب";
        $result = ["status"=>0,"message"=>$error];
    }

    if($error=='')
    {
        //Check for already bidding by same user on same product
        $at['user_id']    = $user_id;
        $at['product_id'] = $product_id;

        $bid_flag = $this->services_m->get_data('bids',$at)->num_rows();

        if(!$bid_flag)
        {
            $where['id'] = $user_id ;

            $userdetails = $this->services_m->get_data('users',$where)->num_rows();

            if($userdetails)
            {
                $insert['user_id']    =  $user_id ;
                $insert['product_id'] = $product_id ;
                $insert['bid_value']  = $bid_value ;

                $iflag = $this->db->insert('bids',$insert);

                $message  = ($lang=='en')? "Bid sent successfully" :"تم إرسال العطاء بنجاح";
                $result   = ["status"=>1,"message"=>$message,'base_url'=>base_url()];

            }
            else
            {
                $message  = ($lang=='en')? "User not found !" :"المستخدم ليس موجود !";
                $result   = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
            }
        } 
        else
        {
            $message  = ($lang=='en')? "Sorry one can bid once on a product !" :"عذرا يمكنك مرة واحدة على منتج!";
            $result   = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }     
    }

    $this->response($result,REST_Controller::HTTP_OK);

}


//============================= Profile Screen Services===================================================


//Getting My Items list
  public function get_my_list_post()
  {
      $error     = "";
      $lang      = ($this->post('lang'))?($this->post('lang')):'en';
      $user_id   = $this->post('user_id');

      //Flags for favorites, adavanced_searching, sorting  (depending on these flow continues)
      $favorites_flag = (@$this->post('favorites_flag')) ? 1 : 0 ;
      $bids_flag      = (@$this->post('bids_flag'))      ? 1 : 0 ;
      $items_flag     = (@$this->post('items_flag'))     ? 1 : 0 ;

      //Initiliaze variable
      $my_list = array();

      if($user_id=="")
      {
          $error = ($lang=='en')? "User Id Required" :"معرف المستخدم مطلوب";
          $result = ["status"=>0,"message"=>$error];
      }

      if($error=='')
      {
          if($favorites_flag==1)
          {
             $my_list = $this->services_m->get_favorite_products($user_id,$lang) ;
          }
          elseif($bids_flag==1)
          {
            $my_list = $this->services_m->get_my_bids($user_id,$lang) ;
          } 
          else
          {
            $my_list = $this->services_m->get_my_items($user_id,$lang) ;
          }          
      }

              //Setting Days ago  from created date
        foreach ($my_list as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $my_list[$key]['created_at'] = days_ago($created_at) ;
        }


        if($my_list)
        {
          $message = ($lang=='en')? "Success" :"نجاح";
          $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'products'=>$my_list];
        }
        else
        {
          $message = ($lang=='en')? "Sorry no data found !" :"عذرا لا توجد بيانات";
          $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
        }

      $this->response($result,REST_Controller::HTTP_OK);
  }


//Get Bidders of Particular product
  public function get_product_bidders_post()
  {
      $error      = "";
      $lang       = ($this->post('lang'))?($this->post('lang')):'en';
      $product_id = $this->post('product_id');

      if($product_id=="")
      {
          $error = ($lang=='en')? "Product Id Required" :"معرف المنتج مطلوب";
          $result = ["status"=>0,"message"=>$error];
      }
      
      if($error=='')
      {
                  //Setting Bidder Details
          $bidders  = $this->db->select('u.username,u.user_rating,u.image,b.bid_value,b.created_at,b.comments')
                               ->where('b.product_id',$product_id)
                               ->order_by('b.id','desc')
                               ->from('bids as b')
                               ->join('users as u','u.id=b.user_id')
                               ->get()->result_array();

          //Setting Days ago  from created date
          foreach ($bidders as $key => $bid) 
          {
              $created_at = $bid['created_at'] ;

              $bidders[$key]['created_at'] = days_ago($created_at) ;
          }

          if($bidders)
          {
            $message = ($lang=='en')? "Success" :"نجاح";
            $result = ["status"=>1,"message"=>$message,'base_url'=>base_url(),'bidders'=>$bidders];
          }
          else
          {
            $message = ($lang=='en')? "Sorry no data found !" :"عذرا لا توجد بيانات";
            $result = ["status"=>0,"message"=>$message,'base_url'=>base_url()];
          }
      }

    $this->response($result,REST_Controller::HTTP_OK);
  }




//Email checking
    public function profile_flag_post()
    {
       $error      = "";
       $user_id    = $this->post('user_id');


       $user = $this->db->where('id',$user_id)->get('users')->row_array();

       $email = $user['email'] ;

       if($email)
       {
         $email_flag = 1 ; //email exist
         $result = ["status"=>0,"message"=> ($lang=='en')? "": "",'base_url'=>base_url(),'email_flag'=>$email_flag];
       }
       else
       {
         $email_flag = 0 ;
         $result = ["status"=>1,"message"=> ($lang=='en')? "": "",'base_url'=>base_url(),'email_flag'=>$email_flag];
       }
      $this->response($result,REST_Controller::HTTP_OK);
    }



//Edit Profile  
    public function update_profile_post()
    {
        $error          = "";
        $lang           = ($this->post('lang'))?($this->post('lang')):'en';

        $user_id        = @$this->post('user_id');
        $phone_number   = @$this->post('phone_number');
        $password       = @$this->post('password');
        $email          = @$this->post('email');
        $username       = @$this->post('username');
        $name           = @$this->post('name');
        $image          = @$_FILES['file']['name'];


        $user_data      = array();


        if($image !="")
        {
            $path = $user_id.'_';

            $folder = 'user_profile_images';

            $this->upload($folder,$_FILES,$path,'file');

            if($this->_uploaded['file_name']) 
            {
                $user_data['image'] = 'assets/uploads/'.$folder.'/'.$this->_uploaded['file_name'];
            }
        }
        
        if($user_id=="")
        {
            $error = ($lang=='en')? "User Id Required !" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

//User Name
        if ($username!= "") 
        {
           $at['username'] = $username ;

           $exist_flag = $this->db->where('id !=',$user_id)
                                  ->where('username',$username)
                                  ->get('users')->num_rows();

           if($exist_flag)
           {
              $suggestion = $this->generate_username($username);

              $error = ($lang=='en')? 'Username already Exist' : "كلمة المرور مطلوبة";

              $result = ["status"=>2,"message"=>$error,'suggestion'=>$suggestion];
           }

           $user_data["username"] =  $username;
        }
        else
        {
            $error = ($lang=='en')? "Username is required" :"اسم المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($email!="")
        {
           $user_data['email'] = $email ;
        }
        else
        {
            $error = ($lang=='en')? "Email is required" :"البريد الالكتروني مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }     

        if($name!="")
        {
          $user_data['name'] = $name;
        }
        else
        {
            $error =  ($lang=='en')? "Name is Required" :"مطلوب اسم";
            $result = ["status"=>0,"message"=>$error];
        }

        //Password
        if($password!= "")
        {
          if($password <= 6)
          {
            $error = ($lang=='en')? 'Password should contain alteast 6 charaters !' : "يجب أن تحتوي كلمة المرور على مؤثرات alteast 6!";
            $result = ["status"=>0,"message"=>$error];
          }

          $user_data['password'] = base64_encode($password);
        }


        if($phone_number)
        {
            $check_mobile = count($this->db->where('phone_number',$phone_number)->where('id!=',$user_id)->get('users')->row());

            if($check_mobile)
            {
                $error = ($lang=='en')? "Phone Number Already In Use !" :"رقم الهاتف بالفعل في الاستخدام";
                $result = ["status"=>0,"message"=>$error];
            }

            $user_data['phone_number'] = $phone_number ;
        }
        else
        {
            $error = ($lang=='en')? "Phone Number Is Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($email)
        {
          $check_email  = count($this->db->where('email',$email)->where('id !=',$user_id)->get('users')->row());

          if($check_email)
          {
              $error = ($lang=='en')? "Email Already In Use !" :"البريد الإلكتروني بالفعل في المطلوبة";
              $result = ["status"=>0,"message"=>$error];
          }
        }


        if($error=="")
        {
            
            $res = $this->services_m->update_profile($user_data,$user_id);
                
            $user_data['image'] = $this->db->select('image')->where('id',$user_id)->get('users')->row()->image;

            if($res==1)
            {
                if($user_data['image']=="")
                {
                  $user_data['image'] = "assets/uploads/user_profiles/profile.png";
                }

                $result = ["status"=>1,"message"=>($lang=='en')? "Profile Updated Successfully" : "تم تحديث الملف الشخصي بنجاح",'base_url'=>base_url(),'data'=>$user_data];
            }
            elseif($res==0)
            {
                $result = ["status"=>0,"message"=>($lang=='en')? "Email or Phone Number Already Exists" : "البريد الإلكتروني أو رقم الهاتف موجود بالفعل",'base_url'=>base_url()];
                
            }
            else
            {
               $result = ["status"=>0,"message"=>($lang=='en')? "User Id not Found" : "لم يتم العثور على هوية المستخدم",'base_url'=>base_url()];
           }
       }
       
       $this->response($result,REST_Controller::HTTP_OK);
    }


    //Create Password  ( one time  service )
    public function create_password_post()
    {
        $error    = "";
        $lang     = ($this->post('lang'))?($this->post('lang')):'en';

        $user_id  = $this->post('user_id');

        $password = $this->post('password');
        $email    = $this->post('email');
        $username = $this->post('username');
        
      
        if($user_id=="")
        {
            $error  = ($lang=='en')? "User Id required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }
        else
        {
            if($password=="")
            {
                $error = ($lang=='en')? "Password is required" :"كلمة المرور مطلوبة";
                $result = ["status"=>0,"message"=>$error];
            }
            else
            {
                $password = base64_encode($password);
            }

            if($email=="")
            {
                $error = ($lang=='en')? "Email is required" :"البريد الالكتروني مطلوب";
                $result = ["status"=>0,"message"=>$error];
            }


            if($username=="")
            {
                $error = ($lang=='en')? "Username is required" :"اسم المستخدم مطلوب";
                $result = ["status"=>0,"message"=>$error];
            }
        }

        if($error=="")
        {
           //Insert password field to the user details
           $p['username'] = $username;
           $p['email']    = $email;
           $p['password'] = $password;

           $this->db->set($p)->where('id',$user_id)->update('users');
          
           $result = ["status"=>1,"message"=>($lang=='en')? "Password created successfully" : "كلمة المرور تم إنشاؤها بنجاح",'base_url'=>base_url(),'user_info'=>$p];

        }

        $this->response($result,REST_Controller::HTTP_OK);
    }




//Change Password
    public function change_password_post()
    {
        $error          = "";
        $lang           = ($this->post('lang'))?($this->post('lang')):'en';
        $new_password   = $this->post('new_password');
        $old_pass       = $this->post('old_password');
        $user_id        = $this->post('user_id');

        if($user_id=="")
        {
            $error = ($lang=='en')? "User Id Is Required" :"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        }

        if($new_password=="")
        {
            $error = ($lang=='en')? "Password Is Required" :"كلمة المرور مطلوبة";
            $result = ["status"=>0,"message"=>$error];
        }

         if($old_pass=="")
        {
            $error  = ($lang=='en')? "Old Password Is Required" :"كلمة المرور القديمة مطلوبة";
            $result = ["status"=>0,"message"=>$error];
        }
        else
        {

           $user = $this->db->select('password')->where('id',$user_id)->get('users')->row();

           if($user)
           {
              if(base64_decode($user->password)!=$old_pass)
              {
                 $error  = ($lang=='en')? "Old Password is Incorrect" :"كلمة سر قديمة ليست صحيحة";
                 $result = ["status"=>0,"message"=>$error];
              }
           }
           else
           {
              $error  = ($lang=='en')? "User Not Found" :"المستخدم ليس موجود";
              $result = ["status"=>0,"message"=>$error];
           }
        }

   /*     if (!preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9@$!%*#?&]{8,20}$/",$password) )
        {
            $error = ($lang=='en')? 'Please Ensure that you have at least one lower case letter, one upper case letter, one digit in Password Field':"معرف المستخدم مطلوب";
            $result = ["status"=>0,"message"=>$error];
        } */


        if($error=="")
        {
           $user_data['password']  =  base64_encode($new_password);

           $flag =  $this->db->set($user_data)->where('id',$user_id)->update('users');
            
           if($flag)
           {
             $msg = ($lang=='en')? 'Password Updated Successfully':"تم تحديث كلمة السر بنجاح";
             $result = ["status"=>1,"message"=>$msg];
           }
           else
           {
             $msg = ($lang=='en')? 'Something Went Wrong Plese Try Again!':"شيء ما حدث في محاولة خاطئة!";
             $result = ["status"=>0,"message"=>$msg];
           }
        }
         $this->response($result,REST_Controller::HTTP_OK); 
    }


//Forgot Password
    public function forgot_password_post()
    {
       $error   = "";
       $lang    = ($this->post('lang'))?($this->post('lang')):'en';
       $email   = $this->post('email');

        if($email=="")
        {
            $error  = ($lang=='en')? "Please Pass Email" :"يرجى تمرير البريد الإلكتروني";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {
            if(!$this->check_user_email($email))
            {
                $data = $this->db->select('id as user_id,email,username')
                                 ->or_where('email',$email)
                                 ->or_where("username",$email)
                                 ->get('users')->row_array();

                if($data)
                {
                        $this->load->library('email');                
                        $this->load->helper('crypt');
                        $this->load->helper('mail');

                        $recovery_code = RandomString();

                        $this->db->set(array('passwd_recovery_code'=>$recovery_code,'passwd_recovery_date'=>date('Y-m-d h:i:s')))->where('id',$data['user_id'])->update('users');

                        $link_protocol   = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https' : 'http';
                        $link_uri        = 'home/reset_password/' . encrpt($data['user_id']) . '/' . $recovery_code.'/'.encrpt(time());

                       $this->data['special_link'] = $link_uri ; 

                       $this->data['username']     = $data['username'];

                       //echo $this->data['special_link'] ;exit;

                       $template = $this->load->view('mail_template',$this->data,true); 

                       send_mail($data['email'],'Zido Password Change',$template);

                       $result = ["status"=>1,"message"=> ($lang=='en')? "Please Check Your Mail" : "راجع بريدك","data"=>$data,'base_url'=>base_url()];
                }
                else
                {
                  $result = ["status"=>0,"message"=> ($lang=='en')? "Service Provider Can't Access This App" : "لا يمكن مزود الخدمة الوصول إلى هذا التطبيق",'base_url'=>base_url()];
                }
            }
            else
            {
                $result = ["status"=>0,"message"=> ($lang=='en')? "Email does not exist in our Database" : "البريد الإلكتروني غير موجود في قاعدة البيانات الخاصة بنا",'base_url'=>base_url()];
            }
        }
        $this->response($result,REST_Controller::HTTP_OK);
    }

//Payment
    public function payment_post()
    {
       $error              = "";
       $lang               = ($this->post('lang'))?($this->post('lang')):'en';
       $request_id         = $this->post('request_id');

      if($request_id=="")
      {
            $error = ($lang=='en')? "Please Pass Request Id" :"يرجى تمرير طلب معرف";
            $result = ["status"=>0,"message"=>$error];
      }

      //Check for Request Id existance in db
        $flag  = $this->db->select('id')->where('id',$request_id)->get('requests')->row()->id;

        if($flag)
        {
              if($error=="")
              {
                  //$order_id     = $this->order_id();
                  $request_det  = $this->db->where('id',$request_id)->get('requests')->row();

                  $orders['order_id']    = $request_det->order_id;
                  $orders['request_id']  = $request_id;
                  $orders['user_id']     = $request_det->requester_user_id;
                  $orders['total_price'] = $request_det->request_cost;
                  $orders['payment_status'] = 1;

                  $flag = $this->db->insert('orders',$orders);

                  if($flag==1)
                  {
                    //Update Payment Status in Requests Table
                    $this->db->set(array('payment_status'=>1))
                             ->where('id',$request_id)
                             ->update('requests');

                   //Send Notification to SP          
                     //Send Notification to SP          
                    $sub_msg = 'Payment Completed by ';
                    $sub_msg_ar = 'الدفع المنجز بواسطة ';

                    $notification_type    = 'PC';
                    $this->send($orders['user_id'],$request_det->service_id,$sub_msg,$notification_type,$request_id,$sub_msg_ar,$lang);
                  }

                $msg = ($lang=='en')? 'Payment Completed':"تم التسديد";
                $result = ["status"=>1,"message"=>$msg,'base_url'=>base_url()];
              }
        }
        else
        {
            $error = ($lang=='en')? "Request id not found" :"طلب الهوية غير موجود";
            $result = ["status"=>0,"message"=>$error];
        }

        $this->response($result,REST_Controller::HTTP_OK);

    }

//Prepare Unique Order Id
    function order_id()
    {
      $order_id = "";
      $characters = '0123456789';
      $randstring = 'ORD';
      
      for ($i = 0; $i < 6; $i++)
      {
        $randstring .= $characters[rand(0, strlen($characters)-2)];
      }

      $check = $this->db->where('order_id',$randstring)->get('requests')->result();
      
      $order_id = (!$check) ? $randstring : $this->order_id();

      return $order_id;
    }


//Request Review 
    public function request_review_post()
    {
       $error            = "";
       $lang             = ($this->post('lang'))?($this->post('lang')):'en';
       $request_id       = $this->post('request_id');
       $rating           = $this->post('rating');
       $review           = $this->post('review');
        
       if($request_id=="")
       {
            $error = ($lang=='en')? "Request Id Required" :"يرجى تمرير معرف المستخدم";
            $result = ["status"=>0,"message"=>$error];
        }

       if($rating=="")
       {
            $error = ($lang=='en')? "Pass Number of Stars" :"يرجى تمرير معرف المستخدم";
            $result = ["status"=>0,"message"=>$error];
        }

       if($review=="")
       {
            $error = ($lang=='en')? "Please write Review" :"يرجى تمرير معرف المستخدم";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {
           $data  = array();

           $data['ratings']  = $rating;
           $data['reviews']  = $review;

           $this->db->set($data)->where('id',$request_id)->update('requests');

          $result = ["status"=>1,"message"=> ($lang=='en')? "Thanks for your feedback!" : "شكرا لملاحظاتك !"];
        }
        $this->response($result,REST_Controller::HTTP_OK);
    }


//Saved Notifications 
    public function notifications_post()
    {
       $error              = "";
       $lang               = ($this->post('lang'))?($this->post('lang')):'en';
       $user_id            = $this->post('user_id');
        
       if($user_id=="")
       {
            $error = ($lang=='en')? "Please Pass User Id" :"يرجى تمرير معرف المستخدم";
            $result = ["status"=>0,"message"=>$error];
        }

        if($error=="")
        {
            $notifications = $this->db->where('user_id',$user_id)
                                      ->order_by('notification_created_at','DESC')
                                      ->get('notifications')->result_array();

            $sending_data = array();                          
            if($notifications)
            {                          
                    foreach ($notifications as $key => $value)
                    {
                        $sending_data[$key]['request_id'] = $notifications[$key]['request_id'];
                        $sending_data[$key]['message']    = $notifications[$key]['code'].' : '.$notifications[$key]['msg_'.$lang].' for Order Id - '.$notifications[$key]['order_id'];
                        
                        //Calculating Days
                        $db_date  = strtotime($notifications[$key]['notification_created_at']) ; 
                        $db_date  = date('Y-m-d',$db_date);

                        
                         $present  = date('Y-m-d');
                        
                        $diff     = strtotime($present)-strtotime($db_date);

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

                        if($weeks>=1)
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
                        }
                       

                      $sending_data[$key]['days_ago'] = $days_ago;   
                    } 
                }
             $result = ["status"=>1,"message"=> ($lang=='en')? "Success" : "خطأ غير معروف",'base_url'=>base_url(),'data'=>$sending_data];
         } 
            $this->response($result,REST_Controller::HTTP_OK);
    }


 //Sending Notification to Service Providers 
   public function send($user_id,$service_id,$sub_msg,$notification_type,$request_id="",$sub_msg_ar="",$lang='en')
  {
          //Getting Requester Details  and  settings data to send
                $sender_details =  $this->db->select('id as requester_user_id,username,image')
                                            ->where('id',$user_id)
                                            ->get('users')->row();
                
                if($sender_details->image=="")
                {
                  $sender_details->image = "assets/uploads/user_profiles/profile.png";
                }

                if($sender_details->username=='')
                {
                  $sender_details->username = 'User';
                }

                $message    = $sub_msg.$sender_details->username;
                $message_ar = $sender_details->username.$sub_msg_ar;
                
                $s_data['user_id']  = $sender_details->requester_user_id;
                $s_data['username'] = $sender_details->username;
                $s_data['image']    = $sender_details->image;
                $s_data['date']     = date('Y-m-d H:i:s A');
                $s_data['type']     = $notification_type;
                $s_data['title']    = ($lang=='en') ? $message: $message_ar;
                $s_data['body']     = ($lang=='en') ? $message: $message_ar;
                
				if($notification_type=='NR'){   
				$sent_ids= array();
				//Gettting SERVICE PROVIDERS Data
				$service_providers = $this->db->where('approval_status',1)->where('auth_level',5)->get('users')->result_array(); 
			   
					foreach($service_providers as $key=>$sp)
					{
						$sp_services  = $this->db->select('sp_service_id')
												->where('sp_user_id',$sp['id'])
												->get('sp_services')->result();
						if($sp_services)
						{
							//Converintg into the sp selected services into array
							  foreach($sp_services as $key=>$sp_service)
							  {
								$selected_ids[$key] =  $sp_service->sp_service_id;
							  }
						 
							  //Send Notification if there is match in sp_selected -> service_ids
								if(in_array($service_id, $selected_ids))
								{
								  //check condition for multiple  Device Token user
								  if(in_array($sp['device_token'], $sent_ids))
								  {  
									 //Do Nothing
								  }
								  else
								  {  
									  //For iOS
									  if($sp['device_type']=='iOS')
									  {
										$re = sp_send_notification_ios($sp['device_token'],$s_data);
										
									  }
									}
									  
								   $sent_ids[] = $sp['device_token'];
								} 

							 }
						}   
				}
        else
        {
            $request_details =  $this->db->select('sp_user_id,requester_user_id,order_id')
                                     ->where('id',$request_id)
                                     ->get('requests')->row();

             //Getting Reciever Details
            $receiver_details   = $this->db->select('id as sp_user_id,device_token,device_type')
                                       ->where('id',$request_details->sp_user_id)
                                       ->get('users')->row_array();

            //Send Notification if there is match in sp_selected -> service_ids

            //for android
              /*if($receiver_details['device_type']=='Android')
              {
                $re = sp_send_notification_android($receiver_details['device_token'],$s_data);
              }*/

            //For iOS
              if($receiver_details['device_type']=='iOS')
              {
                $re = sp_send_notification_ios($receiver_details['device_token'],$s_data);
              }

            //Inserting Data in Notifications Table
              if(isset($re))
              {
                  $i_data['request_id'] = $request_id ;
                  $i_data['user_id']    = $request_details->sp_user_id;
                  $i_data['msg_en']     = $message;
                  $i_data['msg_ar']     = $message_ar;
                  $i_data['code']       = $notification_type;
                  $i_data['order_id']   = $request_details->order_id;

                  $this->db->insert('notifications',$i_data);
              }  
		}
                
    }
    

//Uploading Files
    public function upload($folder = 'other',$image,$path,$element_name)
    {
        // Image upload
        if($image['file']['name']!="")
        {
            if (!file_exists(FCPATH.'assets/uploads/'.$folder)) { mkdir(FCPATH.'assets/uploads/'.$folder,0777,true); }
            $file_element_name        = $element_name;
            $config['upload_path']    = FCPATH.'assets/uploads/'.$folder.'/';
            $config['allowed_types']  = 'gif|jpg|png|pdf|doc|docx';
            $config['max_size']       = 1024 * 80;
            $config['file_name']      = $path.time();
            
            $this->load->library('upload',$config);
            
            if ($this->upload->do_upload($file_element_name))
            {
                $this->_uploaded = $this->upload->data();
            }
            else
            {
                $this->_uploaded = false;

            }
        
        }
        else
        {
            $this->_uploaded = false;
        }       

    }


}


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

 