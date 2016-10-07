<div id="headerwrap" id="home" name="home">
  <header class="clearfix">
    <?php
      if (isset($_POST['submit']))
      {
        require_once("./classes/LoginClass.php");
        if (LoginClass::delete_by_email($_POST['klantEmailadres']))
        {
            //Zo ja, geef een melding dat het emailadres bestaat en stuur
            //door naar register_form.php
            echo "De film is niet verwijderd.<br>
                  Probeer het nog een keer.";
            header("refresh:2;url=index.php?content=eigenaarHomepage");
        }
        else
        {
            echo "Het is Gelukt!";
        }
       
      }
      else
      {
        require_once("./classes/LoginClass.php");
         $query = "SELECT gebruiker.emailadres, gebruiker.naam, gebruiker.achternaam, gebruiker.adres, gebruiker.postcode ,gebruiker.woonplaats, gebruiker.rol, gebruiker.wachtwoord, gebruiker.geactiveerd FROM gebruiker";
         $gebruikers = LoginClass::find_by_sql($query);
         echo "<div class='section'><div class='container'><div class='row'>";
 
         foreach ($gebruikers as $value){
           ?>
    <form method='POST'>
      <tbody>
        <td><a href='index.php?content="<?php $value->getEmailadres(); ?>"'></a></td>
        <td><?php echo $value->getNaam(); ?> </td>
        <br>
        <td><?php echo $value->getAchternaam(); ?></td>
        <br>
           <td><?php echo $value->getAchternaam(); ?></td>
        <br>
           <td><?php echo $value->getAdres(); ?></td>
        <br>
           <td><?php echo $value->getPostcode(); ?></td>
        <br>
           <td><?php echo $value->getWoonplaats(); ?></td>
        <br>
        <td><?php echo $value->getRol(); ?></td>
        <br>

     
      </tbody>
      <input type="hidden" name="klantEmailadres" value="<?php echo $value->getEmailadres(); ?>">
      <input type="submit" name="submit" >
    </form>



<?php
    }
  }
  ?>
</header>
</div>