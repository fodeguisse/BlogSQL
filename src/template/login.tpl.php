<?php require 'template/partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Login : </h2>                        
                        <div class="my-5">
                          
                            <form id="contactForm" method="post" action="?page=login">
                                
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Entrez votre email..." data-sb-validations="required,email" />
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Entrez votre mot de passe..." data-sb-validations="required" />
                                    <label for="password">Mot de passe</label>
                                    
                                </div>
                                
                                <br />
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton"
                                 type="submit">Me connecter</button>
                                 <a  class="btn btn-primary text-uppercase" href="?page=register">M'inscrire</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php require 'template/partials/footer.inc.php'?>
 