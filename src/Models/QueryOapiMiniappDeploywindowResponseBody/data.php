<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappDeploywindowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'gmtCreate' => 'gmt_create',
        'instId' => 'inst_id',
        'id' => 'id',
        'version' => 'version',
        'clientId' => 'client_id',
        'platformIos' => 'platform_ios',
        'deployPackageId' => 'deploy_package_id',
        'platformAndroid' => 'platform_android',
        'androidInstanceId' => 'android_instance_id',
        'iosInstanceId' => 'ios_instance_id',
        'iosClientMax' => 'ios_client_max',
        'androidClientMin' => 'android_client_min',
        'androidClientMax' => 'android_client_max',
        'name' => 'name',
        'iosClientMin' => 'ios_client_min',
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
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->platformIos) {
            $res['platform_ios'] = $this->platformIos;
        }
        if (null !== $this->deployPackageId) {
            $res['deploy_package_id'] = $this->deployPackageId;
        }
        if (null !== $this->platformAndroid) {
            $res['platform_android'] = $this->platformAndroid;
        }
        if (null !== $this->androidInstanceId) {
            $res['android_instance_id'] = $this->androidInstanceId;
        }
        if (null !== $this->iosInstanceId) {
            $res['ios_instance_id'] = $this->iosInstanceId;
        }
        if (null !== $this->iosClientMax) {
            $res['ios_client_max'] = $this->iosClientMax;
        }
        if (null !== $this->androidClientMin) {
            $res['android_client_min'] = $this->androidClientMin;
        }
        if (null !== $this->androidClientMax) {
            $res['android_client_max'] = $this->androidClientMax;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->iosClientMin) {
            $res['ios_client_min'] = $this->iosClientMin;
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
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['client_id'])){
            $model->clientId = $map['client_id'];
        }
        if(isset($map['platform_ios'])){
            $model->platformIos = $map['platform_ios'];
        }
        if(isset($map['deploy_package_id'])){
            $model->deployPackageId = $map['deploy_package_id'];
        }
        if(isset($map['platform_android'])){
            $model->platformAndroid = $map['platform_android'];
        }
        if(isset($map['android_instance_id'])){
            $model->androidInstanceId = $map['android_instance_id'];
        }
        if(isset($map['ios_instance_id'])){
            $model->iosInstanceId = $map['ios_instance_id'];
        }
        if(isset($map['ios_client_max'])){
            $model->iosClientMax = $map['ios_client_max'];
        }
        if(isset($map['android_client_min'])){
            $model->androidClientMin = $map['android_client_min'];
        }
        if(isset($map['android_client_max'])){
            $model->androidClientMax = $map['android_client_max'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['ios_client_min'])){
            $model->iosClientMin = $map['ios_client_min'];
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
     * @description 版本
     * @var string
     */
    public $version;

    /**
     * @description 客户端
     * @var int
     */
    public $clientId;

    /**
     * @description ios平台
     * @var int
     */
    public $platformIos;

    /**
     * @description 包ID
     * @var int
     */
    public $deployPackageId;

    /**
     * @description 安卓平台
     * @var int
     */
    public $platformAndroid;

    /**
     * @description 安卓实例ID
     * @var int
     */
    public $androidInstanceId;

    /**
     * @description IOS实例ID
     * @var int
     */
    public $iosInstanceId;

    /**
     * @description IOS客户端最大版本
     * @var string
     */
    public $iosClientMax;

    /**
     * @description 安卓最小版本
     * @var string
     */
    public $androidClientMin;

    /**
     * @description 安卓最大版本
     * @var string
     */
    public $androidClientMax;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description IOS客户端最小版本
     * @var string
     */
    public $iosClientMin;

    /**
     * @description 应用ID
     * @var string
     */
    public $appId;

}
