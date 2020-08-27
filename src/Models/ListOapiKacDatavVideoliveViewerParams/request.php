<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavVideoliveViewerParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'cid' => 'cid',
        'cursor' => 'cursor',
        'liveUuid' => 'live_uuid',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('cid', $this->cid, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('liveUuid', $this->liveUuid, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->liveUuid) {
            $res['live_uuid'] = $this->liveUuid;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['live_uuid'])){
            $model->liveUuid = $map['live_uuid'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 群标识id
     * @var string
     */
    public $cid;

    /**
     * @description 分页游标；首页请使用0，之后直接使用返回结果中的next_cursor
     * @var int
     */
    public $cursor;

    /**
     * @description 直播uuid
     * @var string
     */
    public $liveUuid;

    /**
     * @description 分页大小;不超过500
     * @var int
     */
    public $size;

}
