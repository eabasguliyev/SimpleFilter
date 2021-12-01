<?php
$filters = [
    'Mercedes-Benz' => [
        190,
        200,
        220,
        230,
        240,
        250,
        260,
        270,
        280,
        290,
        300,
        320,
        350,
        380,
        400,

    ],
    'Volkswagen' => [
        181,
        'Amarok',
        'Arteon',
        'Beetle',
        'Bora',
        'Buggy',
        'Caddy',
        'CC',
        'Corrado',
        'Crafter',
        'Eos',
        'Fox',
    ],
    'Bmw' => [
        '1 Series' => [
            114,
            116,
            118,
            120,
            123,
            125,
            128,
            130,
            135,
        ],
        2002,
        '2 Series' => [
            '214 Active Tourer',
            '214 Gran Tourer',
            '216 Active Tourer',
            '216',
            '216 Gran Tourer',
        ]
    ],
    'Audi' => [
        100,
        200,
        80, 90,
        'A1',
        'A2',
        'A3',
        'A4',
        'A4 Allroad',
        'A5',
        'A6',
        'A6 Allroad',
    ],
];

if(basename($_SERVER['SCRIPT_FILENAME']) === 'sharedData.php')
    header("Location: ../index.php");
?>