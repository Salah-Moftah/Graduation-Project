<!DOCTYPE html>
<?php
if(isset($_POST["signup"])){
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

require 'connect.php';

//select  where field name=email
$select="SELECT * from users where  email='$email'";
$query=  mysqli_query($con, $select);

  if(mysqli_num_rows($query)>0){
    echo '<script>alert("email already exists plz sign in");window.location.assign("signin.php");</script>';
  }
  else{
    //email does not exists
    $insert="insert into users( `name`, `email`, `password` ) "
    . "values('$name','$email','$password')";

    $query2=  mysqli_query($con, $insert);

    if($query2){
      echo '<script>window.location.assign("welcome.php");</script>';
    }
  }

}

// SignIn

if(isset($_POST["signin"])){
$password=$_POST["password-1"];
$email=$_POST["email-1"];

require 'connect.php';

if(!$con){
  
  echo 'nooo connect';
  
}


$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    if($num_rows != 0){
        $_SESSION['email']= $row['email'];
        $_SESSION['password']= $row['password'];
        header('Location:welcome.php');
        exit();

    }else{
      echo '<script>alert("wrong email or password");</script>';
    }

}

?>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Render all elements normally -->
    <link rel="stylesheet" href="Css/Normalize.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Css/all.min.css" />
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <title>contact</title>
  </head>
  <body>
    <!-- Start header -->
    <header>
      <div class="container">
        <a href="index.html">
          <div class="logo">
            <img src="imgs/logo.png" alt="Logo">
          </div>
        </a>
        <ul class="head-ul">
          <li>
            <a href="index.html">الرئيسية</a>
          </li>
          <li>
            <a href="benefits.html">فوائد الاقلاع عن التدخين</a>
          </li>
          <li>
            <a href="program.html">برنامج الاقلاع عن التدخين</a>
          </li>
        </ul>
        <a href="contact.html" class="contact-1">تواصل معنا</a>
      </div>
    </header>
    <!-- End header -->
    <!-- Start contact -->
    <section class="body">
      <div class="wrapper">
        <div class="form signup">
          <h3>انشاء حساب جديد</h3>
          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="الاسم بالكامل" required>
            <input type="email" name="email" placeholder="البريد الالكتروني" required>
            <input type="password" name="password" placeholder="كلمة السر" required>
            <div class="checkbox">
              <input type="checkbox" id="signupCheck">
              <label for="signupCheck">أوافق علي الشروط</label>
            </div>
            <input type="submit" name="signup" value="انشاء حساب">
          </form>
        </div>
        <div class="form login">
          <h3>تسجيل الدخول</h3>
          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <input type="email" name="email-1" placeholder="البريد الالكتروني" required>
            <input type="password" name="password-1" placeholder="كلمة السر" required>
            <a href="#">نسيت كلمة السر؟</a>
            <input type="submit" name="signin" value="تسجيل الدخول">
          </form>
        </div>
      </div>
    </section>
    <!-- End contact -->
    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="box">
          <ul class="ul-social">
            <li>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </li>
          </ul>
          <div class="line">
            <i class="fas fa-phone-volume fa-fw"></i>
            <div class="info">
              <span>20123456789+</span>
              <span>20198765432+</span>
            </div>
          </div>
          <a href="signup.php" class="btn-footer">تواصل معنا</a>
        </div>
        <div class="box">
          <h3 class="h3-1">من نحن</h3>
          <p class="p-1">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, rem
            explicabo! Est officiis dolorum natus nihil iusto in itaque
            voluptate modi hic, eligendi vitae quisquam earum. Ipsam ipsa
            molestiae amet.
          </p>
        </div>
        <div class="box">
          <h3 class="h3-2">روابط مفيدة</h3>
          <ul class="link">
            <li>
              <a href="index.html">الرئيسية</a>
            </li>
            <li>
              <a href="benefits.html">فوائد الإقلاع عن التدخين</a>
            </li>
            <li>
              <a href="program.html">برنامج الاقلاع عن التدخين</a>
            </li>
            <li>
              <a href="advice.html">نصائح للإقلاع عن التدخين</a>
            </li>
            <li>
            <a href="universitie.html">التدخين في الجامعات </a>
            </li>
          </ul>
        </div>
        <div class="box image">
          <img class="img-1"src="imgs/logo-footer.png" alt="Photo" />
          <img class="img-2" src="imgs/logo-white.png" alt="Photo" />
        </div>
      </div>
      <p class="copyright">Copyright© 2023. Design By Student Programming And Development Team At CIS</p>
    </footer>
    <!-- End Footer -->
    <script src="main.js">
      
    </script>
  </body>
</html>
