<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<!-- Add Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background: transparent;
    }

    .notification {
        position: fixed;
        bottom: 20px;
        left: 20px;
        display: flex;
        align-items: center;
        background: white;
        border-left: 4px solid #800000;
        color: black;
        padding: 10px 20px;
        border-radius: 6px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        opacity: 0;
        transform: translateX(-100%);
        transition: transform 0.5s ease, opacity 0.5s ease;
        z-index: 9999;
        /* Make sure it's above all layers */
    }

    .notification.active {
        opacity: 1;
        transform: translateX(0);
    }

    .notification.exit {
        opacity: 0;
        transform: translateX(-100%);
    }

    .notification-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #f0f0f0;
        border-radius: 50%;
        margin-right: 15px;
    }

    .notification-icon i {
        font-size: 24px;
        color: #800000;
        /* Icon color */
    }

    .notification-content {
        display: flex;
        flex-direction: column;
    }

    .notification-title {
        font-size: 16px;
        font-weight: 500;
    }

    .notification-message {
        font-size: 14px;
        opacity: 0.8;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .notification {
            bottom: 10px;
            left: 10px;
            right: 10px;
            padding: 8px 15px;
            font-size: 14px;
            flex-direction: column;
            align-items: flex-start;
        }

        .notification-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .notification-icon i {
            font-size: 20px;
        }

        .notification-title {
            font-size: 14px;
        }

        .notification-message {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .notification {
            bottom: 8px;
            left: 8px;
            right: 8px;
            padding: 6px 12px;
        }

        .notification-icon {
            width: 25px;
            height: 25px;
            margin-right: 8px;
        }

        .notification-icon i {
            font-size: 18px;
        }

        .notification-title {
            font-size: 12px;
        }

        .notification-message {
            font-size: 10px;
        }
    }
</style>

<?php
date_default_timezone_set('Asia/Colombo');
$today = date('Y-m-d');
$notifications = [
    '01-01' => ['title' => 'Happy New Year', 'message' => 'Let\'s welcome the new year with excitement!', 'icon' => 'fas fa-star'],
    '02-02' => ['title' => 'Anniversary of CMBU', 'message' => 'Happy Anniversary to our Media Unit!', 'icon' => 'fas fa-cogs'],
    '02-04' => ['title' => 'Happy Independence Day!', 'message' => 'Celebrating the freedom and pride of our nation. Let’s keep working together for a brighter future.', 'icon' => 'fas fa-flag'],
    '03-04' => ['title' => 'Founder\'s Day', 'message' => 'Celebrating our Founder\'s Day with pride.', 'icon' => 'fas fa-flag'],
    '04-13' => ['title' => 'Sinhala and Tamil New Year', 'message' => 'Wishing everyone a prosperous New Year!', 'icon' => 'fas fa-sun'],
    '04-14' => ['title' => 'Sinhala and Tamil New Year', 'message' => 'Wishing everyone a prosperous New Year!', 'icon' => 'fas fa-sun'],
    '05-10' => ['title' => 'Happy Mother\'s Day', 'message' => 'A heartfelt thank you to all the wonderful mothers in our school community.', 'icon' => 'fas fa-female'],
    '06-05' => ['title' => 'Happy World Environment Day', 'message' => 'Let\'s work together to create a greener and cleaner future for our planet.', 'icon' => 'fas fa-leaf'],
    '06-19' => ['title' => 'Happy Father\'s Day', 'message' => 'A big thank you to all the fathers for their love and support!', 'icon' => 'fas fa-male'],
    '09-08' => ['title' => 'Happy World Literacy Day!', 'message' => 'Let’s spread the gift of literacy and knowledge to every corner of the world.', 'icon' => 'fas fa-book'],
    '09-14' => ['title' => (date("Y") - 1876) . ' Years of Excellence','message' => 'Happy Birthday to Prince of Wales College!','icon' => 'fas fa-birthday-cake'],
    '10-01' => [
    'title' => 'Happy Children\'s Day', 'message' => 'A day to celebrate the joy, innocence, and potential of every child. Have a fun-filled day!', 'icon' => 'fas fa-child'],
    '10-05' => ['title' => 'Happy Teachers\' Day', 'message' => 'Celebrating the dedication and hard work of our amazing teachers!', 'icon' => 'fas fa-chalkboard-teacher'],
    '12-24' => ['title' => 'Merry Christmas', 'message' => 'Wishing everyone a season filled with love, joy, and peace!', 'icon' => 'fas fa-gift'],
    '12-25' => ['title' => 'Merry Christmas', 'message' => 'Wishing everyone a joyful Christmas!', 'icon' => 'fas fa-tree'],
    '12-01' => [
        'title' => 'On this day in 1875',
        'message' => 'On December 1, 1875, in memory of King Edward VII, the Duke of Wales, the Grand Commander of Moratuwa received permission to establish Prince of Wales College.',
        'icon' => 'fas fa-flag'
    ],
    '11-27' => [
        'title' => 'On this day in 1875',
        'message' => 'On November 27, 1875, the Sri Lankan government granted permission to build the Prince of Wales College.',
        'icon' => 'fas fa-building'
    ],
    '07-04' => [
        'title' => 'On this day in 1991',
        'message' => 'On July 4, 1991, Prince of Wales College was named as national school.',
        'icon' => 'fas fa-school'
    ],
    '11-01' => [
        'title' => 'On this day in 2024',
        'message' => 'On November 1, 2024, Cambrians ICT Society organized the first ICT Day at Prince of Wales College.',
        'icon' => 'fas fa-flag'
    ],
    '09-15' => [
        'title' => 'On this day in 2023',
        'message' => 'On September 15, 2023, Cambrians ICT Society launched the official website of Prince of Wales College.',
        'icon' => 'fas fa-flag'
    ],
    '08-15' => [
        'title' => 'On this day in 2024',
        'message' => 'On August 15, 2023, Prince of Wales College won the Best School Website Silver Award at BestWeb.LK 2024.',
        'icon' => 'fas fa-flag'
    ],
];

$current_date = date('m-d');
$notification = $notifications[$current_date] ?? null;

if ($notification): ?>
<div class="notification" id="notification">
    <div class="notification-icon">
        <!-- Use Font Awesome icon dynamically -->
        <i class="<?= $notification['icon'] ?>"></i>
    </div>
    <div class="notification-content">
        <div class="notification-title"><?= $notification['title'] ?></div>
        <div class="notification-message"><?= $notification['message'] ?></div>
    </div>
</div>

<script>
    const notification = document.getElementById('notification');
    let hideTimeout;
    let resumeTimeout;

    // Show the notification
    setTimeout(() => {
        notification.classList.add('active');
    }, 1500);

    // Function to hide the notification
    function hideNotification() {
        notification.classList.remove('active');
        notification.classList.add('exit');
    }

    // Hide the notification after 4 seconds
    hideTimeout = setTimeout(hideNotification, 4500);

    // Pause the hiding when hovering or touching the notification
    notification.addEventListener('mouseover', () => {
        clearTimeout(hideTimeout); // Clear the hide timeout to pause
    });

    // Resume the hiding when the mouse or touch leaves the notification
    notification.addEventListener('mouseout', () => {
        hideTimeout = setTimeout(hideNotification, 4500); // Resume the hide timeout
    });

    // Optional: For mobile touch, you can use touch events (in case users touch the notification on mobile)
    notification.addEventListener('touchstart', () => {
        clearTimeout(hideTimeout); // Pause on touch
    });

    notification.addEventListener('touchend', () => {
        hideTimeout = setTimeout(hideNotification, 4500); // Resume on touch end
    });
</script>
<?php endif; ?>