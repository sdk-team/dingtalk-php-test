<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiTrainingGroupinfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class groupInfoList extends Model {
    protected $_name = [
        'conversationId' => 'conversation_id',
        'memberCount' => 'member_count',
        'createAt' => 'create_at',
        'iconUrl' => 'icon_url',
        'title' => 'title',
        'inviteUrl' => 'invite_url',
        'status' => 'status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->createAt) {
            $res['create_at'] = $this->createAt;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->inviteUrl) {
            $res['invite_url'] = $this->inviteUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groupInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['create_at'])){
            $model->createAt = $map['create_at'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['invite_url'])){
            $model->inviteUrl = $map['invite_url'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var string
     */
    public $conversationId;

    /**
     * @description 群成员数
     * @var int
     */
    public $memberCount;

    /**
     * @description 群创建时间
     * @var int
     */
    public $createAt;

    /**
     * @description 群头像
     * @var string
     */
    public $iconUrl;

    /**
     * @description 群名称
     * @var string
     */
    public $title;

    /**
     * @description 邀请链接
     * @var string
     */
    public $inviteUrl;

    /**
     * @description 群状态：1、available（可用），2、dismiss(解散），3、full（已满）
     * @var string
     */
    public $status;

}
