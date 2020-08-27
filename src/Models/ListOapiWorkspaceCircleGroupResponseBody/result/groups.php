<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiWorkspaceCircleGroupResponseBody\result;

use AlibabaCloud\Tea\Model;

class groups extends Model {
    protected $_name = [
        'memberLimit' => 'member_limit',
        'memberCount' => 'member_count',
        'avatarMediaId' => 'avatar_media_id',
        'name' => 'name',
        'conversationId' => 'conversation_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->memberLimit) {
            $res['member_limit'] = $this->memberLimit;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->avatarMediaId) {
            $res['avatar_media_id'] = $this->avatarMediaId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['member_limit'])){
            $model->memberLimit = $map['member_limit'];
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['avatar_media_id'])){
            $model->avatarMediaId = $map['avatar_media_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        return $model;
    }
    /**
     * @description 群人数上限
     * @var int
     */
    public $memberLimit;

    /**
     * @description 当前人数
     * @var int
     */
    public $memberCount;

    /**
     * @description 群头像mediaId，需要再调用开放平台官网提供的接口转成http地址
     * @var string
     */
    public $avatarMediaId;

    /**
     * @description 群名称
     * @var string
     */
    public $name;

    /**
     * @description 群id
     * @var string
     */
    public $conversationId;

}
