<?php

dataset('ai-agent', function () {
    return [
        fn() => [
            'agents' => [
                [
                'role' => 'Job Information Extractor',
                'goal' => 'Extract meaning full information from information provided for you',
                'instruction' => 'You work at an hiring agency and your goal is to get information about job opening and convert to meaningful format',
                'agent_tasks' => [
                    [
                        'instruction' => 'extract meaningful information about job role',
                        'expected_output' => 'Information of skills and work experience required',
                        'tasks_tools' => [
                            [
                                'type' => 'scraper',
                                'inputs' => 'https://kondukto.io/jobs/junior-backend-developer',
                            ],
                        ],
                    ],
                ],
            ],
            ]
        ]
    ];
});
