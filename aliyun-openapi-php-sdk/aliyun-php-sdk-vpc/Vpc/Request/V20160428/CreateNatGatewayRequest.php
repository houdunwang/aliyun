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

class CreateNatGatewayRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "CreateNatGateway", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $vpcId;

	private  $name;

	private  $description;

	private  $ownerId;

	private  $BandwidthPackages;

	private  $spec;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
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

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getBandwidthPackages() {
		return $this->BandwidthPackages;
	}

	public function setBandwidthPackages($BandwidthPackages) {
		$this->BandwidthPackages = $BandwidthPackages;
		for ($i = 0; $i < count($BandwidthPackages); $i ++) {	
			$this->queryParameters['BandwidthPackage.' . ($i + 1) . '.IpCount'] = $BandwidthPackages[$i]['IpCount'];
			$this->queryParameters['BandwidthPackage.' . ($i + 1) . '.Bandwidth'] = $BandwidthPackages[$i]['Bandwidth'];
			$this->queryParameters['BandwidthPackage.' . ($i + 1) . '.Zone'] = $BandwidthPackages[$i]['Zone'];
			$this->queryParameters['BandwidthPackage.' . ($i + 1) . '.ISP'] = $BandwidthPackages[$i]['ISP'];
			$this->queryParameters['BandwidthPackage.' . ($i + 1) . '.InternetChargeType'] = $BandwidthPackages[$i]['InternetChargeType'];

		}
	}

	public function getSpec() {
		return $this->spec;
	}

	public function setSpec($spec) {
		$this->spec = $spec;
		$this->queryParameters["Spec"]=$spec;
	}
	
}