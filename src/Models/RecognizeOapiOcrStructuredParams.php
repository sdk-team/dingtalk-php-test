<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecognizeOapiOcrStructuredParams extends Model {
    protected $_name = [
        'type' => 'type',
        'imageUrl' => 'image_url',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateMaxLength('imageUrl', $this->imageUrl, 1000);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->imageUrl) {
            $res['image_url'] = $this->imageUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecognizeOapiOcrStructuredParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['image_url'])){
            $model->imageUrl = $map['image_url'];
        }
        return $model;
    }
    /**
     * @description 识别图片类型, 身份证idcard，营业执照增值税发票invoice，营业执照blicense，银行卡bank_card，车牌car_no，机动车发票car_invoice，驾驶证driving_license，行驶证vehicle_license，火车票train_ticket，定额发票quota_invoice，出租车发票taxi_ticket，机票行程单air_itinerary
     * @var string
     */
    public $type;

    /**
     * @description 识别图片地址
     * @var string
     */
    public $imageUrl;

}
