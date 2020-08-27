<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiDdpaasObjectdataResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiDdpaasObjectdataResponseBody\result\values\permission;

class values extends Model {
    protected $_name = [
        'creatorNick' => 'creator_nick',
        'gmtModified' => 'gmt_modified',
        'creatorUserid' => 'creator_userid',
        'instanceId' => 'instance_id',
        'data' => 'data',
        'extendData' => 'extend_data',
        'gmtCreate' => 'gmt_create',
        'permission' => 'permission',
        'procOutResult' => 'proc_out_result',
        'procInstStatus' => 'proc_inst_status',
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
        if (null !== $this->permission) {
            $res['permission'] = null !== $this->permission ? $this->permission->toMap() : null;
        }
        if (null !== $this->procOutResult) {
            $res['proc_out_result'] = $this->procOutResult;
        }
        if (null !== $this->procInstStatus) {
            $res['proc_inst_status'] = $this->procInstStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return values
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
        if(isset($map['permission'])){
            $model->permission = permission::fromMap($map['permission']);
        }
        if(isset($map['proc_out_result'])){
            $model->procOutResult = $map['proc_out_result'];
        }
        if(isset($map['proc_inst_status'])){
            $model->procInstStatus = $map['proc_inst_status'];
        }
        return $model;
    }
    /**
     * @description 创建记录的用户昵称
     * @var string
     */
    public $creatorNick;

    /**
     * @description 记录修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 创建记录的用户ID
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
     * @description 数据权限信息
     * @var permission
     */
    public $permission;

    /**
     * @description 审批结果
     * @var string
     */
    public $procOutResult;

    /**
     * @description 审批状态
     * @var string
     */
    public $procInstStatus;

}
