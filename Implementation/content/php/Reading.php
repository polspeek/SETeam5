<?php

class Reading
{
	/**
	* @var ConsumptionData
	*/
	private $consumptionData;
	
	/**
	* @var Timestamp
	*/
	private $timeStamp;
	
	/**
	* Get consumption data
	*
	* @return null|ConsumptionData
	*/
	public function getData()
	{
		return $this->consumptionData;
	}
	
	/**
	* Get consumption timestamp
	*
	* @return null|Timestamp
	*/
	public function getTimestamp()
	{
		return $this->timestamp;
	}
	
	/**
	* Set consumption data
	*
	* @param ConsumptionData $consumptionData
	* @return Reading
	*/
	public function setData(ConsumptionData $consumptionData)
	{
		$this->consumptionData = $consumptionData;
		return this;
	}
	
	/**
	* Set consumption date
	*
	* @param Timestamp $timestamp
	* @return Reading
	*/
	public function setData(Timestamp $timestamp)
	{
		$this->timestamp = $timestamp;
		return this;
	}
	
	
}

?>