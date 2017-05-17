+
<?php


require_once'connection.php';

$user_name = trim($_REQUEST['username']);     
$user_password = trim($_REQUEST['password']);

if( isset( $_REQUEST['reg'] ) && ($user_name != null) && ($user_password != null) ){

      $sql = "SELECT * FROM user WHERE user_name='$user_name' AND user_password='$user_password'";
      //echo $sql;
      $res=mysqli_query($conn,$sql);
      // $row=mysqli_fetch_assoc($res);
      // if(count($row)==0){
      if(!mysqli_num_rows($res)){

         $cur_time=date("Y-m-d H:i:s",time());
         $sql="INSERT INTO user (user_name, user_password, reg_time)
         VALUES ('$user_name', '$user_password', '$cur_time')";
         $is_ok=mysqli_query($conn,$sql);
               if($is_ok){
                   //echo'注册成功';
               	//header('Location: ./info.php');
                   echo"<script type='text/javascript'>alert('注册成功')</script>";
                   //header('Location: ../login.html');
                }else{
                   //
                  echo"<script type='text/javascript'>alert('注册失败')</script>";
                  //echo'注册失败';
                }
      }else{
            echo"<script type='text/javascript'>alert('此用户已存在')</script>";
                      // header('location:../login.html');
      }
  }


if( isset( $_REQUEST['login'] ) && ($user_name != null) && ($user_password != null) ){
  
      session_start();
      $sql = "SELECT * FROM user WHERE user_name='$user_name' AND user_password='$user_password'";
      //echo $sql;
      $res=mysqli_query($conn,$sql);
      // print_r($res);
      if(mysqli_num_rows($res)){

          $_SESSION['username']=$user_name;

          setcookie('username',$user_name,time()+60*60*24);
          setcookie('userpassword',$user_password,time()+60*60*24);

         	header('Location: info_user.php'."?username=$user_name");
          //header('Location: test.php');
   
        }else{
           echo"<script type='text/javascript'>alert('登录失败')</script>";
      }
  }

//cookie
if(($_COOKIE['username'] != null) && ($_COOKIE['userpassword'] != null)){
   $user_name=$_COOKIE['username'];
   $user_password=$_COOKIE['userpassword'];
   // $conn = mysqli_connect('localhost','root','268312','user_system');
   $res = mysqli_query($conn,"SELECT * FROM user WHERE user_id = '$user_name' AND user_password = '$user_password'");
   if(mysqli_num_rows($res)){
    header('Location: info_user.php'."?username=$user_name");
   }else{
    echo"<script type='text/javascript'>alert('cookie登录失败')</script>";
   }

}

mysqli_close($conn);

?>