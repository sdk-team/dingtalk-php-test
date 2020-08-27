<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SyncOapiConferenceParticipantResponseBody extends Model {
    protected $_name = [
        'batchId' => 'batch_id',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->batchId) {
            $res['batch_id'] = $this->batchId;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiConferenceParticipantResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['batch_id'])){
            $model->batchId = $map['batch_id'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 批次号，首次上传后生成，后续批次需要在参数中带上
     * @var string
     */
    public $batchId;

    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误代码
     * @var int
     */
    public $errcode;

}
