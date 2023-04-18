<?php require_once ViewDir."/template/header.php" ?>
<h1>Home</h1>

<!-- dd($shareData['myName']);
echo "My name is ".$shareData['myName']; -->
<p>
My name is <?= $myName ?> and age is <?= $myAge ?>
</p>

<?php require_once ViewDir."/template/footer.php"?>