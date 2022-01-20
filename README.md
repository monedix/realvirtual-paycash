# Mage2 Module Paycash Pay

    ``paycash/module-pay``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Modulo para la creacion de solicitudes de pago usando paycash

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Paycash`
 - Enable the module by running `php bin/magento module:enable Paycash_Pay`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require paycash/module-pay`
 - enable the module by running `php bin/magento module:enable Paycash_Pay`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - API Endpoint
	- POST - Paycash\Pay\Api\Paycash_testManagementInterface > Paycash\Pay\Model\Paycash_testManagement

 - API Endpoint
	- POST - Paycash\Pay\Api\Paycash_prodManagementInterface > Paycash\Pay\Model\Paycash_prodManagement

 - Block
	- Metodo_pago > metodo_pago.phtml


## Attributes



