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
        foreach ($pois as $poi) {
            var_dump($poi->getTitle());
        }

		$this->view->assign('pois', $pois);
        var_dump($this->request->getArguments());
	}

}
?>