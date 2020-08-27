<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiIndustryPackResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'id' => 'id',
        'packageName' => 'package_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->packageName) {
            $res['package_name'] = $this->packageName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['package_name'])){
            $model->packageName = $map['package_name'];
        }
        return $model;
    }
    /**
     * @description 课包ID
     * @var int
     */
    public $id;

    /**
     * @description 课包名称
     * @var string
     */
    public $packageName;

}
