<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ExecuteOapiCustomerserviceActivityParams\ticketActivity;

class ExecuteOapiCustomerserviceActivityParams extends Model {
    protected $_name = [
        'ticketActivity' => 'ticket_activity',
    ];
    public function validate() {
        Model::validateRequired('ticketActivity', $this->ticketActivity, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ticketActivity) {
            $res['ticket_activity'] = null !== $this->ticketActivity ? $this->ticketActivity->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ExecuteOapiCustomerserviceActivityParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_activity'])){
            $model->ticketActivity = ticketActivity::fromMap($map['ticket_activity']);
        }
        return $model;
    }
    /**
     * @description 活动
     * @var ticketActivity
     */
    public $ticketActivity;

}
