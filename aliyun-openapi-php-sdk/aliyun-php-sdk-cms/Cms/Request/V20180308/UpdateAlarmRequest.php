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

class UpdateAlarmRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2018-03-08", "UpdateAlarm", "cms", "openAPI");
		$this->setMethod("POST");
	}

	private  $period;

	private  $webhook;

	private  $dryRun;

	private  $contactGroups;

	private  $endTime;

	private  $threshold;

	private  $startTime;

	private  $name;

	private  $evaluationCount;

	private  $silenceTime;

	private  $id;

	private  $notifyType;

	private  $comparisonOperator;

	private  $statistics;

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getWebhook() {
		return $this->webhook;
	}

	public function setWebhook($webhook) {
		$this->webhook = $webhook;
		$this->queryParameters["Webhook"]=$webhook;
	}

	public function getDryRun() {
		return $this->dryRun;
	}

	public function setDryRun($dryRun) {
		$this->dryRun = $dryRun;
		$this->queryParameters["DryRun"]=$dryRun;
	}

	public function getContactGroups() {
		return $this->contactGroups;
	}

	public function setContactGroups($contactGroups) {
		$this->contactGroups = $contactGroups;
		$this->queryParameters["ContactGroups"]=$contactGroups;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getThreshold() {
		return $this->threshold;
	}

	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		$this->queryParameters["Threshold"]=$threshold;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getEvaluationCount() {
		return $this->evaluationCount;
	}

	public function setEvaluationCount($evaluationCount) {
		$this->evaluationCount = $evaluationCount;
		$this->queryParameters["EvaluationCount"]=$evaluationCount;
	}

	public function getSilenceTime() {
		return $this->silenceTime;
	}

	public function setSilenceTime($silenceTime) {
		$this->silenceTime = $silenceTime;
		$this->queryParameters["SilenceTime"]=$silenceTime;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->queryParameters["Id"]=$id;
	}

	public function getNotifyType() {
		return $this->notifyType;
	}

	public function setNotifyType($notifyType) {
		$this->notifyType = $notifyType;
		$this->queryParameters["NotifyType"]=$notifyType;
	}

	public function getComparisonOperator() {
		return $this->comparisonOperator;
	}

	public function setComparisonOperator($comparisonOperator) {
		$this->comparisonOperator = $comparisonOperator;
		$this->queryParameters["ComparisonOperator"]=$comparisonOperator;
	}

	public function getStatistics() {
		return $this->statistics;
	}

	public function setStatistics($statistics) {
		$this->statistics = $statistics;
		$this->queryParameters["Statistics"]=$statistics;
	}
	
}