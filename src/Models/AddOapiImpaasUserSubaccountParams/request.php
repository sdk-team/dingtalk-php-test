<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiImpaasUserSubaccountParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'adminaccountId' => 'adminaccount_id',
        'subaccountId' => 'subaccount_id',
        'channel' => 'channel',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->adminaccountId) {
            $res['adminaccount_id'] = $this->adminaccountId;
        }
        if (null !== $this->subaccountId) {
            $res['subaccount_id'] = $this->subaccountId;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['adminaccount_id'])){
            $model->adminaccountId = $map['adminaccount_id'];
        }
        if(isset($map['subaccount_id'])){
            $model->subaccountId = $map['subaccount_id'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 主账号id
     * @var string
     */
    public $adminaccountId;

    /**
     * @description 子账号id
     * @var string
     */
    public $subaccountId;

    /**
     * @description 业务方channel
     * @var string
     */
    public $channel;

}
