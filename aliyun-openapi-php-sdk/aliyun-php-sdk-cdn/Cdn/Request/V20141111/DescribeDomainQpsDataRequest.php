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
namespace Cdn\Request\V20141111;

class DescribeDomainQpsDataRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeDomainQpsData");
		$this->setMethod("POST");
	}

	private  $fixTimeGap;

	private  $timeMerge;

	private  $domainName;

	private  $endTime;

	private  $locationNameEn;

	private  $startTime;

	private  $ispNameEn;

	private  $ownerId;

	private  $domainType;

	private  $securityToken;

	private  $interval;

	public function getFixTimeGap() {
		return $this->fixTimeGap;
	}

	public function setFixTimeGap($fixTimeGap) {
		$this->fixTimeGap = $fixTimeGap;
		$this->queryParameters["FixTimeGap"]=$fixTimeGap;
	}

	public function getTimeMerge() {
		return $this->timeMerge;
	}

	public function setTimeMerge($timeMerge) {
		$this->timeMerge = $timeMerge;
		$this->queryParameters["TimeMerge"]=$timeMerge;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getLocationNameEn() {
		return $this->locationNameEn;
	}

	public function setLocationNameEn($locationNameEn) {
		$this->locationNameEn = $locationNameEn;
		$this->queryParameters["LocationNameEn"]=$locationNameEn;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getIspNameEn() {
		return $this->ispNameEn;
	}

	public function setIspNameEn($ispNameEn) {
		$this->ispNameEn = $ispNameEn;
		$this->queryParameters["IspNameEn"]=$ispNameEn;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getDomainType() {
		return $this->domainType;
	}

	public function setDomainType($domainType) {
		$this->domainType = $domainType;
		$this->queryParameters["DomainType"]=$domainType;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getInterval() {
		return $this->interval;
	}

	public function setInterval($interval) {
		$this->interval = $interval;
		$this->queryParameters["Interval"]=$interval;
	}
	
}