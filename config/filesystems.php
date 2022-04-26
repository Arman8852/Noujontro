<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

     'cloud' => 'google',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],


        'google' => [
            'driver' => 'google',

            'clientId' => '707843555205-tdq3fomaiecggtgj6okfb9oqdk5cr72e.apps.googleusercontent.com',

            'clientSecret' => 'Byg5KzkPkS6zsRZk-FCtrKeK',

            'refreshToken' => '1/Z-ybXEwYPf61rpbgj-ONwUjnisIBEA7pZGTnx6S4JrE',

            'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),
        ],


        'google2' => [
            'driver' => 'google',

            'clientId' => '683325930146-1jjeiq1b41aqbmlqq4f5avfpca6bc2kf.apps.googleusercontent.com',

            'clientSecret' => '2HN3_yGm4pzfvV1qiu-whv3o',

            'refreshToken' => '1/yOQPYkFemso-gXbuwHaDM2Av4P_Qf9w-8fQ9l4rrHgk',

            'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),
        ],



            'google3' => [
            'driver' => 'google',

            'clientId' => '485490083860-gbhnp99m5ioio4cvnldqokbbt6b40pc0.apps.googleusercontent.com',

            'clientSecret' => 'YNiHtkQhenRIuDbVEH81viIl',

            'refreshToken' => '1/hx1IOkB8Cq8jjolysoaU-uW2ml0g8rekQKvPlyV9pww',

            'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),
        ],



    ],

];
