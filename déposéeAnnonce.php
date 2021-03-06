<?php
include 'includes/header.php';
?>


<main>
    <h1 class="text-center">Déposer une annonce</h1>
    <hr class="w-10 mx-auto text-primary show-opacity h-3 mt-0 mb-5 rounded">
    <div class="container">
    <div class="container d-flex gap-5">
        <button class="btn-lg border-0 bg-body text-primary fw-bold" id="">Vendre</button>
        <button class="btn-lg border-0 bg-body" id="">Louer</button>
    </div>
    <hr class="w-25 mt-0 mb-4">
        <div class="w-50">
            <form action="">
                <!-- titre -->
                <div class="form-group my-4">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" id="">
                </div>

                <!-- type de bien -->
                <div class="form-group my-4">
                    <label for="">Type de bien</label>
                    <select name="" id="" class="form-control">
                        <option value="">Maison</option>
                        <option value="">Appartement</option>
                        <option value="">Terrain</option>
                        <option value="">Local commercial</option>
                        <option value="">Autre</option>
                    </select>
                </div>
                <!-- prix -->
                <div class="form-group my-4">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" placeholder="Prix">
                </div>
                <!-- surface -->
                <div class="row my-4">
                    <div class="form-group col-4">
                        <label for="">Surface</label>
                        <input type="text" class="form-control" placeholder="Surface">
                    </div>
                    <!-- nombre de pièces -->
                    <div class="form-group col-4">
                        <label for="">Nombre de pièces</label>
                        <input type="text" class="form-control" placeholder="Nombre de pièces">
                    </div>
                    <!-- nombre de chambres -->
                    <div class="form-group col-4">
                        <label for="">Nombre de chambres</label>
                        <input type="text" class="form-control" placeholder="Nombre de chambres">
                    </div>
                </div>

                <!-- critères populaires-->
                <div class="form-group my-4">
                    <label for="">Critères populaires</label>
                    <div class="row ms-4 my-2">
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Chauffage
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Garage
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Jardin
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Balcon
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Ascenseur
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Parking
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Piscine
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Cave
                            </label>
                        </div>
                        <div class="form-check col-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                Terrasse
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <!-- Wilaya -->
                    <div class="form-group col-6">
                        <label for="">Wilaya</label>
                        <select name="" id="" class="form-control">
                            <option value="">Adrar</option>
                            <option value="">Chlef</option>
                            <option value="">Laghouat</option>
                            <option value="">Oum El Bouaghi</option>
                            <option value="">Batna</option>
                            <option value="">Béjaïa</option>
                            <option value="">Biskra</option>
                            <option value="">Béchar</option>
                            <option value="">Blida</option>
                            <option value="">Bouira</option>
                            <option value="">Tamanrasset</option>
                            <option value="">Tébessa</option>
                            <option value="">Tlemcen</option>
                            <option value="">Tiaret</option>
                            <option value="">Tizi Ouzou</option>
                            <option value="">Alger</option>
                            <option value="">Djelfa</option>
                            <option value="">Jijel</option>
                            <option value="">Sétif</option>
                            <option value="">Saïda</option>
                            <option value="">Skikda</option>
                            <option value="">Sidi Bel Abbès</option>
                            <option value="">Annaba</option>
                            <option value="">Guelma</option>
                            <option value="">Constantine</option>
                            <option value="">Médéa</option>
                            <option value="">Mostaganem</option>
                            <option value="">M'Sila</option>
                            <option value="">Mascara</option>
                            <option value="">Ouargla</option>
                            <option value="">Oran</option>
                            <option value="">El Bayadh</option>
                            <option value="">Illizi</option>
                            <option value="">Bordj Bou Arreridj</option>
                            <option value="">Boumerdès</option>
                            <option value="">El Tarf</option>
                            <option value="">Tindouf</option>
                            <option value="">Tissemsilt</option>
                            <option value="">El Oued</option>
                            <option value="">Khenchela</option>
                            <option value="">Souk Ahras</option>
                            <option value="">Tipaza</option>
                            <option value="">Mila</option>
                            <option value="">Aïn Defla</option>
                            <option value="">Naâma</option>
                            <option value="">Aïn Témouchent</option>
                            <option value="">Ghardaïa</option>
                            <option value="">Relizane</option>
                        </select>
                    </div>

                    <!-- ville -->
                    <div class="form-group col-6">
                        <label for="">Ville</label>
                        <input type="text" class="form-control" placeholder="Ville">
                    </div>

                </div>

                <!-- adresse -->
                <div class="form-group my-4">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" placeholder="Adresse">
                </div>

                <!-- description -->
                <div class="form-group my-4">
                    <label for="">Description</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <!-- upload des photos -->
                <div class="form-group my-4">
                    <label for="">Upload des photos</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple>
                </div>

                <div class="col-5 rounded d-flex justify-content-center align-items-center flex-column gap-1 border p-4 my-4">
                    <img src="images/icons/Add pic.svg" class="" alt="">
                    <h4 class="text-center pt-4">Ajouter des photos</h4>
                </div>

                <!-- boutton -->
                <div>
                    <button type="submit" class="btn btn-primary">Déposer</button>
                </div>
            </form>
        </div>
    </div>


</main>


<!-- Footer -->
<footer class="text-center text-lg-start bg-secondary mt-5 pt-2">
    <!-- Section: Links  -->
    <section class="text-light">
        <div class="text-center text-md-start">

            <!-- Grid row -->
            <div class="row mt-1">
                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
                    <!-- Content -->
                    <img src="images/white-logo.svg" alt="logo">
                </div>

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
                    <!-- Links -->
                    <h5 class="mb-3 text-white fw-bold">Navigation</h5>
                    <ul class="no-decoration p-0 fs-7 Poppins fw-lighter">
                        <li class="mb-2"><a href="#!" class="text-reset no-decoration">Accueil</a></li>
                        <li><a href="#!" class="text-reset no-decoration">Mon compte </a></li>
                    </ul>
                </div>

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
                    <!-- Links -->
                    <h5 class="mb-3 text-white fw-bold">À découvrir</h5>
                    <ul class="no-decoration p-0 fs-7 Poppins">
                        <li class="mb-2"><a href="#!" class="text-reset no-decoration">À propos</a></li>
                        <li><a href="#!" class="text-reset no-decoration">Toutes les villes</a></li>
                    </ul>
                </div>

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
                    <!-- Links -->
                    <h5 class="mb-3 fw-bold">Nous contacter</h5>
                    <a href=""><img src="images/icons/E-mail.svg"></a>
                    <a href="" class="mx-2"><img src="images/icons/facebook.svg"></a>
                    <a href=""><img src="images/icons/instagram.svg"></a>
                </div>

            </div>
        </div>
    </section>

    <!-- Copyright -->
    <hr class="bg-light w-25 mx-auto mt-2 my-auto">
    <div class="fs-8 text-center text-light pb-1 mt-1 bg-secondary">
        Buis ness © 2022. Tous les droits sont réservés.
    </div>
</footer>

<script src="index.js"></script>
<script src="../js/bootstrap.min.js"></script>


</body>

</html>