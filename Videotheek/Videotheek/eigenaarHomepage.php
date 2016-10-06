
<div id="headerwrap" id="home" name="home">
			<header class="clearfix">
           <?php
    require_once("./classes/LoginClass.php");
        
    $query = "SELECT gebruiker.emailadres, gebruiker.naam, gebruiker.achternaam, gebruiker.adres, gebruiker.postcode ,gebruiker.woonplaats, gebruiker.rol, gebruiker.wachtwoord, gebruiker.geactiveerd FROM gebruiker";

    $gebruikers = LoginClass::find_by_sql($query);
    echo "<div class='section'><div class='container'><div class='row'>";
    foreach ($gebruikers as $value){
         echo "<div class='form-group'>
          <table class='table table-hover'>
                       <td>".$value->getEmailadres()."</td>
                       <td>".$value->getNaam()."</td>
                       <td>".$value->getAchternaam()."</td>
                       <td>".$value->getAdres()."</td>
                       <td>".$value->getPostcode()."</td>
                       <td>".$value->getWoonplaats()."</td>
                       <td>".$value->getRol()."</td>
                       <td>".$value->getWachtwoord()."</td>
                       <td>".$value->getGeactiveerd()."</td>
         </table>
   </div>  
  </div> ";
        
    }
    echo "</div></div></div>";
    //var_dump($films);
?>

          

                
           </header>
</div>

