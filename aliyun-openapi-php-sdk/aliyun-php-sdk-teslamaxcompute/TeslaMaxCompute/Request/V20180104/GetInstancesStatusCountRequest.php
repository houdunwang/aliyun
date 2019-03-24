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
namespace TeslaMaxCompute\Request\V20180104;

class GetInstancesStatusCountRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("TeslaMaxCompute", "2018-01-04", "GetInstancesStatusCount");
	}

	private  $cluster;

	private  $quotaId;

	private  $region;

	private  $quotaName;

	public function getCluster() {
		return $this->cluster;
	}

	public function setCluster($cluster) {
		$this->cluster = $cluster;
		$this->queryParameters["Cluster"]=$cluster;
	}

	public function getQuotaId() {
		return $this->quotaId;
	}

	public function setQuotaId($quotaId) {
		$this->quotaId = $quotaId;
		$this->queryParameters["QuotaId"]=$quotaId;
	}

	public function getRegion() {
		return $this->region;
	}

	public function setRegion($region) {
		$this->region = $region;
		$this->queryParameters["Region"]=$region;
	}

	public function getQuotaName() {
		return $this->quotaName;
	}

	public function setQuotaName($quotaName) {
		$this->quotaName = $quotaName;
		$this->queryParameters["QuotaName"]=$quotaName;
	}
	
}