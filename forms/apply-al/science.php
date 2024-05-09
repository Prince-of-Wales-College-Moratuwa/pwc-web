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
    <meta name="title"
        content="Science Stream - Application for Advanced Level Admission Registration" />
    <meta name="description"
        content="Unlock your potential in the world of science! Join our science section to delve into the fascinating realms of biology, chemistry, physics, and more. Explore limitless opportunities for discovery and innovation. Apply now to shape your future in the sciences! - Prince of Wales' College, Moratuwa" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/apply-al/science" />
    <meta property="og:title"
        content="Science Stream - Application for Advanced Level Admission Registration" />
    <meta property="og:description"
        content="Unlock your potential in the world of science! Join our science section to delve into the fascinating realms of biology, chemistry, physics, and more. Explore limitless opportunities for discovery and innovation. Apply now to shape your future in the sciences! - Prince of Wales' College, Moratuwa" />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/apply-al/science" />
    <meta property="twitter:title"
        content="Science Stream - Application for Advanced Level Admission Registration" />
    <meta property="twitter:description"
        content="Unlock your potential in the world of science! Join our science section to delve into the fascinating realms of biology, chemistry, physics, and more. Explore limitless opportunities for discovery and innovation. Apply now to shape your future in the sciences! - Prince of Wales' College, Moratuwa" />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/about-pwc.webp" />





    <title>Science Stream - Application for Advanced Level Admission Registration</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <?php 
    include '../../database_connection.php';
    include '../../header.php';
    ?>


    <script type="text/javascript">
        $(function () {
            $("input[name='school']").click(function () {
                if ($("#chkNo").is(":checked")) {
                    $("#schoolname").removeAttr("disabled");
                    $("#schooldistrict").removeAttr("disabled");
                    $("#schoolname").focus();
                    $("#schooldistrict").focus();
                } else {
                    $("#schoolname").attr("disabled", "disabled");
                    $("#schooldistrict").attr("disabled", "disabled");

                }
            });
        });

        $(document).ready(function() {
            $('#schoolname').on('input', function(e) {
                var value = $(this).val();
                var newValue = value.replace(/['"]/g, ''); 
                $(this).val(newValue);
            });
        });
    </script>


</head>

<body>

    <div class="container">
        <form class="form-horizontal" method="POST" action="science_insert.php">
            <h5 class="text-center"></h5>
            <h4 class="text-center"> Application for 2025 Advanced Level Admission Registration </h4>
            <h4 class="text-center"> Science Stream </h4>
            <div class="form-group">
                <div class="alert alert-danger">
                    <p> Subjects are in Sinhala and English medium. </p>
                    <p> Students in Sinhala Medium can select <b>ICT subject</b> in English Medium</p>
                </div>
            </div>
    
            <!--Subject Selection-->
            <div class="form-group">
                <label for="subject_selection" class="col-sm-2 col-form-label"> Subjects wish to apply </label>
                <div class="col-sm-5">
                    <select id="subject" name="sscience" style="min-height:30px;">
                        <option value="Biology / Physics / Chemistry"> Biology / Physics / Chemistry</option>
                        <option value="Combined Mathematics / Physics / ICT (Sinhala Medium)"> Combined Mathematics / Physics / ICT (Sinhala Medium)</option>
                        <option value="Combined Mathematics / Physics / ICT (English Medium)"> Combined Mathematics / Physics / ICT (English Medium)</option>
                        <option value="Combined Mathematics / Physics / Chemistry"> Combined Mathematics / Physics / Chemistry </option>
                    
                    </select>
                </div>

                <div class="col-sm-5">
                    <label for="almedium" class="col-sm-2 col-form-label"> Medium </label>
                    <div class="col-sm-5">
                        <select id="almedium" name="almedium" style="min-height:30px;">
                            <option value="Sinhala"> Sinhala </option>
                            <option value="English"> English </option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group"></div>


            <div class="form-group">
                <label for="yesno" class="col-sm-3 col-form-label">Are you a student of Prince of Wales' College</label>
                <div class="col-sm-1">
                    <label class="radio-inline control-label">
                        <input checked="checked" id="chkYes" name="school" type="radio" value="Yes"> Yes
                    </label>
                </div>
                <div class="col-sm-1">
                    <label class="radio-inline control-label">
                        <input name="school" id="chkNo" type="radio" value="No"> No
                    </label>
                </div>

      

                <div class="col-sm-2 col-form-label">
                    <label for="nic">School Admission Number</label>
                </div>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="SchoolIndexNo" name="SchoolIndexNo" 
                        placeholder="School Admission No" required>
                </div>

            </div>
            

            <div class="form-group">
                <label for="school" class="col-sm-3 col-form-label">School or Private Candiate at GCE OL</label>
                <div class="col-sm-2">
                    <select id="sp" name="school_private" style="min-height:30px;">
                        <option value="school"> School Candidate </option>
                        <option value="private"> Private Candidate </option>


                    </select>
                </div>
            </div>



            <div class="form-group">
                <label for="princeofwales" class="col-sm-3 col-form-label">If you are not a student of Prince of Wales'
                    College</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="schoolname"
                        placeholder="Name of the School studied GCE OL" name="schoolname" disabled='disabled'>
                </div>
                <div class="col-sm-1">&nbsp; </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="schooldistrict"
                        placeholder="District of the Mentioned School" name="schooldistrict" disabled='disabled'>
                </div>
            </div>
            <hr>
            <!--Fullname-->
            <div class="form-group">
                <label for="firstname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-9">

                    <input type="text" class="form-control"
                        placeholder="Disanayake Mudiyanselage Dushan Akalanka Disanayake" name="fname"
                        style='text-transform:uppercase' required>
                </div>
            </div>
            <!--Name with Initials-->
            <div class="form-group">
                <label for="iname" class="col-sm-2 col-form-label">Name with Initials</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="D.M.D.A. Disanayake" name="iname"
                        style='text-transform:uppercase' required>
                </div>
            </div>

            <!--Date of birth-->
            <div class="form-group">
                <label for="birthday" class="col-sm-2">Birthday</label>
                <div class="col-sm-9">
                    <input type="date" id="birthday" name="birthday">
                </div>
            </div>
            <!--NIC-->
            <div class="form-group">
                <label for="nic" class="col-sm-2 col-form-label ">National Idenetity Card No. (if any)</label>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="nic" name="nic" maxlength="12">
                </div>
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

            <!--Guardien's Name-->
            <div class="form-group">
                <label for="gname" class="col-sm-2 col-form-label">Father/Mother/Guardian's Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="gname" required>
                </div>
            </div>
                       <!--Contact Number-->
            <div class="form-group">
                <label for="contact" class=" col-sm-2 col-form-label ">Contact No.</label>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="residential" placeholder="Residential No."
                        name="residential" pattern="[0-9()+-\s]*">
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="mobile1" placeholder="Mobile 1" name="mobile1" pattern="[0-9()+-\s]*">
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile 2" name="mobile2" pattern="[0-9()+-\s]*">
                </div>
            </div>
            

            <!-- Email-->

            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label ">Email address (if any)</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>

            </div>
            <br>
            <!--Distance-->
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="nic">Distance to the Prince of Wales' College from your place (in Km)</label>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="distance" name="distance" 
                        placeholder="Enter numeric values only" required>
                </div>

                <div class="col-sm-3">
                    <label for="in_ex"> Mode of Transport </label>
                </div>
                <div class="col-sm-3">
                    <select id="transport" name="transport" style="min-height:30px;">
                        <option value="Train"> Train</option>
                        <option value="Bus"> Bus </option>
                        <option value="Personal Vehicle"> Personal Vehicle </option>
                        <option value="Walk"> Walk </option>
                        <option value="Else"> Else </option>
                    </select> </div>
            </div>
            <hr>
            <div class="form-group col-12">


                <h4 class="text-center"> GCE Ordinary Level </h4>
            </div>
            <!--Index Number-->
            <div class="form-group">

                <div class="col-xs-6 col-sm-3">
                    <label for="nic">Examination Index Number</label>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <input type="text" class="form-control" id="indexno" name="indexno" 
                        placeholder="Examination Index No" required>
                </div>


            </div>

            <!--olMedium-->
            <div class="form-group">
                <label for="olmedium" class="col-sm-2">Medium</label>
                <div class="col-sm-9">
                    <label class="radio-inline control-label">
                        <input checked="checked" name="olmedium" type="radio" value="Sinhala"> Sinhala
                    </label>
                    <label class="radio-inline control-label">
                        <input name="olmedium" type="radio" value="English"> English
                    </label>

                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Religion</td>
                            <td>
                                <select id="result1" name="religion">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Language & Literature</td>
                            <td>
                                <select name="sinhala" id="result2">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>English Language</td>
                            <td>
                                <select id="result3" name="english">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>


                        <tr>
                            <th scope="row">4</th>
                            <td>Science</td>
                            <td>
                                <select id="result" name="science">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td>Mathematics</td>
                            <td>
                                <select id="result5" name="maths">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td>History</td>
                            <td>
                                <select id="result6" name="history">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td> <select id="op1" name="op1">
                                    <option value="Business & Accounting Studies"> Business & Accounting Studies
                                    </option>
                                    <option value="Geography"> Geography</option>
                                    <option value="Civic"> Civic Education </option>
                                    <option value="Entrepreneurship"> Entrepreneurship Studies </option>
                                    <option value="SecondLanguageSinhala"> Second Language (Sinhala) </option>
                                    <option value="SecondLanguageTamil"> Second Language (Tamil) </option>
                                    <option value="Pali"> Pali </option>
                                    <option value="Sanskrit"> Sanskrit </option>
                                    <option value="French"> French </option>
                                    <option value="German"> German </option>
                                    <option value="Hindi"> Hindi </option>
                                    <option value="Japanese"> Japanese </option>
                                    <option value="Arabic"> Arabic </option>
                                    <option value="Korean"> Korean </option>
                                    <option value="Chinese"> Chinese </option>
                                    <option value="Russian"> Russian </option>

                                </select>
                            </td>
                            <td>
                                <select id="result7" name="optional1">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>


                        <tr>
                            <th scope="row">8</th>
                            <td> <select id="op2" name="op2">
                                    <option value="MusicOriental"> Music (Oriental) </option>
                                    <option value="MusicWestern"> Music (Western) </option>
                                    <option value="Art"> Art </option>
                                    <option value="DancingOriental"> Dancing (Oriental) </option>
                                    <option value="DancingBharata"> Dancing (Bharata) </option>
                                    <option value="English Lit">English Lit</option>
                                    <option value="Sinhala Lit">Sinhala Lit</option>
                                    <option value="Tamil Lit">Tamil Lit</option>
                                    <option value="Arabic Lit">Arabic Lit</option>
                                    <option value="DramaTheatreSinhala"> Drama(Sinhala) </option>
                                    <option value="DramaTheatreTamil"> Drama (Tamil) </option>
                                    <option value="DramaTheatreEnglish"> Drama (English) </option>

                                </select>
                            </td>
                            <td>
                                <select id="result7" name="optional2">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">9 </th>
                            <td> <select id="op3" name="op3">
                                    <option value="Information and Communication Technology">ICT</option>
                                    <option value="AgricultureFoodTech">Agriculture</option>
                                    <option value="AquaticBioresourcesTech">Aquatic Bioresources Tech</option>
                                    <option value="ArtCrafts">Art & Crafts</option>
                                    <option value="Home Economics">Home Econ</option>
                                    <option value="Health Physical Education"> Health</option>
                                    <option value="Communication Media Studies">Media Studies</option>
                                    <option value="Design Construction Tech"> Design & Construction Tech </option>
                                    <option value="Design Mechanical Tech"> Design & Mechanical Tech </option>
                                    <option value="Design Electrical Electronic Tech"> Design, trical & tronic Tech</option>
                                    <option value="Electronic Writing Shorthand Sinhala"> Electronic Writing (Sinhala) </option>
                                    <option value="Electronic Writing Shorthand Tamil"> Electronic Writing (Tamil) </option>

                                </select>
                            </td>
                            <td>
                                <select id="result9" name="optional3">
                                    <option value="+"> + </option>
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="S"> S </option>
                                    <option value="W"> W </option>

                                </select>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>


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
                            SUBMIT button. <br><b> A reference number will be provided after successful submission.</b>
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

    <script>
        // Get references to the radio buttons and the select element
        const chkYes = document.getElementById("chkYes");
        const chkNo = document.getElementById("chkNo");
        const SchoolIndexNo = document.getElementById("SchoolIndexNo");

        // Add an event listener to the radio buttons to enable/disable the select element
        chkYes.addEventListener("change", function () {
            SchoolIndexNolass.disabled = false; // Enable the select element when "Yes" is selected
        });

        chkNo.addEventListener("change", function () {
            SchoolIndexNo.disabled = true; // Disable the select element when "No" is selected
        });

    </script>

    <?php 
    include '../../footer.php';
?>

</body>

</html>
