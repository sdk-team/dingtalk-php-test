<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasGroupParams\request;

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
     * @description 群成员账号账号ID，类型由type字段决定
     * @var string
     */
    public $id;

    /**
     * @description 账号ID类型，当type=staff时，id填写staffid，当type=channelUser时，id字段填写channelUserId
     * @var string
     */
    public $type;

}
