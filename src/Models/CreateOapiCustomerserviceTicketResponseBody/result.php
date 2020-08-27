<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceTicketResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'ticketId' => 'ticket_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ticketId) {
            $res['ticket_id'] = $this->ticketId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_id'])){
            $model->ticketId = $map['ticket_id'];
        }
        return $model;
    }
    /**
     * @description 工单id
     * @var string
     */
    public $ticketId;

}
