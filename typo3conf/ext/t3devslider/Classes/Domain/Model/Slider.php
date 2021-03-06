<?php
namespace T3Dev\T3devslider\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Dmitry Vasiliev <vaaraha@gmail.com>, T3Dev
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
 * Slider
 */
class Slider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * item
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\T3devslider\Domain\Model\Item>
     * @cascade remove
     */
    protected $item = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->item = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a Item
     *
     * @param \T3Dev\T3devslider\Domain\Model\Item $item
     * @return void
     */
    public function addItem(\T3Dev\T3devslider\Domain\Model\Item $item)
    {
        $this->item->attach($item);
    }
    
    /**
     * Removes a Item
     *
     * @param \T3Dev\T3devslider\Domain\Model\Item $itemToRemove The Item to be removed
     * @return void
     */
    public function removeItem(\T3Dev\T3devslider\Domain\Model\Item $itemToRemove)
    {
        $this->item->detach($itemToRemove);
    }
    
    /**
     * Returns the item
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\T3devslider\Domain\Model\Item> $item
     */
    public function getItem()
    {
        return $this->item;
    }
    
    /**
     * Sets the item
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\T3devslider\Domain\Model\Item> $item
     * @return void
     */
    public function setItem(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $item)
    {
        $this->item = $item;
    }

}