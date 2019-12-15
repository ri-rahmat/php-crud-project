<?php
    require ('class/Product.php');
    $product = new Product();

    $alert = '';

    if (isset($_POST['rahmat'])){
        $alert = $product->insert_product($_POST);
    }


?>

<?php include "./partial/header.php"; ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <?php if(isset($_POST['rahmat'])) {?>
                    <div class="alert alert-success">
                        <?php echo $alert; ?>
                    </div>
                <?php }?>
                <div class="card-header">
                    <h2>Add Product</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="product_name">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Product Description</label>
                            <textarea class="form-control"  name="product_description" id="product_description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input  class="form-control" type="text" name="product_price" id="product_price">
                        </div>
                        <div class="form-group">
                            <label for="product_quantity">Product Quantity</label>
                            <input  class="form-control" type="text" name="product_quantity" id="product_quantity">
                        </div>
                        <div class="form-group">
                            <label for="alert_quantity">Alert Quantity</label>
                            <input class="form-control"  type="text" name="alert_quantity" id="alert_quantity">
                        </div>
                        <button type="submit" name="rahmat" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./partial/footer.php"; ?>