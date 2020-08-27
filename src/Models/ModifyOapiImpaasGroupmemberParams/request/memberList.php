<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiImpaasGroupmemberParams\request;

use AlibabaCloud\Tea\Model;

class memberList extends Model {
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return memberList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 待操作成员id，ID类型由type字段确定。当type为“staff”时，本字段填写staffid，当type为“channelUser”时，本字段填写channelUserId。
     * @var string
     */
    public $id;

    /**
     * @description 代操作成员ID类型，目前支持“staff” “channelUser”两种类型
     * @var string
     */
    public $type;

}
