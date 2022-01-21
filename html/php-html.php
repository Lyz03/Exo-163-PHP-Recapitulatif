<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       foreach ($students as $value) {
           echo "<li>$value</li>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           // TODO list of day
           for ($i = 1; $i <= 31; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           // TODO list of month
           for ($i = 1; $i <= 12; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           // TODO list of year
           for ($i = 1940; $i <= 2022; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    if (isset($_GET['sexe'])) {
        if ($_GET['sexe'] === "fille") {

            echo "<p>Je suis une fille</p>";

        } elseif ($_GET['sexe'] === "garçon") {
            // TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon"
            echo "<p>Je suis un garçon</p>";

        } else {
            // TODO Instruction : Afficher ce bloc dans les autres cas
            echo "<p>Je suis indéfini</p>";
        }
    }
    ?>

  </body>
</html>
