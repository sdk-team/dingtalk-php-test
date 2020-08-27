<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProjectInviteShareurlParams;

use AlibabaCloud\Tea\Model;

class inviteInfo extends Model {
    protected $_name = [
        'expireSeconds' => 'expire_seconds',
        'userid' => 'userid',
        'sceneId' => 'scene_id',
        'redirect' => 'redirect',
        'termType' => 'term_type',
        'chatId' => 'chat_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->expireSeconds) {
            $res['expire_seconds'] = $this->expireSeconds;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->sceneId) {
            $res['scene_id'] = $this->sceneId;
        }
        if (null !== $this->redirect) {
            $res['redirect'] = $this->redirect;
        }
        if (null !== $this->termType) {
            $res['term_type'] = $this->termType;
        }
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return inviteInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['expire_seconds'])){
            $model->expireSeconds = $map['expire_seconds'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['scene_id'])){
            $model->sceneId = $map['scene_id'];
        }
        if(isset($map['redirect'])){
            $model->redirect = $map['redirect'];
        }
        if(isset($map['term_type'])){
            $model->termType = $map['term_type'];
        }
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        return $model;
    }
    /**
     * @description 该分享链接有效时间，以秒为单位。 最大不超过7776000（即90天），此字段如果不填，则默认有效期为30秒。
     * @var int
     */
    public $expireSeconds;

    /**
     * @description 邀请人的员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 场景标志，用于区分活动场景
     * @var string
     */
    public $sceneId;

    /**
     * @description 活动生效后的承接页面标志
     * @var string
     */
    public $redirect;

    /**
     * @description 期限类型：SHORT短期（默认），LONG长期（最多10万个数量限制）
     * @var string
     */
    public $termType;

    /**
     * @description 圈子里关联的某个群ID
     * @var string
     */
    public $chatId;

}
