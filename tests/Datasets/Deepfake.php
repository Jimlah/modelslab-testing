<?php

dataset('deepfake', static function (): array {
    return [
        fn() => [
            'init_image' => 'https://i.pinimg.com/564x/41/c6/01/41c6012b834929a6d3e5844e2eae6cc3.jpg',
            'target_image' => 'https://i.ibb.co/nMGsWtM/b7c06348c220b7eb6ef26fd51e5b7cba.jpg',
        ],
    ];
});

dataset('deepfake-response', static function (): array {
    return [
        fn() => [
            'generationTime' => 2.1,
            'links' => [
                0 => 'https://pub-3626123a908346a7a8be8d9295f44e26.r2.dev//generations/9906f95a-8890-4dab-9458-bdc6e181ae0e.jpg',
            ],
            'meta' => [
                'H' => 1124,
                'W' => 564,
                'file_prefix' => '9906f95a-8890-4dab-9458-bdc6e181ae0e',
                'init_image' => 'https://i.pinimg.com/564x/41/c6/01/41c6012b834929a6d3e5844e2eae6cc3.jpg',
                'model_save_format' => 'jpg',
                'n_samples' => 1,
                'seed' => 2812216768,
                'steps' => 25,
                'target_image' => 'https://i.ibb.co/nMGsWtM/b7c06348c220b7eb6ef26fd51e5b7cba.jpg',
                'temp' => 'no',
                'watermark' => 'yes',
                'watermark_image' => null,
            ],
            'proxy_links' => [
                0 => 'https://pub-3626123a908346a7a8be8d9295f44e26.r2.dev//generations/9906f95a-8890-4dab-9458-bdc6e181ae0e.jpg',
            ],
            'status' => 'success',
        ],
    ];
});
