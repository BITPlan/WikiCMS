<?php
/**
 * cMSFrontend SpecialPage for CMSFrontend extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialCMSFrontend extends SpecialPage {
	public function __construct() {
		parent::__construct( 'cMSFrontend' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'special-cMSFrontend-title' ) );
		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg( 'special-cMSFrontend-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
