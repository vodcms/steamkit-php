<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgBase.CGCMsgGetSystemStatsResponse
 */
class CGCMsgGetSystemStatsResponse extends \Protobuf\AbstractMessage
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
     * gc_app_id optional uint32 = 1
     *
     * @var int
     */
    protected $gc_app_id = null;

    /**
     * stats_kv optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $stats_kv = null;

    /**
     * active_jobs optional uint32 = 3
     *
     * @var int
     */
    protected $active_jobs = null;

    /**
     * yielding_jobs optional uint32 = 4
     *
     * @var int
     */
    protected $yielding_jobs = null;

    /**
     * user_sessions optional uint32 = 5
     *
     * @var int
     */
    protected $user_sessions = null;

    /**
     * game_server_sessions optional uint32 = 6
     *
     * @var int
     */
    protected $game_server_sessions = null;

    /**
     * socaches optional uint32 = 7
     *
     * @var int
     */
    protected $socaches = null;

    /**
     * socaches_to_unload optional uint32 = 8
     *
     * @var int
     */
    protected $socaches_to_unload = null;

    /**
     * socaches_loading optional uint32 = 9
     *
     * @var int
     */
    protected $socaches_loading = null;

    /**
     * writeback_queue optional uint32 = 10
     *
     * @var int
     */
    protected $writeback_queue = null;

    /**
     * steamid_locks optional uint32 = 11
     *
     * @var int
     */
    protected $steamid_locks = null;

    /**
     * logon_queue optional uint32 = 12
     *
     * @var int
     */
    protected $logon_queue = null;

    /**
     * logon_jobs optional uint32 = 13
     *
     * @var int
     */
    protected $logon_jobs = null;

    /**
     * Check if 'gc_app_id' has a value
     *
     * @return bool
     */
    public function hasGcAppId()
    {
        return $this->gc_app_id !== null;
    }

    /**
     * Get 'gc_app_id' value
     *
     * @return int
     */
    public function getGcAppId()
    {
        return $this->gc_app_id;
    }

    /**
     * Set 'gc_app_id' value
     *
     * @param int $value
     */
    public function setGcAppId($value = null)
    {
        $this->gc_app_id = $value;
    }

    /**
     * Check if 'stats_kv' has a value
     *
     * @return bool
     */
    public function hasStatsKv()
    {
        return $this->stats_kv !== null;
    }

    /**
     * Get 'stats_kv' value
     *
     * @return \Protobuf\Stream
     */
    public function getStatsKv()
    {
        return $this->stats_kv;
    }

    /**
     * Set 'stats_kv' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setStatsKv($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->stats_kv = $value;
    }

    /**
     * Check if 'active_jobs' has a value
     *
     * @return bool
     */
    public function hasActiveJobs()
    {
        return $this->active_jobs !== null;
    }

    /**
     * Get 'active_jobs' value
     *
     * @return int
     */
    public function getActiveJobs()
    {
        return $this->active_jobs;
    }

    /**
     * Set 'active_jobs' value
     *
     * @param int $value
     */
    public function setActiveJobs($value = null)
    {
        $this->active_jobs = $value;
    }

    /**
     * Check if 'yielding_jobs' has a value
     *
     * @return bool
     */
    public function hasYieldingJobs()
    {
        return $this->yielding_jobs !== null;
    }

    /**
     * Get 'yielding_jobs' value
     *
     * @return int
     */
    public function getYieldingJobs()
    {
        return $this->yielding_jobs;
    }

    /**
     * Set 'yielding_jobs' value
     *
     * @param int $value
     */
    public function setYieldingJobs($value = null)
    {
        $this->yielding_jobs = $value;
    }

    /**
     * Check if 'user_sessions' has a value
     *
     * @return bool
     */
    public function hasUserSessions()
    {
        return $this->user_sessions !== null;
    }

    /**
     * Get 'user_sessions' value
     *
     * @return int
     */
    public function getUserSessions()
    {
        return $this->user_sessions;
    }

    /**
     * Set 'user_sessions' value
     *
     * @param int $value
     */
    public function setUserSessions($value = null)
    {
        $this->user_sessions = $value;
    }

    /**
     * Check if 'game_server_sessions' has a value
     *
     * @return bool
     */
    public function hasGameServerSessions()
    {
        return $this->game_server_sessions !== null;
    }

    /**
     * Get 'game_server_sessions' value
     *
     * @return int
     */
    public function getGameServerSessions()
    {
        return $this->game_server_sessions;
    }

    /**
     * Set 'game_server_sessions' value
     *
     * @param int $value
     */
    public function setGameServerSessions($value = null)
    {
        $this->game_server_sessions = $value;
    }

    /**
     * Check if 'socaches' has a value
     *
     * @return bool
     */
    public function hasSocaches()
    {
        return $this->socaches !== null;
    }

    /**
     * Get 'socaches' value
     *
     * @return int
     */
    public function getSocaches()
    {
        return $this->socaches;
    }

    /**
     * Set 'socaches' value
     *
     * @param int $value
     */
    public function setSocaches($value = null)
    {
        $this->socaches = $value;
    }

    /**
     * Check if 'socaches_to_unload' has a value
     *
     * @return bool
     */
    public function hasSocachesToUnload()
    {
        return $this->socaches_to_unload !== null;
    }

    /**
     * Get 'socaches_to_unload' value
     *
     * @return int
     */
    public function getSocachesToUnload()
    {
        return $this->socaches_to_unload;
    }

    /**
     * Set 'socaches_to_unload' value
     *
     * @param int $value
     */
    public function setSocachesToUnload($value = null)
    {
        $this->socaches_to_unload = $value;
    }

    /**
     * Check if 'socaches_loading' has a value
     *
     * @return bool
     */
    public function hasSocachesLoading()
    {
        return $this->socaches_loading !== null;
    }

    /**
     * Get 'socaches_loading' value
     *
     * @return int
     */
    public function getSocachesLoading()
    {
        return $this->socaches_loading;
    }

    /**
     * Set 'socaches_loading' value
     *
     * @param int $value
     */
    public function setSocachesLoading($value = null)
    {
        $this->socaches_loading = $value;
    }

    /**
     * Check if 'writeback_queue' has a value
     *
     * @return bool
     */
    public function hasWritebackQueue()
    {
        return $this->writeback_queue !== null;
    }

    /**
     * Get 'writeback_queue' value
     *
     * @return int
     */
    public function getWritebackQueue()
    {
        return $this->writeback_queue;
    }

    /**
     * Set 'writeback_queue' value
     *
     * @param int $value
     */
    public function setWritebackQueue($value = null)
    {
        $this->writeback_queue = $value;
    }

    /**
     * Check if 'steamid_locks' has a value
     *
     * @return bool
     */
    public function hasSteamidLocks()
    {
        return $this->steamid_locks !== null;
    }

    /**
     * Get 'steamid_locks' value
     *
     * @return int
     */
    public function getSteamidLocks()
    {
        return $this->steamid_locks;
    }

    /**
     * Set 'steamid_locks' value
     *
     * @param int $value
     */
    public function setSteamidLocks($value = null)
    {
        $this->steamid_locks = $value;
    }

    /**
     * Check if 'logon_queue' has a value
     *
     * @return bool
     */
    public function hasLogonQueue()
    {
        return $this->logon_queue !== null;
    }

    /**
     * Get 'logon_queue' value
     *
     * @return int
     */
    public function getLogonQueue()
    {
        return $this->logon_queue;
    }

    /**
     * Set 'logon_queue' value
     *
     * @param int $value
     */
    public function setLogonQueue($value = null)
    {
        $this->logon_queue = $value;
    }

    /**
     * Check if 'logon_jobs' has a value
     *
     * @return bool
     */
    public function hasLogonJobs()
    {
        return $this->logon_jobs !== null;
    }

    /**
     * Get 'logon_jobs' value
     *
     * @return int
     */
    public function getLogonJobs()
    {
        return $this->logon_jobs;
    }

    /**
     * Set 'logon_jobs' value
     *
     * @param int $value
     */
    public function setLogonJobs($value = null)
    {
        $this->logon_jobs = $value;
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
            'gc_app_id' => null,
            'stats_kv' => null,
            'active_jobs' => null,
            'yielding_jobs' => null,
            'user_sessions' => null,
            'game_server_sessions' => null,
            'socaches' => null,
            'socaches_to_unload' => null,
            'socaches_loading' => null,
            'writeback_queue' => null,
            'steamid_locks' => null,
            'logon_queue' => null,
            'logon_jobs' => null
        ], $values);

        $message->setGcAppId($values['gc_app_id']);
        $message->setStatsKv($values['stats_kv']);
        $message->setActiveJobs($values['active_jobs']);
        $message->setYieldingJobs($values['yielding_jobs']);
        $message->setUserSessions($values['user_sessions']);
        $message->setGameServerSessions($values['game_server_sessions']);
        $message->setSocaches($values['socaches']);
        $message->setSocachesToUnload($values['socaches_to_unload']);
        $message->setSocachesLoading($values['socaches_loading']);
        $message->setWritebackQueue($values['writeback_queue']);
        $message->setSteamidLocks($values['steamid_locks']);
        $message->setLogonQueue($values['logon_queue']);
        $message->setLogonJobs($values['logon_jobs']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CGCMsgGetSystemStatsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'gc_app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'stats_kv',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'active_jobs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'yielding_jobs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'user_sessions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'game_server_sessions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'socaches',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'socaches_to_unload',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'socaches_loading',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'writeback_queue',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'steamid_locks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'logon_queue',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'logon_jobs',
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

        if ($this->gc_app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->gc_app_id);
        }

        if ($this->stats_kv !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->stats_kv);
        }

        if ($this->active_jobs !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->active_jobs);
        }

        if ($this->yielding_jobs !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->yielding_jobs);
        }

        if ($this->user_sessions !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->user_sessions);
        }

        if ($this->game_server_sessions !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->game_server_sessions);
        }

        if ($this->socaches !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->socaches);
        }

        if ($this->socaches_to_unload !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->socaches_to_unload);
        }

        if ($this->socaches_loading !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->socaches_loading);
        }

        if ($this->writeback_queue !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->writeback_queue);
        }

        if ($this->steamid_locks !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->steamid_locks);
        }

        if ($this->logon_queue !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeVarint($stream, $this->logon_queue);
        }

        if ($this->logon_jobs !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeVarint($stream, $this->logon_jobs);
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

                $this->gc_app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->stats_kv = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->active_jobs = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->yielding_jobs = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->user_sessions = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_server_sessions = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->socaches = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->socaches_to_unload = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->socaches_loading = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->writeback_queue = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->steamid_locks = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->logon_queue = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->logon_jobs = $reader->readVarint($stream);

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

        if ($this->gc_app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gc_app_id);
        }

        if ($this->stats_kv !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->stats_kv);
        }

        if ($this->active_jobs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->active_jobs);
        }

        if ($this->yielding_jobs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->yielding_jobs);
        }

        if ($this->user_sessions !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->user_sessions);
        }

        if ($this->game_server_sessions !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_server_sessions);
        }

        if ($this->socaches !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->socaches);
        }

        if ($this->socaches_to_unload !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->socaches_to_unload);
        }

        if ($this->socaches_loading !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->socaches_loading);
        }

        if ($this->writeback_queue !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->writeback_queue);
        }

        if ($this->steamid_locks !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->steamid_locks);
        }

        if ($this->logon_queue !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->logon_queue);
        }

        if ($this->logon_jobs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->logon_jobs);
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
        $this->gc_app_id = null;
        $this->stats_kv = null;
        $this->active_jobs = null;
        $this->yielding_jobs = null;
        $this->user_sessions = null;
        $this->game_server_sessions = null;
        $this->socaches = null;
        $this->socaches_to_unload = null;
        $this->socaches_loading = null;
        $this->writeback_queue = null;
        $this->steamid_locks = null;
        $this->logon_queue = null;
        $this->logon_jobs = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CGCMsgGetSystemStatsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->gc_app_id = ($message->gc_app_id !== null) ? $message->gc_app_id : $this->gc_app_id;
        $this->stats_kv = ($message->stats_kv !== null) ? $message->stats_kv : $this->stats_kv;
        $this->active_jobs = ($message->active_jobs !== null) ? $message->active_jobs : $this->active_jobs;
        $this->yielding_jobs = ($message->yielding_jobs !== null) ? $message->yielding_jobs : $this->yielding_jobs;
        $this->user_sessions = ($message->user_sessions !== null) ? $message->user_sessions : $this->user_sessions;
        $this->game_server_sessions = ($message->game_server_sessions !== null) ? $message->game_server_sessions : $this->game_server_sessions;
        $this->socaches = ($message->socaches !== null) ? $message->socaches : $this->socaches;
        $this->socaches_to_unload = ($message->socaches_to_unload !== null) ? $message->socaches_to_unload : $this->socaches_to_unload;
        $this->socaches_loading = ($message->socaches_loading !== null) ? $message->socaches_loading : $this->socaches_loading;
        $this->writeback_queue = ($message->writeback_queue !== null) ? $message->writeback_queue : $this->writeback_queue;
        $this->steamid_locks = ($message->steamid_locks !== null) ? $message->steamid_locks : $this->steamid_locks;
        $this->logon_queue = ($message->logon_queue !== null) ? $message->logon_queue : $this->logon_queue;
        $this->logon_jobs = ($message->logon_jobs !== null) ? $message->logon_jobs : $this->logon_jobs;
    }


}

