      <ul class="nav navbar-nav">

	<li><a href='index.php?content=algemeneHomepage'>Home</a></li>
<?php

	if (isset($_SESSION['gebruiker']))
	{
		echo "<li><a href='index.php?content=logout'>Logout</a></li>";
		switch ($_SESSION['rol'])
		{  
            	case "eigenaar":
				echo "<li><a href='index.php?content=eigenaarHomepage'>
                        Gegevens
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=wijzig_wachtwoord'>
                        Wachtwoord wijzigen
                        </a>
                      </li>";
				case "root":
				echo "<li><a href='index.php?content=rootHomepage'>
                        Gegevens
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=wijzig_wachtwoord'>
                        Wachtwoord wijzigen
                        </a>
                      </li>";
			case "klant":
				echo "<li><a href='index.php?content=klantHomepage'>
                        Gegevens
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=wijzig_wachtwoord'>
                        Wachtwoord wijzigen
                        </a>
                      </li>";
			break;
            	case "baliemedewerker":
				echo "<li><a href='index.php?content=baliemedewerkerHomepage'>
                        Gegevens
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=wijzig_wachtwoord'>
                        Wachtwoord wijzigen
                        </a>
                      </li>";  
		}
	}
	else
	{
	echo "
		
		<li><a href='index.php?content=register_form'>Registreren</a></li>
		<li><a href='index.php?content=login_form'>Login</a></li>
        <li><a href='index.php?content=contact'>Contact</a></li>";
	}
?>
</ul>