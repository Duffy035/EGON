<?php include'inc/head.php';?>
<?php include'inc/template.php'; ?> 
<?php include 'inc/nav.php'; ?>

<?php

if(isset($_GET['productid'])){

	$prodId = $_GET['productid'];

$query = <<<END
SELECT productid, name, price
FROM productdetails
WHERE productid = '{$productid}'
END;

$res = $mysqli->query($query);
$row = $res->fetch_object();


if(isset($_SESSION['cart'])){
    
        if($prodId == ""){
        
        echo "nothing set";
        } else {
            $idx = -1;
            foreach($_SESSION['cart'] as $i => $cartItems)
            {
              if($cartItems['productid'] == $prodId)
              {
           	 $idx = $i;
           	 break;
              }
            }
            
            if ($idx == -1)
            {
              // not found
              $_SESSION['cart'][] = array(
              						  "name" => $row->name,
                                      "qty" => 1,
                                      "price" => $row->price,
                                      "productID" => $productid
                                      ); echo "new item <br />";
            }
            else
            {
              // found product at $_SESSION[$idx]
              $_SESSION['cart'][$idx]['qty']++;
              echo $idx . "<br />";
              echo "adding to the amount";
            }
            
        }

    } else {
        //create new session
        $_SESSION['cart'][] = array(
        					"name" => $row->name,
                            "qty" => 1,
                            "price" => $row->price,
                            "productID" => $productid
                            ); echo "new session";
    }

 }

//check the cart content.
var_dump($_SESSION['cart']);

?>