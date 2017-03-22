<?php

/*
 * This file is part of gpupo/submarino-sdk
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://www.gpupo.com/>.
 */

namespace Gpupo\SubmarinoSdk\Entity\Order\Customer;

use Gpupo\CommonSdk\Entity\EntityAbstract;
use Gpupo\CommonSdk\Entity\EntityInterface;

class DeliveryAddress extends EntityAbstract implements EntityInterface
{
    public function getSchema()
    {
        return  [
            'state'          => 'string',
            'number'         => 'string',
            'country'        => 'string',
            'street'         => 'string',
            'additionalInfo' => 'string',
            'neighborhood'   => 'string',
            'city'           => 'string',
            'zipcode'        => 'string',
            'reference'      => 'string',
        ];
    }
}
