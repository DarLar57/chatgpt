<?php

$titlePage = 'Product List';

include __DIR__ . '/../initialize.php';
include __DIR__ . '/head.php';

?>
<body>
    <div class="content">
        <h1>Gifts proposal</h1>
        <h2>with ChatGPT API (yet static - under way)</h2>

        <?php
// to be changed if ChatGPT API connected
$filteredGifts = $controller->generateListOfGifts($allGifts);

// Displaying gift suggestions
if (count($filteredGifts) > 0) { ?>
            <table>
            <tr><th>Hobby</th><th>Name</th><th>Price</th><th>Sex</th><th>Age</th><th>Special feature</th><th>Link</th></tr>
            <?php foreach($filteredGifts as $gift) { ; ?>
            <tr>
            <td> <?= $gift->getHobby(); ?></td>
            <td> <?= $gift->getName(); ?></td>
            <td> <?= $gift->getPrice(); ?> PLN</td>
            <td> <?= implode(", ", $gift->getSex()); ?> </td>
            <td> <?= implode(", ", $gift->getAge()); ?> </td>
            <td> <?= $gift->getSpecial(); ?></td>
            <td><a href="<?=  $gift->getLink(); ?>">Website with the gift</a></td>
            </tr>
        <?php } ?>

        </table>
    <?php } else { ?>
        <h3>Sorry, no gift proposal complying with the set criteria...</h3>
    <?php } ?>
        <div id="go_back">
            <button onclick="window.location.href='../../index.php';">Go to Form</button>
        </div>
<?php

include __DIR__ . '/footer.php';

?>

</body>
</html>