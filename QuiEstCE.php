<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Qui-est ce ?</title>
    <link rel="stylesheet" href="jeu.css">
</head>

<body>
  <h1>Qui est ce ?</h1>
  
    <tbody>
      <tr>
        <td align="center">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/0.jpeg" alt="image0">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/1.jpeg" alt="image1">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/2.jpeg" alt="image2">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/3.jpeg" alt="image3">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/4.jpeg" alt="image4">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/5.jpeg" alt="image5">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/6.jpeg" alt="image6">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/7.jpeg" alt="image7">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/8.jpeg" alt="image8">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/9.jpeg" alt="image9">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/10.jpeg" alt="image10">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/11.jpeg" alt="image11">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/12.jpeg" alt="image12">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/13.jpeg" alt="image13">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/14.jpeg" alt="image14">
          <img src="http://btsio.org/2022/pisellim/Qui-est-ce/images/15.jpeg" alt="image15">
        </td>

        </td>
        <td align="center">
          <form method="post" action="QuiEstCE.php">

            <h5>Le personnage a des lunettes ?</h3>
            Oui<input type="radio" name="question1" value="1" />|
            Non<input type="radio" name="question1" value="0" />

            </br>
            <h5>Le personnage a une moustache ?</h3>
            Oui<input type="radio" name="question2" value="1" /> |
            Non<input type="radio" name="question2" value="0" />

            </br>
            <h5>Le personnage a un chapeau, une casquette ?</h3>
            Oui<input type="radio" name="question3" value="1" /> |
            Non<input type="radio" name="question3" value="0" />

            </br>
            <h5>Le personnage a des cheveux ?</h3>
            Oui<input type="radio" name="question4" value="1" /> |
            Non<input type="radio" name="question4" value="0" />

            </br>
            <h5>Le personnage a une boucle d'oreille ?</h3>
            Oui<input type="radio" name="question5" value="1" /> |
            Non<input type="radio" name="question5" value="0" />

            </br>
            <h5>Le personnage a une barbe ?</h3>
            Oui<input type="radio" name="question6" value="1" /> |
            Non<input type="radio" name="question6" value="0" />

            </br>
            <h5>Le personnage a noeud papillon ?</h3>
            Oui<input type="radio" name="question7" value="1" /> |
            Non<input type="radio" name="question7" value="0" />

            <br /><br />
            <input type="submit" name="envoyer" value="réponse">
            <br /> <br />

        </td>
      </tr>
      <tr>
        <td align="center">

          <?php

          // Syndrome S1, S2 et S3
          $S1 = $_POST['question1'] + $_POST['question3'] + $_POST['question5'] + $_POST['question7'];
          $S1 = $S1 % 2;

          $S2 = $_POST['question2'] + $_POST['question3'] + $_POST['question5'] + $_POST['question6'];
          $S2 = $S2 % 2;

          $S3 = $_POST['question4'] + $_POST['question5'] + $_POST['question6'] + $_POST['question7'];
          $S3 = $S3 % 2;

          if ($_POST["envoyer"]) {
            if (($S1 == 1) && ($S2 == 0) && ($S3 == 0)) {
              echo "Vous avez menti à la question 1";
              if ($_POST['question1'] == 1) {
                $_POST['question1'] = 0;
              } else {
                $_POST['question1'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 0)) {
              echo "Vous avez menti à la question 2";
              if ($_POST['question2'] == 1) {
                $_POST['question2'] = 0;
              } else {
                $_POST['question2'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 0)) {
              echo "Vous avez menti à la question 3";
              if ($_POST['question3'] == 1) {
                $_POST['question3'] = 0;
              } else {
                $_POST['question3'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 0) && ($S3 == 1)) {
              echo "Vous avez menti à la question 4";
              if ($_POST['question4'] == 1) {
                $_POST['question4'] = 0;
              } else {
                $_POST['question4'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 1)) {
              echo "Vous avez menti à la question 5";
              if ($_POST['question5'] == 1) {
                $_POST['question5'] = 0;
              } else {
                $_POST['question5'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 1)) {
              echo "Vous avez menti à la question 6";
              if ($_POST['question6'] == 1) {
                $_POST['question6'] = 0;
              } else {
                $_POST['question6'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 0) && ($S3 == 1)) {
              echo "Vous avez menti à la question 7";
              if ($_POST['question7'] == 1) {
                $_POST['question7'] = 0;
              } else {
                $_POST['question7'] = 1;
              }
            } else {
              echo 'Vous n\'avez pas menti';
            }
          }

          echo "<br/>";

          $personnage = $_POST['question1'] . $_POST['question2'] . $_POST['question3'] . $_POST['question4'] . $_POST['question5'] . $_POST['question6'] . $_POST['question7'];


          if ($_POST["envoyer"]) {
            echo 'Voici le personnage choisi';
            echo '<img src=http://btsio.org/2022/jint/quiestce/images/' . $personnage . '.jpg alt=personnage>';
          }
          ?>
        </td>
      </tr>
    </tbody>
  </table>
  
</body>
</html>