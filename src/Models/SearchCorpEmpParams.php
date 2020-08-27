<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SearchCorpEmpParams extends Model {
    protected $_name = [
        'keyword' => 'keyword',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
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
     * @return SearchCorpEmpParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['keyword'])){
            $model->keyword = $map['keyword'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 搜索关键字
     * @var string
     */
    public $keyword;

    /**
     * @description 偏移量
     * @var int
     */
    public $offset;

    /**
     * @description 请求数量
     * @var int
     */
    public $size;

}
