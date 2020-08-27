<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCrmObjectdataCustomerParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCrmObjectdataCustomerParams\instance\permission;

class instance extends Model {
    protected $_name = [
        'data' => 'data',
        'extendData' => 'extend_data',
        'permission' => 'permission',
        'instanceId' => 'instance_id',
        'modifierUserid' => 'modifier_userid',
        'modifierNick' => 'modifier_nick',
    ];
    public function validate() {
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('modifierUserid', $this->modifierUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->extendData) {
            $res['extend_data'] = $this->extendData;
        }
        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->modifierUserid) {
            $res['modifier_userid'] = $this->modifierUserid;
        }
        if (null !== $this->modifierNick) {
            $res['modifier_nick'] = $this->modifierNick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return instance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['extend_data'])){
            $model->extendData = $map['extend_data'];
        }
        if(isset($map['permission'])){
            $model->permission = permission::fromMap($map['permission']);
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['modifier_userid'])){
            $model->modifierUserid = $map['modifier_userid'];
        }
        if(isset($map['modifier_nick'])){
            $model->modifierNick = $map['modifier_nick'];
        }
        return $model;
    }
    /**
     * @description 数据内容
     * @var string
     */
    public $data;

    /**
     * @description 扩展数据内容
     * @var string
     */
    public $extendData;

    /**
     * @description 权限
     * @var permission
     */
    public $permission;

    /**
     * @description 客户数据id
     * @var string
     */
    public $instanceId;

    /**
     * @description 修改的钉钉用户id
     * @var string
     */
    public $modifierUserid;

    /**
     * @description 修改的钉钉用户nick
     * @var string
     */
    public $modifierNick;

}
