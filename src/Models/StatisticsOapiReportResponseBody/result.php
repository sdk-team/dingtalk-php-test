<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatisticsOapiReportResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'readNum' => 'read_num',
        'commentNum' => 'comment_num',
        'commentUserNum' => 'comment_user_num',
        'likeNum' => 'like_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->readNum) {
            $res['read_num'] = $this->readNum;
        }
        if (null !== $this->commentNum) {
            $res['comment_num'] = $this->commentNum;
        }
        if (null !== $this->commentUserNum) {
            $res['comment_user_num'] = $this->commentUserNum;
        }
        if (null !== $this->likeNum) {
            $res['like_num'] = $this->likeNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['read_num'])){
            $model->readNum = $map['read_num'];
        }
        if(isset($map['comment_num'])){
            $model->commentNum = $map['comment_num'];
        }
        if(isset($map['comment_user_num'])){
            $model->commentUserNum = $map['comment_user_num'];
        }
        if(isset($map['like_num'])){
            $model->likeNum = $map['like_num'];
        }
        return $model;
    }
    /**
     * @description 已读人数
     * @var int
     */
    public $readNum;

    /**
     * @description 评论个数
     * @var int
     */
    public $commentNum;

    /**
     * @description 评论人数，去重
     * @var int
     */
    public $commentUserNum;

    /**
     * @description 点赞人数
     * @var int
     */
    public $likeNum;

}
