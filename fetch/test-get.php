<?php

$word1 = htmlspecialchars('普遍', ENT_QUOTES, 'UTF-8');
$word2 = htmlspecialchars($_GET['word2'], ENT_QUOTES, 'UTF-8');


print_r($_GET);


echo "{$word1}と{$word2}を入力しました。";
