<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetsimplegroupsOapiAttendanceParams extends Model {
    protected $_name = [
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetsimplegroupsOapiAttendanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 偏移位置
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最大10
     * @var int
     */
    public $size;

}
