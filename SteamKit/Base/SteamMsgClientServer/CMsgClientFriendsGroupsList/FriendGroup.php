<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsGroupsList;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientFriendsGroupsList.FriendGroup
 */
class FriendGroup extends \Protobuf\AbstractMessage
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
     * nGroupID optional int32 = 1
     *
     * @var int
     */
    protected $nGroupID = null;

    /**
     * strGroupName optional string = 2
     *
     * @var string
     */
    protected $strGroupName = null;

    /**
     * Check if 'nGroupID' has a value
     *
     * @return bool
     */
    public function hasNGroupID()
    {
        return $this->nGroupID !== null;
    }

    /**
     * Get 'nGroupID' value
     *
     * @return int
     */
    public function getNGroupID()
    {
        return $this->nGroupID;
    }

    /**
     * Set 'nGroupID' value
     *
     * @param int $value
     */
    public function setNGroupID($value = null)
    {
        $this->nGroupID = $value;
    }

    /**
     * Check if 'strGroupName' has a value
     *
     * @return bool
     */
    public function hasStrGroupName()
    {
        return $this->strGroupName !== null;
    }

    /**
     * Get 'strGroupName' value
     *
     * @return string
     */
    public function getStrGroupName()
    {
        return $this->strGroupName;
    }

    /**
     * Set 'strGroupName' value
     *
     * @param string $value
     */
    public function setStrGroupName($value = null)
    {
        $this->strGroupName = $value;
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
            'nGroupID' => null,
            'strGroupName' => null
        ], $values);

        $message->setNGroupID($values['nGroupID']);
        $message->setStrGroupName($values['strGroupName']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FriendGroup',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'nGroupID',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'strGroupName',
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

        if ($this->nGroupID !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->nGroupID);
        }

        if ($this->strGroupName !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->strGroupName);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->nGroupID = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->strGroupName = $reader->readString($stream);

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

        if ($this->nGroupID !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->nGroupID);
        }

        if ($this->strGroupName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->strGroupName);
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
        $this->nGroupID = null;
        $this->strGroupName = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsGroupsList\FriendGroup) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->nGroupID = ($message->nGroupID !== null) ? $message->nGroupID : $this->nGroupID;
        $this->strGroupName = ($message->strGroupName !== null) ? $message->strGroupName : $this->strGroupName;
    }


}

