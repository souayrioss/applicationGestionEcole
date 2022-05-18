<?php require APPROOT .'/views/inc/header.php';?>
<h1 class="am"><?= $data['title'];?></h1>
<ul>
    <?php foreach($data['persons'] as $person):?>
        <li><?= $person->firstName ?></li>
    <?php endforeach; ?>
</ul>



<a href="./about/">add</a>
<?php require APPROOT .'/views/inc/footer.php';?>
