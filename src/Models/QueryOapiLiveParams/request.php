<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiLiveParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'uuid' => 'uuid',
    ];
    public function validate() {
        Model::validateRequired('uuid', $this->uuid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        return $model;
    }
    /**
     * @description 直播UUID,必填
     * @var string
     */
    public $uuid;

}
