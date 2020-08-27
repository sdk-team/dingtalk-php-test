<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappDeploypackageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'gmtCreate' => 'gmt_create',
        'instId' => 'inst_id',
        'id' => 'id',
        'appId' => 'app_id',
        'autoInstall' => 'auto_install',
        'preset' => 'preset',
        'desc' => 'desc',
        'iconUrl' => 'icon_url',
        'mainUrl' => 'main_url',
        'name' => 'name',
        'slogan' => 'slogan',
        'deployTime' => 'deploy_time',
        'packageId' => 'package_id',
        'online' => 'online',
        'grayTime' => 'gray_time',
        'prod' => 'prod',
        'windowId' => 'window_id',
        'isDeleted' => 'is_deleted',
        'gray' => 'gray',
        'fallbackBaseUrl' => 'fallback_base_url',
        'packageUrl' => 'package_url',
        'version' => 'version',
        'preTime' => 'pre_time',
        'rollbackFrom' => 'rollback_from',
        'pre' => 'pre',
        'size' => 'size',
        'clientId' => 'client_id',
        'grayCode' => 'gray_code',
        'englishName' => 'english_name',
        'extendInfo' => 'extend_info',
        'vhost' => 'vhost',
        'pluginUrl' => 'plugin_url',
        'pluginSize' => 'plugin_size',
        'pluginRefs' => 'plugin_refs',
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
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->autoInstall) {
            $res['auto_install'] = $this->autoInstall;
        }
        if (null !== $this->preset) {
            $res['preset'] = $this->preset;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->mainUrl) {
            $res['main_url'] = $this->mainUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->slogan) {
            $res['slogan'] = $this->slogan;
        }
        if (null !== $this->deployTime) {
            $res['deploy_time'] = $this->deployTime;
        }
        if (null !== $this->packageId) {
            $res['package_id'] = $this->packageId;
        }
        if (null !== $this->online) {
            $res['online'] = $this->online;
        }
        if (null !== $this->grayTime) {
            $res['gray_time'] = $this->grayTime;
        }
        if (null !== $this->prod) {
            $res['prod'] = $this->prod;
        }
        if (null !== $this->windowId) {
            $res['window_id'] = $this->windowId;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->gray) {
            $res['gray'] = $this->gray;
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
        if (null !== $this->preTime) {
            $res['pre_time'] = $this->preTime;
        }
        if (null !== $this->rollbackFrom) {
            $res['rollback_from'] = $this->rollbackFrom;
        }
        if (null !== $this->pre) {
            $res['pre'] = $this->pre;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->grayCode) {
            $res['gray_code'] = $this->grayCode;
        }
        if (null !== $this->englishName) {
            $res['english_name'] = $this->englishName;
        }
        if (null !== $this->extendInfo) {
            $res['extend_info'] = $this->extendInfo;
        }
        if (null !== $this->vhost) {
            $res['vhost'] = $this->vhost;
        }
        if (null !== $this->pluginUrl) {
            $res['plugin_url'] = $this->pluginUrl;
        }
        if (null !== $this->pluginSize) {
            $res['plugin_size'] = $this->pluginSize;
        }
        if (null !== $this->pluginRefs) {
            $res['plugin_refs'] = $this->pluginRefs;
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
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['auto_install'])){
            $model->autoInstall = $map['auto_install'];
        }
        if(isset($map['preset'])){
            $model->preset = $map['preset'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['main_url'])){
            $model->mainUrl = $map['main_url'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['slogan'])){
            $model->slogan = $map['slogan'];
        }
        if(isset($map['deploy_time'])){
            $model->deployTime = $map['deploy_time'];
        }
        if(isset($map['package_id'])){
            $model->packageId = $map['package_id'];
        }
        if(isset($map['online'])){
            $model->online = $map['online'];
        }
        if(isset($map['gray_time'])){
            $model->grayTime = $map['gray_time'];
        }
        if(isset($map['prod'])){
            $model->prod = $map['prod'];
        }
        if(isset($map['window_id'])){
            $model->windowId = $map['window_id'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['gray'])){
            $model->gray = $map['gray'];
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
        if(isset($map['pre_time'])){
            $model->preTime = $map['pre_time'];
        }
        if(isset($map['rollback_from'])){
            $model->rollbackFrom = $map['rollback_from'];
        }
        if(isset($map['pre'])){
            $model->pre = $map['pre'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['client_id'])){
            $model->clientId = $map['client_id'];
        }
        if(isset($map['gray_code'])){
            $model->grayCode = $map['gray_code'];
        }
        if(isset($map['english_name'])){
            $model->englishName = $map['english_name'];
        }
        if(isset($map['extend_info'])){
            $model->extendInfo = $map['extend_info'];
        }
        if(isset($map['vhost'])){
            $model->vhost = $map['vhost'];
        }
        if(isset($map['plugin_url'])){
            $model->pluginUrl = $map['plugin_url'];
        }
        if(isset($map['plugin_size'])){
            $model->pluginSize = $map['plugin_size'];
        }
        if(isset($map['plugin_refs'])){
            $model->pluginRefs = $map['plugin_refs'];
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
     * @description 应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 自动装载
     * @var int
     */
    public $autoInstall;

    /**
     * @description 预装载
     * @var int
     */
    public $preset;

    /**
     * @description 描述
     * @var string
     */
    public $desc;

    /**
     * @description 图标
     * @var string
     */
    public $iconUrl;

    /**
     * @description 主URL
     * @var string
     */
    public $mainUrl;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 标语
     * @var string
     */
    public $slogan;

    /**
     * @description 部署时间
     * @var int
     */
    public $deployTime;

    /**
     * @description 包ID
     * @var int
     */
    public $packageId;

    /**
     * @description 在线
     * @var int
     */
    public $online;

    /**
     * @description 灰度时间
     * @var int
     */
    public $grayTime;

    /**
     * @description 上线状态
     * @var int
     */
    public $prod;

    /**
     * @description 发布窗口ID
     * @var int
     */
    public $windowId;

    /**
     * @description 是否删除
     * @var int
     */
    public $isDeleted;

    /**
     * @description 灰度
     * @var int
     */
    public $gray;

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
     * @description 预发布时间
     * @var int
     */
    public $preTime;

    /**
     * @description 回滚自哪个部署包
     * @var int
     */
    public $rollbackFrom;

    /**
     * @description 预发状态
     * @var int
     */
    public $pre;

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
     * @description 灰度码
     * @var string
     */
    public $grayCode;

    /**
     * @description 英文名
     * @var string
     */
    public $englishName;

    /**
     * @description 扩展信息
     * @var string
     */
    public $extendInfo;

    /**
     * @description vhost
     * @var string
     */
    public $vhost;

    /**
     * @description 插件 url
     * @var string
     */
    public $pluginUrl;

    /**
     * @description 插件大小
     * @var int
     */
    public $pluginSize;

    /**
     * @description 插件映射
     * @var string
     */
    public $pluginRefs;

}
