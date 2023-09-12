<?php
function default_text_length($length){ //this udf for card text length
    return 30;
}
add_filter('excerpt_length', 'default_text_length'); //first argument and funtion cant be chenged
function read_more_sign($more){
    return '...';
}
add_filter('excerpt_more', 'read_more_sign'); //first argument and funtion cant be chenged
//to get feature image box  for post
add_theme_support('post-thumbnails');

//seting size for multiple post page i.e. index.php

//arguments = unique id,with, height, hard crop = true
add_image_size('post-thumbnails', 450, 550, true);


//sidebar code
function sidebar_v(){
echo '<div class="col-sm-3 v1" style="border-radius: 10px;">
    <h3>Planets</h3>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Sun</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mercury</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Venus</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Earth</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mars</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Jupiter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Saturn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Uranus</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Neptune</a>
        </li>
    </ul>
</div>';
}