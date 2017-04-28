<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgBase.CMsgGCHAccountVacStatusChange
 */
class CMsgGCHAccountVacStatusChange extends \Protobuf\AbstractMessage
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
     * steam_id optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id = null;

    /**
     * app_id optional uint32 = 2
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * rtime_vacban_starts optional uint32 = 3
     *
     * @var int
     */
    protected $rtime_vacban_starts = null;

    /**
     * is_banned_now optional bool = 4
     *
     * @var bool
     */
    protected $is_banned_now = null;

    /**
     * is_banned_future optional bool = 5
     *
     * @var bool
     */
    protected $is_banned_future = null;

    /**
     * Check if 'steam_id' has a value
     *
     * @return bool
     */
    public function hasSteamId()
    {
        return $this->steam_id !== null;
    }

    /**
     * Get 'steam_id' value
     *
     * @return int
     */
    public function getSteamId()
    {
        return $this->steam_id;
    }

    /**
     * Set 'steam_id' value
     *
     * @param int $value
     */
    public function setSteamId($value = null)
    {
        $this->steam_id = $value;
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
     * Check if 'rtime_vacban_starts' has a value
     *
     * @return bool
     */
    public function hasRtimeVacbanStarts()
    {
        return $this->rtime_vacban_starts !== null;
    }

    /**
     * Get 'rtime_vacban_starts' value
     *
     * @return int
     */
    public function getRtimeVacbanStarts()
    {
        return $this->rtime_vacban_starts;
    }

    /**
     * Set 'rtime_vacban_starts' value
     *
     * @param int $value
     */
    public function setRtimeVacbanStarts($value = null)
    {
        $this->rtime_vacban_starts = $value;
    }

    /**
     * Check if 'is_banned_now' has a value
     *
     * @return bool
     */
    public function hasIsBannedNow()
    {
        return $this->is_banned_now !== null;
    }

    /**
     * Get 'is_banned_now' value
     *
     * @return bool
     */
    public function getIsBannedNow()
    {
        return $this->is_banned_now;
    }

    /**
     * Set 'is_banned_now' value
     *
     * @param bool $value
     */
    public function setIsBannedNow($value = null)
    {
        $this->is_banned_now = $value;
    }

    /**
     * Check if 'is_banned_future' has a value
     *
     * @return bool
     */
    public function hasIsBannedFuture()
    {
        return $this->is_banned_future !== null;
    }

    /**
     * Get 'is_banned_future' value
     *
     * @return bool
     */
    public function getIsBannedFuture()
    {
        return $this->is_banned_future;
    }

    /**
     * Set 'is_banned_future' value
     *
     * @param bool $value
     */
    public function setIsBannedFuture($value = null)
    {
        $this->is_banned_future = $value;
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
            'steam_id' => null,
            'app_id' => null,
            'rtime_vacban_starts' => null,
            'is_banned_now' => null,
            'is_banned_future' => null
        ], $values);

        $message->setSteamId($values['steam_id']);
        $message->setAppId($values['app_id']);
        $message->setRtimeVacbanStarts($values['rtime_vacban_starts']);
        $message->setIsBannedNow($values['is_banned_now']);
        $message->setIsBannedFuture($values['is_banned_future']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCHAccountVacStatusChange',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'rtime_vacban_starts',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'is_banned_now',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'is_banned_future',
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

        if ($this->steam_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id);
        }

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->rtime_vacban_starts !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->rtime_vacban_starts);
        }

        if ($this->is_banned_now !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->is_banned_now);
        }

        if ($this->is_banned_future !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->is_banned_future);
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

                $this->steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->rtime_vacban_starts = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_banned_now = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_banned_future = $reader->readBool($stream);

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

        if ($this->steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->rtime_vacban_starts !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->rtime_vacban_starts);
        }

        if ($this->is_banned_now !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_banned_future !== null) {
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
        $this->steam_id = null;
        $this->app_id = null;
        $this->rtime_vacban_starts = null;
        $this->is_banned_now = null;
        $this->is_banned_future = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCHAccountVacStatusChange) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id = ($message->steam_id !== null) ? $message->steam_id : $this->steam_id;
        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->rtime_vacban_starts = ($message->rtime_vacban_starts !== null) ? $message->rtime_vacban_starts : $this->rtime_vacban_starts;
        $this->is_banned_now = ($message->is_banned_now !== null) ? $message->is_banned_now : $this->is_banned_now;
        $this->is_banned_future = ($message->is_banned_future !== null) ? $message->is_banned_future : $this->is_banned_future;
    }


}

