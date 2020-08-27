<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiMiniappPackageconfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'isDeleted' => 'is_deleted',
        'packageUrl' => 'package_url',
        'size' => 'size',
        'versionUniqueId' => 'version_unique_id',
        'appId' => 'app_id',
        'packageType' => 'package_type',
        'buildResultUrl' => 'build_result_url',
        'packagePath' => 'package_path',
        'fallbackUrl' => 'fallback_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->packageUrl) {
            $res['package_url'] = $this->packageUrl;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->versionUniqueId) {
            $res['version_unique_id'] = $this->versionUniqueId;
        }
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->packageType) {
            $res['package_type'] = $this->packageType;
        }
        if (null !== $this->buildResultUrl) {
            $res['build_result_url'] = $this->buildResultUrl;
        }
        if (null !== $this->packagePath) {
            $res['package_path'] = $this->packagePath;
        }
        if (null !== $this->fallbackUrl) {
            $res['fallback_url'] = $this->fallbackUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['package_url'])){
            $model->packageUrl = $map['package_url'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['version_unique_id'])){
            $model->versionUniqueId = $map['version_unique_id'];
        }
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['package_type'])){
            $model->packageType = $map['package_type'];
        }
        if(isset($map['build_result_url'])){
            $model->buildResultUrl = $map['build_result_url'];
        }
        if(isset($map['package_path'])){
            $model->packagePath = $map['package_path'];
        }
        if(isset($map['fallback_url'])){
            $model->fallbackUrl = $map['fallback_url'];
        }
        return $model;
    }
    /**
     * @description 是否删除
     * @var int
     */
    public $isDeleted;

    /**
     * @description 包地址
     * @var string
     */
    public $packageUrl;

    /**
     * @description 大小
     * @var int
     */
    public $size;

    /**
     * @description 版本ID
     * @var string
     */
    public $versionUniqueId;

    /**
     * @description appid
     * @var string
     */
    public $appId;

    /**
     * @description 包类型MAIN/SUB
     * @var string
     */
    public $packageType;

    /**
     * @description 构建结果url
     * @var string
     */
    public $buildResultUrl;

    /**
     * @description 包路径
     * @var string
     */
    public $packagePath;

    /**
     * @description fallback
     * @var string
     */
    public $fallbackUrl;

}
