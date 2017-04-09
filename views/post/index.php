<?php

if (count($posts)) {
    foreach ($posts as $post) {
        echo $post->title;
        echo '<br>';
        echo $post->description;
        echo '<br>';
        echo '<br>';
    }
}