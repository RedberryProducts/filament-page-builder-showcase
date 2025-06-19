<?php


Schedule::command('migrate:fresh --force')
    ->withoutOverlapping()
    ->everyTwoHours();
