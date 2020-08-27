<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAppstoreGoodsResponseBody\goodsInfo\itemList;

use AlibabaCloud\Tea\Model;

class itemCycList extends Model {
    protected $_name = [
        'cycNum' => 'cyc_num',
        'cycUnit' => 'cyc_unit',
        'aliasName' => 'alias_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cycNum) {
            $res['cyc_num'] = $this->cycNum;
        }
        if (null !== $this->cycUnit) {
            $res['cyc_unit'] = $this->cycUnit;
        }
        if (null !== $this->aliasName) {
            $res['alias_name'] = $this->aliasName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return itemCycList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cyc_num'])){
            $model->cycNum = $map['cyc_num'];
        }
        if(isset($map['cyc_unit'])){
            $model->cycUnit = $map['cyc_unit'];
        }
        if(isset($map['alias_name'])){
            $model->aliasName = $map['alias_name'];
        }
        return $model;
    }
    /**
     * @description 订购周期数量
     * @var int
     */
    public $cycNum;

    /**
     * @description 订购周期单位
     * @var int
     */
    public $cycUnit;

    /**
     * @description 周期别名
     * @var string
     */
    public $aliasName;

}
