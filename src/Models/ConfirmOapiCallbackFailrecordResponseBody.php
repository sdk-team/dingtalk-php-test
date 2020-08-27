<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ConfirmOapiCallbackFailrecordResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'confirmList' => 'confirm_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->confirmList) {
            $res['confirm_list'] = $this->confirmList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmOapiCallbackFailrecordResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['confirm_list'])){
            if(!empty($map['confirm_list'])){
                $model->confirmList = $map['confirm_list'];
            }
        }
        return $model;
    }
    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 确认成功的id列表
     * @var array
     */
    public $confirmList;

}
