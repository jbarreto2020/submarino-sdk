<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/submarino-sdk
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\SubmarinoSdk;

use Gpupo\CommonSdk\FactoryAbstract;

class Factory extends FactoryAbstract
{
    public function getNamespace()
    {
        return '\Gpupo\SubmarinoSdk\Entity\\';
    }

    public function setClient(array $clientOptions = [])
    {
        $this->client = new Client($clientOptions, $this->getLogger());
    }

    public function getSchema($namespace = null)
    {
        return [
            'generic' => [
                'manager' => sprintf('%sGenericManager', $namespace),
            ],
            'product' => [
                'class' => $namespace.'Product\Product',
                'manager' => $namespace.'Product\Manager',
            ],
            'sku' => [
                'class' => $namespace.'Product\Factory',
                'method' => 'factorySku',
                'manager' => $namespace.'Product\Sku\Manager',
            ],
            'order' => [
                'class' => $namespace.'Order\Order',
                'manager' => $namespace.'Order\Manager',
            ],
        ];
    }
}
