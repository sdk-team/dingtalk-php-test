<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CheckOapiRetailUserTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'extension' => 'extension',
        'associateUnionId' => 'associate_union_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->associateUnionId) {
            $res['associate_union_id'] = $this->associateUnionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['associate_union_id'])){
            $model->associateUnionId = $map['associate_union_id'];
        }
        return $model;
    }
    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

    /**
     * @description 中心组织唯一ID
     * @var string
     */
    public $associateUnionId;

}
