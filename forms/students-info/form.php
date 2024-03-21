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
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/forms/students-info" />
    <meta property="twitter:title" content="Student Information Form - Prince of Wales' College, Moratuwa" />
    <meta property="twitter:description"
        content="Student Information Form: Collect and manage student data effectively with this comprehensive form." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.webp" />






    <!-- Bootstrap core CSS -->

    <link href="/forms/resources/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="/forms/resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="/forms/resources/js/bootstrap.js"></script>
    <?php 
    include '../../database_connection.php';
    include '../../header.php';
    ?>

<title>Student Information Form</title>


<style>

legend {
    font-size: 18px;
    margin-top: 17px;
}

input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;

    /* Create a custom radio button */
    width: 15px;
    height: 15px;
    border: 2px solid maroon;
    border-radius: 50%;
    outline: none;
    cursor: pointer;
}

input[type="radio"]:checked {
    background-color: maroon; /
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
                       
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <select class="class form-control" name="colorOptions" style="min-height:30px; display: none;">
                        <option value="+">Class:</option>
                        <option value="Purple">Purple</option>
                        <option value="Gold">Gold</option>
                        <option value="Maroon">Maroon</option>
                        <option value="Blue">Blue</option>
                        <option value="Orange">Orange</option>
                        <option value="Green">Green</option>
                    </select>

                    <select class="class form-control" name="letterOptions" style="min-height:30px; display: none;">
                        <option value="+">Class:</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                       
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

            <div class="form-group">
                <label for="brother-count" class="col-sm-2 col-form-label">Number of Brother(s) Studying in
                    School</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="brother-count" required>
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


            <!--Mother's Name-->
            <div class="form-group">
                <label for="mother-name" class="col-sm-2 col-form-label">Mother's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="mother-name" id="mother-name">
                </div>
            </div>
            <!--Guardian's Name-->
            <div class="form-group">
                <label for="guardian-name" class="col-sm-2 col-form-label">Guardian's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="guardian-name" id="guardian-name">
                </div>
            </div>

            <br>

            <hr>

            <div class="form-group">
                <label for="father-occupation" class="col-sm-2 col-form-label">Father's Occupation</label>
            </div>
            <div class="form-group" id="father-occupation">
                <fieldset class="form-check">
                    <legend><b>Healthcare Practitioners and Technical Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="chiropractor"> Chiropractor</label><br>
                    <label><input type="radio" name="father-occupation" value="dentist"> Dentist</label><br>
                    <label><input type="radio" name="father-occupation" value="dietitian_nutritionist"> Dietitian or
                        Nutritionist</label><br>
                    <label><input type="radio" name="father-occupation" value="optometrist"> Optometrist</label><br>
                    <label><input type="radio" name="father-occupation" value="pharmacist"> Pharmacist</label><br>
                    <label><input type="radio" name="father-occupation" value="physician"> Physician</label><br>
                    <label><input type="radio" name="father-occupation" value="physician_assistant"> Physician
                        Assistant</label><br>
                    <label><input type="radio" name="father-occupation" value="podiatrist"> Podiatrist</label><br>
                    <label><input type="radio" name="father-occupation" value="registered_nurse"> Registered
                        Nurse</label><br>
                    <label><input type="radio" name="father-occupation" value="therapist"> Therapist</label><br>
                    <label><input type="radio" name="father-occupation" value="veterinarian"> Veterinarian</label><br>
                    <label><input type="radio" name="father-occupation" value="health_technologist_technician"> Health
                        Technologist or Technician</label><br>
                    <label><input type="radio" name="father-occupation" value="other_healthcare_practitioners"> Other
                        Healthcare Practitioners and Technical Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Healthcare Support Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="nursing_psychiatric_home_health_aide">
                        Nursing, Psychiatric, or Home Health Aide</label><br>
                    <label><input type="radio" name="father-occupation" value="therapist_aide"> Occupational and
                        Physical Therapist Assistant or Aide</label><br>
                    <label><input type="radio" name="father-occupation" value="other_healthcare_support"> Other
                        Healthcare Support Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Business, Executive, Management, and Financial Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="chief_executive"> Chief
                        Executive</label><br>
                    <label><input type="radio" name="father-occupation" value="operations_manager"> General and
                        Operations Manager</label><br>
                    <label><input type="radio" name="father-occupation" value="advertising_marketing_manager">
                        Advertising, Marketing, Promotions, Public Relations, and Sales Manager</label><br>
                    <label><input type="radio" name="father-occupation" value="operations_specialties_manager">
                        Operations Specialties Manager (e.g., IT or HR Manager)</label><br>
                    <label><input type="radio" name="father-occupation" value="construction_manager"> Construction
                        Manager</label><br>
                    <label><input type="radio" name="father-occupation" value="engineering_manager"> Engineering
                        Manager</label><br>
                    <label><input type="radio" name="father-occupation" value="accountant_auditor"> Accountant,
                        Auditor</label><br>
                    <label><input type="radio" name="father-occupation" value="business_operations_specialist"> Business
                        Operations or Financial Specialist</label><br>
                    <label><input type="radio" name="father-occupation" value="business_owner"> Business
                        Owner</label><br>
                    <label><input type="radio" name="father-occupation" value="furniture_business"> Furniture
                        Business</label><br>
                    <label><input type="radio" name="father-occupation" value="other_business_executive_management">
                        Other Business, Executive, Management, Financial Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend<b>Architecture and Engineering Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="architect_surveyor_cartographer">
                        Architect, Surveyor, or Cartographer</label><br>
                    <label><input type="radio" name="father-occupation" value="engineer"> Engineer</label><br>
                    <label><input type="radio" name="father-occupation" value="other_architecture_engineering"> Other
                        Architecture and Engineering Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend<b>Education, Training, and Library Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="postsecondary_teacher"> Postsecondary
                        Teacher (e.g., College Professor)</label><br>
                    <label><input type="radio" name="father-occupation" value="school_teacher"> Primary, Secondary, or
                        Special Education School Teacher</label><br>
                    <label><input type="radio" name="father-occupation" value="other_teacher_instructor"> Other Teacher
                        or Instructor</label><br>
                    <label><input type="radio" name="father-occupation" value="other_education_training_library"> Other
                        Education, Training, and Library Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Other Professional Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="arts_design_entertainment_sports_media">
                        Arts, Design, Entertainment, Sports, and Media Occupations</label><br>
                    <label><input type="radio" name="father-occupation"
                            value="computer_specialist_mathematical_science"> Computer Specialist, Mathematical
                        Science</label><br>
                    <label><input type="radio" name="father-occupation"
                            value="counselor_social_worker_community_service"> Counselor, Social Worker, or Other
                        Community and Social Service Specialist</label><br>
                    <label><input type="radio" name="father-occupation" value="lawyer_judge"> Lawyer, Judge</label><br>
                    <label><input type="radio" name="father-occupation" value="life_scientist"> Life Scientist (e.g.,
                        Animal, Food, Soil, or Biological Scientist, Zoologist)</label><br>
                    <label><input type="radio" name="father-occupation" value="physical_scientist"> Physical Scientist
                        (e.g., Astronomer, Physicist, Chemist, Hydrologist)</label><br>
                    <label><input type="radio" name="father-occupation" value="religious_worker"> Religious Worker
                        (e.g., Clergy, Director of Religious Activities or Education)</label><br>
                    <label><input type="radio" name="father-occupation" value="social_scientist_related_worker"> Social
                        Scientist and Related Worker</label><br>
                    <label><input type="radio" name="father-occupation" value="other_professional_occupation"> Other
                        Professional Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Office and Administrative Support Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation"
                            value="supervisor_administrative_support_workers"> Supervisor of Administrative Support
                        Workers</label><br>
                    <label><input type="radio" name="father-occupation" value="financial_clerk"> Financial
                        Clerk</label><br>
                    <label><input type="radio" name="father-occupation" value="secretary_administrative_assistant">
                        Secretary or Administrative Assistant</label><br>
                    <label><input type="radio" name="father-occupation"
                            value="material_recording_scheduling_dispatching_worker"> Material Recording, Scheduling,
                        and Dispatching Worker</label><br>
                    <label><input type="radio" name="father-occupation" value="other_office_administrative_support">
                        Other Office and Administrative Support Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Services Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="protective_service"> Protective Service
                        (e.g., Fire Fighting, Police Officer, Correctional Officer)</label><br>
                    <label><input type="radio" name="father-occupation" value="chef_head_cook"> Chef or Head
                        Cook</label><br>
                    <label><input type="radio" name="father-occupation" value="cook_food_preparation_worker"> Cook or
                        Food Preparation Worker</label><br>
                    <label><input type="radio" name="father-occupation" value="food_beverage_serving_worker"> Food and
                        Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</label><br>
                    <label><input type="radio" name="father-occupation" value="building_grounds_cleaning_maintenance">
                        Building and Grounds Cleaning and Maintenance</label><br>
                    <label><input type="radio" name="father-occupation" value="personal_care_service"> Personal Care and
                        Service (e.g., Hairdresser, Flight Attendant, Concierge)</label><br>
                    <label><input type="radio" name="father-occupation" value="sales_supervisor_retail_sales"> Sales
                        Supervisor, Retail Sales</label><br>
                    <label><input type="radio" name="father-occupation" value="retail_sales_worker"> Retail Sales
                        Worker</label><br>
                    <label><input type="radio" name="father-occupation" value="insurance_sales_agent"> Insurance Sales
                        Agent</label><br>
                    <label><input type="radio" name="father-occupation" value="sales_representative"> Sales
                        Representative</label><br>
                    <label><input type="radio" name="father-occupation" value="real_estate_sales_agent"> Real Estate
                        Sales Agent</label><br>
                    <label><input type="radio" name="father-occupation" value="other_services_occupation"> Other
                        Services Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="construction_extraction"> Construction
                        and Extraction (e.g., Construction Laborer, Electrician)</label><br>
                    <label><input type="radio" name="father-occupation" value="farming_fishing_forestry"> Farming,
                        Fishing, and Forestry</label><br>
                    <label><input type="radio" name="father-occupation" value="installation_maintenance_repair">
                        Installation, Maintenance, and Repair</label><br>
                    <label><input type="radio" name="father-occupation" value="production_occupations"> Production
                        Occupations</label><br>
                    <label><input type="radio" name="father-occupation" value="other_agriculture_maintenance_repair">
                        Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend>Transportation Occupations:</legend>
                    <label><input type="radio" name="father-occupation" value="aircraft_pilot_flight_engineer"> Aircraft
                        Pilot or Flight Engineer</label><br>
                    <label><input type="radio" name="father-occupation" value="motor_vehicle_operator"> Motor Vehicle
                        Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</label><br>
                    <label><input type="radio" name="father-occupation" value="other_transportation_occupation"> Other
                        Transportation Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Other Occupations:</b></legend>
                    <label><input type="radio" name="father-occupation" value="military"> Military</label><br>
                    <label><input type="radio" name="father-occupation" value="homemaker"> Homemaker</label><br>
                    <label><input type="radio" name="father-occupation" value="other_occupation"> Other
                        Occupation</label><br>
                    <label><input type="radio" name="father-occupation" value="dont_know"> Don't Know</label><br>
                    <label><input type="radio" name="father-occupation" value="not_applicable"> Not Applicable</label>
                </fieldset>
            </div>

            <div class="form-group">
                <label for="father-employer" class="col-sm-2 col-form-label">Father's Employer Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="father-employer" id="father-employer">
                </div>
            </div>

<hr>


            <div class="form-group">
                <label for="mother-occupation" class="col-sm-2 col-form-label">Mother's Occupation</label>
            </div>
            <div class="form-group" id="mother-occupation">
                <fieldset class="form-check">
                    <legend><b>Healthcare Practitioners and Technical Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="chiropractor"> Chiropractor</label><br>
                    <label><input type="radio" name="mother-occupation" value="dentist"> Dentist</label><br>
                    <label><input type="radio" name="mother-occupation" value="dietitian_nutritionist"> Dietitian or
                        Nutritionist</label><br>
                    <label><input type="radio" name="mother-occupation" value="optometrist"> Optometrist</label><br>
                    <label><input type="radio" name="mother-occupation" value="pharmacist"> Pharmacist</label><br>
                    <label><input type="radio" name="mother-occupation" value="physician"> Physician</label><br>
                    <label><input type="radio" name="mother-occupation" value="physician_assistant"> Physician
                        Assistant</label><br>
                    <label><input type="radio" name="mother-occupation" value="podiatrist"> Podiatrist</label><br>
                    <label><input type="radio" name="mother-occupation" value="registered_nurse"> Registered
                        Nurse</label><br>
                    <label><input type="radio" name="mother-occupation" value="therapist"> Therapist</label><br>
                    <label><input type="radio" name="mother-occupation" value="veterinarian"> Veterinarian</label><br>
                    <label><input type="radio" name="mother-occupation" value="health_technologist_technician"> Health
                        Technologist or Technician</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_healthcare_practitioners"> Other
                        Healthcare Practitioners and Technical Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Healthcare Support Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="nursing_psychiatric_home_health_aide">
                        Nursing, Psychiatric, or Home Health Aide</label><br>
                    <label><input type="radio" name="mother-occupation" value="therapist_aide"> Occupational and
                        Physical Therapist Assistant or Aide</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_healthcare_support"> Other
                        Healthcare Support Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Business, Executive, Management, and Financial Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="chief_executive"> Chief
                        Executive</label><br>
                    <label><input type="radio" name="mother-occupation" value="operations_manager"> General and
                        Operations Manager</label><br>
                    <label><input type="radio" name="mother-occupation" value="advertising_marketing_manager">
                        Advertising, Marketing, Promotions, Public Relations, and Sales Manager</label><br>
                    <label><input type="radio" name="mother-occupation" value="operations_specialties_manager">
                        Operations Specialties Manager (e.g., IT or HR Manager)</label><br>
                    <label><input type="radio" name="mother-occupation" value="construction_manager"> Construction
                        Manager</label><br>
                    <label><input type="radio" name="mother-occupation" value="engineering_manager"> Engineering
                        Manager</label><br>
                    <label><input type="radio" name="mother-occupation" value="accountant_auditor"> Accountant,
                        Auditor</label><br>
                    <label><input type="radio" name="mother-occupation" value="business_operations_specialist"> Business
                        Operations or Financial Specialist</label><br>
                    <label><input type="radio" name="mother-occupation" value="business_owner"> Business
                        Owner</label><br>
                    <label><input type="radio" name="mother-occupation" value="furniture_business"> Furniture
                        Business</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_business_executive_management">
                        Other Business, Executive, Management, Financial Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Architecture and Engineering Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="architect_surveyor_cartographer">
                        Architect, Surveyor, or Cartographer</label><br>
                    <label><input type="radio" name="mother-occupation" value="engineer"> Engineer</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_architecture_engineering"> Other
                        Architecture and Engineering Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Education, Training, and Library Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="postsecondary_teacher"> Postsecondary
                        Teacher (e.g., College Professor)</label><br>
                    <label><input type="radio" name="mother-occupation" value="school_teacher"> Primary, Secondary, or
                        Special Education School Teacher</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_teacher_instructor"> Other Teacher
                        or Instructor</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_education_training_library"> Other
                        Education, Training, and Library Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Other Professional Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="arts_design_entertainment_sports_media">
                        Arts, Design, Entertainment, Sports, and Media Occupations</label><br>
                    <label><input type="radio" name="mother-occupation"
                            value="computer_specialist_mathematical_science"> Computer Specialist, Mathematical
                        Science</label><br>
                    <label><input type="radio" name="mother-occupation"
                            value="counselor_social_worker_community_service"> Counselor, Social Worker, or Other
                        Community and Social Service Specialist</label><br>
                    <label><input type="radio" name="mother-occupation" value="lawyer_judge"> Lawyer, Judge</label><br>
                    <label><input type="radio" name="mother-occupation" value="life_scientist"> Life Scientist (e.g.,
                        Animal, Food, Soil, or Biological Scientist, Zoologist)</label><br>
                    <label><input type="radio" name="mother-occupation" value="physical_scientist"> Physical Scientist
                        (e.g., Astronomer, Physicist, Chemist, Hydrologist)</label><br>
                    <label><input type="radio" name="mother-occupation" value="religious_worker"> Religious Worker
                        (e.g., Clergy, Director of Religious Activities or Education)</label><br>
                    <label><input type="radio" name="mother-occupation" value="social_scientist_related_worker"> Social
                        Scientist and Related Worker</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_professional_occupation"> Other
                        Professional Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Office and Administrative Support Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation"
                            value="supervisor_administrative_support_workers"> Supervisor of Administrative Support
                        Workers</label><br>
                    <label><input type="radio" name="mother-occupation" value="financial_clerk"> Financial
                        Clerk</label><br>
                    <label><input type="radio" name="mother-occupation" value="secretary_administrative_assistant">
                        Secretary or Administrative Assistant</label><br>
                    <label><input type="radio" name="mother-occupation"
                            value="material_recording_scheduling_dispatching_worker"> Material Recording, Scheduling,
                        and Dispatching Worker</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_office_administrative_support">
                        Other Office and Administrative Support Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Services Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="protective_service"> Protective Service
                        (e.g., Fire Fighting, Police Officer, Correctional Officer)</label><br>
                    <label><input type="radio" name="mother-occupation" value="chef_head_cook"> Chef or Head
                        Cook</label><br>
                    <label><input type="radio" name="mother-occupation" value="cook_food_preparation_worker"> Cook or
                        Food Preparation Worker</label><br>
                    <label><input type="radio" name="mother-occupation" value="food_beverage_serving_worker"> Food and
                        Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</label><br>
                    <label><input type="radio" name="mother-occupation" value="building_grounds_cleaning_maintenance">
                        Building and Grounds Cleaning and Maintenance</label><br>
                    <label><input type="radio" name="mother-occupation" value="personal_care_service"> Personal Care and
                        Service (e.g., Hairdresser, Flight Attendant, Concierge)</label><br>
                    <label><input type="radio" name="mother-occupation" value="sales_supervisor_retail_sales"> Sales
                        Supervisor, Retail Sales</label><br>
                    <label><input type="radio" name="mother-occupation" value="retail_sales_worker"> Retail Sales
                        Worker</label><br>
                    <label><input type="radio" name="mother-occupation" value="insurance_sales_agent"> Insurance Sales
                        Agent</label><br>
                    <label><input type="radio" name="mother-occupation" value="sales_representative"> Sales
                        Representative</label><br>
                    <label><input type="radio" name="mother-occupation" value="real_estate_sales_agent"> Real Estate
                        Sales Agent</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_services_occupation"> Other
                        Services Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="construction_extraction"> Construction
                        and Extraction (e.g., Construction Laborer, Electrician)</label><br>
                    <label><input type="radio" name="mother-occupation" value="farming_fishing_forestry"> Farming,
                        Fishing, and Forestry</label><br>
                    <label><input type="radio" name="mother-occupation" value="installation_maintenance_repair">
                        Installation, Maintenance, and Repair</label><br>
                    <label><input type="radio" name="mother-occupation" value="production_occupations"> Production
                        Occupations</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_agriculture_maintenance_repair">
                        Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Transportation Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="aircraft_pilot_flight_engineer"> Aircraft
                        Pilot or Flight Engineer</label><br>
                    <label><input type="radio" name="mother-occupation" value="motor_vehicle_operator"> Motor Vehicle
                        Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_transportation_occupation"> Other
                        Transportation Occupation</label><br>
                </fieldset>

                <fieldset class="form-check">
                    <legend><b>Other Occupations:</b></legend>
                    <label><input type="radio" name="mother-occupation" value="military"> Military</label><br>
                    <label><input type="radio" name="mother-occupation" value="homemaker"> Homemaker</label><br>
                    <label><input type="radio" name="mother-occupation" value="other_occupation"> Other
                        Occupation</label><br>
                    <label><input type="radio" name="mother-occupation" value="dont_know"> Don't Know</label><br>
                    <label><input type="radio" name="mother-occupation" value="not_applicable"> Not Applicable</label>
                </fieldset>
            </div>

            <div class="form-group">
                <label for="mother-employer" class="col-sm-2 col-form-label">Mother's Employer Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="mother-employer" id="mother-employer">
                </div>
            </div>

            <script>
                function toggleGuardianFields() {
                    const fatherName = document.getElementById('father-name').value;
                    const motherName = document.getElementById('mother-name').value;
                    const guardianNameField = document.getElementById('guardian-name');

                    if (fatherName || motherName) {
                        // If either father or mother fields have input, disable guardian fields
                        guardianNameField.disabled = true;
                    } else {
                        // If neither father nor mother fields have input, enable guardian fields
                        guardianNameField.disabled = false;
                    }
                }

                // Attach the function to the input events of father and mother fields
                document.getElementById('father-name').addEventListener('input', toggleGuardianFields);
                document.getElementById('mother-name').addEventListener('input', toggleGuardianFields);

                // Call the function initially to set the initial state
                toggleGuardianFields();
            </script>





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
    include '../../footer.php';
?>

</body>

</html>
