<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiEduGroupMsgParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'classId' => 'class_id',
        'userid' => 'userid',
        'bizId' => 'biz_id',
        'replace' => 'replace',
        'templateCode' => 'template_code',
        'receiveUseridList' => 'receive_userid_list',
        'imageUrl' => 'image_url',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->replace) {
            $res['replace'] = $this->replace;
        }
        if (null !== $this->templateCode) {
            $res['template_code'] = $this->templateCode;
        }
        if (null !== $this->receiveUseridList) {
            $res['receive_userid_list'] = $this->receiveUseridList;
        }
        if (null !== $this->imageUrl) {
            $res['image_url'] = $this->imageUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiEduGroupMsgParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['replace'])){
            $model->replace = $map['replace'];
        }
        if(isset($map['template_code'])){
            $model->templateCode = $map['template_code'];
        }
        if(isset($map['receive_userid_list'])){
            if(!empty($map['receive_userid_list'])){
                $model->receiveUseridList = $map['receive_userid_list'];
            }
        }
        if(isset($map['image_url'])){
            $model->imageUrl = $map['image_url'];
        }
        return $model;
    }
    /**
     * @description 订购此应用的企业标识
     * @var int
     */
    public $agentId;

    /**
     * @description 班级id
     * @var int
     */
    public $classId;

    /**
     * @description 发送消息人的员工id
     * @var string
     */
    public $userid;

    /**
     * @description 发送此消息的唯一ID
     * @var string
     */
    public $bizId;

    /**
     * @description 根据消息模板传递待填充的内容，消息模板具体见场景说明。key/value值不能出现“:”和“,”字符，防止出现解析错误
     * @var string
     */
    public $replace;

    /**
     * @description 群发消息模板id
     * @var string
     */
    public $templateCode;

    /**
     * @description 群中哪些人接受此消息，不填默认全部
     * @var array
     */
    public $receiveUseridList;

    /**
     * @description 消息卡片图片地址。由业务对接人员提供
     * @var string
     */
    public $imageUrl;

}
