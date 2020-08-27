<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsendresultOapiMessageCorpconversationResponseBody\sendResult;

class GetsendresultOapiMessageCorpconversationResponseBody extends Model {
    protected $_name = [
        'sendResult' => 'send_result',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sendResult) {
            $res['send_result'] = null !== $this->sendResult ? $this->sendResult->toMap() : null;
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
     * @return GetsendresultOapiMessageCorpconversationResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['send_result'])){
            $model->sendResult = sendResult::fromMap($map['send_result']);
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
     * @description result
     * @var sendResult
     */
    public $sendResult;

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

}
