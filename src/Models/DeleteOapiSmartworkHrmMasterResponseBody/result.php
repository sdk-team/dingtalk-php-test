<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterResponseBody\result\failResult;

class result extends Model {
    protected $_name = [
        'failResult' => 'fail_result',
        'allSuccess' => 'all_success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->failResult) {
            $res['fail_result'] = [];
            if(null !== $this->failResult && is_array($this->failResult)){
                $n = 0;
                foreach($this->failResult as $item){
                    $res['fail_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allSuccess) {
            $res['all_success'] = $this->allSuccess;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['fail_result'])){
            if(!empty($map['fail_result'])){
                $model->failResult = [];
                $n = 0;
                foreach($map['fail_result'] as $item) {
                    $model->failResult[$n++] = null !== $item ? failResult::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['all_success'])){
            $model->allSuccess = $map['all_success'];
        }
        return $model;
    }
    /**
     * @description 失败的处理结果
     * @var array
     */
    public $failResult;

    /**
     * @description 是否全部成功
     * @var bool
     */
    public $allSuccess;

}
