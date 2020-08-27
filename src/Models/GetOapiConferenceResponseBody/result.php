<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiConferenceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'content' => 'content',
        'address' => 'address',
        'poi' => 'poi',
        'arrangeUseridList' => 'arrange_userid_list',
        'adminUserid' => 'admin_userid',
        'createUserid' => 'create_userid',
        'status' => 'status',
        'topic' => 'topic',
        'type' => 'type',
        'corpId' => 'corp_id',
        'conferenceId' => 'conference_id',
        'version' => 'version',
        'modifiedUserid' => 'modified_userid',
        'topicPicUrl' => 'topic_pic_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->poi) {
            $res['poi'] = $this->poi;
        }
        if (null !== $this->arrangeUseridList) {
            $res['arrange_userid_list'] = $this->arrangeUseridList;
        }
        if (null !== $this->adminUserid) {
            $res['admin_userid'] = $this->adminUserid;
        }
        if (null !== $this->createUserid) {
            $res['create_userid'] = $this->createUserid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->conferenceId) {
            $res['conference_id'] = $this->conferenceId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->modifiedUserid) {
            $res['modified_userid'] = $this->modifiedUserid;
        }
        if (null !== $this->topicPicUrl) {
            $res['topic_pic_url'] = $this->topicPicUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['poi'])){
            $model->poi = $map['poi'];
        }
        if(isset($map['arrange_userid_list'])){
            if(!empty($map['arrange_userid_list'])){
                $model->arrangeUseridList = $map['arrange_userid_list'];
            }
        }
        if(isset($map['admin_userid'])){
            $model->adminUserid = $map['admin_userid'];
        }
        if(isset($map['create_userid'])){
            $model->createUserid = $map['create_userid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['topic'])){
            $model->topic = $map['topic'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['conference_id'])){
            $model->conferenceId = $map['conference_id'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['modified_userid'])){
            $model->modifiedUserid = $map['modified_userid'];
        }
        if(isset($map['topic_pic_url'])){
            $model->topicPicUrl = $map['topic_pic_url'];
        }
        return $model;
    }
    /**
     * @description 会务结束时间，时间戳格式，单位为毫秒
     * @var int
     */
    public $endTime;

    /**
     * @description 会务开始时间，时间戳格式，单位为毫秒
     * @var int
     */
    public $startTime;

    /**
     * @description 会务简介
     * @var string
     */
    public $content;

    /**
     * @description 会务地点
     * @var string
     */
    public $address;

    /**
     * @description 高德经纬度，格式:longitude,latitude
     * @var string
     */
    public $poi;

    /**
     * @description 会务筹备者userid列表
     * @var array
     */
    public $arrangeUseridList;

    /**
     * @description 会务管理员userid
     * @var string
     */
    public $adminUserid;

    /**
     * @description 会务创建者userid
     * @var string
     */
    public $createUserid;

    /**
     * @description 会务状态，2 - 筹备中，3 - 已发布，10 - 已结束
     * @var int
     */
    public $status;

    /**
     * @description 会务主题
     * @var string
     */
    public $topic;

    /**
     * @description 会务类型，1 - 年会，2 - 沙龙
     * @var int
     */
    public $type;

    /**
     * @description 举办会务的企业Id
     * @var string
     */
    public $corpId;

    /**
     * @description 会务Id
     * @var string
     */
    public $conferenceId;

    /**
     * @description 会务信息版本号，信息更新时进行递增
     * @var int
     */
    public $version;

    /**
     * @description 最近更新会务信息的userid
     * @var string
     */
    public $modifiedUserid;

    /**
     * @description 会务主题图片地址
     * @var string
     */
    public $topicPicUrl;

}
