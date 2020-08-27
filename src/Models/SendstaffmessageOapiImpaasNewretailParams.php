<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendstaffmessageOapiImpaasNewretailParams extends Model {
    protected $_name = [
        'msgType' => 'msg_type',
        'sender' => 'sender',
        'useridList' => 'userid_list',
        'content' => 'content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->msgType) {
            $res['msg_type'] = $this->msgType;
        }
        if (null !== $this->sender) {
            $res['sender'] = $this->sender;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendstaffmessageOapiImpaasNewretailParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msg_type'])){
            $model->msgType = $map['msg_type'];
        }
        if(isset($map['sender'])){
            $model->sender = $map['sender'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        return $model;
    }
    /**
     * @description 0系统消息
     * @var int
     */
    public $msgType;

    /**
     * @description 系统账号
     * @var string
     */
    public $sender;

    /**
     * @description 用账号列表
     * @var array
     */
    public $useridList;

    /**
     * @description 消息体
     * @var string
     */
    public $content;

}
