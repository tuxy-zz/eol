<?php

class eol_IndexSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);

		// set the title
		$this->setAttribute('_title', 'Index Action');
	}
}

?>