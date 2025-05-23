# Prince of Wales' College, Moratuwa - Official Website

This repository contains the source code for the official website of Prince of Wales' College, Moratuwa, Sri Lanka. The website serves as a comprehensive portal for students, parents, alumni, and staff, providing information about the college's history, academics, events, news, and various activities.

**Live Website:** [https://princeofwales.edu.lk/](https://princeofwales.edu.lk/)

## Features

The website offers a wide range of features, including:

*   **Homepage:** Engaging landing page with highlights, news, and event summaries.
*   **About Us:** Detailed information about the College's history, vision, mission, administration, and infrastructure.
*   **News & Blog:** Regularly updated articles on school news, achievements, and announcements.
*   **Events Calendar:** Information on upcoming and past school events with countdowns.
*   **Principal's Message:** A dedicated section for messages from the College Principal.
*   **Academic Information:** (Although not explicitly browsed, common for school sites - inferring based on typical structure) Details about academic programs and curriculum.
*   **Sports Section:** Comprehensive coverage of various sports, including team sports, individual sports, aquatic sports, and combat sports. Information on the "Battle of the Golds" annual cricket match.
*   **Clubs & Societies:** Information on various student clubs, societies, and extracurricular activities.
*   **Publications:** Access to digital versions of school publications like magazines and the "Golden Book".
*   **Special Announcements:** Prominently displayed important notices.
*   **Forms & Applications:** Online forms for processes like A/L applications and student information gathering.
*   **Admin Panel:** A backend system for site administrators to manage website content (news, events, announcements, etc.).
*   **PWA Ready:** Includes a service worker for Progressive Web App capabilities, enabling potential offline access and improved performance.
*   **Responsive Design:** Adapts to different screen sizes for optimal viewing on desktops, tablets, and mobile devices.
*   **Sitemap:** Dynamically generated sitemap for SEO and navigation.

## Technologies Used

The website is built using a combination of the following technologies:

*   **Backend:** PHP (custom implementation)
*   **Frontend:**
    *   HTML5
    *   CSS3 (with custom styles)
    *   JavaScript
*   **Frameworks & Libraries:**
    *   Bootstrap (for responsive design and UI components)
    *   jQuery (for JavaScript DOM manipulation and effects)
    *   Owl Carousel (for image carousels/sliders)
    *   `canvas-confetti` (for visual effects on special occasions)
*   **Database:** MySQL (or a compatible MariaDB) is used for data storage, managed via PHP Data Objects (PDO).
*   **Web Server:** Requires a standard PHP-supporting web server like Apache or Nginx.
*   **Other:**
    *   Service Worker API (for Progressive Web App features)

## Project Structure

The project follows a general structure common for PHP-based web applications:

```
.
├── admin/              # Backend administration panel files
│   ├── auto-post/      # Scripts for automatic posting (e.g., to social media)
│   ├── bigmatch/       # Admin modules for "Big Match" content
│   ├── blog/           # Admin modules for blog/news management
│   ├── css/            # Admin panel specific stylesheets
│   ├── events/         # Admin modules for event management
│   ├── goldencap/      # Admin modules for "Golden Cap" (likely an award/publication)
│   ├── ion-icon/       # Icons used in the admin panel
│   ├── js/             # Admin panel specific JavaScript files
│   └── ...             # Other admin functionalities
├── cmbu/               # Files related to "CMBU" (likely Cambrian Media Broadcasting Unit)
├── content/            # Static assets
│   ├── audio/          # Audio files (e.g., school anthems)
│   ├── docs/           # Document files (e.g., PDFs)
│   ├── icons/          # Website icons, favicons, PWA icons
│   ├── img/            # Image assets, categorized by section
│   └── ...
├── forms/              # PHP scripts and assets for handling various forms
│   ├── apply-al/       # A/L application form logic and PDF generation
│   ├── resources/      # Shared resources for forms (CSS, JS, fpdf)
│   └── students-info/  # Student information form logic
├── includes/           # (Assumed based on common PHP structure, actual name might vary e.g. views/includes)
│                       # Reusable PHP components like headers, footers - Found in views/includes/
├── publications/       # Frontend display and assets for school publications
│   ├── golden-book/    # "Golden Book" digital viewer
│   └── ...
├── resources/          # Frontend CSS, JS, and libraries
├── vendor/             # Composer dependencies (currently minimal)
├── views/              # Frontend PHP template files for different pages and sections
│   ├── about/
│   ├── blog/
│   ├── clubs/
│   ├── contact/
│   ├── errors/         # Custom error pages (404, 500, etc.)
│   ├── events/
│   ├── history/
│   ├── includes/       # Reusable UI components (header, footer, popups)
│   ├── legal/          # Legal pages (privacy, terms, etc.)
│   └── ...
├── admin_login.php     # Login page for the admin panel
├── functions.php       # Global PHP functions used across the site
├── database_connection.php # (Assumed name) Script for database connection setup
├── index.php           # Main entry point for the public website (likely redirects or includes views/index.php)
├── service-worker.js   # JavaScript for PWA functionality
├── sitemap-gen.php     # Script to generate the sitemap.xml
├── sitemap.xml         # Site map for search engines
├── robots.txt          # Instructions for web crawlers
├── README.md           # This file
└── ...                 # Other root-level configuration and utility files
```

**Key Files/Directories:**

*   **`admin/`**: Contains all backend logic and interface for managing the website's content.
*   **`views/`**: Contains the frontend presentation logic (HTML mixed with PHP). `views/index.php` serves as the main page template.
*   **`content/`**: Stores static assets like images, documents, and icons.
*   **`forms/`**: Manages various data submission forms, including A/L applications and student information.
*   **`publications/`**: Dedicated to showcasing digital school publications.
*   **`resources/`**: Holds frontend assets like CSS stylesheets and JavaScript files.
*   **`functions.php`**: Includes helper functions used throughout the application.
*   **`admin_login.php`**: The entry point for accessing the administrative backend.
*   **`sitemap-gen.php` & `sitemap.xml`**: Used for generating and providing the sitemap to search engines.
*   **`service-worker.js`**: Enables Progressive Web App (PWA) features.
*   **`database_connection.php` (or similar)**: (Needs to be located and confirmed) This file is crucial for establishing the connection to the database.

## Setup and Installation (General Guidance)

Setting up this project locally requires a web server with PHP and MySQL support. Below are general steps:

1.  **Web Server:**
    *   Ensure you have a web server like Apache or Nginx installed and configured to serve PHP files.
    *   Clone this repository into your web server's document root (e.g., `htdocs/` for Apache, `www/` or `html/` for Nginx).

2.  **Database:**
    *   Set up a MySQL (or MariaDB) database.
    *   You will need a database dump (`.sql` file) containing the project's database schema and potentially initial data. This file is not currently included in the repository. If you have access to it, import it into your MySQL database.
    *   **Database Connection:** Locate or create the database connection file. Based on the includes in the project, this file is expected to be at the root of the project as `database_connection.php`.
        *   You will need to configure this file with your database credentials:
            *   Hostname (e.g., `localhost`)
            *   Database name
            *   Username
            *   Password

3.  **PHP Configuration:**
    *   Ensure your PHP version is compatible with the project (the exact version is not specified, but a common version like PHP 7.x or 8.x is likely).
    *   Required PHP extensions (e.g., `pdo_mysql`, `gd` for image processing if used) should be enabled.

4.  **Dependencies:**
    *   The project uses Composer for PHP dependencies, but the `composer.json` file currently lists no specific packages. If this changes, run `composer install` in the project root to download necessary libraries.

5.  **File Permissions:**
    *   Ensure that the web server has the necessary write permissions for any directories where files might be uploaded (e.g., image directories, content upload paths if any).

6.  **Accessing the Site:**
    *   Once configured, you should be able to access the website through your web browser by navigating to the project's directory (e.g., `http://localhost/your_project_directory/`).
    *   The admin panel is typically accessed via `admin_login.php` in the root directory.

**Note:** These are general guidelines. Specific server configurations and PHP setups can vary. The file `database_connection.php` is crucial and must be correctly configured for the site to function. If this file is missing from the repository, it needs to be obtained or reconstructed based on the project's database interaction patterns.

## Development Team

This website was developed and is maintained by the **Cambrians' ICT Society** of Prince of Wales' College, Moratuwa.

## Copyright and License

This website is the intellectual property of Prince of Wales' College, Moratuwa, fully protected under copyright law. Any unauthorized use or reproduction is prohibited.

Development was carried out by the dedicated team at Cambrians' ICT Society.

**All rights reserved.**

(If a specific open-source license is adopted in the future, it will be updated here.)
