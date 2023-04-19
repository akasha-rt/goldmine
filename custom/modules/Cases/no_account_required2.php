<?php

			require_once 'modules/Configurator/Configurator.php';
			$configurator = new Configurator();
			
			$configurator->loadConfig(); 
			$configurator->config['require_accounts'] = false;
			
			$configurator->saveConfig();
			
			echo "The script ran!";
			