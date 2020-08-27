<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappAppinfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'gmtCreate' => 'gmt_create',
        'instId' => 'inst_id',
        'id' => 'id',
        'status' => 'status',
        'appId' => 'app_id',
        'appChannel' => 'app_channel',
        'appType' => 'app_type',
        'autoInstall' => 'auto_install',
        'clientId' => 'client_id',
        'origin' => 'origin',
        'preset' => 'preset',
        'size' => 'size',
        'subType' => 'sub_type',
        'appKey' => 'app_key',
        'desc' => 'desc',
        'devId' => 'dev_id',
        'englishName' => 'english_name',
        'iconUrl' => 'icon_url',
        'lastDiscards' => 'last_discards',
        'mainUrl' => 'main_url',
        'name' => 'name',
        'slogan' => 'slogan',
        'vHost' => 'v_host',
        'isDeleted' => 'is_deleted',
        'inheritConfig' => 'inherit_config',
        'alias' => 'alias',
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->appChannel) {
            $res['app_channel'] = $this->appChannel;
        }
        if (null !== $this->appType) {
            $res['app_type'] = $this->appType;
        }
        if (null !== $this->autoInstall) {
            $res['auto_install'] = $this->autoInstall;
        }
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->preset) {
            $res['preset'] = $this->preset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }
        if (null !== $this->appKey) {
            $res['app_key'] = $this->appKey;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->devId) {
            $res['dev_id'] = $this->devId;
        }
        if (null !== $this->englishName) {
            $res['english_name'] = $this->englishName;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->lastDiscards) {
            $res['last_discards'] = $this->lastDiscards;
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
        if (null !== $this->vHost) {
            $res['v_host'] = $this->vHost;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->inheritConfig) {
            $res['inherit_config'] = $this->inheritConfig;
        }
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
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
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['app_channel'])){
            $model->appChannel = $map['app_channel'];
        }
        if(isset($map['app_type'])){
            $model->appType = $map['app_type'];
        }
        if(isset($map['auto_install'])){
            $model->autoInstall = $map['auto_install'];
        }
        if(isset($map['client_id'])){
            $model->clientId = $map['client_id'];
        }
        if(isset($map['origin'])){
            $model->origin = $map['origin'];
        }
        if(isset($map['preset'])){
            $model->preset = $map['preset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['sub_type'])){
            $model->subType = $map['sub_type'];
        }
        if(isset($map['app_key'])){
            $model->appKey = $map['app_key'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['dev_id'])){
            $model->devId = $map['dev_id'];
        }
        if(isset($map['english_name'])){
            $model->englishName = $map['english_name'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['last_discards'])){
            $model->lastDiscards = $map['last_discards'];
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
        if(isset($map['v_host'])){
            $model->vHost = $map['v_host'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['inherit_config'])){
            $model->inheritConfig = $map['inherit_config'];
        }
        if(isset($map['alias'])){
            $model->alias = $map['alias'];
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
     * @description 状态
     * @var int
     */
    public $status;

    /**
     * @description 应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 应用通道
     * @var int
     */
    public $appChannel;

    /**
     * @description 应用类型
     * @var int
     */
    public $appType;

    /**
     * @description 自动装载
     * @var int
     */
    public $autoInstall;

    /**
     * @description 客户端
     * @var int
     */
    public $clientId;

    /**
     * @description 来源
     * @var int
     */
    public $origin;

    /**
     * @description 预装载
     * @var int
     */
    public $preset;

    /**
     * @description 大小
     * @var int
     */
    public $size;

    /**
     * @description 子类型
     * @var int
     */
    public $subType;

    /**
     * @description 应用key
     * @var string
     */
    public $appKey;

    /**
     * @description 描述
     * @var string
     */
    public $desc;

    /**
     * @description 设备ID
     * @var string
     */
    public $devId;

    /**
     * @description 英文名称
     * @var string
     */
    public $englishName;

    /**
     * @description 图标
     * @var string
     */
    public $iconUrl;

    /**
     * @description lastDiscards
     * @var string
     */
    public $lastDiscards;

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
     * @description vhost
     * @var string
     */
    public $vHost;

    /**
     * @description isDeleted
     * @var int
     */
    public $isDeleted;

    /**
     * @description inheritConfig
     * @var string
     */
    public $inheritConfig;

    /**
     * @description alias
     * @var string
     */
    public $alias;

}
