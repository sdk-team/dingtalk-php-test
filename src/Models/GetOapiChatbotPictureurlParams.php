<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiChatbotPictureurlParams extends Model {
    protected $_name = [
        'downloadCode' => 'download_code',
    ];
    public function validate() {
        Model::validateRequired('downloadCode', $this->downloadCode, true);
        Model::validateMaxLength('downloadCode', $this->downloadCode, 4000);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->downloadCode) {
            $res['download_code'] = $this->downloadCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiChatbotPictureurlParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['download_code'])){
            $model->downloadCode = $map['download_code'];
        }
        return $model;
    }
    /**
     * @description 图片临时下载码
     * @var string
     */
    public $downloadCode;

}
