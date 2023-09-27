<?php 

include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];

    $firstname_error = empty($firstname) ? "<p class='text-danger msg'>الرجاء إملاء هذا الحقل!</p>" : '';
    $lastname_error = empty($lastname) ? "<p class='text-danger msg'>الرجاء إملاء هذا الحقل!</p>" : '';
    $email_error = !filter_var($email, FILTER_VALIDATE_EMAIL) ? "<p class='text-danger msg'>الرجاء إدخال بريد الكتروني صالح!</p>" : '';


    if(empty($firstname_error) && empty($lastname_error) && empty($email_error)) {

        $sql = $con->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");

        $sql->execute(array($firstname, $lastname, $email));

        if($sql) {
            $success_msg = "<p class='alert alert-success my-4 msg'>تم التسجيل بنجاح (:</p>";
            $_POST['first_name'] = '';
            $_POST['last_name'] = '';
            $_POST['email'] = '';
        }
    }

}



?>