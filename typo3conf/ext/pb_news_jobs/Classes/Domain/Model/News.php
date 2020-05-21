<?php
//namespace LuJa\NewsExtend\Domain\Model;
//namespace AgmikeVendor\AgmikeKey\Domain\Model;
namespace PeterBenke\PbNewsJobs\Domain\Model;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Peter Benke <peter.benke@nttdata.com>
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
 * News model
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class Tx_PbNewsJobs_Domain_Model_News extends Tx_News_Domain_Model_News {

	/**
	 * @var string
	 */
	protected $txPbnewsjobsPredlog;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsGoodnum;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsGoodword;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsPrice;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsStars;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsCommentsnum;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsTreatment;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsHabitation;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsFood;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsComments;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsInfra;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsProezd;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsPriceny;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsBtn;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsBtnny;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsWhereclick;

	/**
	 * @var string
	 */
	protected $txPbnewsjobsWhereclickny;

    /**
     * @var string
     */
    protected $txPbnewsjobsHtmlcode;

    /**
     * @var string
     */
    protected $txPbnewsjobsCustomMeta;

	/**
	 * @param string $txPbnewsjobsEntrydate
	 */
	public function setTxPbnewsjobsEntrydate($txPbnewsjobsEntrydate){
		$this->txPbnewsjobsEntrydate = $txPbnewsjobsEntrydate;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsEntrydate(){
		return $this->txPbnewsjobsEntrydate;
	}

	/**
	 * @param string $txPbnewsjobsPredlog
	 */
	public function setTxPbnewsjobsPredlog($txPbnewsjobsPredlog){
		$this->txPbnewsjobsPredlog = $txPbnewsjobsPredlog;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsPredlog(){
		return $this->txPbnewsjobsPredlog;
	}

	/**
	 * @param string $txPbnewsjobsGoodnum
	 */
	public function setTxPbnewsjobsGoodnum($txPbnewsjobsGoodnum){
		$this->txPbnewsjobsGoodnum = $txPbnewsjobsGoodnum;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsGoodnum(){
		return $this->txPbnewsjobsGoodnum;
	}

	/**
	 * @param string $txPbnewsjobsGoodword
	 */
	public function setTxPbnewsjobsGoodword($txPbnewsjobsGoodword){
		$this->txPbnewsjobsGoodword = $txPbnewsjobsGoodword;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsGoodword(){
		return $this->txPbnewsjobsGoodword;
	}

	/**
	 * @param string $txPbnewsjobsPrice
	 */
	public function setTxPbnewsjobsPrice($txPbnewsjobsPrice){
		$this->txPbnewsjobsPrice = $txPbnewsjobsPrice;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsPrice(){
		return $this->txPbnewsjobsPrice;
	}

	/**
	 * @param string $txPbnewsjobsStars
	 */
	public function setTxPbnewsjobsStars($txPbnewsjobsStars){
		$this->txPbnewsjobsStars = $txPbnewsjobsStars;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsStars(){
		return $this->txPbnewsjobsStars;
	}

	/**
	 * @param string $txPbnewsjobsCommentsnum
	 */
	public function setTxPbnewsjobsCommentsnum($txPbnewsjobsCommentsnum){
		$this->txPbnewsjobsCommentsnum = $txPbnewsjobsCommentsnum;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsCommentsnum(){
		return $this->txPbnewsjobsCommentsnum;
	}

	/**
	 * @param string $txPbnewsjobsTreatment
	 */
	public function setTxPbnewsjobsTreatment($txPbnewsjobsTreatment){
		$this->txPbnewsjobsTreatment = $txPbnewsjobsTreatment;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsTreatment(){
		return $this->txPbnewsjobsTreatment;
	}

	/**
	 * @param string $txPbnewsjobsHabitation
	 */
	public function setTxPbnewsjobsHabitation($txPbnewsjobsHabitation){
		$this->txPbnewsjobsHabitation = $txPbnewsjobsHabitation;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsHabitation(){
		return $this->txPbnewsjobsHabitation;
	}

	/**
	 * @param string $txPbnewsjobsFood
	 */
	public function setTxPbnewsjobsFood($txPbnewsjobsFood){
		$this->txPbnewsjobsFood = $txPbnewsjobsFood;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsFood(){
		return $this->txPbnewsjobsFood;
	}

	/**
	 * @param string $txPbnewsjobsComments
	 */
	public function setTxPbnewsjobsComments($txPbnewsjobsComments){
		$this->txPbnewsjobsComments = $txPbnewsjobsComments;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsComments(){
		return $this->txPbnewsjobsComments;
	}

	/**
	 * @param string $txPbnewsjobsInfra
	 */
	public function setTxPbnewsjobsInfra($txPbnewsjobsInfra){
		$this->txPbnewsjobsInfra = $txPbnewsjobsInfra;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsInfra(){
		return $this->txPbnewsjobsInfra;
	}

	/**
	 * @param string $txPbnewsjobsProezd
	 */
	public function setTxPbnewsjobsProezd($txPbnewsjobsProezd){
		$this->txPbnewsjobsProezd = $txPbnewsjobsProezd;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsProezd(){
		return $this->txPbnewsjobsProezd;
	}

	/**
	 * @param string $txPbnewsjobsPriceny
	 */
	public function setTxPbnewsjobsPriceny($txPbnewsjobsPriceny){
		$this->txPbnewsjobsPriceny = $txPbnewsjobsPriceny;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsPriceny(){
		return $this->txPbnewsjobsPriceny;
	}

	/**
	 * @param string $txPbnewsjobsBtn
	 */
	public function setTxPbnewsjobsBtn($txPbnewsjobsBtn){
		$this->txPbnewsjobsBtn = $txPbnewsjobsBtn;
	}

	/**
	 * @return string
	 */
	public function getTxPbnewsjobsBtn(){
		return $this->txPbnewsjobsBtn;
	}

	/**
	 * @param string $txPbnewsjobsBtnny
	 */
	public function settxPbnewsjobsBtnny($txPbnewsjobsBtnny){
		$this->txPbnewsjobsBtnny = $txPbnewsjobsBtnny;
	}

	/**
	 * @return string
	 */
	public function gettxPbnewsjobsBtnny(){
		return $this->txPbnewsjobsBtnny;
	}

	/**
	 * @param string $txPbnewsjobsWhereclick
	 */
	public function settxPbnewsjobsWhereclick($txPbnewsjobsWhereclick){
		$this->txPbnewsjobsWhereclick = $txPbnewsjobsWhereclick;
	}

	/**
	 * @return string
	 */
	public function gettxPbnewsjobsWhereclick(){
		return $this->txPbnewsjobsWhereclick;
	}

	/**
	 * @param string $txPbnewsjobsWhereclickny
	 */
	public function settxPbnewsjobsWhereclickny($txPbnewsjobsWhereclickny){
		$this->txPbnewsjobsWhereclickny = $txPbnewsjobsWhereclickny;
	}

	/**
	 * @return string
	 */
	public function gettxPbnewsjobsWhereclickny(){
		return $this->txPbnewsjobsWhereclickny;
	}

    /**
     * @param string $txPbnewsjobsHtmlcode
     */
    public function settxPbnewsjobsHtmlcode($txPbnewsjobsHtmlcode){
        $this->txPbnewsjobsHtmlcode = $txPbnewsjobsHtmlcode;
    }

    /**
     * @return string
     */
    public function gettxPbnewsjobsHtmlcode(){
        return $this->txPbnewsjobsHtmlcode;
    }

    /**
     * @param string $txPbnewsjobsCustomMeta
     */
    public function setTxPbnewsjobsCustomMeta($txPbnewsjobsCustomMeta){
        $this->txPbnewsjobsCustomMeta = $txPbnewsjobsCustomMeta;
    }

    /**
     * @return string
     */
    public function getTxPbnewsjobsCustomMeta(){
        return $this->txPbnewsjobsCustomMeta;
    }

}