<?php
    include './class/Product.php';

    $product = new Product();
    $result = mysqli_fetch_assoc($product->edit_product());

    if (isset($_POST['update_btn']))
    {
        $product->update_product($_POST);
    }

?>

<?php include "./partial/header.php";?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="product_name" id="product_name" value="<?php echo $result['product_name']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_description">Product Description</label>
                                <textarea name="product_description" id="product_description" class="form-control" cols="30" rows="5"><?php echo $result['product_description'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product Price</label>
                                <input value="<?php echo $result['product_price'];?>" type="text" name="product_price" id="product_price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_quantity">Product Quantity</label>
                                <input type="text" value="<?php echo $result['product_quantity'];?>" name="product_quantity" id="product_quantity" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alert_quantity">Alert Quantity</label>
                                <input value="<?php echo $result['alert_quantity'];?>"  type="text" name="alert_quantity" id="alert_quantity" class="form-control">
                            </div>

                            <input type="hidden" name="id" value="<?php echo $result['id'];?>">

                            <input type="submit" value="Update" name="update_btn" class="btn btn-warning btn-block" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./partial/footer.php";?>