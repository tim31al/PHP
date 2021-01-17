<?php

namespace VideoPlatform;

use Exception;
use VideoPlatform\interfaces\VideoSharingServiceInterface;
use VideoPlatform\models\youtube\Channel;

class VideoPlatform
{
    const ANALYZE = 'analyze';
    const STATISTICS = 'statistics';
    const TOP_N = 'top_n';

    private VideoSharingServiceInterface $service;

    public function __construct(VideoSharingServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * начнет анализировать канал
     * @return void
     * @throws Exception
     */
    public function analyze() : void
    {
        $this->validateParam();
        $this->service->analyze();
    }

    /**
     * @throws Exception
     */
    public function getStatistics()
    {
        $this->validateParam();
        $this->service->getStatistics();
    }

    public function getTopChannels()
    {
        $this->service->getTopChannels();
    }

    /**
     * @throws Exception
     */
    public function run()
    {
        switch ($_SERVER['argv'][1]) {
            case self::ANALYZE:
                $this->analyze();
                break;
            case self::STATISTICS:
                $this->getStatistics();
                break;
            case self::TOP_N:
                $this->getTopChannels();
                break;
            default:
                throw new Exception('необходимо передать тип: php index.php analyze или statistics');
        }
    }

    /**
     * @param $id
     */
    public function findChannelById($id)
    {
        return $this->service->findChannelById($id);
    }

    /**
     * @throws Exception
     */
    private function validateParam()
    {
        if (empty($_SERVER['argv'][2])) {
            throw new Exception("необходимо передать id каналов через запятую. Пример: php index.php analyze|statistics id1,id2,id3 \n");
        }

        return true;
    }
}
