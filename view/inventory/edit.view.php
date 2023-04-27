<?php require_once ViewDir."/template/header.php"; ?>
<h1>Edit Item</h1>

<?php 
     //dd($list);

 ?>

    <div class=" d-flex justify-content-between my-2">
        <a href="<?= route("inventory") ?>" class=" btn btn-light shadow-sm">Show All</a>
    </div>

    <div class=" border rounded p-5">
        <form action="<?= route("inventory-update") ?>" method="post">
        <input type="hidden" name="_method" value="put">
            <input type="hidden" name="id" value="<?= $list['id'] ?>">
            <div class="row align-items-end">
                <div class="col">
                    <label for="item" class="form-label">Item</label>
                    <input type="text" class=" form-control" value="<?= $list['item'] ?>" name="item" required>
                </div>
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class=" form-control" value="<?= $list['price'] ?>" name="price" required>
                </div>
                <div class="col">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class=" form-control" value="<?= $list['stock'] ?>" name="stock" required>
                </div>
                <div class="col">
                    <button class="btn btn-secondary shadow-sm w-50">Update</button>
                </div>
            </div>
        </form>
    </div>
    




<?php require_once ViewDir."/template/footer.php"; ?>