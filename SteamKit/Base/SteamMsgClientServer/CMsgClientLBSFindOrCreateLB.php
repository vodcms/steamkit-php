<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientLBSFindOrCreateLB
 */
class CMsgClientLBSFindOrCreateLB extends \Protobuf\AbstractMessage
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
     * app_id optional uint32 = 1
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * leaderboard_sort_method optional int32 = 2
     *
     * @var int
     */
    protected $leaderboard_sort_method = null;

    /**
     * leaderboard_display_type optional int32 = 3
     *
     * @var int
     */
    protected $leaderboard_display_type = null;

    /**
     * create_if_not_found optional bool = 4
     *
     * @var bool
     */
    protected $create_if_not_found = null;

    /**
     * leaderboard_name optional string = 5
     *
     * @var string
     */
    protected $leaderboard_name = null;

    /**
     * Check if 'app_id' has a value
     *
     * @return bool
     */
    public function hasAppId()
    {
        return $this->app_id !== null;
    }

    /**
     * Get 'app_id' value
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set 'app_id' value
     *
     * @param int $value
     */
    public function setAppId($value = null)
    {
        $this->app_id = $value;
    }

    /**
     * Check if 'leaderboard_sort_method' has a value
     *
     * @return bool
     */
    public function hasLeaderboardSortMethod()
    {
        return $this->leaderboard_sort_method !== null;
    }

    /**
     * Get 'leaderboard_sort_method' value
     *
     * @return int
     */
    public function getLeaderboardSortMethod()
    {
        return $this->leaderboard_sort_method;
    }

    /**
     * Set 'leaderboard_sort_method' value
     *
     * @param int $value
     */
    public function setLeaderboardSortMethod($value = null)
    {
        $this->leaderboard_sort_method = $value;
    }

    /**
     * Check if 'leaderboard_display_type' has a value
     *
     * @return bool
     */
    public function hasLeaderboardDisplayType()
    {
        return $this->leaderboard_display_type !== null;
    }

    /**
     * Get 'leaderboard_display_type' value
     *
     * @return int
     */
    public function getLeaderboardDisplayType()
    {
        return $this->leaderboard_display_type;
    }

    /**
     * Set 'leaderboard_display_type' value
     *
     * @param int $value
     */
    public function setLeaderboardDisplayType($value = null)
    {
        $this->leaderboard_display_type = $value;
    }

    /**
     * Check if 'create_if_not_found' has a value
     *
     * @return bool
     */
    public function hasCreateIfNotFound()
    {
        return $this->create_if_not_found !== null;
    }

    /**
     * Get 'create_if_not_found' value
     *
     * @return bool
     */
    public function getCreateIfNotFound()
    {
        return $this->create_if_not_found;
    }

    /**
     * Set 'create_if_not_found' value
     *
     * @param bool $value
     */
    public function setCreateIfNotFound($value = null)
    {
        $this->create_if_not_found = $value;
    }

    /**
     * Check if 'leaderboard_name' has a value
     *
     * @return bool
     */
    public function hasLeaderboardName()
    {
        return $this->leaderboard_name !== null;
    }

    /**
     * Get 'leaderboard_name' value
     *
     * @return string
     */
    public function getLeaderboardName()
    {
        return $this->leaderboard_name;
    }

    /**
     * Set 'leaderboard_name' value
     *
     * @param string $value
     */
    public function setLeaderboardName($value = null)
    {
        $this->leaderboard_name = $value;
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
            'app_id' => null,
            'leaderboard_sort_method' => null,
            'leaderboard_display_type' => null,
            'create_if_not_found' => null,
            'leaderboard_name' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setLeaderboardSortMethod($values['leaderboard_sort_method']);
        $message->setLeaderboardDisplayType($values['leaderboard_display_type']);
        $message->setCreateIfNotFound($values['create_if_not_found']);
        $message->setLeaderboardName($values['leaderboard_name']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientLBSFindOrCreateLB',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'leaderboard_sort_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'leaderboard_display_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'create_if_not_found',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'leaderboard_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->leaderboard_sort_method !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->leaderboard_sort_method);
        }

        if ($this->leaderboard_display_type !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->leaderboard_display_type);
        }

        if ($this->create_if_not_found !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->create_if_not_found);
        }

        if ($this->leaderboard_name !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->leaderboard_name);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->leaderboard_sort_method = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->leaderboard_display_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->create_if_not_found = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->leaderboard_name = $reader->readString($stream);

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

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->leaderboard_sort_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->leaderboard_sort_method);
        }

        if ($this->leaderboard_display_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->leaderboard_display_type);
        }

        if ($this->create_if_not_found !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->leaderboard_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->leaderboard_name);
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
        $this->app_id = null;
        $this->leaderboard_sort_method = null;
        $this->leaderboard_display_type = null;
        $this->create_if_not_found = null;
        $this->leaderboard_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientLBSFindOrCreateLB) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->leaderboard_sort_method = ($message->leaderboard_sort_method !== null) ? $message->leaderboard_sort_method : $this->leaderboard_sort_method;
        $this->leaderboard_display_type = ($message->leaderboard_display_type !== null) ? $message->leaderboard_display_type : $this->leaderboard_display_type;
        $this->create_if_not_found = ($message->create_if_not_found !== null) ? $message->create_if_not_found : $this->create_if_not_found;
        $this->leaderboard_name = ($message->leaderboard_name !== null) ? $message->leaderboard_name : $this->leaderboard_name;
    }


}

