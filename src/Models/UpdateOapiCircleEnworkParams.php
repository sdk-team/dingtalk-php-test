<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCircleEnworkParams\openUpdateDto;

class UpdateOapiCircleEnworkParams extends Model {
    protected $_name = [
        'openUpdateDto' => 'open_update_dto',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->openUpdateDto) {
            $res['open_update_dto'] = null !== $this->openUpdateDto ? $this->openUpdateDto->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCircleEnworkParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_update_dto'])){
            $model->openUpdateDto = openUpdateDto::fromMap($map['open_update_dto']);
        }
        return $model;
    }
    /**
     * @description 请求封装类
     * @var openUpdateDto
     */
    public $openUpdateDto;

}
