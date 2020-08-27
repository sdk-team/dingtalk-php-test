<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TerminateOapiDingpayOrderParams extends Model {
    protected $_name = [
        'extension' => 'extension',
        'orderNos' => 'order_nos',
        'operator' => 'operator',
        'reason' => 'reason',
    ];
    public function validate() {
        Model::validateRequired('orderNos', $this->orderNos, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('reason', $this->reason, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->orderNos) {
            $res['order_nos'] = $this->orderNos;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TerminateOapiDingpayOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['order_nos'])){
            if(!empty($map['order_nos'])){
                $model->orderNos = $map['order_nos'];
            }
        }
        if(isset($map['operator'])){
            $model->operator = $map['operator'];
        }
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        return $model;
    }
    /**
     * @description 扩展信息
     * @var string
     */
    public $extension;

    /**
     * @description dingpay单号列表
     * @var array
     */
    public $orderNos;

    /**
     * @description 操作者员工号
     * @var string
     */
    public $operator;

    /**
     * @description 中止原因
     * @var string
     */
    public $reason;

}
