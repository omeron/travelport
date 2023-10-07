<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationInfo
{

  /**
   * @var typeRef $Key
   */
  protected $Key = null;

  /**
   * @var typeProviderCode $ProviderCode
   */
  protected $ProviderCode = null;

  /**
   * @var typeProviderLocatorCode $LocatorCode
   */
  protected $LocatorCode = null;

  /**
   * @var \DateTime $CreateDate
   */
  protected $CreateDate = null;

  /**
   * @var date $HostCreateDate
   */
  protected $HostCreateDate = null;

  /**
   * @var time $HostCreateTime
   */
  protected $HostCreateTime = null;

  /**
   * @var \DateTime $ModifiedDate
   */
  protected $ModifiedDate = null;

  /**
   * @var typePCC $OwningPCC
   */
  protected $OwningPCC = null;

  /**
   * @param typeRef $Key
   * @param typeProviderCode $ProviderCode
   * @param typeProviderLocatorCode $LocatorCode
   * @param \DateTime $CreateDate
   * @param date $HostCreateDate
   * @param time $HostCreateTime
   * @param \DateTime $ModifiedDate
   * @param typePCC $OwningPCC
   */
  public function __construct(
    $Key = null,
    $ProviderCode = null,
    $LocatorCode = null,
    \DateTime $CreateDate = null,
    $HostCreateDate = null,
    $HostCreateTime = null,
    \DateTime $ModifiedDate = null,
    $OwningPCC = null
  ) {
    $this->Key = $Key;
    $this->ProviderCode = $ProviderCode;
    $this->LocatorCode = $LocatorCode;
    $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
    $this->HostCreateDate = $HostCreateDate;
    $this->HostCreateTime = $HostCreateTime;
    $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
    $this->OwningPCC = $OwningPCC;
  }

  /**
   * @return typeRef
   */
  public function getKey()
  {
    return $this->Key;
  }

  /**
   * @param typeRef $Key
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setKey($Key)
  {
    $this->Key = $Key;
    return $this;
  }

  /**
   * @return typeProviderCode
   */
  public function getProviderCode()
  {
    return $this->ProviderCode;
  }

  /**
   * @param typeProviderCode $ProviderCode
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setProviderCode($ProviderCode)
  {
    $this->ProviderCode = $ProviderCode;
    return $this;
  }

  /**
   * @return typeProviderLocatorCode
   */
  public function getLocatorCode()
  {
    return $this->LocatorCode;
  }

  /**
   * @param typeProviderLocatorCode $LocatorCode
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setLocatorCode($LocatorCode)
  {
    $this->LocatorCode = $LocatorCode;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getCreateDate()
  {
    return $this->CreateDate;
  }

  /**
   * @param \DateTime $CreateDate
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setCreateDate(\DateTime $CreateDate)
  {
    $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
    return $this;
  }

  /**
   * @return date
   */
  public function getHostCreateDate()
  {
    return $this->HostCreateDate;
  }

  /**
   * @param date $HostCreateDate
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setHostCreateDate($HostCreateDate)
  {
    $this->HostCreateDate = $HostCreateDate;
    return $this;
  }

  /**
   * @return time
   */
  public function getHostCreateTime()
  {
    return $this->HostCreateTime;
  }

  /**
   * @param time $HostCreateTime
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setHostCreateTime($HostCreateTime)
  {
    $this->HostCreateTime = $HostCreateTime;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getModifiedDate()
  {
    return $this->ModifiedDate;
  }

  /**
   * @param \DateTime $ModifiedDate
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setModifiedDate(\DateTime $ModifiedDate)
  {
    $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
    return $this;
  }

  /**
   * @return typePCC
   */
  public function getOwningPCC()
  {
    return $this->OwningPCC;
  }

  /**
   * @param typePCC $OwningPCC
   * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
   */
  public function setOwningPCC($OwningPCC)
  {
    $this->OwningPCC = $OwningPCC;
    return $this;
  }
}
