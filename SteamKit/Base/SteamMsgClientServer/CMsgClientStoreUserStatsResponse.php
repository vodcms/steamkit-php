<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientStoreUserStatsResponse
 */
class CMsgClientStoreUserStatsResponse extends \Protobuf\AbstractMessage
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
     * stats_failed_validation repeated message = 4
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation>
     */
    protected $stats_failed_validation = null;

    /**
     * stats_out_of_date optional bool = 5
     *
     * @var bool
     */
    protected $stats_out_of_date = null;

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
     * Check if 'stats_failed_validation' has a value
     *
     * @return bool
     */
    public function hasStatsFailedValidationList()
    {
        return $this->stats_failed_validation !== null;
    }

    /**
     * Get 'stats_failed_validation' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation>
     */
    public function getStatsFailedValidationList()
    {
        return $this->stats_failed_validation;
    }

    /**
     * Set 'stats_failed_validation' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation> $value
     */
    public function setStatsFailedValidationList(\Protobuf\Collection $value = null)
    {
        $this->stats_failed_validation = $value;
    }

    /**
     * Add a new element to 'stats_failed_validation'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation
     * $value
     */
    public function addStatsFailedValidation(\SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation $value)
    {
        if ($this->stats_failed_validation === null) {
            $this->stats_failed_validation = new \Protobuf\MessageCollection();
        }

        $this->stats_failed_validation->add($value);
    }

    /**
     * Check if 'stats_out_of_date' has a value
     *
     * @return bool
     */
    public function hasStatsOutOfDate()
    {
        return $this->stats_out_of_date !== null;
    }

    /**
     * Get 'stats_out_of_date' value
     *
     * @return bool
     */
    public function getStatsOutOfDate()
    {
        return $this->stats_out_of_date;
    }

    /**
     * Set 'stats_out_of_date' value
     *
     * @param bool $value
     */
    public function setStatsOutOfDate($value = null)
    {
        $this->stats_out_of_date = $value;
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
            'stats_failed_validation' => [],
            'stats_out_of_date' => null
        ], $values);

        $message->setGameId($values['game_id']);
        $message->setEresult($values['eresult']);
        $message->setCrcStats($values['crc_stats']);
        $message->setStatsOutOfDate($values['stats_out_of_date']);

        foreach ($values['stats_failed_validation'] as $item) {
            $message->addStatsFailedValidation($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientStoreUserStatsResponse',
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
                    'name' => 'stats_failed_validation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientStoreUserStatsResponse.Stats_Failed_Validation'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'stats_out_of_date',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->stats_failed_validation !== null) {
            foreach ($this->stats_failed_validation as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->stats_out_of_date !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->stats_out_of_date);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse\Stats_Failed_Validation();

                if ($this->stats_failed_validation === null) {
                    $this->stats_failed_validation = new \Protobuf\MessageCollection();
                }

                $this->stats_failed_validation->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->stats_out_of_date = $reader->readBool($stream);

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

        if ($this->stats_failed_validation !== null) {
            foreach ($this->stats_failed_validation as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->stats_out_of_date !== null) {
            $size += 1;
            $size += 1;
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
        $this->stats_failed_validation = null;
        $this->stats_out_of_date = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientStoreUserStatsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->game_id = ($message->game_id !== null) ? $message->game_id : $this->game_id;
        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->crc_stats = ($message->crc_stats !== null) ? $message->crc_stats : $this->crc_stats;
        $this->stats_failed_validation = ($message->stats_failed_validation !== null) ? $message->stats_failed_validation : $this->stats_failed_validation;
        $this->stats_out_of_date = ($message->stats_out_of_date !== null) ? $message->stats_out_of_date : $this->stats_out_of_date;
    }


}

