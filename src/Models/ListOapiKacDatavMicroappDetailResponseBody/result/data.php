<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavMicroappDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'microAppName' => 'micro_app_name',
        'microAppType' => 'micro_app_type',
        'microAppUserCount' => 'micro_app_user_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->microAppName) {
            $res['micro_app_name'] = $this->microAppName;
        }
        if (null !== $this->microAppType) {
            $res['micro_app_type'] = $this->microAppType;
        }
        if (null !== $this->microAppUserCount) {
            $res['micro_app_user_count'] = $this->microAppUserCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['micro_app_name'])){
            $model->microAppName = $map['micro_app_name'];
        }
        if(isset($map['micro_app_type'])){
            $model->microAppType = $map['micro_app_type'];
        }
        if(isset($map['micro_app_user_count'])){
            $model->microAppUserCount = $map['micro_app_user_count'];
        }
        return $model;
    }
    /**
     * @description 微应用名
     * @var string
     */
    public $microAppName;

    /**
     * @description 微应用类型
     * @var int
     */
    public $microAppType;

    /**
     * @description 访问用户数
     * @var int
     */
    public $microAppUserCount;

}
