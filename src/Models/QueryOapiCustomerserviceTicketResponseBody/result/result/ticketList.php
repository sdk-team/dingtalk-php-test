<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceTicketResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class ticketList extends Model {
    protected $_name = [
        'gmtModified' => 'gmt_modified',
        'ticketId' => 'ticket_id',
        'title' => 'title',
        'templateId' => 'template_id',
        'gmtCreate' => 'gmt_create',
        'ticketStatus' => 'ticket_status',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->ticketId) {
            $res['ticket_id'] = $this->ticketId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ticketList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['ticket_id'])){
            $model->ticketId = $map['ticket_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['ticket_status'])){
            $model->ticketStatus = $map['ticket_status'];
        }
        return $model;
    }
    /**
     * @description 最新修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 工单id
     * @var string
     */
    public $ticketId;

    /**
     * @description 工单标题
     * @var string
     */
    public $title;

    /**
     * @description 模板id
     * @var string
     */
    public $templateId;

    /**
     * @description 新建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 工单状态
     * @var string
     */
    public $ticketStatus;

}
