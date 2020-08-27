<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiWorkspaceProjectNoticeParams\sendNoticeReq;

class SendOapiWorkspaceProjectNoticeParams extends Model {
    protected $_name = [
        'sendNoticeReq' => 'send_notice_req',
    ];
    public function validate() {
        Model::validateRequired('sendNoticeReq', $this->sendNoticeReq, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sendNoticeReq) {
            $res['send_notice_req'] = null !== $this->sendNoticeReq ? $this->sendNoticeReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiWorkspaceProjectNoticeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['send_notice_req'])){
            $model->sendNoticeReq = sendNoticeReq::fromMap($map['send_notice_req']);
        }
        return $model;
    }
    /**
     * @description 发送通知入参
     * @var sendNoticeReq
     */
    public $sendNoticeReq;

}
