<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceTicketParams\ticketCreate;

class CreateOapiCustomerserviceTicketParams extends Model {
    protected $_name = [
        'ticketCreate' => 'ticket_create',
    ];
    public function validate() {
        Model::validateRequired('ticketCreate', $this->ticketCreate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ticketCreate) {
            $res['ticket_create'] = null !== $this->ticketCreate ? $this->ticketCreate->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiCustomerserviceTicketParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_create'])){
            $model->ticketCreate = ticketCreate::fromMap($map['ticket_create']);
        }
        return $model;
    }
    /**
     * @description 工单对象
     * @var ticketCreate
     */
    public $ticketCreate;

}
