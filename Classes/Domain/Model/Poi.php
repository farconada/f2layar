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
class Tx_F2layar_Domain_Model_PoiRepository extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * atttribution
	 *
	 * @var string
	 */
	protected $atttribution;

	/**
	 * Latitude
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $latitude;

	/**
	 * Longitude
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $longitude;

	/**
	 * image
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * line2
	 *
	 * @var string
	 */
	protected $line2;

	/**
	 * line3
	 *
	 * @var string
	 */
	protected $line3;

	/**
	 * line4
	 *
	 * @var string
	 */
	protected $line4;

	/**
	 * type
	 *
	 * @var integer
	 */
	protected $type;

	/**
	 * dimension
	 *
	 * @var integer
	 */
	protected $dimension;

	/**
	 * alt
	 *
	 * @var integer
	 */
	protected $alt;

	/**
	 * relativealt
	 *
	 * @var integer
	 */
	protected $relativealt;

	/**
	 * distance
	 *
	 * @var string
	 */
	protected $distance;

	/**
	 * infocus
	 *
	 * @var boolean
	 */
	protected $infocus;

	/**
	 * donotindex
	 *
	 * @var boolean
	 */
	protected $donotindex;

	/**
	 * showsmallbiw
	 *
	 * @var boolean
	 */
	protected $showsmallbiw;

	/**
	 * showbiwonclick
	 *
	 * @var boolean
	 */
	protected $showbiwonclick;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Returns the atttribution
	 *
	 * @return string $atttribution
	 */
	public function getAtttribution() {
		return $this->atttribution;
	}

	/**
	 * Sets the atttribution
	 *
	 * @param string $atttribution
	 * @return void
	 */
	public function setAtttribution($atttribution) {
		$this->atttribution = $atttribution;
		return $this;
	}

	/**
	 * Returns the latitude
	 *
	 * @return string $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param string $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		return $this;
	}

	/**
	 * Returns the longitude
	 *
	 * @return string $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param string $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		return $this;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
		return $this;
	}

	/**
	 * Returns the line2
	 *
	 * @return string $line2
	 */
	public function getLine2() {
		return $this->line2;
	}

	/**
	 * Sets the line2
	 *
	 * @param string $line2
	 * @return void
	 */
	public function setLine2($line2) {
		$this->line2 = $line2;
		return $this;
	}

	/**
	 * Returns the line3
	 *
	 * @return string $line3
	 */
	public function getLine3() {
		return $this->line3;
	}

	/**
	 * Sets the line3
	 *
	 * @param string $line3
	 * @return void
	 */
	public function setLine3($line3) {
		$this->line3 = $line3;
		return $this;
	}

	/**
	 * Returns the line4
	 *
	 * @return string $line4
	 */
	public function getLine4() {
		return $this->line4;
	}

	/**
	 * Sets the line4
	 *
	 * @param string $line4
	 * @return void
	 */
	public function setLine4($line4) {
		$this->line4 = $line4;
		return $this;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Returns the dimension
	 *
	 * @return integer $dimension
	 */
	public function getDimension() {
		return $this->dimension;
	}

	/**
	 * Sets the dimension
	 *
	 * @param integer $dimension
	 * @return void
	 */
	public function setDimension($dimension) {
		$this->dimension = $dimension;
		return $this;
	}

	/**
	 * Returns the alt
	 *
	 * @return integer $alt
	 */
	public function getAlt() {
		return $this->alt;
	}

	/**
	 * Sets the alt
	 *
	 * @param integer $alt
	 * @return void
	 */
	public function setAlt($alt) {
		$this->alt = $alt;
		return $this;
	}

	/**
	 * Returns the relativealt
	 *
	 * @return integer $relativealt
	 */
	public function getRelativealt() {
		return $this->relativealt;
	}

	/**
	 * Sets the relativealt
	 *
	 * @param integer $relativealt
	 * @return void
	 */
	public function setRelativealt($relativealt) {
		$this->relativealt = $relativealt;
		return $this;
	}

	/**
	 * Returns the distance
	 *
	 * @return string $distance
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Sets the distance
	 *
	 * @param string $distance
	 * @return void
	 */
	public function setDistance($distance) {
		$this->distance = $distance;
		return $this;
	}

	/**
	 * Returns the infocus
	 *
	 * @return boolean $infocus
	 */
	public function getInfocus() {
		return $this->infocus;
	}

	/**
	 * Sets the infocus
	 *
	 * @param boolean $infocus
	 * @return void
	 */
	public function setInfocus($infocus) {
		$this->infocus = $infocus;
		return $this;
	}

	/**
	 * Returns the boolean state of infocus
	 *
	 * @return boolean
	 */
	public function isInfocus() {
		return $this->getInfocus();
	}

	/**
	 * Returns the donotindex
	 *
	 * @return boolean $donotindex
	 */
	public function getDonotindex() {
		return $this->donotindex;
	}

	/**
	 * Sets the donotindex
	 *
	 * @param boolean $donotindex
	 * @return void
	 */
	public function setDonotindex($donotindex) {
		$this->donotindex = $donotindex;
		return $this;
	}

	/**
	 * Returns the boolean state of donotindex
	 *
	 * @return boolean
	 */
	public function isDonotindex() {
		return $this->getDonotindex();
	}

	/**
	 * Returns the showsmallbiw
	 *
	 * @return boolean $showsmallbiw
	 */
	public function getShowsmallbiw() {
		return $this->showsmallbiw;
	}

	/**
	 * Sets the showsmallbiw
	 *
	 * @param boolean $showsmallbiw
	 * @return void
	 */
	public function setShowsmallbiw($showsmallbiw) {
		$this->showsmallbiw = $showsmallbiw;
		return $this;
	}

	/**
	 * Returns the boolean state of showsmallbiw
	 *
	 * @return boolean
	 */
	public function isShowsmallbiw() {
		return $this->getShowsmallbiw();
	}

	/**
	 * Returns the showbiwonclick
	 *
	 * @return boolean $showbiwonclick
	 */
	public function getShowbiwonclick() {
		return $this->showbiwonclick;
	}

	/**
	 * Sets the showbiwonclick
	 *
	 * @param boolean $showbiwonclick
	 * @return void
	 */
	public function setShowbiwonclick($showbiwonclick) {
		$this->showbiwonclick = $showbiwonclick;
		return $this;
	}

	/**
	 * Returns the boolean state of showbiwonclick
	 *
	 * @return boolean
	 */
	public function isShowbiwonclick() {
		return $this->getShowbiwonclick();
	}

}
?>