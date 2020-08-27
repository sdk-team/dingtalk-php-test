<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavVideoconfResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'joinVideoConfLen' => 'join_video_conf_len',
        'joinVideoConfSeccUsrCnt' => 'join_video_conf_secc_usr_cnt',
        'joinVideoConfSeccUsrNum' => 'join_video_conf_secc_usr_num',
        'joinVideoConfUsrCnt' => 'join_video_conf_usr_cnt',
        'startVideoConfCnt' => 'start_video_conf_cnt',
        'startVideoConfSeccCnt' => 'start_video_conf_secc_cnt',
        'startVideoConfUsrNum' => 'start_video_conf_usr_num',
        'videoConfAveUsrNum' => 'video_conf_ave_usr_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->joinVideoConfLen) {
            $res['join_video_conf_len'] = $this->joinVideoConfLen;
        }
        if (null !== $this->joinVideoConfSeccUsrCnt) {
            $res['join_video_conf_secc_usr_cnt'] = $this->joinVideoConfSeccUsrCnt;
        }
        if (null !== $this->joinVideoConfSeccUsrNum) {
            $res['join_video_conf_secc_usr_num'] = $this->joinVideoConfSeccUsrNum;
        }
        if (null !== $this->joinVideoConfUsrCnt) {
            $res['join_video_conf_usr_cnt'] = $this->joinVideoConfUsrCnt;
        }
        if (null !== $this->startVideoConfCnt) {
            $res['start_video_conf_cnt'] = $this->startVideoConfCnt;
        }
        if (null !== $this->startVideoConfSeccCnt) {
            $res['start_video_conf_secc_cnt'] = $this->startVideoConfSeccCnt;
        }
        if (null !== $this->startVideoConfUsrNum) {
            $res['start_video_conf_usr_num'] = $this->startVideoConfUsrNum;
        }
        if (null !== $this->videoConfAveUsrNum) {
            $res['video_conf_ave_usr_num'] = $this->videoConfAveUsrNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['join_video_conf_len'])){
            $model->joinVideoConfLen = $map['join_video_conf_len'];
        }
        if(isset($map['join_video_conf_secc_usr_cnt'])){
            $model->joinVideoConfSeccUsrCnt = $map['join_video_conf_secc_usr_cnt'];
        }
        if(isset($map['join_video_conf_secc_usr_num'])){
            $model->joinVideoConfSeccUsrNum = $map['join_video_conf_secc_usr_num'];
        }
        if(isset($map['join_video_conf_usr_cnt'])){
            $model->joinVideoConfUsrCnt = $map['join_video_conf_usr_cnt'];
        }
        if(isset($map['start_video_conf_cnt'])){
            $model->startVideoConfCnt = $map['start_video_conf_cnt'];
        }
        if(isset($map['start_video_conf_secc_cnt'])){
            $model->startVideoConfSeccCnt = $map['start_video_conf_secc_cnt'];
        }
        if(isset($map['start_video_conf_usr_num'])){
            $model->startVideoConfUsrNum = $map['start_video_conf_usr_num'];
        }
        if(isset($map['video_conf_ave_usr_num'])){
            $model->videoConfAveUsrNum = $map['video_conf_ave_usr_num'];
        }
        return $model;
    }
    /**
     * @description 视频会议企业的累积消耗时长（即参会者入会总时长，且算到发起企业上）(毫秒)
     * @var int
     */
    public $joinVideoConfLen;

    /**
     * @description 视频会议成功参与人次
     * @var int
     */
    public $joinVideoConfSeccUsrCnt;

    /**
     * @description 视频会议成功参与用户数
     * @var int
     */
    public $joinVideoConfSeccUsrNum;

    /**
     * @description 参与视频会议用户数
     * @var int
     */
    public $joinVideoConfUsrCnt;

    /**
     * @description 视频会议发起次数
     * @var int
     */
    public $startVideoConfCnt;

    /**
     * @description 成功发起视频会议数
     * @var int
     */
    public $startVideoConfSeccCnt;

    /**
     * @description 视频会议发起用户数
     * @var int
     */
    public $startVideoConfUsrNum;

    /**
     * @description 视频会议平均每通参与人次
     * @var int
     */
    public $videoConfAveUsrNum;

}
