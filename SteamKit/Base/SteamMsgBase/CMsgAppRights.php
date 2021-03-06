<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_base.proto
 */


namespace SteamKit\Base\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.SteamMsgBase.CMsgAppRights
 */
class CMsgAppRights extends \Protobuf\AbstractMessage
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
     * edit_info optional bool = 1
     *
     * @var bool
     */
    protected $edit_info = null;

    /**
     * publish optional bool = 2
     *
     * @var bool
     */
    protected $publish = null;

    /**
     * view_error_data optional bool = 3
     *
     * @var bool
     */
    protected $view_error_data = null;

    /**
     * download optional bool = 4
     *
     * @var bool
     */
    protected $download = null;

    /**
     * upload_cdkeys optional bool = 5
     *
     * @var bool
     */
    protected $upload_cdkeys = null;

    /**
     * generate_cdkeys optional bool = 6
     *
     * @var bool
     */
    protected $generate_cdkeys = null;

    /**
     * view_financials optional bool = 7
     *
     * @var bool
     */
    protected $view_financials = null;

    /**
     * manage_ceg optional bool = 8
     *
     * @var bool
     */
    protected $manage_ceg = null;

    /**
     * manage_signing optional bool = 9
     *
     * @var bool
     */
    protected $manage_signing = null;

    /**
     * manage_cdkeys optional bool = 10
     *
     * @var bool
     */
    protected $manage_cdkeys = null;

    /**
     * edit_marketing optional bool = 11
     *
     * @var bool
     */
    protected $edit_marketing = null;

    /**
     * economy_support optional bool = 12
     *
     * @var bool
     */
    protected $economy_support = null;

    /**
     * economy_support_supervisor optional bool = 13
     *
     * @var bool
     */
    protected $economy_support_supervisor = null;

    /**
     * manage_pricing optional bool = 14
     *
     * @var bool
     */
    protected $manage_pricing = null;

    /**
     * broadcast_live optional bool = 15
     *
     * @var bool
     */
    protected $broadcast_live = null;

    /**
     * Check if 'edit_info' has a value
     *
     * @return bool
     */
    public function hasEditInfo()
    {
        return $this->edit_info !== null;
    }

    /**
     * Get 'edit_info' value
     *
     * @return bool
     */
    public function getEditInfo()
    {
        return $this->edit_info;
    }

    /**
     * Set 'edit_info' value
     *
     * @param bool $value
     */
    public function setEditInfo($value = null)
    {
        $this->edit_info = $value;
    }

    /**
     * Check if 'publish' has a value
     *
     * @return bool
     */
    public function hasPublish()
    {
        return $this->publish !== null;
    }

    /**
     * Get 'publish' value
     *
     * @return bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set 'publish' value
     *
     * @param bool $value
     */
    public function setPublish($value = null)
    {
        $this->publish = $value;
    }

    /**
     * Check if 'view_error_data' has a value
     *
     * @return bool
     */
    public function hasViewErrorData()
    {
        return $this->view_error_data !== null;
    }

    /**
     * Get 'view_error_data' value
     *
     * @return bool
     */
    public function getViewErrorData()
    {
        return $this->view_error_data;
    }

    /**
     * Set 'view_error_data' value
     *
     * @param bool $value
     */
    public function setViewErrorData($value = null)
    {
        $this->view_error_data = $value;
    }

    /**
     * Check if 'download' has a value
     *
     * @return bool
     */
    public function hasDownload()
    {
        return $this->download !== null;
    }

    /**
     * Get 'download' value
     *
     * @return bool
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Set 'download' value
     *
     * @param bool $value
     */
    public function setDownload($value = null)
    {
        $this->download = $value;
    }

    /**
     * Check if 'upload_cdkeys' has a value
     *
     * @return bool
     */
    public function hasUploadCdkeys()
    {
        return $this->upload_cdkeys !== null;
    }

    /**
     * Get 'upload_cdkeys' value
     *
     * @return bool
     */
    public function getUploadCdkeys()
    {
        return $this->upload_cdkeys;
    }

    /**
     * Set 'upload_cdkeys' value
     *
     * @param bool $value
     */
    public function setUploadCdkeys($value = null)
    {
        $this->upload_cdkeys = $value;
    }

    /**
     * Check if 'generate_cdkeys' has a value
     *
     * @return bool
     */
    public function hasGenerateCdkeys()
    {
        return $this->generate_cdkeys !== null;
    }

    /**
     * Get 'generate_cdkeys' value
     *
     * @return bool
     */
    public function getGenerateCdkeys()
    {
        return $this->generate_cdkeys;
    }

    /**
     * Set 'generate_cdkeys' value
     *
     * @param bool $value
     */
    public function setGenerateCdkeys($value = null)
    {
        $this->generate_cdkeys = $value;
    }

    /**
     * Check if 'view_financials' has a value
     *
     * @return bool
     */
    public function hasViewFinancials()
    {
        return $this->view_financials !== null;
    }

    /**
     * Get 'view_financials' value
     *
     * @return bool
     */
    public function getViewFinancials()
    {
        return $this->view_financials;
    }

    /**
     * Set 'view_financials' value
     *
     * @param bool $value
     */
    public function setViewFinancials($value = null)
    {
        $this->view_financials = $value;
    }

    /**
     * Check if 'manage_ceg' has a value
     *
     * @return bool
     */
    public function hasManageCeg()
    {
        return $this->manage_ceg !== null;
    }

    /**
     * Get 'manage_ceg' value
     *
     * @return bool
     */
    public function getManageCeg()
    {
        return $this->manage_ceg;
    }

    /**
     * Set 'manage_ceg' value
     *
     * @param bool $value
     */
    public function setManageCeg($value = null)
    {
        $this->manage_ceg = $value;
    }

    /**
     * Check if 'manage_signing' has a value
     *
     * @return bool
     */
    public function hasManageSigning()
    {
        return $this->manage_signing !== null;
    }

    /**
     * Get 'manage_signing' value
     *
     * @return bool
     */
    public function getManageSigning()
    {
        return $this->manage_signing;
    }

    /**
     * Set 'manage_signing' value
     *
     * @param bool $value
     */
    public function setManageSigning($value = null)
    {
        $this->manage_signing = $value;
    }

    /**
     * Check if 'manage_cdkeys' has a value
     *
     * @return bool
     */
    public function hasManageCdkeys()
    {
        return $this->manage_cdkeys !== null;
    }

    /**
     * Get 'manage_cdkeys' value
     *
     * @return bool
     */
    public function getManageCdkeys()
    {
        return $this->manage_cdkeys;
    }

    /**
     * Set 'manage_cdkeys' value
     *
     * @param bool $value
     */
    public function setManageCdkeys($value = null)
    {
        $this->manage_cdkeys = $value;
    }

    /**
     * Check if 'edit_marketing' has a value
     *
     * @return bool
     */
    public function hasEditMarketing()
    {
        return $this->edit_marketing !== null;
    }

    /**
     * Get 'edit_marketing' value
     *
     * @return bool
     */
    public function getEditMarketing()
    {
        return $this->edit_marketing;
    }

    /**
     * Set 'edit_marketing' value
     *
     * @param bool $value
     */
    public function setEditMarketing($value = null)
    {
        $this->edit_marketing = $value;
    }

    /**
     * Check if 'economy_support' has a value
     *
     * @return bool
     */
    public function hasEconomySupport()
    {
        return $this->economy_support !== null;
    }

    /**
     * Get 'economy_support' value
     *
     * @return bool
     */
    public function getEconomySupport()
    {
        return $this->economy_support;
    }

    /**
     * Set 'economy_support' value
     *
     * @param bool $value
     */
    public function setEconomySupport($value = null)
    {
        $this->economy_support = $value;
    }

    /**
     * Check if 'economy_support_supervisor' has a value
     *
     * @return bool
     */
    public function hasEconomySupportSupervisor()
    {
        return $this->economy_support_supervisor !== null;
    }

    /**
     * Get 'economy_support_supervisor' value
     *
     * @return bool
     */
    public function getEconomySupportSupervisor()
    {
        return $this->economy_support_supervisor;
    }

    /**
     * Set 'economy_support_supervisor' value
     *
     * @param bool $value
     */
    public function setEconomySupportSupervisor($value = null)
    {
        $this->economy_support_supervisor = $value;
    }

    /**
     * Check if 'manage_pricing' has a value
     *
     * @return bool
     */
    public function hasManagePricing()
    {
        return $this->manage_pricing !== null;
    }

    /**
     * Get 'manage_pricing' value
     *
     * @return bool
     */
    public function getManagePricing()
    {
        return $this->manage_pricing;
    }

    /**
     * Set 'manage_pricing' value
     *
     * @param bool $value
     */
    public function setManagePricing($value = null)
    {
        $this->manage_pricing = $value;
    }

    /**
     * Check if 'broadcast_live' has a value
     *
     * @return bool
     */
    public function hasBroadcastLive()
    {
        return $this->broadcast_live !== null;
    }

    /**
     * Get 'broadcast_live' value
     *
     * @return bool
     */
    public function getBroadcastLive()
    {
        return $this->broadcast_live;
    }

    /**
     * Set 'broadcast_live' value
     *
     * @param bool $value
     */
    public function setBroadcastLive($value = null)
    {
        $this->broadcast_live = $value;
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
            'edit_info' => null,
            'publish' => null,
            'view_error_data' => null,
            'download' => null,
            'upload_cdkeys' => null,
            'generate_cdkeys' => null,
            'view_financials' => null,
            'manage_ceg' => null,
            'manage_signing' => null,
            'manage_cdkeys' => null,
            'edit_marketing' => null,
            'economy_support' => null,
            'economy_support_supervisor' => null,
            'manage_pricing' => null,
            'broadcast_live' => null
        ], $values);

        $message->setEditInfo($values['edit_info']);
        $message->setPublish($values['publish']);
        $message->setViewErrorData($values['view_error_data']);
        $message->setDownload($values['download']);
        $message->setUploadCdkeys($values['upload_cdkeys']);
        $message->setGenerateCdkeys($values['generate_cdkeys']);
        $message->setViewFinancials($values['view_financials']);
        $message->setManageCeg($values['manage_ceg']);
        $message->setManageSigning($values['manage_signing']);
        $message->setManageCdkeys($values['manage_cdkeys']);
        $message->setEditMarketing($values['edit_marketing']);
        $message->setEconomySupport($values['economy_support']);
        $message->setEconomySupportSupervisor($values['economy_support_supervisor']);
        $message->setManagePricing($values['manage_pricing']);
        $message->setBroadcastLive($values['broadcast_live']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgAppRights',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'edit_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'publish',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'view_error_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'download',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'upload_cdkeys',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'generate_cdkeys',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'view_financials',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'manage_ceg',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'manage_signing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'manage_cdkeys',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'edit_marketing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'economy_support',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'economy_support_supervisor',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'manage_pricing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'broadcast_live',
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

        if ($this->edit_info !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->edit_info);
        }

        if ($this->publish !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->publish);
        }

        if ($this->view_error_data !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->view_error_data);
        }

        if ($this->download !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->download);
        }

        if ($this->upload_cdkeys !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->upload_cdkeys);
        }

        if ($this->generate_cdkeys !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->generate_cdkeys);
        }

        if ($this->view_financials !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->view_financials);
        }

        if ($this->manage_ceg !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->manage_ceg);
        }

        if ($this->manage_signing !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->manage_signing);
        }

        if ($this->manage_cdkeys !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->manage_cdkeys);
        }

        if ($this->edit_marketing !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeBool($stream, $this->edit_marketing);
        }

        if ($this->economy_support !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeBool($stream, $this->economy_support);
        }

        if ($this->economy_support_supervisor !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeBool($stream, $this->economy_support_supervisor);
        }

        if ($this->manage_pricing !== null) {
            $writer->writeVarint($stream, 112);
            $writer->writeBool($stream, $this->manage_pricing);
        }

        if ($this->broadcast_live !== null) {
            $writer->writeVarint($stream, 120);
            $writer->writeBool($stream, $this->broadcast_live);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->edit_info = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->publish = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->view_error_data = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->download = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->upload_cdkeys = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->generate_cdkeys = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->view_financials = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->manage_ceg = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->manage_signing = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->manage_cdkeys = $reader->readBool($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->edit_marketing = $reader->readBool($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->economy_support = $reader->readBool($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->economy_support_supervisor = $reader->readBool($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->manage_pricing = $reader->readBool($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->broadcast_live = $reader->readBool($stream);

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

        if ($this->edit_info !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->publish !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->view_error_data !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->download !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->upload_cdkeys !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->generate_cdkeys !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->view_financials !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->manage_ceg !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->manage_signing !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->manage_cdkeys !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->edit_marketing !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->economy_support !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->economy_support_supervisor !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->manage_pricing !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->broadcast_live !== null) {
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
        $this->edit_info = null;
        $this->publish = null;
        $this->view_error_data = null;
        $this->download = null;
        $this->upload_cdkeys = null;
        $this->generate_cdkeys = null;
        $this->view_financials = null;
        $this->manage_ceg = null;
        $this->manage_signing = null;
        $this->manage_cdkeys = null;
        $this->edit_marketing = null;
        $this->economy_support = null;
        $this->economy_support_supervisor = null;
        $this->manage_pricing = null;
        $this->broadcast_live = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgBase\CMsgAppRights) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->edit_info = ($message->edit_info !== null) ? $message->edit_info : $this->edit_info;
        $this->publish = ($message->publish !== null) ? $message->publish : $this->publish;
        $this->view_error_data = ($message->view_error_data !== null) ? $message->view_error_data : $this->view_error_data;
        $this->download = ($message->download !== null) ? $message->download : $this->download;
        $this->upload_cdkeys = ($message->upload_cdkeys !== null) ? $message->upload_cdkeys : $this->upload_cdkeys;
        $this->generate_cdkeys = ($message->generate_cdkeys !== null) ? $message->generate_cdkeys : $this->generate_cdkeys;
        $this->view_financials = ($message->view_financials !== null) ? $message->view_financials : $this->view_financials;
        $this->manage_ceg = ($message->manage_ceg !== null) ? $message->manage_ceg : $this->manage_ceg;
        $this->manage_signing = ($message->manage_signing !== null) ? $message->manage_signing : $this->manage_signing;
        $this->manage_cdkeys = ($message->manage_cdkeys !== null) ? $message->manage_cdkeys : $this->manage_cdkeys;
        $this->edit_marketing = ($message->edit_marketing !== null) ? $message->edit_marketing : $this->edit_marketing;
        $this->economy_support = ($message->economy_support !== null) ? $message->economy_support : $this->economy_support;
        $this->economy_support_supervisor = ($message->economy_support_supervisor !== null) ? $message->economy_support_supervisor : $this->economy_support_supervisor;
        $this->manage_pricing = ($message->manage_pricing !== null) ? $message->manage_pricing : $this->manage_pricing;
        $this->broadcast_live = ($message->broadcast_live !== null) ? $message->broadcast_live : $this->broadcast_live;
    }


}

