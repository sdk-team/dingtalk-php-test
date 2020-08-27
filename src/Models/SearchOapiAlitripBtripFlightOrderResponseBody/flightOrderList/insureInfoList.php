<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList;

use AlibabaCloud\Tea\Model;

class insureInfoList extends Model {
    protected $_name = [
        'insureNo' => 'insure_no',
        'status' => 'status',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->insureNo) {
            $res['insure_no'] = $this->insureNo;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return insureInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['insure_no'])){
            $model->insureNo = $map['insure_no'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 保单号
     * @var string
     */
    public $insureNo;

    /**
     * @description 状态：1已出保 2已退保
     * @var int
     */
    public $status;

    /**
     * @description 乘机人(保险人)姓名
     * @var string
     */
    public $name;

}
