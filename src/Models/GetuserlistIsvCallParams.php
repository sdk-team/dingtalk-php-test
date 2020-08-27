<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuserlistIsvCallParams extends Model {
    protected $_name = [
        'start' => 'start',
        'offset' => 'offset',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuserlistIsvCallParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start'])){
            $model->start = $map['start'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        return $model;
    }
    /**
     * @description 游标开始值
     * @var int
     */
    public $start;

    /**
     * @description 批量值
     * @var int
     */
    public $offset;

}
