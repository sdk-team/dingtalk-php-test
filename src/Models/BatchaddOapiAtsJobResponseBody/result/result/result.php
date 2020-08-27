<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobResponseBody\result\result\result\item;

class result extends Model {
    protected $_name = [
        'errorMsg' => 'error_msg',
        'errorCode' => 'error_code',
        'item' => 'item',
        'success' => 'success',
        'index' => 'index',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->item) {
            $res['item'] = null !== $this->item ? $this->item->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['error_code'])){
            $model->errorCode = $map['error_code'];
        }
        if(isset($map['item'])){
            $model->item = item::fromMap($map['item']);
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['index'])){
            $model->index = $map['index'];
        }
        return $model;
    }
    /**
     * @description 错误描述
     * @var string
     */
    public $errorMsg;

    /**
     * @description 错误码
     * @var string
     */
    public $errorCode;

    /**
     * @description 职位
     * @var item
     */
    public $item;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 下标（从0开始）
     * @var int
     */
    public $index;

}
