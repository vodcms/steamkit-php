<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgCREGetUserPublishedItemVoteDetailsResponse
 */
class CMsgCREGetUserPublishedItemVoteDetailsResponse extends \Protobuf\AbstractMessage
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
     * eresult optional int32 = 1
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * user_item_vote_details repeated message = 2
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail>
     */
    protected $user_item_vote_details = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->eresult = '2';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
    }

    /**
     * Check if 'user_item_vote_details' has a value
     *
     * @return bool
     */
    public function hasUserItemVoteDetailsList()
    {
        return $this->user_item_vote_details !== null;
    }

    /**
     * Get 'user_item_vote_details' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail>
     */
    public function getUserItemVoteDetailsList()
    {
        return $this->user_item_vote_details;
    }

    /**
     * Set 'user_item_vote_details' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail> $value
     */
    public function setUserItemVoteDetailsList(\Protobuf\Collection $value = null)
    {
        $this->user_item_vote_details = $value;
    }

    /**
     * Add a new element to 'user_item_vote_details'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail
     * $value
     */
    public function addUserItemVoteDetails(\SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail $value)
    {
        if ($this->user_item_vote_details === null) {
            $this->user_item_vote_details = new \Protobuf\MessageCollection();
        }

        $this->user_item_vote_details->add($value);
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
            'eresult' => '2',
            'user_item_vote_details' => []
        ], $values);

        $message->setEresult($values['eresult']);

        foreach ($values['user_item_vote_details'] as $item) {
            $message->addUserItemVoteDetails($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgCREGetUserPublishedItemVoteDetailsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '2'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'user_item_vote_details',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer2.CMsgCREGetUserPublishedItemVoteDetailsResponse.UserItemVoteDetail'
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

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->user_item_vote_details !== null) {
            foreach ($this->user_item_vote_details as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse\UserItemVoteDetail();

                if ($this->user_item_vote_details === null) {
                    $this->user_item_vote_details = new \Protobuf\MessageCollection();
                }

                $this->user_item_vote_details->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->user_item_vote_details !== null) {
            foreach ($this->user_item_vote_details as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->eresult = '2';
        $this->user_item_vote_details = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgCREGetUserPublishedItemVoteDetailsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->user_item_vote_details = ($message->user_item_vote_details !== null) ? $message->user_item_vote_details : $this->user_item_vote_details;
    }


}

