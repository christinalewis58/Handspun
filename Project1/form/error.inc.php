<style type="text/css">

* {
    margin: 0;
    padding: 0;
    border: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    font-family: sans-serif;
    margin: 50px auto;
}
header {
    text-align: center;
    background: black;
    padding: 20px 0;
}

header nav a:hover {
    font-weight: 800;
    transition: 1s;
}

nav ul li {
    display: inline;
}

nav a {
    text-decoration: none;
    color: white;
    background: grey;
    padding: 5px;
    font-family: sans-serif;
    
}

footer {
    background: black;
    color: white;
    font-family: sans-serif;
    text-align: center;
    padding: 20px 0;
}

.container p:first-line {
    color: rgb(104, 122, 122);
}
.container h1::selection {
    color: white;
    background-color: rgb(104, 122, 122);
}

.container p::selection {
    color: white;
    background-color: rgb(104, 122, 122);
}

</style>

<header>
    <div class="navbar">
                <a href="index.html">Home</a>
                <a href="ourstory.html">Our Story</a>
                <a href="ourproducts.html">Our Products</a>
                <a href="contactus.html">Contact Us</a>
    </div>
</header>

<div class="container">
<h1>Oops!</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
    for($i=0; $i<count($this->missing_required_fields); $i++){
        echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
    }
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>

<footer>
    <p>This page was designed by WellKodaMarketing</p>
</footer>
