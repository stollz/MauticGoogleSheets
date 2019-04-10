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


/**
 * The "objectAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $objectAccessControls = $storageService->objectAccessControls;
 *  </code>
 */
class Google_Service_Storage_ObjectAccessControls_Resource extends Google_Service_Resource
{

    /**
     * Permanently deletes the ACL entry for the specified entity on the specified
     * object. (objectAccessControls.delete)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId,
     * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
     * allAuthenticatedUsers.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     */
    public function delete($bucket, $object, $entity, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns the ACL entry for the specified entity on the specified object.
     * (objectAccessControls.get)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId,
     * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
     * allAuthenticatedUsers.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     * @return Google_Service_Storage_ObjectAccessControl
     */
    public function get($bucket, $object, $entity, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Storage_ObjectAccessControl");
    }

    /**
     * Creates a new ACL entry on the specified object.
     * (objectAccessControls.insert)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param Google_ObjectAccessControl $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     * @return Google_Service_Storage_ObjectAccessControl
     */
    public function insert($bucket, $object, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Storage_ObjectAccessControl");
    }

    /**
     * Retrieves ACL entries on the specified object.
     * (objectAccessControls.listObjectAccessControls)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     * @return Google_Service_Storage_ObjectAccessControls
     */
    public function listObjectAccessControls($bucket, $object, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Storage_ObjectAccessControls");
    }

    /**
     * Updates an ACL entry on the specified object. This method supports patch
     * semantics. (objectAccessControls.patch)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId,
     * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
     * allAuthenticatedUsers.
     * @param Google_ObjectAccessControl $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     * @return Google_Service_Storage_ObjectAccessControl
     */
    public function patch($bucket, $object, $entity, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Storage_ObjectAccessControl");
    }

    /**
     * Updates an ACL entry on the specified object. (objectAccessControls.update)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId,
     * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
     * allAuthenticatedUsers.
     * @param Google_ObjectAccessControl $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string generation If present, selects a specific revision of this
     * object (as opposed to the latest version, the default).
     * @return Google_Service_Storage_ObjectAccessControl
     */
    public function update($bucket, $object, $entity, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Storage_ObjectAccessControl");
    }
}