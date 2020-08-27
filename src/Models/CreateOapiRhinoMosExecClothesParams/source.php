<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecClothesParams;

use AlibabaCloud\Tea\Model;

class source extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'sourceType' => 'source_type',
    ];
    public function validate() {
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['source_type'] = $this->sourceType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return source
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['source_type'])){
            $model->sourceType = $map['source_type'];
        }
        return $model;
    }
    /**
     * @description 来源ID
     * @var string
     */
    public $sourceId;

    /**
     * @description 来源类型
     * @var string
     */
    public $sourceType;

}
