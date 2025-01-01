<?php
// Get the current date
$currentDate = date('m-d');

if ($currentDate == '01-01') {
    ?>
    <script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.x/dist/index.umd.js"></script>

    <div id="fireworks-container"></div>

    <script>
        window.onload = function () {
            const container = document.getElementById("fireworks-container");

            const fireworks = new Fireworks.default(container, {
                speed: 1,
                acceleration: 1,
                friction: 0.97,
                gravity: 0,
                particles: 50,
                trace: 3,
                explosion: 5,
                hue: {
                    min: 0, // Maroon (Red)
                    max: 255, // Maroon
                },
            });

            fireworks.start(); // Start the fireworks animation

            // Stop fireworks after 5 seconds and apply fade-out
            setTimeout(function () {
                // Apply fade-out animation to the container
                container.style.transition = "opacity 1s ease-out"; // 1s fade-out
                container.style.opacity = 0; // Fade out the container

                // Stop fireworks after fade-out ends
                setTimeout(function () {
                    fireworks.stop(); // Stop the fireworks animation
                }, 1000); // Wait for the fade-out to finish before stopping
            }, 7000); // 5000ms = 5 seconds
        };
    </script>

    <style>
        #fireworks-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            pointer-events: none;
            opacity: 1;
            /* Start fully visible */
        }
    </style>
    <?php
}
?>
