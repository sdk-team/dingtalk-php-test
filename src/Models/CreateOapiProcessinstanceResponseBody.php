<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiProcessinstanceResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'processInstanceId' => 'process_instance_id',
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
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiProcessinstanceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        return $model;
    }
    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description 审批实例id
     * @var string
     */
    public $processInstanceId;

}
