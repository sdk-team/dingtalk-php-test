<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionParams;

use AlibabaCloud\Tea\Model;

class ticketActionPageQuery extends Model {
    protected $_name = [
        'ticketId' => 'ticket_id',
        'size' => 'size',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('ticketId', $this->ticketId, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('cursor', $this->cursor, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->ticketId) {
            $res['ticket_id'] = $this->ticketId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ticketActionPageQuery
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ticket_id'])){
            $model->ticketId = $map['ticket_id'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        return $model;
    }
    /**
     * @description 工单id
     * @var string
     */
    public $ticketId;

    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description 查询游标
     * @var int
     */
    public $cursor;

}
