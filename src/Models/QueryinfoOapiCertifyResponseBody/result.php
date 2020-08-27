<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryinfoOapiCertifyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasCertify' => 'has_certify',
        'certifyFaceImage' => 'certify_face_image',
        'needEnterFace' => 'need_enter_face',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasCertify) {
            $res['has_certify'] = $this->hasCertify;
        }
        if (null !== $this->certifyFaceImage) {
            $res['certify_face_image'] = $this->certifyFaceImage;
        }
        if (null !== $this->needEnterFace) {
            $res['need_enter_face'] = $this->needEnterFace;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_certify'])){
            $model->hasCertify = $map['has_certify'];
        }
        if(isset($map['certify_face_image'])){
            $model->certifyFaceImage = $map['certify_face_image'];
        }
        if(isset($map['need_enter_face'])){
            $model->needEnterFace = $map['need_enter_face'];
        }
        return $model;
    }
    /**
     * @description 是否已实名
     * @var bool
     */
    public $hasCertify;

    /**
     * @description 实名时的脸图
     * @var string
     */
    public $certifyFaceImage;

    /**
     * @description 是否需要补录脸
     * @var bool
     */
    public $needEnterFace;

}
