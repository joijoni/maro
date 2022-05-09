<?php 
    include "../connections/connect.php";
    $messageVal=$_POST['bal'];   
    if(isset($messageVal)){
        $msg=mysqli_real_escape_string($conn,$messageVal);
        $sql=mysqli_query($conn,"SELECT * FROM queries WHERE incoming_message RLIKE '[[:<:]]".$msg."[[:>:]]' LIMIT 0,1");
        $count=mysqli_num_rows($sql);
        if($count==0){
            $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
            $sql=mysqli_query($conn,"INSERT INTO queries(incoming_message) VALUES('$messageVal')");
            echo "Sorry , I don't understand you. Please try again.";
        }else{
        while($row=mysqli_fetch_array($sql)){
            $response=$row['response'];
            $link= $row['link'];
            if($response==""){
                echo "Sorry , I don't understand you. Please try again.";
            }
            if($link!=''){
                 $response = $response ."Go to ".$link;
                 //$response = $response ."<a href='".$link."' class='btn btn-primary btn-block'> Click here</a>";
             }
             
            echo $response;
        }
                
    }
}


    // include "chatbottablecheck.php";
    // $messageVal=$_POST['bal'];                                                                                                                                 
    // if(isset($messageVal)){
    //     $errorresponse="Sorry, I did not understand you. Please make your sentence shorter and presice.";
    //     error_log($messageVal . ' is the value', 3, "./error.log");
    //     echo checkQuery($conn,$messageVal);
    //     $user_message = mysqli_real_escape_string($conn, $messageVal);
    //      if(checkQuery($conn, $user_message)==null){
    //         if(checkResources($conn, $user_message)==null){
    //             if(checkTemplates($conn, $user_message)==null){
    //                 echo $needed_response=$errorresponse;
    //             }else{
    //                echo  $needed_response=checkTemplates($conn, $user_message);
    //             }
    //         }else{
    //             echo $needed_response=checkResources($conn, $user_message);
    //         }
    //     }
    // }else{
    //         echo $needed_response="connection failed please try again later";
    // }
        //Call the sound function
        //playSound($needed_response);
        //Return the text to the user


        //string compare
       
?>