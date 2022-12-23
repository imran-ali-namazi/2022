<?php
if (!function_exists('am_var')) { echo 'Directory access not allowed!'; return; }
$home = get_sheet('home');
include am_var('theme_folder') . 'home.php';
?>
