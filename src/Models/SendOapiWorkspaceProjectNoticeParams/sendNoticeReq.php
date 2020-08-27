<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiWorkspaceProjectNoticeParams;

use AlibabaCloud\Tea\Model;

class sendNoticeReq extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'mobileUrl' => 'mobile_url',
        'msgContent' => 'msg_content',
        'pcUrl' => 'pc_url',
        'receiverUserids' => 'receiver_userids',
        'showRedPoint' => 'show_red_point',
        'uuid' => 'uuid',
        'msgButton' => 'msg_button',
    ];
    public function validate() {
        Model::validateRequired('mobileUrl', $this->mobileUrl, true);
        Model::validateRequired('msgContent', $this->msgContent, true);
        Model::validateRequired('pcUrl', $this->pcUrl, true);
        Model::validateRequired('receiverUserids', $this->receiverUserids, true);
        Model::validateRequired('uuid', $this->uuid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->mobileUrl) {
            $res['mobile_url'] = $this->mobileUrl;
        }
        if (null !== $this->msgContent) {
            $res['msg_content'] = $this->msgContent;
        }
        if (null !== $this->pcUrl) {
            $res['pc_url'] = $this->pcUrl;
        }
        if (null !== $this->receiverUserids) {
            $res['receiver_userids'] = $this->receiverUserids;
        }
        if (null !== $this->showRedPoint) {
            $res['show_red_point'] = $this->showRedPoint;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->msgButton) {
            $res['msg_button'] = $this->msgButton;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sendNoticeReq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['mobile_url'])){
            $model->mobileUrl = $map['mobile_url'];
        }
        if(isset($map['msg_content'])){
            $model->msgContent = $map['msg_content'];
        }
        if(isset($map['pc_url'])){
            $model->pcUrl = $map['pc_url'];
        }
        if(isset($map['receiver_userids'])){
            if(!empty($map['receiver_userids'])){
                $model->receiverUserids = $map['receiver_userids'];
            }
        }
        if(isset($map['show_red_point'])){
            $model->showRedPoint = $map['show_red_point'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['msg_button'])){
            $model->msgButton = $map['msg_button'];
        }
        return $model;
    }
    /**
     * @description 圈子corpId+secret方式调用接口，没有agentId可以不传此时透出给用户是以圈子名字发通知。如果是isv方式的圈子应用，在圈子开通时会推送给isv agentID，必须传入agentId，会以圈子内应用的身份发通知
     * @var int
     */
    public $agentid;

    /**
     * @description 通知点击跳转的手机链接
     * @var string
     */
    public $mobileUrl;

    /**
     * @description 通知文本内容 1-512字符
     * @var string
     */
    public $msgContent;

    /**
     * @description 通知点击跳转的pc链接
     * @var string
     */
    public $pcUrl;

    /**
     * @description 接收人在圈子组织内的userid
     * @var array
     */
    public $receiverUserids;

    /**
     * @description 是否在圈子入口展示数字红点+1，默认情况只是点进圈子在通知那一栏有数字红点，该值设为true后会在圈子入口也展示数字红点
     * @var bool
     */
    public $showRedPoint;

    /**
     * @description 防重复，如果2个请求传入同样的uuid，第二个请求会返回成功
     * @var string
     */
    public $uuid;

    /**
     * @description 通知的下方按钮文案
     * @var string
     */
    public $msgButton;

}
