<?php

declare(strict_types=1);

namespace NITSAN\NSMadhav\Domain\Model;



/**
 * This file is part of the "" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 
 */

/**
 * text
 */
class Price extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * 
     */
    // VALIDATION 1 :CONTINUE ONLY IF NAME CONTAINS 0-9 OR A-Z CHARACTER.NO SPACE ,NO COMMA.
    protected $title = null;
   

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}