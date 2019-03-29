<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dan/Sites/deliver/user/config/site.yaml',
    'modified' => 1553876855,
    'data' => [
        'title' => 'Local Histories',
        'author' => [
            'name' => 'Daniel James Wrightson',
            'email' => 'dan@casole.com',
            'copyright' => 'Copyright 2019 Invitation to Tuscany Ltd. All Rights Reserved.'
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/inv2tuscany',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => '#',
                'icon' => 'linkedin'
            ],
            2 => [
                'url' => 'https://www.facebook.com/VillasinBeautifulPlaces/',
                'icon' => 'facebook'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => 'Unit 5, 30 Friern Park'
                ],
                1 => [
                    'line' => 'North Finchley'
                ],
                2 => [
                    'line' => 'London N12 9DA'
                ]
            ],
            'gps' => '1.306.222.3456'
        ],
        'othermenu' => [
            0 => [
                'text' => 'About',
                'url' => 'about'
            ],
            1 => [
                'text' => 'Privacy Policy',
                'url' => '#'
            ],
            2 => [
                'text' => 'Contact',
                'url' => 'contact'
            ]
        ],
        'quicklinks' => [
            0 => [
                'text' => 'Portfolio',
                'url' => 'base_url:portfolio'
            ],
            1 => [
                'text' => 'About',
                'url' => 'base_url:about'
            ],
            2 => [
                'text' => 'Services',
                'url' => 'base_url:services'
            ],
            3 => [
                'text' => 'Archive',
                'url' => 'base_url:archive'
            ],
            4 => [
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            5 => [
                'text' => 'Contact Us',
                'url' => 'base_url:contact'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'metadata' => [
            'description' => 'Self Guided Tours in Italy'
        ],
        'summary' => [
            'size' => 300
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'true',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'Self Guided Tours in Tuscany. History, Art and Architecture. We design and structure self-guided tours based on moments in history, important art-works and architecture.',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'newsletter_title' => 'Newsletter',
            'newsletter_description' => 'Let us tell you a story. Subscribe here',
            'copyright_text' => 'Copyright 2013 Deliver. All Rights Reserved.',
            'feedburner' => ''
        ]
    ]
];
