<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiEduClassconversationResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiEduClassconversationResponseBody\result\response;

class result extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'response' => 'response',
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
        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toMap() : null;
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
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['response'])){
            $model->response = response::fromMap($map['response']);
        }
        return $model;
    }
    /**
     * @description 调用是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 系统错误
     * @var string
     */
    public $errmsg;

    /**
     * @description response
     * @var response
     */
    public $response;

}
