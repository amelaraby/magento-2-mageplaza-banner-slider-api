<?php
/**
 * @author Ahmed El-Araby <araby2305@gmail.com>
 */

namespace Logixie\MageplazaBannerSliderApi\Api\Data;

/**
 * Interface SliderInterface
 * @package Logixie\MageplazaBannerSliderApi\Api\Data
 * @author Ahmed El-Araby <araby2305@gmail.com>
 */
interface SliderInterface
{
    /**
     * @return int
     */
    public function getSliderId();


    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getLocation();

    /**
     * @return string
     */
    public function getStoreIds();

    /**
     * @return string
     */
    public function getCustomerGroupIds();

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @return string
     */
    public function getEffect();

    /**
     * @return int
     */
    public function getAutoWidth();

    /**
     * @return int
     */
    public function getAutoHeight();

    /**
     * @return int
     */
    public function getDesign();

    /**
     * @return int
     */
    public function getLoop();

    /**
     * @return int
     */
    public function getLazyLoad();

    /**
     * @return int
     */
    public function getAutoplay();

    /**
     * @return int
     */
    public function getAutoplayTimeout();

    /**
     * @return int
     */
    public function getNav();

    /**
     * @return int
     */
    public function getDots();

    /**
     * @return int
     */
    public function getIsResponsive();


    /**
     * @return string
     */
    public function getResponsiveItems();

    /**
     * @return string
     */
    public function getFromDate();

    /**
     * @return string
     */
    public function getToDate();

    /**
     * @return \Logixie\MageplazaBannerSliderApi\Api\Data\BannerInterface[]
     */
    public function getBanners();
}
