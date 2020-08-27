<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripInvoiceParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'title' => 'title',
        'userid' => 'userid',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 发票抬头
     * @var string
     */
    public $title;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
