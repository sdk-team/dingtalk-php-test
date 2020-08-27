<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiFugongProcess_codeResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'result' => 'result',
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
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiFugongProcess_codeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = $map['result'];
            }
        }
        return $model;
    }
    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误结果
     * @var string
     */
    public $errmsg;

    /**
     * @description 模板code列表
     * @var array
     */
    public $result;

}
