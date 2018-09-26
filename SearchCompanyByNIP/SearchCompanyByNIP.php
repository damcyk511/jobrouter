<?php
namespace dashboard\ddabrowski\SearchCompanyByNIP;

use \JobRouter\Api\Dashboard\v1\Widget;

class SearchCompanyByNIP extends Widget
{
    public function getTitle()
    {
        return '<i class="fas fa-search fa-2x"></i> Dane z KRS';
    }
	
	public function getLabel()
	{
		return '<i class="fas fa-search fa-2x"></i> Dane z KRS';
	}

    public function getDimensions()
    {
        return ([
            'minHeight' => 4,
            'minWidth' => 2,
            'maxHeight' => 8,
            'maxWidth' => 4,
        ]);
    }

	public function getCategory()
    {

        return 'jobrouterPL';

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
