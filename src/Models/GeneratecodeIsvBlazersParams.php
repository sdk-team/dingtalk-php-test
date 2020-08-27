<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GeneratecodeIsvBlazersParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'ext' => 'ext',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('ext', $this->ext, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GeneratecodeIsvBlazersParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        return $model;
    }
    /**
     * @description 业务对象唯一标示
     * @var string
     */
    public $bizId;

    /**
     * @description 具体业务场景下约定的数据，格式：Map<String,String>
     * @var string
     */
    public $ext;

}
