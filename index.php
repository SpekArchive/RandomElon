<?php

$quotes = [
    "When something is important enough, you do it even if the odds are not in your favor.",
    "There have to be reasons that you get up in the morning and you want to live. Why do you want to live? What's the point? What inspires you? What do you love about the future? If the future does not include being out there among the stars and being a multi-planet species, I find that incredibly depressing."
];

var_dump(
    $quotes[mt_rand(0, count($quotes))]
);