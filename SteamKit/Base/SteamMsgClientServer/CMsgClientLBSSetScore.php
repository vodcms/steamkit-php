<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientLBSSetScore
 */
class CMsgClientLBSSetScore extends \Protobuf\AbstractMessage
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
     * leaderboard_id optional int32 = 2
     *
     * @var int
     */
    protected $leaderboard_id = null;

    /**
     * score optional int32 = 3
     *
     * @var int
     */
    protected $score = null;

    /**
     * details optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $details = null;

    /**
     * upload_score_method optional int32 = 5
     *
     * @var int
     */
    protected $upload_score_method = null;

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
     * Check if 'leaderboard_id' has a value
     *
     * @return bool
     */
    public function hasLeaderboardId()
    {
        return $this->leaderboard_id !== null;
    }

    /**
     * Get 'leaderboard_id' value
     *
     * @return int
     */
    public function getLeaderboardId()
    {
        return $this->leaderboard_id;
    }

    /**
     * Set 'leaderboard_id' value
     *
     * @param int $value
     */
    public function setLeaderboardId($value = null)
    {
        $this->leaderboard_id = $value;
    }

    /**
     * Check if 'score' has a value
     *
     * @return bool
     */
    public function hasScore()
    {
        return $this->score !== null;
    }

    /**
     * Get 'score' value
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set 'score' value
     *
     * @param int $value
     */
    public function setScore($value = null)
    {
        $this->score = $value;
    }

    /**
     * Check if 'details' has a value
     *
     * @return bool
     */
    public function hasDetails()
    {
        return $this->details !== null;
    }

    /**
     * Get 'details' value
     *
     * @return \Protobuf\Stream
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set 'details' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setDetails($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->details = $value;
    }

    /**
     * Check if 'upload_score_method' has a value
     *
     * @return bool
     */
    public function hasUploadScoreMethod()
    {
        return $this->upload_score_method !== null;
    }

    /**
     * Get 'upload_score_method' value
     *
     * @return int
     */
    public function getUploadScoreMethod()
    {
        return $this->upload_score_method;
    }

    /**
     * Set 'upload_score_method' value
     *
     * @param int $value
     */
    public function setUploadScoreMethod($value = null)
    {
        $this->upload_score_method = $value;
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
            'leaderboard_id' => null,
            'score' => null,
            'details' => null,
            'upload_score_method' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setLeaderboardId($values['leaderboard_id']);
        $message->setScore($values['score']);
        $message->setDetails($values['details']);
        $message->setUploadScoreMethod($values['upload_score_method']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientLBSSetScore',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'leaderboard_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'score',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'details',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'upload_score_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->leaderboard_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->leaderboard_id);
        }

        if ($this->score !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->score);
        }

        if ($this->details !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->details);
        }

        if ($this->upload_score_method !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->upload_score_method);
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

                $this->leaderboard_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->score = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->details = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->upload_score_method = $reader->readVarint($stream);

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

        if ($this->leaderboard_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->leaderboard_id);
        }

        if ($this->score !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->score);
        }

        if ($this->details !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->details);
        }

        if ($this->upload_score_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->upload_score_method);
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
        $this->leaderboard_id = null;
        $this->score = null;
        $this->details = null;
        $this->upload_score_method = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientLBSSetScore) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->leaderboard_id = ($message->leaderboard_id !== null) ? $message->leaderboard_id : $this->leaderboard_id;
        $this->score = ($message->score !== null) ? $message->score : $this->score;
        $this->details = ($message->details !== null) ? $message->details : $this->details;
        $this->upload_score_method = ($message->upload_score_method !== null) ? $message->upload_score_method : $this->upload_score_method;
    }


}

