<html>

<head>
<?php
include '../../header.php';
?>


    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

<?php

if(isset($_POST['submit'])){
 
    include '../resources/db_con.php';
 

$stech = $_POST['stech'];
$almedium = $_POST['almedium'];
$school = $_POST['school'];
$SchoolIndexNo = isset($_POST['SchoolIndexNo']) ? $_POST['SchoolIndexNo'] : "NULL";
$school_private = $_POST['school_private'];
$schoolname = isset($_POST['schoolname']) ? $_POST['schoolname'] : "NULL";
$schooldistrict = isset($_POST['schooldistrict']) ? $_POST['schooldistrict'] : "NULL";
$fname = strtoupper($_POST['fname']); 
$iname = strtoupper($_POST['iname']);
$birthday = $_POST['birthday'];
$nic = $_POST['nic'];
$address1 =strtoupper($_POST['address1']);
$address2 =strtoupper($_POST['address2']);
$city = strtoupper($_POST['city']);
$gname =strtoupper( $_POST['gname']);
$residential=$_POST['residential'];
$mobile1 = $_POST['mobile1'];
$mobile2 = $_POST['mobile2'];
$email = $_POST['email'];
$distance = $_POST['distance'];
$transport = $_POST['transport'];
$indexno = $_POST ['indexno'];
$olmedium = $_POST['olmedium'];
$religion = $_POST['religion'];
$sinhala = $_POST['sinhala'];
$english = $_POST['english'];
$science = $_POST['science'];
$maths = $_POST['maths'];
$history = $_POST['history'];
$op1 = $_POST['op1'];
$optional1 = $_POST['optional1'];
$op2 = $_POST['op2'];
$optional2 = $_POST['optional2'];
$op3 = $_POST['op3'];
$optional3 = $_POST['optional3'];
$referenceno= rand();


$nicCheckQuery = "SELECT * FROM pwc_db_al25 WHERE NIC = '$nic'";
$nicCheckResult = mysqli_query($db, $nicCheckQuery);

if (mysqli_num_rows($nicCheckResult) > 0) {

      $existingRecord = mysqli_fetch_assoc($nicCheckResult);
      $existingReferenceNo = $existingRecord['Reference_no'];

 
      $sql = "UPDATE pwc_db_al25 
      SET 
        Stream = 'Technology',
        Subject = '$stech',
        almedium = '$almedium',
        pwc_Other = '$school',
        SchoolIndexNo = '$SchoolIndexNo',
        School_Private_Candidate = '$school_private',
        School = '$schoolname',
        S_District = '$schooldistrict',
        Name = '$fname',
        Name_with_Initials = '$iname',
        Birthday = '$birthday',
        NIC = '$nic',
        Address1 = '$address1',
        Address2 = '$address2',
        City = '$city',
        Guardian_Name = '$gname',
        ResidentialNo = '$residential',
        Mobile1 = '$mobile1',
        Mobile2 = '$mobile2',
        E_mail = '$email',
        Distance = '$distance',
        Transport = '$transport',
        IndexNo = '$indexno',
        olMedium = '$olmedium',
        Religion = '$religion',
        Sinhala = '$sinhala',
        English = '$english',
        Science = '$science',
        Mathematics = '$maths',
        History = '$history',
        Optional1 = '$op1',
        Result1 = '$optional1',
        Optional2 = '$op2',
        Result2 = '$optional2',
        Optional3 = '$op3',
        Result3 = '$optional3'
      WHERE Reference_no = '$existingReferenceNo'";
      
 if(mysqli_query($db, $sql)){
                
  echo '<head><title>Sucessfully Updated</title></head>';


  echo '<br> <br> <br>';
  echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
  echo '    <div class="container text-center">';
  echo '        <div class="row justify-content-center">';
  echo '            <div class="col-lg-6">';
  echo '                <i class="bi bi-pencil display-1 text-primary"></i>';
  echo '                <h1 class="mb-4">Sucessfully Updated</h1>';
  echo '                <p class="mb-4">You have already Submitted This Form. Your Reference No. is <b>' . $existingReferenceNo .'</b>. and We have Updated Your New Submissions</p>';  
  echo '<a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="generate_pdf.php?ref=' . $existingReferenceNo . '" download onclick="redirectHome()">Download Your New Submissions</a>';
  echo '            </div>';
  echo '        </div>';
  echo '    </div>';
  echo '</div>';
}

  
} else {

$sql = "INSERT INTO pwc_db_al25
(Reference_no,Stream,Subject,almedium,pwc_Other,SchoolIndexNo,School_Private_Candidate,School,S_District,Name,Name_with_Initials,Birthday,NIC,Address1,Address2,City,Guardian_Name,ResidentialNo,Mobile1,Mobile2,E_mail,Distance,Transport,IndexNo,olMedium,Religion,Sinhala,English,Science,Mathematics,History,Optional1,Result1,Optional2,Result2,Optional3,Result3) 
VALUES
('$referenceno','Technology','$stech','$almedium','$school', '$SchoolIndexNo', '$school_private','$schoolname','$schooldistrict','$fname','$iname','$birthday','$nic','$address1','$address2','$city','$gname','$residential','$mobile1','$mobile2','$email','$distance','$transport','$indexno','$olmedium','$religion','$sinhala','$english','$science','$maths','$history','$op1','$optional1','$op2','$optional2','$op3','$optional3')";

if(mysqli_query($db, $sql)){

    
    echo '<div class="confetti-container"></div>';
    
    echo '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>';
    
    echo '
    <script>
      var end = Date.now() + (1 * 1000);
      var colors = [\'#800080\', \'#ffd700\', \'#800000\'];
    
      (function frame() {
        confetti({
          particleCount: 3,
          angle: 60,
          spread: 55,
          origin: { x: 0 },
          colors: colors
        });
        confetti({
          particleCount: 3,
          angle: 120,
          spread: 55,
          origin: { x: 1 },
          colors: colors
        });
    
        if (Date.now() < end) {
          requestAnimationFrame(frame);
        }
      }());
    </script>';

    echo '<head><title>Sucess Submission</title></head>';

    echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
    echo '    <div class="container text-center">';
    echo '        <div class="row justify-content-center">';
    echo '            <div class="col-lg-6">';
    echo '                <i class="bi bi-check-circle display-1 text-primary"></i>';
    echo '                <h1 class="mb-4">Thank You!</h1>';
    echo '                <p class="mb-4">Your Records Added Successfully.</p>';
    echo '                <p class="mb-4">Your Referrence number for the submission is <b>'. $referenceno .'</b></p>';
    echo '                <p class="mb-4">Keep this Reference Number for future use.</p>';  
    echo '<a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="generate_pdf.php?ref=' . $referenceno . '" download onclick="redirectHome()">Download Your Submissions</a>';
    echo '<script>';
    echo 'function redirectHome() {';
    echo '  setTimeout(function() {';
    echo '    window.location.href = "/";';
    echo '  }, 4000);';
    echo '}';
    echo '</script>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';

}
 else{
    echo '<br> <br> <br>';
    echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
    echo '    <div class="container text-center">';
    echo '        <div class="row justify-content-center">';
    echo '            <div class="col-lg-6">';
    echo '                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>';
    echo '                <h1 class="mb-4">ERROR :(</h1>';
    echo '                <p class="mb-4">Could not able to submit.</p>';
    echo '                <p class="mb-4">Please try again.' . mysqli_error($db);
    echo '                <p class="mb-4">Keep this Reference Number for future use.</p>';  
    echo '<button type="submit" name="finish" value="finish" class="btn btn-primary btn-sm py-3 px-4" onclick="window.location.replace(\'index.php\')"> OK </button>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
     mysqli_close($db);

}
} ?>

<?php
include '../../footer.php';
?>

</body>
</html>