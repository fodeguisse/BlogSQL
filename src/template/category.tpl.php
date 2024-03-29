<?php require 'template/partials/header.inc.php'?>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-9">
                <h2 class="row gx-4 gx-lg-5 justify-content-center">Catégorie : <?= $categoryName ?></h2>
                <?php foreach ($posts as $post) { ?>
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="?page=post&slug=<?= $post['postSlug'] ?>">
                            <h2 class="post-title"><?= $post['title'] ?></h2>
                            <img class="w-100" src="<?= $post['image'] ?>" alt="">
                            <h3 class="post-subtitle"><?= $post['content'] ?>...</h3>
                        </a>
                        <p class="post-meta">
                            <?= $post['updatedAt'] ?>
                            -Classé dans :  <?= $post['name'] ?>
                            <?php if ($post['nbComments'] > 0) { ?>
                                <br><?= $post['nbComments'] ?> <?= pluralize('commentaire', $post['nbComments']) ?>
                            <?php }?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php } ?>
                
                
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
            <div class="col-md-2 col-lg-8 col-xl-3 border">
                <h2>Catégories</h2>
                <div class="list-group">
                <?php foreach ($categories as $category){ ?>
                    <a href="?page=category&slug=<?= $category['slug'] ?>" class="list-group-item list-group-item-action">
                        <?= $category['name'] ?>
                    </a>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php require 'template/partials/footer.inc.php'?>
 