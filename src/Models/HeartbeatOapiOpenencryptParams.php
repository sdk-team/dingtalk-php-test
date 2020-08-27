<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class HeartbeatOapiOpenencryptParams extends Model {
    protected $_name = [
        'appid' => 'appid',
        'extension' => 'extension',
    ];
    public function validate() {
        Model::validateRequired('appid', $this->appid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return HeartbeatOapiOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 微应用id
     * @var int
     */
    public $appid;

    /**
     * @description xxx
     * @var string
     */
    public $extension;

}
