<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartdeviceMeetingroomParticipantParams extends Model {
    protected $_name = [
        'cursor' => 'cursor',
        'size' => 'size',
        'bookid' => 'bookid',
    ];
    public function validate() {
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('bookid', $this->bookid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->bookid) {
            $res['bookid'] = $this->bookid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiSmartdeviceMeetingroomParticipantParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['bookid'])){
            $model->bookid = $map['bookid'];
        }
        return $model;
    }
    /**
     * @description 分页游标
     * @var string
     */
    public $cursor;

    /**
     * @description 最大200(含)
     * @var int
     */
    public $size;

    /**
     * @description 会议室预订id
     * @var string
     */
    public $bookid;

}
