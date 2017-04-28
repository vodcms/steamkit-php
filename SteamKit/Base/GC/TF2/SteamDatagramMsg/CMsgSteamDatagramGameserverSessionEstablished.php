<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steamdatagram_messages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamDatagramMsg;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramGameserverSessionEstablished
 */
class CMsgSteamDatagramGameserverSessionEstablished extends \Protobuf\AbstractMessage
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
     * client_cookie optional fixed32 = 1
     *
     * @var int
     */
    protected $client_cookie = null;

    /**
     * gameserver_steam_id optional fixed64 = 3
     *
     * @var int
     */
    protected $gameserver_steam_id = null;

    /**
     * seconds_until_shutdown optional uint32 = 4
     *
     * @var int
     */
    protected $seconds_until_shutdown = null;

    /**
     * session_id optional uint32 = 5
     *
     * @var int
     */
    protected $session_id = null;

    /**
     * Check if 'client_cookie' has a value
     *
     * @return bool
     */
    public function hasClientCookie()
    {
        return $this->client_cookie !== null;
    }

    /**
     * Get 'client_cookie' value
     *
     * @return int
     */
    public function getClientCookie()
    {
        return $this->client_cookie;
    }

    /**
     * Set 'client_cookie' value
     *
     * @param int $value
     */
    public function setClientCookie($value = null)
    {
        $this->client_cookie = $value;
    }

    /**
     * Check if 'gameserver_steam_id' has a value
     *
     * @return bool
     */
    public function hasGameserverSteamId()
    {
        return $this->gameserver_steam_id !== null;
    }

    /**
     * Get 'gameserver_steam_id' value
     *
     * @return int
     */
    public function getGameserverSteamId()
    {
        return $this->gameserver_steam_id;
    }

    /**
     * Set 'gameserver_steam_id' value
     *
     * @param int $value
     */
    public function setGameserverSteamId($value = null)
    {
        $this->gameserver_steam_id = $value;
    }

    /**
     * Check if 'seconds_until_shutdown' has a value
     *
     * @return bool
     */
    public function hasSecondsUntilShutdown()
    {
        return $this->seconds_until_shutdown !== null;
    }

    /**
     * Get 'seconds_until_shutdown' value
     *
     * @return int
     */
    public function getSecondsUntilShutdown()
    {
        return $this->seconds_until_shutdown;
    }

    /**
     * Set 'seconds_until_shutdown' value
     *
     * @param int $value
     */
    public function setSecondsUntilShutdown($value = null)
    {
        $this->seconds_until_shutdown = $value;
    }

    /**
     * Check if 'session_id' has a value
     *
     * @return bool
     */
    public function hasSessionId()
    {
        return $this->session_id !== null;
    }

    /**
     * Get 'session_id' value
     *
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set 'session_id' value
     *
     * @param int $value
     */
    public function setSessionId($value = null)
    {
        $this->session_id = $value;
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
            'client_cookie' => null,
            'gameserver_steam_id' => null,
            'seconds_until_shutdown' => null,
            'session_id' => null
        ], $values);

        $message->setClientCookie($values['client_cookie']);
        $message->setGameserverSteamId($values['gameserver_steam_id']);
        $message->setSecondsUntilShutdown($values['seconds_until_shutdown']);
        $message->setSessionId($values['session_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgSteamDatagramGameserverSessionEstablished',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'client_cookie',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'gameserver_steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'seconds_until_shutdown',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'session_id',
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

        if ($this->client_cookie !== null) {
            $writer->writeVarint($stream, 13);
            $writer->writeFixed32($stream, $this->client_cookie);
        }

        if ($this->gameserver_steam_id !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeFixed64($stream, $this->gameserver_steam_id);
        }

        if ($this->seconds_until_shutdown !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->seconds_until_shutdown);
        }

        if ($this->session_id !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->session_id);
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
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->client_cookie = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->gameserver_steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->seconds_until_shutdown = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->session_id = $reader->readVarint($stream);

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

        if ($this->client_cookie !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->gameserver_steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->seconds_until_shutdown !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->seconds_until_shutdown);
        }

        if ($this->session_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->session_id);
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
        $this->client_cookie = null;
        $this->gameserver_steam_id = null;
        $this->seconds_until_shutdown = null;
        $this->session_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameserverSessionEstablished) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->client_cookie = ($message->client_cookie !== null) ? $message->client_cookie : $this->client_cookie;
        $this->gameserver_steam_id = ($message->gameserver_steam_id !== null) ? $message->gameserver_steam_id : $this->gameserver_steam_id;
        $this->seconds_until_shutdown = ($message->seconds_until_shutdown !== null) ? $message->seconds_until_shutdown : $this->seconds_until_shutdown;
        $this->session_id = ($message->session_id !== null) ? $message->session_id : $this->session_id;
    }


}

