<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetvisibleSmartworkBpmsProcessResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetvisibleSmartworkBpmsProcessResponseBody\result\processes;

class result extends Model {
    protected $_name = [
        'success' => 'success',
        'processes' => 'processes',
        'errorMsg' => 'error_msg',
        'dingOpenErrcode' => 'ding_open_errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->processes) {
            $res['processes'] = [];
            if(null !== $this->processes && is_array($this->processes)){
                $n = 0;
                foreach($this->processes as $item){
                    $res['processes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['processes'])){
            if(!empty($map['processes'])){
                $model->processes = [];
                $n = 0;
                foreach($map['processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        return $model;
    }
    /**
     * @description 请求状态
     * @var bool
     */
    public $success;

    /**
     * @description 返回的业务数据
     * @var array
     */
    public $processes;

    /**
     * @description 错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description 错误码
     * @var int
     */
    public $dingOpenErrcode;

}
