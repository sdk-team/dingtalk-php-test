<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbybiztypeSmartworkBpmsProcessResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbybiztypeSmartworkBpmsProcessResponseBody\result\processList;

class result extends Model {
    protected $_name = [
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
        'processList' => 'process_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->processList) {
            $res['process_list'] = [];
            if(null !== $this->processList && is_array($this->processList)){
                $n = 0;
                foreach($this->processList as $item){
                    $res['process_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['process_list'])){
            if(!empty($map['process_list'])){
                $model->processList = [];
                $n = 0;
                foreach($map['process_list'] as $item) {
                    $model->processList[$n++] = null !== $item ? processList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 错误码
     * @var int
     */
    public $dingOpenErrcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description 返回数据
     * @var array
     */
    public $processList;

}
