<?php


Schedule::command('migrate:fresh --seed --force')
    ->withoutOverlapping()
    ->everyTwoHours();
