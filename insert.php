<?php
    //insert.php
    $connect = mysqli_connect("localhost", "root", "", "angular_php");
    $data = json_decode(file_get_contents("php://input"));
//lal tejreb
//    print_r($data);
//    exit;
    if(count($data) > 0){
        $first_name = mysqli_real_escape_string($connect, $data->firstname);
        $last_name = mysqli_real_escape_string($connect, $data->lastname);
        $btn_name = $data-> btnName;
        if($btn_name == "ADD"){
            $query = "INSERT INTO tbl_user(first_name, last_name) VALUES ('$first_name', '$last_name')";
            if(mysqli_query($connect, $query)){
                echo "Data Inserted...";
            }else{
                echo 'Error';
            }
        }
        if($btn_name == 'update'){
            $id = $data->id;
            $query = "Update tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id='$id'";
            if(mysqli_query($connect, $query)){
                echo "Data Updated...";
            }else{
                echo 'Error';
            }
        }
        
    }
    


?>