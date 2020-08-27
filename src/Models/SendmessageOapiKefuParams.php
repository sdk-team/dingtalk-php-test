<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendmessageOapiKefuParams extends Model {
    protected $_name = [
        'serviceid' => 'serviceid',
        'userid' => 'userid',
        'customerid' => 'customerid',
        'token' => 'token',
        'msgtype' => 'msgtype',
        'content' => 'content',
    ];
    public function validate() {
        Model::validateRequired('serviceid', $this->serviceid, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('customerid', $this->customerid, true);
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('msgtype', $this->msgtype, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->serviceid) {
            $res['serviceid'] = $this->serviceid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->customerid) {
            $res['customerid'] = $this->customerid;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendmessageOapiKefuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['serviceid'])){
            $model->serviceid = $map['serviceid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['customerid'])){
            $model->customerid = $map['customerid'];
        }
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 客服服务id
     * @var int
     */
    public $serviceid;

    /**
     * @description 客服id
     * @var string
     */
    public $userid;

    /**
     * @description 消费者id
     * @var string
     */
    public $customerid;

    /**
     * @description 消息token
     * @var string
     */
    public $token;

    /**
     * @description 消息类型
     * @var string
     */
    public $msgtype;

    /**
     * @description 消息体
     * @var string
     */
    public $content;

}
