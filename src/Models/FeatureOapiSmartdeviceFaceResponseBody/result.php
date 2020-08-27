<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\FeatureOapiSmartdeviceFaceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'featureInfo' => 'feature_info',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->featureInfo) {
            $res['feature_info'] = $this->featureInfo;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['feature_info'])){
            $model->featureInfo = $map['feature_info'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 特征值
     * @var string
     */
    public $featureInfo;

    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

}
