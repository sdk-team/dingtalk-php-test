<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiWorkspaceProjectResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiWorkspaceProjectResponseBody\result\owner;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiWorkspaceProjectResponseBody\result\creator;

class result extends Model {
    protected $_name = [
        'owner' => 'owner',
        'creator' => 'creator',
        'createTime' => 'create_time',
        'corpId' => 'corp_id',
        'corpSecret' => 'corp_secret',
        'desc' => 'desc',
        'name' => 'name',
        'type' => 'type',
        'outerId' => 'outer_id',
        'logo' => 'logo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->owner) {
            $res['owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpSecret) {
            $res['corp_secret'] = $this->corpSecret;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->outerId) {
            $res['outer_id'] = $this->outerId;
        }
        if (null !== $this->logo) {
            $res['logo'] = $this->logo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['owner'])){
            $model->owner = owner::fromMap($map['owner']);
        }
        if(isset($map['creator'])){
            $model->creator = creator::fromMap($map['creator']);
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['corp_secret'])){
            $model->corpSecret = $map['corp_secret'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['outer_id'])){
            $model->outerId = $map['outer_id'];
        }
        if(isset($map['logo'])){
            $model->logo = $map['logo'];
        }
        return $model;
    }
    /**
     * @description 项目负责人，刚创建时负责人就是创建人
     * @var owner
     */
    public $owner;

    /**
     * @description 项目创建人
     * @var creator
     */
    public $creator;

    /**
     * @description 项目创建时间
     * @var int
     */
    public $createTime;

    /**
     * @description 组织id
     * @var string
     */
    public $corpId;

    /**
     * @description 只在创建组织时返回
     * @var string
     */
    public $corpSecret;

    /**
     * @description 组织描述
     * @var string
     */
    public $desc;

    /**
     * @description 组织名称
     * @var string
     */
    public $name;

    /**
     * @description 1项目 2圈子
     * @var int
     */
    public $type;

    /**
     * @description 支持传入外部业务id做系统关联
     * @var string
     */
    public $outerId;

    /**
     * @description 图标
     * @var string
     */
    public $logo;

}
