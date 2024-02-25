<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daily Study Period Log</title>

    <?php include 'header.php'; ?>

</head>

<body>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">DAILY</h6>
                <h1 class="mb-5">PERIOD LOG</h1>
            </div>

            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">A</th>
                                <th scope="col">B</th>
                                <th scope="col">C</th>
                                <th scope="col">D</th>
                                <th scope="col">E</th>
                                <th scope="col">F</th>
                                <th scope="col">G</th>
                                <th scope="col">H</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $query = "SELECT * FROM period_log LIMIT 3";

                            $statement = $connect->prepare($query);

                            $statement->execute();

                            if ($statement->rowCount() > 0) {
                                foreach ($statement->fetchAll() as $row) {
                            ?>

                            <tr>
                                <th scope="row"><?php echo $row["id"]; ?></th>
                                <td><?php echo $row["A"]; ?></td>
                                <td><?php echo $row["B"]; ?></td>
                                <td><?php echo $row["C"]; ?></td>
                                <td><?php echo $row["D"]; ?></td>
                                <td><?php echo $row["E"]; ?></td>
                                <td><?php echo $row["F"]; ?></td>
                                <td><?php echo $row["G"]; ?></td>
                                <td><?php echo $row["H"]; ?></td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <p><i>Last Updated:
                            <?php
                            $sql = "SHOW TABLE STATUS LIKE 'period_log'";

                            $statement = $connect->prepare($sql);
                            $statement->execute();
                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                            if ($row) {
                                $lastUpdateTime = $row['Update_time'];
                                echo $lastUpdateTime;
                            } else {
                                echo "No records found.";
                            }
                            ?>
                        </i></p>
                </div>
            </div>



            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">A</th>
                                <th scope="col">B</th>
                                <th scope="col">C</th>
                                <th scope="col">D</th>
                                <th scope="col">E</th>
                                <th scope="col">F</th>
                                <th scope="col">G</th>
                                <th scope="col">H</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $query = "SELECT * FROM period_log LIMIT 3, 18446744073709551615";


                            $statement = $connect->prepare($query);

                            $statement->execute();

                            if ($statement->rowCount() > 0) {
                                foreach ($statement->fetchAll() as $row) {
                            ?>

                            <tr>
                                <th scope="row"><?php echo $row["id"]; ?></th>
                                <td><?php echo $row["A"]; ?></td>
                                <td><?php echo $row["B"]; ?></td>
                                <td><?php echo $row["C"]; ?></td>
                                <td><?php echo $row["D"]; ?></td>
                                <td><?php echo $row["E"]; ?></td>
                                <td><?php echo $row["F"]; ?></td>
                                <td><?php echo $row["G"]; ?></td>
                                <td><?php echo $row["H"]; ?></td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <p><i>Last Updated:
                            <?php
                            $sql = "SHOW TABLE STATUS LIKE 'period_log'";

                            $statement = $connect->prepare($sql);
                            $statement->execute();
                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                            if ($row) {
                                $lastUpdateTime = $row['Update_time'];
                                echo $lastUpdateTime;
                            } else {
                                echo "No records found.";
                            }
                            ?>

                        </i></p>
                </div>
            </div>

        </div>
    </div>


    <?php include 'footer.php'; ?>

</body>

</html>