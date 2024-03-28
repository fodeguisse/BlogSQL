<?php require 'template/partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Mon profil : </h2>                        
                        <div class="my-5">
                          
                            <form id="contactForm" method="post" action="?page=profile">
                            <div class="form-floating">
                                    <input class="form-control" id="firstName" name="firstName" type="text" 
                                    placeholder="Entrez votre prénom..." data-sb-validations="required,email" 
                                    value="<?= $user['firstName'] ?>"/>
                                    <label for="firstName">Prénom</label>
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="lastName" name="lastName" type="text" 
                                    placeholder="Entrez votre nom..." data-sb-validations="required" 
                                    value="<?= $user['lastName'] ?>"/>
                                    <label for="lastName">Nom</label>
                                    
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" 
                                    placeholder="Entrez votre email..." data-sb-validations="required,email" 
                                    value="<?= $user['email'] ?>" disabled/>
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="phone" type="text" 
                                    placeholder="Entrez votre numéro de téléphone..." data-sb-validations="required,email" 
                                    value="<?= $user['phone'] ?>"/>
                                    <label for="phone">Téléphone</label>
                                </div>

                                 <!-- Submit Button-->
                                 <button class="btn btn-primary text-uppercase" id="submitButton" 
                                 type="submit">Enregistrer</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php require 'template/partials/footer.inc.php'?>
 