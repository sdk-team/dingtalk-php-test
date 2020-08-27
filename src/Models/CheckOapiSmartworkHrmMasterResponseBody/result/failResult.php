<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CheckOapiSmartworkHrmMasterResponseBody\result;

use AlibabaCloud\Tea\Model;

class failResult extends Model {
    protected $_name = [
        'errorMsg' => 'error_msg',
        'errorCode' => 'error_code',
        'bizUk' => 'biz_uk',
        'success' => 'success',
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
        if (null !== $this->bizUk) {
            $res['biz_uk'] = $this->bizUk;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return failResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['error_code'])){
            $model->errorCode = $map['error_code'];
        }
        if(isset($map['biz_uk'])){
            $model->bizUk = $map['biz_uk'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        return $model;
    }
    /**
     * @description 保存错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description 错误码
     * @var string
     */
    public $errorCode;

    /**
     * @description 业务UK唯一确定一条流水
     * @var string
     */
    public $bizUk;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

}
