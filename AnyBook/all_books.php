<?php
session_start();
include("includes/header.php");
include("includes/db.php");
?>


<?php

$product_ids = array();
//session_destroy();
//session_destroy();
if(filter_input(INPUT_POST, 'add_to_cart')) {
    if(isset($_SESSION['shopping_cart'])) {
        $count = count($_SESSION['shopping_cart']);
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');


        if(!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array
                (
                    'id'        => filter_input(INPUT_GET, 'id'),
                    'name'      => filter_input(INPUT_POST, 'name'),
                    'price'     => filter_input(INPUT_POST, 'price'),
                    'quantity'  => filter_input(INPUT_POST, 'quantity')
                );
        } else {
            for($i=0; $i < count($product_ids); $i++){
                if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }


    }
    else {
        $_SESSION['shopping_cart'][0] = array
        (
            'id'        => filter_input(INPUT_GET, 'id'),
            'name'      => filter_input(INPUT_POST, 'name'),
            'price'     => filter_input(INPUT_POST, 'price'),
            'quantity'  => filter_input(INPUT_POST, 'quantity')
        );
    }
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//pre_r($_SESSION);

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


?>










<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<style>
.products{
    border: 1px solid #333;
    background-color= #f1f1f1;
    border-radius: 5px;
    padding: 16px;
    margin-bottom: 20px;
}
</style>

<div class="container mt-2">
<div class="row">
    
    <?php 
    $sql = "SELECT * FROM book";
    $result = mysqli_query($db,$sql);

    if($result){
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
                ?>
                    
                <div class="col-sm-4 col-md-3 mt-2">
                    <form method="post" action="all_books.php?action=add&id=<?php echo $product['book_id']; ?>">
                        <div class="cart">
                            <div class="products">
                                <img src="<?php echo $product['path']; ?>" class="img-fluid" alt="">
                                <h6 class="text-info"><?php echo $product['book_name']; ?></h6>
                                <h6><?php echo "by ". $product['writer_name']; ?></h6>
                                <h4>$ <?php echo $product['book_price']; ?></h4>

                                <input type="hidden" name="quantity" clas="form-control" value="1" />
                                <input type="hidden" name="name" value="<?php echo $product['book_name']; ?>" />
                                <input type="hidden" name="price" value="<?php echo $product['book_price'] ?>" />
                                <!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

                                <!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
                                <input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
                            </div>
                        </div>
                    </form>
                </div>
                    
                <?php

            }
        }
    }
    ?>

</div>
</div>