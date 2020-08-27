<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BaseinfoCorpSearchCorpcontactParams extends Model {
    protected $_name = [
        'query' => 'query',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('query', $this->query, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
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
     * @return BaseinfoCorpSearchCorpcontactParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query'])){
            $model->query = $map['query'];
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
     * @description 搜索词,长度大于2开始搜
     * @var string
     */
    public $query;

    /**
     * @description 开始位置,从0开始
     * @var int
     */
    public $offset;

    /**
     * @description 拉取个数上限100
     * @var int
     */
    public $size;

}
