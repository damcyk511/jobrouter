<?php
namespace dashboard\ddabrowski\SourcesRRS;

use \JobRouter\Api\Dashboard\v1\Widget;

class SourcesRRS extends Widget
{
    public function getTitle()
    {
        return '<i class="fas fa-rss fa-2x"></i> Kanały RSS';
    }
	
	public function getLabel()
	{
		return '<i class="fas fa-rss fa-2x"></i> Kanały RSS';
	}
	
	public function getCategory()
    {
        return 'jobrouterPL';
    }

    public function getDimensions()
    {
        return ([
            'minHeight' => 2,
            'minWidth' => 2,
            'maxHeight' => 8,
            'maxWidth' => 3,
        ]);
    }

    public function getData()
    {
        return [
			'label' => $this->getLabel(),
        ];
    }

    public function isAuthorized()
    {
        return true;
    }
}
