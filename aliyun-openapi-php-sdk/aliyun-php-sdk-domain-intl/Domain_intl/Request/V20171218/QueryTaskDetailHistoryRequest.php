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
namespace Domain_intl\Request\V20171218;

class QueryTaskDetailHistoryRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain-intl", "2017-12-18", "QueryTaskDetailHistory", "domain", "openAPI");
		$this->setMethod("POST");
	}

	private  $taskStatus;

	private  $userClientIp;

	private  $taskNo;

	private  $domainName;

	private  $pageSize;

	private  $taskDetailNoCursor;

	private  $lang;

	private  $domainNameCursor;

	public function getTaskStatus() {
		return $this->taskStatus;
	}

	public function setTaskStatus($taskStatus) {
		$this->taskStatus = $taskStatus;
		$this->queryParameters["TaskStatus"]=$taskStatus;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getTaskNo() {
		return $this->taskNo;
	}

	public function setTaskNo($taskNo) {
		$this->taskNo = $taskNo;
		$this->queryParameters["TaskNo"]=$taskNo;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getTaskDetailNoCursor() {
		return $this->taskDetailNoCursor;
	}

	public function setTaskDetailNoCursor($taskDetailNoCursor) {
		$this->taskDetailNoCursor = $taskDetailNoCursor;
		$this->queryParameters["TaskDetailNoCursor"]=$taskDetailNoCursor;
	}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getDomainNameCursor() {
		return $this->domainNameCursor;
	}

	public function setDomainNameCursor($domainNameCursor) {
		$this->domainNameCursor = $domainNameCursor;
		$this->queryParameters["DomainNameCursor"]=$domainNameCursor;
	}
	
}