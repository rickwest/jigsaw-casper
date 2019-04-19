<?php

return [
    'production' => false,
    'baseUrl' => '',

    'collections' => [
    // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => '',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'Jigsaw Casper',

    // The description of the site. This is used in for the site's default metadata
    'siteDescription' => 'The professional publishing platform',

    // The name of the site Author. Your name! This is used when building the rss feed
    'siteAuthor' => '',

    'subscribe' => true,

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => '#',
            'icon' => 'fab fa-twitter',
        ],
        'facebook' => [
            'link' => '#',
            'icon' => 'fab fa-facebook-f',
        ],
        'github' => [
            'link' => '#',
            'icon' => 'fab fa-github',
        ],
        'rss' => [
            'link' => '/feed.xml',
            'icon' => 'fas fa-rss',
        ],
    ],
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]

    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => '',

    'readingTime' => function($post) {
        $mins = round(str_word_count(strip_tags($post)) / 200);
        return $mins . ' min read';
    }
];
