<?php
/**
 * Plugin plxMySnowFlakes
 *
 * @version	1.0
 * @date	06/11/2011
 * @author	Stephane F
 **/
class plxMySnowFlakes extends plxPlugin {

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

        # appel du constructeur de la classe plxPlugin (obligatoire)
        parent::__construct($default_lang);

		# déclaration des hooks
        $this->addHook('ThemeEndHead', 'ThemeEndHead');
        $this->addHook('ThemeEndBody', 'ThemeEndBody');
    }

	/**
	 * Méthode qui charge le style
	 *
	 * @return	stdio
	 * @author	Stephane F
	 * @editor	aruhuno
	 **/
    public function ThemeEndHead() {		
		echo "\t".'<link rel="stylesheet" href="'.PLX_PLUGINS.'plxMySnowFlakes/ressources/stylesheet.css" media="screen"/>'."\n";
	}
	
	/**
	 * Méthode qui charge le javascript
	 *
	 * @return	stdio
	 * @author	aruhuno
	 **/
    public function ThemeEndHead() {		
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'plxMySnowFlakes/snowflakes.js"></script>'."\n";
	}
}
?>
