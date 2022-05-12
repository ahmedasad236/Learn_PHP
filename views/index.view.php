<?php require 'partials/head.php' ?>    
        
    <h1>Submit Yout Name</h1>
    <form method = "GET" action="/names">
        <label>Name</label>
        <input name="name">
        <button type="submit">Submit</button>
    </form>        
<?php require 'partials/footer.php'; ?>