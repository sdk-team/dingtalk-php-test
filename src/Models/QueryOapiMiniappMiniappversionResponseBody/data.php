<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappMiniappversionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'gmtCreate' => 'gmt_create',
        'instId' => 'inst_id',
        'rollbackTime' => 'rollback_time',
        'auditFinishTime' => 'audit_finish_time',
        'id' => 'id',
        'expVersion' => 'exp_version',
        'description' => 'description',
        'grayStrategy' => 'gray_strategy',
        'templateExtra' => 'template_extra',
        'version' => 'version',
        'packageUrl' => 'package_url',
        'buildSource' => 'build_source',
        'pid' => 'pid',
        'status' => 'status',
        'appId' => 'appId',
        'subStatus' => 'sub_status',
        'extraInfo' => 'extra_info',
        'offlineTime' => 'offline_time',
        'shelfTime' => 'shelf_time',
        'grayStartTime' => 'gray_start_time',
        'auditSubmitTime' => 'audit_submit_time',
        'clientType' => 'client_type',
        'isDeleted' => 'is_deleted',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->instId) {
            $res['inst_id'] = $this->instId;
        }
        if (null !== $this->rollbackTime) {
            $res['rollback_time'] = $this->rollbackTime;
        }
        if (null !== $this->auditFinishTime) {
            $res['audit_finish_time'] = $this->auditFinishTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->expVersion) {
            $res['exp_version'] = $this->expVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->grayStrategy) {
            $res['gray_strategy'] = $this->grayStrategy;
        }
        if (null !== $this->templateExtra) {
            $res['template_extra'] = $this->templateExtra;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->packageUrl) {
            $res['package_url'] = $this->packageUrl;
        }
        if (null !== $this->buildSource) {
            $res['build_source'] = $this->buildSource;
        }
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->subStatus) {
            $res['sub_status'] = $this->subStatus;
        }
        if (null !== $this->extraInfo) {
            $res['extra_info'] = $this->extraInfo;
        }
        if (null !== $this->offlineTime) {
            $res['offline_time'] = $this->offlineTime;
        }
        if (null !== $this->shelfTime) {
            $res['shelf_time'] = $this->shelfTime;
        }
        if (null !== $this->grayStartTime) {
            $res['gray_start_time'] = $this->grayStartTime;
        }
        if (null !== $this->auditSubmitTime) {
            $res['audit_submit_time'] = $this->auditSubmitTime;
        }
        if (null !== $this->clientType) {
            $res['client_type'] = $this->clientType;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['inst_id'])){
            $model->instId = $map['inst_id'];
        }
        if(isset($map['rollback_time'])){
            $model->rollbackTime = $map['rollback_time'];
        }
        if(isset($map['audit_finish_time'])){
            $model->auditFinishTime = $map['audit_finish_time'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['exp_version'])){
            $model->expVersion = $map['exp_version'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['gray_strategy'])){
            $model->grayStrategy = $map['gray_strategy'];
        }
        if(isset($map['template_extra'])){
            $model->templateExtra = $map['template_extra'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['package_url'])){
            $model->packageUrl = $map['package_url'];
        }
        if(isset($map['build_source'])){
            $model->buildSource = $map['build_source'];
        }
        if(isset($map['pid'])){
            $model->pid = $map['pid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['appId'])){
            $model->appId = $map['appId'];
        }
        if(isset($map['sub_status'])){
            $model->subStatus = $map['sub_status'];
        }
        if(isset($map['extra_info'])){
            $model->extraInfo = $map['extra_info'];
        }
        if(isset($map['offline_time'])){
            $model->offlineTime = $map['offline_time'];
        }
        if(isset($map['shelf_time'])){
            $model->shelfTime = $map['shelf_time'];
        }
        if(isset($map['gray_start_time'])){
            $model->grayStartTime = $map['gray_start_time'];
        }
        if(isset($map['audit_submit_time'])){
            $model->auditSubmitTime = $map['audit_submit_time'];
        }
        if(isset($map['client_type'])){
            $model->clientType = $map['client_type'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        return $model;
    }
    /**
     * @description 更新时间
     * @var int
     */
    public $gmtModified;

    /**
     * @description 更新时间
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 租户ID
     * @var int
     */
    public $instId;

    /**
     * @description 回滚时间
     * @var int
     */
    public $rollbackTime;

    /**
     * @description 审核结束时间
     * @var int
     */
    public $auditFinishTime;

    /**
     * @description ID
     * @var int
     */
    public $id;

    /**
     * @description 过期版本
     * @var int
     */
    public $expVersion;

    /**
     * @description 描述
     * @var string
     */
    public $description;

    /**
     * @description 灰度策略
     * @var string
     */
    public $grayStrategy;

    /**
     * @description 模板拓展参数
     * @var string
     */
    public $templateExtra;

    /**
     * @description 版本
     * @var string
     */
    public $version;

    /**
     * @description 包地址
     * @var string
     */
    public $packageUrl;

    /**
     * @description 构建源
     * @var string
     */
    public $buildSource;

    /**
     * @description 商户ID
     * @var string
     */
    public $pid;

    /**
     * @description 状态
     * @var string
     */
    public $status;

    /**
     * @description 应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 子状态
     * @var string
     */
    public $subStatus;

    /**
     * @description 扩展信息
     * @var string
     */
    public $extraInfo;

    /**
     * @description 下线时间
     * @var int
     */
    public $offlineTime;

    /**
     * @description 上架时间
     * @var int
     */
    public $shelfTime;

    /**
     * @description 灰度开始时间
     * @var int
     */
    public $grayStartTime;

    /**
     * @description 审核提交时间
     * @var int
     */
    public $auditSubmitTime;

    /**
     * @description 客户端类型
     * @var int
     */
    public $clientType;

    /**
     * @description isDeleted
     * @var int
     */
    public $isDeleted;

}
