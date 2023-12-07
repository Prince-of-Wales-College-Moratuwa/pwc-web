<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta name="description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/forms/students-info" />
    <meta property="og:title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta property="og:description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.jpg" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/forms/students-info" />
    <meta property="twitter:title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta property="twitter:description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.jpg" />





    <title>Student Information Form</title>

    <!-- Bootstrap core CSS -->

    <link href="/forms/resources/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="/forms/resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="/forms/resources/js/bootstrap.js"></script>
    <?php 
    include '../../database_connection.php';
    include 'header.php';
    ?>

<style>
    @media (max-width: 767px) {
        #father-occupation {
            width: 100%; /* Make the select box full width */
            max-width: 200px; /* Set a maximum width to avoid stretching too much */
        }

        /* Reduce the font size for better fit */
        #father-occupation option {
            font-size: 12px;
        }
    }
</style>

</head>

<body>

    <div class="container">
        <form class="form-horizontal" method="POST" action="/forms/students-info/form_insert.php">
            <h5 class="text-center"></h5>
            <h2 class="text-center"> Student Information Form</h2>
            <h4 class="text-center"> Prince of Wales' College, Moratuwa </h4>
            <div class="form-group"></div>


            <hr>
            <div class="form-group"></div>

            <div class="form-group">

                <div class="col-sm-2 col-form-label">
                    <label for="IndexNo">School Admission Number</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="IndexNo" name="IndexNo"
                        placeholder="School Admission No" required>
                </div>

            </div>

            <!--Fullname-->
            <div class="form-group">
                <label for="firstname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-9">

                    <input type="text" class="form-control"
                        placeholder="Disanayake Mudiyanselage Dushan Akalanka Disanayake" name="fname"
                        style='text-transform:uppercase' required>
                </div>
            </div>

            <!-- Date of birth -->
            <div class="form-group">
                <!-- Day Selector -->
                <label for="dob-date" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-2">
                    <select id="day" name="day" class="form-control" required>
                        <option value="">Day</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Month Selector -->
                <div class="col-sm-2">
                    <select id="dob-month" name="month" class="form-control" required>
                        <option value="">Month</option>
                        <?php 
                $monthNames = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                foreach ($monthNames as $index => $monthName) { 
            ?>
                        <option value="<?= $index + 1 ?>"><?= $monthName ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Year Selector -->
                <div class="col-sm-2">
                    <select id="dob-year" name="year" class="form-control" required>
                        <option value="">Year</option>
                        <?php for ($i = 2000; $i <= 2023; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>




            <!--class-->
            <div class="form-group">
                <label for="grade" class="col-sm-2 col-form-label">Grade</label>
                <div class="col-sm-2">
                    <select class="grade form-control" name="grade" style="min-height:30px;" onchange="showOptions()">
                        <option value="+">+</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>

                    <select class="class form-control" name="colorOptions" style="min-height:30px; display: none;">
                        <option value="+">+</option>
                        <option value="Purple">Purple</option>
                        <option value="Gold">Gold</option>
                        <option value="Maroon">Maroon</option>
                        <option value="Blue">Blue</option>
                        <option value="Orange">Orange</option>
                        <option value="Green">Green</option>
                    </select>

                    <select class="class form-control" name="letterOptions" style="min-height:30px; display: none;">
                        <option value="+">+</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                    </select>
                </div>

                <script>
                    function showOptions() {
                        var gradeSelect = document.querySelector(".grade");
                        var colorOptions = document.querySelectorAll(".class[name='colorOptions']")[0];
                        var letterOptions = document.querySelectorAll(".class[name='letterOptions']")[0];

                        if (gradeSelect.value == "1" || gradeSelect.value == "2") {
                            colorOptions.style.display = "block";
                            letterOptions.style.display = "none";
                        } else {
                            colorOptions.style.display = "none";
                            letterOptions.style.display = "block";
                        }
                    }
                </script>


            </div>

            <!--Address-->
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label ">Personal Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address1" placeholder="Address Line 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address2" placeholder="Address Line 2">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label "></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>
            </div>




            <div class="form-group">
                <label for="religion" class="col-sm-2 col-form-label ">Religion</label>
                <div class="col-sm-4">
                    <select id="religion" name="religion" style="min-height:30px;">
                        <option value="+">+</option>
                        <option value="Buddhism">Buddhism</option>
                        <option value="Christianity">Christianity</option>
                        <option value="R. Catholic">R. Catholic</option>
                        <option value="8">Islam</option>
                        <option value="7">Hinduism</option>
                        <option value="11">Other</option>

                    </select>
                </div>

            </div>


            <!-- Email-->

            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label ">Email Address</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email"
                        name="email">
                </div>

            </div>


            <!--Contact Number-->
            <div class="form-group">
                <label for="contact" class=" col-sm-2 col-form-label ">Contact No.</label>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile No." name="mobile"
                        pattern="[0-9()+-\s]*" required>
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="whatsapp" placeholder="WhatsApp No." name="whatsapp"
                        pattern="[0-9()+-\s]*" required>

                </div>
            </div>

            <br>

            <!--father's Name-->
            <div class="form-group">
                <label for="father-name" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="father-name" id="father-name">
                </div>
            </div>
            <div class="form-group">
                <label for="father-occupation" class="col-sm-2 col-form-label">Father's Occupation</label>
                <div class="col-sm-5">
                    <select id="father-occupation" class="form-control" style="width: 200px;" name="father-occupation">
                        <option value="default">-- Select one --</option>

                        <optgroup label="Healthcare Practitioners and Technical Occupations">
                            <option value="chiropractor">Chiropractor</option>
                            <option value="dentist">Dentist</option>
                            <option value="dietitian">Dietitian or Nutritionist</option>
                            <option value="optometrist">Optometrist</option>
                            <option value="pharmacist">Pharmacist</option>
                            <option value="physician">Physician</option>
                            <option value="physician-assistant">Physician Assistant</option>
                            <option value="podiatrist">Podiatrist</option>
                            <option value="registered-nurse">Registered Nurse</option>
                            <option value="therapist">Therapist</option>
                            <option value="veterinarian">Veterinarian</option>
                            <option value="health-technologist">Health Technologist or Technician</option>
                            <option value="other-healthcare">Other Healthcare Practitioners and Technical Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Healthcare Support Occupations">
                            <option value="nursing-aide">Nursing, Psychiatric, or Home Health Aide</option>
                            <option value="therapist-assistant">Occupational and Physical Therapist Assistant or
                                Aide
                            </option>
                            <option value="other-healthcare-support">Other Healthcare Support Occupation</option>
                        </optgroup>

                        <optgroup label="Business, Executive, Management, and Financial Occupations">
                            <option value="chief-executive">Chief Executive</option>
                            <option value="operations-manager">General and Operations Manager</option>
                            <option value="marketing-manager">Advertising, Marketing, Promotions, Public Relations,
                                and
                                Sales Manager</option>
                            <option value="operations-specialties-manager">Operations Specialties Manager (e.g., IT
                                or
                                HR Manager)</option>
                            <option value="construction-manager">Construction Manager</option>
                            <option value="engineering-manager">Engineering Manager</option>
                            <option value="accountant">Accountant, Auditor</option>
                            <option value="business-specialist">Business Operations or Financial Specialist</option>
                            <option value="business-owner">Business Owner</option>
                            <option value="furniture-business">Furniture Business</option>
                            <option value="other-business">Other Business, Executive, Management, Financial
                                Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Architecture and Engineering Occupations">
                            <option value="architect-surveyor">Architect, Surveyor, or Cartographer</option>
                            <option value="engineer">Engineer</option>
                            <option value="other-architecture">Other Architecture and Engineering Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Education, Training, and Library Occupations">
                            <option value="postsecondary-teacher">Postsecondary Teacher (e.g., College Professor)
                            </option>
                            <option value="school-teacher">Primary, Secondary, or Special Education School Teacher
                            </option>
                            <option value="other-teacher">Other Teacher or Instructor</option>
                            <option value="other-education">Other Education, Training, and Library Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Other Professional Occupations">
                            <option value="arts-design">Arts, Design, Entertainment, Sports, and Media Occupations
                            </option>
                            <option value="computer-specialist">Computer Specialist, Mathematical Science</option>
                            <option value="counselor-social-worker">Counselor, Social Worker, or Other Community and
                                Social Service Specialist</option>
                            <option value="lawyer-judge">Lawyer, Judge</option>
                            <option value="life-scientist">Life Scientist (e.g., Animal, Food, Soil, or Biological
                                Scientist, Zoologist)</option>
                            <option value="physical-scientist">Physical Scientist (e.g., Astronomer, Physicist,
                                Chemist,
                                Hydrologist)</option>
                            <option value="religious-worker">Religious Worker (e.g., Clergy, Director of Religious
                                Activities or Education)</option>
                            <option value="social-scientist">Social Scientist and Related Worker</option>
                            <option value="other-professional">Other Professional Occupation</option>
                        </optgroup>

                        <optgroup label="Office and Administrative Support Occupations">
                            <option value="supervisor-admin-support">Supervisor of Administrative Support Workers
                            </option>
                            <option value="financial-clerk">Financial Clerk</option>
                            <option value="secretary-admin-assistant">Secretary or Administrative Assistant</option>
                            <option value="material-recording">Material Recording, Scheduling, and Dispatching
                                Worker
                            </option>
                            <option value="other-admin-support">Other Office and Administrative Support Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Services Occupations">
                            <option value="protective-service">Protective Service (e.g., Fire Fighting, Police
                                Officer,
                                Correctional Officer)</option>
                            <option value="chef-head-cook">Chef or Head Cook</option>
                            <option value="cook-food-prep">Cook or Food Preparation Worker</option>
                            <option value="food-beverage-serving">Food and Beverage Serving Worker (e.g., Bartender,
                                Waiter, Waitress)</option>
                            <option value="building-maintenance">Building and Grounds Cleaning and Maintenance
                            </option>
                            <option value="personal-care-service">Personal Care and Service (e.g., Hairdresser,
                                Flight
                                Attendant, Concierge)</option>
                            <option value="sales-supervisor">Sales Supervisor, Retail Sales</option>
                            <option value="retail-sales-worker">Retail Sales Worker</option>
                            <option value="insurance-sales-agent">Insurance Sales Agent</option>
                            <option value="sales-representative">Sales Representative</option>
                            <option value="real-estate-sales-agent">Real Estate Sales Agent</option>
                            <option value="other-services">Other Services Occupation</option>
                        </optgroup>

                        <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations">
                            <option value="construction-extraction">Construction and Extraction (e.g., Construction
                                Laborer, Electrician)</option>
                            <option value="farming-fishing-forestry">Farming, Fishing, and Forestry</option>
                            <option value="installation-maintenance-repair">Installation, Maintenance, and Repair
                            </option>
                            <option value="production-occupations">Production Occupations</option>
                            <option value="other-agriculture">Other Agriculture, Maintenance, Repair, and Skilled
                                Crafts
                                Occupation</option>
                        </optgroup>

                        <optgroup label="Transportation Occupations">
                            <option value="aircraft-pilot">Aircraft Pilot or Flight Engineer</option>
                            <option value="motor-vehicle-operator">Motor Vehicle Operator (e.g., Ambulance, Bus,
                                Taxi,
                                or Truck Driver)</option>
                            <option value="other-transportation">Other Transportation Occupation</option>
                        </optgroup>

                        <optgroup label="Other Occupations">
                            <option value="military">Military</option>
                            <option value="homemaker">Homemaker</option>
                            <option value="other-occupation">Other Occupation</option>
                            <option value="dont-know">Don't Know</option>
                            <option value="not-applicable">Not Applicable</option>
                        </optgroup>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="father-employer" class="col-sm-2 col-form-label">Father's Employer Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="father-employer" id="father-employer">
                </div>
            </div>
            <br>
            <!--Mother's Name-->
            <div class="form-group">
                <label for="mother-name" class="col-sm-2 col-form-label">Mother's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="mother-name" id="mother-name">
                </div>
            </div>
            <div class="form-group">
                <label for="mother-occupation" class="col-sm-2 col-form-label">Mother's Occupation</label>
                <div class="col-sm-5">
                    <select id="mother-occupation" class="form-control" style="width: 200px;" name="mother-occupation">
                        <option value="default">-- Select one --</option>

                        <optgroup label="Healthcare Practitioners and Technical Occupations">
                            <option value="chiropractor">Chiropractor</option>
                            <option value="dentist">Dentist</option>
                            <option value="dietitian">Dietitian or Nutritionist</option>
                            <option value="optometrist">Optometrist</option>
                            <option value="pharmacist">Pharmacist</option>
                            <option value="physician">Physician</option>
                            <option value="physician-assistant">Physician Assistant</option>
                            <option value="podiatrist">Podiatrist</option>
                            <option value="registered-nurse">Registered Nurse</option>
                            <option value="therapist">Therapist</option>
                            <option value="veterinarian">Veterinarian</option>
                            <option value="health-technologist">Health Technologist or Technician</option>
                            <option value="other-healthcare">Other Healthcare Practitioners and Technical Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Healthcare Support Occupations">
                            <option value="nursing-aide">Nursing, Psychiatric, or Home Health Aide</option>
                            <option value="therapist-assistant">Occupational and Physical Therapist Assistant or
                                Aide
                            </option>
                            <option value="other-healthcare-support">Other Healthcare Support Occupation</option>
                        </optgroup>

                        <optgroup label="Business, Executive, Management, and Financial Occupations">
                            <option value="chief-executive">Chief Executive</option>
                            <option value="operations-manager">General and Operations Manager</option>
                            <option value="marketing-manager">Advertising, Marketing, Promotions, Public Relations,
                                and
                                Sales Manager</option>
                            <option value="operations-specialties-manager">Operations Specialties Manager (e.g., IT
                                or
                                HR Manager)</option>
                            <option value="construction-manager">Construction Manager</option>
                            <option value="engineering-manager">Engineering Manager</option>
                            <option value="accountant">Accountant, Auditor</option>
                            <option value="business-specialist">Business Operations or Financial Specialist</option>
                            <option value="business-owner">Business Owner</option>
                            <option value="furniture-business">Furniture Business</option>
                            <option value="other-business">Other Business, Executive, Management, Financial
                                Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Architecture and Engineering Occupations">
                            <option value="architect-surveyor">Architect, Surveyor, or Cartographer</option>
                            <option value="engineer">Engineer</option>
                            <option value="other-architecture">Other Architecture and Engineering Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Education, Training, and Library Occupations">
                            <option value="postsecondary-teacher">Postsecondary Teacher (e.g., College Professor)
                            </option>
                            <option value="school-teacher">Primary, Secondary, or Special Education School Teacher
                            </option>
                            <option value="other-teacher">Other Teacher or Instructor</option>
                            <option value="other-education">Other Education, Training, and Library Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Other Professional Occupations">
                            <option value="arts-design">Arts, Design, Entertainment, Sports, and Media Occupations
                            </option>
                            <option value="computer-specialist">Computer Specialist, Mathematical Science</option>
                            <option value="counselor-social-worker">Counselor, Social Worker, or Other Community and
                                Social Service Specialist</option>
                            <option value="lawyer-judge">Lawyer, Judge</option>
                            <option value="life-scientist">Life Scientist (e.g., Animal, Food, Soil, or Biological
                                Scientist, Zoologist)</option>
                            <option value="physical-scientist">Physical Scientist (e.g., Astronomer, Physicist,
                                Chemist,
                                Hydrologist)</option>
                            <option value="religious-worker">Religious Worker (e.g., Clergy, Director of Religious
                                Activities or Education)</option>
                            <option value="social-scientist">Social Scientist and Related Worker</option>
                            <option value="other-professional">Other Professional Occupation</option>
                        </optgroup>

                        <optgroup label="Office and Administrative Support Occupations">
                            <option value="supervisor-admin-support">Supervisor of Administrative Support Workers
                            </option>
                            <option value="financial-clerk">Financial Clerk</option>
                            <option value="secretary-admin-assistant">Secretary or Administrative Assistant</option>
                            <option value="material-recording">Material Recording, Scheduling, and Dispatching
                                Worker
                            </option>
                            <option value="other-admin-support">Other Office and Administrative Support Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Services Occupations">
                            <option value="protective-service">Protective Service (e.g., Fire Fighting, Police
                                Officer,
                                Correctional Officer)</option>
                            <option value="chef-head-cook">Chef or Head Cook</option>
                            <option value="cook-food-prep">Cook or Food Preparation Worker</option>
                            <option value="food-beverage-serving">Food and Beverage Serving Worker (e.g., Bartender,
                                Waiter, Waitress)</option>
                            <option value="building-maintenance">Building and Grounds Cleaning and Maintenance
                            </option>
                            <option value="personal-care-service">Personal Care and Service (e.g., Hairdresser,
                                Flight
                                Attendant, Concierge)</option>
                            <option value="sales-supervisor">Sales Supervisor, Retail Sales</option>
                            <option value="retail-sales-worker">Retail Sales Worker</option>
                            <option value="insurance-sales-agent">Insurance Sales Agent</option>
                            <option value="sales-representative">Sales Representative</option>
                            <option value="real-estate-sales-agent">Real Estate Sales Agent</option>
                            <option value="other-services">Other Services Occupation</option>
                        </optgroup>

                        <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations">
                            <option value="construction-extraction">Construction and Extraction (e.g., Construction
                                Laborer, Electrician)</option>
                            <option value="farming-fishing-forestry">Farming, Fishing, and Forestry</option>
                            <option value="installation-maintenance-repair">Installation, Maintenance, and Repair
                            </option>
                            <option value="production-occupations">Production Occupations</option>
                            <option value="other-agriculture">Other Agriculture, Maintenance, Repair, and Skilled
                                Crafts
                                Occupation</option>
                        </optgroup>

                        <optgroup label="Transportation Occupations">
                            <option value="aircraft-pilot">Aircraft Pilot or Flight Engineer</option>
                            <option value="motor-vehicle-operator">Motor Vehicle Operator (e.g., Ambulance, Bus,
                                Taxi,
                                or Truck Driver)</option>
                            <option value="other-transportation">Other Transportation Occupation</option>
                        </optgroup>

                        <optgroup label="Other Occupations">
                            <option value="military">Military</option>
                            <option value="homemaker">Homemaker</option>
                            <option value="other-occupation">Other Occupation</option>
                            <option value="dont-know">Don't Know</option>
                            <option value="not-applicable">Not Applicable</option>
                        </optgroup>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label for="mother-employer" class="col-sm-2 col-form-label">Mother's Employer Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="mother-employer" id="mother-employer">
                </div>
            </div>
            <br>
            <!--Guardian's Name-->
            <div class="form-group">
                <label for="guardian-name" class="col-sm-2 col-form-label">Guardian's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="guardian-name" id="guardian-name">
                </div>
            </div>
            <div class="form-group">
                <label for="guardian-occupation" class="col-sm-2 col-form-label">Guardian's Occupation</label>
                <div class="col-sm-5">
                    <select id="guardian-occupation" class="form-control" style="width: 200px;"
                        name="guardian-occupation">
                        <option value="default">-- Select one --</option>

                        <optgroup label="Healthcare Practitioners and Technical Occupations">
                            <option value="chiropractor">Chiropractor</option>
                            <option value="dentist">Dentist</option>
                            <option value="dietitian">Dietitian or Nutritionist</option>
                            <option value="optometrist">Optometrist</option>
                            <option value="pharmacist">Pharmacist</option>
                            <option value="physician">Physician</option>
                            <option value="physician-assistant">Physician Assistant</option>
                            <option value="podiatrist">Podiatrist</option>
                            <option value="registered-nurse">Registered Nurse</option>
                            <option value="therapist">Therapist</option>
                            <option value="veterinarian">Veterinarian</option>
                            <option value="health-technologist">Health Technologist or Technician</option>
                            <option value="other-healthcare">Other Healthcare Practitioners and Technical Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Healthcare Support Occupations">
                            <option value="nursing-aide">Nursing, Psychiatric, or Home Health Aide</option>
                            <option value="therapist-assistant">Occupational and Physical Therapist Assistant or
                                Aide
                            </option>
                            <option value="other-healthcare-support">Other Healthcare Support Occupation</option>
                        </optgroup>

                        <optgroup label="Business, Executive, Management, and Financial Occupations">
                            <option value="chief-executive">Chief Executive</option>
                            <option value="operations-manager">General and Operations Manager</option>
                            <option value="marketing-manager">Advertising, Marketing, Promotions, Public Relations,
                                and
                                Sales Manager</option>
                            <option value="operations-specialties-manager">Operations Specialties Manager (e.g., IT
                                or
                                HR Manager)</option>
                            <option value="construction-manager">Construction Manager</option>
                            <option value="engineering-manager">Engineering Manager</option>
                            <option value="accountant">Accountant, Auditor</option>
                            <option value="business-specialist">Business Operations or Financial Specialist</option>
                            <option value="business-owner">Business Owner</option>
                            <option value="furniture-business">Furniture Business</option>
                            <option value="other-business">Other Business, Executive, Management, Financial
                                Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Architecture and Engineering Occupations">
                            <option value="architect-surveyor">Architect, Surveyor, or Cartographer</option>
                            <option value="engineer">Engineer</option>
                            <option value="other-architecture">Other Architecture and Engineering Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Education, Training, and Library Occupations">
                            <option value="postsecondary-teacher">Postsecondary Teacher (e.g., College Professor)
                            </option>
                            <option value="school-teacher">Primary, Secondary, or Special Education School Teacher
                            </option>
                            <option value="other-teacher">Other Teacher or Instructor</option>
                            <option value="other-education">Other Education, Training, and Library Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Other Professional Occupations">
                            <option value="arts-design">Arts, Design, Entertainment, Sports, and Media Occupations
                            </option>
                            <option value="computer-specialist">Computer Specialist, Mathematical Science</option>
                            <option value="counselor-social-worker">Counselor, Social Worker, or Other Community and
                                Social Service Specialist</option>
                            <option value="lawyer-judge">Lawyer, Judge</option>
                            <option value="life-scientist">Life Scientist (e.g., Animal, Food, Soil, or Biological
                                Scientist, Zoologist)</option>
                            <option value="physical-scientist">Physical Scientist (e.g., Astronomer, Physicist,
                                Chemist,
                                Hydrologist)</option>
                            <option value="religious-worker">Religious Worker (e.g., Clergy, Director of Religious
                                Activities or Education)</option>
                            <option value="social-scientist">Social Scientist and Related Worker</option>
                            <option value="other-professional">Other Professional Occupation</option>
                        </optgroup>

                        <optgroup label="Office and Administrative Support Occupations">
                            <option value="supervisor-admin-support">Supervisor of Administrative Support Workers
                            </option>
                            <option value="financial-clerk">Financial Clerk</option>
                            <option value="secretary-admin-assistant">Secretary or Administrative Assistant</option>
                            <option value="material-recording">Material Recording, Scheduling, and Dispatching
                                Worker
                            </option>
                            <option value="other-admin-support">Other Office and Administrative Support Occupation
                            </option>
                        </optgroup>

                        <optgroup label="Services Occupations">
                            <option value="protective-service">Protective Service (e.g., Fire Fighting, Police
                                Officer,
                                Correctional Officer)</option>
                            <option value="chef-head-cook">Chef or Head Cook</option>
                            <option value="cook-food-prep">Cook or Food Preparation Worker</option>
                            <option value="food-beverage-serving">Food and Beverage Serving Worker (e.g., Bartender,
                                Waiter, Waitress)</option>
                            <option value="building-maintenance">Building and Grounds Cleaning and Maintenance
                            </option>
                            <option value="personal-care-service">Personal Care and Service (e.g., Hairdresser,
                                Flight
                                Attendant, Concierge)</option>
                            <option value="sales-supervisor">Sales Supervisor, Retail Sales</option>
                            <option value="retail-sales-worker">Retail Sales Worker</option>
                            <option value="insurance-sales-agent">Insurance Sales Agent</option>
                            <option value="sales-representative">Sales Representative</option>
                            <option value="real-estate-sales-agent">Real Estate Sales Agent</option>
                            <option value="other-services">Other Services Occupation</option>
                        </optgroup>

                        <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations">
                            <option value="construction-extraction">Construction and Extraction (e.g., Construction
                                Laborer, Electrician)</option>
                            <option value="farming-fishing-forestry">Farming, Fishing, and Forestry</option>
                            <option value="installation-maintenance-repair">Installation, Maintenance, and Repair
                            </option>
                            <option value="production-occupations">Production Occupations</option>
                            <option value="other-agriculture">Other Agriculture, Maintenance, Repair, and Skilled
                                Crafts
                                Occupation</option>
                        </optgroup>

                        <optgroup label="Transportation Occupations">
                            <option value="aircraft-pilot">Aircraft Pilot or Flight Engineer</option>
                            <option value="motor-vehicle-operator">Motor Vehicle Operator (e.g., Ambulance, Bus,
                                Taxi,
                                or Truck Driver)</option>
                            <option value="other-transportation">Other Transportation Occupation</option>
                        </optgroup>

                        <optgroup label="Other Occupations">
                            <option value="military">Military</option>
                            <option value="homemaker">Homemaker</option>
                            <option value="other-occupation">Other Occupation</option>
                            <option value="dont-know">Don't Know</option>
                            <option value="not-applicable">Not Applicable</option>
                        </optgroup>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label for="guardian-employer" class="col-sm-2 col-form-label">Guardian's Employer Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="guardian-employer" id="guardian-employer">
                </div>
            </div>

            <script>
                function toggleGuardianFields() {
                    const fatherName = document.getElementById('father-name').value;
                    const motherName = document.getElementById('mother-name').value;
                    const guardianNameField = document.getElementById('guardian-name');
                    const guardianOccupationField = document.getElementById('guardian-occupation');
                    const guardianEmployerField = document.getElementById('guardian-employer');

                    if (fatherName || motherName) {
                        // If either father or mother fields have input, disable guardian fields
                        guardianNameField.disabled = true;
                        guardianOccupationField.disabled = true;
                        guardianEmployerField.disabled = true;
                    } else {
                        // If neither father nor mother fields have input, enable guardian fields
                        guardianNameField.disabled = false;
                        guardianOccupationField.disabled = false;
                        guardianEmployerField.disabled = false;
                    }
                }

                // Attach the function to the input events of father and mother fields
                document.getElementById('father-name').addEventListener('input', toggleGuardianFields);
                document.getElementById('mother-name').addEventListener('input', toggleGuardianFields);

                // Call the function initially to set the initial state
                toggleGuardianFields();
            </script>



            <br>

            <div class="form-group">
                <label for="brother-count" class="col-sm-2 col-form-label">Number of Brother(s) Studying in
                    School</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="brother-count" required>
                </div>
            </div>

            <hr>




            <div class="form-group">

                <div class="form-check col-sm-12">

                    <input class="form-check-input" type="checkbox" id="gridCheck" checked>

                    <label class="form-check-label " for="gridCheck">

                        I hereby certified that the above mentioned information is true and accurate</label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="alert alert-danger">
                        <p style="color:red;">Please CHECK the information you provided are correct BEFORE click on
                            SUBMIT button.
                        </p>
                    </div>

                    <p><b>Before click on Submit button, you can click on the Reset button and fill application from
                            the beginning.</b></p>
                    <p>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="reset" name="reset" value="Clear"
                        class="btn btn-primary btn-sm py-3 px-4">Reset</button>
                    <button type="submit" name="submit" class="btn btn-success btn-sm py-3 px-4">Submit</button>
                </div>

            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <?php 
    include 'footer.php';
?>

</body>

</html>