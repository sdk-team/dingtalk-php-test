<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_by_nameOapiProcessResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'processCode' => 'process_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_by_nameOapiProcessResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 模板code
     * @var string
     */
    public $processCode;

}
