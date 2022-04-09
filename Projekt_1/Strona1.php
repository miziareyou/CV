<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CV Logowanie</title>
  </head>
  <body>




    <?php
     if(isset($_POST["submit"])){
       if($_POST["haslo"] == "ABC123"){
         if($_POST["login"] == "Klient")
         ?>

           <script language="JavaScript" type="text/javascript">
   location.href="strona2.php";
</script>


          <?php
        }

        else{
          echo "Nieprawidłowy login bądź hasło";
        }
     }
     else{
       echo "Wprowadź Login i Hasło";
     }
     ?>
<?php
if(isset($_POST["submit1"])){
if($_POST["drogowskaz"] == "15"){
  ?>


      <center><?php echo "Login to = Klient"?> <br> <?php echo "Hasło to = ABC123";?> </br>
        <?php
}
}
?>

</center>

     <form method="POST">
       <input type="text" name="login" placeholder="Podaj login">
         <input type="password" name="haslo" placeholder="Podaj hasło">
         <input type="submit" name="submit" value="Wyślij">
          <center><h3> Jeśli chcesz otrzymać login i hasło to napisz </h3></center>
          <center><h4> Ile to 5 razy 3? </h4></center>
         <center><p><input type="text" name="drogowskaz" placeholder="wpisz odpowiedź"></P></center>
           <center><input type="submit" name="submit1" value="Wyślij"></center>
       </form>
     </body>
     </html>
