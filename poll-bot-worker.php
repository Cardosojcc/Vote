<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '204305873:AAEqBtyR4LtubxvIZrsDbktRHWaoH1UlAYA');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
