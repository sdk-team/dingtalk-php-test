<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TerminateOapiDingpayOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TerminateOapiDingpayOrderResponseBody\result\terminateResult;

class result extends Model {
    protected $_name = [
        'terminateResult' => 'terminate_result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->terminateResult) {
            $res['terminate_result'] = [];
            if(null !== $this->terminateResult && is_array($this->terminateResult)){
                $n = 0;
                foreach($this->terminateResult as $item){
                    $res['terminate_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['terminate_result'])){
            if(!empty($map['terminate_result'])){
                $model->terminateResult = [];
                $n = 0;
                foreach($map['terminate_result'] as $item) {
                    $model->terminateResult[$n++] = null !== $item ? terminateResult::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 终止结果列表
     * @var array
     */
    public $terminateResult;

}
