<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiLiveGroupliveDetailResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiLiveGroupliveDetailResponseBody\result\groupLiveViewers;

class result extends Model {
    protected $_name = [
        'groupLiveViewers' => 'group_live_viewers',
        'liveShareUrl' => 'live_share_url',
        'unviewedCount' => 'unviewed_count',
        'viewerCount' => 'viewer_count',
        'messageCount' => 'message_count',
        'praiseCount' => 'praise_count',
        'pv' => 'pv',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupLiveViewers) {
            $res['group_live_viewers'] = [];
            if(null !== $this->groupLiveViewers && is_array($this->groupLiveViewers)){
                $n = 0;
                foreach($this->groupLiveViewers as $item){
                    $res['group_live_viewers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->liveShareUrl) {
            $res['live_share_url'] = $this->liveShareUrl;
        }
        if (null !== $this->unviewedCount) {
            $res['unviewed_count'] = $this->unviewedCount;
        }
        if (null !== $this->viewerCount) {
            $res['viewer_count'] = $this->viewerCount;
        }
        if (null !== $this->messageCount) {
            $res['message_count'] = $this->messageCount;
        }
        if (null !== $this->praiseCount) {
            $res['praise_count'] = $this->praiseCount;
        }
        if (null !== $this->pv) {
            $res['pv'] = $this->pv;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_live_viewers'])){
            if(!empty($map['group_live_viewers'])){
                $model->groupLiveViewers = [];
                $n = 0;
                foreach($map['group_live_viewers'] as $item) {
                    $model->groupLiveViewers[$n++] = null !== $item ? groupLiveViewers::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['live_share_url'])){
            $model->liveShareUrl = $map['live_share_url'];
        }
        if(isset($map['unviewed_count'])){
            $model->unviewedCount = $map['unviewed_count'];
        }
        if(isset($map['viewer_count'])){
            $model->viewerCount = $map['viewer_count'];
        }
        if(isset($map['message_count'])){
            $model->messageCount = $map['message_count'];
        }
        if(isset($map['praise_count'])){
            $model->praiseCount = $map['praise_count'];
        }
        if(isset($map['pv'])){
            $model->pv = $map['pv'];
        }
        return $model;
    }
    /**
     * @description 查看人员列表
     * @var array
     */
    public $groupLiveViewers;

    /**
     * @description 群直播分享url
     * @var string
     */
    public $liveShareUrl;

    /**
     * @description 未看人数
     * @var int
     */
    public $unviewedCount;

    /**
     * @description 已看人数
     * @var int
     */
    public $viewerCount;

    /**
     * @description 消息数
     * @var int
     */
    public $messageCount;

    /**
     * @description 点赞数
     * @var int
     */
    public $praiseCount;

    /**
     * @description 直播观看人次
     * @var int
     */
    public $pv;

}
