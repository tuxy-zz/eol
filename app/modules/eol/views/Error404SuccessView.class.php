<?php

class eol_Error404SuccessView extends AgaviView
{
	public function execute(AgaviRequestDataHolder $rd)
	{
		// send a 404 not found header
		$this->getResponse()->setHttpStatusCode('404');

		// create a new template layer and a renderer by hand
		// reason: these actions should work even if the user changes his output type to use Smarty or whatever

		$renderer = new AgaviPhpRenderer();
		$renderer->initialize($this->context, array());
		$this->appendLayer($this->createLayer('AgaviFileTemplateLayer', 'content', $renderer));
	}
}

?>