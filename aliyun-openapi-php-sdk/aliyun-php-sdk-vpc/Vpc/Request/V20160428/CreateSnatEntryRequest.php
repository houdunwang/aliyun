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
namespace Vpc\Request\V20160428;

class CreateSnatEntryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "CreateSnatEntry", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $sourceVSwitchId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $sourceCIDR;

	private  $snatTableId;

	private  $ownerId;

	private  $snatIp;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSourceVSwitchId() {
		return $this->sourceVSwitchId;
	}

	public function setSourceVSwitchId($sourceVSwitchId) {
		$this->sourceVSwitchId = $sourceVSwitchId;
		$this->queryParameters["SourceVSwitchId"]=$sourceVSwitchId;
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

	public function getSourceCIDR() {
		return $this->sourceCIDR;
	}

	public function setSourceCIDR($sourceCIDR) {
		$this->sourceCIDR = $sourceCIDR;
		$this->queryParameters["SourceCIDR"]=$sourceCIDR;
	}

	public function getSnatTableId() {
		return $this->snatTableId;
	}

	public function setSnatTableId($snatTableId) {
		$this->snatTableId = $snatTableId;
		$this->queryParameters["SnatTableId"]=$snatTableId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSnatIp() {
		return $this->snatIp;
	}

	public function setSnatIp($snatIp) {
		$this->snatIp = $snatIp;
		$this->queryParameters["SnatIp"]=$snatIp;
	}
	
}