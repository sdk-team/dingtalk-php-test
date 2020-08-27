<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddfaceCorpSmartdeviceParams\faceVo;

class AddfaceCorpSmartdeviceParams extends Model {
    protected $_name = [
        'faceVo' => 'face_vo',
    ];
    public function validate() {
        Model::validateRequired('faceVo', $this->faceVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->faceVo) {
            $res['face_vo'] = null !== $this->faceVo ? $this->faceVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddfaceCorpSmartdeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['face_vo'])){
            $model->faceVo = faceVo::fromMap($map['face_vo']);
        }
        return $model;
    }
    /**
     * @description 识别用户数据
     * @var faceVo
     */
    public $faceVo;

}
