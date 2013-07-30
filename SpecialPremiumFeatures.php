<?php

class SpecialPFShop extends SpecialPage {

	public function __construct() {
		parent::__construct( 'PremiumFeaturesShop' );
	}

	public function execute( $par ) {
		$out = $this->getOutput();
		$this->setHeaders();

		$out->addModules( 'ext.premiumfeaturesshop' );
		
		$this->buildSWShopHeader();
		
		$out->addWikiMsg( 'premiumfeatures-item-support' );
	}
}