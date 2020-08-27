<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody;

class SendOapiMessageMassParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'mediaId' => 'media_id',
        'isToAll' => 'is_to_all',
        'msgType' => 'msg_type',
        'textContent' => 'text_content',
        'uuid' => 'uuid',
        'useridList' => 'userid_list',
        'depIdList' => 'dep_id_list',
        'isPreview' => 'is_preview',
        'msgBody' => 'msg_body',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateRequired('isToAll', $this->isToAll, true);
        Model::validateRequired('msgType', $this->msgType, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateMaxLength('unionid', $this->unionid, 128);
        Model::validateMaxLength('mediaId', $this->mediaId, 256);
        Model::validateMaxLength('msgType', $this->msgType, 32);
        Model::validateMaxLength('textContent', $this->textContent, 65535);
        Model::validateMaxLength('uuid', $this->uuid, 128);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->isToAll) {
            $res['is_to_all'] = $this->isToAll;
        }
        if (null !== $this->msgType) {
            $res['msg_type'] = $this->msgType;
        }
        if (null !== $this->textContent) {
            $res['text_content'] = $this->textContent;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->depIdList) {
            $res['dep_id_list'] = $this->depIdList;
        }
        if (null !== $this->isPreview) {
            $res['is_preview'] = $this->isPreview;
        }
        if (null !== $this->msgBody) {
            $res['msg_body'] = null !== $this->msgBody ? $this->msgBody->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiMessageMassParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['is_to_all'])){
            $model->isToAll = $map['is_to_all'];
        }
        if(isset($map['msg_type'])){
            $model->msgType = $map['msg_type'];
        }
        if(isset($map['text_content'])){
            $model->textContent = $map['text_content'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['dep_id_list'])){
            if(!empty($map['dep_id_list'])){
                $model->depIdList = $map['dep_id_list'];
            }
        }
        if(isset($map['is_preview'])){
            $model->isPreview = $map['is_preview'];
        }
        if(isset($map['msg_body'])){
            $model->msgBody = msgBody::fromMap($map['msg_body']);
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 消息卡片素材id
     * @var string
     */
    public $mediaId;

    /**
     * @description 是否群发给所有订阅者，true-是，false-否
     * @var bool
     */
    public $isToAll;

    /**
     * @description msg_type, 消息类型：text，文本类型，此时文本内容填在text_content字段中；news_card，消息卡片，此时的media_id通过消息卡片上传接口得到； image，图片，此时的media_id通过图片上传接口得到
     * @var string
     */
    public $msgType;

    /**
     * @description 文本内容，当msg_type为text时有效
     * @var string
     */
    public $textContent;

    /**
     * @description 调用时填写随机生成的UUID, 防止消息重复发送
     * @var string
     */
    public $uuid;

    /**
     * @description 接收者的用户userid列表
     * @var array
     */
    public $useridList;

    /**
     * @description 接收者的部门id列表，接收者是部门id下(包括子部门下)的所有用户
     * @var array
     */
    public $depIdList;

    /**
     * @description 是否预览推送
     * @var bool
     */
    public $isPreview;

    /**
     * @description 消息体
     * @var msgBody
     */
    public $msgBody;

}
