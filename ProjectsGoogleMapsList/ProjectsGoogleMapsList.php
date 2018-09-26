<?php
namespace dashboard\ddabrowski\ProjectsGoogleMapsList;

use \JobRouter\Api\Dashboard\v1\Widget;

class ProjectsGoogleMapsList extends Widget
{
    public function getTitle()
    {
        return '<i class="fas fa-clipboard-list fa-2x"></i> Klienci i partnerzy';
    }
	
	public function getLabel()
	{
		return '<i class="fas fa-clipboard-list fa-2x"></i> Klienci i partnerzy';
	}
	
	public function getItems(){

        $items = array(

            'items' => $this->getDataFromDB(),
            'noEntries' => CONST_NO_ENTRIES,
        );
		
		return $items;
    }
	
	public function getCategory()
    {

        return 'jobrouterPL';

    }
	
	public function getDataFromDB(){
		
		$jobDB = $this->getJobDB();
		$sql = "SELECT * FROM PROJEKTY ORDER BY name ASC;";
		
		$result = $jobDB->query($sql);

        if ($result === false) {
            return [];
        }
        return $jobDB->fetchAll($result);
	}

    public function getDimensions()
    {
        return ([
            'minHeight' => 2,
            'minWidth' => 1,
            'maxHeight' => 8,
            'maxWidth' => 4,
        ]);
    }

    public function getData()
    {
        return [
            'items' => $this->getItems(),
            'noEntries' => CONST_NO_ENTRIES,
			'label' => $this->getLabel(),
        ];
    }

    public function isAuthorized()
    {
        return true;
    }
}
