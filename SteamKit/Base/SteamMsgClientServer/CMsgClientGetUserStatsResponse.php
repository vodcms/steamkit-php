<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientGetUserStatsResponse
 */
class CMsgClientGetUserStatsResponse extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * game_id optional fixed64 = 1
     *
     * @var int
     */
    protected $game_id = null;

    /**
     * eresult optional int32 = 2
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * crc_stats optional uint32 = 3
     *
     * @var int
     */
    protected $crc_stats = null;

    /**
     * schema optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $schema = null;

    /**
     * stats repeated message = 5
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats>
     */
    protected $stats = null;

    /**
     * achievement_blocks repeated message = 6
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks>
     */
    protected $achievement_blocks = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->eresult = '2';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'game_id' has a value
     *
     * @return bool
     */
    public function hasGameId()
    {
        return $this->game_id !== null;
    }

    /**
     * Get 'game_id' value
     *
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * Set 'game_id' value
     *
     * @param int $value
     */
    public function setGameId($value = null)
    {
        $this->game_id = $value;
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
    }

    /**
     * Check if 'crc_stats' has a value
     *
     * @return bool
     */
    public function hasCrcStats()
    {
        return $this->crc_stats !== null;
    }

    /**
     * Get 'crc_stats' value
     *
     * @return int
     */
    public function getCrcStats()
    {
        return $this->crc_stats;
    }

    /**
     * Set 'crc_stats' value
     *
     * @param int $value
     */
    public function setCrcStats($value = null)
    {
        $this->crc_stats = $value;
    }

    /**
     * Check if 'schema' has a value
     *
     * @return bool
     */
    public function hasSchema()
    {
        return $this->schema !== null;
    }

    /**
     * Get 'schema' value
     *
     * @return \Protobuf\Stream
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Set 'schema' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSchema($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->schema = $value;
    }

    /**
     * Check if 'stats' has a value
     *
     * @return bool
     */
    public function hasStatsList()
    {
        return $this->stats !== null;
    }

    /**
     * Get 'stats' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats>
     */
    public function getStatsList()
    {
        return $this->stats;
    }

    /**
     * Set 'stats' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats> $value
     */
    public function setStatsList(\Protobuf\Collection $value = null)
    {
        $this->stats = $value;
    }

    /**
     * Add a new element to 'stats'
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats
     * $value
     */
    public function addStats(\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats $value)
    {
        if ($this->stats === null) {
            $this->stats = new \Protobuf\MessageCollection();
        }

        $this->stats->add($value);
    }

    /**
     * Check if 'achievement_blocks' has a value
     *
     * @return bool
     */
    public function hasAchievementBlocksList()
    {
        return $this->achievement_blocks !== null;
    }

    /**
     * Get 'achievement_blocks' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks>
     */
    public function getAchievementBlocksList()
    {
        return $this->achievement_blocks;
    }

    /**
     * Set 'achievement_blocks' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks> $value
     */
    public function setAchievementBlocksList(\Protobuf\Collection $value = null)
    {
        $this->achievement_blocks = $value;
    }

    /**
     * Add a new element to 'achievement_blocks'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks
     * $value
     */
    public function addAchievementBlocks(\SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks $value)
    {
        if ($this->achievement_blocks === null) {
            $this->achievement_blocks = new \Protobuf\MessageCollection();
        }

        $this->achievement_blocks->add($value);
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'game_id' => null,
            'eresult' => '2',
            'crc_stats' => null,
            'schema' => null,
            'stats' => [],
            'achievement_blocks' => []
        ], $values);

        $message->setGameId($values['game_id']);
        $message->setEresult($values['eresult']);
        $message->setCrcStats($values['crc_stats']);
        $message->setSchema($values['schema']);

        foreach ($values['stats'] as $item) {
            $message->addStats($item);
        }

        foreach ($values['achievement_blocks'] as $item) {
            $message->addAchievementBlocks($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientGetUserStatsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'game_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '2'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'crc_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'schema',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientGetUserStatsResponse.Stats'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'achievement_blocks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientGetUserStatsResponse.Achievement_Blocks'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->game_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->game_id);
        }

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->crc_stats !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->crc_stats);
        }

        if ($this->schema !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->schema);
        }

        if ($this->stats !== null) {
            foreach ($this->stats as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->achievement_blocks !== null) {
            foreach ($this->achievement_blocks as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->game_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->crc_stats = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->schema = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Stats();

                if ($this->stats === null) {
                    $this->stats = new \Protobuf\MessageCollection();
                }

                $this->stats->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse\Achievement_Blocks();

                if ($this->achievement_blocks === null) {
                    $this->achievement_blocks = new \Protobuf\MessageCollection();
                }

                $this->achievement_blocks->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->game_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->crc_stats !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->crc_stats);
        }

        if ($this->schema !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->schema);
        }

        if ($this->stats !== null) {
            foreach ($this->stats as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->achievement_blocks !== null) {
            foreach ($this->achievement_blocks as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->game_id = null;
        $this->eresult = '2';
        $this->crc_stats = null;
        $this->schema = null;
        $this->stats = null;
        $this->achievement_blocks = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientGetUserStatsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->game_id = ($message->game_id !== null) ? $message->game_id : $this->game_id;
        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->crc_stats = ($message->crc_stats !== null) ? $message->crc_stats : $this->crc_stats;
        $this->schema = ($message->schema !== null) ? $message->schema : $this->schema;
        $this->stats = ($message->stats !== null) ? $message->stats : $this->stats;
        $this->achievement_blocks = ($message->achievement_blocks !== null) ? $message->achievement_blocks : $this->achievement_blocks;
    }


}

