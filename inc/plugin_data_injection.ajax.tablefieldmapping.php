<?php

define('GLPI_ROOT', '../../..');
include (GLPI_ROOT."/inc/includes.php");

include("../plugin_data_injection.includes.php");

global $DATAINJECTIONLANG;

if(isset($_POST['id']))
	{
	
	echo "<select name='field[".$_POST['id']."][2]' style='width: 150px'>";
		
	if(isset($_POST['idMapping']))
		{
			if($_POST['idMapping'] == NOT_MAPPED)
				echo "<option value='-1'>".$DATAINJECTIONLANG["step9"][4]."</option>";
			else
				{
					$values = getAllMappingsDefinitionsByType($_POST['idMapping']);

					foreach($values as $key => $value)
						echo "<option value='".$key."'>".$value."</option>";
				}
		}
			
	echo "</select>";
	}
?>