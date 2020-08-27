<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateentranceidOapiImpaasConversationParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateentranceidOapiImpaasConversationParams\request\accounts;

class request extends Model {
    protected $_name = [
        'extension' => 'extension',
        'entranceId' => 'entrance_id',
        'accounts' => 'accounts',
        'uuid' => 'uuid',
        'channel' => 'channel',
        'cid' => 'cid',
    ];
    public function validate() {
        Model::validateRequired('entranceId', $this->entranceId, true);
        Model::validateRequired('accounts', $this->accounts, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('cid', $this->cid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->entranceId) {
            $res['entrance_id'] = $this->entranceId;
        }
        if (null !== $this->accounts) {
            $res['accounts'] = [];
            if(null !== $this->accounts && is_array($this->accounts)){
                $n = 0;
                foreach($this->accounts as $item){
                    $res['accounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['entrance_id'])){
            $model->entranceId = $map['entrance_id'];
        }
        if(isset($map['accounts'])){
            if(!empty($map['accounts'])){
                $model->accounts = [];
                $n = 0;
                foreach($map['accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        return $model;
    }
    /**
     * @description 扩展信息，可选
     * @var string
     */
    public $extension;

    /**
     * @description 入口id，数字
     * @var int
     */
    public $entranceId;

    /**
     * @description 要设置的用户列表
     * @var array
     */
    public $accounts;

    /**
     * @description 该请求的唯一id，用于去重、打日志
     * @var string
     */
    public $uuid;

    /**
     * @description 业务channel
     * @var string
     */
    public $channel;

    /**
     * @description 会话id
     * @var string
     */
    public $cid;

}
