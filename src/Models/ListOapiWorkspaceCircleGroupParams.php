<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiWorkspaceCircleGroupParams extends Model {
    protected $_name = [
        'size' => 'size',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiWorkspaceCircleGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        return $model;
    }
    /**
     * @description 取多少条数据，取值范围[1,20]
     * @var int
     */
    public $size;

    /**
     * @description 分页的游标，第一页传0
     * @var int
     */
    public $cursor;

}
