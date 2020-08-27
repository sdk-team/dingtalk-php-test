<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnionexportOapiSmartworkHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'permissionStrategy' => 'permission_strategy',
        'expireStrategy' => 'expire_strategy',
        'mediaId' => 'media_id',
        'bizUniqueId' => 'biz_unique_id',
        'userid' => 'userid',
        'fileName' => 'file_name',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('bizUniqueId', $this->bizUniqueId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('fileName', $this->fileName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->permissionStrategy) {
            $res['permission_strategy'] = $this->permissionStrategy;
        }
        if (null !== $this->expireStrategy) {
            $res['expire_strategy'] = $this->expireStrategy;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->bizUniqueId) {
            $res['biz_unique_id'] = $this->bizUniqueId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['permission_strategy'])){
            $model->permissionStrategy = $map['permission_strategy'];
        }
        if(isset($map['expire_strategy'])){
            $model->expireStrategy = $map['expire_strategy'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['biz_unique_id'])){
            $model->bizUniqueId = $map['biz_unique_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['file_name'])){
            $model->fileName = $map['file_name'];
        }
        return $model;
    }
    /**
     * @description 权限策略(0谁发起谁下载)
     * @var int
     */
    public $permissionStrategy;

    /**
     * @description 失效策略(0上传后10分钟失效，1下载一次后失效)
     * @var int
     */
    public $expireStrategy;

    /**
     * @description top上传文件后的mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description 业务唯一id，用于唯一标记一次导出，该参数多次请求幂等处理
     * @var string
     */
    public $bizUniqueId;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 文件名
     * @var string
     */
    public $fileName;

}
