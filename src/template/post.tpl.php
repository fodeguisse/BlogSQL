<?php require 'template/partials/header.inc.php'?>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Affichage de l'article -->
                    <?= $post['content'] ?>

                    <!-- Affichage des commentaires -->
                    <?php if (!empty($comments)) { ?>
                    <h2>Les commentaires</h2>
                    <ul class="list-group">
                        <?php foreach ($comments as $comment) { ?>

                        <li class="list-group-item">Le <?= $comment['createdAt'] ?>,<?= $comment['firstName'] ?>
                        <?= $comment['lastName'] ?> a écrit : 
                        <br> <?= $comment['content'] ?></li>

                        <?php } ?>
                    </ul>
                    <?php } ?>

                     <!-- Formulaire saisie d'un commentaire -->
                     <?php if (isGranted()) { ?>
                    <div class="my-5">
                            <h2>Ecrire un commentaire</h2>
                            <form id="contactForm" method="post" action="?page=post&slug=<?= $_GET['slug']?>">
                                
                                <div class="form-floating">
                                    <textarea class="form-control" name="comment" 
                                    style="height: 12rem" data-sb-validations="required"></textarea>
                                </div>
                                <br />
                        
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Enregistrer</button>
                            </form>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </article>
<?php require 'template/partials/footer.inc.php'?>