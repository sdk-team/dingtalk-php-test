<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_msgOapiSnsParams\msg;

class Send_msgOapiSnsParams extends Model {
    protected $_name = [
        'code' => 'code',
        'msg' => 'msg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['msg'] = null !== $this->msg ? $this->msg->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Send_msgOapiSnsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['msg'])){
            $model->msg = msg::fromMap($map['msg']);
        }
        return $model;
    }
    /**
     * @description form表单提交成功后获取的formId
     * @var string
     */
    public $code;

    /**
     * @description 消息内容
     * @var msg
     */
    public $msg;

}
