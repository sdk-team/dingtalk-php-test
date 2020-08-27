<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceCorpMemberResponseBody\result;

class AddOapiWorkspaceCorpMemberResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'result' => 'result',
        'success' => 'success',
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
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiWorkspaceCorpMemberResponseBody
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
        return $model;
    }
    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误文案
     * @var string
     */
    public $errmsg;

    /**
     * @description 结果
     * @var array
     */
    public $result;

    /**
     * @description true or false
     * @var bool
     */
    public $success;

}
