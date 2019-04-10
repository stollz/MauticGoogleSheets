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

class Google_Service_Dataflow_StreamingComputationRanges extends Google_Collection
{
    protected $collection_key = 'rangeAssignments';
    protected $internal_gapi_mappings = array(
    );
    public $computationId;
    protected $rangeAssignmentsType = 'Google_Service_Dataflow_KeyRangeDataDiskAssignment';
    protected $rangeAssignmentsDataType = 'array';


    public function setComputationId($computationId)
    {
        $this->computationId = $computationId;
    }
    public function getComputationId()
    {
        return $this->computationId;
    }
    public function setRangeAssignments($rangeAssignments)
    {
        $this->rangeAssignments = $rangeAssignments;
    }
    public function getRangeAssignments()
    {
        return $this->rangeAssignments;
    }
}
