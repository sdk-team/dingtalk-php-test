<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiInactiveUserParams extends Model {
    protected $_name = [
        'queryDate' => 'query_date',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('queryDate', $this->queryDate, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->queryDate) {
            $res['query_date'] = $this->queryDate;
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
     * @return GetOapiInactiveUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query_date'])){
            $model->queryDate = $map['query_date'];
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
     * @description 查询日期
     * @var string
     */
    public $queryDate;

    /**
     * @description 获取数据偏移量，从0开始
     * @var int
     */
    public $offset;

    /**
     * @description 获取数据size,最大100
     * @var int
     */
    public $size;

}
