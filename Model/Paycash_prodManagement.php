<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Paycash\Pay\Model;

class Paycash_prodManagement implements \Paycash\Pay\Api\Paycash_prodManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postPaycash_prod($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

