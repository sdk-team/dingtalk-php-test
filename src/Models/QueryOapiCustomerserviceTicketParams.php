<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceTicketParams\ticketPageQueryDto;

class QueryOapiCustomerserviceTicketParams extends Model {
    protected $_name = [
        'ticketPageQueryDto' => 'ticket_page_query_dto',
    ];
    public function validate() {
        Model::validateRequired('ticketPageQueryDto', $this->ticketPageQueryDto, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ticketPageQueryDto) {
            $res['ticket_page_query_dto'] = null !== $this->ticketPageQueryDto ? $this->ticketPageQueryDto->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiCustomerserviceTicketParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_page_query_dto'])){
            $model->ticketPageQueryDto = ticketPageQueryDto::fromMap($map['ticket_page_query_dto']);
        }
        return $model;
    }
    /**
     * @description 查询对象
     * @var ticketPageQueryDto
     */
    public $ticketPageQueryDto;

}
