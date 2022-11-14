
<html>
<head>
    <title>addProduct</title>
</head>
<body>
<?php
    if(!isset($_POST['name']) || !isset($_POST['buying_price']) || !isset($_POST['selling_price'])){
        echo "Null Entry";
    }
    else{
    $Name = $_POST["name"];
    $buyP = $_POST['buying_price'];
    $sellP = $_POST['selling_price'];
    $display = 0;
    if(isset($_POST['display'])) $display = 1;
    if($Name == "" || $buyP == "" || $sellP == ""){
        echo "Null";
        header("location: addProduct.php");
    }
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "INSERT INTO products(Name, Selling_Price, Buying_Price, Display) VALUES ('{$Name}','{$sellP}','{$buyP}',{$display})";
    $status = mysqli_query($con, $sql);
    
    if($status){
        echo "DB inserted";
    }else{
        echo "DB Noy inserted!";
    }
}
    #$user = mysqli_fetch_assoc($result);
    
?>
        <form method="post" action="addProduct.php" enctype="">
            <fieldset>
                <legend><b>ADD PRODUCT</b></legend>
                <table>
                    <tr>
                        <td>Name<br>
                        <input type="text" name="name" value="" >
                    </td>
                    </tr>
                    <tr>
                        <td>Buying Price<br>
                        <input type="number" name="buying_price" value="" >
                    </td>
                    </tr>
                    <tr>
                        <td>Selling Price<br>
                        <input type="number" name="selling_price" value="" >
                    </td>
                    </tr>
                    <tr>
                        <td><hr></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="display" value="">Display
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Save"/>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>
