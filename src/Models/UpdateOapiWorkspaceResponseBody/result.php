<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceResponseBody\result\creator;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceResponseBody\result\owner;

class result extends Model {
    protected $_name = [
        'createTime' => 'create_time',
        'creator' => 'creator',
        'desc' => 'desc',
        'name' => 'name',
        'outerId' => 'outer_id',
        'owner' => 'owner',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->owner) {
            $res['owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['creator'])){
            $model->creator = creator::fromMap($map['creator']);
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['owner'])){
            $model->owner = owner::fromMap($map['owner']);
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 创建时间
     * @var int
     */
    public $createTime;

    /**
     * @description 创建人
     * @var creator
     */
    public $creator;

    /**
     * @description 项目描述
     * @var string
     */
    public $desc;

    /**
     * @description 项目名
     * @var string
     */
    public $name;

    /**
     * @description 外部系统id
     * @var string
     */
    public $outerId;

    /**
     * @description 管理员（负责人）
     * @var owner
     */
    public $owner;

    /**
     * @description 1项目 2圈子
     * @var int
     */
    public $type;

}
