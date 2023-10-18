<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomDnsHost请求参数结构体
 *
 * @method string getDomainId() 获取域名实例ID
 * @method void setDomainId(string $DomainId) 设置域名实例ID
 * @method string getDnsName() 获取Dns名称
 * @method void setDnsName(string $DnsName) 设置Dns名称
 * @method array getIpSet() 获取IP地址列表
 * @method void setIpSet(array $IpSet) 设置IP地址列表
 */
class CreateCustomDnsHostRequest extends AbstractModel
{
    /**
     * @var string 域名实例ID
     */
    public $DomainId;

    /**
     * @var string Dns名称
     */
    public $DnsName;

    /**
     * @var array IP地址列表
     */
    public $IpSet;

    /**
     * @param string $DomainId 域名实例ID
     * @param string $DnsName Dns名称
     * @param array $IpSet IP地址列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("IpSet",$param) and $param["IpSet"] !== null) {
            $this->IpSet = $param["IpSet"];
        }
    }
}
