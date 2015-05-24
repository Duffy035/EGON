<?php
include('template.php');
echo $navigation;
?>
 <h1>View Cart</h1>
 <div class="view-cart">
    <?php
    if(isset($_SESSION["cart"]))
    {
        $total = 0;
        echo '<form method="post" action="process.php">';
        echo '<ul>';
        foreach ($_SESSION["cart"] as $item => $cart_item)
        {
           $results = $mysqli->query("SELECT id, name, description, price FROM products WHERE id='{$cart_item["id"]}' LIMIT 1");
           $row = $results->fetch_object();
           
            echo '<li>';
            echo '<h3>'.$row->name.'</h3>';
            echo '<div>'.$row->description.'</div>';
            echo 'Antal: '.$cart_item['qty'];
            echo '</li>';
            $subtotal = ($cart_item["price"]*$cart_item["qty"]);
            $total = ($total + $subtotal);

            echo '<input type="hidden" name="item_name['.$item.']" value="'.$row->name.'" />';
            echo '<input type="hidden" name="item_code['.$item.']" value="'.$row->id.'" />';
            echo '<input type="hidden" name="item_desc['.$item.']" value="'.$row->description.'" />';
            echo '<input type="hidden" name="item_qty['.$item.']" value="'.$cart_item["qty"].'" />';
            
        }
        echo '</ul>';
        echo '<strong>Total : '.$total.'</strong>  ';
        echo '<input type="submit" value="Pay Now" />';
        echo '</form>';
        
    }else{
        echo 'Your Cart is empty';
    }
    
    ?>
    </div>

