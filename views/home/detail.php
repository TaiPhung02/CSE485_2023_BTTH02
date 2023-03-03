<?php
include("views/includes/header.php");
?>
<main class="container mt-5">
    <div class="row mb-5">
        <div class="col-sm-4">
            <img src="<?= $detailArticles[0]->getHinhanh() ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-sm-8">
            <h5 class="card-title mb-2">
                <a href="" class="text-decoration-none"><?php echo $row['tieude'] ?></a>
            </h5>
            <p class="card-text"><span class=" fw-bold">Bài hát: </span><?= $detailArticles[0]->getTenBhat() ?></p>
            <p class="card-text"><span class=" fw-bold">Thể loại: </span><?= $detailArticles[0]->getTenTloai() ?></p>
            <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?= $detailArticles[0]->getTomtat() ?></p>
            <p class="card-text"><span class=" fw-bold">Nội dung: </span><?= $detailArticles[0]->getNoidung() ?></p>
            <p class="card-text"><span class=" fw-bold">Tác giả: </span><?= $detailArticles[0]->getTenTgia() ?></p>

        </div>
    </div>
</main>
<?php
include("views/includes/footer.php");
?>

