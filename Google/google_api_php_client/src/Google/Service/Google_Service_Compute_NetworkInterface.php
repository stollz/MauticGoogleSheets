<?php
namespace MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Service;
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Compute_NetworkInterface extends Google_Collection
{
    protected $collection_key = 'accessConfigs';
    protected $internal_gapi_mappings = array(
    );
    protected $accessConfigsType = 'Google_Service_Compute_AccessConfig';
    protected $accessConfigsDataType = 'array';
    public $name;
    public $network;
    public $networkIP;


    public function setAccessConfigs($accessConfigs)
    {
        $this->accessConfigs = $accessConfigs;
    }
    public function getAccessConfigs()
    {
        return $this->accessConfigs;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setNetworkIP($networkIP)
    {
        $this->networkIP = $networkIP;
    }
    public function getNetworkIP()
    {
        return $this->networkIP;
    }
}
