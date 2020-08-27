<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAlitripBtripCostCenterResponseBody\costCenterList;

class QueryOapiAlitripBtripCostCenterResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'costCenterList' => 'cost_center_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->costCenterList) {
            $res['cost_center_list'] = [];
            if(null !== $this->costCenterList && is_array($this->costCenterList)){
                $n = 0;
                foreach($this->costCenterList as $item){
                    $res['cost_center_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAlitripBtripCostCenterResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['cost_center_list'])){
            if(!empty($map['cost_center_list'])){
                $model->costCenterList = [];
                $n = 0;
                foreach($map['cost_center_list'] as $item) {
                    $model->costCenterList[$n++] = null !== $item ? costCenterList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 成本中心列表
     * @var array
     */
    public $costCenterList;

}
