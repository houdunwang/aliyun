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

class SendDryRunSystemEventRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "SendDryRunSystemEvent", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $product;

	private  $groupId;

	private  $eventName;

	private  $eventContent;

	public function getProduct() {
		return $this->product;
	}

	public function setProduct($product) {
		$this->product = $product;
		$this->queryParameters["Product"]=$product;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getEventName() {
		return $this->eventName;
	}

	public function setEventName($eventName) {
		$this->eventName = $eventName;
		$this->queryParameters["EventName"]=$eventName;
	}

	public function getEventContent() {
		return $this->eventContent;
	}

	public function setEventContent($eventContent) {
		$this->eventContent = $eventContent;
		$this->queryParameters["EventContent"]=$eventContent;
	}
	
}