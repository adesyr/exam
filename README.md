1- Quel est la différence entre un langage de programmation et un langage de description ? Citez un exemple pour chacun d'entre d'eux.

	Un langage de programmation est un langage qui sera interprété par un serveur et éxécuté pour obtenir un rendu compréhenbile pour l'utilisateur. Exemple le langage Java, PHP...
	Un langage de description est un langage qui ne fait que renvoyer le contenu d'une page, sa mise en forme (formulaire, images, texte...). Exemple le HTML.

2- PHP s'exécute côté serveur, qu'est-ce que cela veut dire ? Décrivez comment se déroule une communication entre un navigateur et ces éléments côté serveur : php, apache, mysql.

	Lors d'une demande de l'utilisateur d'une page, celle-ci est envoyé au serveur qui va détecter qui il y a du langage PHP a interpréter. Le moteur PHP va 'déchiffrer' ce langage et le renvoyer sous format html que le serveur renverra à l'utilisateur pour pouvoir la consulter.
UTILISATEUR ==demande d'une page==> SERVEUR(apache+PHP)==demande au moteur PHP d'interpreter le code ==> PHP
UTILISATEUR<==renvoi la page demandée à l'utilisateur(en HTML)==SERVEUR<==traite la demande et renvoi en HTML<==	PHP

3- Citez un langage de programmation qui s'exécute coté client.

	Javascrpit, il peut être lu directement par le navigateur.

4- Citez quelques types primitifs de variable. Est-il possible en PHP de comparer des variables de type primitif différent ? Si oui, que se passe-t-il si par exemple on compare une chaine avec un entier ?

Types primitifs: Integer, boolean, string..

Oui il est possible de comparer mais ça retournera 'false'.

5- Comment peut-on parcourir en PHP une variable de type tableau (array) ?

Avec la boucle "foreach" ou "for"
ex: (foreach $nomDuTableau as $valeur )	 ou 	 (foreach $nomDuTableau as  $clé=>$valeur)
echo $valeur;						                echo $clé .' :  '. $valeur


6- Quels sont les opérateurs PHP de comparaison stricte ? Ecrivez une ligne de code qui compare strictement deux variables php.

" === " "!=="

if($valeur1 === $valeur2)
On compare si les 2 variables sont de même type et même valeur.

7- Ecrivez un script PHP :
    - Codez une fonction multiplication() avec deux paramètres, qui réalise la multiplication de ces paramètres puis renvoie le résultat
    - Utilisez cette fonction dans le script puis affichez l'opération elle-même ainsi que son résultat.

PHP BDD

1- A quoi sert MySQL ?

MySQL est un outil de gestion de base de données qui sert à travailler avec une base de données sous forme de requêtes.

Il permet de stocker des données, d'en créer, modifier, supprimer.

2- Quelle est la différence entre une base de donnée, des cookies et des variables de session ? Précisez à quel moment chacune de ces données sont supprimées.

La base de données contient des données enregistrées dans une table, elles sont supprimées lors d'une requêtes faite par le développeur ou encore manuellement; les cookies enregistrent des données coté client, sa suppression est définit dans le code, sa durée de vie et la variable de session est enregistrée coté client, sa suppression intervient à la fin de la session e cours.

3- Concevez une base de données "esv_m2i" via phpmyadmin en créant une table stagiaire, qui contient 5 colonnes en faisant le meilleur choix pour le type : id, created_at, name, phone, birthday

Je l'ai appelé m2i_esv  car une esv_m2i existe déjà!!  Mais j'ai pas triché!


4- Ecrivez un script PHP qui se connecte à cette  base de données "esv_m2i", grâce à PDO.

$bdd = new PDO('mysql:host=127.0.0.1;dbname=m2i_esv;charset=UTF8', 'root', ' ');

5- Ecrivez le script PHP, qui une fois connecté à cette base, récupère tous les enregistrements de la table stagiaire et les affiche dans la page. Affichez l'ensemble des informations de chaque stagiaire séparées par des tirets, avec un retour à la ligne entre chaque stagiaire. Pour tester ce script, vous pouvez ajouter manuellement des enregistrements grâce à phpmyadmin.
 	$sql = "SELECT * FROM stagiaire";
	$db = new PDO('mysql:host=127.0.0.1;dbname=m2i_esv;charset=UTF8', 'root', '')
             $statement = $db->query($sql);
      	$trainees = $statement->fetchAll(PDO::FETCH_ASSOC);

  <table>
        <?php
            foreach ($trainees as $trainee) {
                echo "<tr>
                      ". - ." <td>".$trainee['id']."</td>
                       ". - ."<td>".$trainee['created_at']."</td>
                       ". - ." <td>".$trainee['name']."</td>
                      ". - ."  <td>".$trainee['phone']."</td>
                      ". - ."  <td>".$trainee['birthday']."</td>
                    </tr>";
            }
        ?>
    </table>

