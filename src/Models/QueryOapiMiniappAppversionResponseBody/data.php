<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappAppversionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'gmtCreate' => 'gmt_create',
        'instId' => 'inst_id',
        'id' => 'id',
        'mainUrl' => 'main_url',
        'isDeleted' => 'is_deleted',
        'fallbackBaseUrl' => 'fallback_base_url',
        'packageUrl' => 'package_url',
        'version' => 'version',
        'size' => 'size',
        'clientId' => 'client_id',
        'extendInfo' => 'extend_info',
        'buildType' => 'build_type',
        'qcloudStatus' => 'qcloud_status',
        'mosecStatus' => 'mosec_status',
        'templateId' => 'template_id',
        'extJsonConfig' => 'ext_json_config',
        'sourceUrl' => 'source_url',
        'qcloudJobId' => 'qcloud_job_id',
        'tinyCliVersion' => 'tiny_cli_version',
        'templateVersion' => 'template_version',
        'versionUniqueId' => 'version_unique_id',
        'extra' => 'extra',
        'extJsonConfigUrl' => 'ext_json_config_url',
        'buildTaskNo' => 'build_task_no',
        'templateAppId' => 'template_app_id',
        'mosecJobId' => 'mosec_job_id',
        'md5' => 'md5',
        'pluginSize' => 'plugin_size',
        'pluginRefs' => 'plugin_refs',
        'inheritConfig' => 'inherit_config',
        'pluginUrl' => 'plugin_url',
        'appId' => 'app_id',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->mainUrl) {
            $res['main_url'] = $this->mainUrl;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->fallbackBaseUrl) {
            $res['fallback_base_url'] = $this->fallbackBaseUrl;
        }
        if (null !== $this->packageUrl) {
            $res['package_url'] = $this->packageUrl;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->extendInfo) {
            $res['extend_info'] = $this->extendInfo;
        }
        if (null !== $this->buildType) {
            $res['build_type'] = $this->buildType;
        }
        if (null !== $this->qcloudStatus) {
            $res['qcloud_status'] = $this->qcloudStatus;
        }
        if (null !== $this->mosecStatus) {
            $res['mosec_status'] = $this->mosecStatus;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->extJsonConfig) {
            $res['ext_json_config'] = $this->extJsonConfig;
        }
        if (null !== $this->sourceUrl) {
            $res['source_url'] = $this->sourceUrl;
        }
        if (null !== $this->qcloudJobId) {
            $res['qcloud_job_id'] = $this->qcloudJobId;
        }
        if (null !== $this->tinyCliVersion) {
            $res['tiny_cli_version'] = $this->tinyCliVersion;
        }
        if (null !== $this->templateVersion) {
            $res['template_version'] = $this->templateVersion;
        }
        if (null !== $this->versionUniqueId) {
            $res['version_unique_id'] = $this->versionUniqueId;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->extJsonConfigUrl) {
            $res['ext_json_config_url'] = $this->extJsonConfigUrl;
        }
        if (null !== $this->buildTaskNo) {
            $res['build_task_no'] = $this->buildTaskNo;
        }
        if (null !== $this->templateAppId) {
            $res['template_app_id'] = $this->templateAppId;
        }
        if (null !== $this->mosecJobId) {
            $res['mosec_job_id'] = $this->mosecJobId;
        }
        if (null !== $this->md5) {
            $res['md5'] = $this->md5;
        }
        if (null !== $this->pluginSize) {
            $res['plugin_size'] = $this->pluginSize;
        }
        if (null !== $this->pluginRefs) {
            $res['plugin_refs'] = $this->pluginRefs;
        }
        if (null !== $this->inheritConfig) {
            $res['inherit_config'] = $this->inheritConfig;
        }
        if (null !== $this->pluginUrl) {
            $res['plugin_url'] = $this->pluginUrl;
        }
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
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
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['main_url'])){
            $model->mainUrl = $map['main_url'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['fallback_base_url'])){
            $model->fallbackBaseUrl = $map['fallback_base_url'];
        }
        if(isset($map['package_url'])){
            $model->packageUrl = $map['package_url'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['client_id'])){
            $model->clientId = $map['client_id'];
        }
        if(isset($map['extend_info'])){
            $model->extendInfo = $map['extend_info'];
        }
        if(isset($map['build_type'])){
            $model->buildType = $map['build_type'];
        }
        if(isset($map['qcloud_status'])){
            $model->qcloudStatus = $map['qcloud_status'];
        }
        if(isset($map['mosec_status'])){
            $model->mosecStatus = $map['mosec_status'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['ext_json_config'])){
            $model->extJsonConfig = $map['ext_json_config'];
        }
        if(isset($map['source_url'])){
            $model->sourceUrl = $map['source_url'];
        }
        if(isset($map['qcloud_job_id'])){
            $model->qcloudJobId = $map['qcloud_job_id'];
        }
        if(isset($map['tiny_cli_version'])){
            $model->tinyCliVersion = $map['tiny_cli_version'];
        }
        if(isset($map['template_version'])){
            $model->templateVersion = $map['template_version'];
        }
        if(isset($map['version_unique_id'])){
            $model->versionUniqueId = $map['version_unique_id'];
        }
        if(isset($map['extra'])){
            $model->extra = $map['extra'];
        }
        if(isset($map['ext_json_config_url'])){
            $model->extJsonConfigUrl = $map['ext_json_config_url'];
        }
        if(isset($map['build_task_no'])){
            $model->buildTaskNo = $map['build_task_no'];
        }
        if(isset($map['template_app_id'])){
            $model->templateAppId = $map['template_app_id'];
        }
        if(isset($map['mosec_job_id'])){
            $model->mosecJobId = $map['mosec_job_id'];
        }
        if(isset($map['md5'])){
            $model->md5 = $map['md5'];
        }
        if(isset($map['plugin_size'])){
            $model->pluginSize = $map['plugin_size'];
        }
        if(isset($map['plugin_refs'])){
            $model->pluginRefs = $map['plugin_refs'];
        }
        if(isset($map['inherit_config'])){
            $model->inheritConfig = $map['inherit_config'];
        }
        if(isset($map['plugin_url'])){
            $model->pluginUrl = $map['plugin_url'];
        }
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
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
     * @description ID
     * @var int
     */
    public $id;

    /**
     * @description 主URL
     * @var string
     */
    public $mainUrl;

    /**
     * @description 是否删除
     * @var int
     */
    public $isDeleted;

    /**
     * @description fallbackBaseUrl
     * @var string
     */
    public $fallbackBaseUrl;

    /**
     * @description 包地址
     * @var string
     */
    public $packageUrl;

    /**
     * @description 版本
     * @var string
     */
    public $version;

    /**
     * @description 大小
     * @var int
     */
    public $size;

    /**
     * @description 客户端
     * @var int
     */
    public $clientId;

    /**
     * @description 扩展信息
     * @var string
     */
    public $extendInfo;

    /**
     * @description 构建类型
     * @var int
     */
    public $buildType;

    /**
     * @description 构建任务状态
     * @var int
     */
    public $qcloudStatus;

    /**
     * @description 猫爪扫描任务状态
     * @var int
     */
    public $mosecStatus;

    /**
     * @description 模板ID
     * @var int
     */
    public $templateId;

    /**
     * @description 模板实例化小程序的扩展数据
     * @var string
     */
    public $extJsonConfig;

    /**
     * @description 源URL
     * @var string
     */
    public $sourceUrl;

    /**
     * @description 构建任务ID
     * @var string
     */
    public $qcloudJobId;

    /**
     * @description tinyCliVersion
     * @var string
     */
    public $tinyCliVersion;

    /**
     * @description 模板版本
     * @var string
     */
    public $templateVersion;

    /**
     * @description 版本ID
     * @var string
     */
    public $versionUniqueId;

    /**
     * @description 扩展
     * @var string
     */
    public $extra;

    /**
     * @description 模板实例化小程序的扩展数据url
     * @var string
     */
    public $extJsonConfigUrl;

    /**
     * @description 构建任务ID
     * @var string
     */
    public $buildTaskNo;

    /**
     * @description 模板应用ID
     * @var string
     */
    public $templateAppId;

    /**
     * @description 猫爪任务ID
     * @var string
     */
    public $mosecJobId;

    /**
     * @description MD5
     * @var string
     */
    public $md5;

    /**
     * @description 插件大小
     * @var int
     */
    public $pluginSize;

    /**
     * @description 插件关联
     * @var string
     */
    public $pluginRefs;

    /**
     * @description 未知
     * @var string
     */
    public $inheritConfig;

    /**
     * @description 插件url
     * @var string
     */
    public $pluginUrl;

    /**
     * @description appid
     * @var string
     */
    public $appId;

}
