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
namespace CCC\Request\V20170705;

class LaunchShortMessageAppraiseRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CCC", "2017-07-05", "LaunchShortMessageAppraise", "ccc", "openAPI");
		$this->setMethod("POST");
	}

	private  $acid;

	private  $instanceId;

	private  $contactType;

	private  $phoneNumbers;

	private  $skillGroupId;

	public function getAcid() {
		return $this->acid;
	}

	public function setAcid($acid) {
		$this->acid = $acid;
		$this->queryParameters["Acid"]=$acid;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getContactType() {
		return $this->contactType;
	}

	public function setContactType($contactType) {
		$this->contactType = $contactType;
		$this->queryParameters["ContactType"]=$contactType;
	}

	public function getPhoneNumbers() {
		return $this->phoneNumbers;
	}

	public function setPhoneNumbers($phoneNumbers) {
		$this->phoneNumbers = $phoneNumbers;
		$this->queryParameters["PhoneNumbers"]=$phoneNumbers;
	}

	public function getSkillGroupId() {
		return $this->skillGroupId;
	}

	public function setSkillGroupId($skillGroupId) {
		$this->skillGroupId = $skillGroupId;
		$this->queryParameters["SkillGroupId"]=$skillGroupId;
	}
	
}