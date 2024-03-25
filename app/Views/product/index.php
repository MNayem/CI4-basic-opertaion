<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Important CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Data Table CSS-->
    <link href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Dashboard</title>
    <style>
         
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">

        <?php 
            if(session()->getFlashdata('status')) {
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
        ?>

            <div class="card">
                <div class="card-header">
                    <h4>Product Information
                        <a href="<?= base_url('productAdd') ?>" class="btn btn-primary float-end">Add Product</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($product as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td>
                                        <img src="<?= "uploads/".$row['image']; ?>" height="100px" width="100px" alt="Image">
                                    </td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <a href="<?= base_url('product/edit/'.$row['id'] ) ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('product/delete/'.$row['id'] ) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table JS-->
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script> 

    <script type="text/javascript">
        $(document).ready(function(){
            $('#mydatatable').DataTable();
        });
    </script>
</body>
</html>