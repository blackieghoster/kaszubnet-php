<?php

	include '../lib/log_check.php';
	include '../lib/upload_wyp.php';

mysqli_report(MYSQLI_REPORT_STRICT);

		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{				
				if ($wszystko_OK==true)
				{
					//Dodanie do bazy				
					if ($polaczenie->query("UPDATE wyposazenie SET bk_zdjecie='$target_file' WHERE id=$_SESSION[id]"))
					{
						$_SESSION['udanarejestracja']=true;
						header('refresh: 1; url=../edycja.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}					
				}				
				$polaczenie->close();
			}			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera!</span>';
			echo '<br />Informacja developerska: '.$e;
		}		
?>