function toPages(){
    var search =document.getElementById("search").value;

    if(search=="view users"){
        location.href="view_users.php"; 
        return false;

    }else if(search=="add users"){
        location.href="add_users.php"; 
        return false;

    }else if(search=="view snaks"){
        location.href="view_snaks.php"; 
        return false;

    }else if(search=="add snaks"){
        location.href="add_snaks.php"; 
        return false;

    }else if(search=="view burgers"){
        location.href="view_burger.php"; 
        return false;

    }else if(search=="add burgers"){
        location.href="add_burger.php"; 
        return false;

    }else if(search=="view orders"){
        location.href="view_orders.php"; 
        return false;

    }else if(search=="add orders"){
        location.href="add_orders.php"; 
        return false;

    }else if(search=="view locations"){
        location.href="view_location.php"; 
        return false;

    }else if(search=="add locations"){
        location.href="add_location.php"; 
        return false;
    }else{
        alert("not found page !")
    }
}