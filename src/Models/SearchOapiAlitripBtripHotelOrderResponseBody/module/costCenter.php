<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module;

use AlibabaCloud\Tea\Model;

class costCenter extends Model {
    protected $_name = [
        'id' => 'id',
        'corpid' => 'corpid',
        'number' => 'number',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return costCenter
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 商旅成本中心id
     * @var int
     */
    public $id;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 成本中心编号
     * @var string
     */
    public $number;

    /**
     * @description 成本中心名称
     * @var string
     */
    public $name;

}
