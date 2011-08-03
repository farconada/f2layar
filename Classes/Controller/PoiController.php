<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Fernando Arconada <fernando.arconada@gmail.com>
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 *
 *
 * @package f2layar
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_F2layar_Controller_PoiController extends Tx_Extbase_MVC_Controller_ActionController {
    /**
     * @var Tx_F2layar_Domain_Repository_PoiRepository
     */
    protected $poiRepository;

    /**
     * DI
     * @param Tx_F2layar_Domain_Repository_PoiRepository $repository
     * @return void
     */
    public function injectPoiRepository(Tx_F2layar_Domain_Repository_PoiRepository $repository) {
        $this->poiRepository = $repository;
    }

    protected function initializeAction()
    {
        parent::initializeAction();
        $params = array(
            'layerName' => 'layer',
            'userID' => 'user',
            'developerId' => 'dev',
            'developerHash' => 'hash',
            'timestamp' => 'timestamp',
            'lat' => 'latitude',
            'lon' => 'longitude',
            'radius' => 'range',
            'pageKey' => 'pageKey',
            'lang' => 'language',
            'accuracy' => 'accuracy',
        );
        foreach ($params as $layarVar => $internalVar){
            if(!t3lib_div::_GET($layarVar)){
                $this->request->setArgument($internalVar,0);
            } else {
                $this->request->setArgument($internalVar,t3lib_div::_GET($layarVar));
            }
        }
    }


    /**
	 * action list
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
        
        $pois = $this->poiRepository->findPoisInPosition($this->request->getArgument('longitude'),
                                                         $this->request->getArgument('latitude'),
                                                         $this->request->getArgument('range')
        );

        $poisArray = array();
        $i = 0;
        foreach ($pois as $poi) {
            $poisArray[$i]['distance'] = 0;
            $poisArray[$i]['attribution'] = $poi->getAttribution();
            $poisArray[$i]['title'] = $poi->getTitle();
            $poisArray[$i]['lon'] = $poi->getLongitude() * 100000;
            $poisArray[$i]['lat'] = $poi->getLatitude() * 100000;
            $poisArray[$i]['type'] = $poi->getType();
            $poisArray[$i]['imageUrl'] = '';
            $poisArray[$i]['line2'] = $poi->getLine2();
            $poisArray[$i]['line3'] = $poi->getLine3();
            $poisArray[$i]['line4'] = $poi->getLine4();
            $poisArray[$i]['id'] = $poi->getUid();
            $poisArray[$i]['actions'] = array();


            $i++;
        }

		$this->view->assign('pois', $pois);
        $output['hotspots'] = $poisArray;
        $output['layer'] = $this->request->getArgument('layer');
        $output['errorString'] = 'OK';
        $output['morePages'] = false;
        $output['errorCode'] = 0;
        $output['nextPageKey'] = NULL;

        
        return json_encode($output);
	}

}
?>