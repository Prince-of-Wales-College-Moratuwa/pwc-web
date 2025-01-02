<div id="fireworks-container"></div>

<script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.x/dist/index.umd.js"></script>

<script>
    window.addEventListener("load", () => {
        const container = document.getElementById("fireworks-container");

        if (!container) return; // Ensure container exists

        const fireworks = new Fireworks.default(container, {
            speed: 1, // Increased speed for better visual dynamics
            acceleration: 1, // Slight boost for realism
            friction: 0.96, // Minor adjustment for smoother movement
            gravity: 0, // Small gravity for downward motion
            particles: 40, // Optimized particle count
            trace: 2, // Reduced for performance
            explosion: 4, // Adjusted explosion size
            hue: {
                min: 0,
                max: 255,
            },
        });

        fireworks.start();

        // Schedule fade-out and fireworks stop
        setTimeout(() => {
            container.style.transition = "opacity 1s ease-out";
            container.style.opacity = 0;

            setTimeout(() => fireworks.stop(), 1000); // Stop after fade-out
        }, 6000); // 6 seconds for longer visibility
    });
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
        opacity: 1; /* Start fully visible */
        background: transparent; /* Ensures no background to block content */
    }
</style>
