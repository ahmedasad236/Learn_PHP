<?php require 'partials/head.php' ?>    
    
    <?php foreach($names as $name) : ?>
        <li><?= $name->name; ?> </li>
    <?php endforeach; ?>

    <h1>Submit Yout Name</h1>
    <form method = "POST" action="/names">
        <label>Name</label>
        <input name="name">
        <button type="submit">Submit</button>
    </form>        
<?php require 'partials/footer.php'; ?>