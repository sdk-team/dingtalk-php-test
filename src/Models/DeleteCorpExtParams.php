<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteCorpExtParams extends Model {
    protected $_name = [
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateMaxLength('userid', $this->userid, 150);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteCorpExtParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 外部联系人的userId
     * @var string
     */
    public $userid;

}
