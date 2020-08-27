<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringMealconfigResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringMealconfigResponseBody\result\mealItemList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringMealconfigResponseBody\result\addressList;

class result extends Model {
    protected $_name = [
        'mealItemList' => 'meal_item_list',
        'corpId' => 'corp_id',
        'addressDetail' => 'address_detail',
        'address' => 'address',
        'mealTime' => 'meal_time',
        'comingMealDayList' => 'coming_meal_day_list',
        'addressList' => 'address_list',
        'addressId' => 'address_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->mealItemList) {
            $res['meal_item_list'] = [];
            if(null !== $this->mealItemList && is_array($this->mealItemList)){
                $n = 0;
                foreach($this->mealItemList as $item){
                    $res['meal_item_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->addressDetail) {
            $res['address_detail'] = $this->addressDetail;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->mealTime) {
            $res['meal_time'] = $this->mealTime;
        }
        if (null !== $this->comingMealDayList) {
            $res['coming_meal_day_list'] = $this->comingMealDayList;
        }
        if (null !== $this->addressList) {
            $res['address_list'] = [];
            if(null !== $this->addressList && is_array($this->addressList)){
                $n = 0;
                foreach($this->addressList as $item){
                    $res['address_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addressId) {
            $res['address_id'] = $this->addressId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['meal_item_list'])){
            if(!empty($map['meal_item_list'])){
                $model->mealItemList = [];
                $n = 0;
                foreach($map['meal_item_list'] as $item) {
                    $model->mealItemList[$n++] = null !== $item ? mealItemList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['address_detail'])){
            $model->addressDetail = $map['address_detail'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['meal_time'])){
            $model->mealTime = $map['meal_time'];
        }
        if(isset($map['coming_meal_day_list'])){
            if(!empty($map['coming_meal_day_list'])){
                $model->comingMealDayList = $map['coming_meal_day_list'];
            }
        }
        if(isset($map['address_list'])){
            if(!empty($map['address_list'])){
                $model->addressList = [];
                $n = 0;
                foreach($map['address_list'] as $item) {
                    $model->addressList[$n++] = null !== $item ? addressList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['address_id'])){
            $model->addressId = $map['address_id'];
        }
        return $model;
    }
    /**
     * @description Mealitemlist
     * @var array
     */
    public $mealItemList;

    /**
     * @description 企业corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 送餐详细地址
     * @var string
     */
    public $addressDetail;

    /**
     * @description 缩略地址，可为空
     * @var string
     */
    public $address;

    /**
     * @description 点餐时间枚举值：2-法定工作日3-双休及节假日4- 每天
     * @var int
     */
    public $mealTime;

    /**
     * @description 可点餐时间
     * @var array
     */
    public $comingMealDayList;

    /**
     * @description Addressvos
     * @var array
     */
    public $addressList;

    /**
     * @description 默认地址的id
     * @var int
     */
    public $addressId;

}
