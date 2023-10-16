<?php

require_once(DIR_SYSTEM . 'library/Lunar/controller/AbstractLunarAdminController.php');
require_once(DIR_SYSTEM . 'library/Lunar/helper/LunarHelper.php');

/**
 * 
 */
class ControllerExtensionPaymentLunarCard extends AbstractLunarAdminController
{
    protected string $paymentMethodCode = LunarHelper::LUNAR_CARD_CODE;
    protected string $paymentMethodConfigCode = LunarHelper::LUNAR_CARD_CONFIG_CODE;
}
