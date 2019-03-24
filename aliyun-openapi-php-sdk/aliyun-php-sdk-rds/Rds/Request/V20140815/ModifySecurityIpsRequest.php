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
namespace Rds\Request\V20140815;

class ModifySecurityIpsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Rds", "2014-08-15", "ModifySecurityIps", "rds", "openAPI");
		$this->setMethod("POST");
	}

	private  $dBInstanceIPArrayName;

	private  $resourceOwnerId;

	private  $modifyMode;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $securityIps;

	private  $securityGroupId;

	private  $ownerId;

	private  $whitelistNetType;

	private  $dBInstanceIPArrayAttribute;

	private  $securityIPType;

	private  $dBInstanceId;

	public function getDBInstanceIPArrayName() {
		return $this->dBInstanceIPArrayName;
	}

	public function setDBInstanceIPArrayName($dBInstanceIPArrayName) {
		$this->dBInstanceIPArrayName = $dBInstanceIPArrayName;
		$this->queryParameters["DBInstanceIPArrayName"]=$dBInstanceIPArrayName;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getModifyMode() {
		return $this->modifyMode;
	}

	public function setModifyMode($modifyMode) {
		$this->modifyMode = $modifyMode;
		$this->queryParameters["ModifyMode"]=$modifyMode;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getClientToken() {
		return $this->clientToken;
	}

	public function setClientToken($clientToken) {
		$this->clientToken = $clientToken;
		$this->queryParameters["ClientToken"]=$clientToken;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getSecurityIps() {
		return $this->securityIps;
	}

	public function setSecurityIps($securityIps) {
		$this->securityIps = $securityIps;
		$this->queryParameters["SecurityIps"]=$securityIps;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getWhitelistNetType() {
		return $this->whitelistNetType;
	}

	public function setWhitelistNetType($whitelistNetType) {
		$this->whitelistNetType = $whitelistNetType;
		$this->queryParameters["WhitelistNetType"]=$whitelistNetType;
	}

	public function getDBInstanceIPArrayAttribute() {
		return $this->dBInstanceIPArrayAttribute;
	}

	public function setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute) {
		$this->dBInstanceIPArrayAttribute = $dBInstanceIPArrayAttribute;
		$this->queryParameters["DBInstanceIPArrayAttribute"]=$dBInstanceIPArrayAttribute;
	}

	public function getSecurityIPType() {
		return $this->securityIPType;
	}

	public function setSecurityIPType($securityIPType) {
		$this->securityIPType = $securityIPType;
		$this->queryParameters["SecurityIPType"]=$securityIPType;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}
	
}