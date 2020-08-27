<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiImpaasConversationParams extends Model {
    protected $_name = [
        'channel' => 'channel',
        'ownerUserid' => 'owner_userid',
        'useridList' => 'userid_list',
        'name' => 'name',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('ownerUserid', $this->ownerUserid, true);
        Model::validateRequired('useridList', $this->useridList, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiImpaasConversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 渠道
     * @var string
     */
    public $channel;

    /**
     * @description 群主员工id
     * @var string
     */
    public $ownerUserid;

    /**
     * @description 成员员工id列表
     * @var array
     */
    public $useridList;

    /**
     * @description 群名称
     * @var string
     */
    public $name;

}
