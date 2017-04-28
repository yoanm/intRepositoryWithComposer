<?php
namespace Yoanm\ComposerConfigManager\Application;

use Yoanm\ComposerConfigManager\Application\Writer\ConfigurationWriterInterface;

class WriteConfiguration
{
    /** @var ConfigurationWriterInterface */
    private $configurationWriter;

    /**
     * @param ConfigurationWriterInterface $configurationWriter
     */
    public function __construct(ConfigurationWriterInterface $configurationWriter)
    {
        $this->configurationWriter = $configurationWriter;
    }
    public function run(WriteConfigurationRequest $request)
    {
        $this->configurationWriter->write($request->getConfiguration(), $request->getDestinationFolder());
    }
}