<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMicroappResponseBody;

use AlibabaCloud\Tea\Model;

class appList extends Model {
    protected $_name = [
        'name' => 'name',
        'agentId' => 'agentId',
        'appIcon' => 'appIcon',
        'appDesc' => 'appDesc',
        'isSelf' => 'isSelf',
        'appStatus' => 'appStatus',
        'ompLink' => 'ompLink',
        'homepageLink' => 'homepageLink',
        'pcHomepageLink' => 'pcHomepageLink',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->appIcon) {
            $res['appIcon'] = $this->appIcon;
        }
        if (null !== $this->appDesc) {
            $res['appDesc'] = $this->appDesc;
        }
        if (null !== $this->isSelf) {
            $res['isSelf'] = $this->isSelf;
        }
        if (null !== $this->appStatus) {
            $res['appStatus'] = $this->appStatus;
        }
        if (null !== $this->ompLink) {
            $res['ompLink'] = $this->ompLink;
        }
        if (null !== $this->homepageLink) {
            $res['homepageLink'] = $this->homepageLink;
        }
        if (null !== $this->pcHomepageLink) {
            $res['pcHomepageLink'] = $this->pcHomepageLink;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return appList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        if(isset($map['appIcon'])){
            $model->appIcon = $map['appIcon'];
        }
        if(isset($map['appDesc'])){
            $model->appDesc = $map['appDesc'];
        }
        if(isset($map['isSelf'])){
            $model->isSelf = $map['isSelf'];
        }
        if(isset($map['appStatus'])){
            $model->appStatus = $map['appStatus'];
        }
        if(isset($map['ompLink'])){
            $model->ompLink = $map['ompLink'];
        }
        if(isset($map['homepageLink'])){
            $model->homepageLink = $map['homepageLink'];
        }
        if(isset($map['pcHomepageLink'])){
            $model->pcHomepageLink = $map['pcHomepageLink'];
        }
        return $model;
    }
    /**
     * @description 微应用名称
     * @var string
     */
    public $name;

    /**
     * @description 微应用实例化id
     * @var int
     */
    public $agentId;

    /**
     * @description 微应用图标
     * @var string
     */
    public $appIcon;

    /**
     * @description 微应用描述
     * @var string
     */
    public $appDesc;

    /**
     * @description 表示是否是自建微应用
     * @var bool
     */
    public $isSelf;

    /**
     * @description 微应用状态，1表示启用，0表示停用
     * @var int
     */
    public $appStatus;

    /**
     * @description 微应用的OA后台管理主页
     * @var string
     */
    public $ompLink;

    /**
     * @description 微应用的移动端主页
     * @var string
     */
    public $homepageLink;

    /**
     * @description 微应用的pc端主页
     * @var string
     */
    public $pcHomepageLink;

}
