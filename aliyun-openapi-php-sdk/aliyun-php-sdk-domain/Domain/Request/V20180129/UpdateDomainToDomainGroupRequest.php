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
namespace Domain\Request\V20180129;

class UpdateDomainToDomainGroupRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "UpdateDomainToDomainGroup");
		$this->setMethod("POST");
	}

	private  $dataSource;

	private  $userClientIp;

	private  $fileToUpload;

	private  $DomainNames;

	private  $replace;

	private  $lang;

	private  $domainGroupId;

	public function getDataSource() {
		return $this->dataSource;
	}

	public function setDataSource($dataSource) {
		$this->dataSource = $dataSource;
		$this->queryParameters["DataSource"]=$dataSource;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getFileToUpload() {
		return $this->fileToUpload;
	}

	public function setFileToUpload($fileToUpload) {
		$this->fileToUpload = $fileToUpload;
		}

	public function getDomainNames() {
		return $this->DomainNames;
	}

	public function setDomainNames($DomainNames) {
		$this->DomainNames = $DomainNames;
		for ($i = 0; $i < count($DomainNames); $i ++) {	
			$this->queryParameters["DomainName.".($i+1)] = $DomainNames[$i];
		}
	}

	public function getReplace() {
		return $this->replace;
	}

	public function setReplace($replace) {
		$this->replace = $replace;
		$this->queryParameters["Replace"]=$replace;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getDomainGroupId() {
		return $this->domainGroupId;
	}

	public function setDomainGroupId($domainGroupId) {
		$this->domainGroupId = $domainGroupId;
		$this->queryParameters["DomainGroupId"]=$domainGroupId;
	}
	
}