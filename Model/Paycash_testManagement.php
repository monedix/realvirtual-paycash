<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Paycash\Pay\Model;

class Paycash_testManagement implements \Paycash\Pay\Api\Paycash_testManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postPaycash_test($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

