<?php
   
   $update_id = $_REQUEST['id'];
   include './env.php';
   $errors=[];

   //Title
   $title= trim($_REQUEST["title"]);
   if(empty($title)){
      $errors['title_error']='Please Fill-up the title';
   }else{

      if(strlen($title) > 40){
         echo $errors['title_error']= "Too many characters";
         }
         // else{
         //    echo $_REQUEST["title"];
         //    echo "<br>";         
         // }
         
   }

   //Name
   $name= trim($_REQUEST["name"]); 
   if(empty($name)){
      $errors['name_error']='Please Fill-up the name field';
   }else{

      if(strlen($name) > 20){
         echo  $errors['name_error']= "Invalid name";
         }
         // else{
         // echo $_REQUEST["name"];
         // echo "<br>";
         // }
   }
   
   //Email
   $email =trim($_REQUEST["email"]); 
   if(empty($email)){
      echo $errors['email_error']="Please Fill-up the mail address";
   }else{

      $V_email = explode('@',$email);
      if(end($V_email) !='gmail.com') {
         echo $errors['email_error']="Invalid email address";
      } 
      // else{
      //    echo $_REQUEST['email'];
      //    echo "<br>";
      // }
   }

   //Phone Number
   $number =trim($_REQUEST["number"]);
   if(empty($number)){
      $errors['number_error']='Please Fill-up the number field';
   }else{

      if (strlen($number) > 12){
         echo $errors['number_error']= "Phone number is not valid"; 
         }
         // else{
         //    echo $_REQUEST["number"] ;
         //    echo "<br>";
         // }
   }
      
   //Password
   $password =trim($_REQUEST["password"]);
   if(empty($password)){
      $errors['password_error']='Please Fill-up the password';
   }else{
      if(strlen($password) > 11){
         echo $errors['password_error']= "Invalid password";
   }
   //   else{
   //        echo $_REQUEST['password'];
   //        echo "<br>";
   //   }
   }

      //Description
      $description =trim($_REQUEST["description"]);
      if(empty($description)){
         $errors['description_error']='Please write at least one description';
      }else{
               if(strlen($description) > 60){
               echo $errors['description_error']="Too many characters";
               }
               // else{
               // echo $_REQUEST['description'];
               // echo "<br>";
               // }
               }

      if(count($errors)>0){
         $_SESSION = $errors;
         header("Location: ../edit.php?id=$update_id");    
      }
         else{
            // $password= password_hash($password,PASSWORD_BCRYPT);
            $query = "UPDATE datas SET title='$title',name='$name',email='$email',number='$number',password='$password',description='$description' WHERE id ='$update_id'"; 

         $result = mysqli_query($connect,$query);

         if($result){
            $_SESSION['msg'] = "Update Successfully!!";
            header("Location: ../edit.php?id=$update_id");
         }else{
            $_SESSION['msg'] = "Something went wrong";
            header("Location: ../edit.php?id=$update_id");
         }
         
      }   

?>