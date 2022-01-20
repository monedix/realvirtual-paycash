<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Paycash\Pay\Api;

interface Paycash_testManagementInterface
{

    /**
     * POST for paycash_test api
     * @param string $param
     * @return string
     */
    public function postPaycash_test($param);
}

