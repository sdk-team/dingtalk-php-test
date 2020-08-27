<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerOrgdetailResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerOrgdetailResponseBody\result\bindSellers;

class result extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'orgName' => 'org_name',
        'gmtCreate' => 'gmt_create',
        'bindSellers' => 'bind_sellers',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->orgName) {
            $res['org_name'] = $this->orgName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->bindSellers) {
            $res['bind_sellers'] = [];
            if(null !== $this->bindSellers && is_array($this->bindSellers)){
                $n = 0;
                foreach($this->bindSellers as $item){
                    $res['bind_sellers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['org_name'])){
            $model->orgName = $map['org_name'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['bind_sellers'])){
            if(!empty($map['bind_sellers'])){
                $model->bindSellers = [];
                $n = 0;
                foreach($map['bind_sellers'] as $item) {
                    $model->bindSellers[$n++] = null !== $item ? bindSellers::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 组织名
     * @var string
     */
    public $orgName;

    /**
     * @description 组织创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 组织绑定卖家List
     * @var array
     */
    public $bindSellers;

}
