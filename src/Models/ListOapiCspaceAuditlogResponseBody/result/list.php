<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCspaceAuditlogResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'operateModule' => 'operate_module',
        'operateModuleView' => 'operate_module_view',
        'bizId' => 'biz_id',
        'operatorName' => 'operator_name',
        'platform' => 'platform',
        'platformView' => 'platform_view',
        'status' => 'status',
        'action' => 'action',
        'actionView' => 'action_view',
        'resource' => 'resource',
        'gmtCreate' => 'gmt_create',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->operateModule) {
            $res['operate_module'] = $this->operateModule;
        }
        if (null !== $this->operateModuleView) {
            $res['operate_module_view'] = $this->operateModuleView;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->operatorName) {
            $res['operator_name'] = $this->operatorName;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->platformView) {
            $res['platform_view'] = $this->platformView;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->actionView) {
            $res['action_view'] = $this->actionView;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['operate_module'])){
            $model->operateModule = $map['operate_module'];
        }
        if(isset($map['operate_module_view'])){
            $model->operateModuleView = $map['operate_module_view'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['operator_name'])){
            $model->operatorName = $map['operator_name'];
        }
        if(isset($map['platform'])){
            $model->platform = $map['platform'];
        }
        if(isset($map['platform_view'])){
            $model->platformView = $map['platform_view'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['action'])){
            $model->action = $map['action'];
        }
        if(isset($map['action_view'])){
            $model->actionView = $map['action_view'];
        }
        if(isset($map['resource'])){
            $model->resource = $map['resource'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 记录修改时间，unix时间戳，单位ms
     * @var int
     */
    public $gmtModified;

    /**
     * @description 操作来源空间
     * @var int
     */
    public $operateModule;

    /**
     * @description 操作来源翻译值
     * @var string
     */
    public $operateModuleView;

    /**
     * @description 文件id
     * @var string
     */
    public $bizId;

    /**
     * @description 用户名字
     * @var string
     */
    public $operatorName;

    /**
     * @description 操作端
     * @var int
     */
    public $platform;

    /**
     * @description 操作端翻译值
     * @var string
     */
    public $platformView;

    /**
     * @description 记录状态
     * @var int
     */
    public $status;

    /**
     * @description 操作类型
     * @var int
     */
    public $action;

    /**
     * @description 操作类型翻译值
     * @var string
     */
    public $actionView;

    /**
     * @description 文件名
     * @var string
     */
    public $resource;

    /**
     * @description 记录生成时间，unix时间戳，单位ms
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 员工的userId
     * @var string
     */
    public $userid;

}
