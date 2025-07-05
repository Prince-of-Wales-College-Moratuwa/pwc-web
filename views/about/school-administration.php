<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>School Administration</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <?php
    $page = 'about';
    include '../../database_connection.php';
    ?>

    <!-- Primary Meta Tags -->
    <meta name="title" content="School Administration | Prince of Wales' College" />
    <meta name="description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta name="keywords" content="prince of wales college staff, prince of wales college principal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/about/school-administration" />
    <meta property="og:title" content="School Administration | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/about/school-administration" />
    <meta property="twitter:title" content="School Administration | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />

    <?php include '../includes/header.php'; ?>

    <style>
        .strip-card {
            display: flex;
            align-items: stretch;
            background: #f8f9fa;
            padding: 0;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
            overflow: hidden;
        }

        .strip-card-img {
            flex-shrink: 0;
            width: 140px;
            height: auto;
            overflow: hidden;
        }

        .strip-card-img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            display: block;
        }

        .strip-card-text {
            padding: 15px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .strip-card-text h5 {
            margin: 0 0 0.2rem 0;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .strip-card-text small {
            color: #555;
            font-size: 0.9rem;
        }

        @media (max-width: 350px) {
            .strip-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .strip-card-img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            .strip-card-img img {
                height: auto;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">School</h6>
                <h1 class="mb-3">ADMINISTRATION</h1>
                <p class="text-muted fst-italic mt-2">
                    🛠️ New changes and updates to the administration section will be published here soon. Stay tuned!
                </p>
            </div>

            <div class="d-flex flex-column gap-4">
                <?php
                $query = "SELECT * FROM about_school_administration";
                $statement = $connect->prepare($query);
                $statement->execute();

                if ($statement->rowCount() > 0) {
                    $delay = 0.1;
                    foreach ($statement->fetchAll() as $row) {
                ?>
                        <div class="strip-card wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="strip-card-img">
                                <img src="/content/img/img-about/administration/<?php echo $row["img"]; ?>"
                                    alt="<?php echo htmlspecialchars($row["name"]); ?>" />
                            </div>
                            <div class="strip-card-text">
                                <small><?php echo htmlspecialchars($row["post"]); ?></small>
                                <h5><?php echo htmlspecialchars($row["name"]); ?></h5>
                                <small><?php echo htmlspecialchars($row["quali"]); ?></small>
                            </div>
                        </div>
                <?php
                        $delay += 0.1;
                    }
                }
                ?>
            </div>
        </div>

    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>