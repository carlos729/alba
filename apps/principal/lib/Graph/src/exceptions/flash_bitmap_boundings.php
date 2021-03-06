<?php
/**
 * File containing the ezcGraphFlashBitmapBoundingsException class
 *
 * @package Graph
 * @version 1.2
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Flash does not support bitmap scaling, so that this exceptions is thrown 
 * when an image does not have the requested size.
 *
 * @package Graph
 * @version 1.2
 */
class ezcGraphFlashBitmapBoundingsException extends ezcGraphException
{
    /**
     * Constructor
     * 
     * @param int $imageWidth
     * @param int $imageHeight
     * @param int $reqWidth
     * @param int $reqHeight
     * @return void
     * @ignore
     */
    public function __construct( $imageWidth, $imageHeight, $reqWidth, $reqHeight )
    {
        parent::__construct( "Flash does not support bitmap scaling, so that it is up to you to scale the image '$imageWidth' * '$imageHeight' to '$reqWidth' * '$reqHeight'." );
    }
}

?>
