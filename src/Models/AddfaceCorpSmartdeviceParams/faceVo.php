<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddfaceCorpSmartdeviceParams;

use AlibabaCloud\Tea\Model;

class faceVo extends Model {
    protected $_name = [
        'endDate' => 'end_date',
        'mediaId' => 'media_id',
        'startDate' => 'start_date',
        'userid' => 'userid',
        'userType' => 'user_type',
    ];
    public function validate() {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('userType', $this->userType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return faceVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_type'])){
            $model->userType = $map['user_type'];
        }
        return $model;
    }
    /**
     * @description 终端识别有效期截止时间 timestamp(毫秒)
     * @var int
     */
    public $endDate;

    /**
     * @description 识别用照片id，安全考虑，获取成功后立即删除
     * @var string
     */
    public $mediaId;

    /**
     * @description 终端识别有效期开始时间 timestamp(毫秒)
     * @var int
     */
    public $startDate;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 用户类型，用于区别不同的识别问候语 如interview,friends,business,communication,training,inspection,other
     * @var string
     */
    public $userType;

}
