<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steamdatagram_messages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamDatagramMsg;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramGameserverSessionRequest
 */
class CMsgSteamDatagramGameserverSessionRequest extends \Protobuf\AbstractMessage
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
     * ticket optional message = 1
     *
     * @var \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameServerAuthTicket
     */
    protected $ticket = null;

    /**
     * challenge_time optional fixed32 = 3
     *
     * @var int
     */
    protected $challenge_time = null;

    /**
     * challenge optional fixed64 = 4
     *
     * @var int
     */
    protected $challenge = null;

    /**
     * client_cookie optional fixed32 = 5
     *
     * @var int
     */
    protected $client_cookie = null;

    /**
     * network_config_version optional uint32 = 6
     *
     * @var int
     */
    protected $network_config_version = null;

    /**
     * Check if 'ticket' has a value
     *
     * @return bool
     */
    public function hasTicket()
    {
        return $this->ticket !== null;
    }

    /**
     * Get 'ticket' value
     *
     * @return \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameServerAuthTicket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set 'ticket' value
     *
     * @param \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameServerAuthTicket $value
     */
    public function setTicket(\SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameServerAuthTicket $value = null)
    {
        $this->ticket = $value;
    }

    /**
     * Check if 'challenge_time' has a value
     *
     * @return bool
     */
    public function hasChallengeTime()
    {
        return $this->challenge_time !== null;
    }

    /**
     * Get 'challenge_time' value
     *
     * @return int
     */
    public function getChallengeTime()
    {
        return $this->challenge_time;
    }

    /**
     * Set 'challenge_time' value
     *
     * @param int $value
     */
    public function setChallengeTime($value = null)
    {
        $this->challenge_time = $value;
    }

    /**
     * Check if 'challenge' has a value
     *
     * @return bool
     */
    public function hasChallenge()
    {
        return $this->challenge !== null;
    }

    /**
     * Get 'challenge' value
     *
     * @return int
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set 'challenge' value
     *
     * @param int $value
     */
    public function setChallenge($value = null)
    {
        $this->challenge = $value;
    }

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
     * Check if 'network_config_version' has a value
     *
     * @return bool
     */
    public function hasNetworkConfigVersion()
    {
        return $this->network_config_version !== null;
    }

    /**
     * Get 'network_config_version' value
     *
     * @return int
     */
    public function getNetworkConfigVersion()
    {
        return $this->network_config_version;
    }

    /**
     * Set 'network_config_version' value
     *
     * @param int $value
     */
    public function setNetworkConfigVersion($value = null)
    {
        $this->network_config_version = $value;
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
            'ticket' => null,
            'challenge_time' => null,
            'challenge' => null,
            'client_cookie' => null,
            'network_config_version' => null
        ], $values);

        $message->setTicket($values['ticket']);
        $message->setChallengeTime($values['challenge_time']);
        $message->setChallenge($values['challenge']);
        $message->setClientCookie($values['client_cookie']);
        $message->setNetworkConfigVersion($values['network_config_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgSteamDatagramGameserverSessionRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ticket',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramGameServerAuthTicket'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'challenge_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'challenge',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'client_cookie',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'network_config_version',
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

        if ($this->ticket !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->ticket->serializedSize($sizeContext));
            $this->ticket->writeTo($context);
        }

        if ($this->challenge_time !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFixed32($stream, $this->challenge_time);
        }

        if ($this->challenge !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->challenge);
        }

        if ($this->client_cookie !== null) {
            $writer->writeVarint($stream, 45);
            $writer->writeFixed32($stream, $this->client_cookie);
        }

        if ($this->network_config_version !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->network_config_version);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameServerAuthTicket();

                $this->ticket = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->challenge_time = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->challenge = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->client_cookie = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->network_config_version = $reader->readVarint($stream);

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

        if ($this->ticket !== null) {
            $innerSize = $this->ticket->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->challenge_time !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->challenge !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->client_cookie !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->network_config_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->network_config_version);
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
        $this->ticket = null;
        $this->challenge_time = null;
        $this->challenge = null;
        $this->client_cookie = null;
        $this->network_config_version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramGameserverSessionRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ticket = ($message->ticket !== null) ? $message->ticket : $this->ticket;
        $this->challenge_time = ($message->challenge_time !== null) ? $message->challenge_time : $this->challenge_time;
        $this->challenge = ($message->challenge !== null) ? $message->challenge : $this->challenge;
        $this->client_cookie = ($message->client_cookie !== null) ? $message->client_cookie : $this->client_cookie;
        $this->network_config_version = ($message->network_config_version !== null) ? $message->network_config_version : $this->network_config_version;
    }


}

