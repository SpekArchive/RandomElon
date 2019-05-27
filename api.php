<?php

/**
 * Loads the file and parses the data into an array,
 *
 * selects a random quote,
 *
 * sets the header and outputs the quote as a json again.
 */

$quotes = json_decode(file_get_contents('data.json'), true);

$quote = $quotes[mt_rand(0, count($quotes) - 1)];

header('Content-type: application/json');

echo json_encode([
    'quote' => $quote,
    'share_link' => 'https://twitter.com/intent/tweet?text=' . urlencode('"' . $quote . "\"\n\n-- @elonmusk via randomElon.peterthaleikis.com by @jesswallaceuk and @spekulatius1984")
]);
