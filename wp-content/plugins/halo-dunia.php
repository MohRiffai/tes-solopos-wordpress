<?php
/*
Plugin Name: Halo Dunia
Description: Plugin sederhana menampilkan teks halo dunia.
Version: 1.0
Author: Nama Kamu
*/

function tampilkan_halo_dunia() {
    return "Halo Dunia dari plugin custom!";
}

add_shortcode('halo_dunia', 'tampilkan_halo_dunia');
?>
