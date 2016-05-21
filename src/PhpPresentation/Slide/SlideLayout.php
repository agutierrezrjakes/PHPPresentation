<?php
/**
 * This file is part of PHPPresentation - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPresentation is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPPresentation/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPPresentation
 * @copyright   2009-2015 PHPPresentation contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */
namespace PhpOffice\PhpPresentation\Slide;

use PhpOffice\PhpPresentation\ComparableInterface;
use PhpOffice\PhpPresentation\ShapeContainerInterface;

class SlideLayout extends AbstractSlide implements ComparableInterface, ShapeContainerInterface
{
    protected $slideMaster;
    /**
     * Slide relation ID (should not be used by user code!)
     *
     * @var string
     */
    public $relationId;
    /**
     * Slide layout NR (should not be used by user code!)
     *
     * @var int
     */
    public $layoutNr;

    /**
     * Create a new slideLayout
     *
     * @param SlideMaster $pSlideMaster
     */
    public function __construct(SlideMaster $pSlideMaster)
    {
        // Set parent
        $this->slideMaster = $pSlideMaster;
        // Shape collection
        $this->shapeCollection = new \ArrayObject();
        // Set identifier
        $this->identifier = md5(rand(0, 9999) . time());
    }
}