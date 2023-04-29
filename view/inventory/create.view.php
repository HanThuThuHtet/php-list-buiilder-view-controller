<?php require_once ViewDir."/template/header.php"; ?>
<h1>Create New Item</h1>

    <div class=" d-flex justify-content-between my-2">
        <a href="<?= route("inventory") ?>" class=" btn btn-light shadow-sm">Show All Items</a>
    </div>

    <div class=" border rounded p-5">
        <form action="<?= route("inventory-store") ?>" method="post">
            <div class="row align-items-center">
                <div class="col">
                    <label for="item" class="form-label">Item</label>
                    <input 
                     type="text"
                     value="<?= old('item') ?>"
                     class=" form-control <?php echo includeError('item') ? 'is-invalid' : '' ?>" 
                     name="item">
                    <?php if(includeError('item')):  ?>
                        <div class=" invalid-feedback">
                            <?= showError('item') ?>
                        </div>
                    <?php endif;  ?>
                </div>
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <input 
                    type="number" 
                    value="<?= old('price') ?>"
                    class=" form-control <?php echo includeError('price') ? 'is-invalid' : '' ?>" name="price">
                    <?php if(includeError('price')):  ?>
                        <div class=" invalid-feedback">
                            <?= showError('price'); ?>
                        </div>
                    <?php endif;  ?>
                </div>
                <div class="col">
                    <label for="stock" class="form-label">Stock</label>
                    <input 
                     type="number"
                     value="<?= old('stock') ?>"
                     class=" form-control <?php echo includeError('stock') ? 'is-invalid' : '' ?>" name="stock">
                    <?php if(includeError('stock')):  ?>
                        <div class=" invalid-feedback">
                            <?= showError('stock'); ?>
                        </div>
                    <?php endif;  ?>
                </div>
                <div class="col">
                    <button class="btn btn-secondary shadow-sm w-50">Add Item</button>
                </div>
            </div>
        </form>
    </div>
    


<?php 
    // dd($lists);

 ?>

<?php require_once ViewDir."/template/footer.php"; ?>