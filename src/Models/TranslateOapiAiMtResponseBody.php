<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TranslateOapiAiMtResponseBody extends Model {
    protected $_name = [
        'result' => 'result',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TranslateOapiAiMtResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 翻译结果字符串
     * @var string
     */
    public $result;

    /**
     * @description 成功为0
     * @var int
     */
    public $errcode;

    /**
     * @description 成功
     * @var string
     */
    public $errmsg;

}
