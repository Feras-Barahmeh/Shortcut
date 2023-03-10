<?php

// prepare CSS File
$cssLang = $_SESSION["lang"] == "ar" ? "ar" . DS : "en" . DS;

return [
    NAME_TEMPLATE_BLOCK_KEY => [
        "header"                                => TEMPLATE_PATH    . "header"          .   ".php",
        "wrapper-start"                         => TEMPLATE_PATH    . "wrapperstart"    .   ".php",
        "nav"                                   => TEMPLATE_PATH    . "nav"             .   ".php",
        NAME_VIEW_TEMPLATE_KEY                  => ":action_view",
        "wrapper_end"                           => TEMPLATE_PATH    . "wrapperend"      .   ".php",
    ],
    NAME_TEMPLATE_HEADER_RESOURCES => [
        "css" => [
            "main"          => CSS . $cssLang . "main"     . ".css",
            "shortcut"      => CSS . "shortcut" . ".css",
            "employee"      => CSS . $cssLang . "employee" . ".css",
        ],
        "js" => [
            "fontawesome"   =>  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"
        ],
    ],

    NAME_TEMPLATE_FOOTER_RESOURCES => [
        "js" => [
            "shortcut"      => JS . "shortcut"  . ".js",
            "main"          => JS . "main"      . ".js",
            "employee"      => JS . "employee"  . ".js",
        ],
    ],
];