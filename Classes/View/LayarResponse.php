<?php
/**
 * @author Fernando Arconada fernando.arconada@gmail.com
 * Date: 5/08/11
 * Time: 11:02
 */

class Tx_F2layar_View_LayarResponse implements Tx_Extbase_MVC_View_ViewInterface
{
    /**
     * @var Tx_Extbase_MVC_Controller_ControllerContext
     */
    protected $controllerContext;

    /**
     * The initial rendering context for this template view.
     * at certain points while rendering the template.
     *
     * @var Tx_Fluid_Core_ViewHelper_TemplateVariableContainer
     */
    protected $templateVariableContainer;

    public function injectTemplateVariableContainer(Tx_Fluid_Core_ViewHelper_TemplateVariableContainer $container)
    {
        $this->templateVariableContainer = $container;
    }

    /**
     * Sets the current controller context
     *
     * @param Tx_Extbase_MVC_Controller_ControllerContext $controllerContext
     * @return void
     */
    public function setControllerContext(Tx_Extbase_MVC_Controller_ControllerContext $controllerContext)
    {
        $this->controllerContext = $controllerContext;
    }


    /**
     * Add a variable to the view data collection.
     * Can be chained, so $this->view->assign(..., ...)->assign(..., ...); is possible
     *
     * @param string $key Key of variable
     * @param object $value Value of object
     * @return Tx_Extbase_MVC_View_ViewInterface an instance of $this, to enable chaining
     * @api
     */
    public function assign($key, $value)
    {
        if ($this->templateVariableContainer->exists($key)) {
            $this->templateVariableContainer->remove($key);
        }
        $this->templateVariableContainer->add($key, $value);
        return $this;
    }

    /**
     * Add multiple variables to the view data collection
     *
     * @param array $values array in the format array(key1 => value1, key2 => value2)
     * @return Tx_Extbase_MVC_View_ViewInterface an instance of $this, to enable chaining
     * @api
     */
    public function assignMultiple(array $values)
    {
        foreach ($values as $key => $value) {
            if ($this->templateVariableContainer->exists($key)) {
                $this->templateVariableContainer->remove($key);
            }
            $this->templateVariableContainer->add($key, $value);
        }
        return $this;
    }

    /**
     * Tells if the view implementation can render the view for the given context.
     *
     * @param Tx_Extbase_MVC_Controller_ControllerContext $controllerContext
     * @return boolean TRUE if the view has something useful to display, otherwise FALSE
     * @api
     */
    public function canRender(Tx_Extbase_MVC_Controller_ControllerContext $controllerContext)
    {
        return TRUE;
    }

    /**
     * Renders the view
     *
     * @return string The rendered view
     * @api
     */
    public function render()
    {
        $output['hotspots'] = $this->getHotspotsArray();
        $output['layer'] = $this->templateVariableContainer->get('layer');
        $output['errorString'] = 'OK';
        $output['morePages'] = false;
        $output['errorCode'] = 0;
        $output['nextPageKey'] = NULL;

        return json_encode($output);

    }

    private function getHotspotsArray(){
        $pois = $this->templateVariableContainer->get('pois');
        $poisArray = array();
        $i = 0;
        foreach ($pois as $poi) {
            $poisArray[$i]['distance'] = $this->getDistanceToPoi($poi);
            $poisArray[$i]['attribution'] = $poi->getAttribution();
            $poisArray[$i]['title'] = $poi->getTitle();
            $poisArray[$i]['lon'] = $poi->getLongitude() * 1000000;
            $poisArray[$i]['lat'] = $poi->getLatitude() * 1000000;
            $poisArray[$i]['type'] = $poi->getType();
            $poisArray[$i]['imageUrl'] = '';
            $poisArray[$i]['line2'] = $poi->getLine2();
            $poisArray[$i]['line3'] = $poi->getLine3();
            $poisArray[$i]['line4'] = $poi->getLine4();
            $poisArray[$i]['id'] = $poi->getUid();
            $poisArray[$i]['actions'] = array();


            $i++;
        }
        return $poisArray;
    }

    private function getDistanceToPoi(Tx_F2layar_Domain_Model_Poi $poi){
        $lat1 = $poi->getLatitude();
        $lon1 = $poi->getLongitude();
        $lat2 = $this->templateVariableContainer->get('my-latitude');
        $lon2 = $this->templateVariableContainer->get('my-longitude');
        
        $distance = (3958*3.1415926*sqrt(($lat2-$lat1)*($lat2-$lat1) + cos($lat2/57.29578)*cos($lat1/57.29578)*($lon2-$lon1)*($lon2-$lon1))/180);
        return $distance*1000; //in meters
    }

    /**
     * Initializes this view.
     *
     * @return void
     * @api
     */
    public function initializeView()
    {

    }

}