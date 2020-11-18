<?php
require_once(__DIR__.'/../models/loginModel.php');
require_once(__DIR__.'/../../core/View.php');

class LoginController{
    public function __construct()
    {
        $this->user = new loginModel();
    }
    public function login(){
        session_start();
        if(isset($_POST['login'])){
                $uname = $_POST['uname'];
                $pwd = $_POST['pwd'];
                $result = $this->user->get_user($uname, $pwd);
                print_r($result);
                echo mysqli_num_rows($result);
                if(mysqli_num_rows($result)){
                    $_SESSION['loginerror']=0;
                    $user_data = $this->user->get_data($uname);
                    $_SESSION['user'] = $user_data;
                    foreach($user_data as $keys => $values){
                        if($values['user_type'] == 'buyer'){
                            echo ("buyer");
                            header("location:buyer/home");
                        }elseif($values['user_type'] == 'farmer'){
                            //print_r($user_data);
                            //echo "im the farmer"; 
                            header("location:buyer/home");
                        }elseif($values['user_type'] == 'driver'){
                            // header("location:buyer/home");
                        }elseif($values['user_type'] == 'mentor'){
                            // header("location:buyer/home");
                        }elseif($values['user_type'] == 'admin'){

                        }
                    }
                }else{
                    $_SESSION['loginerror']=1;
                    header("location: /thoga.lk");
                }
        }
    }

    public function view(){
        
        $View = new View("login/login");
    }
    public function admin_login(){
        
        $View = new View("login/admin_login");
    }
    public function admin_log(){
        if(isset($_POST['login'])){
            
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $result = $this->user->log_admin($uname,$pwd);
            if(mysqli_num_rows($result)){
                // echo "kk";
                header("location:/thoga.lk/admin");
            }
        }
    }
    

}