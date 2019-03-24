<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Ecs\Request\V20140526;

class ModifyNetworkInterfaceAttributeRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyNetworkInterfaceAttribute", "ecs", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $SecurityGroupIds;

	private  $description;

	private  $networkInterfaceName;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	private  $networkInterfaceId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSecurityGroupIds() {
		return $this->SecurityGroupIds;
	}

	public function setSecurityGroupIds($SecurityGroupIds) {
		$this->SecurityGroupIds = $SecurityGroupIds;
		for ($i = 0; $i < count($SecurityGroupIds); $i ++) {	
			$this->queryParameters["SecurityGroupId.".($i+1)] = $SecurityGroupIds[$i];
		}
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getNetworkInterfaceName() {
		return $this->networkInterfaceName;
	}

	public function setNetworkInterfaceName($networkInterfaceName) {
		$this->networkInterfaceName = $networkInterfaceName;
		$this->queryParameters["NetworkInterfaceName"]=$networkInterfaceName;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getNetworkInterfaceId() {
		return $this->networkInterfaceId;
	}

	public function setNetworkInterfaceId($networkInterfaceId) {
		$this->networkInterfaceId = $networkInterfaceId;
		$this->queryParameters["NetworkInterfaceId"]=$networkInterfaceId;
	}
	
}