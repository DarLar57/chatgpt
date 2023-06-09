<?php

$titlePage = 'Product List';

include __DIR__ . '/app/View/head.php';
include __DIR__ . '/app/initialize.php';

?>
<body>
    <h1>Gifts proposal</h1>
    <h2>with ChatGPT API</h2>
    <h2>(yet static - under way)</h2>

<!-- change 'action' into action="gifts_from_chatgpt.php" -->
    <form action="generate_gifts.php" method="post">
        <label for="sex">Sex:</label>
        <select name="sex" id="sex" required>
            <option value="unisex">Unisex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br><br>
        <label for="age">Age:</label>
        <select name="age" id="age" value="">
            <option value="">any</option>
            <option value="adult">Adult</option>     
            <option value="teenager">Teenager</option>
            <option value="child">Child</option>
        <option value="baby">Baby</option>
       </select>
        <br><br>
        <label for="hobby">Hobby:</label>
        <select name="hobby" id="hobby" value="">
            <option value="">any</option>
            <option value="book">Book</option>
            <option value="sport">Sport</option>
            <option value="travel">Travel</option>
            <option value="watch">Watch</option>
            <option value="toys">Toys</option>
            <option value="other" id="other_hobby">Other</option>
        </select>
        <label for="special"></label>
        <input type="text" name="other_hobby_input" id="other_hobby_input" placeholder="write other hobby">
        <label for="special">Special feature</label>
        <input type="text" name="special" id="special" placeholder="write special feature">
        <br><br>
        <label for="max_price">Max. price (PLN):</label>
        <input type="number" name="max_price" id="max_price" min="10" value=400 required>
        <br><br><br>
        <button type="submit">Propose</button>
    </form>

<?php include __DIR__ . '/app/View/footer.php'; ?>

</body>
</html>