<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : cstrike/htmlmessages.proto
 */


namespace SteamKit\Base\GC\CStrike\HTMLMessages;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CStrike.HTMLMessages.CMsgLinkAtPositionResponse
 */
class CMsgLinkAtPositionResponse extends \Protobuf\AbstractMessage
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
     * browser_handle optional uint32 = 1
     *
     * @var int
     */
    protected $browser_handle = null;

    /**
     * x optional uint32 = 2
     *
     * @var int
     */
    protected $x = null;

    /**
     * y optional uint32 = 3
     *
     * @var int
     */
    protected $y = null;

    /**
     * url optional string = 4
     *
     * @var string
     */
    protected $url = null;

    /**
     * blivelink optional bool = 5
     *
     * @var bool
     */
    protected $blivelink = null;

    /**
     * binput optional bool = 6
     *
     * @var bool
     */
    protected $binput = null;

    /**
     * Check if 'browser_handle' has a value
     *
     * @return bool
     */
    public function hasBrowserHandle()
    {
        return $this->browser_handle !== null;
    }

    /**
     * Get 'browser_handle' value
     *
     * @return int
     */
    public function getBrowserHandle()
    {
        return $this->browser_handle;
    }

    /**
     * Set 'browser_handle' value
     *
     * @param int $value
     */
    public function setBrowserHandle($value = null)
    {
        $this->browser_handle = $value;
    }

    /**
     * Check if 'x' has a value
     *
     * @return bool
     */
    public function hasX()
    {
        return $this->x !== null;
    }

    /**
     * Get 'x' value
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set 'x' value
     *
     * @param int $value
     */
    public function setX($value = null)
    {
        $this->x = $value;
    }

    /**
     * Check if 'y' has a value
     *
     * @return bool
     */
    public function hasY()
    {
        return $this->y !== null;
    }

    /**
     * Get 'y' value
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set 'y' value
     *
     * @param int $value
     */
    public function setY($value = null)
    {
        $this->y = $value;
    }

    /**
     * Check if 'url' has a value
     *
     * @return bool
     */
    public function hasUrl()
    {
        return $this->url !== null;
    }

    /**
     * Get 'url' value
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set 'url' value
     *
     * @param string $value
     */
    public function setUrl($value = null)
    {
        $this->url = $value;
    }

    /**
     * Check if 'blivelink' has a value
     *
     * @return bool
     */
    public function hasBlivelink()
    {
        return $this->blivelink !== null;
    }

    /**
     * Get 'blivelink' value
     *
     * @return bool
     */
    public function getBlivelink()
    {
        return $this->blivelink;
    }

    /**
     * Set 'blivelink' value
     *
     * @param bool $value
     */
    public function setBlivelink($value = null)
    {
        $this->blivelink = $value;
    }

    /**
     * Check if 'binput' has a value
     *
     * @return bool
     */
    public function hasBinput()
    {
        return $this->binput !== null;
    }

    /**
     * Get 'binput' value
     *
     * @return bool
     */
    public function getBinput()
    {
        return $this->binput;
    }

    /**
     * Set 'binput' value
     *
     * @param bool $value
     */
    public function setBinput($value = null)
    {
        $this->binput = $value;
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
            'browser_handle' => null,
            'x' => null,
            'y' => null,
            'url' => null,
            'blivelink' => null,
            'binput' => null
        ], $values);

        $message->setBrowserHandle($values['browser_handle']);
        $message->setX($values['x']);
        $message->setY($values['y']);
        $message->setUrl($values['url']);
        $message->setBlivelink($values['blivelink']);
        $message->setBinput($values['binput']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgLinkAtPositionResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'browser_handle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'blivelink',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'binput',
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

        if ($this->browser_handle !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->browser_handle);
        }

        if ($this->x !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->x);
        }

        if ($this->y !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->y);
        }

        if ($this->url !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->url);
        }

        if ($this->blivelink !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->blivelink);
        }

        if ($this->binput !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->binput);
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

                $this->browser_handle = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->x = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->y = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->blivelink = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->binput = $reader->readBool($stream);

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

        if ($this->browser_handle !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->browser_handle);
        }

        if ($this->x !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->x);
        }

        if ($this->y !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->y);
        }

        if ($this->url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url);
        }

        if ($this->blivelink !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->binput !== null) {
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
        $this->browser_handle = null;
        $this->x = null;
        $this->y = null;
        $this->url = null;
        $this->blivelink = null;
        $this->binput = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CStrike\HTMLMessages\CMsgLinkAtPositionResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->browser_handle = ($message->browser_handle !== null) ? $message->browser_handle : $this->browser_handle;
        $this->x = ($message->x !== null) ? $message->x : $this->x;
        $this->y = ($message->y !== null) ? $message->y : $this->y;
        $this->url = ($message->url !== null) ? $message->url : $this->url;
        $this->blivelink = ($message->blivelink !== null) ? $message->blivelink : $this->blivelink;
        $this->binput = ($message->binput !== null) ? $message->binput : $this->binput;
    }


}
