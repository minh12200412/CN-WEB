<?php include 'app/view/header.php'?>
<main class="main">
    <div class="containerPage">
        <?php foreach($flowers as $flower): ?>
        <div class="title">
            <p class="nameFlower">
                <?= $flower['id'] ?> .
                <?= $flower['ten'] ?>
            </p>
        </div>
        <div class="content">
            <p class="dDescriptionFlower">
                <?= $flower['moTa'] ?>
            </p>
            <div class="imgFlower">
                <img src="<?= $flower['img'] ?>" alt="Hoa đẹp">
            </div>
        </div>
        <?php endforeach ?>
    </div>
</main>
<?php include 'app/view/footer.php'?>