<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SuggestOapiAlitripBtripTrainCityParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'keyword' => 'keyword',
        'userid' => 'userid',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('keyword', $this->keyword, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
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
        if(isset($map['keyword'])){
            $model->keyword = $map['keyword'];
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
     * @description 搜索关键字
     * @var string
     */
    public $keyword;

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
