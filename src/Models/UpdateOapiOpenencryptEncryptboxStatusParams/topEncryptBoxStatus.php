<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiOpenencryptEncryptboxStatusParams;

use AlibabaCloud\Tea\Model;

class topEncryptBoxStatus extends Model {
    protected $_name = [
        'requestId' => 'request_id',
        'corpId' => 'corp_id',
        'status' => 'status',
        'appid' => 'appid',
        'extension' => 'extension',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('appid', $this->appid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
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
     * @return topEncryptBoxStatus
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 请求的id
     * @var string
     */
    public $requestId;

    /**
     * @description 组织的id
     * @var string
     */
    public $corpId;

    /**
     * @description 加密盒子状态，1表示盒子掉线，2表示盒子上线，3表示企业之前有盒子，现在变成了无盒子的状态
     * @var int
     */
    public $status;

    /**
     * @description 微应用的id
     * @var int
     */
    public $appid;

    /**
     * @description 附加信息，方便扩展
     * @var string
     */
    public $extension;

}
