 <div class="old"> <?php 
                                try {
                                    $bdd = new PDO('mysql:host=localhost;dbname=forum_project;charset=utf8', 'thibault', 'root', array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                }
                                catch(Exception $e) {
                                    die('Erreur:' .$e->getMessage());
                                }

                                $reponse = $bdd->query('SELECT * FROM post NATURAL JOIN membre WHERE post_id = 1');
                                while ($donnes = $reponse->fetch()) {
                        ?>
                            <div class="titre"> <h2> <?php echo $donnes['post_titre'] ?> </h2> </div>
                            <div class="nom"> <h3> posté le <?php echo $donnes['post_date'] ?> par <?php echo $donnes['membre_pseudo'] ?> </h3> </div>
                            <div class="question"> <p> <?php echo $donnes['post_contenu'] ?> </p> </div>
                        <?php
                            }
                            $reponse->closeCursor();
                        ?>
                        <div class="OldComment"> <?php
                            try {
                                $bdd = new PDO('mysql:host=localhost;dbname=forum_project;charset=utf8', 'thibault', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            }
                            catch(Exception $e) {
                                die('Erreur:' .$e->getMessage());
                            }
                            $reponse = $bdd->query('SELECT * FROM commentaire NATURAL JOIN membre ORDER BY commentaire_id');
                            while ($donnes = $reponse->fetch()) { 
                        ?>
                        <div>
                            <h3>
                                <?php echo $donnes['membre_pseudo'] ?>
                            </h3>
                            <h6>
                                <?php echo $donnes['commentaire_date'] ?>
                            </h6>
                            <p> <?php echo $donnes['commentaire_contenu']?>
                            </p>
                        </div>
                        <?php 
                            }
                            $reponse->closeCursor();
                        ?>
                         </div>
</div>
