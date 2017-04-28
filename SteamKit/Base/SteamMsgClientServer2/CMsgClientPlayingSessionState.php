<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientPlayingSessionState
 */
class CMsgClientPlayingSessionState extends \Protobuf\AbstractMessage
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
     * playing_blocked optional bool = 2
     *
     * @var bool
     */
    protected $playing_blocked = null;

    /**
     * playing_app optional uint32 = 3
     *
     * @var int
     */
    protected $playing_app = null;

    /**
     * Check if 'playing_blocked' has a value
     *
     * @return bool
     */
    public function hasPlayingBlocked()
    {
        return $this->playing_blocked !== null;
    }

    /**
     * Get 'playing_blocked' value
     *
     * @return bool
     */
    public function getPlayingBlocked()
    {
        return $this->playing_blocked;
    }

    /**
     * Set 'playing_blocked' value
     *
     * @param bool $value
     */
    public function setPlayingBlocked($value = null)
    {
        $this->playing_blocked = $value;
    }

    /**
     * Check if 'playing_app' has a value
     *
     * @return bool
     */
    public function hasPlayingApp()
    {
        return $this->playing_app !== null;
    }

    /**
     * Get 'playing_app' value
     *
     * @return int
     */
    public function getPlayingApp()
    {
        return $this->playing_app;
    }

    /**
     * Set 'playing_app' value
     *
     * @param int $value
     */
    public function setPlayingApp($value = null)
    {
        $this->playing_app = $value;
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
            'playing_blocked' => null,
            'playing_app' => null
        ], $values);

        $message->setPlayingBlocked($values['playing_blocked']);
        $message->setPlayingApp($values['playing_app']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientPlayingSessionState',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'playing_blocked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'playing_app',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->playing_blocked !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->playing_blocked);
        }

        if ($this->playing_app !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->playing_app);
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

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->playing_blocked = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->playing_app = $reader->readVarint($stream);

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

        if ($this->playing_blocked !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->playing_app !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->playing_app);
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
        $this->playing_blocked = null;
        $this->playing_app = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientPlayingSessionState) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->playing_blocked = ($message->playing_blocked !== null) ? $message->playing_blocked : $this->playing_blocked;
        $this->playing_app = ($message->playing_app !== null) ? $message->playing_app : $this->playing_app;
    }


}

