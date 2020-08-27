<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetclassOapiAttendanceTestParams extends Model {
    protected $_name = [
        'classId' => 'classId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['classId'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetclassOapiAttendanceTestParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['classId'])){
            $model->classId = $map['classId'];
        }
        return $model;
    }
    /**
     * @description 班次
     * @var int
     */
    public $classId;

}
