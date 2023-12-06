<html>

<head>

    <?php
include 'header.php';
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
if (isset($_POST['submit'])) {
    include '../resources/db_con.php';

    $day = isset($_POST['day']) ? $_POST['day'] : "";
    $month = isset($_POST['month']) ? $_POST['month'] : "";
    $year = isset($_POST['year']) ? $_POST['year'] : "";

    $selectedGrade = isset($_POST['grade']) ? $_POST['grade'] : "";
    $selectedClassColor = isset($_POST['colorOptions']) ? $_POST['colorOptions'] : "";
    $selectedClassLetter = isset($_POST['letterOptions']) ? $_POST['letterOptions'] : "";
    
    $selectedClass = "";
    
    if ($selectedGrade && ($selectedClassColor || $selectedClassLetter)) {
        $selectedClass = $selectedGrade . ($selectedClassColor ?: $selectedClassLetter);
    }
    

    $birthday = ""; 

    if ($day && $month && $year) {
        $birthday = sprintf("%04d-%02d-%02d", $year, $month, $day);
    }

    $IndexNo = $_POST['IndexNo'];
    $fname = strtoupper($_POST['fname']);
    $address1 = strtoupper($_POST['address1']);
    $address2 = strtoupper($_POST['address2']);
    $city = strtoupper($_POST['city']);
    $email = $_POST['email'];
    $religion = $_POST['religion'];
    $mobile = $_POST['mobile'];
    $whatsapp = $_POST['whatsapp'];
    $father_name = $_POST['father-name'];
    $father_occupation = $_POST['father-occupation'];
    $father_employer = $_POST['father-employer'];
    $mother_name = $_POST['mother-name'];
    $mother_occupation = $_POST['mother-occupation'];
    $mother_employer = $_POST['mother-employer'];
    $guardian_name = isset($_POST['guardian-name']) ? $_POST['guardian-name'] : "";
    $guardian_occupation = isset($_POST['guardian-occupation']) ? $_POST['guardian-occupation'] : "";
    $guardian_employer = isset($_POST['guardian-employer']) ? $_POST['guardian-employer'] : "";
    $brother_count = $_POST['brother-count'];

    $sql = "INSERT INTO student_information 
    (IndexNo, fname, grade_class, birthday, address1, address2, city, mobile, whatsapp, email, religion,
    father_name, father_occupation, father_employer, 
    mother_name, mother_occupation, mother_employer, 
    guardian_name, guardian_occupation, guardian_employer, 
    brother_count) 
    VALUES 
    ('$IndexNo', '$fname', '$selectedClass', '$birthday', '$address1', '$address2', '$city', '$mobile', '$whatsapp', '$email', '$religion',
    '$father_name', '$father_occupation', '$father_employer', 
    '$mother_name', '$mother_occupation', '$mother_employer', 
    '$guardian_name', '$guardian_occupation', '$guardian_employer', 
    '$brother_count')";


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
        echo '<a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="../../">Go to Home</a>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    
    } else {

    echo '<head><title>ERROR :(</title></head>';

        echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
        echo '    <div class="container text-center">';
        echo '        <div class="row justify-content-center">';
        echo '            <div class="col-lg-6">';
        echo '                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>';
        echo '                <h1 class="mb-4">ERROR :(</h1>';
        echo '                <p class="mb-4">Could not able to submit.</p>';
        echo '                <p class="mb-4">Please try again.' . mysqli_error($db);
        echo '<button type="submit" name="finish" value="finish" class="btn btn-primary btn-sm py-3 px-4" onclick="window.location.replace(\'index.php\')"> OK </button>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    mysqli_close($db);
}

?>

<?php
include 'footer.php';
?>

</body>
</html>