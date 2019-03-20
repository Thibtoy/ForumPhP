<form class="commentaires" action="test_back.php" method="post">
                        <div class="pseudo"><label for="pseudo">Pseudo</label> : <select name="pseudo">
                             <?php
                            try {
                                $bdd = new PDO('mysql:host=localhost;dbname=forum_project;charset=utf8', 'thibault', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            }
                            catch(Exception $e) {
                                die('Erreur:' .$e->getMessage());
                            }
                            $reponse = $bdd->query('SELECT * FROM membre');
                            while ($donnes = $reponse->fetch()) { 
                                echo '<option>' . htmlspecialchars($donnes['membre_pseudo']) . '</option>';
                            }
                            $reponse->closeCursor();
                            ?>
                        </select></div>
                        <div class="commentaire"> <label for="commentaire">Commentaire</label> : <textarea name="commentaire" rows="8" cols="50">Commentez ici ...</textarea></div>
                        <input type="submit" value="Envoyer" />
                    </form>