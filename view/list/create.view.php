<?php require_once ViewDir."/template/header.php"; ?>
<h1>Create New Lists</h1>

    <div class=" d-flex justify-content-between my-2">
        <a href="<?= route("list") ?>" class=" btn btn-light shadow-sm">Show All</a>
    </div>

    <div class=" border rounded p-5">
        <form action="<?= route("list-store") ?>" method="post">
            <div class="row align-items-end">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class=" form-control" name="name" required>
                </div>
                <div class="col">
                    <label for="debt" class="form-label">Debt Amount</label>
                    <input type="number" class=" form-control" name="debt" required>
                </div>
                <div class="col">
                    <button class="btn btn-secondary shadow-sm w-50">Create</button>
                </div>
            </div>
        </form>
    </div>
    


<?php 
    // dd($lists);

 ?>

<?php require_once ViewDir."/template/footer.php"; ?>