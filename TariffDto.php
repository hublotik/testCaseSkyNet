<?php

/**
 * Class TariffDTO
 *
 * Этот класс предназначен для хранения данных о тарифе.
 *
 */
class TariffDTO
{
    /**
     * @var string Название тарифа.
     */
    private $name;

    /**
     * @var float Стоимость тарифа.
     */
    private $cost;

    /**
     * @var int Срок действия тарифа в минутах.
     */
    private $estimateTime;

    /**
     * @var int Скорость тарифа в Мбит/с.
     */
    private $speed;

    /**
     * @var string Тип тарифа (фактический, архивный, системный).
     */
    private $tariffType;

    /**
     * Constructor.
     *
     * @param string $name Название тарифа.
     * @param float $cost Стоимость тарифа.
     * @param int $estimateTime Срок действия тарифа в минутах.
     * @param int $speed Скорость тарифа в Мбит/с.
     * @param string $tariffType Тип тарифа.
     */
    public function __construct(string $name, float $cost, int $estimateTime, int $speed, string $tariffType)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->estimateTime = $estimateTime;
        $this->speed = $speed;
        $this->tariffType = $tariffType;
    }

    /**
     * Получить название тарифа.
     *
     * @return string Название тарифа.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Получить стоимость тарифа.
     *
     * @return float Стоимость тарифа.
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * Получить Срок действия тарифа в минутах.
     *
     * @return int Предполагаемое время тарифа.
     */
    public function getEstimateTime(): int
    {
        return $this->estimateTime;
    }

    /**
     * Получить скорость тарифа в Мбит/с.
     *
     * @return int Скорость тарифа.
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Получить тип тарифа.
     *
     * @return string Тип тарифа.
     */
    public function getTariffType(): string
    {
        return $this->tariffType;
    }

    /**
     * Установить стоимость тарифа.
     *
     * @param float $cost Стоимость тарифа.
     * @return void
     */
    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * Установить Срок действия тарифа в минутах.
     *
     * @param int $estimateTime Предполагаемое время тарифа.
     * @return void
     */
    public function setEstimateTime(int $estimateTime): void
    {
        $this->estimateTime = $estimateTime;
    }

    /**
     * Установить скорость тарифа в Мбит/с.
     *
     * @param int $speed Скорость тарифа.
     * @return void
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * Установить тип тарифа.
     *
     * @param string $tariffType Тип тарифа.
     * @return void
     */
    public function setTariffType(string $tariffType): void
    {
        $this->tariffType = $tariffType;
    }
}
