<?php
/**
 * @author Ahmed El-Araby <araby2305@gmail.com>
 */

namespace Logixie\MageplazaBannerSliderApi\Api;

use Magento\Framework\Exception\NoSuchEntityException;

interface BannerSliderServiceInterface
{
    /**
     * @return \Logixie\MageplazaBannerSliderApi\Api\Data\SliderInterface[]
     */
    public function getSliders();

    /**
     * @param string $sliderId
     * @return \Logixie\MageplazaBannerSliderApi\Api\Data\SliderInterface
     * @throws NoSuchEntityException
     */
    public function getSlider($sliderId);
}
