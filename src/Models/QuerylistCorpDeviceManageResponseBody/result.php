<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerylistCorpDeviceManageResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerylistCorpDeviceManageResponseBody\result\result;

class result extends Model {
    protected $_name = [
        'result' => 'result',
        'errorMsg' => 'error_msg',
        'dingOpenErrcode' => 'ding_open_errcode',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        return $model;
    }
    /**
     * @description 返回的Page对象
     * @var result
     */
    public $result;

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

    /**
     * @description request是否成功
     * @var bool
     */
    public $success;

}
