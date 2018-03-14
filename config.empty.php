<?php
// Your site Title
$siteTitle = "";

// Js files and path
$jsPath = "assets/js/"; // Path to your JS folder

// Array of Javascript files in your JS folder, can include external url's
$jsFiles = [
    "https://code.jquery.com/jquery-3.2.1.min.js",
    "main.js",
];

// Css files and path
$cssPath = "assets/css/"; // Path to your CSS folder

// Array of Stylesheets files in your CSS folder, can include external url's
$cssFiles = [
    "bootstrap.css",
    "bootstrap-grid.css",
    "bootstrap-reboot.css",
    "dashboard.css",
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
    "" => [
        "areas" => [
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ],
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ]
        ],
        "cleanName" => "",
        "defaultPage" => ""
    ],
    "" => [
        "areas" => [
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ],
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ],
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ]
        ],
        "cleanName" => "",
        "defaultPage" => ""
    ],
    "" => [
        "areas" => [
            "" => [
                "cleanName" => "",
                "fileName" => "",
                "jsRun" => ""
            ]
        ],
        "cleanName" => "",
        "defaultPage" => ""
    ]
];
