<?php
header("Content-Type: application/json");
include "../inc/connection.php";

//users
$query_users="SELECT * FROM `users`";
$result_users=mysqli_query($conn , $query_users);
$rows_users=mysqli_num_rows($result_users);
$output_uesrs=array();
    
if($rows_users > 0){
    $users=array();

    while($user_data=mysqli_fetch_assoc($result_users)){
        $users[]=$user_data;
    }

    if(count($users) > 0){
        $output_uesrs['users']=$users;
    }
}


//Snaks 
$query_snaks="SELECT * FROM `snaks`";
$result_snaks=mysqli_query($conn , $query_snaks);
$rows_snaks=mysqli_num_rows($result_snaks);
$output_snaks=array();
    
if($rows_snaks > 0){
    $snaks=array();

    while($snak_data=mysqli_fetch_assoc($result_snaks)){
        $snaks[]=$snak_data;
    }

    if(count($snaks) > 0){
        $output_snaks['snaks']=$snaks;
    }
}


//Burgers 
$query_burgers="SELECT * FROM `burgers`";
$result_burgers=mysqli_query($conn , $query_burgers);
$rows_burgers=mysqli_num_rows($result_burgers);
$output_burgers=array();
    
if($rows_burgers > 0){
    $burgers=array();

    while($burger_data=mysqli_fetch_assoc($result_burgers)){
        $burgers[]=$burger_data;
    }

    if(count($burgers) > 0){
        $output_burgers['burgers']=$burgers;
    }
}


//Orders 
$query_orders="SELECT * FROM `orders`";
$result_orders=mysqli_query($conn , $query_orders);
$rows_orders=mysqli_num_rows($result_orders);
$output_orders=array();
    
if($rows_orders > 0){
    $orders=array();

    while($order_data=mysqli_fetch_assoc($result_orders)){
        $orders[]=$order_data;
    }

    if(count($orders) > 0){
        $output_orders['orders']=$orders;
    }
}


//Location 
$query_location="SELECT * FROM `location`";
$result_location=mysqli_query($conn , $query_location);
$rows_location=mysqli_num_rows($result_location);
$output_location=array();
    
if($rows_location > 0){
    $location=array();

    while($location_data=mysqli_fetch_assoc($result_location)){
        $location[]=$location_data;
    }

    if(count($location) > 0){
        $output_location['location']=$location;
    }
}


$out_all = $output_uesrs +
           $output_snaks +
           $output_burgers +
           $output_orders +
           $output_location ;

echo json_encode($out_all);


?>