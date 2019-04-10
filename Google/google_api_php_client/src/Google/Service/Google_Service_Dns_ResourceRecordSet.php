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


class Google_Service_Dns_ResourceRecordSet extends Google_Collection
{
    protected $collection_key = 'rrdatas';
    protected $internal_gapi_mappings = array(
    );
    public $kind;
    public $name;
    public $rrdatas;
    public $ttl;
    public $type;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRrdatas($rrdatas)
    {
        $this->rrdatas = $rrdatas;
    }
    public function getRrdatas()
    {
        return $this->rrdatas;
    }
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    }
    public function getTtl()
    {
        return $this->ttl;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}