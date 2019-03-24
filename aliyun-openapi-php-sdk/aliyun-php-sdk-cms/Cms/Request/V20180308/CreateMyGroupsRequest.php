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
namespace Cms\Request\V20180308;

class CreateMyGroupsRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "CreateMyGroups", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $contactGroups;

	private  $options;

	private  $type;

	private  $serviceId;

	private  $groupName;

	private  $bindUrl;

	public function getContactGroups() {
		return $this->contactGroups;
	}

	public function setContactGroups($contactGroups) {
		$this->contactGroups = $contactGroups;
		$this->queryParameters["ContactGroups"]=$contactGroups;
	}

	public function getOptions() {
		return $this->options;
	}

	public function setOptions($options) {
		$this->options = $options;
		$this->queryParameters["Options"]=$options;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->queryParameters["Type"]=$type;
	}

	public function getServiceId() {
		return $this->serviceId;
	}

	public function setServiceId($serviceId) {
		$this->serviceId = $serviceId;
		$this->queryParameters["ServiceId"]=$serviceId;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}

	public function getBindUrl() {
		return $this->bindUrl;
	}

	public function setBindUrl($bindUrl) {
		$this->bindUrl = $bindUrl;
		$this->queryParameters["BindUrl"]=$bindUrl;
	}
	
}