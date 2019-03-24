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
namespace EHPC\Request\V20180412;

class CreateClusterRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "CreateCluster", "ehs", "openAPI");
	}

	private  $sccClusterId;

	private  $imageId;

	private  $ecsOrderManagerInstanceType;

	private  $ehpcVersion;

	private  $accountType;

	private  $securityGroupId;

	private  $description;

	private  $keyPairName;

	private  $securityGroupName;

	private  $ecsOrderComputeInstanceType;

	private  $imageOwnerAlias;

	private  $volumeType;

	private  $deployMode;

	private  $ecsOrderManagerCount;

	private  $password;

	private  $ecsOrderLoginCount;

	private  $computeSpotPriceLimit;

	private  $autoRenewPeriod;

	private  $period;

	private  $volumeProtocol;

	private  $clientVersion;

	private  $osTag;

	private  $remoteDirectory;

	private  $ecsOrderComputeCount;

	private  $computeSpotStrategy;

	private  $PostInstallScripts;

	private  $vSwitchId;

	private  $periodUnit;

	private  $Applications;

	private  $autoRenew;

	private  $ecsChargeType;

	private  $inputFileUrl;

	private  $vpcId;

	private  $haEnable;

	private  $name;

	private  $schedulerType;

	private  $volumeId;

	private  $volumeMountpoint;

	private  $ecsOrderLoginInstanceType;

	private  $zoneId;

	public function getSccClusterId() {
		return $this->sccClusterId;
	}

	public function setSccClusterId($sccClusterId) {
		$this->sccClusterId = $sccClusterId;
		$this->queryParameters["SccClusterId"]=$sccClusterId;
	}

	public function getImageId() {
		return $this->imageId;
	}

	public function setImageId($imageId) {
		$this->imageId = $imageId;
		$this->queryParameters["ImageId"]=$imageId;
	}

	public function getEcsOrderManagerInstanceType() {
		return $this->ecsOrderManagerInstanceType;
	}

	public function setEcsOrderManagerInstanceType($ecsOrderManagerInstanceType) {
		$this->ecsOrderManagerInstanceType = $ecsOrderManagerInstanceType;
		$this->queryParameters["EcsOrder.Manager.InstanceType"]=$ecsOrderManagerInstanceType;
	}

	public function getEhpcVersion() {
		return $this->ehpcVersion;
	}

	public function setEhpcVersion($ehpcVersion) {
		$this->ehpcVersion = $ehpcVersion;
		$this->queryParameters["EhpcVersion"]=$ehpcVersion;
	}

	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->queryParameters["AccountType"]=$accountType;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
	}

	public function getSecurityGroupName() {
		return $this->securityGroupName;
	}

	public function setSecurityGroupName($securityGroupName) {
		$this->securityGroupName = $securityGroupName;
		$this->queryParameters["SecurityGroupName"]=$securityGroupName;
	}

	public function getEcsOrderComputeInstanceType() {
		return $this->ecsOrderComputeInstanceType;
	}

	public function setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType) {
		$this->ecsOrderComputeInstanceType = $ecsOrderComputeInstanceType;
		$this->queryParameters["EcsOrder.Compute.InstanceType"]=$ecsOrderComputeInstanceType;
	}

	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias = $imageOwnerAlias;
		$this->queryParameters["ImageOwnerAlias"]=$imageOwnerAlias;
	}

	public function getVolumeType() {
		return $this->volumeType;
	}

	public function setVolumeType($volumeType) {
		$this->volumeType = $volumeType;
		$this->queryParameters["VolumeType"]=$volumeType;
	}

	public function getDeployMode() {
		return $this->deployMode;
	}

	public function setDeployMode($deployMode) {
		$this->deployMode = $deployMode;
		$this->queryParameters["DeployMode"]=$deployMode;
	}

	public function getEcsOrderManagerCount() {
		return $this->ecsOrderManagerCount;
	}

	public function setEcsOrderManagerCount($ecsOrderManagerCount) {
		$this->ecsOrderManagerCount = $ecsOrderManagerCount;
		$this->queryParameters["EcsOrder.Manager.Count"]=$ecsOrderManagerCount;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getEcsOrderLoginCount() {
		return $this->ecsOrderLoginCount;
	}

	public function setEcsOrderLoginCount($ecsOrderLoginCount) {
		$this->ecsOrderLoginCount = $ecsOrderLoginCount;
		$this->queryParameters["EcsOrder.Login.Count"]=$ecsOrderLoginCount;
	}

	public function getComputeSpotPriceLimit() {
		return $this->computeSpotPriceLimit;
	}

	public function setComputeSpotPriceLimit($computeSpotPriceLimit) {
		$this->computeSpotPriceLimit = $computeSpotPriceLimit;
		$this->queryParameters["ComputeSpotPriceLimit"]=$computeSpotPriceLimit;
	}

	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod = $autoRenewPeriod;
		$this->queryParameters["AutoRenewPeriod"]=$autoRenewPeriod;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getVolumeProtocol() {
		return $this->volumeProtocol;
	}

	public function setVolumeProtocol($volumeProtocol) {
		$this->volumeProtocol = $volumeProtocol;
		$this->queryParameters["VolumeProtocol"]=$volumeProtocol;
	}

	public function getClientVersion() {
		return $this->clientVersion;
	}

	public function setClientVersion($clientVersion) {
		$this->clientVersion = $clientVersion;
		$this->queryParameters["ClientVersion"]=$clientVersion;
	}

	public function getOsTag() {
		return $this->osTag;
	}

	public function setOsTag($osTag) {
		$this->osTag = $osTag;
		$this->queryParameters["OsTag"]=$osTag;
	}

	public function getRemoteDirectory() {
		return $this->remoteDirectory;
	}

	public function setRemoteDirectory($remoteDirectory) {
		$this->remoteDirectory = $remoteDirectory;
		$this->queryParameters["RemoteDirectory"]=$remoteDirectory;
	}

	public function getEcsOrderComputeCount() {
		return $this->ecsOrderComputeCount;
	}

	public function setEcsOrderComputeCount($ecsOrderComputeCount) {
		$this->ecsOrderComputeCount = $ecsOrderComputeCount;
		$this->queryParameters["EcsOrder.Compute.Count"]=$ecsOrderComputeCount;
	}

	public function getComputeSpotStrategy() {
		return $this->computeSpotStrategy;
	}

	public function setComputeSpotStrategy($computeSpotStrategy) {
		$this->computeSpotStrategy = $computeSpotStrategy;
		$this->queryParameters["ComputeSpotStrategy"]=$computeSpotStrategy;
	}

	public function getPostInstallScripts() {
		return $this->PostInstallScripts;
	}

	public function setPostInstallScripts($PostInstallScripts) {
		$this->PostInstallScripts = $PostInstallScripts;
		for ($i = 0; $i < count($PostInstallScripts); $i ++) {	
			$this->queryParameters['PostInstallScript.' . ($i + 1) . '.Args'] = $PostInstallScripts[$i]['Args'];
			$this->queryParameters['PostInstallScript.' . ($i + 1) . '.Url'] = $PostInstallScripts[$i]['Url'];

		}
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	public function setPeriodUnit($periodUnit) {
		$this->periodUnit = $periodUnit;
		$this->queryParameters["PeriodUnit"]=$periodUnit;
	}

	public function getApplications() {
		return $this->Applications;
	}

	public function setApplications($Applications) {
		$this->Applications = $Applications;
		for ($i = 0; $i < count($Applications); $i ++) {	
			$this->queryParameters['Application.' . ($i + 1) . '.Tag'] = $Applications[$i]['Tag'];

		}
	}

	public function getAutoRenew() {
		return $this->autoRenew;
	}

	public function setAutoRenew($autoRenew) {
		$this->autoRenew = $autoRenew;
		$this->queryParameters["AutoRenew"]=$autoRenew;
	}

	public function getEcsChargeType() {
		return $this->ecsChargeType;
	}

	public function setEcsChargeType($ecsChargeType) {
		$this->ecsChargeType = $ecsChargeType;
		$this->queryParameters["EcsChargeType"]=$ecsChargeType;
	}

	public function getInputFileUrl() {
		return $this->inputFileUrl;
	}

	public function setInputFileUrl($inputFileUrl) {
		$this->inputFileUrl = $inputFileUrl;
		$this->queryParameters["InputFileUrl"]=$inputFileUrl;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getHaEnable() {
		return $this->haEnable;
	}

	public function setHaEnable($haEnable) {
		$this->haEnable = $haEnable;
		$this->queryParameters["HaEnable"]=$haEnable;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getSchedulerType() {
		return $this->schedulerType;
	}

	public function setSchedulerType($schedulerType) {
		$this->schedulerType = $schedulerType;
		$this->queryParameters["SchedulerType"]=$schedulerType;
	}

	public function getVolumeId() {
		return $this->volumeId;
	}

	public function setVolumeId($volumeId) {
		$this->volumeId = $volumeId;
		$this->queryParameters["VolumeId"]=$volumeId;
	}

	public function getVolumeMountpoint() {
		return $this->volumeMountpoint;
	}

	public function setVolumeMountpoint($volumeMountpoint) {
		$this->volumeMountpoint = $volumeMountpoint;
		$this->queryParameters["VolumeMountpoint"]=$volumeMountpoint;
	}

	public function getEcsOrderLoginInstanceType() {
		return $this->ecsOrderLoginInstanceType;
	}

	public function setEcsOrderLoginInstanceType($ecsOrderLoginInstanceType) {
		$this->ecsOrderLoginInstanceType = $ecsOrderLoginInstanceType;
		$this->queryParameters["EcsOrder.Login.InstanceType"]=$ecsOrderLoginInstanceType;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}
	
}