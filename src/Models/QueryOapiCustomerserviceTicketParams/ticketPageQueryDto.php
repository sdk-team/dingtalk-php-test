<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceTicketParams;

use AlibabaCloud\Tea\Model;

class ticketPageQueryDto extends Model {
    protected $_name = [
        'sourceId' => 'source_id',
        'foreignId' => 'foreign_id',
        'ticketTemplateId' => 'ticket_template_id',
        'foreignName' => 'foreign_name',
        'endDate' => 'end_date',
        'ticketStatus' => 'ticket_status',
        'startDate' => 'start_date',
        'ticketId' => 'ticket_id',
        'size' => 'size',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('foreignId', $this->foreignId, true);
        Model::validateRequired('ticketTemplateId', $this->ticketTemplateId, true);
        Model::validateRequired('foreignName', $this->foreignName, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validatePattern('endDate', $this->endDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startDate', $this->startDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceId) {
            $res['source_id'] = $this->sourceId;
        }
        if (null !== $this->foreignId) {
            $res['foreign_id'] = $this->foreignId;
        }
        if (null !== $this->ticketTemplateId) {
            $res['ticket_template_id'] = $this->ticketTemplateId;
        }
        if (null !== $this->foreignName) {
            $res['foreign_name'] = $this->foreignName;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
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
     * @return ticketPageQueryDto
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_id'])){
            $model->sourceId = $map['source_id'];
        }
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
        if(isset($map['ticket_template_id'])){
            $model->ticketTemplateId = $map['ticket_template_id'];
        }
        if(isset($map['foreign_name'])){
            $model->foreignName = $map['foreign_name'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['ticket_status'])){
            $model->ticketStatus = $map['ticket_status'];
        }
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
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
     * @description 三方账号标识
     * @var string
     */
    public $sourceId;

    /**
     * @description 三方账号id
     * @var string
     */
    public $foreignId;

    /**
     * @description 工单类型id
     * @var string
     */
    public $ticketTemplateId;

    /**
     * @description 三方账号姓名
     * @var string
     */
    public $foreignName;

    /**
     * @description 结束时间
     * @var string
     */
    public $endDate;

    /**
     * @description 待受理
     * @var string
     */
    public $ticketStatus;

    /**
     * @description 开始时间
     * @var string
     */
    public $startDate;

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
     * @description 游标
     * @var int
     */
    public $cursor;

}
