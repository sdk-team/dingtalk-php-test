<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripMonthbillUrlParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'billMonth' => 'bill_month',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->billMonth) {
            $res['bill_month'] = $this->billMonth;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bill_month'])){
            $model->billMonth = $map['bill_month'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 对账单月份，不传取最新对账单
     * @var string
     */
    public $billMonth;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
