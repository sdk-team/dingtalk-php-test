<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmObjectdataCustomerResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmObjectdataCustomerResponseBody\resultList\permission;

class resultList extends Model {
    protected $_name = [
        'creatorNick' => 'creator_nick',
        'gmtModified' => 'gmt_modified',
        'creatorUserid' => 'creator_userid',
        'instanceId' => 'instance_id',
        'data' => 'data',
        'extendData' => 'extend_data',
        'gmtCreate' => 'gmt_create',
        'objectType' => 'object_type',
        'permission' => 'permission',
        'procInstStatus' => 'proc_inst_status',
        'procOutResult' => 'proc_out_result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->creatorNick) {
            $res['creator_nick'] = $this->creatorNick;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->extendData) {
            $res['extend_data'] = $this->extendData;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->objectType) {
            $res['object_type'] = $this->objectType;
        }
        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->procInstStatus) {
            $res['proc_inst_status'] = $this->procInstStatus;
        }
        if (null !== $this->procOutResult) {
            $res['proc_out_result'] = $this->procOutResult;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['creator_nick'])){
            $model->creatorNick = $map['creator_nick'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['extend_data'])){
            $model->extendData = $map['extend_data'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['object_type'])){
            $model->objectType = $map['object_type'];
        }
        if(isset($map['permission'])){
            $model->permission = permission::fromMap($map['permission']);
        }
        if(isset($map['proc_inst_status'])){
            $model->procInstStatus = $map['proc_inst_status'];
        }
        if(isset($map['proc_out_result'])){
            $model->procOutResult = $map['proc_out_result'];
        }
        return $model;
    }
    /**
     * @description 记录创建人的昵称
     * @var string
     */
    public $creatorNick;

    /**
     * @description 记录修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 记录创建人的用户ID
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 数据ID
     * @var string
     */
    public $instanceId;

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
     * @description 记录创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 数据类型
     * @var string
     */
    public $objectType;

    /**
     * @description 数据权限信息
     * @var permission
     */
    public $permission;

    /**
     * @description 审批状态
     * @var string
     */
    public $procInstStatus;

    /**
     * @description 审批结果
     * @var string
     */
    public $procOutResult;

}
