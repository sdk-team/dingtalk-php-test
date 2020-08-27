<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo;

use AlibabaCloud\Tea\Model;

class tag extends Model {
    protected $_name = [
        'name' => 'name',
        'tagId' => 'tag_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tagId) {
            $res['tag_id'] = $this->tagId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['tag_id'])){
            $model->tagId = $map['tag_id'];
        }
        return $model;
    }
    /**
     * @description 角色名称
     * @var string
     */
    public $name;

    /**
     * @description 角色id
     * @var int
     */
    public $tagId;

}
