<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbypageOapiMicroappParams extends Model {
    protected $_name = [
        'agentId' => 'agentId',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
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
     * @return ListbypageOapiMicroappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
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
     * @description 微应用id
     * @var int
     */
    public $agentId;

    /**
     * @description 偏移量
     * @var int
     */
    public $offset;

    /**
     * @description 大小
     * @var int
     */
    public $size;

}
