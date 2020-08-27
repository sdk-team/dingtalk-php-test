<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiImpaasMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiImpaasMessageParams\request\senderid;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiImpaasMessageParams\request\xpnModel;

class request extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'msgContent' => 'msg_content',
        'msgExtension' => 'msg_extension',
        'receiveridList' => 'receiverid_list',
        'senderid' => 'senderid',
        'msgFeature' => 'msg_feature',
        'msgType' => 'msg_type',
        'xpnModel' => 'xpn_model',
    ];
    public function validate() {
        Model::validateRequired('msgContent', $this->msgContent, true);
        Model::validateRequired('msgType', $this->msgType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->msgContent) {
            $res['msg_content'] = $this->msgContent;
        }
        if (null !== $this->msgExtension) {
            $res['msg_extension'] = $this->msgExtension;
        }
        if (null !== $this->receiveridList) {
            $res['receiverid_list'] = $this->receiveridList;
        }
        if (null !== $this->senderid) {
            $res['senderid'] = null !== $this->senderid ? $this->senderid->toMap() : null;
        }
        if (null !== $this->msgFeature) {
            $res['msg_feature'] = $this->msgFeature;
        }
        if (null !== $this->msgType) {
            $res['msg_type'] = $this->msgType;
        }
        if (null !== $this->xpnModel) {
            $res['xpn_model'] = null !== $this->xpnModel ? $this->xpnModel->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['msg_content'])){
            $model->msgContent = $map['msg_content'];
        }
        if(isset($map['msg_extension'])){
            $model->msgExtension = $map['msg_extension'];
        }
        if(isset($map['receiverid_list'])){
            if(!empty($map['receiverid_list'])){
                $model->receiveridList = $map['receiverid_list'];
            }
        }
        if(isset($map['senderid'])){
            $model->senderid = senderid::fromMap($map['senderid']);
        }
        if(isset($map['msg_feature'])){
            $model->msgFeature = $map['msg_feature'];
        }
        if(isset($map['msg_type'])){
            $model->msgType = $map['msg_type'];
        }
        if(isset($map['xpn_model'])){
            $model->xpnModel = xpnModel::fromMap($map['xpn_model']);
        }
        return $model;
    }
    /**
     * @description 群ID
     * @var string
     */
    public $groupId;

    /**
     * @description 消息内容，根据msgtype不同，解析方式不同
     * @var string
     */
    public $msgContent;

    /**
     * @description 消息的可扩展字段，透传
     * @var string
     */
    public $msgExtension;

    /**
     * @description 接受者，暂不支持，可不填
     * @var array
     */
    public $receiveridList;

    /**
     * @description 发送者，暂不支持，可不填
     * @var senderid
     */
    public $senderid;

    /**
     * @description 消息的特性：静默消息，系统消息
     * @var string
     */
    public $msgFeature;

    /**
     * @description 消息类型：text，image，user-defined
     * @var string
     */
    public $msgType;

    /**
     * @description 推送信息
     * @var xpnModel
     */
    public $xpnModel;

}
