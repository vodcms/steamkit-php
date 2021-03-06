<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMEnumerateUserSubscribedFiles
 */
class CMsgClientUCMEnumerateUserSubscribedFiles extends \Protobuf\AbstractMessage
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
     * start_index optional uint32 = 2
     *
     * @var int
     */
    protected $start_index = null;

    /**
     * list_type optional uint32 = 3
     *
     * @var int
     */
    protected $list_type = null;

    /**
     * matching_file_type optional uint32 = 4
     *
     * @var int
     */
    protected $matching_file_type = null;

    /**
     * count optional uint32 = 5
     *
     * @var int
     */
    protected $count = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->list_type = '1';
        $this->matching_file_type = '0';
        $this->count = '50';

        parent::__construct($stream, $configuration);
    }

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
     * Check if 'start_index' has a value
     *
     * @return bool
     */
    public function hasStartIndex()
    {
        return $this->start_index !== null;
    }

    /**
     * Get 'start_index' value
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->start_index;
    }

    /**
     * Set 'start_index' value
     *
     * @param int $value
     */
    public function setStartIndex($value = null)
    {
        $this->start_index = $value;
    }

    /**
     * Check if 'list_type' has a value
     *
     * @return bool
     */
    public function hasListType()
    {
        return $this->list_type !== null;
    }

    /**
     * Get 'list_type' value
     *
     * @return int
     */
    public function getListType()
    {
        return $this->list_type;
    }

    /**
     * Set 'list_type' value
     *
     * @param int $value
     */
    public function setListType($value = null)
    {
        $this->list_type = $value;
    }

    /**
     * Check if 'matching_file_type' has a value
     *
     * @return bool
     */
    public function hasMatchingFileType()
    {
        return $this->matching_file_type !== null;
    }

    /**
     * Get 'matching_file_type' value
     *
     * @return int
     */
    public function getMatchingFileType()
    {
        return $this->matching_file_type;
    }

    /**
     * Set 'matching_file_type' value
     *
     * @param int $value
     */
    public function setMatchingFileType($value = null)
    {
        $this->matching_file_type = $value;
    }

    /**
     * Check if 'count' has a value
     *
     * @return bool
     */
    public function hasCount()
    {
        return $this->count !== null;
    }

    /**
     * Get 'count' value
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set 'count' value
     *
     * @param int $value
     */
    public function setCount($value = null)
    {
        $this->count = $value;
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
            'start_index' => null,
            'list_type' => '1',
            'matching_file_type' => '0',
            'count' => '50'
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setStartIndex($values['start_index']);
        $message->setListType($values['list_type']);
        $message->setMatchingFileType($values['matching_file_type']);
        $message->setCount($values['count']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUCMEnumerateUserSubscribedFiles',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'start_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'list_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '1'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'matching_file_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '50'
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

        if ($this->start_index !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->start_index);
        }

        if ($this->list_type !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->list_type);
        }

        if ($this->matching_file_type !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->matching_file_type);
        }

        if ($this->count !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->count);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->start_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->list_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->matching_file_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->count = $reader->readVarint($stream);

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

        if ($this->start_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_index);
        }

        if ($this->list_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->list_type);
        }

        if ($this->matching_file_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->matching_file_type);
        }

        if ($this->count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->count);
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
        $this->start_index = null;
        $this->list_type = '1';
        $this->matching_file_type = '0';
        $this->count = '50';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMEnumerateUserSubscribedFiles) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->start_index = ($message->start_index !== null) ? $message->start_index : $this->start_index;
        $this->list_type = ($message->list_type !== null) ? $message->list_type : $this->list_type;
        $this->matching_file_type = ($message->matching_file_type !== null) ? $message->matching_file_type : $this->matching_file_type;
        $this->count = ($message->count !== null) ? $message->count : $this->count;
    }


}

