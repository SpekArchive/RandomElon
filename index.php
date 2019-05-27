<?php

$quotes = json_decode(file_get_contents('data.json'), true);

$quote = $quotes[mt_rand(0, count($quotes))];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Primary Meta Tags -->
    <title>Random Elon Musk — Generate and Share Your Favourite Elon Quotes
    </title>
    <meta name="title" content="Random Elon Musk — Generate and Share Your Favourite Elon Quotes">
    <meta name="description"
        content="We love Elon Musk. We created a Random Elon Musk Quote Generator for you to share his wisdom and funny quotes.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://randomelon.peterthaleikis.com">
    <meta property="og:title" content="Random Elon Musk — Generate and Share Your Favourite Elon Quotes">
    <meta property="og:description"
        content="We love Elon Musk. We created a Random Elon Musk Quote Generator for you to share his wisdom and funny quotes.">
    <meta property="og:image" content="https://api.imageee.com/bold?text=Random%20Elon%20Musk&bg_image=https://randomelon.peterthaleikis.com/elon-musk.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://randomelon.peterthaleikis.com">
    <meta property="twitter:title" content="Random Elon Musk — Generate and Share Your Favourite Elon Quotes
    ">
    <meta
        property="twitter:description"
        content="We love Elon Musk. We created a Random Elon Musk Quote Generator for you to share his wisdom and funny quotes.">
    <meta property="twitter:image" content="https://api.imageee.com/bold?text=Random%20Elon%20Musk&bg_image=https://randomelon.peterthaleikis.com/elon-musk.jpg">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <!--Banner-->
    <nav class="bg-gray-800 p-2 mt-0 fixed w-full z-10 top-0">
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="flex w-full justify-center md:justify-center text-white font-extrabold">
                Now live on&nbsp;<a href="https://www.producthunt.com/posts/random-elon" target="_blank" class="underline">ProductHunt</a>&nbsp;😺️&nbsp;🚀️&nbsp;😍️
            </div>
        </div>
    </nav>


    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-300 font-sans leading-normal"
        style="background:url('/elon-musk.jpg')">
        <div class="bg-gray-100 rounded max-w-lg w-full shadow-lg overflow-hidden">
            <div class="p-4 border-b">
                <p class="font-semibold text-lg mb-1 text-black">"<?php echo $quote ?>"</p>
                <p class="text-grey-darker italic">&mdash; Elon Musk</p>
            </div>

        </div>
        <div class="inline-flex mt-5">

            <a href="/">
                <button class="bg-orange-500 text-gray-30 font-bold py-2 px-4 rounded inline-flex items-center mx-4">
                    <span>Quote</span>
                </button>
            </a>

            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($quote . "\n\n - @elonmusk via randomElon.peterthaleikis.com by @jesswallaceuk and @spekulatius1984"); ?>">
                <button class="bg-blue-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Tweet</span>
                </button>
            </a>

        </div>

        <div class="bg-white opacity-75 rounded max-w-lg  shadow-lg  overflow-hidden text-center mt-5">
            <div class="p-4 border-b">
                Made with ♥️ by
                <a href="https://github.com/thecookiemonsters" target="_blank" class="text-blue-600">The Cookie Monsters
                    🍪
                </a>
            </div>

        </div>

    </div>

</body>
</html>
