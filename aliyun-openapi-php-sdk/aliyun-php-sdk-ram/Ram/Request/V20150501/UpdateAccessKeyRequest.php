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
namespace Ram\Request\V20150501;

class UpdateAccessKeyRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ram", "2015-05-01", "UpdateAccessKey");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $userAccessKeyId;

	private  $userName;

	private  $status;

	public function getUserAccessKeyId() {
		return $this->userAccessKeyId;
	}

	public function setUserAccessKeyId($userAccessKeyId) {
		$this->userAccessKeyId = $userAccessKeyId;
		$this->queryParameters["UserAccessKeyId"]=$userAccessKeyId;
	}

	public function getUserName() {
		return $this->userName;
	}

	public function setUserName($userName) {
		$this->userName = $userName;
		$this->queryParameters["UserName"]=$userName;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
		$this->queryParameters["Status"]=$status;
	}
	
}