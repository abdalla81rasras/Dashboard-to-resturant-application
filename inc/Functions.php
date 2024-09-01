<?php
include "connection.php";
include "incFun.php";

//users
if(isset($_POST['save_user'])){
	
   if(empty($id_user = $_POST['id_user'])){
       $errors['id_user']="No ID User !";
     }else{
       $id_user = $_POST['id_user'];
   }

   if(empty($full_name = $_POST['full_name'])){
       $errors['full_name']="No Name !";
     }else{
       $full_name  = $_POST['full_name'];
   }

    if(empty($email = $_POST['email'])){
        $errors['email']="No Email !";
     }else{
        $email = $_POST['email'];
        if(!preg_match('/^([A-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email)){
            $errors['email'] = 'No valid email !';
        }   
    }

    if(empty($username = $_POST['username'])){
        $errors['username']="No User Name !";
     }else{
        $username  = $_POST['username'];
    }

    if(empty($phone = $_POST['phone'])){
        $errors['phone']="No Phone Number !";
     }else{
        $phone = $_POST['phone'];
        if(!preg_match('/^\d{10}$/', $phone)){
            $errors['phone'] = 'Phone 10 Digit !';
        }
    }

   if(empty($location = $_POST['location'])){
       $errors['location']="No Location !";
     }else{
       $location = $_POST['location'];
   }

   if(!array_filter($errors)){
       $id_user = mysqli_real_escape_string($conn , $_POST['id_user']);
       $full_name = mysqli_real_escape_string($conn , $_POST['full_name']);
       $email = mysqli_real_escape_string($conn , $_POST['email']);
       $username = mysqli_real_escape_string($conn , $_POST['username']);
       $phone = mysqli_real_escape_string($conn , $_POST['phone']);
       $location = mysqli_real_escape_string($conn , $_POST['location']);


       $sql="INSERT INTO `users`(`id_user`,`full_name`,`email`,`username`,`phone`,`location`) VALUES('$id_user','$full_name','$email','$username','$phone','$location')";
       if(mysqli_query($conn , $sql)){
          header("Location:view_users.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_users'])){
    $id_all_users=$_GET['delete_users'];

    $sql="DELETE FROM `users` WHERE `id_all_users`='$id_all_users'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_users.php');
}

if(isset($_GET['edit_users'])){
    $id_all_users=$_GET['edit_users'];

    $update=true;

    $sql="SELECT * FROM `users` WHERE `id_all_users`='$id_all_users'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $id_user = $row['id_user'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $username = $row['username'];
        $phone = $row['phone'];
        $location = $row['location'];
    }
}

if(isset($_POST['update_user'])){
    $id_all_users=$_POST['id_all_users'];
    $id_user = $_POST['id_user'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
 
    $sql="UPDATE `users` SET `id_user`='$id_user' ,`full_name`='$full_name' , `email`='$email' ,`username`='$username' , `phone`='$phone' ,`location`='$location'  WHERE `id_all_users`= '$id_all_users'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:view_users.php');
}

//snaks
if(isset($_POST['save_snack'])){
	
   if(empty($snack_name = $_POST['snack_name'])){
       $errors['snack_name']="No Snack Name !";
    }else{
       $snack_name = $_POST['snack_name'];
   }

   if(empty($snack_meal_price = $_POST['snack_meal_price'])){
       $errors['snack_meal_price']="No Meal Price !";
    }else{
       $snack_meal_price  = $_POST['snack_meal_price'];
   }

   if(empty($snack_sandwich_price = $_POST['snack_sandwich_price'])){
       $errors['snack_sandwich_price']="No Sandwich Price !";
    }else{
       $snack_sandwich_price  = $_POST['snack_sandwich_price'];
   }

   if(!array_filter($errors)){
       $snack_name = mysqli_real_escape_string($conn , $_POST['snack_name']);
       $snack_meal_price = mysqli_real_escape_string($conn , $_POST['snack_meal_price']);
       $snack_sandwich_price = mysqli_real_escape_string($conn , $_POST['snack_sandwich_price']);

       $sql="INSERT INTO `snaks`(`snack_name`,`snack_meal_price`,`snack_sandwich_price`) VALUES('$snack_name','$snack_meal_price','$snack_sandwich_price')";
       if(mysqli_query($conn , $sql)){
          header("Location:view_snaks.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_snaks'])){
    $id_snaks=$_GET['delete_snaks'];

    $sql="DELETE FROM `snaks` WHERE `id_snaks`='$id_snaks'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_snaks.php');
}

if(isset($_GET['edit_snaks'])){
    $id_snaks=$_GET['edit_snaks'];

    $update=true;

    $sql="SELECT * FROM `snaks` WHERE `id_snaks`='$id_snaks'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $snack_name = $row['snack_name'];
        $snack_meal_price = $row['snack_meal_price'];
        $snack_sandwich_price = $row['snack_sandwich_price'];
    }
}

if(isset($_POST['update_snack'])){
    $id_snaks=$_POST['id_snaks'];
    $snack_name = $_POST['snack_name'];
    $snack_meal_price = $_POST['snack_meal_price'];
    $snack_sandwich_price = $_POST['snack_sandwich_price'];

    $sql="UPDATE `snaks` SET `snack_name`='$snack_name' , `snack_meal_price`='$snack_meal_price' ,`snack_sandwich_price`='$snack_sandwich_price'  WHERE `id_snaks`= '$id_snaks'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:view_snaks.php');
}

//burger
if(isset($_POST['save_burger'])){
	
   if(empty($burger_name = $_POST['burger_name'])){
       $errors['burger_name']="No Burger Name !";
    }else{
       $burger_name = $_POST['burger_name'];
   }

   if(empty($burger_meal_price = $_POST['burger_meal_price'])){
       $errors['burger_meal_price']="No Burger Meal Price !";
    }else{
       $burger_meal_price  = $_POST['burger_meal_price'];
   }

    if(empty($burger_sandwich_price = $_POST['burger_sandwich_price'])){
       $errors['burger_sandwich_price']="No Burger Sandwich Price !";
    }else{
       $burger_sandwich_price  = $_POST['burger_sandwich_price'];
   }

   if(!array_filter($errors)){
       $burger_name = mysqli_real_escape_string($conn , $_POST['burger_name']);
       $burger_meal_price = mysqli_real_escape_string($conn , $_POST['burger_meal_price']);
       $burger_sandwich_price = mysqli_real_escape_string($conn , $_POST['burger_sandwich_price']);

       $sql="INSERT INTO `burgers`(`burger_name`,`burger_meal_price`,`burger_sandwich_price`) VALUES('$burger_name','$burger_meal_price','$burger_sandwich_price')";
       if(mysqli_query($conn , $sql)){
          header("Location:view_burger.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_burger'])){
    $id_burger=$_GET['delete_burger'];

    $sql="DELETE FROM `burgers` WHERE `id_burger`='$id_burger'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_burger.php');
}

if(isset($_GET['edit_burger'])){
    $id_burger=$_GET['edit_burger'];

    $update=true;

    $sql="SELECT * FROM `burgers` WHERE `id_burger`='$id_burger'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $burger_name = $row['burger_name'];
        $burger_meal_price = $row['burger_meal_price'];
        $burger_sandwich_price = $row['burger_sandwich_price'];
    }
}

if(isset($_POST['update_burger'])){
    $id_burger=$_POST['id_burger'];
    $burger_name = $_POST['burger_name'];
    $burger_meal_price = $_POST['burger_meal_price'];
    $burger_sandwich_price = $_POST['burger_sandwich_price'];
 
    $sql="UPDATE `burgers` SET `burger_name`='$burger_name' ,`burger_meal_price`='$burger_meal_price' ,`burger_sandwich_price`='$burger_sandwich_price' WHERE `id_burger`= '$id_burger'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:view_burger.php');
}

//order
if(isset($_POST['save_order'])){
	
   if(empty($user_name_order = $_POST['user_name_order'])){
       $errors['user_name_order']="No User Name Order !";
    }else{
       $user_name_order = $_POST['user_name_order'];
   }

   if(empty($phone_number_order = $_POST['phone_number_order'])){
        $errors['phone_number_order']="No Phone Number !";
     }else{
        $phone_number_order = $_POST['phone_number_order'];
        if(!preg_match('/^\d{10}$/', $phone_number_order)){
            $errors['phone_number_order'] = 'Phone 10 Digit !';
        }
    }

    if(empty($location_order = $_POST['location_order'])){
       $errors['location_order']="No Location Order !";
    }else{
       $location_order = $_POST['location_order'];
   }

   if(empty($order_name = $_POST['order_name'])){
       $errors['order_name']="No Order Name !";
    }else{
       $order_name  = $_POST['order_name'];
   }

   if(empty($_POST['meal'])){
       $errors['meal']="No Meal";
    }else{
       $meal = $_POST['meal'];
   }

   if(empty($_POST['sandwich'])){
       $errors['sandwich']=", and sandwich !";
    }else{
       $sandwich = $_POST['sandwich'];
   }

   if(empty($total_price = $_POST['total_price'])){
       $errors['total_price']="No Total Price !";
    }else{
       $total_price  = $_POST['total_price'];
   }

    if(empty($qrt = $_POST['qrt'])){
       $errors['qrt']="No QRT !";
    }else{
       $qrt = $_POST['qrt'];
   }

   if(!array_filter($errors)){
       $user_name_order = mysqli_real_escape_string($conn , $_POST['user_name_order']);
       $phone_number_order = mysqli_real_escape_string($conn , $_POST['phone_number_order']);
       $location_order = mysqli_real_escape_string($conn , $_POST['location_order']);
       $order_name = mysqli_real_escape_string($conn , $_POST['order_name']);
       $meal = mysqli_real_escape_string($conn , $_POST['meal']);
       $sandwich = mysqli_real_escape_string($conn , $_POST['sandwich']);
       $total_price = mysqli_real_escape_string($conn , $_POST['total_price']);
       $qrt = mysqli_real_escape_string($conn , $_POST['qrt']);

       $sql="INSERT INTO `orders`(`user_name_order`,`phone_number_order`,`location_order`,`order_name`,`meal`,`sandwich`,`total_price`,`qrt`) VALUES('$user_name_order','$phone_number_order','$location_order','$order_name','$meal','$sandwich','$total_price','$qrt')";
       if(mysqli_query($conn , $sql)){
          header("Location:view_orders.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_orders'])){
    $id_orders=$_GET['delete_orders'];

    $sql="DELETE FROM `orders` WHERE `id_orders`='$id_orders'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_orders.php');
}

if(isset($_GET['edit_orders'])){
    $id_orders=$_GET['edit_orders'];

    $update=true;

    $sql="SELECT * FROM `orders` WHERE `id_orders`='$id_orders'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $user_name_order = $row['user_name_order'];
        $phone_number_order = $row['phone_number_order'];
        $location_order = $row['location_order'];
        $order_name = $row['order_name'];
        $meal = $row['meal'];
        $sandwich = $row['sandwich'];
        $total_price = $row['total_price'];
        $qrt= $row['qrt'];
    }
}

if(isset($_POST['update_order'])){
    $id_orders = $_POST['id_orders'];
    $user_name_order = $_POST['user_name_order'];
    $phone_number_order = $_POST['phone_number_order'];
    $location_order = $_POST['location_order'];
    $order_name = $_POST['order_name'];
    $meal = $_POST['meal'];
    $sandwich = $_POST['sandwich'];
    $total_price = $_POST['total_price'];
    $qrt = $_POST['qrt'];
 
    $sql="UPDATE `orders` SET `user_name_order`='$user_name_order' ,`phone_number_order`='$phone_number_order' , `location_order`='$location_order' ,`order_name`='$order_name' , `meal`='$meal' , `sandwich`='$sandwich' ,`total_price`='$total_price' , `qrt`='$qrt'  WHERE `id_orders`= '$id_orders'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:view_orders.php');
}

//location
if(isset($_POST['save_location'])){

    if(empty($img_location = $_FILES['img_location']['name'])){
        $errors['img_location']="No Selected Image !";
     }else{
        $img_location =$_FILES['img_location']['name'];
        $img_locationTamp=$_FILES["img_location"]["tmp_name"];
        $folderimg_location ="Upload/" . $img_location ;
        move_uploaded_file($img_locationTamp , $folderimg_location );
   }
	
   if(empty($title_location = $_POST['title_location'])){
       $errors['title_location']="No Title Location !";
    }else{
       $title_location = $_POST['title_location'];
   }

   if(empty($phonen_location = $_POST['phonen_location'])){
        $errors['phonen_location']="No Phone Number !";
     }else{
        $phonen_location = $_POST['phonen_location'];
        if(!preg_match('/^\d{10}$/', $phonen_location)){
            $errors['phonen_location'] = 'Phone 10 Digit !';
        }
    }

   if(!array_filter($errors)){
       $img_location = mysqli_real_escape_string($conn , $_FILES['img_location']['name']);
       $title_location = mysqli_real_escape_string($conn , $_POST['title_location']);
       $phonen_location = mysqli_real_escape_string($conn , $_POST['phonen_location']);

       $sql="INSERT INTO `location`(`img_location`,`title_location`,`phonen_location`) VALUES('$img_location','$title_location','$phonen_location')";
       if(mysqli_query($conn , $sql)){
          header("Location:view_location.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_location'])){
    $id_location=$_GET['delete_location'];

    $sql="DELETE FROM `location` WHERE `id_location`='$id_location'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_location.php');
}

if(isset($_GET['edit_location'])){
    $id_location=$_GET['edit_location'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `location` WHERE `id_location`='$id_location'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $img_location = $row['img_location'];
        $title_location = $row['title_location'];
        $phonen_location = $row['phonen_location'];
    }

    if(empty($_FILES['img_location']['name'])){
        $errors['edit_img_location']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_location'])){

    $id_location=$_POST['id_location'];

    if(empty($_FILES['img_location']['name'])){
        $errors['img_location']="No update image ,or the original image must be selected when updating data !!";
     }else{
        $img_location =$_FILES['img_location']['name'];
        $img_locationTamp=$_FILES["img_location"]["tmp_name"];
        $folderimg_location ="Upload/" . $img_location ;
        move_uploaded_file($img_locationTamp , $folderimg_location );
    }

    $title_location = $_POST['title_location'];
    $phonen_location = $_POST['phonen_location'];

    $update=true;

   if(!array_filter($errors)){
       $img_location = mysqli_real_escape_string($conn , $_FILES['img_location']['name']);

       $sql="UPDATE `location` SET `img_location`='$img_location' ,`title_location`='$title_location' ,`phonen_location`='$phonen_location' WHERE `id_location`= '$id_location'";
       if(mysqli_query($conn , $sql)){
          header("Location:view_location.php");
       }else{
        echo 'query error !' . mysqli_error($conn);
       }
    }
}
?>