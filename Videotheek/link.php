      <ul class="nav navbar-nav">

	<li><a href='index.php?content=algemeneHomepage'>Home</a></li>
<?php
	if (isset($_SESSION['userrole']))
	{
		echo "<li><a href='index.php?content=logout'>Logout</a></li>";
		switch ($_SESSION['userrole'])
		{  
          	case "administrator":
				echo "<li><a href=''></a></li>";
			break;
            case "eigenaar":
				echo "<li><a href=''></a></li>";
			break;
			case "root":
				echo "<li><a href=''></a></li>";
			break;
			case "klant":
				echo "<li>
                        <a href='index.php?content=klant'>
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
                echo "<li><a href=''></a></li>";
            break;    
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