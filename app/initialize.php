<?php

use Model\Gift;
use Controller\Generator;

require __DIR__ . '/../vendor/autoload.php';

// just static examples of gifts in the internet. This is to be replaced as real Gift instances to be generated using ChatGPT API, e.g. by transforming $giftSuggestions i.e. json_decode($response, true)['choices'] into Gift class instances or use in other way (arrays etc.)

new Gift('book','Dog and cat', 30, 'https://example.com/book2', ['female', 'male', 'unisex'], ['child', 'teenager'], 'animal');

new Gift('book', 'Hello Sir', 45, 'https://example.com/book2',['female', 'male', 'unisex'], ['teenager', 'adult']);

new Gift('book', 'How to exercise', 40, 'https://example.com/book3', ['female', 'male', 'unisex'], ['child','teenager', 'adult']);

new Gift('book', 'Sunshine', 70, 'https://example.com/book4', ['female', 'male', 'unisex'], ['teenager', 'adult']);

new Gift('watch', 'Atlantic', 150, 'https://example.com/watch', ['male'], ['teenager', 'adult']);

new Gift('book', 'Fashion', 70, 'https://example.com/book5', ['female', 'male', 'unisex'], ['teenager', 'adult']);

new Gift('sport', 'Tennis racket', 90, 'https://example.com/tennis', ['female', 'male', 'unisex'], ['child','teenager', 'adult']);

new Gift('sport', 'Badminton', 67, 'https://example.com/badminton', ['female', 'male', 'unisex'], ['child','teenager', 'adult']);

new Gift('sport', 'Swimming', 70, 'https://example.com/swimming', ['female', 'male', 'unisex'], ['child']);

new Gift('travel', 'Africa', 80, 'https://example.com/travel1',  ['female', 'male', 'unisex'], ['teenager', 'adult']);

new Gift('travel', 'Salty Sea', 95, 'https://example.com/travel2', ['female', 'male', 'unisex'], ['child','teenager', 'adult']);

new Gift('travel', 'Italy at seaside', 100, 'https://example.com/travel3', ['female', 'male', 'unisex'], ['child','teenager', 'adult']);

new Gift('toys', 'Car', 23, 'https://example.com/car', ['male'], ['baby']);
    
new Gift('toys', 'Doll', 27, 'https://example.com/doll', ['female'], ['baby']);

new Gift('toys', 'Ball', 8, 'https://example.com/ball', ['female', 'male', 'unisex'], ['baby'], );

new Gift('sport', 'Football', 100, 'https://example.com/football', ['male'], ['child','teenager', 'adult']);

$controller = new Generator();

isset($_POST['submit']);

$allGifts = Gift::getInstances();

