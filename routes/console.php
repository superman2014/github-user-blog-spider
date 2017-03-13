<?php


Artisan::command('spider', function () {
    // $cursorUserId = 1;
    // while (true) {
        // $users = GitHub::users()->all($cursorUserId);
        // if (! $users) {
            // break;
        // }

        // array_map(
            // function ($item) {
                // $user = GitHub::users()->show($item['login']);
                // if ($user['followers'] > 100 && $user['blog']) {
                    // echo $user['blog'].PHP_EOL;
                // }
            // }, $users
        // );

        // $userCount = count($users);
        // $lastUser = $users[$userCount-1];

        // $cursorUserId = $lastUser['id'];
    // }

    $qs = ['laravel', 'aliyun'];
    array_map(
        function ($item) {
            $repos = GitHub::search()->repositories($item);
            dd($repos);
        },
        $qs
    );
})->describe('spider users');
