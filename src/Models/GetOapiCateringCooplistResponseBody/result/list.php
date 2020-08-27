<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringCooplistResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringCooplistResponseBody\result\list_\mealItemList;

class list_ extends Model {
    protected $_name = [
        'mealItemList' => 'meal_item_list',
        'mealTime' => 'meal_time',
        'address' => 'address',
        'addressDetail' => 'address_detail',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'logo' => 'logo',
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
        if (null !== $this->mealTime) {
            $res['meal_time'] = $this->mealTime;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->addressDetail) {
            $res['address_detail'] = $this->addressDetail;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->logo) {
            $res['logo'] = $this->logo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
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
        if(isset($map['meal_time'])){
            $model->mealTime = $map['meal_time'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['address_detail'])){
            $model->addressDetail = $map['address_detail'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['logo'])){
            $model->logo = $map['logo'];
        }
        return $model;
    }
    /**
     * @description mealItemList
     * @var array
     */
    public $mealItemList;

    /**
     * @description 点餐时间枚举值：2-法定工作日3-双休及节假日
     * @var int
     */
    public $mealTime;

    /**
     * @description 缩略地址，可为空
     * @var string
     */
    public $address;

    /**
     * @description 送餐详细地址
     * @var string
     */
    public $addressDetail;

    /**
     * @description 企业corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 企业logo的url
     * @var string
     */
    public $logo;

}
