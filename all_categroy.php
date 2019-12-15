<?php
    include "./class/Product.php";
    $product = new Product();
    $data = $product->show_all_product();

    if (isset($_GET['edit'])){
        $product->edit_product($_GET['edit']);
    }
    if (isset($_GET['delete'])){
        $product->delete_product($_GET['delete']);
    }
?>

<?php include "./partial/header.php"; ?>


    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Product</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Alert Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i = 1; while($result = mysqli_fetch_assoc($data)) :?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $result['product_name'];?></td>
                                <td><?php echo $result['product_description']; ?></td>
                                <td><?php echo $result['product_price']; ?></td>
                                <td><?php echo $result['product_quantity']; ?></td>
                                <td><?php echo $result['alert_quantity']; ?></td>
                                <td>
                                    <a href="edit.php?edit=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="all_categroy.php?delete=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                </td>
                            </tr>
                            <?php  endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./partial/footer.php"; ?>
