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

class Google_Service_Books_RequestAccess extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $concurrentAccessType = 'Google_Service_Books_ConcurrentAccessRestriction';
    protected $concurrentAccessDataType = '';
    protected $downloadAccessType = 'Google_Service_Books_DownloadAccessRestriction';
    protected $downloadAccessDataType = '';
    public $kind;


    public function setConcurrentAccess(Google_Service_Books_ConcurrentAccessRestriction $concurrentAccess)
    {
        $this->concurrentAccess = $concurrentAccess;
    }
    public function getConcurrentAccess()
    {
        return $this->concurrentAccess;
    }
    public function setDownloadAccess(Google_Service_Books_DownloadAccessRestriction $downloadAccess)
    {
        $this->downloadAccess = $downloadAccess;
    }
    public function getDownloadAccess()
    {
        return $this->downloadAccess;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
