<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiBlackboardCategoryResponseBody\result;

class ListOapiBlackboardCategoryResponseBody extends Model {
    protected $_name = [
        'result' => 'result',
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = [];
            if(null !== $this->result && is_array($this->result)){
                $n = 0;
                foreach($this->result as $item){
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
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
     * @return ListOapiBlackboardCategoryResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = [];
                $n = 0;
                foreach($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
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
     * @description 出参，success为true时，该值不为空，否则值为空
     * @var array
     */
    public $result;

    /**
     * @description 本次调用是否成功，该值为false时，根据errcode和errMsg排查失败原因
     * @var bool
     */
    public $success;

    /**
     * @description 请求失败返回错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 请求失败返回错误信息
     * @var string
     */
    public $errmsg;

}
