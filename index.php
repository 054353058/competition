<?php 

    include 'insert_db.php';
    include 'connect.php';


    $sql = $con->prepare("SELECT * FROM users ORDER BY RAND() LIMIT 1");
    $sql->execute(array());
    $users = $sql->fetchAll();


?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اربح مع صهيب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="container d-flex flex-column justify-content-center align-items-center py-5">
        <img src="main.jpg" alt="" class="img-fluid">
        <h2>إربح مع صهيب</h2>
        <p>للسحب على ربح نسخة مجانية من برنامج</p>
        <div id="demo" class="text-primary fs-5"></div>
    </div>
    <div class="container">
        <section>
            <div class="content">
                <div class="conditions my-4">
                    <h2>للدخول في السحب اتبع ما يلي:</h2>
                    <p>تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</p>
                    <p>سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</p>
                    <p>خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</p>
                    <p>بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</p>
                    <p>الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</p>
                </div>
            </div>
            <form action="" method="POST">
                <h2> أدخل معلوماتك: </h2>
                <div>
                    <label for="" class="form-label text-primary">الأسم الأول</label>
                    <input type="text" name="first_name" class="form-control">
                    <?php echo $firstname_error ?? null?>
                </div>
                <div>
                    <label for="" class="form-label text-primary">الأسم الأخير</label>
                    <input type="text" name="last_name" class="form-control" >
                    <?php echo $lastname_error ?? null?>
                </div>
                <div>
                    <label for="" class="form-label text-primary">البريد الالكتروني</label>
                    <input type="email" name="email" class="form-control">
                    <?php echo $email_error ?? null?>
                </div>
                
                <?php echo $success_msg ?? null?>
                <?php echo $participated_error ?? null?>

                <input type="submit" value="إرسال المعلومات" class="btn btn-primary">
            </form>
        </section>

        <div id="loader-con">
            <div id="loader">
                <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
        </div>


        <!-- Button trigger modal -->
        <div class="choose-winner w-100 my-4 text-center">
            <button type="button" class="btn btn-primary w-50 fw-bold fs-5"  id="winner">
                أختيار الرابح
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 ps-2" id="myModalLabel">الرابح في المسابقة 🎉</h1>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body bg-light">
                    <div class="users">
                        <?php foreach($users as $user) {?>

                            <div class="user-box  d-flex justify-content-center align-items-center flex-column">
                                <h1><?php echo $user['first_name'] .' '. $user['last_name']?></h1>
                            </div>

                        <?php }?>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            
            </div>
        </div>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>

<?php 




    


?>