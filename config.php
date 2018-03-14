<?php
// Your site Title
$siteTitle = "Bootstrap Admin PHP Framework Demo";

// Js files and path
$jsPath = "assets/js/"; // Path to your JS folder

// Array of Javascript files in your JS folder, can include external url's
$jsFiles = [
    "https://code.jquery.com/jquery-3.2.1.min.js",
    "main.js",
    "demo.js"
];

// Css files and path
$cssPath = "assets/css/"; // Path to your CSS folder

// Array of Stylesheets files in your CSS folder, can include external url's
$cssFiles = [
    "bootstrap.css",
    "bootstrap-grid.css",
    "bootstrap-reboot.css",
    "dashboard.css",
    "https://v4-alpha.getbootstrap.com/examples/album/album.css"
];

// Page Definitions Layout
/*
$pages =[
    "home" => [ <-- Page Name ( No Spaces or Special Characters )
        "areas" => [
            "overview" => [ <-- Area Name ( No Spaces or Special Characters )
                "cleanName" => "Demo Page", <-- Display Name ( Can Include Spaces and Special Characters )
                "fileName" => "home.demo.page.php", <-- File route from the folder "/pages/"
                "jsRun" => "demo()" <-- Insert Javascript or a predefined Function here to be executed on the page
            ],

            "..." => [
                "cleanName" => "...",
                "fileName" => "...",
                "jsRun" => "..."
            ],

            ...

        ],
        "cleanName" => "Home", <-- Page Display Name ( Can Include Spaces and Special Characters )
        "defaultPage" => "overview" <-- Default Area to be shown if no Area is set, has to be in set above in areas
    ],

    ...
]
*/

// Define your pages below
// the First area of the First page is the default page for the site if not page or area has been set in the url.
$pages =[
    "page1" => [
        "areas" => [
            "overview" => [
                "cleanName" => "Overview",
                "fileName" => "home.overview.page.php",
                "jsRun" => ""
            ],
            "underview" => [
                "cleanName" => "Underview",
                "fileName" => "home.underview.page.php",
                "jsRun" => ""
            ]
        ],
        "cleanName" => "Page 1",
        "defaultPage" => "overview"
    ],
    "page2" => [
        "areas" => [
            "index" => [
                "cleanName" => "Index",
                "fileName" => "page2.index.page.php",
                "jsRun" => ""
            ],
            "a1" => [
                "cleanName" => "Area 1",
                "fileName" => "page2.all.page.php",
                "jsRun" => "p2Demo('area 1')"
            ],
            "a2" => [
                "cleanName" => "Area 2",
                "fileName" => "page2.all.page.php",
                "jsRun" => "p2Demo('area 2')"
            ],
            "a3" => [
                "cleanName" => "Area 3",
                "fileName" => "page2.all.page.php",
                "jsRun" => "p2Demo('area 3')"
            ]
        ],
        "cleanName" => "Page 2",
        "defaultPage" => "index"
    ],
    "about" => [
        "areas" => [
            "home" => [
                "cleanName" => "Home",
                "fileName" => "about.page.php",
                "jsRun" => ""
            ]
        ],
        "cleanName" => "About",
        "defaultPage" => "home"
    ]
];
