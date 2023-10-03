<style> 
.frm{
    background-color:black;
    width: 500px;
    border: 2px brown ;
    text-align: center;
    margin-left: 400px;
    color: white;
    font-style: italic;
    font-size: large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.frm2{

    background-color:white;
    width: 400px;
    border: 2px black;
    text-align: center;
    margin-left:400px;
    margin-top: 20px;
    color: brown;
    font-size: large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}




</style>
</form>
<table  border="2" class="frm">
  
</head>
<body>
    <form action="">
        <div class="container">
            <h2> Registration Form</h2>
        <tr> <td>Name</td> <td> <input type="text" name="val1" required></td></tr>
        <tr> <td>Father Name</td> <td>  <input type="text" name="val2" required></td></tr>
        <tr> <td>E Mail</td> <td>  <input type="text" name="val3" required></td></tr>
        <tr> <td>Cnic</td> <td> <input type="text" name="val4" required></td></tr>
        <td> <td><input type="submit" value="Registration" name="sub"></td></tr>
</style>
<table  border="1" class="frm2">

        <?php
if(isset($_GET['sub']))
{
    $q= $_GET['val1'];
    $r= $_GET['val2'];
    $s= $_GET['val3'];
    $p= $_GET['val4'];
   
    echo "<h2>  $q</h2><br>"; 
    echo "<h2>  $r</h2> <br>";
    echo "<h2>  $s</h2> <br>";
    echo "<h2>  $p</h2> <br>";
}

?>