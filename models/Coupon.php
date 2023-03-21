<?php namespace Depcore\Coupons\Models;

use Model;

/**
 * Coupon Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Coupon extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'depcore_coupons_coupons';

    public $rules = [];
}
