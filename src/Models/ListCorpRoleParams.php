<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListCorpRoleParams extends Model {
    protected $_name = [
        'size' => 'size',
        'offset' => 'offset',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListCorpRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        return $model;
    }
    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description 分页偏移
     * @var int
     */
    public $offset;

}
