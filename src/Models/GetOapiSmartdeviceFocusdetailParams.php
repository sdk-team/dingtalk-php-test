<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiSmartdeviceFocusdetailParams extends Model {
    protected $_name = [
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiSmartdeviceFocusdetailParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 起始游标，从0开始
     * @var int
     */
    public $cursor;

    /**
     * @description 每页大小，1-100
     * @var int
     */
    public $size;

}
