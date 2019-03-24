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

class ApplyTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "ApplyTemplate", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $enableStartTime;

	private  $applyMode;

	private  $templateIds;

	private  $enableEndTime;

	private  $groupId;

	private  $notifyLevel;

	private  $silenceTime;

	public function getEnableStartTime() {
		return $this->enableStartTime;
	}

	public function setEnableStartTime($enableStartTime) {
		$this->enableStartTime = $enableStartTime;
		$this->queryParameters["EnableStartTime"]=$enableStartTime;
	}

	public function getApplyMode() {
		return $this->applyMode;
	}

	public function setApplyMode($applyMode) {
		$this->applyMode = $applyMode;
		$this->queryParameters["ApplyMode"]=$applyMode;
	}

	public function getTemplateIds() {
		return $this->templateIds;
	}

	public function setTemplateIds($templateIds) {
		$this->templateIds = $templateIds;
		$this->queryParameters["TemplateIds"]=$templateIds;
	}

	public function getEnableEndTime() {
		return $this->enableEndTime;
	}

	public function setEnableEndTime($enableEndTime) {
		$this->enableEndTime = $enableEndTime;
		$this->queryParameters["EnableEndTime"]=$enableEndTime;
	}

	public function getGroupId() {
		return $this->groupId;
	}

	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		$this->queryParameters["GroupId"]=$groupId;
	}

	public function getNotifyLevel() {
		return $this->notifyLevel;
	}

	public function setNotifyLevel($notifyLevel) {
		$this->notifyLevel = $notifyLevel;
		$this->queryParameters["NotifyLevel"]=$notifyLevel;
	}

	public function getSilenceTime() {
		return $this->silenceTime;
	}

	public function setSilenceTime($silenceTime) {
		$this->silenceTime = $silenceTime;
		$this->queryParameters["SilenceTime"]=$silenceTime;
	}
	
}