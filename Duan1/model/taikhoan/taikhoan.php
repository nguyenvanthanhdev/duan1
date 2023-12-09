<?php 
    
     function into_user_admin($email,$pass,$name_kh,$gender,$phone) {
        $sql="insert into user (email,pass,name_kh,gender,phone) values('$email','$pass','$name_kh','$gender','$phone')";
        pdo_execute($sql);
     }

     function load_user(){
      $sql= "Select * from user order by id_user desc";
        $result= pdo_query( $sql );
        return $result;
     }
     function load_user_email($email){
      $sql= "Select * from user order by email='$email' desc";
        $result= pdo_query_one( $sql );
        return $result;
     }

     function check_user_admin($email,$pass){
        $sql= "SELECT * from user where email='$email' and pass='$pass' ";
        $resul= pdo_query_one($sql);
        return $resul;  
     }
    
     function suaid_user(){
      $sql="select * from user where id_user=".$_GET['id_user'];
      $result=pdo_query_one($sql);
      return $result;
  }
     function update_user($email,$pass,$name_kh,$gender,$phone,$id_user){
        $sql= "update user set email='".$email."', pass='".$pass."',name_kh='".$name_kh."',gender='".$gender."', phone='".$phone."' where id_user=".$id_user;
        pdo_execute($sql);
         }

         function delete_user() {
            $sql = "delete from user where id_user=".$_GET['id_user'];
            pdo_execute($sql);
         }


?>