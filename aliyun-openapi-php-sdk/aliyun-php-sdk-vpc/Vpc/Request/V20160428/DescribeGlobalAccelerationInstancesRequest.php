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

class DescribeGlobalAccelerationInstancesRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "DescribeGlobalAccelerationInstances", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $ipAddress;

	private  $resourceOwnerId;

	private  $bandwidthType;

	private  $resourceOwnerAccount;

	private  $serviceLocation;

	private  $ownerAccount;

	private  $ownerId;

	private  $globalAccelerationInstanceId;

	private  $serverId;

	private  $pageNumber;

	private  $name;

	private  $pageSize;

	private  $status;

	public function getIpAddress() {
		return $this->ipAddress;
	}

	public function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
		$this->queryParameters["IpAddress"]=$ipAddress;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getBandwidthType() {
		return $this->bandwidthType;
	}

	public function setBandwidthType($bandwidthType) {
		$this->bandwidthType = $bandwidthType;
		$this->queryParameters["BandwidthType"]=$bandwidthType;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getServiceLocation() {
		return $this->serviceLocation;
	}

	public function setServiceLocation($serviceLocation) {
		$this->serviceLocation = $serviceLocation;
		$this->queryParameters["ServiceLocation"]=$serviceLocation;
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

	public function getGlobalAccelerationInstanceId() {
		return $this->globalAccelerationInstanceId;
	}

	public function setGlobalAccelerationInstanceId($globalAccelerationInstanceId) {
		$this->globalAccelerationInstanceId = $globalAccelerationInstanceId;
		$this->queryParameters["GlobalAccelerationInstanceId"]=$globalAccelerationInstanceId;
	}

	public function getServerId() {
		return $this->serverId;
	}

	public function setServerId($serverId) {
		$this->serverId = $serverId;
		$this->queryParameters["ServerId"]=$serverId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}