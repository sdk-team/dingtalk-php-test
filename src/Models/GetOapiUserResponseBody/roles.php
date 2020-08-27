<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiUserResponseBody;

use AlibabaCloud\Tea\Model;

class roles extends Model {
    protected $_name = [
        'id' => 'id',
        'name' => 'name',
        'groupName' => 'groupName',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return roles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['groupName'])){
            $model->groupName = $map['groupName'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description groupName
     * @var string
     */
    public $groupName;

    /**
     * @description type
     * @var int
     */
    public $type;

}
