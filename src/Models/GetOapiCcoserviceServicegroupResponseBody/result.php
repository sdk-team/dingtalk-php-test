<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCcoserviceServicegroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'title' => 'title',
        'ownerName' => 'owner_name',
        'ownerNick' => 'owner_nick',
        'ownerDingtalkId' => 'owner_dingtalk_id',
        'ownerUserid' => 'owner_userid',
        'type' => 'type',
        'conversationType' => 'conversation_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->ownerName) {
            $res['owner_name'] = $this->ownerName;
        }
        if (null !== $this->ownerNick) {
            $res['owner_nick'] = $this->ownerNick;
        }
        if (null !== $this->ownerDingtalkId) {
            $res['owner_dingtalk_id'] = $this->ownerDingtalkId;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->conversationType) {
            $res['conversation_type'] = $this->conversationType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['owner_name'])){
            $model->ownerName = $map['owner_name'];
        }
        if(isset($map['owner_nick'])){
            $model->ownerNick = $map['owner_nick'];
        }
        if(isset($map['owner_dingtalk_id'])){
            $model->ownerDingtalkId = $map['owner_dingtalk_id'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['conversation_type'])){
            $model->conversationType = $map['conversation_type'];
        }
        return $model;
    }
    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description ownerName
     * @var string
     */
    public $ownerName;

    /**
     * @description ownerNick
     * @var string
     */
    public $ownerNick;

    /**
     * @description ownerDingtalkId
     * @var string
     */
    public $ownerDingtalkId;

    /**
     * @description ownerUserid
     * @var string
     */
    public $ownerUserid;

    /**
     * @description type
     * @var int
     */
    public $type;

    /**
     * @description conversationType
     * @var int
     */
    public $conversationType;

}
