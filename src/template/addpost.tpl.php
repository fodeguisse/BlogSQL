<?php require 'template/partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Votre article</h2>                        
                        <div class="my-5">
                          
                            <form id="contactForm" method="post" action="?page=addpost">
                                <div class="form-floating">
                                    <input class="form-control" id="title" name="title" type="text" />
                                    <label for="title">Titre</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" name="content" 
                                    style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="content">Contenu</label>
                                    
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="image" name="image" type="text"  />
                                    <label for="image">URL image</label>
                                </div>

                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" name="id_categories" id=""id_categories>
                                        <option selected>Choisissez une Catégorie</option>
                                        
                                        <?php foreach($categories as $category){ ?>
                                            <option value="<?= $category['id'] ?>">
                                                <?= $category['name'] ?>
                                            </option>
                                        <?php } ?>
                                        
                                    </select>
                                    <label for="phone">Catégorie</label>
                                </div>

                                
                                <br />
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" 
                                id="submitButton" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php require 'template/partials/footer.inc.php'?>
 