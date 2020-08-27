<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionParams\ticketActionPageQuery;

class QueryOapiCustomerserviceActionParams extends Model {
    protected $_name = [
        'ticketActionPageQuery' => 'ticket_action_page_query',
    ];
    public function validate() {
        Model::validateRequired('ticketActionPageQuery', $this->ticketActionPageQuery, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ticketActionPageQuery) {
            $res['ticket_action_page_query'] = null !== $this->ticketActionPageQuery ? $this->ticketActionPageQuery->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiCustomerserviceActionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_action_page_query'])){
            $model->ticketActionPageQuery = ticketActionPageQuery::fromMap($map['ticket_action_page_query']);
        }
        return $model;
    }
    /**
     * @description 分页查询条件
     * @var ticketActionPageQuery
     */
    public $ticketActionPageQuery;

}
