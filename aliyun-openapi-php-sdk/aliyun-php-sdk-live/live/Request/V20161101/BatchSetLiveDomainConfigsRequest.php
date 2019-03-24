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
namespace live\Request\V20161101;

class BatchSetLiveDomainConfigsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "BatchSetLiveDomainConfigs", "live", "openAPI");
		$this->setMethod("POST");
	}

	private  $functions;

	private  $securityToken;

	private  $domainNames;

	private  $ownerAccount;

	private  $ownerId;

	public function getFunctions() {
		return $this->functions;
	}

	public function setFunctions($functions) {
		$this->functions = $functions;
		$this->queryParameters["Functions"]=$functions;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomainNames() {
		return $this->domainNames;
	}

	public function setDomainNames($domainNames) {
		$this->domainNames = $domainNames;
		$this->queryParameters["DomainNames"]=$domainNames;
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
	
}