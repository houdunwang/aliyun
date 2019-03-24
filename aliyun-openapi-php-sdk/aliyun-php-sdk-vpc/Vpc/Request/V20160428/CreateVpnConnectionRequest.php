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

class CreateVpnConnectionRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "CreateVpnConnection", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $ikeConfig;

	private  $resourceOwnerId;

	private  $remoteSubnet;

	private  $effectImmediately;

	private  $resourceOwnerAccount;

	private  $clientToken;

	private  $ownerAccount;

	private  $ipsecConfig;

	private  $vpnGatewayId;

	private  $ownerId;

	private  $customerGatewayId;

	private  $localSubnet;

	private  $name;

	public function getIkeConfig() {
		return $this->ikeConfig;
	}

	public function setIkeConfig($ikeConfig) {
		$this->ikeConfig = $ikeConfig;
		$this->queryParameters["IkeConfig"]=$ikeConfig;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getRemoteSubnet() {
		return $this->remoteSubnet;
	}

	public function setRemoteSubnet($remoteSubnet) {
		$this->remoteSubnet = $remoteSubnet;
		$this->queryParameters["RemoteSubnet"]=$remoteSubnet;
	}

	public function getEffectImmediately() {
		return $this->effectImmediately;
	}

	public function setEffectImmediately($effectImmediately) {
		$this->effectImmediately = $effectImmediately;
		$this->queryParameters["EffectImmediately"]=$effectImmediately;
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

	public function getIpsecConfig() {
		return $this->ipsecConfig;
	}

	public function setIpsecConfig($ipsecConfig) {
		$this->ipsecConfig = $ipsecConfig;
		$this->queryParameters["IpsecConfig"]=$ipsecConfig;
	}

	public function getVpnGatewayId() {
		return $this->vpnGatewayId;
	}

	public function setVpnGatewayId($vpnGatewayId) {
		$this->vpnGatewayId = $vpnGatewayId;
		$this->queryParameters["VpnGatewayId"]=$vpnGatewayId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getCustomerGatewayId() {
		return $this->customerGatewayId;
	}

	public function setCustomerGatewayId($customerGatewayId) {
		$this->customerGatewayId = $customerGatewayId;
		$this->queryParameters["CustomerGatewayId"]=$customerGatewayId;
	}

	public function getLocalSubnet() {
		return $this->localSubnet;
	}

	public function setLocalSubnet($localSubnet) {
		$this->localSubnet = $localSubnet;
		$this->queryParameters["LocalSubnet"]=$localSubnet;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}
	
}