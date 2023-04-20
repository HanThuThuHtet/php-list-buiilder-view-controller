<?php require_once ViewDir."/template/header.php"; ?>
<h1>List</h1>

    <div class=" d-flex justify-content-between my-2">
        <a href="<?= route("list-create") ?>" class=" btn btn-secondary shadow-sm"> + Create</a>
    </div>
    <table class=" table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>debt</th>
                <th>Created At</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lists as $list) : ?>
                <tr>
                    <td><?= $list['id'] ?></td>
                    <td><?= $list['name'] ?></td>
                    <td><?= $list['debt'] ?></td>
                    <td><?= $list['created_at'] ?></td>
                    <td>
                        <a href="<?= route("list-edit",["id" => $list['id']]) ?>" class="btn btn-primary btn-sm mx-3">  Edit  </a>
                                        <!-- convert into uri -->
                        <form action="<?= route("list-delete") ?>" method="post" class=" d-inline-block">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="id" value="<?=  $list['id'] ?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <!-- <a href="<?= route("list-delete",["id" => $list['id']]) ?>" class="btn btn-danger btn-sm">Delete</a> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php 
    // dd($lists);

 ?>

<?php require_once ViewDir."/template/footer.php"; ?>