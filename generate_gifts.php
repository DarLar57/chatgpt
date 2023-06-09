<?php

$titlePage = 'Product List';

include __DIR__ . '/app/initialize.php';
include __DIR__ . '/app/View/head.php';

?>
<body>
    <div>
        <h1>Gifts proposal</h1>
        <h2>with ChatGPT API</h2>
        <h2>(yet static - under way)</h2>

        <?php

// to be changed if ChatGPT API connected
$filteredGifts = $controller->generateListOfGifts($allGifts);

// Displaying gift suggestions
if (count($filteredGifts) > 0) {
    ?>
            <table>
            <tr><th>Hobby</th><th>Name</th><th>Price</th><th>Sex</th><th>Special feature</th><th>Link</th></tr>
            <?php foreach ($filteredGifts as $gift) {?>
            <tr>
            <td> <?= $gift->getHobby(); ?></td>
            <td> <?= $gift->getName(); ?></td>
            <td> <?= $gift->getPrice(); ?> PLN</td>
            <td> <?= implode(", ", $gift->getSex()); ?> </td>
            <td> <?= $gift->getSpecial(); ?></td>
            <td><a href="<?=  $gift->getLink(); ?>">Have a look at the gift</a></td>;
            </tr>
        <?php } ?>

        </table>
    <?php } else { ?>
        <h3>Sorry, no gift proposal complying with the set criteria...</h3>
    <?php } ?>
        <div id="go_back">
            <button onclick="window.location.href='\index.php';">Go to Form</button>
        </div>
    </div>
<?php

include __DIR__ . '/app/View/footer.php';

?>

</body>
</html>