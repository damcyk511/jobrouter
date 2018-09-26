<?php
namespace dashboard\ddabrowski\ProjectsGoogleMaps;

use \JobRouter\Api\Dashboard\v1\Widget;

class ProjectsGoogleMaps extends Widget
{
    public function getTitle()
    {
        return '<i class="fas fa-map-marker-alt fa-2x"></i> JobRouter w Polsce';
    }
	
	public function getLabel()
	{
		return '<i class="fas fa-map-marker-alt fa-2x"></i> JobRouter w Polsce';
	}
	
	public function getItems(){

        $items = array(

            'items' => $this->getDataFromDB(),
            'noEntries' => CONST_NO_ENTRIES,
        );
		
		return $items;
    }
	
	public function getDataFromDB(){
		
		$jobDB = $this->getJobDB();
		$sql = "SELECT * FROM PROJEKTY";
		
		$result = $jobDB->query($sql);

        if ($result === false) {
            return [];
        }
        return $jobDB->fetchAll($result);
	}

    public function getDimensions()
    {
        return ([
            'minHeight' => 4,
            'minWidth' => 2,
            'maxHeight' => 4,
            'maxWidth' => 8,
        ]);
    }

	public function getCategory()
    {

        return 'jobrouterPL';

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
