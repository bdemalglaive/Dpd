<?php
declare (strict_types=1);

namespace Ekyna\Component\Dpd\Response;

use Ekyna\Component\Dpd\Model;

/**
 * Class ShipmentWithLabelsResponse
 * @package Ekyna\Component\Dpd
 * @author  Etienne Dauvergne <contact@ekyna.com>
 */
class CreateShipmentWithLabelsResponse implements ResponseInterface
{
    /**
     * @var Model\ShipmentsWithLabels
     */
    public $model;
}