
<form action="" method="post">
    <input type="text" placeholder="vardas" name="name">
    <input type="text" placeholder="email" name="email">
    <input type="password" placeholder="password" name="password">
    <button type="submit">Siusti</button>
</form>

<?php
if (isset($_GET['vardas'])) {
    //$_GET will show up in the url
    hello($_POST['vardas']);
}

if (isset($_POST['email'])) {
    echo $_POST['name'];
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';

    echo $_POST['password'];
}

# function hello($vardas) {
    #echo '<h1>Labas, ', $vardas ,'</h1>;
#}

?>
    
