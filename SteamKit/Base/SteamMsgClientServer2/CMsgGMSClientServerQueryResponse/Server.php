<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2\CMsgGMSClientServerQueryResponse;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgGMSClientServerQueryResponse.Server
 */
class Server extends \Protobuf\AbstractMessage
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
     * server_ip optional uint32 = 1
     *
     * @var int
     */
    protected $server_ip = null;

    /**
     * server_port optional uint32 = 2
     *
     * @var int
     */
    protected $server_port = null;

    /**
     * auth_players optional uint32 = 3
     *
     * @var int
     */
    protected $auth_players = null;

    /**
     * Check if 'server_ip' has a value
     *
     * @return bool
     */
    public function hasServerIp()
    {
        return $this->server_ip !== null;
    }

    /**
     * Get 'server_ip' value
     *
     * @return int
     */
    public function getServerIp()
    {
        return $this->server_ip;
    }

    /**
     * Set 'server_ip' value
     *
     * @param int $value
     */
    public function setServerIp($value = null)
    {
        $this->server_ip = $value;
    }

    /**
     * Check if 'server_port' has a value
     *
     * @return bool
     */
    public function hasServerPort()
    {
        return $this->server_port !== null;
    }

    /**
     * Get 'server_port' value
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->server_port;
    }

    /**
     * Set 'server_port' value
     *
     * @param int $value
     */
    public function setServerPort($value = null)
    {
        $this->server_port = $value;
    }

    /**
     * Check if 'auth_players' has a value
     *
     * @return bool
     */
    public function hasAuthPlayers()
    {
        return $this->auth_players !== null;
    }

    /**
     * Get 'auth_players' value
     *
     * @return int
     */
    public function getAuthPlayers()
    {
        return $this->auth_players;
    }

    /**
     * Set 'auth_players' value
     *
     * @param int $value
     */
    public function setAuthPlayers($value = null)
    {
        $this->auth_players = $value;
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
            'server_ip' => null,
            'server_port' => null,
            'auth_players' => null
        ], $values);

        $message->setServerIp($values['server_ip']);
        $message->setServerPort($values['server_port']);
        $message->setAuthPlayers($values['auth_players']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Server',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'server_ip',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'server_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'auth_players',
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

        if ($this->server_ip !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->server_ip);
        }

        if ($this->server_port !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->server_port);
        }

        if ($this->auth_players !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->auth_players);
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

                $this->server_ip = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->server_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->auth_players = $reader->readVarint($stream);

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

        if ($this->server_ip !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_ip);
        }

        if ($this->server_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_port);
        }

        if ($this->auth_players !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->auth_players);
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
        $this->server_ip = null;
        $this->server_port = null;
        $this->auth_players = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgGMSClientServerQueryResponse\Server) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->server_ip = ($message->server_ip !== null) ? $message->server_ip : $this->server_ip;
        $this->server_port = ($message->server_port !== null) ? $message->server_port : $this->server_port;
        $this->auth_players = ($message->auth_players !== null) ? $message->auth_players : $this->auth_players;
    }


}
