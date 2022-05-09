<?php
//include connection file
include "../connections/connect.php";

//Adding a new Product
if (isset($_POST['addproduct'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $userid = $_POST['myid'];
    $categoryid = $_POST['category'];
    $created_date=date("Y-m-d : H:i:s", time());

    //Insert into the database
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="INSERT INTO products (name, description, category_id, price, user_id, date_created)
    VALUES ('$name', '$description', '$categoryid', '$price', '$userid', '$created_date');";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if($result){
        $_SESSION['msg'] = "Product added successfully";
        echo "<script>alert('Success!', '".$_SESSION['msg']."');</script>";
        header("location:../../userhome.php");
    }else{
        $_SESSION['msg'] = "Product failed to add";   
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../userhome.php','_self')</script>";
    }
}


//Updating a Product
if (isset($_POST['updateproduct'])){
    $id=$_GET['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $categoryid = $_POST['category'];

    //Insert into the database
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="UPDATE products SET name='$name', description='$description', category_id='$categoryid', price='$price' WHERE product_id='$id'";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if($result){
        $_SESSION['msg'] = "Product updated successfully";
        echo "<script>alert('Success!', '".$_SESSION['msg']."');</script>";
        header("location:../../userhome.php");
    }else{
        $_SESSION['msg'] = "Product failed to update"; 
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../userhome.php','_self')</script>";
    }
}
// Add a new Resource
if (isset($_POST['addresource'])){    

    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $message = strtolower($_POST['message']);
    $response = $_POST['response'];
    $link = $_POST['link'];
    $statusId = $_POST['status'];
    $categoryid = $_POST['category'];
    $details = $_POST['details'];
    $typeId = $_POST['type'];
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="INSERT INTO resources (title, summary, incoming_message, response, link, status_id, category_id, details, type_id)
    VALUES ('$title', '$summary', '$message', '$response', '$link', '$statusId','$categoryid','$details','$typeId');";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if(!$result){
        $_SESSION['msg'] = "Resource failed to add!";
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        header("location:../../resourcesadmin.php");
    }else{
        $_SESSION['msg'] = "Resource added successfully";   
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>alert('Successful!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../resourcesadmin.php','_self')</script>";
    }
}

//Add a new Template
if (isset($_POST['addtemplate'])){
    $title = $_POST['title'];
    $message = strtolower($_POST['message']);
    $response = $_POST['response'];
    $link = $_POST['link'];
    $statusId = $_POST['status'];
    $categoryId = $_POST['category'];
    $typeId = $_POST['type'];
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="INSERT INTO templates 
    (title, incoming_message, response, dlink, status_id, category_id,  type_id)
    VALUES ('$title', '$message', '$response', '$link', '$statusId','$categoryId','$typeId');";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if(!$result){
        $_SESSION['msg'] = "Template failed to add!";
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        header("location:../../templatesadmin.php");
    }else{
        $_SESSION['msg'] = "Template added successfully";   
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>window.open('../../templatesadmin.php','_self')</script>";
    }
}



//Add a new Query

if (isset($_POST['addquery'])){
    $message =strtolower($_POST['message']);
    $response = $_POST['response'];
    $link = $_POST['link'];
    $statusId = $_POST['status'];
    $categoryId = $_POST['category'];
    $typeId = $_POST['type'];
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="INSERT INTO queries 
    (incoming_message, response, link, status_id, category_id, type_id)
    VALUES ('$message', '$response', '$link', '$statusId','$categoryId','$typeId');";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if(!$result){
        $_SESSION['msg'] = "Question failed to add!";
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        header("location:../../queriesadmin.php");
    }else{
        $_SESSION['msg'] = "Question added successfully";   
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>window.open('../../queriesadmin.php','_self')</script>";
    }
}

//Add a new Query
if (isset($_POST['updatequery'])){
    $id=$_GET['id'];
    $message =strtolower($_POST['message']);
    $response = $_POST['response'];
    $link = $_POST['link'];
    $statusId = $_POST['status'];
    $categoryId = $_POST['category'];
    $typeId = $_POST['type'];
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="UPDATE  queries SET incoming_message='$message', response='$response', link='$link', status_id='$statusId', category_id='$categoryId', type_id='$typeId' WHERE query_id='$id';";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if(!$result){
        $_SESSION['msg'] = "Question failed to update!";
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        header("location:../../queriesadmin.php");
    }else{
        $_SESSION['msg'] = "Question updateded successfully";   
        echo"<script>alert(". $_SESSION['msg'].");</script> "; 
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../queriesadmin.php','_self')</script>";
    }
}

//Add a category
include_once("usedfunctions.php");
if (isset($_POST['updatecat'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $slug = slugify($name);
    $ret="UPDATE category SET name='$name', description='$description', slug='$slug' WHERE category_id='$id'";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if($result){
        $_SESSION['msgtype']="success";
        $_SESSION['msg'] = "Category updated successfully";
        echo "<script>alert('Success!', '".$_SESSION['msg']."');</script>";
        header("location:../../categoriesadmin.php");
    }else{
        $_SESSION['msgtype']="danger";
        $_SESSION['msg'] = "Category not updated successfully";        
        echo "<script>alert('Success!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../categoriesadmin.php','_self')</script>";
    }
}

//Adding a new Product
if (isset($_POST['addcustomer'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $userid = $_POST['myid'];
    $created_date=date("Y-m-d : H:i:s", time());

    //Insert into the database
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $ret="INSERT INTO customers (firstname, lastname, phone, user_id, date_created)
    VALUES ('$fname', '$lname', '$phone', '$userid', '$created_date');";
    $result=mysqli_query($conn,$ret);
    //chek if query successful
    if($result){
        $_SESSION['msg'] = "Customer added successfully";
        echo "<script>alert('Success!', '".$_SESSION['msg']."');</script>";
        header("location:../../userhome.php");
    }else{
        $_SESSION['msg'] = "Customer failed to add";   
        echo "<script>alert('Failed!', '".$_SESSION['msg']."');</script>";
        echo "<script>window.open('../../userhome.php','_self')</script>";
    }
}
?>