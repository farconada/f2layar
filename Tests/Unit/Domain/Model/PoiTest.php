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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_F2layar_Domain_Model_Poi.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Layar POI Server
 *
 * @author Fernando Arconada <fernando.arconada@gmail.com>
 */
class Tx_F2layar_Domain_Model_PoiTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_F2layar_Domain_Model_Poi
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_F2layar_Domain_Model_Poi();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getAtttributionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAtttributionForStringSetsAtttribution() { 
		$this->fixture->setAtttribution('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAtttribution()
		);
	}
	
	/**
	 * @test
	 */
	public function getLatitudeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLatitudeForStringSetsLatitude() { 
		$this->fixture->setLatitude('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLatitude()
		);
	}
	
	/**
	 * @test
	 */
	public function getLongitudeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLongitudeForStringSetsLongitude() { 
		$this->fixture->setLongitude('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLongitude()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getLine2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLine2ForStringSetsLine2() { 
		$this->fixture->setLine2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLine2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLine3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLine3ForStringSetsLine3() { 
		$this->fixture->setLine3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLine3()
		);
	}
	
	/**
	 * @test
	 */
	public function getLine4ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLine4ForStringSetsLine4() { 
		$this->fixture->setLine4('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLine4()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForIntegerSetsType() { 
		$this->fixture->setType(12);

		$this->assertSame(
			12,
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getDimensionReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDimension()
		);
	}

	/**
	 * @test
	 */
	public function setDimensionForIntegerSetsDimension() { 
		$this->fixture->setDimension(12);

		$this->assertSame(
			12,
			$this->fixture->getDimension()
		);
	}
	
	/**
	 * @test
	 */
	public function getAltReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAlt()
		);
	}

	/**
	 * @test
	 */
	public function setAltForIntegerSetsAlt() { 
		$this->fixture->setAlt(12);

		$this->assertSame(
			12,
			$this->fixture->getAlt()
		);
	}
	
	/**
	 * @test
	 */
	public function getRelativealtReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRelativealt()
		);
	}

	/**
	 * @test
	 */
	public function setRelativealtForIntegerSetsRelativealt() { 
		$this->fixture->setRelativealt(12);

		$this->assertSame(
			12,
			$this->fixture->getRelativealt()
		);
	}
	
	/**
	 * @test
	 */
	public function getDistanceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDistanceForStringSetsDistance() { 
		$this->fixture->setDistance('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDistance()
		);
	}
	
	/**
	 * @test
	 */
	public function getInfocusReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getInfocus()
		);
	}

	/**
	 * @test
	 */
	public function setInfocusForBooleanSetsInfocus() { 
		$this->fixture->setInfocus(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getInfocus()
		);
	}
	
	/**
	 * @test
	 */
	public function getDonotindexReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getDonotindex()
		);
	}

	/**
	 * @test
	 */
	public function setDonotindexForBooleanSetsDonotindex() { 
		$this->fixture->setDonotindex(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getDonotindex()
		);
	}
	
	/**
	 * @test
	 */
	public function getShowsmallbiwReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getShowsmallbiw()
		);
	}

	/**
	 * @test
	 */
	public function setShowsmallbiwForBooleanSetsShowsmallbiw() { 
		$this->fixture->setShowsmallbiw(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getShowsmallbiw()
		);
	}
	
	/**
	 * @test
	 */
	public function getShowbiwonclickReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getShowbiwonclick()
		);
	}

	/**
	 * @test
	 */
	public function setShowbiwonclickForBooleanSetsShowbiwonclick() { 
		$this->fixture->setShowbiwonclick(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getShowbiwonclick()
		);
	}
	
}
?>