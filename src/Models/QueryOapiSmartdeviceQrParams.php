<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiSmartdeviceQrParams extends Model {
    protected $_name = [
        'qrContent' => 'qr_content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->qrContent) {
            $res['qr_content'] = $this->qrContent;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiSmartdeviceQrParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['qr_content'])){
            $model->qrContent = $map['qr_content'];
        }
        return $model;
    }
    /**
     * @description 二维码内容
     * @var string
     */
    public $qrContent;

}
