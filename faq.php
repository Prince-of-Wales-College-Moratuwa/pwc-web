<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="jYZeftnqpxLLjE_8cKEhxIWBAB0ZD5EGWEF2z-3maLU" />

    <?php 
    include 'header.php';
    ?>

    <title>Frequently Asked Questions - Prince of Wales' College, Moratuwa</title>

    <style>
        .card-header {
            cursor: pointer;
        }

        .card-header {
            cursor: pointer;
            font-size: 20px;
        }

        .card-body {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h6 class="section-title bg-white text-start text-primary pe-3">HELP & SUPPORT</h6>
        <h1 class="mb-4">Frequently Asked Questions</h1>

        <div id="accordion">
            <!-- FAQ Items -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h52 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            1. How can I join to the Prince of Wales' College, Moratuwa?

                        </button>
                    </h52>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Prince of wales is a national school administrated under the Ministry of Education.
                        <br><br>
                        For Grade 1<br>
                        follow the admission procedure issued by the government at the end of previous year
                        for the new academic year.
                        <br><br>
                        Grade 3,4,7,8,9,10<br>
                        Also with the government announcement you can apply for the internal grades if only vacancies
                        are there. Application should be as the gazatted by the government.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            2. What is the educational level provided at Prince of Wales College, Moratuwa?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    It offers education from primary level up to advanced level (Grade 1 to Grade 13).
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            3. What are the Advance Level subjects streams offered at Prince of Wales College, Moratuwa?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    The college offers a wide range of subjects streams including mathematics, science, technology, commerce, and arts.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>